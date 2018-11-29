
<?php
  if(post_password_required()) {
    teturn;
  }
 ?>

<!-- Comments
============================================= -->
<div id="comments" class="clearfix">
  <?php
    if (have_comments()) {
      ?>
      <h3 id="comments-title"><span><?php comments_number(); ?></span></h3>

      <!-- Comments List
      ============================================= -->
      <ol class="commentlist clearfix">

          <?php
            foreach($comments as $comment) {
              ?>
              <li class="comment even thread-even depth-1" id="li-comment-1">
                  <div id="comment-1" class="comment-wrap clearfix">
                      <div class="comment-meta">
                          <div class="comment-author vcard">
                            <span class="comment-avatar clearfix">
                                <?php echo get_avatar($comment, 60) ?>
                            </span>
                          </div>
                      </div>
                      <div class="comment-content clearfix">
                          <div class="comment-author"><?php comment_author(); ?><span><a href="#" title="Permalink to this comment"><?php comment_date(); ?></a></span>
                          </div>
                          <?php comment_text(); ?>
                      </div>
                      <div class="clear"></div>
                  </div>
              </li>
              <?php
            }
            the_comments_pagination();
           ?>

      </ol><!-- .commentlist end -->

      <div class="clear"></div>

        <!-- #respond -->
      <?php
    }
  ?>

  <!-- Comment Form
  ============================================= -->

  <div id="respond" class="clearfix">
    <?php
      comment_form(array(
        'comment_field' => ju_commentField(),
        'fields' => array(
          'author' => ju_commentAuthor(),
          'email'  => ju_commentEmail(),
          'url'  => ju_commentUrl()
        ),
        'class_submit' => "button button-3d nomargin",
        'label_submit' => __('SUBMIT COMMENT', 'udemy'),
        'title_reply' => __('Leave a <span>comment</span>', 'udemy')
      ));
      ?>
  </div><!-- #respond end -->

</div><!-- #comments end -->
