    <!-- connect-------------------------------------- -->

    <?php
    $servername = "ms.ntub.edu.tw";
    $username = "Vietnam";
    $password = "imd10446";
    $dbname = "Vietnam";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
    mysqli_query($conn,"SET NAMES UTF8");
    ?>
    <!-- -------------------------------------- -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Self.Vietnam</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/Home.css">
    </head>


    <body>
        <header>

            <div class="logo">
                <a class="logo__link" href="homepage.php">
                    <img src="images/logo.jpg" class="logo__img">
                    <div class="logo__text">Self.Vietnam</div>
                </a>
            </div>
            <i class="fas fa-user-circle account"></i>
        </header>
        <!-- <---------------------->
        <aside>
            <div class="aside">

                <button class="nav__button nav__button_expand" type="button"></button>

                <div class="nav">

                    <button class="nav__button nav__button_close"></button>


                    <a class="nav__item" href="tour/tourindex.php">行程介紹</a>
                    <a class="nav__item" href="traffic/trafficindex.php">交通</a>
                    <a class="nav__item" href="warning/warnindex.php">風俗習慣</a>
                    <a class="nav__item" href="plan/planindex.php">行程規劃</a>
                </div>
            </div>
        </aside>


        <!-- ------------------------------>
    <main>

        <!--===============套用owl-carousel插件====================-->
        <div class="sceneShow">
            <div class="owl-carousel owl-theme">
                <div class="sceneShow__area item">
                    <!-- owl插件指定滑動區域 -->
                    <img src="../images/1.jpg" alt="越南景點">
                </div>


                <div class="sceneShow__area item">
                    <!-- owl插件指定滑動區域 -->
                    <img src="../images/3.jpg" alt="越南景點">
                </div>


                <div class="sceneShow__area item">
                    <!-- owl插件指定滑動區域 -->
                    <img src="../images/4.jpg" alt="越南景點">
                </div>
            </div>
            <span class="text__title">沙壩教堂</span>
            <p>Sa Pa, 沙壩縣老街 越南</p>

        </div>
        <!--===================================-->



        <div class="sceneMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.485533802853!2d103.83964606523705!3d22.33528854726742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5cc7ac1cceb1050!2sNotre+Dame+Cathedral!5e0!3m2!1szh-TW!2stw!4v1531725723296"></iframe>
        </div>




        <div class="sceneInfo sceneText">

            <p class="text__title">沙壩教堂小介紹</p>
            <p class="sceneText__content">位於越南最高城鎮：沙壩鎮市中心的石教堂是越南最高海拔的教堂，因海拔高緣故，教堂常被雲霧包圍，顯得其莊嚴神秘。石教堂是沙壩居民的信仰中心，許多居民會在傍晚時到教堂望彌撒，使用的語言不是京族話，而是當地方言。除此之外，教堂前面的廣場常舉辦各類活動，也是當地人的聚會場所。</p>

        </div>


        <div class="sceneTraffic sceneText">

            <p class="text__title">建議交通</p>
            <p class="sceneText__content">沒有從河內直達沙壩的汽車，需要到北河或老​​街轉車。老街距離河內340公里，每天有兩列火車開往河內，車費15美元，需要10-12小時。老街火車站有開往河內的長途汽車，車費5,3000盾，需要10小時。到了老街後，每天有數班往返於老街口岸和沙壩的小型長途班車，車費2,5000越南盾，1.5小時。</p>

        </div>




        <!--===================================-->

    </main>
    <!-- ------------------------------>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js'></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/tourChildren.js"></script>

</body>

</html>