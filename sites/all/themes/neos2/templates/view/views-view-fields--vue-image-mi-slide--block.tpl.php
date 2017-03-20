 <?php
 $tmp = array();
 foreach ($fields as $id => $field)
 {
	$tmp[$id]=$field->content; 
 }
 /*echo "<pre>";
 print_r($tmp);
 echo "</pre>";*/
 
?>
<div class="item"><a href="images/featured-1.jpg" class="image-popup"><?php echo $tmp['field_image_mi_slide']; ?></a></div>