<div style="padding-top: 50px; margin-top: auto;">
<footer class="footer">
    <div class="container">
      <div class="row">
      <div class="span4">
          <div class="widget">
            <!-- logo -->
           <a class="brand logo" href="/">
            
            <div class="brand-text brand-text-footer">
              Уютный <span class="brand-char">М</span>ир
            </div></a>
            <!-- end logo -->
            <?php $contacts = \App\ContactsPage::all()->first(); ?>
            <address>
							<strong>ООО «Уютный Мир»</strong><br>
              {{$contacts->addr}} <br>
							 <!--8895 Somename Ave, Suite 600<br> 
							 San Francisco, CA 94107<br>
							<abbr title="Tel">T:</abbr>--> 
              {{$contacts->phone1}}
						</address>
          </div>
        </div>
        <!--
        <div class="span9">
          <div class="widget">
            <h5>Browse pages</h5>
            <ul class="regular">
              <li><a href="#">Work for us</a></li>
              <li><a href="#">Creative process</a></li>
              <li><a href="#">Case study</a></li>
              <li><a href="#">Scaffold awwards</a></li>
              <li><a href="#">Meet the team</a></li>
            </ul>
          </div>
        </div> -->
       <!-- <div class="span4">
          <div class="widget">
            <h5>Recent blog posts</h5>
            <ul class="regular">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Mea malis nominavi insolens ut</a></li>
              <li><a href="#">Minim timeam has no aperiri sanctus ei mea per pertinax</a></li>
              <li><a href="#">Te malorum dignissim eos quod sensibus</a></li>
            </ul>
          </div>
        </div> -->
        
      </div>
    </div>
    <div class="verybottom">
      <div class="container">
        <div class="row">
         
          <div class="span6">
            <div class="credits">
              
              <!--  All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity-->
              
              Разработано командной <a href="https://nek-web.ru/">NekWeb</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>