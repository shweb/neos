 <?php
	 $tmp = array();
	 foreach ($fields as $id => $field)
	 {
		$tmp[$id]=$field->content; 
	 }

?>
<div class="col-md-4 col-sm-6">
	<div class="fh5co-grid-work">
		<div class="work-holder">
			<a href="#"><?php echo $tmp['field_image_project']; ?></a>
			<a href="#" class="inner-overlay"><i class="icon-plus"></i></a>
		</div>
		<div class="desc">
			<!--<h3><?php echo $tmp['title']; ?></h3>-->
			<h3><a href="#">Work Title</a></h3>
			<span><?php echo $tmp['field_description']; ?></span>
		</div>
	</div>
</div>