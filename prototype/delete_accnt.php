<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>
    <h3 class="text-center mb-4">DELETE</h3>

    <form action="" method="post" class="mt-5">
        <div class="form-outling mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account">
        </div>

        <div class="form-outling mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Don't Delete Account">
        </div>

        <?php
        $username_session=$_SESSION['username'];
        if(isset($_POST['delete'])){
            $delete_query="DELETE FROM users WHERE username='$username_session'";
            $result=mysqli_query($db , $delete_query);

            if($result){
                session_destroy();
                echo "<script>alert('Account Deleted Successfully')</script>";
                echo "<script>window.open('register.php','_self')</script>";
            }
        }

        if(isset($_POST['dont_delete'])){
            echo "<script>window.open('addtocart.html','_self')</script>";
        }
        ?>

    </form>
</body>
</html>
