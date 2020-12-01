@extends('layouts.app')


@section('content')
<main style="margin-top: 100px;">
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Overview</h3>
              <p>
                Overview of the template, its contents, and how to get started with serenity template..
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      
      <div class="span10 offset1">
        <!-- Download
        ================================================== -->
        

        <!-- Contents
        ================================================== -->
        <section id="contents" class="doc tiny-text" style="padding-top: 10px;">
        {!! $page->content !!}
        </section>
      </div>
    </div>
  </div>
</main>
@endsection