<?php

    require 'header.php';
    require 'database.php'; 

?>

<?php

    $select = "SELECT * FROM users";
    $select_result = mysqli_query($db_connection, $select);


?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 py-5">
            <div class="header text-center bg-info py-2">
                <h2>Users Information</h2>
            </div>

            <table class="table table-info table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>GENDER</th>
                    <th>PHOTO</th>
                    <th>CREATED TIME</th>
                    <th class="text-center">ACTION</th>
                </tr>

                <?php foreach($select_result as $user_info){ ?>
                    <tr>
                        <td><?php echo $user_info['id']; ?></td>
                        <td><?php echo $user_info['name']; ?></td>
                        <td><?php echo $user_info['email']; ?></td>
                        <td>********</td>
                        <td><?php echo $user_info['gender']; ?></td>
                       
                        <td>
                            <img src="uploads/users/<?php echo $user_info['photo']; ?>" alt="photo" width="50">
                        </td>
                        <td><?php echo $user_info['created_at']; ?></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>

                <?php } ?>

            </table>

        </div>
    </div>
</div>







<?php

    require 'footer.php';


?>