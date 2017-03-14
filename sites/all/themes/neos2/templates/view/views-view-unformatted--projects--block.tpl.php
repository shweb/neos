<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="owl-carousel owl-carousel2">
<?php foreach ($rows as $id => $row): ?>
 
    <?php print $row; ?>
  
<?php endforeach; ?>
</div>