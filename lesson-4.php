<?php

$dir1 = "gallery_img/img-big";
$dir2 = "gallery_img/img-small";

$files1 = array_slice(scandir($dir1), 2);
$files2 = array_slice(scandir($dir2), 2);

?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
	<script type="text/javascript" src="scripts/fancybox/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<script type="text/javascript">
	$()document.ready(function() {
	$("a.photo").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
});
	</script>
	
  <title>Галлерея</title>
 </head>
 <body>
  <h1>Моя галлерея</h1>
  <div class="gallery">
	<?php
	for ($i = 0; $i < count($files1); $i++) { ?>
	<a rel="gallery" class="photo" href="<?=$dir1."/".$files1[$i]?>" target="_blank">
		<img src="<?=$dir2."/".$files2[$i]?>" alt="" /> 
	</a>
	<?php } ?>	
  </div> 
 </body>
</html>