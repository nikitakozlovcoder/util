
@extends('layouts.admin')

@section('content')

@include('admin.header')
<link href="{{ asset('jqui/jquery-ui.theme.min.css') }}" rel="stylesheet">
<link href="{{ asset('jqui/jquery-ui.structure.min.css') }}" rel="stylesheet">


<script src="{{asset('jqui/jquery-ui.min.js')}}" ></script>
<script src="{{asset('jqui/datepicker-ru.js')}}" ></script>
<div class="container">
<h3>Дом</h3>
<hr>
<form action="" method="POST" autocomplete="off"> 
  @csrf
    <input id="thumb_real" class="form-control" type="text" name="thumb" value='{{$house->thumb}}' hidden>
    <input id="imgs_real" class="form-control" type="text" name="imgs"  value='{{$house->imgs}}' hidden>
    <br>
    <div class="form-group">
        <label for="title">Адрес</label>
        <input type="text" class="form-control" id="title" placeholder="Введите адрес" name="title" required>
        
    </div>
    <br>
    
    <label for="thumb">Главное изображение</label>
    <div class="input-group">
          <div class="admin-imgs" id="thumb_wrap">      
          </div>  
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" class="btn btn-primary text-white">
              <i class="fa fa-picture-o"></i> Выбор
            </a>             
          </span>
          <input id="thumbnail" class="form-control" type="text" name="" hidden>      
    </div>
    
    <br>
    <label for="thumb">Изображения</label>
    
    <div class="input-group">
          <div class="admin-imgs" id="imgs_wrap">
               
          </div>  
          
          <span class="input-group-btn">
            <a id="lfm2" data-input="thumbnail2" class="btn btn-primary text-white">
              <i class="fa fa-picture-o"></i> Выбор
            </a>             
          </span>
          <input id="thumbnail2" class="form-control" type="text" name="" hidden>      
    </div>
    <br>
    <div class="form-group">
        <label for="date_in">Дата принятия в управление</label>
        <input type="text" class="form-control" id="date_in" placeholder="Введите дату" name="date_in"  required>      
    </div>
     <div class="form-group">
                            <div class="">
                                <div class="custom-control custom-checkbox custom-checkbox-green">
                                    <input class="custom-control-input custom-control-input-green" type="checkbox" name="alive" id="alive" {{$house->alive ? 'checked' : ''}}>

                                    <label class="custom-control-label" for="alive">
                                        В управлении?
                                    </label>
                                </div>
                            </div>
                        </div>
     <div class="form-group">
        <label for="date_out">Дата выхода из управления</label>
        <input type="text" class="form-control" id="date_out" placeholder="Введите дату" name="date_out"  required>      
    </div>
    <div class="form-group">
        <label for="date_built">Год постройки</label>
        <input type="text" class="form-control" id="date_built" placeholder="Введите год" name="date_built"  required>      
    </div>
    <div class="form-group">
        <label for="cad_number">Кадастровый номер земельного участка</label>
        <input type="text" class="form-control" id="cad_number" placeholder="Введите кадастровый номер" name="cad_number"  required>      
    </div>
     <div class="form-group">
        <label for="area_wide">Общая площадь</label>
        <input type="number" class="form-control" id="area_wide" placeholder="Введите площадь" name="area_wide"  required>      
    </div>
    <div class="form-group">
        <label for="area_small">Площадь земельного участка</label>
        <input type="number" class="form-control" id="area_small" placeholder="Введите площадь" name="area_small"  required>      
    </div>
    <div class="form-group">
        <label for="material_wall">Материал стен</label>
        <input type="text" class="form-control" id="material_wall" placeholder="Введите материал" name="material_wall"  required>      
    </div>
    <div class="form-group">
        <label for="material_floor">Материал перекрытий</label>
        <input type="text" class="form-control" id="material_floor" placeholder="Введите материал" name="material_floor"  required>      
    </div>
    <div class="form-group">
        <label for="edit">Текст</label>
        <textarea name="content" id="edit"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    
</form>
</div>

<script src="{{asset('tinymce/tinymce.min.js')}}" ></script>
<script src="{{asset('js/stand-alone-button.js')}}"></script>
<script type="text/javascript">

const input1 = document.getElementById('thumbnail');
const descriptor1 = Object.getOwnPropertyDescriptor(Object.getPrototypeOf(input1), 'value');

const input2 = document.getElementById('thumbnail2');
const descriptor2 = Object.getOwnPropertyDescriptor(Object.getPrototypeOf(input2), 'value');

var imgs_data = {
    'thumb': '',
    'imgs': []
}
Object.defineProperty(input1, 'value', {
    set: function(t) {
      
        if(arguments[0] != '')
        {
            var str = ","+arguments[0];
            var arr = str.split(",h");
           
            imgs_data['thumb'] = "h"+arr[1];

            draw_imgs(imgs_data);
        }
        
        return descriptor1.set.apply(this, arguments);
    },
    get: function() {
      return descriptor1.get.apply(this);
    }
});

Object.defineProperty(input2, 'value', {
    set: function(t) {
      
        if(arguments[0] != '')
        {
            var str = ","+arguments[0];
            var arr = str.split(",h");
            arr.shift();
            arr.forEach(function(el){
                
                    imgs_data['imgs'].push("h"+el);
            });
            
            draw_imgs(imgs_data);
        }
        
        return descriptor2.set.apply(this, arguments);
    },
    get: function() {
      return descriptor2.get.apply(this);
    }
});












function del_thumb()
{
    imgs_data['thumb'] = '';
    draw_imgs(imgs_data);
}
function del_imgs(src)
{
    var index = imgs_data['imgs'].indexOf(src);
    if (index !== -1)
        imgs_data['imgs'].splice(index, 1);
    draw_imgs(imgs_data);    
}

function draw_imgs(imgs_data)
{
    
    var imgs_wrap = $('#imgs_wrap')[0];
    var thumb_wrap = $('#thumb_wrap')[0];
    imgs_wrap.innerHTML = '';
    thumb_wrap.innerHTML = '';
    if(imgs_data['thumb'] != '')
    {
        thumb_wrap.innerHTML = `
         <div class="admin-img_wrap">
                <img src="${imgs_data['thumb']}" alt="">
                <div class="admin-img_del" onclick="del_thumb()"><div>-</div></div>
            </div> 
        `;
    }
    imgs_data['imgs'].forEach(function(el){       
        imgs_wrap.innerHTML += `
            <div class="admin-img_wrap">
                <img src="${el}" alt="">
                <div class="admin-img_del" onclick="del_imgs('${el}')"><div>-</div></div>
            </div> 
        `;
    })
    
}

var thumb_real = $('#thumb_real')[0];
var imgs_real = $('#imgs_real')[0];

imgs_data['thumb'] = thumb_real.value;
imgs_data['imgs'] = JSON.parse(imgs_real.value);
console.log(imgs_data);
draw_imgs(imgs_data);
$( function() {
    $("#date_in").datepicker();
    $("#date_out").datepicker();
  });
  tinyMCE.create('tinymce.plugins.MailToPlugin', {

  init : function(ed, url) {
   ed.addCommand('mceMailTo', function() {
    var linkText = ed.selection.getContent({format : 'text'});
    var newText = `<a href='mailto:${linkText}'>${linkText}</a>`
    ed.execCommand('mceInsertContent', false, newText);
   });
    $('#lfm').filemanager('file');
    $('#lfm2').filemanager('file');
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
    title : 'Номер телефона',
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