<?php get_header(); ?>

<!-- BANNER START-->
<section class="banner">
    <div class="overlay"></div>
    <div class="particles-js" id="particles-js"></div>
    <div class="container">
    <div class="banner__wrapper">
        <div class="banner__paragraph">
        <div class="banner--socials">
            <ul>
            <?php 
                if(have_rows('home_banner_socials')) :
                while( have_rows('home_banner_socials') ): the_row(); 
            ?>
            <li>
                <a href="<?php echo get_sub_field('social_link') ?>"><?php echo get_sub_field('font_awesome') ?></a>
            </li>
            <?php 
                endwhile;
                else : echo "No Social Links";  
                endif;
            ?>
            </ul>
        </div>
        <div class="banner--title">
            <h4 class="block-header"><?php echo get_field('home_banner_subtitle') ?></h4>
            <h1>
            <?php echo get_field('home_banner_title') ?>
            <span class="featured-text">
            <?php echo get_field('home_banner_title_featured') ?>
                <img src="wp-content\themes\Flex IT\dist\images\wavy.svg" alt="" />
            </span>
            </h1>
            <span class="stripes"></span>
        </div>
        <div class="banner--subtitle">
            <p>
            <?php echo get_field('home_banner_paragraph') ?>
            </p>
        </div>
        <div class="banner--cta">
            <div class="btn__outline">
            <button><?php echo get_field('home_banner_button') ?></button>
            </div>
            <div class="cta--btn">
            <a class="video-link" href="https://www.youtube.com">
                <div class="play-video-btn">
                <div class="play-btn">
                    <i class="fas fa-play icon"></i>
                </div></div
            ></a>
            </div>
        </div>
        </div>
        <div data-tilt class="banner__img">
        <img src="<?php echo get_field('home_banner_image') ?>" alt="" />
        </div>
    </div>
    </div>
</section>
<!-- BANNER END -->

<!-- SERVICES START -->
<section class="services">
    <div class="container">
    <div class="services__wrapper">
        <!-- Service Title -->
        <div class="services__title">

            <div class="services__info">
                <h4 class="block-header"><?php echo get_field('services_subtitle') ?></h4>
                <h1><?php echo get_field('services_title') ?></h1>
                <p>
                <?php echo get_field('services_paragraph') ?>
                </p>
            </div>
            <div class="services__btn">
                <a href="#">
                <?php echo get_field('services_button') ?> <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Services Cards -->
        <div class="services__cardlist">  
            <!-- Card 1 -->
            <?php 
                $activity = new WP_Query(array(
                    'post_type' => 'services'
                ))
            ?>
            <?php if ($activity->have_posts()) : while($activity->have_posts()) : $activity->the_post(); ?>
            <!-- Card 1 -->
            <div class="services__cards">
                <div class="services__cardicon">
                <img src="<?php echo get_field('services_card_icon')?>" alt="" />
                </div>
                <h3><?php the_title()?></h3>
                <p>
                <?php the_content()?>
                </p>
                <a href="#"><?php echo get_field('services_card_button')?><i class="fa-solid fa-arrow-right"></i> </a>
            </div>
            <?php endwhile;
            else :
                echo "No more Activity";
            endif;
        ?>
        </div>
    </div>
    </div>
</section>
<!-- SERVICES END -->

<!-- ABOUT US START-->
<section class="about">
    <div class="container">
    <div class="about__wrapper">
        <div class="about__contents">
        <h4 class="block-header">ABOUT US</h4>
        <h2>Trusted By Worldwide<br />Clients Since 1980.</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A officia
            molestiae dolorum tempora ut accusamus cupiditate! Nesciunt
            tempora reiciendis libero voluptate!
        </p>
        <div class="about__details">
            <div class="about__info">
            <div class="about__icons">
                <i class="fa-solid fa-medal"></i>
            </div>
            <div class="about__content">
                <h5>First On Field</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur, iste
                </p>
            </div>
            </div>
            <div class="about__info">
            <div class="about__icons">
                <i class="fa-regular fa-hand"></i>
            </div>
            <div class="about__content">
                <h5>Easy To Reach</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur, iste
                </p>
            </div>
            </div>
            <div class="about__info">
            <div class="about__icons">
                <i class="fa-solid fa-map-location-dot"></i>
            </div>
            <div class="about__content">
                <h5>Worldwide Services</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur, iste
                </p>
            </div>
            </div>
            <div class="about__info">
            <div class="about__icons">
                <i class="fa-solid fa-gears"></i>
            </div>
            <div class="about__content">
                <h5>24/7 Support</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur, iste
                </p>
            </div>
            </div>
        </div>
        <div class="about__bottom">
            <div class="about__btn">
            <button>Get In Touch</button>
            </div>
            <div class="about__imgname">
            <img src="./images/signature-light.png" alt="" />
            <p>CEO & FOUNDER</p>
            </div>
        </div>
        </div>
        <div class="about__image">
        <img src="./images/about us.png" data-tilt alt="" />
        </div>
    </div>
    </div>
