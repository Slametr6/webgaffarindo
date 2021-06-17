    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= base_url();?>assets/images/page-titles/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Case Studies</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      projects Grid 
    ============================= -->
    <section id="projectsGrid" class="projects projects-grid">
      <div class="container">
        <div id="filtered-items-wrap" class="row">
          <!-- project item #1 -->
		  <?php foreach ($data as $proj) { ?>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-warehousing">
            <div class="project-item">
              <div class="project__img">
                <img src="<?= base_url('assets/images/projects/').$proj->Img;?>" alt="project img">
                <a href="<?= base_url();?>projects/<?= $proj->Slug;?>" class="zoom__icon"></a>
              </div><!-- /.project-img -->
              <div class="project__content">
                <h4 class="project__title"><a href="#"><?= $proj->ProjectTitle;?></a></h4>
								<p class="project__desc"><?= substr($proj->Content, 0, 140);?> ...</p>
              </div><!-- /.project-content -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
		  <?php } ?>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a class="btn btn__primary btn__hover3 mt-20 loadMoreProjects" href="#">Load more</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects Grid -->
