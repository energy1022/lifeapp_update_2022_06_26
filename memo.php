<?php

    session_start();

    header("X-FRAME-OPTIONS:DENY");

    function h($str){
        return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifeApp</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <header>
            <a class="header-logo" href="index.php">LifeApp</a>
            <div class="header_content_wrapper">
                <nav>
                    <ul>
                        <li class="current"><a href="memo.php">Memo</a></li>
                        <li><a href="stopwatch.php">StopWatch</a></li>
                        <li><a href="date.php">Date</a></li>
                        <li><a href="calculator.php">Calculator</a></li>
                        <li><a href="calendar.php">Calendar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="memo-form">
            <h2>メモ機能 記録し終えたら保存ボタンを押してください。</h2>
            <?php 
                 if(!isset($_SESSION["csrfToken"])){
                    $csrfToken = bin2hex(random_bytes(32)); 
                    $_SESSION["csrfToken"] = $csrfToken;
                 }
                $token = $_SESSION["csrfToken"];
             ?>
                <form method="POST" action="memo.php">
                    <label for="title">題名</label>
                    <input type="text" id="title" name="title">
                    <br>
                    <label for="contents">内容</label>
                    <textarea  id="contents" name="contents" rows="30" cols="150"></textarea>
                    <input type="submit" name="btn_confirm" value="保存">
                </form>
            <?php 
            if(isset($_POST["btn_confirm"])){
                $title = $_POST["title"]; 
                $contents = $_POST["contents"];

                //データベースに接続
                $link = mysqli_connect('localhost', 'kw', 'iEk2&g&Ma(YF');
                if(!$link){
                    die("connect failed".mysqli_error());
                }
                //print "connection progressed<br>";

                //データベースを選択
                $select = mysqli_select_db($link, "lifeapp");
                if(!$select){
                    die("selection failed".mysqli_error());
                }
                //print "selection progressed<br>";

                //SQL文を実行
                $sql = "INSERT INTO memo (title, contents) VALUES ('".$title."','".$contents."')";
                $flag = mysqli_query($link, $sql);

                if(!$flag){
                    die("query failed".mysqli_error());
                }
                //print "query progressed<br>";
            }
            ?>

            <h2>メモを表示</h2>
            <?php 
            //データベースに接続
            $link = mysqli_connect('localhost', 'kw', 'iEk2&g&Ma(YF');
            if(!$link){
                die("connect failed".mysqli_error());
            }
            //print "connection progressed<br>";

            //データベースを選択
            $select = mysqli_select_db($link, "lifeapp");
            if(!$select){
                die("selection failed".mysqli_error());
            }
            //print "selection progressed<br>";

            $sql = "SELECT * FROM memo";
            $flag = mysqli_query($link, $sql);

            if(!$flag){
                die("query failed".mysqli_error());
            }
            //print "query progressed<br><br>";

            //実際に表示
            while($row=mysqli_fetch_array($flag)){
                print "title: ".$row["title"]."<br>";
                print "contents: ".$row["contents"]."<br>";
                print "<hr>";
            }
            ?>

        </div>
        <p><small>&copy; 2022 Koyo Wakatsuki</small></p>  
    </body>
</html>

