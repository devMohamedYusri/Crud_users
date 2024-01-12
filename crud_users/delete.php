<?php  include('inc/header.php'); ?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User have been deleted</h1>

    
<?php  
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header("location: index.php");
    }

    $id=$_GET['id'];
    $query = mysqli_query($connection, "DELETE FROM users WHERE id='$id'");
    if(mysqli_affected_rows($connection)){
        header("refresh: 1; url=index.php");
    }    
    include('inc/footer.php'); ?>