</section>
<!-- ABOUT US END -->

<!--WHY CHOOSE US START-->
<section class="whychoose">
    <div class="container">
    <div class="whychoose__wrapper">
        <div class="whychoose__image">
        <img src="https://placeholder.com/800" data-tilt="" alt="" />
        </div>
        <div class="whychoose__contents">
        <h4 class="block-header">WHY CHOOSE US</h4>
        <h2>Why Our Customers <br />Choose Working With Us</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A officia
            molestiae dolorum tempora ut accusamus cupiditate! Nesciunt
            tempora reiciendis libero voluptate!
        </p>
        <div class="whychoose__info">
            <div class="whychoose__number">01.</div>
            <div class="whychoose__content">
            <h5>Latest Technologies</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                repellendus minima reiciendis nobis dolore obcaecati.
            </p>
            </div>
        </div>
        <div class="whychoose__info">
            <div class="whychoose__number">02.</div>
            <div class="whychoose__content">
            <h5>Uniqe Solutions</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                repellendus minima reiciendis nobis dolore obcaecati.
            </p>
            </div>
        </div>
        <div class="whychoose__info">
            <div class="whychoose__number">03.</div>
            <div class="whychoose__content">
            <h5>Powerful Strategies</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                repellendus minima reiciendis nobis dolore obcaecati.
            </p>
            </div>
        </div>
        <div class="whychoose__btn">
            <button>Get In Touch</button>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- WHY CHOOSE US END -->

<!-- STATS START-->
<section class="stats">
    <div class="overlay"></div>
    <div class="container">
    <div class="stats__wrapper">
        <div class="stats__content">
        <div data-tilt class="stats__box">
            <i class="fa-solid fa-gear"></i>
            <div class="counter">750</div>
            <p class="text">Finished Projects</p>
        </div>
        <div data-tilt class="stats__box">
            <i class="fa-solid fa-briefcase"></i>
            <div class="counter">23</div>
            <p class="text">Created Jobs</p>
        </div>
        <div data-tilt class="stats__box">
            <i class="fa-regular fa-face-smile"></i>
            <div class="counter">200</div>
            <p>Happy Customers</p>
        </div>
        <div data-tilt class="stats__box">
            <i class="fa-regular fa-calendar-days"></i>
            <div class="counter">28</div>
            <p>Years of Experience</p>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- STATS END -->

<!-- PORTFOLIO START -->
<section class="portfolio">
    <div class="container">
    <div class="portfolio__wrapper">
        <!-- Title -->
        <div class="portfolio__title">
        <div class="portfolio__info">
            <h4 class="block-header"><?php echo get_field('portfolio_subtitle')?></h4>
            <h1><?php echo get_field('portfolio_title')?></h1>
        </div>

        <div class="portfolio__btn">
            <a href="#"> <?php echo get_field('portfolio_button')?> <i class="fa-solid fa-arrow-right"></i> </a>
        </div>
        </div>

        <!-- Navigation Mobile Only -->
        <div class="portfolio__navm">
        <ul class="portfolio_btn">
            <li>
            <a onclick="filterObjects('all')" class="active"> All </a>
            </li>
            <li>
            <a onclick="filterObjects('mobile')"> Mobile Apps </a>
            </li>
            <li>
            <a onclick="filterObjects('cloud')">Cloud</a>
            </li>
            <li>
            <a onclick="filterObjects('data')"> Data Analysis </a>
            </li>
            <li>
            <a onclick="filterObjects('hosting')"> Hosting </a>
            </li>
        </ul>
        </div>

        <!-- Cards -->
        <div class="portfolio__cardlist">

        <?php 
                $activity = new WP_Query(array(
                    'post_type' => 'portfolio'
                ))
            ?>
            <?php if ($activity->have_posts()) : while($activity->have_posts()) : $activity->the_post(); ?>
        <!-- Card 1 -->
        <div class="portfolio__cards mobile">
            <img src="<?php echo get_field('portfolio_images')?>" alt="" />

            <div class="portfolio__hover">
            <div class="portfolio__arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="portfolio__name">
                <h4><?php the_title()?></h4>
            </div>
            </div>
        </div>
        <?php endwhile;
            else :
                echo "No more Activity";
            endif;
        ?>
        </div>
    </div>
    </div>
