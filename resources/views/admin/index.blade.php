@extends('layouts.admin')

@section('content')
admin!
<textarea name="content" id="edit"></textarea>
<script src="{{asset('tinymce/tinymce.min.js')}}" ></script>

<script type="text/javascript">



var route_prefix = "/filemanager";

var editor_config = {
      path_absolute : "",
      selector: "textarea[name=content]",
      plugins: [
        "link image table fullscreen"
      ],
      toolbar: `fullscreen | undo redo | styleselect | bold italic | alignleft
                aligncenter alignright alignjustify |
                bullist numlist outdent indent | link image`,
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
          cmsURL = cmsURL + "&type=Images";
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
