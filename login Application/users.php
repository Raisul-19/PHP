<?php

    require 'header.php';
    require 'database.php'; 

?>

<?php

    $select = "SELECT * FROM users ORDER by id DESC";
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
                            <img src="uploads/users/<?php echo $user_info['photo']; ?>" alt="photo" width="50" height="50">
                        </td>
                        <td><?php echo $user_info['created_at']; ?></td>
                        <td class="text-center">
                            <a href="profile.php?id=<?php echo $user_info['id']; ?>" class="btn btn-primary">View</a>
                            <a href="edit-users.php?id=<?php echo $user_info['id']; ?>" class="btn btn-warning">Edit</a>
                           
                             <!-- Button trigger modal -->
                             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $user_info['id'] ?>">
                                    Delete
                                </button>
                        </td>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal<?php echo $user_info['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        After delete , you can not find this !!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Not Yet</button>
                                    <a href="delete-users.php?id=<?php echo $user_info['id'] ?>" type="button" class="btn btn-danger">Yes</a>
                                </div>
                                </div>
                            </div>
                        </div>

                    </tr>

                

                <?php } ?>

            </table>

        </div>
    </div>
</div>







<?php

    require 'footer.php';


?>