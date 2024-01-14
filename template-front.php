<?php /* Template Name: Custom Front Page */

get_header(); ?>

<section
  id="home"
  class="devs_top_info min-h-screen md:min-h-[100vh] mb-24 lg:mb-48 flex justify-center items-center text-start px-4 lg:px-16 xl:px-36 py-10 md:py-0 bg-home-bg bg-contain bg-center bg-no-repeat relative"
>
  <div class="devs_top_content">
    <h2
      class="text-3xl md:text-5xl 2xl:text-8xl text-slate-700 font-extrabold capitalize"
    >
      <span
        class="font-extrabold text-slate-200 absolute -mt-2 md:-mt-6 2xl:-mt-14 left-0 lg:left-10 md:left-0"
        ><?php echo esc_html(get_theme_mod('mountaviary_front_span_text')); ?></span
      >
      <span class="relative"><?php echo esc_html(get_theme_mod('mountaviary_front_name_text')); ?></span>
    </h2>
    <p
      class="text-left text-sm 2xl:text-2xl text-gray-500 my-3 md:my-6 font-medium leading-6 font-poppins"
    >
      <?php echo esc_html(get_theme_mod('mountaviary_front_content')); ?>
    </p>
    <div class="person_social_info mt-8">

    <?php if(get_option('front_work_portfolio_option')) { ?>
      <div class="cont_marge flex my-8 text-slate-600">
        <h3 class="hello">
          <a
            class="p-4 font-semibold border hover:border-slate-600 hover:text-slate-800 border-slate-300 border-solid relative"
            href="#contact"
            >Say Hello
          </a>
        </h3>
        <h3 class="my_work">
          <a
            class="px-7 py-4 font-semibold hover:text-slate-800"
            href="#portfolio"
            >My Work
            <span class="ml-2 -rotate-45 absolute text-xs"
              ><i class="fa-solid fa-arrow-right"></i
            ></span>
          </a>
        </h3>
      </div>
    <?php } ?>


    <?php function mountaviary_show_social_sites() {

    $social_sites = mountaviary_get_social_sites();

    foreach($social_sites as $social_site ) {
         if (strlen(get_theme_mod( $social_site ) ) > 0 ) {
             $active_sites[] = $social_site;
         }
    }
 
     // For each active social site, add it as a list item
     if ( !empty( $active_sites ) ) {
         echo "<ul class='flex flex-row justify-start space-x-4 text-lg text-slate-600'>";
 
         foreach ( $active_sites as $active_site ) { ?>
              <li>
                <a
                  class="px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid"
                  href="<?php echo esc_html(get_theme_mod( $active_site )); ?>"
                  ><i class="fa-brands fa-facebook-f"></i
                >
                <?php if( $active_site == 'vimeo' ) { ?>
                 <i class="fa fa-<?php echo $active_site; ?>-square"></i> <?php
                  } else if( $active_site == 'email' ) { ?>
                      <i class="fa fa-envelope"></i> <?php
                  } else { ?>
                      <i class="fa fa-<?php echo $active_site; ?>"></i> <?php
                  } ?>
              </a>
              </li>
              <?php
         }
         echo "</ul>";
     }
} ?>


      <!-- <span class="font-bold capitalize mb-2 block text-sm text-slate-500">Find Me in-</span> -->
      <ul class="flex flex-row justify-start space-x-4 text-lg text-slate-600">
        <li>
          <a
            class="px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid"
            href=""
            ><i class="fa-brands fa-facebook-f"></i
          ></a>
        </li>
        <li>
          <a
            class="px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid"
            href=""
            ><i class="fa-brands fa-github"></i
          ></a>
        </li>
        <li>
          <a
            class="px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid"
            href=""
            ><i class="fa-brands fa-linkedin-in"></i
          ></a>
        </li>
        <li>
          <a
            class="px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid"
            href=""
            ><i class="fa-regular fa-envelope"></i
          ></a>
        </li>
      </ul>


    </div>
  </div>
  <!-- <span class="section_border absolute content-[''] w-10 h-1 bottom-0 left-0 bg-gray-600"
                          ></span> -->
