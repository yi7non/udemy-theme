<?php get_header(); ?>


<!-- Page Title
============================================= -->
<section id="page-title">

  <div class="container clearfix">
    <h1><?php _e('Search Results for: Term', 'udemy') ?></h1>
      <h2><strong><?php echo get_search_query(); ?></strong></h2>
  </div>

</section><!-- #page-title end -->

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<!-- Post Content
                ============================================= -->
				<div class="postcontent nobottommargin clearfix">

          <!-- Search Box
                        ============================================= -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><?php _e('What are you searhing for today?', 'udemy'); ?></h3>
            </div>
            <div class="panel-body">
              <?php get_search_form(); ?>
            </div>
          </div><!-- Search Box End -->

					<!-- Posts
                    ============================================= -->
					<div id="posts">
						<?php
							if (have_posts()) {
								while(have_posts()) {
									the_post();
									get_template_part('partials/post/content', 'excerpt');
								}
							}
						 ?>
						<!-- #posts end -->

					<!-- Pagination
                    ============================================= -->
					<ul class="pager nomargin">
						<li class="previous"><?php previous_posts_link('&larr; Older') ?></li>
						<li class="next"><?php next_posts_link('Newer &rarr;') ?></li>
					</ul><!-- .pager end -->

				</div><!-- .postcontent end -->

				<!-- Sidebar
                ============================================= -->
								<?php get_sidebar(); ?>
				<!-- .sidebar end -->

			</div>

		</div>

	</section><!-- #content end -->

	<?php get_footer(); ?>
