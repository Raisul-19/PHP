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
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="head text-center text-white bg-success py-3">
                    <h2>Profile Information</h2>
                </div>
                <table class="table table-dark table-striped">
                    <tr>
                        <td>PROFILE PHOTO : </td>
                        <td><img src="upload/user/<?php echo $after_assoc['photo']; ?>" alt="" width="200"></td>
                    </tr>
                    <tr>
                        <td>ID :</td>
                        <td><?php echo $after_assoc['id'] ?></td>
                    </tr>
                    <tr>
                        <td>NAME :</td>
                        <td><?php echo $after_assoc['name'] ?></td>
                    </tr>
                    <tr>
                        <td>EMAIL :</td>
                        <td><?php echo $after_assoc['email'] ?></td>
                    </tr>
                    <tr>
                        <td>PASSWORD :</td>
                        <td><?php echo $after_assoc['password'] ?></td>
                    </tr>
                    <tr>
                        <td>GENDER :</td>
                        <td><?php echo $after_assoc['gender'] ?></td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
</section>



<?php

    require 'footer.php';

?>