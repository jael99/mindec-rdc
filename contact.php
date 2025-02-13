<?php
$page = "Contact";
  require_once('header.php');
  
 ?>
     <!-- subheader -->
      <section id="subheader">
        <br><br>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>
                Nous contacter
              </h1>
            </div>
            
            <!-- devider -->
            <div class="col-md-12">
              <div class="devider-page">
                <div class="devider-img-right">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <ul class="subdetail">
                <li>
                  <a href="index.php">Accueil</a>
                </li>

                <li class="sep">/
                </li>

                <li>Contact
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- subheader end -->
      
      <!-- section contact -->
      <section aria-label="contact" class="whitepage">
        <div class="container">
          <div class="row">
          
            <div class="no-gutter">
            
              <!-- map -->
              <div class="col-md-9 col-sm-7">
                <div class="onStep" data-animation="fadeInLeft" data-time="300" id="map">
                </div>
              </div>
              <!-- map end -->
              
              <!-- address -->
              <div class="col-md-3 col-sm-5">
                <div class="wrapaddres onStep" data-animation="fadeInRight" data-time="600">
                  <address>
                    <span><strong>ADRESSE</strong><br>
                    6e Niveau <br>
                   Immeuble du Gouvernement</span> 
                    <span class="text-uppercase"><strong>Téléphone</strong><br>
                    (+243) 898 134 348 </span> 
                    <span><strong>EMAIL</strong><br>
                    <span class="">
                    <a href="#">mindecri@gmail.com</a></span>
                  </address>
                </div>
              </div>
              <!-- address end -->
            </div>
            
          </div>
        </div>
      </section>
      <!-- section contact end -->
      
  <?php
  require_once('footer.php');
 ?>