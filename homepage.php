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
    <div class="container">
        <main>

            <a href="tour/tourindex.php" class="subpage">

                <div class="subpage__box">
                    <span>SPOT</span><br>
                    <span class="subpage__text">more</span>
                </div>

            </a>
            <a href="traffic/trafficindex.php" class="subpage">

                <div class="subpage__box">
                    <span>TRAFFIC</span><br>
                    <span class="subpage__text">more</span>
                </div>

            </a>
            <a href="warning/warnindex.php" class="subpage">

                <div class="subpage__box">
                    <span>PUBLIC</span><br>
                    <span class="subpage__text">more</span>
                </div>

            </a>
            <a href="plan/planindex.php" class="subpage">

                <div class="subpage__box">
                    <span>PLAN</span><br>
                    <span class="subpage__text">more</span>
                </div>

            </a>


        </main>

    </div>
    <!-- -------------------------------------- -->
    <!-- insert/select-------------------------------------- -->

    <?php
        if(isset($_POST['login'])){
            $memberid=$row['memberid'];
            $membername=$row['membername'];
            $memberpw=$row['memberpw'];
            $email=$row['email'];
            if($row['gender'] == 0){
                $gender = "男";
            }else {
                $gender = "女";
            }

           }
        $sql = "SELECT memberid,membername,memberpw,email,gender FROM member where membername='$membername";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $memberid=$row['memberid'];
                $membername=$membername;
                $memberpw=$row['memberpw'];
                $email=$row['email'];
                if($row['gender'] == 0){
                    $gender = "男";
                }else {
                    $gender = "女";
                }

                echo "successful";
                header('Location: ../account.php'); //要更改連接account.php?accountpage=$memberid
                exit;

            }
        } else {
            echo "0 results";
        }

    //sign up

    if(isset($_POST['signup'])){
        $memberid=$row['memberid'];
        $membername=$row['membername'];
        $memberpw=$row['memberpw'];
        $email=$row['email'];
        if($row['gender'] == 0){
            $gender = "男";
        }else {
            $gender = "女";
        }

       

        $insert = "INSERT INTO member (memberid,membername, memberow, gender,email) VALUES ('$memberid''$membername', '$memberow', '$gender','$email')";
        
        if ($conn->query($insert) == TRUE) {
            echo "New record created successfully";
            header('Location: index.php'); //要更改連接account.php
            exit;
            
        } else {
            echo "Error: " .$insert . "<br>" . $conn->error;
        }
    }
    
         else {
            echo "0 results";
        }
    
    
    ?>
    <!-- -------------------------------------- -->
    <!-- ------------登入------------------>
    <div class="member">
        <form class="login">
            <div class="login__options">
                <div class="isPress">登入</div>
                <div>註冊</div>
            </div>
            <input name="account" type="text" placeholder="您的帳號" class="login__input" method ="post">
            <input name="accountpw" type="password" placeholder="您的密碼" class="login__input" method ="post">
            <input name="accountmail" type="text" placeholder="您的電子郵件" class="login__input login__mail" method ="post">
            <!-- <select name="gender">
                    <option value="1">男</option>
                    <option value="0">女</option>
                </select> -->
            <input name='login' type="submit" value="登入" class="login__btn">
        </form>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src="js/scripts.js"></script>
    <script src="js/home.js"></script>
    <script>
        if (window.screen.width < 800) {
            const slid = new Slider('.container')
        }
    </script>
</body>

</html>