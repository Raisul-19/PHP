<?php

    require 'header.php';
    require 'database.php';


    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);
?>

<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 bg-dark p-3 mx-auto">
                <div class="head text-center text-white bg-success py-3">

                        <h2>Update Profile Information</h2>

                </div>
                
                <form action="update.php" method="post">
                    <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?> ">
                    </div>
                    <div class="form-group">
                            <input type="text" name="userName" value="<?php echo $after_assoc['name']; ?> " class="form-control">
                    </div>
                    <div class="form-group">
                            <input type="email" name="email" value="<?php echo $after_assoc['email']; ?> " class="form-control">
                    </div>
                    <div class="form-group">
                            <input type="password" name="password" value="<?php echo $after_assoc['password']; ?> " class="form-control">
                    </div>
            
                    <div class="form-group text-center text-white">
                            <input type="radio" name="gender" value="Male" <?php if($after_assoc['gender']=='Male')echo 'checked' ?> >Male
                            <input type="radio" name="gender" value="Femal" <?php if($after_assoc['gender']=='Female') echo 'checked' ?>>Female
                            <input type="radio" name="gender" value="Others" <?php if($after_assoc['gender']=='Others') echo 'checked' ?>>Others
                    </div>


                    <div class="forg-group text-center py-3">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>


                </form>

        </div>
    </div>
</section>




<?php

    require 'footer.php';


?>