</section>
<!--end devs_top_info-->

<!--ABOUT SECTION-->

<?php 
$args= (array('post_type' => 'user_about_profile', 'post_status' => 'publish'));
$about_query = new WP_Query($args);

if($about_query->have_posts()) :

while ($about_query->have_posts()) : $about_query->the_post(); ?>

<section
  id="about"
  class="devs_about min-h-[100vh] mb-24 lg:mb-48 transition-all"
>
  <div class="page_title my-4">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-lg uppercase">
    <?php the_title(); ?>
    </h3>
  </div>

  
  <div class="about_photo overflow-hidden ">
    <div class="about_photo_single relative ">
      

      <?php if ( has_post_thumbnail() ): ?>
          <?php echo the_post_thumbnail('thumbnail', array('class' => 'w-full h-auto')); ?>
      <?php endif; ?>

      <div style="background-color: rgba(255,255,255,0.7);" class="designation_overlay absolute top-1/2 left-0 z-2 -translate-x-0 -translate-y-1/2 h-full w-full items-center backdrop-blur-sm shadow-lg rounded-e-lg flex flex-col justify-center pl-5">
        <h3
          class="font-bold text-2xl sm:text-4xl text-slate-900  my-2 font-poppins uppercase"
        >
          <?php
          $username = get_post_meta(get_the_ID(), 'username', true);
          echo esc_html( $username );
          ?>
        </h3>
        <p class="designation text-lg text-slate-500 font-semibold">
        <?php
          $userdesig = get_post_meta(get_the_ID(), 'user_designation', true);
          echo esc_html( $userdesig );
          ?>
        </p>
      </div>
    </div>
  </div> 


  <div class="about_info my-4">

    <div
      class="about_content my-4 md:my-6 py-3 md:py-7 border-t-2 border-slate-300 font-poppins"
    >
      <p class="text-slate-600 text-sm font-medium leading-7 mt-2">
        <?php the_content(); ?>
      </p>

      <div
        class="about_content_list mt-8 border-t-2 border-slate-300 p-0 sm:p-1 md:p-9 pt-12 leading-8 text-sm"
      >
        <div class="left_list mt-8 md:mt-0">
          <ul class="columns-1 sm:columns-2 gap-0 sm:gap-x-6 md:gap-x-12">


          <?php 
            $user_birthday = get_post_meta(get_the_ID(), 'user_birthday', true);
            $user_age = get_post_meta(get_the_ID(), 'user_age', true);
            $user_country = get_post_meta(get_the_ID(), 'user_country', true);
            $user_phone = get_post_meta(get_the_ID(), 'user_phone', true);

            $items = [
              'Birthday' => $user_birthday,
              'Age' => $user_age,
              'Country' => $user_country,
              'Phone' => $user_phone,
            ];

            foreach ($items as $label => $value) {
              if (!empty($value)) echo "<li><span class=\"min-w-[100px] mr-2 inline-block font-bold\">$label:</span><span class=\"text-slate-500\">$value</span></li>";
            }
          ?>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="knoweledge_section bg-white py-6 px-2 md:p-6 font-poppins">
    <ul class="grid grid-cols-2 gap-y-6 gap-x-6 sm:gap-x-12">

    <?php 
      $user_degree = get_post_meta(get_the_ID(), 'user_mba', true);
      $institute = get_post_meta(get_the_ID(), 'institute', true);

      $items = [
        $user_degree => $institute,
      ];
      
      foreach($items as $degree => $institute) { 
      if(!empty($user_degree)) echo "
      
      <li>
        <div class=\"education_list flex gap-8 my-2\">
          <div class=\"education_subject w-2/3\">
            <h3 class=\"font-semibold\">$user_degree;</h3>
            <span class=\"text-sm text-slate-400\"> $institute;</span>
          </div>
          <div
            class=\"year w-1/3 text-center md:text-end bg-slate-50 text-slate-400 font-semibold p-2 rounded-sm\"
          >
            <span>2015-16</span>
          </div>
        </div>
      </li>";
    }
    ?>
  
    </ul>
  </div>

  <?php endwhile; ?>
  <?php endif; ?>
