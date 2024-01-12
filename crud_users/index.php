<?php 
    include('inc/header.php');
    $data=mysqli_query($connection,"SELECT * FROM users;");
    echo "<pre>";
?>

    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">ALL USERS</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($data)):?>
                    <tr>
                        <th><?=$row['id'];?></th>
                        <td><?=$row['userName'];?></td>
                        <td><?=$row['email'];?></td>
                        <td>
                            <a class="btn btn-info" href="edit.php?id=<?=$row['id'];?>"> <i class="fa fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>"> <i class="fa fa-close"></i> </a>
                        </td>
                        <?php endwhile;?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php  include('inc/footer.php'); ?>