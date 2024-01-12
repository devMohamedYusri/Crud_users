<?php  
    include('inc/header.php');
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header("location: index.php");
    }

    $id=$_GET['id'];
    $query=mysqli_query($connection,"SELECT * FROM users WHERE id='$id';");
    if(mysqli_num_rows($query)<=0){
        header("location: index.php");
    }

    $row=mysqli_fetch_assoc($query);
?>

    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="post" action="update.php">
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" value="<?= $row['userName'];?>" id="exampleInputName1" >
                <input type="hidden" name="id" class="form-control" value="<?= $row['id'];?>" id="exampleInputName2" >

            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" class="form-control"  value="<?= $row['email'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control"  id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">update</button>
        </form>
    </div>

<?php 
include('inc/footer.php');?>