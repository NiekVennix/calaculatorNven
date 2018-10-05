<?php

$number1 = 0;   
$number2 = 0;   
$operator = ""; 
$result = 0;






if (isset($_POST['mysubmit'])) 
{
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    if ($operator == "add" )
    {
        $result = $number1 + $number2;
    }
    if ($operator == "subtract" )
    {
        $result = $number1 - $number2;
    }
    if ($operator == "multiply" )
    {
        $result = $number1 * $number2;
    }
    if ($operator == "divide" )
    { 
        $result = $number1 / $number2;
    }
    if ($operator == "wortel" )
    { 
        if ($number1 < 0) 
        {
           $result = 0; /*kan niet niet wortel trekken met negatieve getallen */
        }
        else if($number1 > 0)
        {
        $result = sqrt ($number1);
        }
    }
    if($operator == "power")
        {
            $result = pow($number1, $number2);
        }
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>rekenmachine</title>
</head>
<body>
    <div class="container">
<div class="top-part">
 <form action="index.php" method="POST">
     <ul>
         <li>
     getal 1 : <input type="text" name="number1"/>
</li>
<li>
     <select name="operator">
         <option value="add">+</option>
         <option value="subtract">-</option>
         <option value="multiply">*</option>
         <option value="divide">/</option>
         <option value="wortel">wortel</option>
         <option value="power">power</option>
</select>
</li>
<li>
     getal 2 : <input type="text" name="number2"/>
     <input type="submit" name="mysubmit" value="calculate"/>
</li>
</ul>
     </form>
</div>
<div class="bottom-part">
<?php
echo $result
?>
</div>
</body>
</html>