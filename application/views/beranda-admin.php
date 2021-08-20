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
          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12 mg-b-30">
              <div class="row row-xs">
                <div class="col-sm-12 col-lg-12 mg-b-20 d-flex justify-content-center">
                  <a href="#photoprofil" data-toggle="modal" data-animation="effect-scale" class="animated slideInUp">
                    <div class="avatar avatar-xxl">
                      <img src="https://i-invdn-com.akamaized.net/content/pic583d7c53b21af8b691aac70a6994c4c9.jpg" class="rounded-circle shadow" alt="" data-toggle="tooltip" data-placement="bottom" title="Foto profil">
                    </div>
                  </a>
                </div>
                <div class="col-sm-12 col-lg-12 mg-b-10 text-center">
                    <h3 class="mg-b-4 tx-montserrat tx-medium animated slideInUp">Gunawan</h3>
                    <p class="mg-b-4 tx-color-03 tx-15 tx-medium animated slideInUp">Admin</p>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <?php $this->load->view('_partials/modals.php') ?>
    
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

        $('[data-toggle="tooltip"]').tooltip()

        $('.df-example .btn-primary').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-secondary').tooltip({
          template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-success').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-danger').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })


      });
    </script>

    

  </body>
</html>
