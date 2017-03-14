<?php if ($rows): ?>
    <div id="fh5co-blog-section">
		<div class="container">
			<div class="heading-section text-center">
				<h2>Recent Blog</h2>
			</div>
      <?php print $rows; ?>
		</div>
	</div>
  <?php elseif ($empty): ?>
    
	tsisy an
  <?php endif; ?>