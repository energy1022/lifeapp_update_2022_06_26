<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifeApp</title>
        <link rel="stylesheet" href="css/stylesheet.css">
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
                        <li><a href="stopwatch.php">StopWatch</a></li>
                        <li class="current"><a href="date.php">Date</a></li>
                        <li><a href="calculator.php">Calculator</a></li>
                        <li><a href="calendar.php">Calendar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <h1 class="introduction">現在日時</h1>
        <h2 class="date">現在日時は<span id="viewtime"></span>です</h2>
        <p>最新日時を取得するには、リロードしてください</p>
        <p class="copy-right"><small>&copy; 2022 Koyo Wakatsuki</small></p>
        <script src="js/date.js"></script>
    </body>
</html>