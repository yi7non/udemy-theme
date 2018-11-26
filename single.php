<?php get_header(); ?>

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<!-- Post Content
                ============================================= -->
				<div class="postcontent nobottommargin clearfix">

					<?php
						if(have_posts()) {
							while(have_posts()) {
								the_post();
								$author_ID = get_the_author_meta('ID');
								$author_url = get_author_posts_url($author_ID);
								?>
								<div class="single-post nobottommargin">

										<!-- Single Post
										============================================= -->
										<div class="entry clearfix">

												<!-- Entry Title
												============================================= -->
												<div class="entry-title">
														<h2><?php the_title(); ?></h2>
												</div><!-- .entry-title end -->

												<!-- Entry Meta
												============================================= -->
												<ul class="entry-meta clearfix">
														<li><i class="icon-calendar3"></i><?php echo get_the_date(); ?></li>
														<li><a href="<?php echo $author_url ?>"><i class="icon-user"></i><?php the_author(); ?></a></li>
														<li><i class="icon-folder-open"></i><?php the_category(' | '); ?></li>
														<li><a href="#"><i class="icon-comments"></i><?php comments_number('no comment'); ?></a></li>
												</ul><!-- .entry-meta end -->

												<!-- Entry Image
												============================================= -->
												<?php
													if(has_post_thumbnail()) {
														?>
															<div class="entry-image">
																<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail('full') ?>
																</a>
															</div>
														<?php
													}
												 ?>
												<!-- .entry-image end -->

												<!-- Entry Content
												============================================= -->
												<div class="entry-content notopmargin">
														<?php
														the_content();
														wp_link_pages(array(
															'before' => '<p class="text-center">' . __('page: ', 'udemy'),
															'after' => '</p>'
														));
														 ?>
														<!-- Post Single - Content End -->

														<!-- Tag Cloud
														============================================= -->
														<div class="tagcloud clearfix bottommargin">
															<?php the_tags('', ''); ?>
														</div><!-- .tagcloud end -->

														<div class="clear"></div>

												</div>
										</div><!-- .entry end -->

										<!-- Post Navigation
										============================================= -->
										<div class="post-navigation clearfix">

												<div class="col_half nobottommargin">
														<?php previous_post_link(); ?>
												</div>

												<div class="col_half col_last tright nobottommargin">
														<?php next_post_link(); ?>
												</div>

										</div><!-- .post-navigation end -->

										<div class="line"></div>

										<!-- Post Author Info
										============================================= -->
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Posted by <span><a href="#">John Doe</a></span></h3>
												</div>
												<div class="panel-body">
														<div class="author-image">
																<img src="images/author/1.jpg" alt="" class="img-circle">
														</div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
												</div>
										</div><!-- Post Single - Author End -->

										<div class="line"></div>

										<h4>Related Posts:</h4>

										<div class="related-posts clearfix">

												<div class="mpost clearfix">
														<div class="entry-image">
																<a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
														</div>
														<div class="entry-c">
																<div class="entry-title">
																		<h4><a href="#">This is an Image Post</a></h4>
																</div>
																<ul class="entry-meta clearfix">
																		<li><i class="icon-calendar3"></i> 10th July 2014</li>
																		<li><a href="#"><i class="icon-comments"></i> 12</a></li>
																</ul>
																<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
														</div>
												</div>

												<div class="mpost clearfix">
														<div class="entry-image">
																<a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
														</div>
														<div class="entry-c">
																<div class="entry-title">
																		<h4><a href="#">This is a Video Post</a></h4>
																</div>
																<ul class="entry-meta clearfix">
																		<li><i class="icon-calendar3"></i> 24th July 2014</li>
																		<li><a href="#"><i class="icon-comments"></i> 16</a></li>
																</ul>
																<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
														</div>
												</div>

										</div>

										<!-- Comments
										============================================= -->
										<div id="comments" class="clearfix">

												<h3 id="comments-title"><span>3</span> Comments</h3>

												<!-- Comments List
												============================================= -->
												<ol class="commentlist clearfix">

														<li class="comment even thread-even depth-1" id="li-comment-1">

																<div id="comment-1" class="comment-wrap clearfix">

																		<div class="comment-meta">

																				<div class="comment-author vcard">

											<span class="comment-avatar clearfix">
											<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

																				</div>

																		</div>

																		<div class="comment-content clearfix">

																				<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

																				<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

																		</div>

																		<div class="clear"></div>

																</div>

														</li>

														<li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

																<div id="comment-2" class="comment-wrap clearfix">

																		<div class="comment-meta">

																				<div class="comment-author vcard">

											<span class="comment-avatar clearfix">
											<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>

																				</div>

																		</div>

																		<div class="comment-content clearfix">

																				<div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

																				<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>


																		</div>

																		<div class="clear"></div>

																</div>

														</li>

												</ol><!-- .commentlist end -->

												<div class="clear"></div>

												<!-- Comment Form
												============================================= -->
												<div id="respond" class="clearfix">

														<h3>Leave a <span>Comment</span></h3>

														<form class="clearfix" action="#" method="post" id="commentform">

																<div class="col_one_third">
																		<label for="author">Name</label>
																		<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
																</div>

																<div class="col_one_third">
																		<label for="email">Email</label>
																		<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
																</div>

																<div class="col_one_third col_last">
																		<label for="url">Website</label>
																		<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
																</div>

																<div class="clear"></div>

																<div class="col_full">
																		<label for="comment">Comment</label>
																		<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
																</div>

																<div class="col_full nobottommargin">
																		<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
																</div>

														</form>

												</div><!-- #respond end -->

										</div><!-- #comments end -->

								</div>
								<?php
							}
						}
					 ?>


				</div><!-- .postcontent end -->

				<!-- Sidebar
                ============================================= -->
								<?php get_sidebar(); ?>
				<!-- .sidebar end -->

			</div>

		</div>

	</section><!-- #content end -->

	<?php get_footer(); ?>
