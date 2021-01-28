@extends('layouts.app')


@section('content')
<main style="margin-top: 100px;">
<!--
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>About us</h3>
              <p>
                Lorem ipsum dolor sit amet, modus salutatus honestatis ex mea. Sit cu probo putant. Nam ne impedit atomorum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
   <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="/">Главная</a><span class="divider">/</span></li>
            <li class="active">Тарифы</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      
      <div class="span12">
        <!-- Download
        ================================================== -->
        

        <!-- Contents
        ================================================== -->
        <section id="contents" class="doc tiny-text" style="padding-top: 10px;">
        {!! $page->content !!}
        </section>
      </div>
      <div style="clear:both;"></div>
    </div>
  </div>
</main>
@endsection