</section>
<!-- PORTFOLIO END -->

<!-- CLIENTS START-->
<section class="clients">
    <div class="container">
    <h2>Trusted By Over 500 Clients Around The World</h2>
    <div class="clients__wrapper">
        <div class="clients__slider">
        <img src="https://placeholder.com/400x400" alt="" />
        <img src="https://placeholder.com/400x400" alt="" />
        <img src="https://placeholder.com/400x400" alt="" />
        <img src="https://placeholder.com/400x400" alt="" />
        <img src="https://placeholder.com/400x400" alt="" />
        <img src="https://placeholder.com/400x400" alt="" />
        <img src="https://placeholder.com/400x400" alt="" />
        </div>
    </div>
    </div>
</section>
<!-- CLIENTS END -->

<!-- PRICING START -->
<section class="price">
    <div class="container">
    <div class="price__wrapper">
        <!-- Title -->
        <div class="price__title">
        <div class="price__info">
            <h4 class="block-header"><?php echo get_field('pricing_subtitle')?></h4>
            <h1><?php echo get_field('pricing_title')?></h1>
            <p>
            <?php echo get_field('pricing_paragraph')?>
            </p>
        </div>
        <div class="price__btn">
            <a href="#">
            <?php echo get_field('pricing_button')?> <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        </div>

        <!-- Price Cards -->
        <div class="price__cardlist">

        <?php 
                $activity = new WP_Query(array(
                    'post_type' => 'pricing'
                ))
            ?>
            <?php if ($activity->have_posts()) : while($activity->have_posts()) : $activity->the_post(); ?>
        <!-- Card 1 -->
        <div class="price__cards">
            <div class="price__card--head">
            <div class="price__cardicon">
                <img src="<?php echo get_field('pricing_card_image')?>" alt="">
            </div>
            <h4><?php echo get_field('pricing_card_title')?></h4>
            <div class="price__cost">
                <h1><i class="fa-solid fa-dollar-sign"></i><?php echo get_field('pricing_card_cost')?></h1>
            </div>
            <h6><?php echo get_field('pricing_card_subtitle')?></h6>
            </div>

            <ul>
            <?php 
            if(have_rows('pricing_card_list')) : ?>
            <?php while( have_rows('pricing_card_list')): the_row(); ?>
            <li><?php echo get_sub_field('pricing_card_info')?></li>
            <?php endwhile;
        else : 
            echo "No more slider";
        endif;
        ?>
            </ul>
            <div class="price__cardbtn"><a href="#">Select Plan</a></div>
        </div>
        <?php endwhile;
            else :
                echo "No more Activity";
            endif;
        ?>
        <!-- Card 2 -->
        <div class="price__cards">
            <div class="price__card--head">
            <div class="price__cardicon">
                <i class="fa-solid fa-tv"></i>
            </div>
            <h4>Standard Plan</h4>
            <div class="price__cost">
                <h1><i class="fa-solid fa-dollar-sign"></i>85</h1>
            </div>
            <h6>Per Project</h6>
            </div>
            <ul>
            <li>150 Lorem, Ipsum Dolor.</li>
            <li>20 Lorem Ipsum Dolor Sit .</li>
            <li>Lorem Ipsum Dolor Sit.</li>
            <li>Free Lorem Ipsum Dolor .</li>
            <li>Added Lorem Ipsum Dolor.</li>
            </ul>
            <div class="price__cardbtn"><a href="#">Select Plan</a></div>
        </div>

        <!-- Card 3 -->
        <div class="price__cards special">
            <div class="price__card--head special">
            <div class="price__cardicon activea">
                <i class="fa-solid fa-tv"></i>
            </div>
            <h4>Pro Plan</h4>
            <div class="price__cost activeb">
                <h1><i class="fa-solid fa-dollar-sign"></i>150</h1>
            </div>
            <h6>Per Project</h6>
            </div>

            <ul>
            <li>150 Lorem, Ipsum Dolor.</li>
            <li>20 Lorem Ipsum Dolor Sit .</li>
            <li>Lorem Ipsum Dolor Sit.</li>
            <li>Free Lorem Ipsum Dolor .</li>
            <li>Added Lorem Ipsum Dolor.</li>
            </ul>
            <div class="price__cardbtn active">
            <a href="#">Select Plan</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="price__cards">
            <div class="price__card--head">
            <div class="price__cardicon">
                <i class="fa-solid fa-tv"></i>
            </div>
            <h4>Ultimate Plan</h4>
            <div class="price__cost">
                <h1><i class="fa-solid fa-dollar-sign"></i>210</h1>
            </div>
            <h6>Per Project</h6>
            </div>
            <ul>
            <li>150 Lorem, Ipsum Dolor.</li>
            <li>20 Lorem Ipsum Dolor Sit .</li>
            <li>Lorem Ipsum Dolor Sit.</li>
            <li>Free Lorem Ipsum Dolor .</li>
            <li>Added Lorem Ipsum Dolor.</li>
            </ul>
            <div class="price__cardbtn"><a href="#">Select Plan</a></div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- PRICING END -->

