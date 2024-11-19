<?php
    require 'config.php';
?>
<?php
    if(isset($_POST["submit"])){
    $cid = $_POST['cid'];

    $query = "DELETE from cregister where register_id =$cid";

    $data = mysqli_query($conn, $query);

    if ($data) 
    {
        echo "<script>alert('User Account Deleted');</script>";
        echo '<script>window.location.href = "learn to work.html";</script>';
    } 
    else 
    {
        echo "<script>alert('Error in Delete')</script>";
    }
    }
 mysqli_close($conn);

?>