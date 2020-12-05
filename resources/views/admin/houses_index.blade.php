
@extends('layouts.admin')

@section('content')

@include('admin.header')

<div class="container">
<div class="div" style="display: flex; justify-content: space-between;">
    <h3>Дома</h3>
    <a href="/admin/house/new"><button class="btn btn-primary">Создать</button></a> 
    
</div>
<hr>
 <div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab" class="admin-link active">В управлении</a></li>
    <li><a href="#tab2" data-toggle="tab" class="admin-link">Вышедшие из управления</a></li>
  </ul>
  <div class="tab-content">
  <div class="tab-pane active" id="tab1">
    <div class="table-responsive">
  <table class="table table-houses">
  <thead>
    <tr>
      <th scope="col" class="col-fit">#</th>
      <th scope="col" class="col-min">Адрес</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата вступления</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Управление</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($houses_alive as $ka=>$ha)
    <tr>
      <th scope="row" class="col-fit">{{$ka+1}}</th>
      <td class="col-min"><a href="/admin/house/{{$ha->id}}">{{$ha->title}}</a></td>
      <td class="col-fit">{{$ha->date_in}}</td>
       <td class="col-fit col-delete">
        <form action="/admin/house/{{$ha->id}}/delete" style="display: inline;" onsubmit="return confirm('Удалить дом {{$ha->title}}?');" method="POST">
                        @csrf
            <button type="submit" class="btn btn-outline-danger">Удалить</button>  
        </form>    
      </td>
    </tr>
    
  @endforeach   
  </tbody>
</table>
</div>

  </div>
    <div class="tab-pane" id="tab2">
<div class="table-responsive">
  <table class="table table-houses">
  <thead>
    <tr>
      <th scope="col" class="col-fit">#</th>
      <th scope="col" class="col-min">Адрес</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата вступления</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата выхода</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Управление</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($houses_not_alive as $kn=>$hn)
    <tr>
      <th scope="row" class="col-fit">{{$kn+1}}</th>
      <td class="col-min"><a href="/admin/house/{{$hn->id}}">{{$hn->title}}</a></td>
      <td class="col-fit">{{$hn->date_in}}</td>
      <td class="col-fit">{{$hn->date_out}}</td>
      <td class="col-fit col-delete">
        <form action="/admin/house/{{$hn->id}}/delete" style="display: inline;" onsubmit="return confirm('Удалить дом {{$hn->title}}?');" method="POST">
                        @csrf
            <button type="submit" class="btn btn-outline-danger">Удалить</button>  
        </form>    
      </td>
    </tr>
    
  @endforeach   
  </tbody>
</table>
</div>
    </div>
  </div>
</div>   

  
</div>

<script>

</script>

@endsection