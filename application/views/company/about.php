    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= base_url('assets/images/page-titles/').$bg->BgAbout;?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">About Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 4
    =========================== -->
    <section id="about4" class="about about-2 about-4 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="row heading heading-2">
              <div class="col-sm-12 col-md-12 col-sm-12">
                <h2 class="heading__title"><?= $aboutpage->Text1;?></h2>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
                  data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                  data-speed="700">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-worldwide"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Our Mission</h4>
                      <p class="fancybox__desc"><?= $visimisi->Misi;?></p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-transfer"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Our Vision</h4>
                      <p class="fancybox__desc"><?= $visimisi->Visi;?></p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.carousel -->
              </div><!-- /.col-lg-5 -->
              <div class="col-sm-12 col-md-7 col-lg-7">
                <p class="heading__desc mb-30"><?= $aboutpage->Text2;?></p>
                <p><?= $aboutpage->Text3;?></p>
              </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-9 col-lg-5">
            <div class="about__img mb-60">
              <img src="<?= base_url('assets/images/about/').$aboutpage->Img;?>" alt="about img" class="img-fluid">
              <span><?= $aboutpage->AboutName;?></span>
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 4 -->

    <!-- =========================== 
      fancybox Layout2
    ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pb-40">
      <div class="container">
	  	<div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
              <span class="heading__subtitle mb-0">Why Choose Us?</span>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
		<?php foreach($reason as $res) { ?>
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3 pt-40">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="<?= $res->Icon;?>"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title"><?= $res->Reason;?></h4>
                <p class="fancybox__desc"><?= $res->Content;?></p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox Layout2 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients1" class="clients clients-1 border-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
			<?php foreach ($client as $cl) { ?>
              <div class="client">
                <a href="#"><img src="<?= base_url('assets/images/clients/').$cl->Img;?>" alt="client"></a>
              </div><!-- /.client -->
			<?php } ?>
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients 1 -->
