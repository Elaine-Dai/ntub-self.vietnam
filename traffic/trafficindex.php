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





            <p class="traTitle">交通工具小知識</p>
            <div class="traBox box1">
                <img src="../images/tra1.png">
                <div class="traBox__way">租車</div>
            </div>
            <div class="traBox box2">
                <img src="../images/tra2.png">
                <div class="traBox__way">計程車</div>
            </div>
            <div class="traBox box3">
                <img src="../images/tra3.png">
                <div class="traBox__way">大眾運輸</div>
            </div>


            <div class="traText traffic__text__byCar">
                <p class="text__title">title</p>
                <p>gkpasjgpsdgjosdjgosgjoegjsldgjaswgjksdgmjawiejtgsegjs</p>
                <p class="text__title">title</p>
                <p>fjaigjpaiwrhjegiawhjogihwogihoaiwhegihegiawhgihwagowegh</p>
            </div>
            <div class="traText traffic__text__byTaxi">
                <p class="text__title">title2</p>
                <p>fkigjepawjegiwaghiwghowgeihowag</p>
                <p class="text__title">title2</p>
                <p>jwegjpwghowghowaigheihweogi</p>
            </div>
            <div class="traText traffic__text__byBus">
                <p class="text__title">title3</p>
                <p>wehjogihwaeighewighw</p>
                <p class="text__title">title3</p>
                <p>egwegwgwegwjwpgejwepgjwepogjwpogjwgwpog</p>
            </div>


        </main>



        <!--===================================-->

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/traffic.js"></script>

    </body>

    </html>