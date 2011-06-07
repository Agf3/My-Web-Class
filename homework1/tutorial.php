<head>
<title>Object Oriented Programming in PHP</title>
<?php include("class_tutorial_lib.php"); ?> 
</head>
<body>
<?php

echo "test";

$alex = new Person("Alex Fig"); 
$mike = new Person("Mike Capo");
$bill = new Employee("Bill Power"); 

echo "Alex's full name: ".$alex->get_name()."\n\n";
echo "Mike's full name: ".$mike->get_name()."\n\n";
echo "Bill the employee's full name: ".$bill->get_name(); 


?>

</body>
</html>