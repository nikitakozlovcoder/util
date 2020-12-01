@extends('layouts.app')
<!--@section('title', 'Page Title')-->

@section('content')
	<section id="intro" style=" width: 100vw; margin-top: 85px; position: absolute;">
    	<div class="jumbotron masthead">
      <div class="container">
        
        
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in" style="display: block">
                      <h2 style="padding: 5px 10px;">Уютный Дом</h2>
                      <br>
                      <h3>Corporate business</h3>
                      <p class="home-big-text">
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                     <!-- <a class="btn btn-success" href="#">Learn more &raquo;</a>-->
                    </div>
                    <img class="slider_img animate-in home-big-img" src="assets/img/city.png" alt="" >
                  </li>
                  <!-- Layer 2 -->
                
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <main style="margin-top: 570px;" class="home-main">
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-suitcase left active"></i>
          <h5>Responsive bootstrap</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-plane left"></i>
          <h5>Lot of features</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-leaf left"></i>
          <h5>Multipurpose template</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-wrench left"></i>
          <h5>With latest technology</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h3>Lorem ipsum dolor sit amet.</h2>
                  <p>
                    Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                  </p>
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color span4 offset4" href="/contacts">
							 Наши контакты </a>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
      <div class="row">
        <div class="home-posts">
          <div class="span12">
            <h3>Свежие новости</h3>
          </div>
          <div class="span4">
            <div class="post-image">
              <a href="post_right_sidebar.html">
					<img src="assets/img/dummies/blog1.jpg" alt="">
					</a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 <br>
					2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">This is a standard post</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span4">
            <div class="post-image">
              <a href="#"><img src="{{asset('assets/img/news.png')}}" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Example post image format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span4">
            <div class="post-image">
              <a href="#"><img src="assets/img/dummies/blog2.jpg" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-facetime-video left"></i></a>
              <span class="date">Sep 17 2011</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Amazing video post format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
