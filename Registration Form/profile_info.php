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

<section class="user-list">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <div class="head text-center bg-success text-white py-3">
                    <h3>Profile Details</h3>
                </div>
                <table class="table table-success table-striped">
                    <tr>
                        <td>NAME :></td>
                        <td><?php echo $after_assoc['name'] ?></td>
                    </tr>
                    <tr>
                        <td>EMAIL :></td>
                        <td><?php echo $after_assoc['email'] ?></td>
                    </tr>
                    <tr>
                        <td>PHONE :></td>
                        <td><?php echo $after_assoc['phone'] ?></td>
                    </tr>
                    <tr>
                        <td>GENDER :></td>
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