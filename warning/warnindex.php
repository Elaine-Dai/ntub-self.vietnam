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
        <!--===================================-->
        <main>

            <div class="warningBox">

                <h1>飲食</h1>
                <p>waiter送上的濕紙巾是要錢的</p>


            </div>

            <div class="warningBox">

                <h1>時差</h1>
                <p>當地時間晚台灣一小時。</p>

            </div>

            <div class="warningBox">

                <h1>電壓</h1>
                <p>越南電壓為220V，要記得帶轉接頭，以免電器損壞</p>

            </div>

            <div class="warningBox">

                <h1>貨幣</h1>
                <p>相對新台幣來說，越南盾面額很大，鈔票上好多好多個'零'。流通的大部分是紙鈔，硬幣比較少見</p>

            </div>

            <div class="warningBox">

                <h1>行走</h1>
                <p>市區的交通混亂，車子不會禮讓行人，有些大馬路口甚至沒有紅綠燈，車輛會亂按喇叭且橫衝直撞，過馬路時要特別小心。</p>

            </div>

        </main>


        <!--===================================-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'>
        </script>

        <script src="../js/scripts.js"></script>
        <script src="../js/warning.js"></script>

    </body>

    </html>