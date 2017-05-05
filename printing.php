<?php require_once('inc/header.php') ?>
<div class="container col-md-9">
    <div class="row sub-service">
        <div class="col-md-6 service-container printer-sub-1 p-0">
            <div class="service-mask-head">
                <div class="service-mask">
                    <div class="service-mask w-100 d-flex justify-content-center align-items-center flex-column" onclick="location.href='printing-gallery.php'">
                        <img class="img-fluid" src="inc/images/zoom.png">
                        <span>See Gallery</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 service-container printer-sub-2">
            <p>At Digital Work Studios, we take your print as seriously as you can fathom. Our pioneer printing technologies ensure that you get the best print everytime. Nobody provides the same continuous tone of photographic prints as we do on specially crafted and ordered archival papers.</p>
            <p>We are continuouslly raising the bar in the field of photography imagery and our fully equipped modern labs maintains quality of your prints from LVT film output, fine art retouching, digital slides and archival digital C - Prints and more</p>
            <p><a href="printing-gallery.php">See Gallery >></a></p>
        </div>
        <div class="col-md-3 d-flex align-content-between flex-wrap service-container">
            <div class="printer-sub-3-1">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center">
                            <img src="inc/images/zoom.png">
                            <span>See Gallery</span>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="printer-sub-3-2">
                <div class="service-mask-head">
                    <div class="service-mask">
                        <div class="service-mask w-100 d-flex justify-content-center align-items-center">
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