<?php
include ("head.html");
?>

<?php
include ("offcanvas.html");
?>

<!-- content start -->
<div class="container mb-4">
    <?php include ("header.html"); ?>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col col-md-5">
            <?php include ("_card.html"); ?>
        </div>
        <div class="col col-md-4">
            <?php include ("_card.html"); ?>
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