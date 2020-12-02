
@extends('layouts.admin')

@section('content')

@include('admin.header')

<div class="container">
<div class="div" style="display: flex; justify-content: space-between;">
    <h3>Новости</h3>
    <a href="/admin/news/new"><button class="btn btn-primary">Создать</button></a> 
    
</div>
    <hr>
    
@foreach ($news as $n)
    <div class="news row">
        <h4 class="col-12">{{$n->title}}</h4>     
         @if($n->thumb != '')
            <div class="col-lg-4 order-lg-2">
            <img src="{{$n->thumb}}" alt="" class="news-admin-img">
        </div>
        @endif
        <div class="col-lg-8 order-lg-1">
            <p>{{$n->mydate}}</p>
            <a href="#" class="news-hidden-toggle" style="padding-bottom: 5px; display: block;">+Еще</a>
           
            <div class="news-hidden-text" style="display: none;">
                {!! $n->content !!}
            </div>
             
            
            <div style="clear: both; padding-top: 15px;">
                <a href="/admin/news/{{$n->id}}"><button class="btn btn-primary">Редактировать</button></a> 
                <form action="/admin/news/{{$n->id}}/delete" style="display: inline;" onsubmit="return confirm('Удалить новость {{$n->title}}?');" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Удалить</button>  
                </form>    
            </div>
              
        </div>
        
    </div>
    <br>
@endforeach 
  <div style="display: flex; justify-content: center;">
    {{$news->links()}}
  </div>
    
</div>

<script>

document.querySelectorAll('.news').forEach(function(el){
    var flag = true;
    el.querySelector('.news-hidden-toggle').addEventListener('click', function(e){
        e.preventDefault();
        if(flag) {
            el.querySelector('.news-hidden-toggle').text = "-Еще";
            el.querySelector('.news-hidden-text').style.display = "block";
        }
        else {
            el.querySelector('.news-hidden-toggle').text = "+Еще";
            el.querySelector('.news-hidden-text').style.display = "none";
        }
        flag = !flag
    })
    console.log(el);
});
</script>

@endsection