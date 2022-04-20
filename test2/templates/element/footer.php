 <!-- footer -->
 <footer class="w3l-footer-29-main">
      <div class="footer-29-w3l py-5">
        <div class="container py-lg-5 py-md-3">
          <div class="w3l-footer-texthny-inf text-center">
            <h6 class="foot-sub-title mb-1">LET’S WORK TOGETHER</h6>
            <h4><a href="mailto:seogexample@mail.com" class="mail">Seogexample@mail.com</a></h4>
            <div class="main-social-footer-29 mt-4 mb-lg-5 mb-4">
              <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
              <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
              <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in"></span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- //footer -->
      <!-- copyright -->
      <section class="w3l-copyright">
        <div class="container">
          <div class="row bottom-copies">
            <p class="col-lg-8 copy-footer-29">© 2020 Seog. All rights reserved. Design by <a
                href="https://w3layouts.com/" target="_blank">
                W3Layouts</a></p>
            <div class="col-lg-4 footer-list-29">
              <ul class="d-flex text-lg-right">
                <li><a href="#careers"> Careers</a></li>
                <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
                <li><a href="<?= $this->Url->build(['controller'=>'Pages','action'=>'contact']) ?>">Contact Us</a></li>
              </ul>
            </div>
  
          </div>
        </div>
      </section>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };
  
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }
  
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </footer>
    <!--//footer-->
  <!-- Template JavaScript -->


  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <?= $this->Html->script('bootstrap.min') ?>
  <?= $this->Html->script('theme-change') ?>
  