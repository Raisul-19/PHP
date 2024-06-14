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
        <div class="col-lg-8 my-5 m-auto">
            <div class="header bg-success text-center py-2 text-white">
                <h2>Profile Information</h2>
            </div>

            <table class="table table-success table-striped">
                <tr>
                    <td>ID</td>
                    <td>:   <?php echo $after_assoc['id']; ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>:   <?php echo $after_assoc['name']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:   <?php echo $after_assoc['email']; ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:   <?php echo $after_assoc['password']; ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:   <?php echo $after_assoc['gender']; ?></td>
                </tr>
                <tr>
                    <td>Profile Picture</td>
                    <td>:   <img src="uploads/users/<?php echo $after_assoc['photo'] ?>" alt="photo" height="200"></td>
                </tr>

            </table>

        </div>
    </div>
</div>




<?php

    require 'footer.php';

?>