<?php  
    include('inc/header.php');
    include('inc/validation.php');

if(isset($_POST['submit'])){
    if(requirediput($_POST['name']) &&requirediput($_POST['email']) && requirediput($_POST['password'])){
        if(max_input($_POST['password'],20) && min_input($_POST['name'],3)){
            if(valid_email($_POST['email']))
            {
                $name=sant_string($_POST['name']);
                $email=sant_email($_POST['email']);
                $password=sant_string($_POST['password']);
                $id=$_POST['id'];
                $hashed_password=password_hash($password,PASSWORD_DEFAULT );
                $query = mysqli_query($connection, "UPDATE users SET userName='$name', email='$email', password='$hashed_password' WHERE id='$id';");
                if(mysqli_affected_rows($connection)){
                    $success=  "user updated successfully";
                    header("refresh: 2; url=index.php");
                }else{
                    $error= "error .";
                }
            }else{
                $error="Email must be valid .";
            }
        }else{
            $error="Name must greater than 3 chars / password must be lower than 20 . ";
            }
    }else{
        $error="all fields required .";
    }
}
?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">update User info</h1>
    
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
    <?php
    if($error):?>
    <h5 class="alert alert-danger text-center"><?php echo $error ?></h5>
    <button type="button"  onclick="window.history.back();" class="btn btn-primary">Go Back</button>
    <?php endif;?>

    <?php if($success):?>
    <h5 class="alert alert-success text-center"><?php echo $success ?></h5>
    <?php endif;include('inc/footer.php');?>
