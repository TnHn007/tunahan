<!-- Latest Posts -->
<section id="latestPosts" class="swiper-slide" data-caption="<span>Blogum</span>" data-title="Blogum">
    <div class="section-wrapper">

        <div class="middle-container padded">

            <!-- Posts List -->
            <div class="blog-post-list">
                <div class="row">
                    <?php if ($blog == null) {
                        echo "<h4 class='alert-succes'>Hata</h4>";
                    } else {
                        foreach ($blog as $row) { ?>
                            <!-- Post -->
                            <div class="post col-lg-6 ">
                                <div class="post-image"><img src="<?php base_url(); ?>assets/images/blog/<?php echo $row->blogresim; ?>"
                                                             alt=""/></div>
                                <div class="post-content">
                                    <div class="post-category">
                                        <span class="label label-black"></span>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="blog-post.html"><?php echo $row->blogbaslik; ?></a></h4>
                                    </div>
                                    <div class="post-meta">
                                        <span><i class="icon-before fa fa-user"></i><a href="#"><?php echo $row->yazar; ?></a></span>
                                        <span><i class="icon-before fa fa-clock-o"></i><?php echo $row->blogcreatedate; ?></span>
                                    </div>
                                    <div class="post-text">
                                        <p> <?php echo $row->blogmetin; ?></p>
                                    </div>
                                    <a class="btn btn-primary btn-sm margin-bottom-10" href="blog-post.html">Devamı</a>
                                </div>
                            </div>
                        <?php }
                    } ?>


                </div>

            </div>
</section>
<!-- Latest Posts / End -->