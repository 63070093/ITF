<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfexam.mysql.database.azure.com', 'it63070093@itfexam', 'Usa55880', 'itfexam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];


$sql = "UPDATE guestbook SET (Product=$Product, Price=$Price , Discount=$Discount, Total=$Price- (($Price*$Discount)/100))) WHERE id =$id " 


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>