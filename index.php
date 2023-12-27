<?php get_header(); ?>

<body>

<?php while(have_posts()){ the_post(); ?>




    <div class="pre-sale">
        <div class="container-fluid">
            <div class="sl-bx">
                
                <div class="index-ads">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ads-box">
                                    <figure style="background-color:rgb(250, 177, 5)">
                                        
                                        <figcaption>
                                            <h4>آموزش برنامه نویسی</h4>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ads-box">
                                    <figure style="background-color:rgb(137, 87, 255)">
                                        
                                        <figcaption>
                                            <h4>مشاوره</h4>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ads-box">
                                    <figure style="background-color:rgb(255, 57, 117)">
                                        
                                        <figcaption>
                                            <h4>آموزش زبان</h4>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            

            <div class="top-access hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="access-right">
                                <ul>
                                    <li><a href="#">خانه</a></li>
                                    <li><a href="#">فروشگاه</a>
                                    </li>
                                    <li><a href="#">تماس</a></li>
                                    <li><a href="#">موبایل</a></li>
                                    <li><a href="#">شکایات</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="access-left ">
                                <ul>
                                    <li><a href="#">خانه</a></li>
                                    <li><a href="#">فروشگاه</a></li>
            
                                    <li><a href="#">موبایل</a></li>
                                    <li><a href="#">شکایات</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="access-left ">
                                <ul>
                                    <li><a href="#">خانه</a></li>
                                    <li><a href="#">فروشگاه</a></li>
            
                                    <li><a href="#">موبایل</a></li>
                                    <li><a href="#">شکایات</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="access-left ">
                                <ul>
                                    <li><a href="#">خانه</a></li>
                                    <li><a href="#">فروشگاه</a></li>
            
                                    <li><a href="#">موبایل</a></li>
                                    <li><a href="#">شکایات</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>

           



    



    <div class="index-blog">
        <div class="container-fluid">
            <div class="sl-bx">
            <div class="row">
                <div class="blog-slider owl-carousel owl-theme">
                    <div class="item">

                        <h2 style="color: blueviolet;"><?php the_title(); ?></h2>
                            
                                <p><?php the_content(); ?></p>
                                <div class="text-left">
                                  <button class="btn btn-primary">جستجوی بهترین اساتید</button>  
                                </div>
                    </div>
                    <div class="item" style="background-color: blueviolet;">
                        <div class="col-md-6 nopadding-r">
                            <div class="index-blog-img">
                                <figure>
                                <?php if(has_post_thumbnail()){ ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <?php } ?>
                            </figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="index-blog-text">
                                <h5><?php the_title(); ?></h5><hr>
                                <span><i class="fa fa-comment"></i> <?php echo comments_number('0 نظر','1 نظر','% نظر'); ?></span>
                                <p><?php the_excerpt(); ?></p>
                                <div class="text-left">
                                  <button class="btn"><a href="#">مشاهده مطلب <i class="fa fa-angle-double-left"></i></a></button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <?php } ?>

    <?php get_footer(); ?>