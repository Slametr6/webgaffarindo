
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= base_url('assets/images/page-titles/').$bg->BgService;?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading"><?= $svc->ServiceName;?></h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      case studies Single
    ========================= -->
    <section id="caseStudiesSingle" class="case-studies-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <?php foreach ($data as $value) { ?>
                    <li><a href="<?= base_url() ?>services/<?= $value->Slug;?>"><?= $value->ServiceName ?></a></li>
                <?php } ?>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="case-single-item">
              <div class="text__block">
                <h5 class="text__block-title">Overview</h5>
                <p class="text__block-desc"><?= $svc->Content;?></p>
                <!-- <div class="video-3 bg-overlay mb-25">
                  <div class="bg-img"><img src="<?= base_url();?>assets/images/video/1.jpg" alt="background"></div>
                  <div class="video__btn align-v-h">
                    <a class="popup-video" href="https://www.youtube.com/watch?4=&v=TKnufs85hXk">
                      <span class="video__player-animation"></span>
                      <div class="video__player">
                        <i class="fa fa-play"></i>
                      </div>
                    </a>
                  </div>
                </div> /.video -->
                <p class="text__block-desc"><?= $svc->Content;?></p>
              </div><!-- /.text-block -->
            </div><!-- /.case-single-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.case studies Single -->
