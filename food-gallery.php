<?php
    $section = "Food";
    include_once('inc/header.php');
?>
<div class="container col-md-9 mt-5">
    <div class="slide-main">
        <ul class="pgwSlideshow">
            <?php require_once('inc/gallery.php'); ?>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.pgwSlideshow').pgwSlideshow();
    });
</script>