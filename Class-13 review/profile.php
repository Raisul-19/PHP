<?php
    
    require 'session-check.php';
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
        <div class="row py-5">
            <div class="col-lg-12">
                <div class="header text-center text-white bg-secondary py-2">
                    <h3>Profile Information</h3>
                </div>
                <table class="table table-dark table-striped">

                    <tr>
                        <td>Id :</td>
                        <td><?php echo $after_assoc['id'] ?></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td><?php echo $after_assoc['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><?php echo $after_assoc['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><?php echo $after_assoc['password'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
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