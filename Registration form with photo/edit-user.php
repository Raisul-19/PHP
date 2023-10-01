<?php 

    require 'header.php';
    require 'database.php';

?>

<?php

$id = $_GET['id'];

$select = "SELECT * FROM users WHERE id=$id";

$select_result = mysqli_query($connection, $select);

$after_assoc = mysqli_fetch_assoc($select_result);

?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto pb-5 bg-dark mt-5">
                <div class="head bg-secondary text-white text-center py-3">
                    <h3>Edit User Information</h3>
                </div>
                <form action="update_user.php" method="post" enctype="multipart/form-data">
                    <div class="form-group my-3">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc['id']; ?>">
                        <input type="text" class="form-control" name="fname" value="<?php echo $after_assoc['name']; ?>">
                    </div>
                    <div class="form-group my-3">
                        <input type="email" class="form-control" name="email" value="<?php echo $after_assoc['email'];  ?>">
                    </div>

                    <div class="form-group my-3 position-relative">
                        <input type="password" class="form-control" name="password" id="myInput" value="<?php echo $after_assoc['password']; ?>">
                        <button class="btn btn-success position-absolute" style="top:0; right:0;" type="button" onclick="myFunction()">show</button>
                    </div>
                    <div class="form-group my-3 text-center text-white">
                        <input type="radio" value="Male" id="gender" name="gender" <?php if($after_assoc['gender']=='Male')echo 'checked'; ?> ><label for="gender">Male</label>
                        <input type="radio" value="Female" id="gender2" name="gender" <?php if($after_assoc['gender']=='Female')echo 'checked'; ?> ><label for="gender2">Female</label>
                        <input type="radio" value="Others" id="gender3" name="gender" <?php if($after_assoc['gender']=='Others')echo 'checked'; ?> ><label for="gender3">Others</label>
                    </div>

                    <div class="form-group my-3">
                        <div class=" image my-3 text-center text-white">
                            <p>Prfile Picture</p>
                            <img src="upload/user/<?php echo $after_assoc['photo']; ?>" alt="" width="200">
                            
                        </div>
                        <input type="file" class="form-control" name="photo">
                    </div>

                    <div class="form-group mt-5 text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>







<?php 

    require 'footer.php';

?>