<?php
include ("head.html");
?>

<?php
include ("offcanvas.html");
?>
<div class="container mb-4">

    <div class="row g-4 my-4">
        <div class="col-sm-9">
            <?php include ("post_content.html"); ?>
        </div>
        <div class="col-sm-3 card border-light">
            <?php include ("side_right.html"); ?>
        </div>
    </div>

    <?php include ("board.php"); ?>


    <div class="row my-5"></div>
</div>
<!-- content end -->


<?php
include ("footer.html");
?>