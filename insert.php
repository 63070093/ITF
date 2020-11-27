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
$Total = $Price * $Discount


$sql = "INSERT INTO testt(Product, Price , Discount, Total) VALUES ('$Product', '$Price', '$Discount', '$Total')";


if (mysqli_query($conn, $sql)) {
    echo "กรอกรายละเอียดสินค้าเสร็จสิ้น";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>