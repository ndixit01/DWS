<?php require_once('inc/header.php') ?>
<div class="container col-md-9">
    <div class="row sub-service">
        <div class="col-md-6 service-container scanning-sub-1 p-0">
            <div class="service-mask-head">
                <div class="service-mask">
                    <div class="service-mask w-100 d-flex justify-content-center align-items-center flex-column" onclick="location.href='scanning-gallery.php'">
                        <img class="img-fluid" src="inc/images/zoom.png">
                        <span>See Gallery</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 service-container scanning-sub-2">
            <p>We have range of industrial grade commercial scanners ranging from flatbed to custom area scanners. Our Scanning technologies will make sure that all the pixels and colors of your photos are always archived correctly and fully in the digital form.</p>
            <p>We have developed custom technologies to convert your old photographs or black films in digital forms quite efficiently. We will make sure that you will not miss out on quality while using our scanning services and all you will get is beautiful imageries in digital form.</p>
            <p><a href="scanning-gallery.php">See Gallery >></a></p>
        </div>
        <div class="col-md-3 d-flex align-content-between flex-wrap service-container">
            <div class="scanning-sub-3-1">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center" onclick="location.href='scanning-gallery.php'">
                            <img src="inc/images/zoom.png">
                            <span>See Gallery</span>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="scanning-sub-3-2">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center" onclick="location.href='scanning-gallery.php'">
                            <img src="inc/images/zoom.png">
                            <span>See Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.service-mask').hide();
	$('.service-mask-head').hover(function(){
		$(this).children('.service-mask').fadeToggle(200, "linear" );		
	});
});
</script>