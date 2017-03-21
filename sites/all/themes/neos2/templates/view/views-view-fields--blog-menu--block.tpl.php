<?php
	 $tmp = array();
	 foreach ($fields as $id => $field)
	 {
		$tmp[$id]=$field->content; 
	 }	
	$tmp1 = $tmp['created'];
	$i =0;
	for($i=0;$i<strlen($tmp1);$i++){
		if($tmp1[$i]=="/"){
			$tmp1[$i]="-";
		}
		else if($tmp1[$i]=="-"){
			$tmp1[$i]=" ";
		}
	}
	// echo "tempvao".$tmp1;
	$jour= date('d', strtotime($tmp1));
	$mois= date('F', strtotime($tmp1));
	$annee= date('Y', strtotime($tmp1));
?>
<div class="col-md-4 col-sm-4 col-xs-4 blog-section">
	<span><?php echo $jour; ?><small><?php echo $mois. " " . $annee; ?></small></span>
	<h3><?php echo $tmp['title']; ?></h3>
	<p class="huhu"><?php echo $tmp['field_description_blog']; ?></p>
	<a class="btn btn-primary" href="#">READ MORE</a>
</div>