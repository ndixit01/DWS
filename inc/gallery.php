<?php
	$idir = "inc/images/gallery/".$section."/";
	$dir=opendir($idir);
	while(($fname = readdir($dir)) != false){
		if($fname=="."||$fname =='..')continue;
		$file[]=$fname;
	};
	natsort($file);
	closedir($dir);
	foreach($file as $files){
		echo '<li><img src="'.$idir.$files.'"></li>';
	}
?>
<script src="inc/slider/pgwslideshow.js"></script>