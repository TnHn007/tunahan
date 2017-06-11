<!-- Home -->
<div id="home">
    <div class="home-wrapper">

        <!-- Home Content -->
        <div class="home-content home-photo main-photo bgimg dark">
            <div class="overlay overlay-black" data-alpha="60"></div>
            <div class="text-center vertical-center">
                <?php if($profil==null)
                {
                    echo "<h4 class='alert-succes'>Hata</h4>";
                } else {
                foreach ($profil as $row){  ?>

                <span class="home-title"> <strong><?php echo $row->profil_adi; ?></strong></span>
                <span class="home-caption"><?php echo $row->profil_unvan; ?></span>
                <?php          }   }    ?>
            </div>
        </div>

        <!-- Start Button -->
        <a href="#" id="btn-start" data-target="next-section"></a>

        <!-- Main Nav -->
        <nav id="main-nav">
            <!-- Menu Toggle -->
            <a href="#" class="menu-toggle menu-toggle-destop" data-target="menu-toggle"></a>
            <!-- Content -->
            <div class="text-right vertical-center">
                <div class="nav-text">
                    <?php if($profil==null)
                    {
                        echo "<h4 class='alert-succes'>Hata</h4>";
                    } else {
                    foreach ($profil as $row){  ?>
                    <div class="my-avatar"><img src="<?php  echo base_url();?>assets/images/resim/<?php echo $row->avatar; ?>" class="img-circle" alt="" /></div>
                    <h2 class="margin-bottom-0"><strong><?php echo $row->profil_adi; ?></strong></h2>
                    <?php          }   }    ?>
                    <h6 class="nav-caption">Deneyim<span class="text-primary">denenme</span> Manavgat</h6>
                </div>
                <div class="content-buttons">
                    <a href="#" class="btn btn-primary" data-placement="1">CV İndir</a>
                    <a href="blog.html" class="btn btn-primary" data-placement="3">Blog</a>
                </div>
            </div>
            <!-- Navigation buttons -->
            <div class="nav-buttons">
                <a href="#" class="btn-prev" data-target="prev-section"><i class="fa fa-angle-left"></i><span></span></a>
                <a href="#" class="btn-next" data-target="next-section"><span>My Resume</span><i class="fa fa-angle-right"></i></a>
            </div>
        </nav>

    </div>
</div>
<!-- Home / End -->

<!-- Sections -->
<div id="sections" class="swiper-container">

    <div class="swiper-wrapper">
