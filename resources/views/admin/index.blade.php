@extends('layouts.admin')

@section('content')

@include('admin.header')

<div class="container">
<h3>Страницы</h3>
<hr>
<ul class="nav nav-pills nav-stacked" style="display: block;">
  <li><a href="/admin/about" class="admin-link">О нас</a></li>
  <li><a href="/admin/tariffs" class="admin-link">Тарифы</a></li> 
  <li><a href="/admin/news" class="admin-link">Новости</a></li>   
</ul>
</div>

<!--<textarea name="content" id="edit"></textarea>
<script src="{{asset('tinymce/tinymce.min.js')}}" ></script>
<script type="text/javascript">


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
          "link image table fullscreen hr wordcount"
        ],
        menubar: `change view insert format table`,
        toolbar: `fullscreen | undo redo | styleselect | bold italic | alignleft
                  aligncenter alignright alignjustify |
                  bullist numlist outdent indent | link image | hr `,
        language: 'ru',
        //toolbar: 'table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
        relative_urls: false,
        height: 400,
        width : "80%",
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


</script>-->
@endsection