<!-- TESTIMONIALS START -->
<section class="test">
    <div class="container">
    <div class="overlay"></div>
    <div class="test__wrapper">
        <div class="test__title">
        <h4 class="block-header">TESTIMONIALS</h4>
        <h1>Customers Testimonials</h1>
        </div>
        <!-- List -->
        <div class="test__contentlist">
        <!-- Testimonial 1 -->

        <div class="test__content">
            <img src="https://placeholder.com/400x400" alt="" />
            <p>
            ipsum dolor sit amet consectetur adipisicing elit. Quod, id
            sequi aut qui est ab, corporis quis maiores reiciendis explicabo
            odio tenetur nulla sint vel.
            </p>
            <h3>Yusuf Amin</h3>
            <h6>Founder</h6>
        </div>

        <!-- Testimonial 2 -->
        <div class="test__content">
            <img src="https://placeholder.com/400x400" alt="" />
            <p>
            ipsum dolor sit amet consectetur adipisicing elit. Quod, id
            sequi aut qui est ab, corporis quis maiores reiciendis explicabo
            odio tenetur nulla sint vel.
            </p>
            <h3>Yusuf Amin</h3>
            <h6>Founder</h6>
        </div>

        <!-- Testimonial 3 -->
        <div class="test__content">
            <img src="https://placeholder.com/400x400.png" alt="" />
            <p>
            ipsum dolor sit amet consectetur adipisicing elit. Quod, id
            sequi aut qui est ab, corporis quis maiores reiciendis explicabo
            odio tenetur nulla sint vel.
            </p>
            <h3>Yusuf Amin</h3>
            <h6>Founder</h6>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- TESTIMONIALS END -->

<!-- LATEST NEWS START -->
<section class="news">
      <div class="container">
        <div class="news__wrapper">
          <!-- Title -->
          <div class="news__title">
            <div class="news__info">
              <h4 class="block-header">BLOG</h4>
              <h1>Latest News</h1>
            </div>
            <div class="news__btn">
              <a href="#">
                See All Post <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <?php $activity = new WP_Query(array(
                'post_type' => 'post',       
        )) ?>
          <div class="news__cardlist">
            <!-- Card 1 -->
            <?php 
                 if($activity->have_posts()) : while($activity->have_posts()) : $activity->the_post(); ?>
            <div class="news__cards">
              <div class="news__date">
                <p><?php echo get_field('news_post_date')?></p>
              </div>
              <div class="news__img">
                <img src="<?php echo get_field('news_post_image')?> " alt="" />
              </div>
              <div class="news__cardsinfo">
                <div class="news__pins">
                  <i class="fa-regular fa-bookmark"></i>
                  <p class="tags"> <?php echo get_field('news_post_tag')?> |</p>
                  <i class="fa-regular fa-user"></i>
                  <p><?php echo get_field('news_post_author')?> </p>
                </div>

                <h2><?php the_title()?></h2>
                <p>
                  <?php echo get_field('news_post_paragraph') ?>
                </p>
                <div class="news__cardbtn">
                  <a href="#">
                    Read More <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <?php endwhile;
        else : 
          echo "No Data";
        endif;
        ?>
          </div>
        </div>
      </div>
</section>
<!-- LATEST NEWS END -->

<?php get_footer(); ?>