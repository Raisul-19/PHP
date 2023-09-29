<?php

require 'header.php';
require 'database.php';

?>

<?php

    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id ";

    $select_result = mysqli_query($connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);


?>

<section>
    <div class="container">
        <div class="row p-5">
            <div class="col-md-12">
                <div class="head text-center py-3 bg-secondary text-white">
                    <h3>Personal Information</h3>
                </div>

                <table class="table table-dark table-striped">

                    <tr>
                        <td>Name : </td>
                        <td><?php echo $after_assoc['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><?php echo $after_assoc['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td><?php echo $after_assoc['password'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender : </td>
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