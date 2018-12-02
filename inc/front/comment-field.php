
<?php

function ju_commentField() {
  ?>
  <div class="col_full">
      <label for="comment"><?php _e('Comment', 'udemy'); ?></label>
      <textarea id="comment" name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
  </div>
  <?php
}

function ju_commentAuthor() {
  ?>
  <div class="col_one_third">
      <label for="author"><?php _e('Name', 'udemy'); ?></label>
      <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
  </div>
  <?php
}
function ju_commentEmail() {
  ?>
  <div class="col_one_third">
      <label for="email"><?php _e('Email', 'udemy'); ?></label>
      <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
  </div>
  <?php
}
function ju_commentUrl() {
  ?>
  <div class="col_one_third col_last">
      <label for="url"><?php _e('Website', 'udemy'); ?></label>
      <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
  </div>
  <?php
}

 ?>