</section>

<!--PORTFOLIO SECTION-->




<?php 
$args= (array('post_type' => 'mount_portfolio', 'post_status' => 'publish','posts_per_page' => -1));
$portfolio_query = new WP_Query($args);

if($portfolio_query->have_posts()) :
?>

<section id="portfolio" class="portfolio_area min-h-[100vh] my-24 lg:my-48">
  <div class="portfolio_title my-4">
    <h4 class="bg-slate-200 px-4 py-2 inline-block font-bold text-lg uppercase">
      <?php echo esc_html(get_theme_mod('mountaviary_portfolio_title_text')); ?>
    </h4>
  </div>
  <div class="about_content mt-4 mb-6">
    <h5 class="text-sm leading-8 text-slate-500 font-semibold">
    <?php echo esc_html(get_theme_mod('mountaviary_portfolio_subtitle')); ?>
    </h5>
  </div>

  <div
    class="portfolio_page grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
  >
    <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
    <div class="single_port relative">
      <?php $portfolio_item_link = get_post_meta(get_the_ID(), 'portfolio-image', true); ?>
      <img class="w-full h-auto" src="<?php echo $portfolio_item_link; ?>" alt="" >
      <div
        class="overlay absolute flex top-0 left-0 h-full w-full opacity-0 hover:opacity-80 z-40 bg-slate-700 justify-center items-center cursor-pointer transition"
      >
        <div class="text-slate-200 font-bold">
          <?php $portfolio_item_link = get_post_meta(get_the_ID(), 'portfolio-item-link', true); ?>
          <?php $portfolio_item_title = get_post_meta(get_the_ID(), 'portfolio-item-title', true); ?>
          <a href="<?php echo $portfolio_item_link; ?>" target="_blank"><?php echo $portfolio_item_title; ?></a>
        </div>
        
      </div>
    </div>
    <?php endwhile; ?>

  </div>
</section>

<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>
<!-- END OF PORTFOLIO SECTION  -->



<!-- SERVICES SECTION  -->
<?php 
$args= (array('post_type' => 'mount_services', 'post_status' => 'publish','posts_per_page' => -1));
$services_query = new WP_Query($args);

if($services_query->have_posts()) :
?>

<section id="service" class="services_area min-h-[100vh] my-24 lg:my-48">
  <div class="services_title my-4">
    <h4 class="bg-slate-200 px-4 py-2 inline-block font-bold text-sm uppercase">
      <?php echo esc_html(get_theme_mod('mountaviary_service_title_text')); ?>
    </h4>
  </div>
  <div class="about_content mt-4 mb-6">
    <h2 class="text-xl sm:text-4xl font-bold capitalize"><?php echo esc_html(get_theme_mod('mountaviary_services_subtitle')); ?></h2>
  </div>
  <div class="services_page grid gap-4 grid-cols-1 md:grid-cols-2">

    <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
    <div
      class="single_serve group relative mx-2 my-1 sm:my-4 border-2 border-gray-100 hover:border-gray-200 transition-all rounded border-solid p-4"
    >
    <!-- IF ADDED SERVICE AREA ICON  -->
    <?php $services_icon = get_post_meta(get_the_ID(), 'services-icon', true); ?>
    <?php if($services_icon !== '') { ?>
      <span
        class="service_icon flex justify-center items-center left-0 relative text-center w-10 h-10 bg-slate-200 py-2 px-3 m-4 ml-0 rounded group-hover:bg-slate-300 transition-all"
      >
        
        <span class="dashicons <?php echo $services_icon; ?>"></span>
      </span>
    <?php  } ?>

      <h3 class="services_title text-xl my-4"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
      <p
        class="services_content text-sm text-slate-500 font-normal leading-6 mb-4"
      >
      <?php echo wp_trim_words(get_the_content(), 40, '<a class="font-medium text-sm text-slate-700 hover:font-semibold transition duration-700 block" href=" ' .get_permalink() . ' "> Read More ... </a>'); ?>
      </p>
    </div>
    <?php endwhile; ?>
    <!-- END SERVICES AREA  -->

  </div>
