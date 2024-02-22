<?php /* Template Name: Custom Front Page */

get_header('part'); ?>

<?php if(get_option('front_page_user_info', 1)) { ?>
<section
  id="home"
  class="devs_top_info min-h-screen md:min-h-[100vh] mb-24 lg:mb-48 flex justify-center items-center text-start px-4 lg:px-16 xl:px-36 py-10 md:py-0 bg-contain bg-center bg-no-repeat relative"
>
  <div class="devs_top_content">
    <h2
      class="relative text-3xl md:text-5xl 2xl:text-8xl text-slate-700 font-extrabold capitalize"
    >
      <span
        class="font-extrabold text-slate-200 absolute -mt-2 md:-mt-6 2xl:-mt-14 -left-8"
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
    <?php if(get_option('front_work_portfolio_option', 1)) { ?>
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

    <!-- FRONT-PAGE SOCIAL ICONS  -->

    <ul class="social-icons flex flex-row justify-start space-x-4 text-lg text-slate-600">
      <?php
        $social_platforms = array(
            'facebook' => 'fa-brands fa-facebook-f',
            'github' => 'fa-brands fa-github',
            'instagram' => 'fab fa-instagram',
            'linkedin' => 'fa-brands fa-linkedin-in',
            'youtube' => 'fa-brands fa-youtube',
            'whatsapp' => 'fa-brands fa-whatsapp',
            'telegram' => 'fa-brands fa-telegram',
            'twitter' => 'fa-brands fa-x-twitter',
            'discord' => 'fa-brands fa-discord',
            'email' => 'fa-regular fa-envelope',
            // Add more social platforms as needed
        );

        foreach ($social_platforms as $platform => $icon_class) {
            $url = get_theme_mod("{$platform}_url");
            if($platform !== 'email') {
              if ($url) {
                  echo "<li><a class='px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid' href='" . esc_url($url) . "' target='_blank'><i class='$icon_class'></i></a></li>";
              }
            }
            else {
              if ($url) {
                  echo "<li><a class='px-2 md:px-3 py-1 md:py-1.5 rounded border border-slate-200 hover:border-slate-400 border-solid' href='mailto:" . esc_attr($url) . "'' target='_blank'><i class='$icon_class'></i></a></li>";
              }
            }
          }
      ?>
    </ul>
    </div>
  </div>
</section>
<?php } ?>
<!--end devs_top_info-->

<?php if(get_option('mountaviary_show_about_option', true)) { ?>
<!--ABOUT SECTION-->
<section
  id="about"
  class="devs_about min-h-[100vh] mb-24 lg:mb-48 transition-all"
>
  <div class="page_title my-4">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-2xl text-slate-700 tracking-wider  uppercase border-l-4 border-solid border-l-red-500">
    <?php the_title(); ?>
    </h3>
  </div>

  <div class="about_photo overflow-hidden ">
    <div class="about_photo_single grid grid-cols-2 relative ">
      <div class="flex justify-center items-center bg-bg-about bg-cover h-full ">
        <div
          class="my-2 font-poppins pl-10"
        ><span class="block text-sm font-bold text-slate-400  uppercase ">Hello</span>
            <h3 class="-mr-10 font-bold text-8xl text-slate-100 z-40 relative tracking-wide block max-w-max ">
            <?php echo esc_html(get_theme_mod('mountaviary_about_username_text', 'I\'m Arif')); ?>
            </h3>
            <h5 class="text-slate-100 w-4/5">
              <?php echo esc_html(get_theme_mod('mountaviary_about_user_designation', 'A Freelance Web Developer. From Bangladesh')); ?>
            </h5>
        </div>
      </div>
      <div class="about_content">
        <img class="w-full h-auto" src="<?php echo esc_url(get_theme_mod('mountavaiary_about_profile', 'https://pixabay.com/get/g5d98e04901ad7b021a34314a0d48208c294242157632fc16dcd54a7f63dc784f3526f53aaa2668ed249f1fcca1912a3b50c6e2e55434a7159df6946739d2faf9_1280.png')); ?>" alt="pixabay"/>
        <div class="author_info_text text-slate-600 font-medium leading-7 mt-2 p-4">
          <p><?php echo esc_html(get_theme_mod('mountaviary_about_user_content', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.')); ?></p>
          <h5 class="text-xs text-slate-100 font-semibold  mt-8 uppercase"><a class="p-4 inline-block bg-slate-800 hover:text-red-500 transition-all" href="<?php echo esc_url(get_theme_mod('mountaviary_about_resume_link')); ?>" target="_blank">View Resume</a></h5>
        </div>
      </div>
    </div>
  </div> 

  <div class="about_info my-4">
    <div
      class="about_content my-4 md:my-6 py-3 md:py-7 font-poppins"
    >
      <div
        class="about_content_list mt-8 border-t-2 border-slate-300 p-0 sm:p-1 md:p-9 pt-12 leading-8 text-sm"
      >
        <div class="left_list mt-8 md:mt-0">
          <ul class="columns-1 sm:columns-2 gap-0 sm:gap-x-6 md:gap-x-12">
          <?php 
            $user_birthday = get_theme_mod('user_birthday');
            $user_age = get_theme_mod('user_age');
            $user_address = get_theme_mod('user_address');
            $user_email = get_theme_mod('user_email');
            $user_phone = get_theme_mod('user_phone');
            $user_nationality = get_theme_mod('user_nationality');
            $user_study = get_theme_mod('user_study');
            $user_degree = get_theme_mod('user_degree');
            $user_interest = get_theme_mod('user_interest');
            $user_freelance = get_theme_mod('user_freelance');

            $items = [
              'Birthday' => $user_birthday,'Age' => $user_age,'Address' => $user_address,'Email' => $user_email,'Phone' => $user_phone,'Nationality' => $user_nationality,'Study' => $user_study,'Degree' => $user_degree,'Interest' => $user_interest,'Freelance' => $user_freelance,
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
</section>
<?php } ?>



<!--PORTFOLIO SECTION-->
<?php if(get_option('mountaviary_show_portfolio_option', true)) { ?>
<?php 
$args= (array('post_type' => 'mav_portfolio', 'post_status' => 'publish','posts_per_page' => -1));
$portfolio_query = new WP_Query($args);
if($portfolio_query->have_posts()) :
?>
<section id="portfolio" class="portfolio_area min-h-[100vh] my-24 lg:my-48">
  <div class="portfolio_title my-4">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-2xl text-slate-700 tracking-wider  uppercase border-l-4 border-solid border-l-red-500">
      <?php echo esc_html(get_theme_mod('mountaviary_portfolio_title_text','PORTFOLIO')); ?>
    </h3>
  </div>
  <div class="about_content mt-4 mb-6">
    <h5 class="text-sm leading-8 text-slate-500 font-semibold">
    <?php echo esc_html(get_theme_mod('mountaviary_portfolio_subtitle','A few recent design and coding projects')); ?>
    </h5>
  </div>
  <div
    class="portfolio_page grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
  >
    <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
    <div class="single_port relative">
        <?php if ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post_temp', array('class' => 'w-full h-auto')); ?></a>
        <?php } else {?>
          <a href="<?php the_permalink(); ?>"><img class="w-full h-auto wp-post-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/redBackground_port.png" alt="Portfolio Default"></a>
        <?php } ?>
        
      <div
        class="overlay absolute flex top-0 left-0 h-full w-full opacity-0 hover:opacity-80 z-40 bg-slate-700 justify-center items-center cursor-pointer transition"
      >
        <div class="text-slate-100 font-bold text-center">
        <?php
            // Check if the meta box value exists
            $portfolio_link = get_post_meta($post->ID, 'project-link', true);
            if (!empty($portfolio_link)) { ?>
              <a href="<?php echo esc_url($portfolio_link); ?>" target="_blank"><?php echo the_title(); ?></a>
             <?php }
            ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>
<?php } ?>
<!-- END OF PORTFOLIO SECTION  -->



<!-- SERVICES SECTION  -->
<?php if(get_option('mountaviary_show_service_option', true)) { ?>
<?php 
$args= (array('post_type' => 'mav_service', 'post_status' => 'publish','posts_per_page' => -1));
$services_query = new WP_Query($args);

if($services_query->have_posts()) :
?>

<section id="service" class="services_area min-h-[100vh] my-24 lg:my-48">
  <div class="services_title my-4">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-2xl text-slate-700 tracking-wider  uppercase border-l-4 border-solid border-l-red-500">
      <?php echo esc_html(get_theme_mod('mountaviary_service_title_text','SERVICES')); ?>
    </h3>
  </div>
  <div class="about_content mt-4 mb-6">
  <h5 class="text-sm leading-8 text-slate-500 font-semibold"><?php echo esc_html(get_theme_mod('mountaviary_services_subtitle', 'What I can Support')); ?></h5>
  </div>
  <div class="services_page grid gap-4 grid-cols-1 md:grid-cols-2">

    <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
    <div
      class="single_serve group relative mr-2 my-1 sm:my-4 border-2 border-gray-100 hover:border-gray-200 transition-all rounded border-solid p-4"
    >
    <!-- IF ADDED SERVICE AREA ICON -->
    <?php $services_icon = get_post_meta($post->ID, 'service-icon', true);
        if (!empty($services_icon)) { ?>
        <span
          class="service_icon flex justify-center items-center left-0 relative text-center w-10 h-10 bg-slate-200 py-2 px-3 m-4 ml-0 rounded group-hover:bg-slate-300 transition-all"
        >
          <span class="dashicons <?php echo $services_icon; ?>"></span>
        </span>
      <?php } ?>
      <h3 class="services_title text-xl font-medium text-slate-600 hover:text-slate-900 my-4"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
      <p
        class="services_content text-sm text-slate-500 font-normal leading-6 mb-4"
      >
      <?php echo wp_trim_words(get_the_content(), 40, '<a class="font-medium text-sm text-slate-500 hover:font-semibold transition duration-700 block mt-4" href=" ' .get_permalink() . ' "> Read More ... </a>'); ?>
      </p>
    </div>
    <?php endwhile; ?>
    <!-- END SERVICES AREA -->

  </div>
</section>
<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>

<?php } ?>


<!-- BLOG SECTION  -->

<?php if(get_option('mountaviary_show_blog_option', true)) { ?>
<?php 
    $args = array( 'post_type' => 'post', 'posts_per_page' => get_theme_mod('front_blog_post_count'), 'ignore_sticky_posts' =>1 );
    $the_query = new WP_Query( $args ); 
    if($the_query->have_posts()) : 
?>
<section id="blog" class="blog_posts min-h-[100vh] my-24 lg:my-48">
  <div class="blog_area_title my-6">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-2xl text-slate-700 tracking-wider  uppercase border-l-4 border-solid border-l-red-500">
      Blog Posts
    </h3>
  </div>
  <div
    class="blog_info_area grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-3"
  >
  <?php while ($the_query->have_posts( )) : $the_query->the_post(); ?>

    <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
        <div class="thumbnail overflow-hidden">  
          <a href="<?php the_permalink(); ?>"
              ><?php if ( has_post_thumbnail() ): ?>
                <?php echo the_post_thumbnail('media_thumb', array('class' => 'w-full h-auto hover:scale-110 duration-300 rounded-t-lg')); ?>
            <?php endif; ?>
          </a>
        </div>
        <div class="post_title px-4 pt-2 mt-2">
            <?php
              the_title( '<h2 class="entry-title"><a class="font-semibold text-slate-600 hover:text-slate-900" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        </div>
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
          class="text-sm text-slate-700 hover:text-slate-950 mb-2 font-medium leading-6"
        >
        <?php echo wp_trim_words(get_the_content(), 20, '<a class="font-medium text-xs mt-4 text-slate-500 hover:text-slate-900 block transition-all" href=" ' .get_permalink() . ' "> Read More ... </a>'); ?>
        </h4>
        
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</section>

<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>
<?php } ?>

<!-- CONTACT SECTION -->
<?php if(get_option('mountaviary_show_contact_option', true)) { ?>
<section
  id="contact"
  class="contact_section min-h-[100vh] my-10 md:my-20 lg:my-36"
>
  <div class="contact_area_title my-4">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-2xl text-slate-700 tracking-wider  uppercase border-l-4 border-solid border-l-red-500">
      <?php echo esc_html(get_theme_mod('mountaviary_front_contact_page_title', 'Find Me Here')); ?>
    </h3>
  </div>
  <div class="map w-full h-full overflow-hidden">
    <iframe
      class="w-full"
      src="<?php echo esc_url(get_theme_mod('mountaviary_frontpage_map_url', 'https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8')); ?>"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>

  <div
    class="contact_area gap-8 py-9 px-8 md:px-0 font-poppins font-bold uppercase text-xs"
  >
    <div
      class="contact_info mb-10 overflow-hidden text-slate-800 mx-auto w-2/3"
    >   <ul>
          <?php 
            $user_cont_phone = get_theme_mod('mountaviary_front_contact_page_phone');
            $user_cont_email = get_theme_mod('mountaviary_front_contact_page_email');
            $user_cont_address = get_theme_mod('mountaviary_front_contact_page_location_text');
            $items = [
              'Phone' => $user_cont_phone,
              'Email' => $user_cont_email,
              'Address' => $user_cont_address,
            ];
            foreach ($items as $label => $value) {
              if(!empty($value)) echo" <li
                class=\"grid grid-cols-2 p-4 border border-slate-200 border-solid my-3\"
              >
                <div class=\"text-slate-600\">$label</div>
                <div>$value</div>
              </li>";
            }
          ?>
        </ul>
    </div>

    <div
      class="contact_form overflow-hidden ml-0 mr-0 -mt-6 px-0 text-slate-500 leading-8"
    >
        <?php echo do_shortcode('[wpforms id="1938" title="false]'); ?>
        <!-- submit css class  -->
        <!-- class= "rounded-sm bg-slate-100 border-2 border-slate-200 py-2 px-4 text-slate-600 hover:bg-slate-400 hover:border-slate-600 transition duration-500"  -->
    </div>
  </div>
</section>
<?php } ?>

<?php get_footer(); ?>
