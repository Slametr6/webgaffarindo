    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= base_url('assets/images/page-titles/').$bg->BgService;?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">What We Do</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services bg-gray pb-70">
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
        </div><!-- /.row -->
        <div class="row">
		<?php foreach($data as $ser) { ?>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="<?= base_url('assets/images/services/').$ser->Img;?>" alt="service" class="img-fluid">
              </div><!-- /.service-img -->
              <div class="service__overlay">
                <div class="service__icon"><i class="<?= $ser->Icon;?>"></i></div>
                <h4 class="service__title"><?= $ser->ServiceName;?></h4>
                <p class="service__desc"><?= substr($ser->Content, 0, 100); ?></p>
                <a href="<?= base_url();?>services/<?= $ser->Slug;?>" class="btn btn__white btn__link btn__underlined">Read More</a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
		<?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services -->
