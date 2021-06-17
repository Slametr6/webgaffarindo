    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= base_url('assets/images/page-titles/').$bg->BgContact;?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Contact Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================= 
            Google Map
    =========================  -->
    <!-- <section id="googleMap" class="google-map p-0">
      <div id="map"></div>
      <script src="<?= base_url();?>assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section> -->
		<!-- /.GoogleMap -->

    <!-- ==========================
       Contact panels
    ============================ -->
    <section id="contactPanels" class="contact-panels text-center pb-70">
      <div class="container">
        <div class="row">
          <!-- Contact panel #1 -->
					<?php foreach ($cabang as $br) { ?>
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-panel">
              <div class="contact__panel-header">
                <h4 class="contact__panel-title"><?= $br->Branch;?></h4>
              </div>
              <ul class="contact__list list-unstyled">
                <li><?= $br->Phone;?></li>
                <li>Email: <?= $br->Mail;?></li>
                <li>Address: <?= $br->Address;?></li>
                <li>Hours: <?= $br->Hours;?></li>
              </ul>
              <a href="#" class="btn btn__primary btn__hover3">Read More</a>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->  
					<?php } ?>        
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. Contact panels -->
