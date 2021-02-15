<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="myModal" displayed="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success border-none border-0">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-success">
                    <div class="container">
                        <div class="row justify-content-center align-center text-black">
                            <div class="col-lg-12 col-sm-12 align-center m-auto">
                                <h5 class="mbr-text mb-0 mbr-fonts-style font-1">
                                    WELCOME TO
                                </h5>
                                <h1 class="mbr-text mb-0 mbr-fonts-style text-bold font-weight-bold font-1">
                                    Hindustan Corporation
                                </h1>
                            </div>
                        </div>
                        <div class="align-center mt-2">
                            <p class="text-center">
                                Contact our executives for more updates and infomation.
                            </p>
                            <h3 class="mbr-text mb-0 mbr-fonts-style font-1 ">CALL NOW</h3>
                            <a class="display-1 mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 shake text-black"
                                href="<?php echo "tel:",$array['Phone1'] ?>">
                                <?php 
                  echo $array['Phone1'];
                ?>
                            </a>
                            <br>
                            <a class="display-5 mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 shake text-black"
                                href="<?php echo "tel:",$array['Phone2'] ?>">
                                <?php 
                  echo $array['Phone2'];
                ?>
                            </a>
                            <p class="text-center">OR</p>
                            <h3 class="mbr-text mb-0 mbr-fonts-style font-1">MAIL US</h3>
                            <a class="display-2 mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 shake text-black"
                                href="<?php echo "mailto:",$array['Email1'] ?>">
                                <?php 
                  echo $array['Email1'];
                ?>
                            </a>
                            <br>
                            <a class="display-5 mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 shake text-black"
                                href="<?php echo "mailto:",$array['Email2'] ?>">
                                <?php 
                  echo $array['Email2'];
                ?>
                            </a>
                        </div>
                        <p class="text-center mt-5">
                            Subscribe by submitting the form to find our latest updates
                        </p>
                        <div class="row mt-3 align-center justify-content-center">
                            <a href="<?php echo $array['NewsLetter'] ?>"
                                class="px-4 py-3 m-1 bg-white display-5 font-weight-bold col-lg-5 col-12 text-dark">Subscribe
                                Our Newsletter &ensp;<img src="assets/images/icons/bell.svg" alt="bell"
                                    width="8%" /></a>
                            <a href="<?php echo $array['Brousher']?>"
                                class="px-4 py-3 m-1 bg-white display-5 font-weight-bold col-lg-5 col-12 text-dark" download>Download
                                Our Brousher &ensp;<img src="assets/images/icons/download.svg" alt="download"
                                    width="8%" /></a>
                        </div>
                        <div class="social1 cid-rpSeO1OpDl bg-transparent">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 align-center">
                                        <div class="social-list">
                                            <div class="soc-item bg-transparent">
                                                <a href="<?php echo $array['Youtube']; ?>">
                                                    <img src="assets/images/icons/yt.svg" alt="yt" width="20px" />
                                                </a>
                                            </div>
                                            <div class="soc-item bg-transparent">
                                                <a href="<?php echo $array['Facebook']; ?>">
                                                    <img src="assets/images/icons/fb.svg" alt="fb" width="20px" />
                                                </a>
                                            </div>
                                            <div class="soc-item bg-transparent">
                                                <a href="<?php echo $array['Whatsapp']; ?>">
                                                    <img src="assets/images/icons/wtp.svg" alt="wtp" width="20px" />
                                                </a>
                                            </div>
                                            <div class="soc-item bg-transparent">
                                                <a href="<?php echo "mailto:",$array['Email1']; ?>">
                                                    <img src="assets/images/icons/ml.svg" alt="ml" width="20px" />
                                                </a>
                                            </div>
                                            <div class="soc-item bg-transparent">
                                                <a href="<?php echo $array['Skype']; ?>">
                                                    <img src="assets/images/icons/sky.svg" alt="sky" width="20px" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>