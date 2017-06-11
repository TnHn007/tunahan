<!-- Resume -->
<section id="resume" class="swiper-slide" data-caption="<span>Yeteneklerim</span> &amp; <span>Uzmanlıklarım</span>"
         data-title="Yeteneklerim">
    <div class="section-wrapper">
        <div class="resume-grid padded">
            <div class="row">

                <div class="resume-col">

                    <!-- About -->
                    <div class="resume-box">
                        <h4 class="title-bar title-bar-black title-bar-hover"><strong>Benim</strong> Hakkımda </h4>
                        <div class="box-content">
                            <?php if ($hakkimda == null) {
                                echo "<h4 class='alert-succes'>Hata</h4>";
                            } else {
                                foreach ($hakkimda as $row) { ?>

                                    <p class="lead"><strong><?php echo $row->kisaca; ?></strong></p>
                                    <p><?php echo $row->hakkimda; ?></p>
                                <?php }
                            } ?>
                            <a href="#" class="btn btn-primary" data-target="slide" data-slide="4">İletişim</a>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="resume-box">
                        <h4 class="title-bar title-bar-black title-bar-hover">Servis <strong> & Hizmetlerim</strong>
                        </h4>
                        <div class="box-content">
                            <div class="single-service">
                                <div class="service-icon icon icon-black icon-circle icon-filled">
                                    <i class="fa fa-database"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title"><strong>Server</strong> Yönetim</h4>
                                    <span class="service-caption text-muted "><i>Linux Server  & Windows Server Bakım , Kurulum</i></span>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon icon icon-black icon-circle icon-filled">
                                    <i class="flaticon-newspaper18"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title"><strong>Web Tasarım</strong></h4>
                                    <span class="service-caption text-muted "><i>Dinamik ve Yönetilebilir Web Siteleri Yapılır.</i></span>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon icon icon-black icon-circle icon-filled">
                                    <i class="flaticon-paper-plane"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title"><strong>Arama Motoru</strong> Optimizasyonu</h4>
                                    <span class="service-caption text-muted "><i>Google da ilk sayfalarada çıkmanzızı sağlar</i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="resume-col">

                    <!-- Skills & Abilities -->
                    <div class="resume-box">
                        <h4 class="title-bar title-bar-black title-bar-hover"><strong>Yetenek </strong> &amp;
                            Uzmanlıklarım</h4>
                        <div class="box-content">


                            <?php if ($yetenekler == null) {
                                echo "<h4 class='alert-succes'>Hata</h4>";
                            } else {
                                foreach ($yetenekler as $row) {
                                    $yetenek = $row->yetenekdegeri; ?>

                                    <!-- Skill Bar -->
                                    <div class="skill-bar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-black" role="progressbar"
                                                 aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                                 style="width:<?php echo $yetenek; ?>%;">
                                                <span class="percent"><?php echo $yetenek; ?>%</span>
                                            </div>
                                        </div>
                                        <h6 class="skill-title"><?php echo $row->yetenekadi; ?></h6>
                                    </div>

                                <?php }
                            } ?>

                        </div>
                    </div>
                    <!-- Educations & Jobs -->
                    <div class="resume-box">
                        <h4 class="title-bar title-bar-black title-bar-hover"><strong>Eğitim</strong></h4>
                        <div class="box-content">
                            <div class="timeline">
                                <?php if ($egitim == null) {
                                    echo "<h4 class='alert-succes'>Hata</h4>";
                                } else {
                                    foreach ($egitim as $row) {
                                         ?>

                                        <!-- Single event -->
                                        <div class="timeline-event te-black">
                                            <div class="event-date"><?php echo $row->tarih; ?></div>
                                            <h4 class="event-name"><strong><?php echo $row->okuladi; ?></strong></h4>
                                            <div class="event-description "><?php echo $row->bolum; ?></div>
                                        </div>
                                    <?php }
                                } ?>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="resume-col">
                    <!-- Hobibes -->
                    <div class="resume-box">
                        <h4 class="title-bar title-bar-black title-bar-hover"><strong>Hobi </strong> &amp;
                            İlgialanlarım</h4>
                        <div class="box-content">
                            <div class="row">
                                <!-- Icon Box -->
                                <div class="col-sm-4 icon-box text-center">
                                        <span class="icon icon-circle icon-sm icon-black"><i
                                                    class="fa fa-globe"></i></span>
                                    <h6 class="font-alt margin-bottom-0">İnternet</h6>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-sm-4 icon-box text-center">
                                        <span class="icon icon-circle icon-sm icon-black"><i
                                                    class="fa fa-cogs"></i></span>
                                    <h6 class="font-alt margin-bottom-0">Araştırma</h6>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-sm-4 icon-box text-center">
                                        <span class="icon icon-circle icon-sm icon icon-black"><i
                                                    class="fa fa-coffee"></i></span>
                                    <h6 class="font-alt margin-bottom-0">Soda & Kahve</h6>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-sm-4 icon-box text-center">
                                    <span class="icon icon-circle icon-sm icon icon-black"><i
                                                class="fa fa-music"></i></span>
                                    <h6 class="font-alt margin-bottom-0">Muzik</h6>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-sm-4 icon-box text-center">
                                        <span class="icon icon-circle icon-sm icon icon-black"><i
                                                    class="fa fa-laptop"></i></span>
                                    <h6 class="font-alt margin-bottom-0">Bilgisayar</h6>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-sm-4 icon-box text-center">
                                    <span class="icon icon-circle icon-sm icon icon-black"><i
                                                class="fa fa-film"></i></span>
                                    <h6 class="font-alt margin-bottom-0">Film</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Resume / End -->
