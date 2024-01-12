<?php  include('inc/header.php'); ?>
<?php  include('inc/validation.php');

        if(isset($_POST['submit'])){
            if(requirediput($_POST['name']) &&requirediput($_POST['email']) && requirediput($_POST['password'])){
                if(max_input($_POST['password'],20) && min_input($_POST['name'],3)){
                    if(valid_email($_POST['email']))
                    {
                        $name=sant_string($_POST['name']);
                        $email=sant_email($_POST['email']);
                        $password=sant_string($_POST['password']);
                        $query=mysqli_query($connection,"SELECT * FROM users WHERE userName='$name';");
                        if(mysqli_num_rows($query)>0){
                            $error=  "THERE is a user has the same name change the name and try again ";
                        }else{
                            $hashed_password=password_hash($password,PASSWORD_DEFAULT );
                            $query=mysqli_query($connection,"INSERT INTO users (userName,email,password) VALUES ('$name','$email','$hashed_password');");
                            if(mysqli_affected_rows($connection)){
                                $success=  "user added successfuly";
                            }else{
                                $error= "error .";
                            }
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


    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
    <?php
    if($error):?>
    <h5 class="alert alert-danger text-center"><?php echo $error ?></h5>
    <?php endif;?>

    <?php if($success):?>
    <h5 class="alert alert-success text-center"><?php echo $success ?></h5>
    <?php endif;?>

    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="post" action ="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

<?php  
    include("inc/footer.php");
?>