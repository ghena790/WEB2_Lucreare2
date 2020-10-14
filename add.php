<!DOCTYPE html>
<html>
<body>
<form method="post">
    Name Book:<br>
    <input type="text" name="NameBook">
    <br>
    Author:<br>
    <input type="text" name="Author">
    <br>
    Year Publication:<br>
    <input type="text" name="Yearpub">
    <br>
    Number Page:<br>
    <input type="text" name="NumPage">
    <br>


    <input type="submit" name="save" value="submit">
</form>
</body>
</html>
<?php

$NameBook = $_POST['NameBook'];
$Author = $_POST['Author'];
$Yearpub = $_POST['Yearpub'];
$NumPage = $_POST['NumPage'];

if(isset($_POST['save']))
{
    $sql = "INSERT INTO books (`NameBook`,`Author`,`Yearpub`, `NumPage`)  VALUES ('$NameBook' ,'$Author' , '$Yearpub', '$NumPage')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {

        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>