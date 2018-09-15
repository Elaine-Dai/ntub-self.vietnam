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
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <link href="../css/tour.css" rel="stylesheet" type="text/css" />

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
    <!-- area------------------------------>
    <div class="selection">
    <div class="selection__title">CATEGORY</div>

    <?php
    $sql = "SELECT areaid,regionid,region,city FROM area";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $areaid=$row['areaid'];
            $regionid=$row['regionid'];
            $region=$row['region'];
            $city=$row['city'];
            
            echo <<<html
            
            
            <div class="selection__class">$region<i class="fas fa-chevron-right"></i></div>
            <div class="selection__class">$city<i class="fas fa-chevron-right"></i></div>
        
html;

         }
    } else {
        echo "0 results";
    }
    ?>
    </div>

    <!-- ------------------------------>
    <!-- spot------------------------------>
    <div class="tour">

    <?php
    $sql = "SELECT spotid,spotname FROM spot";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $spotid=$row['spotid'];
            $spotname=$row['spotname'];

            echo <<<html
            <div class="tour__spot Hanoi">
            <a href="./children.php">
                <p class="tour__spot__text">查看更多</p>
                <i class="far fa-heart collect"></i>
                <img src="../images/ss1.jpg">
                <h2>$spotname</h2>
            </a>
        </div>
html;
         }
    } else {
        echo "0 results";
    }
    ?>
    </div>
    <!-- ------------------------------>


    <!-- ------------------------------>

    



    </main>
    <!-- ------------登入------------------>
    <div class="member">
        <form class="login">
            <div class="login__options">
                <div class="isPress">登入</div>
                <div>註冊</div>
            </div>
            <input type="text" placeholder="您的帳號" class="login__input">
            <input type="text" placeholder="您的密碼" class="login__input">
            <input type="text" placeholder="您的電子郵件" class="login__input login__mail">
            <input type="submit" value="登入" class="login__btn">
        </form>
    </div>


    <!--===================================-->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'>
    </script>
    <script src="../js/scripts.js"></script>
    <script src="../js/tour.js"></script>

</body>

</html>