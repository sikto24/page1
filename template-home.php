<?php
   /*
   Template Name: Home Page
    */
   
    get_header();
   ?>
<!-- ======== Start Hero Area ==========  -->

   <section class="hero-area-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 my-auto hero-left">
               <div class="slider-content">
                  <h1>
                     <span>GROW</span> YOUR 
                     BUSINESS <span>WITH 
                     ANNCAR</span>
                  </h1>
                  <p>HIGH QUALaITY HEAVY EQUIPMENT 
                     SPARE PARTS SUPPLIER
                  </p>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 hero-right-img carousel-area-wrapper owl-carousel">
               <div class="slider-right-img">
                  <img src="<?php echo get_template_directory_uri(  );?>/assets/img/ex.png" alt="">
               </div>
               <div class="slider-right-img">
                  <img src="<?php echo get_template_directory_uri(  );?>/assets/img/ex.png" alt="">
               </div>
               <div class="slider-right-img">
                  <img src="<?php echo get_template_directory_uri(  );?>/assets/img/ex.png" alt="">
               </div>
               <div class="slider-right-img">
                  <img src="<?php echo get_template_directory_uri(  );?>/assets/img/ex.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </section>

<!-- ======== End Hero Area ==========  -->
<!-- ======== Start Page Content Section  ==========  -->
<?php
   $author_data = get_author_bio();
   $author_name = $author_data['name'];
   $author_avatar = $author_data['avatar'];
   $author_bio = $author_data['bio'];
   
   
   
   
   if(get_current_user_id()){
      $user_id = get_current_user_id();
   } else {
      $user_id = 1;
   }
   $user_facebook = esc_url(get_the_author_meta('facebook', $user_id));
   $user_twitter = esc_url(get_the_author_meta('twitter', $user_id));
   $user_instagram = esc_url(get_the_author_meta('instagram', $user_id));
   $user_linkedin = esc_url(get_the_author_meta('linkedin', $user_id));
   
   
   
   
   ?>
<section class="page-content-area">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="page-content section-padding">
               <h1 id="dual-color-heading"><?php _e(get_the_title());?></h1>
               <?php echo wpautop(get_the_content());?>
            </div>
            <div class="author-box">
               <div class="card-info">
                  <div class="author-img">
                     <?php echo $author_avatar; ?>
                     <div class="author-social-links">
                        <?php
                           if(!empty($user_facebook)){
                             echo '<span> <a class="facebook" href="'.$user_facebook.'"><i class="fa-brands fa-facebook"></i></a></span>';
                           }
                           if(!empty($user_twitter)){
                             echo '<span> <a  class="twitter" href="'.$user_twitter.'"><i class="fa-brands fa-twitter"></i></a></span>';
                           }
                           if(!empty($user_instagram)){
                             echo '<span> <a class="instagram"  href="'.$user_instagram.'"><i class="fa-brands fa-instagram"></i></a></span>';
                           }
                           if(!empty($user_linkedin)){
                             echo '<span> <a  class="linkedin"  href="'.$user_linkedin.'"><i class="fa-brands fa-linkedin"></i></a></span>';
                           }
                           
                           ?>
                     </div>
                  </div>
                  <div class="author-content">
                     <h2><?php echo esc_html($author_name); ?></h2>
                     <p class="card-text"><?php echo esc_html($author_bio); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======== End Page Content Section  ==========  -->
<?php get_footer(); ?>