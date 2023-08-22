<?php
/**
 *
 * Template Name: Gallery Page
 *
 **/
get_header();
?>

  <main>
    <?php $header = get_field('header');
    $content = $header['content'];
    if ($content): ?>
      <div class="header__banner d-flex justify-content-center align-items-center position-relative mb-1 video-banner"
           style="background-image: url(<?php echo esc_attr($header['banner_image']['url']); ?>);background-repeat: no-repeat; background-size: cover; background-position: center;">
        <?php $video = $header['video_url'];
        if ($video): ?>
          <video autoplay muted loop class="d-none d-lg-block" id="pvcVideo">
            <source src="<?php echo esc_attr($header['video_url']); ?>" type="video/mp4">
          </video>
        <?php endif; ?>
        <div
          class="block__tint-overlay <?php echo esc_attr($header['overlay']); ?> position-absolute h-100 z-index-1"></div>
        <div class="container position-relative z-index-10">
          <div class="row justify-content-center">
            <div class="col-12 text-white text-decoration-none pt-2 text-white">
              <?php echo $header['content']; ?>
            </div>
            <div class="col-12 text-center text-white">
              <a href="#content" class="scrollable-anchor header-anchor mt-2">
                <img src="<?php bloginfo('template_url'); ?>/images/goto-arrow.svg" alt=" "
                     class="goto-arrow-svg">
              </a>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- bg-primary -->
    <?php endif; ?>

    <?php $gallery = get_field('gallery');
    if ($gallery): ?>
      <section class="px-lg-1" id="content">
        <div class="container-fluid js-gallery">
          <?php echo do_shortcode('[ajax_load_more preloaded="true" acf="true" preloaded_amount="6" posts_per_page="6" acf_field_type="gallery" acf_field_name="gallery" scroll="false" template="default"]'); ?>
        </div>
      </section>
    <?php endif; ?>

    <?php $cta = get_field('call_to_action');
    if ($cta): ?>
      <section>
        <div class="container mb-2">
          <div class="row">
            <div class="col text-center">
              <a href="<?php echo $cta['url']; ?>"
                <?php
                $target = $cta['target'];
                echo !empty($target) ? "target='" . $target . "'" : ""; ?>
                 class="btn btn-secondary mx-auto"><?php echo $cta['title']; ?></a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

  </main>

<?php get_footer();