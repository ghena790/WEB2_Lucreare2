<!DOCTYPE html>
<html>
<body>
<form method="post">
</form>
</body>
</html>
<?php

$NameBook = $_POST['NameBook'];
$Author = $_POST['Author'];
$Yearpub = $_POST['Yearpub'];
$NumPage = $_POST['NumPage'];

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE books set id='" . $_POST['id'] . "', NameBook='" . $_POST['NameBook'] . "', Author='" . $_POST['Author'] . "', Yearpub='" . $_POST['Yearpub'] . "' ,NumPage='" . $_POST['NumPage'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}
?>