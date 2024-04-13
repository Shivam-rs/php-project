<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="num1">Number One</label>
        <input type="number" name="num1" id = "num1" placeholder="1">
        <br><br>
        <label for="operator">Operator</label>
        <select name="operator" id="operator">
            <option value="None"></option>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <br><br>
        <label for="num1">Number Two</label>
        <input type="number" name="num2" id="num2" placeholder="2">

        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $operand1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);

            $operand2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);

            $operator = htmlspecialchars($_POST["operator"]);
            
            //Error handlers
            $error = false;

            if(empty($operand1) || empty($operand2) || empty($operator)){
                echo "<p class= 'calc-error'>Fill in all the fields</p>";
                $error = true;
            }

            if(!is_numeric($operand1) || !is_numeric($operand2)){
                $error = true;
            }

            if(!$error){
                $value = 0;
                switch($operator){
                    case "add":
                        $value = $operand1 + $operand2;
                        break;
                    case "sub":
                        $value = $operand1 - $operand2;
                        break;
                    case "mul":
                        $value = $operand1 * $operand2;
                        break;
                    case "div":
                        $value = $operand1 / $operand2;
                        break;
                    default:
                        echo "<p class= 'calc-error'>Select a operator</p>";
                }

                echo "<p class='calc-result'> Result =". $value . " </p>";
            }  
            
        }
    ?>
</body>
</html>