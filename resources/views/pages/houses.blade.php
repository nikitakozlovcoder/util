@extends('layouts.app')


@section('content')
<main style="margin-top: 100px;">
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Blog right sidebar</h3>
              <p>
                Lorem ipsum dolor sit amet, modus salutatus honestatis ex mea. Sit cu probo putant. Nam ne impedit atomorum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="/">Главная</a><span class="divider">/</span></li>
            <li class="active">Blog right sidebar</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    <div class="container">
  <div class="table-responsive">
  <table class="table table-houses">
  <thead>
    <tr>
      <th scope="col" class="col-fit">#</th>
      <th scope="col" class="col-min">Адрес</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата вступления</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($houses_alive as $ka=>$ha)
    <tr>
      <th scope="row" class="col-fit">{{$ka+1}}</th>
      <td class="col-min"><a href="/house/{{$ha->id}}">{{$ha->title}}</a></td>
      <td class="col-fit">{{$ha->date_in}}</td>
    </tr>
  @endforeach   
  </tbody>
</table>
</div>
@if(count($houses_not_alive))
<br>
<a href="#" id='table_toggle'>
+ Вышедшие из управления
</a>
<div class="table-responsive" id="table-out" style="display: none;">
  <table class="table table-houses">
  <thead>
    <tr>
      <th scope="col" class="col-fit">#</th>
      <th scope="col" class="col-min">Адрес</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата вступления</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата выхода</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($houses_not_alive as $kn=>$hn)
    <tr>
      <th scope="row" class="col-fit">{{$kn+1}}</th>
      <td class="col-min"><a href="/house/{{$hn->id}}">{{$hn->title}}</a></td>
      <td class="col-fit">{{$hn->date_in}}</td>
      <td class="col-fit">{{$hn->date_out}}</td>
    </tr>
    
  @endforeach   
  </tbody>
</table>
</div>
@endif
</div>
</section>
</main>
<script>


var out = document.getElementById('table-out');
var table_out_toggle = document.getElementById('table_toggle');
if(table_out_toggle){
var flag = true;
table_out_toggle.addEventListener('click', function(e){
  e.preventDefault();
  if(flag){
    table_out_toggle.innerHTML = '- Вышедшие из управления';
    out.style.display = 'block';
  }
  else{
    table_out_toggle.innerHTML = '+ Вышедшие из управления';
    out.style.display = 'none';
  }
  flag = !flag;
})
}

</script>
@endsection

