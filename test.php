<?php  
include("includes/classes/TestClass.php");
include("includes/classes/AnotherTestClass.php");

$t = new TestClass();
$t->test();

//hello();
?>




<html>
<head>
    <title></title>
</head>
<body>
    Hello :) 

<?php
$url = "https://i.pinimg.com/736x/ed/5b/fd/ed5bfde5fc49833169c0909ef5737031--orange-color-schemes-paint-color-schemes.jpg";

$string = "<div class='page' style='background-image: url($url); height:500px;'></div>";
echo $string;
?>
</body>
</html>