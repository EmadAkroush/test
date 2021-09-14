<?php /* Template Name: shop */ ?>

<?php get_header(); ?>

    <div class="grid-shop">
       
 
       


     

            <div class="one-div">
                <div class="div-top-shop-inside first-pic">
                    <div data-aos="zoom-out-left" data-aos-duration="4000">


                        <div class="img-shop-left">
                            <div class="hgg">
                                <div class="discript">
                                    <p> ua1400 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-top-shop-inside second-pic">

                    <div data-aos="zoom-out-right" data-aos-duration="4000">

                        <div class="img-shop-right">
                           <div class="hgg">
                            <div class="discript">
                                <p> ua1400 </p>
                            </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ردیف اول  -->
            <div class="div">
                <div class="col-md-4 moshakhasat">
                    <div data-aos="fade-right" data-aos-duration="4000">

                        <div class="row moshakhasat-inside">


                            <div class="col-md-6 col moshakhasat-div">

                                <img src="assets/image/body/shop-icon-2.svg" class="moshakhasat-img">
                                <p> مشخصات </p>

                            </div>



                            <div class="col-md-6 col moshakhasat-div">

                                <img src="assets/image/body/shop-icon-1.svg" class="moshakhasat-img">
                                <p> دیدگاه کاربران </p>
                            </div>



                        </div>
                    </div>
                </div>
            </div>


            <div class="div">
                <div class="div-tab-inside">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')"> مشخصات </button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')"> دیدگاه کاربران </button>
                    </div>


                    <div id="London" class="tabcontent">
                        <div data-aos="fade-left" data-aos-duration="4000">

                            <div class="row-shop-tab">
                                <div class="shop-6">

                                
                                    <img src="assets/image/body/pscking-3mahe.jpg" class="according-img">
                                    <div class="grid-thumbani-shop">
                                        <div class="pscking">
                                            <img src="assets/image/body/pscking.jpg" class="col-img">
                                        </div>
                                        <div class="pscking">
                                            <img src="assets/image/body/front.jpg" class="col-img">
                                        </div>
                                        <div class="pscking">
                                            <img src="assets/image/body/pack_1.jpg" class="col-img">
                                        </div>
                                    </div>
                                </div>
                         <div class="shop-moshakhasat shop-6">
                                    

                                    <p class="shop-according-top">محصولات مشخصات کیت تشخیص </p>
                                    <div class="grid-top">
                                        <div class="div-a">
                                            <span>
                                                <h3 class="shop-according-top-h3"> پکیج 3 ماه تشخیص </h3>
                                            </span>
                                        </div>
                                        <div class="div-b">
                                            <div class="body-hr"></div>
                                        </div>
                                    </div>

                                    <p class="stare-shop"> امتیاز </p>
                                    <div class="according-price">
                                        <p class="according-price-p"> قیمت 500,000 </p>
                                    </div>
                                    <h3 class="according-shop-onvan"> مشخصات کلی </h3>
                                    <p class="describe-product">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </p>
                                    <ul class="shop-ul">
                                        <li class="a">شماره یک </li>
                                        <li class="b">شماره دو </li>
                                        <li class="c">شماره سه </li>
                                    </ul>
                                    <div class="row grid-buttons-shop">
                                        <div class="col-md-4 woo">
                                            <div class="add-to-cart"> افزودن به سبد خرید </div>
                                        </div>
                                        <div class="col-md-4 woo">
                                            <div class="icon-shop"><img src="assets/image/body/22)%20Icons-Line-Cart.svg"> </div>
                                        </div>
                                        <div class="col-md-4 woo">
                                            <div class="container">
                                                <div class="quantity">
                                                    <a href="#" class="quantity__minus"><span>-</span></a>
                                                    <input name="quantity" type="text" class="quantity__input" value="1">
                                                    <a href="#" class="quantity__plus"><span>+</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <p> </p>
                        </div>

                    </div>
      


                </div>
            </div>

            <div class="div">

                <div class="body-hr"></div>
                <p class="mahsolate-moshabehe-p"> محصولات مشابه </p>
            </div>

            <div class="div row-product-bottom">

                <div class="div-product">
            

                <?php
                      $params = array(
                          'posts_per_page' => 5,
                           'post_type' => 'product'
                        );
                        $wc_query = new WP_Query($params);
                        if ($wc_query->have_posts()) : 
                            while ($wc_query->have_posts()) :
                                $wc_query->the_post(); 
                      ?>
                        <a href="<?php the_permalink(); ?>">
                    <div class="cola">
                    
                        <div data-aos="zoom-out-left" data-aos-duration="5000">

                        <?php   the_post_thumbnail( 'medium', array('class' => 'alignleft')); ?>
                            
                            <p>  <?php the_title(); ?> </p>
                            <p class="left-shop-p"> <?php echo $product->get_price_html(); ?></p>
                        </div>
                    </div>
                        </a>
                    <?php endwhile; ?>
    
    <?php else:  ?>
         <?php _e( 'No Products' ); ?>
    <?php endif; ?>
                      
                 
                </div>

            </div>
        
    </div>
    
    
    
    <div class="row div-up">
        <div onclick="scrollup()"><i class="fas fa-angle-up up"></i></div>

        <?php get_footer(); ?>