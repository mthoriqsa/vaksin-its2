<!DOCTYPE html>
<html lang="en">
  <head>
   <?php $this->load->view('_partials/head.php') ?>
  </head>
  <body>

    <aside class="aside aside-fixed">
      <?php $this->load->view('_partials/sidebar_p.php') ?>
    </aside>

    <div class="content ht-100v pd-0" style="position: relative">
      <?php $this->load->view('_partials/navbar_p.php') ?>

      <div class="content-body ht-100p pd-t-80">
        <div class="container pd-x-0" id="content">

          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb" class="d-none d-lg-block">
                <ol class="breadcrumb breadcrumb-style2 mg-b-10">
                  <li class="breadcrumb-item"><a href="../dashboard">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="../admin/vaksinasi.html">Jadwal Vaksinasi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail Vaksinasi</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Detail Vaksinasi
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
              <a href="<?php echo base_url();?>pegawai/jadwal"  class="btn btn-white tx-montserrat tx-semibold"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i> Kembali</a>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12 mg-b-10">
              <div class="card">
                <div class="card-header">
                  <div class="row row-xs">
                    <div class="col-10 col-sm-10 col-lg-10 d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <div>
                          <h5 class="tx-medium tx-montserrat mg-b-0">
                            <?php echo date_format(date_create($result->tanggal), 'l').', '.date_format(date_create($result->tanggal), 'd M Y') ?>
                          </h5>
                          <p class="mg-b-5"><?php echo $result->jam_mulai.' - '.$result->jam_selesai?></p>
                          <?php if ($result->status == 1) { ?>
                            <span class="tx-13"><span class="tx-info"><i class="far fa-play-circle mg-r-5"></i>Pendaftaran dibuka</span></span>
                          <?php }elseif ($result->status == 2) { ?>
                            <span class="tx-13"><span class="tx-gray-700"><i class="far fa-circle mg-r-5"></i>Pendaftaran belum dibuka</span></span>
                          <?php }else{ ?>
                            <span class="tx-13"><span class="tx-danger"><i class="far fa-times-circle mg-r-5"></i>Pendaftaran ditutup</span></span>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-2 d-flex align-items-center justify-content-end">
                      <div class="dropdown dropdown-custom">
                        <!--button class="btn btn-white tx-montserrat tx-semibold d-none d-lg-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i data-feather="more-vertical" class="wd-10 mg-r-5"></i>Pilihan
                        </button -->
                        <button class="btn btn-white btn-icon d-lg-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="vaksinasi-edit.html"><i data-feather="edit"></i>Edit</a>
                          <a class="dropdown-item" href="#hapusvaksinasi" data-toggle="modal" data-animation="effect-scale"><i data-feather="trash"></i>Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body card-list">
                  <p class="tx-medium tx-15">Tentang Vaksinasi Ini</p>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinator</span> 
                    <p class="mg-b-0"><?php echo $this->db->select('nama_instansi x')->where('id_vaksinator', $result->vaksinator)->get('vaksinator')->row()->x ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis Vaksin</span> 
                    <p class="mg-b-0"><?php echo $this->db->select('nama_vaksin x')->where('id_vaksin', $result->jenis_vaksin)->get('jenis_vaksin')->row()->x ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran</span> 
                    <p class="mg-b-0"><?php echo date_format(date_create($result->mulai_daftar), 'd M Y').' - '. date_format(date_create($result->selesai_daftar), 'd M Y')?></p>
                  </div>
                  <hr class="mg-t-20 mg-b-20">
                  <p class="tx-medium tx-15">Pelaksanaan</p>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal Vaksinasi</span> 
                    <p class="mg-b-0"><?php echo date_format(date_create($result->tanggal), 'd M Y') ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi Vaksinasi</span> 
                    <p class="mg-b-0"><?php echo $result->jam_mulai.' - '.$result->jam_selesai?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Lokasi</span> 
                    <p class="mg-b-0"><?php echo $result->lokasi?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Kuota</span> 
                    <p class="mg-b-0"><?php echo $result->kuota?> orang</p>
                  </div>
                </div>
              </div>
            </div>

            <!--div class="col-sm-12 col-lg-12 mg-b-10">
              <div class="card">
                <div class="card-header">
                  <div class="row row-xs">
                    <div class="col-10 col-sm-10 col-lg-10 d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <div>
                          <h5 class="tx-medium tx-montserrat mg-b-0">Peserta Vaksinasi</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-2 d-flex align-items-center justify-content-end">
                      <a href="vaksinasi-peserta.html" class="btn btn-white tx-montserrat tx-semibold float-right d-none d-lg-block"><i data-feather="edit" class="wd-10 mg-r-5"></i> Edit Peserta</a>
                      <a href="vaksinasi-peserta.html" class="btn btn-white btn-icon tx-montserrat tx-medium float-right d-lg-none"><i data-feather="edit"></i></a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Peserta yang sudah dipilih</span> 
                  <p class="mg-b-0">300 orang</p>
                </div>
              </div>
            </div -->

            <div class="modal fade effect-scale" id="hapusvaksinasi" tabindex="-1" role="dialog" aria-labelledby="hapusvaksinasi" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content tx-14 bg-white">
                  <div class="modal-body">
                    <h5 class="tx-montserrat tx-medium">Apakah Anda yakin ingin menghapus jadwal vaksinasi ini?</h5>
                    <span>Tindakan ini tidak dapat dibatalkan.</span>
                  </div>
                  <div class="modal-footer bd-t-0">
                    <form>
                      <a href="#" data-toggle="modal" data-animation="effect-scale" class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batalkan</a>
                      <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Hapus</button>
                    </form>
                  </div>
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
