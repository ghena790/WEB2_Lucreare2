
<? error_reporting(0);

    $conn = mysqli_connect ("127.0.0.1", "root", "");
    mysqli_select_db($conn,"library");
    if(!$conn)
        die("Server error");


    $result = mysqli_query($conn,  "select name from books");
    $books = mysqli_fetch_assoc($result);

    echo $books["Name"];
 /*  $sql = "INSERT INTO Students (Fname, LName, CityName) VALUES ('Maxim', 'Edinac', 'NewYork')";
if(mysqli_query($connection, $sql)){
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
mysqli_close($connection);*/


?>
<?php
include "add.php";
include "output.php";
include "Update.php";
?>



