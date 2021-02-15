<!-- Basic PHP -->
<?php 
    $array = array();
    error_reporting(0);
    if(empty($array)) {  
        $str = file_get_contents('assets/data.json');
        $array = json_decode($str, true);
    }
    if(empty($array)) {
        $str = file_get_contents('../assets/data.json');
        $array = json_decode($str, true);
    }
?>

<section class="container-fluid p-5 bg-success">
    <div class="row text-center justify-content-middle py-2">
        <div class="col-lg-6">
            <h5 class="mbr-text mb-0 mbr-fonts-style font-weight-light font-1 text-black">Call Us</h5>
            <h2 class="fs-1 shake">
                <a class="mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 text-black"
                    href="<?php echo "tel:",$array['Phone1'] ?>">
                    <?php 
              echo $array['Phone1'];
            ?>
                </a>
                <br>
                <a class="mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 text-black"
                    href="<?php echo "tel:",$array['Phone2'] ?>">
                    <?php 
              echo $array['Phone2'];
            ?>
                </a>
            </h2>
        </div>
        <div class="col-lg-6">
            <h5 class="mbr-text mb-0 mbr-fonts-style font-weight-light font-1 text-black">Mail Us</h5>
            <h2 class="fs-1 shake">
                <a class="mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 text-black"
                    href="<?php echo "mailto:",$array['Email1'] ?>">
                    <?php 
              echo $array['Email1'];
            ?>
                </a>
                <br>
                <a class="mbr-text mb-0 mbr-fonts-style font-weight-bold font-1 text-black"
                    href="<?php echo "mailto:",$array['Email2'] ?>">
                    <?php 
              echo $array['Email2'];
            ?>
                </a>
            </h2>
        </div>
    </div>
</section>