<html>
<head>
    <title>Contact Us Action</title>
</head>
<body>

<h1>See your information below:</h1>
Name:<?php echo $_GET["name"]; ?><br />
Email:<?php echo $_GET["email"]; ?><br />
Message:<?php echo $_GET["message"]; ?><br />

<?php
/*Variables in Php start with a $
 Data types are automatically assigned*/

$myFirstVariable = 5;
$anotherVariable = "Hello World!";

$num1 = 4;
$num2 = 12;

// Conditional Statements
// (if/else/else if)

if($num1 > $num2){
    echo "num1 is bigger!";

}


?>

</body>
</html>

