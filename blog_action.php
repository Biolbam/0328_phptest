<?php
include ("head.html");
?>



<!-- content start -->
<div class="container mb-4">
    <!-- top start -->
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                <lord-icon src="https://cdn.lordicon.com/mersmoqu.json" trigger="loop" delay="2000"
                    style="width:250px;height:250px">
                </lord-icon>

                <h1 class="fw-light">세상을 바꾸는 액션</h1>
                <p class="lead text-muted">지금 우리에게 필요한 행동은 바로 이것!</p>
                <p>
                    <a href="#" class="btn btn-dark my-2">이건 하고 가세요</a>
                    <a href="#" class="btn btn-secondary my-2">요것도 하고 가세요</a>
                </p>
            </div>
        </div>
    </section>
    <!-- top end -->



    <!-- 카드 시작-->
    <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-dark dropdown-toggle my-3 " data-bs-toggle="dropdown"
        aria-expanded="false">
        분류
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="#">카테고리1</a></li>
        <li><a class="dropdown-item" href="#">카테고리2</a></li>
        <li><a class="dropdown-item" href="#">카테고리3</a></li>
        <li><a class="dropdown-item" href="#">카테고리4</a></li>
        <li><a class="dropdown-item" href="#">카테고리5</a></li>
        <li><a class="dropdown-item" href="#">카테고리6</a></li>
        <li><a class="dropdown-item" href="#">카테고리7</a></li>
        <li><a class="dropdown-item" href="#">카테고리8</a></li>
    </ul>
    <div class="card-group row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 mb-3">
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
    </div>
    <div class="card-group row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 mb-3">
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
        <div class="col mb-3">
            <?php include ("_card-sm.html"); ?>
        </div>
    </div>
    <?php include ("_pagination.html"); ?>
    <!-- 카드 끝 -->
    <div class="row my-5"></div>
</div>
<!-- content end -->


<?php
include ("footer.html");
?>