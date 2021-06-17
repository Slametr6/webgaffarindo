    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
      <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
        data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
				<?php foreach($slide as $sl) { ?>
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= base_url('assets/images/sliders/').$sl->Img;?>" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title"><?= $sl->slide_title;?></h2>
                  <p class="slide__desc"><?= $sl->slide_desc;?></p>
                  <a href="#" class="btn btn__white mr-40">Our Services</a>
                  <a class="btn btn__video popup-video" href="<?= $sl->link;?>">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <i class="fa fa-play"></i>
                    </div>Our Video!
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
				<?php } ?>
      </div><!-- /.carousel -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12  d-none d-lg-block">
            <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
							<?php foreach ($service as $ser) { ?>
              <button class="owl-thumb-item">
                <i class="<?= $ser->Icon;?>"></i>
                <span><?= $ser->ServiceName;?> <br> Services</span>
              </button>
							<?php } ?>
            </div><!-- /.owl-thumbs -->
          </div><!-- /.col-lg-12 -->
        </div>
      </div>
    </section><!-- /.slider -->

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services pt-40 bg-gray">
      <div class="container">
        <div class="row heading mb-40">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle"><?= $servicepage->PageName;?></span>
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-6 col-lg-5">
            <h2 class="heading__title"><?= $servicepage->Text1;?></h2>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
            <p class="heading__desc"><?= $servicepage->Text2;?></p>
          </div><!-- /.col-lg-6 -->
        </div>
        <div class="row">
				<?php foreach($service as $ser) { ?>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">	
              <div class="service__img">
                <img src="<?= base_url('assets/images/services/').$ser->Img;?>" alt="service" class="img-fluid">
              </div><!-- /.service-img -->
              <div class="service__overlay">
                <div class="service__icon"><i class="<?= $ser->Icon;?>"></i></div>
                <h4 class="service__title"><?= $ser->ServiceName;?></h4>
                <p class="service__desc"><?= substr($ser->Content, 0, 100); ?></p>
                <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <?php } ?>
        </div>
      </div>
    </section><!-- /.Services -->

    <!-- =========================
      Carousel Tabs 
      =========================== -->
    <section id="carouselTabs" class="carousel-tabs pb-70">
      <div class="pricing-bg">
        <div class="bg-img bg-overlay"><img src="<?= base_url();?>assets/images/backgrounds/1.jpg" alt="background"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle color-white">Latest Case Studies</span>
              <h2 class="heading__title color-white">Featured Projects</h2>
              <div class="divider__line divider__white divider__center"></div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="true" data-speed="800">
                  <!-- project item #1 -->
									<?php foreach ($project as $proj) { ?>
                  <div class="project-item">
                    <div class="project__img">
                      <img src="<?= base_url('assets/images/projects/').$proj->Img;?>" alt="project img">
                      <a href="#" class="zoom__icon"></a>
                    </div><!-- /.project-img -->
                    <div class="project__content">
                      <h4 class="project__title"><a href="#"><?= $proj->ProjectTitle;?></a></h4>
                      <p class="project__desc"><?= $proj->Content;?></p>
                    </div><!-- /.project-content -->
                  </div><!-- /.project-item -->
									<?php } ?>
                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
          </div><!-- /.col-lg-12 -->
        </div>
      </div>
    </section><!-- /.Carousel Tabs  -->

    <!-- ========================= 
            Testimonial #2
    =========================  -->
    <section id="testimonial2" class="testimonial testimonial-2 text-center  pt-0 pb-170">
      <div class="bg-img"><img src="<?= base_url();?>assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
              <span class="heading__subtitle mb-0">Client’s Testimonials</span>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class=" owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
              <!-- Testimonial #1 -->
			 			 <?php foreach ($testimonial as $testi) { ?>
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc"><?= $testi->Review;?></p>
                </div><!-- /.testimonial-content -->
              </div><!-- /. testimonial-item -->
							<?php }  ?>
            </div>
            <div class="owl-thumbs" data-slider-id="1">
			  			<?php foreach ($testimonial as $testi) { ?>
              <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="<?= base_url();?>assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title"><?= $testi->CustomerName;?></span>
                  <span class="testimonial__meta-desc"><?= $testi->Company;?></span>
                </span><!-- /.testimonial-meta -->
              </button>
							<?php } ?>
            </div><!-- /.owl-thumbs -->
          </div><!-- /.col-lg-12 -->
        </div>
      </div>
    </section><!-- /.testimonial2 -->
