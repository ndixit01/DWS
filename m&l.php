<?php require_once('inc/header.php') ?>
<div class="container col-md-9">
    <div class="row sub-service">
        <div class="col-md-6 service-container mnl-sub-1 p-0">
            <div class="service-mask-head">
                <div class="service-mask">
                    <div class="service-mask w-100 d-flex justify-content-center align-items-center flex-column" onclick="location.href='mnl-gallery.php'">
                        <img class="img-fluid" src="inc/images/zoom.png">
                        <span>See Gallery</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 service-container mnl-sub-2">
            <p>Here at Digital Works Solutions, our highly tranined and creative technical experts handles all aspects of your Mounting and Lamination works. Our services like Image Archival, display and protection with custom mounting techniques specially crafted for you.</p>
            <p>Our technical experts have expertise in Lamination technologies as well with various type of Laminates and glue processes.</p>
            <p>You can choose from hundreds of unique, beautifully crafted fame options.</p>
            <p><a href="mnl-gallery.php">See Gallery >></a></p>
        </div>
        <div class="col-md-3 d-flex align-content-between flex-wrap service-container">
            <div class="mnl-sub-3-1">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center" onclick="location.href='mnl-gallery.php'">
                            <img src="inc/images/zoom.png">
                            <span>See Gallery</span>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="mnl-sub-3-2">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center" onclick="location.href='mnl-gallery.php'">
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