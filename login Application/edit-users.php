<?php

    require 'header.php';
    require 'database.php';

?>


<?php

    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);



?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto bg-dark">
            <div class="header text-center bg-secondary text-white py-2">
                <h2>Update Users Information</h2>
            </div>

            <form action="update-users.php" method="post">
                <input type="hidden" class="form-control" value="<?php echo $after_assoc['id'] ?>">
                <div class="py-2">
                    <input type="text" class="form-control" name="fname" value="<?php echo $after_assoc['name'] ?>">
                </div>
                <div class="py-2">
                    <input type="email" readonly class="form-control" name="email" value="<?php echo $after_assoc['email'] ?>">
                </div>
                <div class="py-2">
                    <input type="password" class="form-control" name="password" value="<?php echo $after_assoc['password'] ?>">
                </div>
                <div class="py-2 text-white text-center">
                    <input type="radio" name="gender" id="male" value="male" <?=($after_assoc['gender']=='male')?'checked':''; ?>><label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female" <?=($after_assoc['gender']=='female')?'checked':''; ?>><label for="female">Female</label>
                    <input type="radio" name="gender" id="others" value="others" <?=($after_assoc['gender']=='others')?'checked':''; ?>><label for="others">Others</label>
                </div>
                <div class="py-2 text-center text-white">
                    <p>Profile Picture</p>
                    <img src="uploads/users/<?php echo $after_assoc['photo']; ?>" alt="missing photo" height="200">



                </div>

                <div class="py-2 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>


            </form>
        </div>
    </div>
</div>


<?php

    require 'footer.php';

?>