    <!-- Basic PHP -->
    <?php 
      $str = file_get_contents('assets/data.json');
      $array = json_decode($str, true);
    ?>

    <!-- Navbar -->
    <section class="menu cid-rpORM0Jppl" once="menu" id="menu01-1b">
        <nav
            class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/logo.svg" alt="HC" style="height: 15vh;" />
                        </a>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse d-flex flex-column" id="navbarSupportedContent">
                <div class="row container">
                    <h3 class="display-7 col-lg-6 align-right">
                        <a class="mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 text-black"
                            href="<?php echo "tel:",$array['Phone1']; ?>"><?php echo $array['Phone1']; ?></a>
                    </h3>
                    <h3 class="display-7 col-lg-6 align-center">
                        <a class="mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 text-black"
                            href="<?php echo "mailto:",$array['Email1']; ?>"><?php echo $array['Email1']; ?></a>
                    </h3>
                </div>
                <div class="row">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="about.php">About </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link text-black dropdown-toggle display-4" href="#"
                                data-toggle="dropdown-submenu" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu">
                                <a class="text-white dropdown-item display-4" href="Chain-Link-Fence-Machine.php" aria-expanded="false">Automatic Chain Link
                                    Fence Machine</a>
                                <a class="text-white dropdown-item display-4"
                                    href="Welded-Wire-Mesh-Fence-Machine.php" aria-expanded="false">Welded Wire Mesh
                                    Fence Machine</a>
                                <a class="text-white dropdown-item display-4" href="#" aria-expanded="false">Wire Mesh
                                    Weld Machine</a>
                                <a class="text-white dropdown-item display-4" href="#" aria-expanded="false">Barbed
                                    Wire Fence Machine</a>
                                <a class="text-white dropdown-item display-4" href="#" aria-expanded="false">Paper Cone
                                    Making Machine</a>
                                <a class="text-white dropdown-item display-4" href="#" aria-expanded="false">Automatic
                                    Cone Dryer</a>
                                <a class="text-white dropdown-item display-4" href="#" aria-expanded="false">Paper Tube
                                    Making Machine</a>
                                <a class="text-white dropdown-item display-4 font-weight-bold bg-white text-black"
                                    href="allproducts.php" aria-expanded="false">More Products...</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="gallary.php">Gallary
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="blogs.php">Blog </a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-sm btn-black font-1 text-center" href="contact.php">Find Us </a>
                    </div>
                    <ul class="navbar-nav nav-dropdown">
                        <li class="nav-link link row">
                            <a class="p-2 text-black" href='<?php echo $array['Whatsapp']; ?>'>
                                <img src="assets/images/icons/wtp.svg" alt="wtp" width="25px" />
                            </a>
                            <a class="p-2 text-black" href='<?php echo $array['Skype']; ?>'><img
                                    src="assets/images/icons/sky.svg" alt="sky" width="25px" />
                            </a>
                            <a class="p-2 text-black" href='<?php echo $array['Facebook']; ?>'><img
                                    src="assets/images/icons/fb.svg" alt="fb" width="25px" />
                            </a>
                            <a class="p-2 text-black" href='<?php echo $array['Youtube']; ?>'><img
                                    src="assets/images/icons/yt.svg" alt="yt" width="25px" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>