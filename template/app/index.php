<?php 
        require_once(BASE_PATH . '/template/app/layouts/header.php');
   ?>

    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    <div class="col-lg-8 top-post-left">
                            <?php if(isset($topSelectedPosts[0])) {
                                    ?>
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="<?= asset($topSelectedPosts[0]['image']) ?>" alt="">
                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                            <li><a href="<?= url('show-category/' . $topSelectedPosts[0]['cat_id']) ?>"><?= $topSelectedPosts[0]['category'] ?></a></li>
                            </ul>
                            <a href="<?= url('show-post/' . $topSelectedPosts[0]['id']) ?>">
                                <h3 style="color: black;"><?= $topSelectedPosts[0]['title'] ?></h3>
                            </a>
                            <ul class="meta">
                                <li><a href="#" style="color: black;"><span class="lnr lnr-user" style="color: black;"></span><?= $topSelectedPosts[0]['username'] ?></a></li>
                                <li><a href="#" style="color: black;"><?= $topSelectedPosts[0]['created_at']  ?><span class="lnr lnr-calendar-full" style="color: black;"></span></a></li>
                                <li><a href="#" style="color: black;"><?= $topSelectedPosts[0]['comments_count'] ?><span class="lnr lnr-bubble" style="color: black;"></span></a></li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 top-post-right">
                    <?php if(isset($topSelectedPosts[1])) { ?>

                        <div class="single-top-post">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="<?= asset($topSelectedPosts[1]['image']) ?>" alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="<?= url('show-category/' . $topSelectedPosts[1]['cat_id']) ?>"><?= $topSelectedPosts[1]['category'] ?></a></li>
                                </ul>
                                <a href="<?= url('show-post/' . $topSelectedPosts[1]['id']) ?>">
                                    <h4><?= $topSelectedPosts[1]['title'] ?></h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span><?= $topSelectedPosts[1]['username'] ?></a></li>
                                    <li><a href="#"><?= $topSelectedPosts[1]['created_at']  ?><span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#"><?= $topSelectedPosts[1]['comments_count'] ?><span class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php } 
                        if(isset($topSelectedPosts[2])) { ?>
                        <div class="single-top-post mt-10">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="<?= asset($topSelectedPosts[2]['image']) ?>" alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="<?= url('show-category/' . $topSelectedPosts[2]['cat_id']) ?>"><?= $topSelectedPosts[2]['category'] ?></a></li>
                                </ul>
                                <a href="<?= url('show-post/' . $topSelectedPosts[2]['id']) ?>">
                                    <h4><?= $topSelectedPosts[2]['title'] ?></h4>
                                </a>
                                <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span><?= $topSelectedPosts[2]['username'] ?></a></li>
                                    <li><a href="#"><?= $topSelectedPosts[2]['created_at']  ?><span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#"><?= $topSelectedPosts[2]['comments_count'] ?><span class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <?php if(!empty($breakingNews)) { ?>
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap text-left">
                            <h6><span> Breaking News :</span> <a href="<?= url('show-post/' . $breakingNews['id']) ?>"><?= $breakingNews['title'] ?></a></h6>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title post-left text-left">Latest News</h4>
                            <?php foreach ($lastPosts as $lastPost) { ?>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?= asset($lastPost['image']) ?>" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="<?= url('show-category/' . $lastPost['cat_id']) ?>"><?= $lastPost['category'] ?></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-left text-left">
                                    <a href="<?= url('show-post/' . $lastPost['id']) ?>">
                                        <h4><?= $lastPost['title'] ?></h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span><?= $lastPost['username'] ?></a></li>
                                        <li><a href="#"><?= $lastPost['created_at'] ?><span class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#"><?= $lastPost['comments_count'] ?><span class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                    <p class="excert text-left">
                                    <?= $lastPost['summary'] ?>
                                        
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
                          
                 
                        </div>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        


                        <!-- End banner-ads Area -->
                        <!-- Start popular-post Area -->
                        
                        <!-- End popular-post Area -->
                    </div>
                    <?php 
                        require_once(BASE_PATH . '/template/app/layouts/sidebar.php');
                        ?>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>

    <!-- start footer Area -->
   <?php 
        require_once(BASE_PATH . '/template/app/layouts/footer.php');
   ?>