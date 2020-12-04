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
            <li><a href="/">Home</a><span class="divider">/</span></li>
            <li class="active">Blog right sidebar</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    <div class="container">
  <table class="table table-houses">
  <thead>
    <tr>
      <th scope="col" class="col-fit">#</th>
      <th scope="col" class="col-min">Адрес</th>
      <th scope="col" class="col-fit" style="white-space: initial;">Дата вступления</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="col-fit">1</th>
      <td class="col-min"><a href="#">10-й переулок, дом 117</a></td>
      <td class="col-fit">01.12.2018</td>
     
    </tr>
    <tr>
      <th scope="row" class="col-fit">2</th>
      <td class="col-min"><a href="#">Александровская ул., дом 48</a></td>
      <td class="col-fit">01.04.2015</td>
      
    </tr>
    <tr>
      <th scope="row" class="col-fit">3</th>
      <td class="col-min"><a href="#">Антона Глушко пер., дом 12</a></td>
      <td class="col-fit">01.09.2015</td>
      
    </tr>
  </tbody>
</table>
    </div>
  </section>
  </main>
  @endsection