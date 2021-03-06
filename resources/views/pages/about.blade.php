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
            <li class="active">О нас</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row well-row">
        <div class="span4">
          <div class="well" style="padding-top: 35px;">
            <div class="centered">
             <!-- <i class="icon-circled icon-64 icon-suitcase active"></i> -->
              <h4>{{$page->title1}}</h4>
              <div class="dotted_line">
              </div>
              <p>
               {{$page->data1}}
              </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="well" style="padding-top: 35px;">
            <div class="centered">
               <!--<i class="icon-circled icon-64 icon-leaf active"></i>-->
              <h4>{{$page->title2}}</h4>
              <div class="dotted_line">
              </div>
              <p>
               {{$page->data2}}
               </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="well" style="padding-top: 35px;">
            <div class="centered">
               <!--<i class="icon-circled icon-64 icon-coffee active"></i>-->
              <h4>{{$page->title3}}</h4>
              <div class="dotted_line">
              </div>
              <p>
               {{$page->data3}}
               </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="divider">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span12 tiny-text">
          {!!$page->content!!}  
          
          <!-- start: Accordion 
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						<i class="icon-minus"></i> Database management</a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						<i class="icon-plus"></i> UI development</a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						<i class="icon-plus"></i> Social media</a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>-->
          <!--end: Accordion -->
        </div>
      </div>
      <div style="clear:both;"></div>
    </div>
  </section>
  </main>
  @endsection