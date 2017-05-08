<?php require_once('inc/header.php') ?>
<div class="container mt-4 d-flex justify-content-center">
    <div class="slider-custom">
        <img src="inc/images/front/1.jpg" class="active" id="first">
        <img src="inc/images/front/2.jpg">
        <img src="inc/images/front/3.jpg">
        <img src="inc/images/front/4.jpg"  id="last">
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	var interval = setInterval(function(){
		setTimeout(function(){
			var current = $('.active');
		var next=current.next();
		if(next.length===0){
			next = $('#first').first();
		}
		current.hide().removeClass('active');
		next.fadeIn().addClass('active');
	}, 4000)
	}, 3000);
})
</script>