<?php if(get_field('slide', 'option')): ?>

<?php $css = get_field('slider_theme', 'option'); ?>

  <div class="royalSlider
  <?php if ($css == 'default') {
    echo 'rsDefault';
  } elseif ($css == 'default-inverted') {
    echo 'rsDefaultInv';
  } elseif ($css == 'minimal-white') {
    echo 'rsMinW';
  } elseif ($css == 'universal') {
    echo 'rsUni';
  } ?>">

    <?php while(has_sub_field('slide', 'option')): ?>

      <!-- image + animated block with HTML title and text -->
      <div class="rsContent">
        <img class="rsImg" src="<?php $image = get_sub_field('image'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">

        <?php if(get_sub_field('caption', 'option')): ?>
          <div class="rsABlock" data-move-effect="bottom" data-fade-effect="true">
            <div class="control-room">
              <?php echo get_sub_field('caption'); ?>
            </div>
          </div>
        <?php endif; ?>

      </div>

    <?php endwhile; ?>

  </div>

<?php endif; ?>


