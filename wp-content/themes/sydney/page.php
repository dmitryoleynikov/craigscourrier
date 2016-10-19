


    <?php get_header();?>
    <div id="home">
        <div class="container">
            <!--       <div class="row"> -->
            <div class="col-md-6">
                <h1><span>sydney's</span><br/>
                    craig courier</h1>
                <p>We can deliver your parcel within a 60km radius of Sydney<br/>
                    with 3hrs. Simple, Fast & Reliable. Oh and yes you can book<br/> today and we'll deliver today! ;)</p>
                <button type="button" class="btn btn-default ">Instant Quote</button>
                <button type="button" class="btn btn-default ">Book now</button>
            </div>
            <!--   </div> -->
        </div>

    </div>
    <div id="express" class="box">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 hidden-sm hidden-xs "><img src="<?php bloginfo('template_url'); ?>/img/hand.png" class="img-responsive" alt=""></div>

                <div class=" col-md-6">
                    <h2><span class="red"><?php  while ( have_posts() ) : the_post(); the_title(); ?></span></h2><br/>
                    <?php the_content();
                    endwhile;

                    ?>

                </div>

            </div>
        </div>
    </div>
    <div id="fast" class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 fast-ico-1 fast-box">
                    <h4> Fast courrier service </h4>
                    <p class="fast-text">We often get calls which go like this 'Can we book today and get
                        it delivered today?' YES that's exactly what we do</p>
                </div>
                <div class="col-md-4 col-sm-4 fast-ico-2 fast-box">
                    <h4> Sydney courrier  </h4>
                    <p class="fast-text">We can deliver your parcel all around Sydney. We cover areas as far as
                        Campbelltown, Parramatta, Hornsby, Northern Beaches, Eastern Suburbs and many more</p>
                </div>
                <div class="col-md-4 col-sm-4 fast-ico-3 fast-box">
                    <h4>Insurance</h4>
                    <p class="fast-text">Are you used to courier companies who don't care about your goods? We care! We
                        care so much that we self insure your goods up to the value of $300</p>

                </div>
            </div>
        </div>
    </div>
   
    <?php get_footer();?>
</div>

<!--
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/jquery.min.js"></script>
-->
<?php wp_footer();?>
</body>
</html>