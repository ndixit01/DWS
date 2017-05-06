<?php require_once('inc/header.php') ?>
<div class="container col-md-9">
    <div class="row sub-service">
        <div class="col-md-6 service-container editing-sub-1 p-0 d-flex flex-row justify-content-end">
            <div class="service-mask-head editing-1">
                <div class="service-mask">
                    <div class="service-mask w-100 d-flex justify-content-center align-items-center flex-column" onclick="location.href='editing-gallery.php'">
                        <img class="img-fluid" src="inc/images/zoom.png">
                        <span>See Gallery</span>
                    </div>
                </div>
            </div>
            <div class="service-mask-head editing-2 ml-auto">
                <div class="service-mask">
                    <div class="service-mask w-100 d-flex justify-content-center align-items-center flex-column" onclick="location.href='scanning-gallery.php'">
                        <img class="img-fluid" src="inc/images/zoom.png">
                        <span>See Gallery</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 service-container editing-sub-2">
            <p>Don't worry about clicks after taking them. Our highly trained and experienced experts will take care of all your post-editing needs.</p>
            <p>Whether it be color correction or anything else, we will always make sure that your photos looks beautiful when you print/publish them.</p>
            <p>Our range of technologies include super/blazing fast computers with highly skilled editing team that will cater to your needs</p>
            <p><a href="editing-gallery.php">See Gallery >></a></p>
        </div>
        <div class="col-md-3 d-flex align-content-between flex-wrap service-container">
            <div class="editing-sub-3-1">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center" onclick="location.href='editing-gallery.php'">
                            <img src="inc/images/zoom.png">
                            <span>See Gallery</span>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="editing-sub-3-2">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center" onclick="location.href='editing-gallery.php'">
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