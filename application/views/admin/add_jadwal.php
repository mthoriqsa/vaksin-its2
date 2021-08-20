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
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/jadwal_vaksin">Vaksinasi Tersedia</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Vaksinasi</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Tambah Vaksinasi
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
              <a href="<?php echo base_url();?>admin/jadwal_vaksin"  class="btn btn-white tx-montserrat tx-semibold"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i> Kembali</a>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12 mg-b-10">
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?php echo base_url();?>admin/jadwal_vaksin/add/">
                    <p class="tx-medium tx-15">Tentang Vaksinasi Ini</p>
                    <div class="form-group">
                      <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinator</label>
                      <select name="vaksinator" class="form-control select2" required>
                        <option label="Pilih"></option>
                        <?php foreach ($vaksinator as $v) { ?>
                        <option value="<?php echo $v->id_vaksinator ?>"><?php echo $v->nama_instansi ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis Vaksin</label>
                      <select name="jenis_vaksin" class="form-control select2" required>
                        <option label="Pilih"></option>
                        <?php foreach ($jenis as $j) { ?>
                        <option value="<?php echo $j->id_vaksin ?>"><?php echo $j->nama_vaksin ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-6">
                          <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran dimulai</label>
                          <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control" required>
                        </div>
                        <div class="col-6">
                          <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran selesai</label>
                          <input type="date" id="tgl_mulai" name="tgl_selesai" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <hr class="mg-t-20 mg-b-20">
                    <p class="tx-medium tx-15">Pelaksanaan</p>
                    <div class="form-group">
                      <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal Vaksinasi</label>
                      <input type="date" id="pelaksanaan" name="tgl_pelaksanaan" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-6">
                          <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi Vaksinasi Dimulai</label>
                          <input type="time" id="sesi_mulai" name="sesi_mulai" class="form-control" required>
                        </div>
                        <div class="col-6">
                          <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi Vaksinasi Selesai</label>
                          <input type="time" id="sesi_selesai" name="sesi_selesai" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Lokasi</label>
                      <input type="text" id="pelaksanaan" name="tempat_pelaksanaan" class="form-control" placeholder="Tempat vaksinasi" maxlength="100" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Kuota</label>
                      <input type="number" id="pelaksanaan" name="kuota" class="form-control" placeholder="Jumlah peserta" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Status</label>
                      <select name="status" class="form-control select2" required>
                        <option label="Pilih"></option>
                        <option value="1">Belum dibuka</option>
                        <option value="2">Sudah Dibuka</option>
                      </select>
                    </div>
                    <button class="btn btn-its tx-montserrat tx-semibold float-right" type="submit">Simpan</button>
                  </form>
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

    <script>
      // Adding placeholder for search input
      (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);


      $(function(){
        'use strict'

        // Basic with search
        $('.select2').select2({
          placeholder: 'Pilih',
          searchInputPlaceholder: 'Cari'
        });

        // Disable search
        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one'
        });

        // Clearable selection
        $('.select2-clear').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          allowClear: true
        });

        // Limit selection
        $('.select2-limit').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          maximumSelectionLength: 2
        });

      });
    </script>

  </body>
</html>
