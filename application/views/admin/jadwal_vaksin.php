<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('_partials/head.php') ?>
  </head>
  <body>

    <aside class="aside aside-fixed">
      <?php $this->load->view('_partials/sidebar.php') ?>
    </aside>

    <div class="content ht-100v pd-0" style="position: relative">
      <?php $this->load->view('_partials/navbar.php') ?>

      <div class="content-body ht-100p pd-t-80">
        <div class="container pd-x-0" id="content">

          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb" class="d-none d-lg-block">
                <ol class="breadcrumb breadcrumb-style2 mg-b-10">
                  <li class="breadcrumb-item"><a href="../dashboard">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Jadwal Vaksinasi</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Jadwal Vaksinasi
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
              <a href="vaksinasi-add.html"  class="btn btn-its tx-montserrat tx-semibold"><i data-feather="plus" class="wd-10 mg-r-5 tx-color-its2"></i> Tambah</a>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12">
              <div class="card">
                <div class="card-body card-list">
                  <?php foreach ($result as $r) { ?>
                    <div class="card-list-item">
                      <a href="<?php echo base_url();?>admin/jadwal_vaksin/detail?id=<?php echo $r->id_jadwal ?>">
                        <div class="d-flex justify-content-between align-items-center sc-link">
                          <div class="media">
                            <div class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its"><i data-feather="calendar"></i></div>
                            <div class="media-body align-self-center">
                              <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02"><?php echo date_format(date_create($r->tanggal), 'l').', '.date_format(date_create($r->tanggal), 'd M Y') ?></p> 
                              <p class="tx-color-03 tx-13"><?php echo $r->jam_mulai.' - '.$r->jam_selesai?></p>
                              <?php if ($r->status == 1) { ?>
                                <span class="tx-13"><span class="tx-info"><i class="far fa-play-circle mg-r-5"></i>Pendaftaran dibuka</span></span>
                              <?php }elseif ($r->status == 2) { ?>
                                <span class="tx-13"><span class="tx-gray-700"><i class="far fa-circle mg-r-5"></i>Pendaftaran belum dibuka</span></span>
                              <?php }else{ ?>
                                <span class="tx-13"><span class="tx-danger"><i class="far fa-times-circle mg-r-5"></i>Pendaftaran ditutup</span></span>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="btn btn-icon btn-its-icon btn-hover">
                            <i data-feather="chevron-right"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                  <?php } ?>
  
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    
    <?php $this->load->view('_partials/js.php') ?>

    <!-- Script base -->
    <script>
        //canvas menu
        $(function(){
            'use strict'

            $('.off-canvas-menu').on('click', function(e){
                e.preventDefault();
                var target = $(this).attr('href');
                $(target).addClass('show');
            });

            $('.off-canvas .close').on('click', function(e){
                e.preventDefault();
                $(this).closest('.off-canvas').removeClass('show');
            })

            $(document).on('click touchstart', function(e){
                e.stopPropagation();
                if(!$(e.target).closest('.off-canvas-menu').length) {
                var offCanvas = $(e.target).closest('.off-canvas').length;
                if(!offCanvas) {
                    $('.off-canvas.show').removeClass('show');
                }
                }
            });
        });

        //tooltip
        $('[data-toggle="tooltip"]').tooltip();

        //allow focus menu
        $(document).on('click', '.allow-focus', function (e) {
            e.stopPropagation();
        });
        
        //file name input
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        //script sementara untuk beralih role
        var goBtn = document.getElementById("goBtn");
        var menu = document.getElementById("menu");

        goBtn.onclick = function() {
            window.location = menu.value;
        }
    </script>

  </body>
</html>
