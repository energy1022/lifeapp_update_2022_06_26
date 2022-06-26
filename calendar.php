<?php
// 現在の年月を取得
$year = date('Y');
$month = date('n');
 
// 月末日を取得
$last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
 
$calendar = [];
$j = 0;
 
// 月末日までループ
for ($i = 1; $i < $last_day + 1; $i++) {
 
    // 曜日を取得
    $week = date('w', mktime(0, 0, 0, $month, $i, $year));
 
    // 1日の場合
    if ($i == 1) {
 
        // 1日目の曜日までをループ
        for ($s = 1; $s <= $week; $s++) {
 
            // 前半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
 
        }
 
    }
 
    // 配列に日付をセット
    $calendar[$j]['day'] = $i;
    $j++;
 
    // 月末日の場合
    if ($i == $last_day) {
 
        // 月末日から残りをループ
        for ($e = 1; $e <= 6 - $week; $e++) {
 
            // 後半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
 
        }
 
    }
 
}
 
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifeApp</title>
        <link rel="stylesheet" href="css/stylesheet_calendar.css">
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
                        <li><a href="stopwatch.php">StopWatch</a></li>
                        <li><a href="date.php">Date</a></li>
                        <li><a href="calculator.php">Calculator</a></li>
                        <li class="current"><a href="calendar.php">Calendar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <h1 class="introduction">カレンダー</h1>
        <?php echo $year; ?>年<?php echo $month; ?>月
        <br>
        <br>
        <table>
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
        
            <tr>
            <?php $cnt = 0; ?>
            <?php foreach ($calendar as $key => $value): ?>
        
                <td>
                <?php $cnt++; ?>
                <?php echo $value['day']; ?>
                </td>
        
            <?php if ($cnt == 7): ?>
            </tr>
            <tr>
            <?php $cnt = 0; ?>
            <?php endif; ?>
        
            <?php endforeach; ?>
            </tr>
        </table>
        <p><small>&copy; 2022 Koyo Wakatsuki</small></p>
    </body>
</html>
