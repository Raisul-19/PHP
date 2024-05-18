<?php

    require 'header.php';
    require 'database.php';

?>

<?php

    $select = "SELECT * FROM users ORDER by id DESC";
    $select_result = mysqli_query($db_connection, $select);

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto my-5 py-3">
                <div class="header text-center py-2 bg-success text-white">
                    <h3>Users Information</h3>
                </div>

                <table class="table table-striped table-success">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>GENDER</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                    <?php foreach($select_result as $user_info){  ?>

                        <tr>
                            <td><?php echo $user_info['id'] ?></td>
                            <td><?php echo $user_info['name'] ?></td>
                            <td><?php echo $user_info['email'] ?></td>
                            <td>********</td>
                            <td><?php echo $user_info['gender'] ?></td>
                            <td class="text-center">
                                <a href="profile.php?id=<?php echo $user_info['id'] ?>" class="btn btn-info">View</a>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    <?php } ?>




                </table>

            </div>
        </div>
    </div>
</section>





<?php

    require 'footer.php';

?>