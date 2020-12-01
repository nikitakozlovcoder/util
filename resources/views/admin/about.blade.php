
@extends('layouts.admin')

@section('content')

@include('admin.header')

<div class="container">
<h3>О нас</h3>
<hr>
<form action="/admin/about" method="POST">
  @csrf
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab" class="admin-link active">Текст</a></li>
    <li><a href="#tab2" data-toggle="tab" class="admin-link">Карточки</a></li>
  </ul>
  <div class="tab-content">
  <div class="tab-pane active" id="tab1">
    <br>
    <textarea name="content" id="edit">{{$page->content}}</textarea>

  </div>
    <div class="tab-pane" id="tab2">

      

       <br> 
    <h5>Карточка 1</h5>
    <hr>
    <div class="form-group">
        <label for="title1">Заголовок</label>
        <input type="text" class="form-control" id="title1" name="title1" value="{{$page->title1}}">
    </div>
    <div class="form-group">
        <label for="text1">Текст</label>
        <textarea class="form-control" id="text1" rows="3" name="text1">{{$page->data1}}</textarea>
    </div>
    
    <h5>Карточка 2</h5>
    <hr>
    <div class="form-group">
        <label for="title2">Заголовок</label>
        <input type="text" class="form-control" id="title2" name="title2" value="{{$page->title2}}">
    </div>
    <div class="form-group">
        <label for="text2">Текст</label>
        <textarea class="form-control" id="text2" rows="3" name="text2">{{$page->data2}}</textarea>
    </div>
    

    <h5>Карточка 3</h5>
    <hr>
    <div class="form-group">
        <label for="title3">Заголовок</label>
        <input type="text" class="form-control" id="title3" name="title3" value="{{$page->title3}}">
    </div>
    <div class="form-group">
        <label for="text3">Текст</label>
        <textarea class="form-control" id="text3" rows="3" name="text3">{{$page->data3}}</textarea>
    </div>
    </div>
  </div>
</div>
<br>
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