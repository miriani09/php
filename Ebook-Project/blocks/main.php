<?php
require_once "../conn.php";
?>
<div style="height: 65px; position: relative;"></div>
<!--Slider-->
<div id="slider">
    <div class="slide">
        <img src="../pic/slide-1.png" class="img1">
    </div>

    <div class="slide">
        <img src="../pic/slide-2.png" class="img1">
    </div>

    <div class="slide">
        <img src="../pic/slide-3.png" class="img1">
    </div>

    <div class="slide">
        <img src="../pic/slide-4.png" class="img1">
    </div>
    <div id="dots-con">
        <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
    </div>
    <!--Controlling arrows-->
    <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
               class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
          </svg>
        </span>
    <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
               class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
          </svg>
        </span>
</div>

<!--Books Area-->

<h5 class="col" style="margin-left: 135px !important;">ინფორმაციული ტექნოლოგიები</h5>

<div class="owl-carousel owl-theme" style="width: 82%; margin: auto">
    <?php
    $select_query = "SELECT * FROM book WHERE category_id = 1";
    $result = mysqli_query($conn, $select_query);
    $dir_pic = "../pics_pdf/pic/";
    $dir_pdf = "../pics_pdf/pdf/";
    foreach ($result as $items) {
        ?>
        <div>
            <div class="item">
                <?php echo $items['title'] ?>
                <br>
                <a href="<?php echo $dir_pdf.$items['pdf'] ?>" target="_blank">
                    <img src="<?php echo $dir_pic.$items['image'] ?>" alt="" style="width: 200px; height: 200px;">
                </a>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
                    autoWidth: true,
                    dots: false,
                    loop: true,
                    margin: 10,
                    nav: true,
                    items: 10,
                })
            })
        </script>
        <?php
    }
    ?>
</div>

<hr>

<h5 class="col" style="margin-left: 135px !important;">არქიტექტურა</h5>

<div class="owl-carousel owl-theme" style="width: 82%; margin: auto">
    <?php
    $select_query = "SELECT * FROM book WHERE category_id = 2";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $items) {
        ?>
        <div>
            <div class="item">
                <?php echo $items['title'] ?>
                <br>
                <a href="<?php echo $dir_pdf.$items['pdf'] ?>" target="_blank">
                    <img src="<?php echo $dir_pic.$items['image'] ?>" alt="" style="width: 200px; height: 200px;">
                </a>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
                    autoWidth: true,
                    dots: false,
                    loop: true,
                    margin: 10,
                    nav: true,
                    items: 10,
                })
            })

        </script>
        <?php
    }
    ?>
</div>

