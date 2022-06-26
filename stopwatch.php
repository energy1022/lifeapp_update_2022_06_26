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
                        <li><a href="memo.php">Memo</a></li>
                        <li class="current"><a href="stopwatch.php">StopWatch</a></li>
                        <li><a href="date.php">Date</a></li>
                        <li><a href="calculator.php">Calculator</a></li>
                        <li><a href="calendar.php">Calendar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <h1 class="introduction">ストップウォッチ</h1>
        <div id="timer">00:00:000</div>
        <div class="timer-btn">
            <button id="start">スタート</button>
            <button id="stop">ストップ</button>
            <button id="reset">リセット</button>
        </div>
        <p><small>&copy; 2022 Koyo Wakatsuki</small></p>
        <script src="js/stopwatch.js"></script>
    </body>
</html>