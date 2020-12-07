@extends('layouts.app')


@section('content')
<main style="margin-top: 100px;">
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
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="/">Главная</a><span class="divider">/</span></li>
            <li><a href="/houses">Дома</a><span class="divider">/</span></li>
            <li class="active">About</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
      <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="heading">
              <h4>{{$house->title}}</h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
            @if ($house->thumb!='')
              <div class="span6">
                <!-- start flexslider -->
                <div class="flexslider">
                  <ul class="slides">
                    <li style="display: block;">
                    <a href="{{$house->thumbl}}" target="_blank">
                      <img src="{{$house->thumb}}" alt="" />
                      </a>
                      <div>
                      
                      </div>
                    </li>                 
                  </ul>
                </div>
                <!-- end flexslider -->
                
              </div>
              <div class="span6">
                <div class="project-widget">
                 <!-- <h4><i class="icon-48 icon-beaker"></i> Info</h4>-->
                  <ul class="project-detail">
                    <li><label>Project name :</label> Very nice project</li>
                    <li><label>Category :</label> Web design</li>
                    <li><label>Project date :</label> 2 March 2013</li>
                    <li><label>Project link :</label> <a href="#">www.somelink.com</a></li>
                    <li><label>Project name :</label> Very nice project</li>
                    <li><label>Category :</label> Web design</li>
                    <li><label>Project name :</label> Very nice project</li>
                   
                  </ul>
                </div>
              </div>
              <div class="span8">
                <div class="tiny-text">
                  {!! $house->content !!}
                </div>
                
              </div>
                <div style="clear: both"></div>           
                
               @else
               <div class="span6">
                <div class="tiny-text">
                 {!! $house->content !!}
                </div>
              </div>
              
                
                <div class="span6">
                <div class="project-widget">
                 <!-- <h4><i class="icon-48 icon-beaker"></i> Info</h4>-->
                  <ul class="project-detail">
                    <li><label>Project name :</label> Very nice project</li>
                    <li><label>Category :</label> Web design</li>
                    <li><label>Project date :</label> 2 March 2013</li>
                    <li><label>Project link :</label> <a href="#">www.somelink.com</a></li>
                    <li><label>Project name :</label> Very nice project</li>
                    <li><label>Category :</label> Web design</li>
                    <li><label>Project name :</label> Very nice project</li>
                   
                  </ul>
                </div>
               
              </div>
               
            @endif
            <?php  $imgs_arr = json_decode($house->imgs) ?>
            @if(count($imgs_arr))
            <br>
            <br>
            <div class="span12">
              <h2>Галерея</h2>
               <hr>
            </div>
           
              <br>
            <div class="span12">
                <div class="owl-carousel">  
                    @foreach($imgs_arr as $imurl)
                      
                   
                    <div class="item-house"><a href="{{$imurl}}" target="_blank"><img src="{{$imurl}}" alt="" /></a></div>
                     @endforeach
                </div>
                
              </div>

            </div>
            @endif

           
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>
  </main>

  <script>
  
  $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop: {{count($imgs_arr)>5? 'true' : 'false'}},
      margin:20,
      nav:true,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:4
          },
          1000:{
              items:5
          }
      }
    })
  })
  
   </script>
  @endsection