</section>
<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>


<!-- BLOG SECTION  -->

<?php 
    $args = array( 'post_type' => 'post', 'posts_per_page' => 6, 'ignore_sticky_posts' =>1 );
    $the_query = new WP_Query( $args ); 

    if($the_query->have_posts()) : 
?>
<section id="blog" class="blog_posts min-h-[100vh] my-24 lg:my-48">
  <div class="blog_area_title my-4">
    <h4 class="bg-slate-200 px-4 py-2 inline-block font-bold text-sm uppercase">
      Blog
    </h4>
  </div>
  <div class="about_content mt-4 mb-6">
    <h2 class="text-xl sm:text-4xl font-bold capitalize">Recent Web Topics</h2>
  </div>

  <div
    class="blog_info_area grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
  >

  <?php while ($the_query->have_posts( )) : $the_query->the_post(); ?>

    <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
      <a href="<?php the_permalink(); ?>"
        ><?php if ( has_post_thumbnail() ): ?>
          <?php echo the_post_thumbnail('thumbnail', array('class' => 'w-full h-auto hover:grayscale duration-100')); ?>
      <?php endif; ?></a>

      <div class="author_info flex items-center px-4 py-2 mt-2">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '28', $default = '', $alt = '', $args = array( 'class' => 'author_photo rounded-full' ) );  ?>
        <h4
          class="author_name text-slate-500 hover:text-slate-900 mx-3 text-xs font-bold"
        >
        <?php the_author_posts_link(); ?>
        </h4>
        <h5 class="post_date text-slate-500 text-xs"><?php the_date('M d, Y'); ?></h5>
      </div>
      <div class="blog_content px-4 py-3">
        <h4
          class="text-sm text-slate-700 hover:text-slate-950 mb-2 font-medium"
        >
        <?php echo wp_trim_words(get_the_content(), 20, '<a class="font-medium text-xs text-slate-500 hover:text-slate-900 block" href=" ' .get_permalink() . ' "> Read More ... </a>'); ?>
        </h4>
        
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</section>

<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>

<!-- CONTACT SECTION -->

<section
  id="contact"
  class="contact_section min-h-[100vh] my-10 md:my-20 lg:my-36"
>
  <div class="contact_area_title my-4">
    <h4 class="bg-slate-200 px-4 py-2 inline-block font-bold text-sm uppercase">
      Find Me here
    </h4>
  </div>
  <div class="map w-full h-full overflow-hidden">
    <iframe
      class="w-full"
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14586.561258390391!2d91.1065283!3d23.937787600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1702454074289!5m2!1sen!2sbd"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>

  <div
    class="contact_area block md:flex gap-8 my-8 py-9 px-8 md:px-0 font-poppins font-bold uppercase text-xs"
  >
    <div
      class="contact_info w-full md:w-1/2 mb-20 md:mb-0 overflow-hidden text-slate-800"
    >
      <ul>
        <li
          class="grid grid-cols-2 p-4 border border-slate-300 border-solid my-3"
        >
          <div class="text-slate-500">Phone:</div>
          <div>+880-1916-014030</div>
        </li>
        <li
          class="grid grid-cols-2 p-4 border border-slate-300 border-solid my-3"
        >
          <div class="text-slate-500">Email:</div>
          <div class="lowercase">aarifhassan02@gmail.com</div>
        </li>
        <li
          class="grid grid-cols-2 p-4 border border-slate-300 border-solid my-3"
        >
          <div class="text-slate-500">Location:</div>
          <div class="capitalize">Banasree, Dhaka, Bangladesh</div>
        </li>
        <li
          class="grid grid-cols-2 p-4 my-3 border border-slate-300 border-solid"
        >
          <div class="text-slate-500">Working:</div>
          <div>Sun-Thu, 8AM-6PM</div>
        </li>
      </ul>
    </div>

    <div
      class="contact_form w-full md:w-1/2 overflow-hidden ml-0 mr-0 -mt-6 px-0 text-slate-500"
    >
         <?php echo do_shortcode('[wpforms id="1938" title="false]'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
