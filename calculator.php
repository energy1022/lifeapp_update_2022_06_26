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
                        <li><a href="stopwatch.php">StopWatch</a></li>
                        <li><a href="date.php">Date</a></li>
                        <li class="current"><a href="calculator.php">Calculator</a></li>
                        <li><a href="calendar.php">Calendar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <h1 class="introduction">電卓</h1>
        <form name="calculator">
            <table>
                <tr>
                    <td colspan="4">
                        <input type="text" class="display" name="display" value="" disabled>
                    </td>
                </tr>
                <tr>
                    <td><input type="button" value="7" onclick="getCalc(this)"></td>
                    <td><input type="button" value="8" onclick="getCalc(this)"></td>
                    <td><input type="button" value="9" onclick="getCalc(this)"></td>
                    <td><input type="button" value="÷" class="oparator" name="div_btn" onclick="getCalc(this)"></td>
                </tr>
                <tr>
                    <td><input type="button" value="4" onclick="getCalc(this)"></td>
                    <td><input type="button" value="5" onclick="getCalc(this)"></td>
                    <td><input type="button" value="6" onclick="getCalc(this)"></td>
                    <td><input type="button" value="×" class="oparator" name="multi_btn" onclick="getCalc(this)"></td>
                </tr>
                <tr>
                    <td><input type="button" value="1" onclick="getCalc(this)"></td>
                    <td><input type="button" value="2" onclick="getCalc(this)"></td>
                    <td><input type="button" value="3" onclick="getCalc(this)"></td>
                    <td><input type="button" value="-" class="oparator" onclick="getCalc(this)"></td>
                </tr>
                <tr>
                    <td><input type="button" value="0" onclick="getCalc(this)"></td>
                    <td><input type="button" value="C" onclick="getCalc(this)"></td>
                    <td><input type="button" value="=" class="equal" onclick="getCalc(this)"></td>
                    <td><input type="button" value="+" class="oparator" onclick="getCalc(this)"></td>
                </tr>
            </table>
        </form>
        <p><small>&copy; 2022 Koyo Wakatsuki</small></p>
        <script src="js/calculator.js"></script>
    </body>
</html>