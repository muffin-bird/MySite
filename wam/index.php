<?php get_header(); ?>

<div class="section">
  <div class="page-headline">
      <h2>Blog</h2>
      <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>
  <div class="archive-sidebar">
    <ul class="archive-blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
      <li class="archive-blog-item">
        <a href="<?php the_permalink(); ?>" class="archive-blog-link">
          <div class="archive-blog-img">
            <?php if (has_post_thumbnail()) : ?>
              <span class="mask"><?php the_post_thumbnail(array(400, 225)); ?></span>
            <?php else : ?>
              <span class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" width="400" height="225" alt="blog"></span>
            <?php endif; ?>
          </div>
          <div class="archive-blog-info">
            <div class="head-info">
            <time class="archive-blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
            <span class="category-date">
              <?php
                $cat = get_the_category();
                $cat = $cat = $cat[0]; {
                  echo $cat->cat_name;
                }
              ?>
            </span>
            </div>
            <h2 class="archive-blog-title"><?php the_title(); ?></h2>
          </div>
        </a>
      </li>
      <?php endwhile; endif; ?><!-- ループ終わり -->
      <?php if (function_exists("pagination")): ?>
        <?php pagination(); ?>
      <?php endif; ?>
    </ul>
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>