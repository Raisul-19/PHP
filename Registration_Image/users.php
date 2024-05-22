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
                        <th>PHOTO</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                    <?php foreach($select_result as $user_info){  ?>

                        <tr>
                            <td><?php echo $user_info['id'] ?></td>
                            <td><?php echo $user_info['name'] ?></td>
                            <td><?php echo $user_info['email'] ?></td>
                            <td>********</td>
                            <td><?php echo $user_info['gender'] ?></td>
                            <td><img src="uploads/users/<?php echo $user_info['photo'] ?>" alt="photo" width="50"></td>
                            <td class="text-center">
                                <a href="profile.php?id=<?php echo $user_info['id'] ?>" class="btn btn-info">View</a>
                                <a href="edit_user.php?id=<?php echo $user_info['id'] ?>" class="btn btn-warning">Edit</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $user_info['id'] ?>">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <div class="modal fade" id="exampleModal<?php echo $user_info['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Are Your Sure to Delete</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                After deleted this file cann't be recover .
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Not Yet</button>
                                <a href="delete_user.php?id=<?php echo $user_info['id'] ?>" class="btn btn-danger">Delete</a>
                            </div>
                            </div>
                        </div>
                        </div>

                    <?php } ?>




                </table>

            </div>
        </div>
    </div>
</section>





<?php

    require 'footer.php';

?>