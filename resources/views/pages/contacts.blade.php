@extends('layouts.app')


@section('content')
<main style="margin-top: 100px;">

   <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="/">Главная</a><span class="divider">/</span></li>
            <li class="active">Контакты</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
   <section id="maincontent" style="padding-top: 10px;">
    <div class="container">
      <div class="row">
        <div class="span5">
          <aside>
            <div class="widget">
              <h6>Общество с ограниченной ответственностью <br> «Уютный Мир»</h4>
              <ul>
                <li><label><strong>Юридический (фактический и почтовый) адрес: </strong></label>
                  <div>
                   {{$page->addr}}
                  </div>
                </li>
                <div style="clear:both;"></div>
                <li><label><strong>Телефон/факс: </strong></label>
                  <div>
                     {{$page->phone1}}
                  </div>
                </li>
                 <li><label><strong>Телефон аварийной службы: </strong></label>
                  <div>
                    {{$page->phone2}}
                  </div>
                </li>
                <div style="clear:both;"></div>
                <li><label><strong>Email: </strong></label>
                  <div>
                   {{$page->email}}
                  </div>
                </li>
                <div style="clear:both;"></div>
                <li><label><strong>ОГРН: </strong></label>
                  <div>
                    {{$page->ogrn}}
                  </div>
                </li>
                <div style="clear:both;"></div>
                <li><label><strong>ИНН/КПП: </strong></label>
                  <div>
                    {{$page->inn}}
                  </div>
                </li>
                <div style="clear:both;"></div>
                <li><label><strong>Расчетный счет: </strong></label>
                  <div>
                   {{$page->rs}}
                  </div>
                </li>
                <div style="clear:both;"></div>
                 <li><label><strong>Генеральный директор: </strong></label>
                  <div>
                    {{$page->head}}
                  </div>
                </li>
                <div style="clear:both;"></div>
              </ul>
            </div>
            @if($page->show_social)
            <div class="widget">
              <h4>Социальные сети</h4>
              <div class="tiny-text">{!! $page->social !!}</div>

              <!--
              <ul class="social-links">
                <li><a href="#" title="Twitter"><i class="icon-rounded icon-32 icon-twitter"></i></a></li>
                <li><a href="#" title="Facebook"><i class="icon-rounded icon-32 icon-facebook"></i></a></li>
                <li><a href="#" title="Google plus"><i class="icon-rounded icon-32 icon-google-plus"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="icon-rounded icon-32 icon-linkedin"></i></a></li>
                <li><a href="#" title="Pinterest"><i class="icon-rounded icon-32 icon-pinterest"></i></a></li>
              </ul> -->
            </div>
            <div style="clear:both;"></div>
            @endif
          </aside>
        </div>
        <div class="span7">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d677.4427308003629!2d38.86034572924698!3d47.22106440953773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e157c87ddefee3%3A0x7ba1eaacf4be8077!2z0YPQuy4g0KHRi9C30YDQsNC90L7QstCwLCAyMCwg0KLQsNCz0LDQvdGA0L7Qsywg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMzQ3OTAw!5e0!3m2!1sru!2sru!4v1607605133185!5m2!1sru!2sru" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>

          <div class="spacer30"></div>
          <div class="tiny-text">{!! $page->content !!}</div>

         <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="span4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

              <div class="span4 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" type="submit">Send message</button>
                </div>
              </div>
            </div>
          </form>-->

        </div>
        <div style="clear:both;"></div>
      </div>
    </div>
  </section>
</main>
@endsection