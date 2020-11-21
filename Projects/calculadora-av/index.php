<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <?php
    $result = 0;
    $sign = "";

    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['op'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $op = $_GET['op'];
        
        switch($op){
            case "sum":
                $result = $num1 + $num2;
                $sign = "+";
            break;
            case "subs":
                $result = $num1 - $num2;
                $sign = "-";
            break;
            case "mult":
                $result = $num1 * $num2;
                $sign = "x";
            break;
            case "div":
                $result = $num1 / $num2;
                $sign = "÷";
            break;
            case "mod":
                $result = $num1 % $num2;
                $sign = "%";
            break;
        }
    }
    ?>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="calculator">
        <form action="" method="get">
            <div class="input">
                <input type="number" name="num1" id="num1" class = "numbers" value = "<?= isset($_GET['num1']) ? $num1 : '';?>">
                <input type="text" name="sign" id="sign" class = "sign" value = "<?= isset($_GET['op']) ? $sign : '';?>" disabled>
                <input type="number" name="num2" id="num2" class = "numbers" value = "<?= isset($_GET['num2']) ? $num2 : '';?>">
                <input type="number" name="result" id="result" class = "numbers" value = "<?= $result;?>" disabled> 
            </div>


            <div class="btns">

                <button type="submit" value = "sum" name = "op" class = "op" disabled>+</button>
                <button type="submit" value = "subs" name = "op" class = "op" disabled>-</button>
                <button type="submit" value = "mult" name = "op" class = "op" disabled>x</button>
                <button type="submit" value = "div" name = "op" class = "op" disabled>÷</button>
                <button type="submit" value = "mod" name = "op" class = "op" disabled>%</button>
                <?php
                for($i = 9; $i > 0; $i--){
                    echo "<button class = 'btnNumbers' value = '$i'>$i</button>";
                }
                ?>
                <button type="button" value="0">0</button>
                <button type="button" class="decimal" value="." id = "decimal">.</button>
                <button type="button" class="all-clear" value="all-clear">AC</button>
                
                <button type="submit" class = "equal">=</button>
            </div>
        </form>
    </div>

    <script src="script/index.js"></script>
</body>
</html>