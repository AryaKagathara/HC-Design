    <!-- Basic PHP -->
    <?php 
      $str = file_get_contents('assets/data.json');
      $array = json_decode($str, true);
    ?>

  <!-- Footer -->
  <section
      class="footer2 cid-rpSeNsPtbT"
      id="footer003-2m"
      data-rv-view="441"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-4 col-md-12 align-left">
            <div class="navbar-brand">
              <a href="index.php" class="navbar-logo">
                <img
                  src="assets/images/logo.svg"
                  alt="HC"
                  style="width: 18vh"
                />
              </a>

              <h3 class="mbr-fonts-style mbr-semibold font-1">
                Hindustan <br />Corporation
              </h3>
            </div>
            <div class="mb-5 mx-3 mt-5">
              <span
                class="mbr-fonts-style mbr-normal text-muted navbar-caption-wrap"
                >Enhance your future with India's fastest growing machine
                industry. Pride of the connecting technology for over a six
                years.</span
              >
            </div>
          </div>
          <div class="col-12 col-lg-2 col-md-6 align-left my-3">
            <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1 font-weight-light">
                Links
            </h5>
            <a href="index.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Home
              </h5>
            </a>
            <a href="allproducts.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Products
              </h5>
            </a>
            <a href="contact.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Contact
              </h5>
            </a>
            <a href="clients.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Clients
              </h5>
            </a>
            <a href="faq.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                FAQ
              </h5>
            </a>
          </div>
          <div class="col-12 col-lg-2 col-md-6 align-left my-3">
          <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1 font-weight-light">
                Info
            </h5>
            <a href="about.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                About Us
              </h5>
            </a>
            <a href="process.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Process
              </h5>
            </a>
            <a href="team.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Team
              </h5>
            </a>
            <a href="gallary.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Gallary
              </h5>
            </a>
            <a href="blogs.php">
              <h5 class="mbr-fonts-style items mbr-semibold pb-2 fs-6 font-1">
                Blog
              </h5>
            </a>
          </div>
          <div class="col-12 col-lg-4 col-md-12">
            <div>
              <div class="row mb-3">
                <a class="btn-sm btn-success display-7 col-12 text-center py-4"
                href="<?php echo $array['Brousher']; ?>" download
                  >Download Our Brousher</a
                >
              </div>
              <div class="row">
                <a href="<?php echo $array['NewsLetter']; ?>"
                  class="btn-sm btn-dark text-white display-7 col-12 text-center py-4"
                  >Subscribe Our Newsletter</a
                >
              </div>
            </div>
            <div class="mt-5">
              <div class="text-center">
                <p class="mbr-text mb-0 mbr-fonts-style display-4">
                  © Copyright <?php echo date("Y");?> Hindustan Corportation All Rights Reserved
                </p>
              </div>
              <div class="text-center">
                <p class="mbr-text mb-0 links mbr-fonts-style display-4">
                  <a href="#" class="text-warning">Privacy</a> &nbsp;| &nbsp;<a
                    href="#"
                    class="text-warning"
                    >Policy
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="social1 cid-rpSeO1OpDl" id="">
      <div class="container">
        <div class="row">
          <div class="col-12 align-center">
            <div class="social-list">
              <div class="soc-item">
                <a href='<?php echo $array['Youtube']; ?>'>
                  <img src="assets/images/icons/yt.svg" alt="yt" width="20px" />
                </a>
              </div>
              <div class="soc-item">
                <a href='<?php echo $array['Facebook']; ?>'>
                  <img src="assets/images/icons/fb.svg" alt="fb" width="20px" />
                </a>
              </div>
              <div class="soc-item">
                <a href='<?php echo $array['Whatsapp']; ?>'>
                  <img
                    src="assets/images/icons/wtp.svg"
                    alt="wtp"
                    width="20px"
                  />
                </a>
              </div>
              <div class="soc-item">
                <a href='mailto:<?php echo $array['Email1']; ?>'>
                  <img src="assets/images/icons/ml.svg" alt="ml" width="20x" />
                </a>
              </div>
              <div class="soc-item">
                <a href='<?php echo $array['Skype']; ?>'>
                  <img
                    src="assets/images/icons/sky.svg"
                    alt="sky"
                    width="20px"
                  />
                </a>
              </div>
              <div class="soc-item">
                <a href='<?php echo $array['Linkedin']; ?>'>
                  <img src="assets/images/icons/in.svg" alt="in" width="20px" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>