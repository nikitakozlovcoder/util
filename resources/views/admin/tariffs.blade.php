
@extends('layouts.admin')

@section('content')

@include('admin.header')

<div class="container">
<h3>Тарифы</h3>
<hr>
<form action="/admin/tariffs" method="POST">
  @csrf
    <br>
    <textarea name="content" id="edit">{{$page->content}}</textarea>
    <br>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    
</form>
</div>

<script src="{{asset('tinymce/tinymce.min.js')}}" ></script>
<script type="text/javascript">

  tinyMCE.create('tinymce.plugins.MailToPlugin', {

  init : function(ed, url) {
   ed.addCommand('mceMailTo', function() {
    var linkText = ed.selection.getContent({format : 'text'});
    var newText = `<a href='mailto:${linkText}'>${linkText}</a>`
    ed.execCommand('mceInsertContent', false, newText);
   });

   // Register example button
   ed.addButton('mailto', {
    title : 'Почтовый ящик',
    cmd : 'mceMailTo',
    image : '{{asset("assets/img/mail.png")}}'
   });
  }
 });
  tinyMCE.create('tinymce.plugins.TelToPlugin', {

  init : function(ed, url) {
   ed.addCommand('mceTelTo', function() {
    var linkText = ed.selection.getContent({format : 'text'});
    var newText = `<a href='tel:${linkText}'>${linkText}</a>`
    ed.execCommand('mceInsertContent', false, newText);
   });

   // Register example button
   ed.addButton('telto', {
    title : 'номер телефона',
    cmd : 'mceTelTo',
    image : '{{asset("assets/img/tel.png")}}'
   });
  }
 });
 // Register plugin with a short name
  tinyMCE.PluginManager.add('mailto', tinymce.plugins.MailToPlugin);
  tinyMCE.PluginManager.add('telto', tinymce.plugins.TelToPlugin);

  function linkListener(dialog)
  {
    console.log("detach");
    var inps = $('.mce-window input');
    inps[1].value = inps[0].value.split('/').pop();
  }

  var route_prefix = "/filemanager";

  var editor_config = {
          setup: function(editor) {
                editor.on('CloseWindow', function(dialog) {
                  linkListener(dialog);
                });
        },
        path_absolute : "",
        fontsize_formats: "8pt 11pt 10pt 12pt 14pt 18pt 24pt 36pt",
        selector: "textarea[name=content]",
        plugins: [
          "link image table fullscreen hr wordcount mailto telto paste textcolor lists"
        ],
        paste_as_text: true,
        menubar: `change view insert format table`,
        toolbar: `fullscreen | undo redo | styleselect | bold italic | forecolor backcolor | alignleft
                  aligncenter alignright alignjustify |
                  bullist numlist outdent indent | link image | hr mailto  telto | fontsizeselect | numlist bullist`,
        language: 'ru',
        //toolbar: 'table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
        relative_urls: false,
        height: 400,
        width : "100%",
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Files";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

    tinymce.init(editor_config);


</script>
@endsection