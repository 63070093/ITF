<html lang="en">
<head>
  <title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<html>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itfexam.mysql.database.azure.com', 'it63070093@itfexam', 'Usa55880', 'itfexam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table table-dark table-hover" width="1200" border="1">
  <tr>
    <th width="150"> <div align="center">ชื่อสินค้า </div></th>
    <th width="400"> <div align="center">ราคาต่อหน่วย </div></th>
    <th width="200"> <div align="center">ส่วนลด(%) </div></th>
    <th width="200"> <div align="center">ราคาหลังลด </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result['Discount'];?></td>
    <td><?php echo $Result['Total'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</form>
</body>
</html>