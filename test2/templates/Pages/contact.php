
  <!--/w3l-inner-page-breadcrumb-->
  <section class="w3l-inner-page-breadcrumb">
    <div class="breadcrumb-bg py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Contact</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="<?= $this->Url->build(['controller'=>'pages','action'=>'index'])?>">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //w3l-inner-page-breadcrumb-->
  <!-- /contact-section -->
  <div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian py-lg-5 py-md-4 py-2">
      <div class="container">
        <div class="header-title text-center mx-auto">
          <h6 class="title-subhny mb-2">Contact</h6>
          <h3 class="title-w3l">Get in Touch with Us</h3>
          <p class="mb-5">If you have a question regarding our services, feel free
            to contact us using the form below.</p>
        </div>
        <div class="contacts-5-grid-main mt-4">
          <div class="contacts-5-grid">
            <div class="address-grid">
              <span class="pos-icon">
                <span class="fa fa-map"></span>
              </span>
              <div class="ad-right">
                <h6>Our Locations</h6>
                <p>#343, 9th Floor, VHMV-47 Honey Land,New York.</p>
              </div>
            </div>
            <div class="address-grid">
              <span class="pos-icon">
                <span class="fa fa-envelope">

                </span>
              </span>
              <div class="ad-right">
                <h6>Help Desk</h6>
                <a href="mailto:mailone@example.com" class="link1">mailone@example.com</a>
                <a href="mailto:mailtwo@example.com" class="link1">mailtwo@example.com</a>
              </div>
            </div>
            <div class="address-grid">
              <span class="pos-icon">
                <span class="fa fa-headphones"></span>
              </span>
              <div class="ad-right">
                <h6>Give Us a Call</h6>
                <a href="tel:+12 424-096-439" class="link1">+12 424-096-439</a>
                <a href="tel:+12 422-094-436" class="link1">+12 422-094-436</a>
              </div>
            </div>
          </div>
          <div class="contacts-sub-5 my-5 py-sm-3">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin"
              style="border:0" allowfullscreen></iframe>
          </div>
          <div class="header-title text-center mx-auto">
            <h6 class="title-subhny mb-2">Support</h6>
            <h3 class="title-w3l">Let’s talk about your project</h3>
            <p class="mb-5">We have made it easy for clients to reach us and get their solutions weaved</p>
          </div>
          <div class="form-inner-cont">
            <form action="#" method="post" class="signin-form">
              <div class="form-grids">
                <div class="form-input" data-aos="fade-down">
                  <input type="text" name="Name" placeholder="Enter your name *" required="" />
                </div>
                <div class="form-input" data-aos="fade-down">
                  <input type="text" name="Subject" placeholder="Enter subject " required />
                </div>
                <div class="form-input" data-aos="fade-up">
                  <input type="email" name="Email" placeholder="Enter your email *" required />
                </div>
                <div class="form-input" data-aos="fade-up">
                  <input type="text" name="Phone" placeholder="Enter your Phone Number *" required />
                </div>
              </div>
              <div class="form-input">
                <textarea name="Message" placeholder="Type your query here" required=""></textarea>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-style btn-primary">Submit Now</button>
              </div>
            </form>
          </div>

        </div>
      </div>
      <!-- //contacts-5-grid -->
    </div>
  </div>

  <!-- //contact-section -->
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
   
    <?=$this->element('footer')?>