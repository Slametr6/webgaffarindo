    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= base_url('assets/images/page-titles/').$bg->BgGallery;?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Gallery</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      projects Gallery 
    ============================= -->
    <section id="projectsGallery" class="projects projects-gallery">
      <div class="container">
        <div class="row">
          <!-- project item #1 -->
		<?php foreach($gallery as $gal) { ?>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="<?= base_url('assets/images/gallery/').$gal->Img;?>" alt="project img">
                <a href="<?= base_url('assets/images/gallery/').$gal->Img;?>" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #2 -->
		<?php } ?>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a class="btn btn__primary btn__hover3 mt-20 loadMoreProjects" href="#">Load more</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects Gallery -->
