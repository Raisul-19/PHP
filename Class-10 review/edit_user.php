<?php

    require 'header.php';
    require 'db.php';

?>

<?php

    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);


?>

<section>
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 m-auto my-5 bg-dark text-center">
                <div class="header bg-secondary p-3 my-3 text-center text-white">
                    <h3>Update Profile Information</h3>
                </div>
                <form action="update_user.php" method="post">

                    <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc['id']; ?>">

                    <div class="form-group py-2">
                        <input type="text" class="form-control" name="fname" value="<?php echo $after_assoc['name']; ?>">
                    </div>
                    <div class="form-group py-2">
                        <input type="email" readonly class="form-control" name="email" value="<?php echo $after_assoc['email']; ?>">
                    </div>
                    <div class="form-group py-2 position-relative">
                        <input type="password" class="form-control" id="passShow" name="password" value="<?php echo $after_assoc['password'] ?>">
                        <button type="button" onclick="myFunction()" class="btn btn-success position-absolute" style="right: 0; top: 8px">Show</button>
                    </div>
                    <div class="form-group py-2 text-white text-center">
                        <input type="radio" id="gender" name="gender" value="Male" <?php if($after_assoc['gender']=='Male') {echo 'checked'; } ?> ><label for="gender">Male</label>
                        <input type="radio" id="gender2" name="gender" value="Female" <?php if($after_assoc['gender']=='Female') {echo 'checked'; } ?> ><label for="gender2">Female</label>
                    </div>

                    <button type="submit" class="btn btn-success my-3">Submit</button>

                </form>
            </div>
        </div>
    </div>
</section>





<?php

    require 'footer.php';

?>