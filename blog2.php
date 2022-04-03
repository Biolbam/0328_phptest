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
        <div class="col col-md-8">
            <?php include ("_card.html"); ?>
        </div>
        <div class="card border-light">
            <?php include ("side_right.html"); ?>
        </div>
    </div>

    <?php include ("board_card.php"); ?>

    <div class="row my-5"></div>
</div>
<!-- content end -->


<?php
include ("footer.html");
?>