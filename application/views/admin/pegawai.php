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
                  <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Pegawai
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12 mb-4">
              <div class="card">
                <div class="card-body px-3 py-3">
                  <form method="get" action="<?php echo base_url();?>admin/pegawai/filter/">
                    <div class="row">
                      <div class="col-md-3">
                        <label>Jenis Kelamin</label>
                          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Pilih salah satu</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                        <label>Golongan Darah</label>
                          <select class="form-control" id="golongan" name="golongan">
                            <option value="">Pilih salah satu</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                        <label>Status</label>
                          <select class="form-control" id="status" name="status">
                            <option value="">Pilih salah satu</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak aktif</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                        <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Filter</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-12">
              <div class="card">
                <div class="card-body pd-0 table-responsive">
                  <table id="example1" class="table table-borderless mg-0">
                    <thead>
                      <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                        <th class="wd-25p th-its" style="border-bottom: none !important"><span>Pegawai</span></th>
                        <th class="wd-10p th-its" style="border-bottom: none !important"><span>Jenis Kelamin</span></th>
                        <th class="wd-10p th-its" style="border-bottom: none !important"><span>Tgl Lahir</span></th>
                        <th class="wd-20p th-its" style="border-bottom: none !important"><span>NIP/NPP</span></th>
                        <th class="wd-10p th-its" style="border-bottom: none !important"><span>Golongan Darah</span></th>
                        <th class="wd-15p th-its" style="border-bottom: none !important"><span>Nomor HP</span></th>
                        <th class="wd-10p th-its" style="border-bottom: none !important"><span>Status</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($result as $r) { ?>
                      <tr>
                        <td class="td-its align-middle border-bottom">
                          <a href="<?php echo base_url();?>admin/pegawai/detail?id=<?php $r->id_pegawai ?>">
                            <p class="mg-b-0 tx-medium tx-color-its3"><?php echo $r->nama_pegawai ?></p>
                            <p class="mg-b-0 tx-13 tx-color-03"><?php echo $r->nik_pegawai ?></p>
                          </a>
                        </td>
                        <td class="td-its align-middle border-bottom"><?php echo $r->jenis_kelamin ?></td>
                        <td class="td-its align-middle border-bottom"><?php echo $r->tanggal_lahir ?></td>
                        <td class="td-its align-middle border-bottom"><?php echo $r->nip_pegawai ?></td>
                        <td class="td-its align-middle border-bottom"><?php echo $r->golongan_darah ?></td>
                        <td class="td-its align-middle border-bottom"><?php echo $r->nomor_hp ?></td>
                        <td class="td-its align-middle border-bottom"><?php echo ($r->status == 1 ? 'Aktif' : 'Tidak Aktif'); ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <div class="modal fade effect-scale" id="tambahvaksinator" tabindex="-1" role="dialog" aria-labelledby="modalmyfile" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="tx-montserrat tx-medium" id="tambahvaksinatorLabel">Tambah Vaksinator</h5>
          </div>
          <form>
            <div class="modal-body pd-t-0">
              <div class="form-group">
                <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
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

    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Cari',
            sSearch: '',
            lengthMenu: '_MENU_ data/halaman',
            emptyTable:         'Tidak ada data yang tersedia pada tabel ini',
            zeroRecords:        'Tidak ditemukan data yang sesuai',
            info:               'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
            infoEmpty:          'Menampilkan 0 sampai 0 dari 0 entri',
            infoFiltered:       '(disaring dari _MAX_ entri keseluruhan)',
            paginate: {
                first: "<i class='fas fa-angle-double-left'></i>",
                last: "<i class='fas fa-angle-double-right'></i>",
                previous: "<i class='fas fa-angle-left'></i>",
                next: "<i class='fas fa-angle-right'></i>"
            },
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
</html>
