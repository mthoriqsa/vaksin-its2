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
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail Pegawai</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Detail Pegawai
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
              <a href="<?php echo base_url();?>admin/pegawai"  class="btn btn-white tx-montserrat tx-semibold"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i> Kembali</a>
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
                          <h5 class="tx-medium tx-montserrat mg-b-0"><?php echo $result->nama_pegawai ?></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body card-list">
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nama</span> 
                    <p class="mg-b-0"><?php echo $result->nama_pegawai ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">NIK</span> 
                    <p class="mg-b-0"><?php echo $result->nik_pegawai ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis Kelamin</span> 
                    <p class="mg-b-0"><?php echo ($result->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan') ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal Lahir</span> 
                    <p class="mg-b-0"><?php echo $result->tanggal_lahir ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">NIP/NPP</span> 
                    <p class="mg-b-0"><?php echo $result->nip_pegawai ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Golongan Darah</span> 
                    <p class="mg-b-0"><?php echo $result->golongan_darah ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nomor HP</span> 
                    <p class="mg-b-0"><?php echo $result->nomor_hp ?></p>
                  </div>
                  <div class="card-list-text">
                    <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Status</span> 
                    <p class="mg-b-0"><?php echo ($result->status == 1 ? 'Aktif' : 'Tidak aktif') ?></p>
                  </div>
                  
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <div class="modal fade effect-scale" id="editkehadiran" tabindex="-1" role="dialog" aria-labelledby="modalmyfile" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="tx-montserrat tx-medium" id="editkehadiranLabel">Edit Kehadiran</h5>
          </div>
          <form>
            <div class="modal-body pd-t-0">
              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="hadir_ya" name="is_hadir" class="custom-control-input" required>
                      <label class="custom-control-label" for="hadir_ya">Hadir</label>
                    </div>
                  </div>
                  <div class="col-4">
                  <div class="custom-control custom-radio">
                      <input type="radio" id="hadir_tidak" name="is_hadir" class="custom-control-input">
                      <label class="custom-control-label" for="hadir_tidak">Tidak hadir</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batalkan</button>
              <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Simpan</button>
            </div>
          </form>
        </div>
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
