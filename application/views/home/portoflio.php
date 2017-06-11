<!-- Portfolio -->
<section id="portfolio" class="swiper-slide" data-caption="<span>Projelerim</span>" data-title="Projelerim">
    <div class="section-wrapper">
        <!-- Items List -->
        <div class="portfolio-list portfolio-dark">
            <?php if ($proje == null) {
                echo "<h4 class='alert-succes'>Hata</h4>";
            } else {
                $a=0;
                foreach ($proje as $row) { $a++?>
                    <!-- Portfolio Item  item-wide -->
                    <!-- $x = (($sayi % 2) == 0)  ? 'Tek' : 'Cift';  -->
                    <a href="<?php echo site_url('home/proje') ?>" class="<?php echo (($a % 3) == 0)  ? 'portfolio-item item-wide' : 'portfolio-item'; ?>" data-target="ajax-portfolio">
                        <div class="item-photo">
                            <img src="<?php base_url(); ?>assets/images/projects/<?php echo $row->projeresim; ?>"
                                 alt="">
                        </div>
                        <div class="item-overlay">
                            <span class="item-title"><?php echo $row->projebaslik; ?></span>
                        </div>
                    </a>

                <?php }
            } ?>
        </div>
    </div>
    <!-- Item Details -->
    <div id="portfolio-details"></div>
    <!-- Ajax Loader -->
    <div class="ajax-loader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
</section>
<!-- Portfolio / End -->