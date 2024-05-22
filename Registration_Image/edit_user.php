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


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto my-5 py-3 bg-dark text-center">
                <div class="header text-white text-center bg-secondary py-3 mb-3">
                    <h3>Update User Information</h3>
                </div>

                <form action="update_user.php" method="post" enctype="multipart/form-data">
                    <div class="form-group py-2">

                        <input type="hidden" name="id" value="<?php echo $after_assoc['id'] ?>">

                        <input type="text" class="form-control" name="fname" value="<?php echo $after_assoc['name'] ?>">

                    </div>
                    <div class="form-group py-2">
                        <input type="email" class="form-control" name="email" value="<?php echo $after_assoc['email'] ?>">


                    </div>
                    <div class="form-group py-2 position-relative">
                        <input type="password" id="passShow" class="form-control" name="password" value="<?php echo $after_assoc['password'] ?>">
                        <button type="button" onclick="myFunction()" class="btn btn-success position-absolute" style="right: 0; top: 8px">Show</button>


                    </div>
                    <div class="form-group py-2 text-center text-white">
                        <input type="radio"  name="gender" id="male" value="Male" <?php if($after_assoc['gender']=='Male'){ echo 'checked';} ?>><label for="male">Male</label>
                        <input type="radio"  name="gender" id="female" value="Female" <?php if($after_assoc['gender']=='Female'){ echo 'checked';} ?>><label for="female">Female</label>
                        <input type="radio"  name="gender" id="others" value="Others" <?php if($after_assoc['gender']=='Others'){ echo 'checked';} ?> ><label for="others">Others</label>


                    </div>

                    <div class="form-group text-white mt-3">
                        <p>Present Profile Picture</p>
                        <img src="uploads/users/<?php echo $after_assoc['photo'] ?>" alt="photo" width="200">
                        <input type="file" name="photo" class="form-control mt-2">
                    </div>


                    <button type="submit" class="btn btn-success mt-3">Update</button>


                </form>

            </div>
        </div>
    </div>
</section>


<script>
        function myFunction() {
        var x = document.getElementById("passShow");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>



<?php

    require 'footer.php';

?>