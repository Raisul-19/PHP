<?php

    if(!isset($_COOKIE['nam'])){
        header('location:login.php');
    }
    else{
        setcookie('nam', 'valu', time()+(60*2));
    }

    require 'session-check.php';
    require 'header.php';
    require 'db.php';

?>

<?php

    $select = "SELECT * FROM users ORDER by id DESC";
    $select_result = mysqli_query($db_connection, $select);

?>

<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-12">
                <div class="header text-center text-white bg-secondary py-2">
                    <h3>Users Information</h3>
                </div>
                <table class="table table-dark table-striped">

                    <tr>
                        <th>Id</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>GENDER</th>
                        <th>PHOTO</th>
                        <th>CREATED TIME</th>
                        <th class="text-center">ACTION</th>
                    </tr>

                <?php foreach($select_result as $user_info) {  ?>

                    <tr>
                        <td><?php echo $user_info['id']; ?></td>
                        <td><?php echo $user_info['name']; ?></td>
                        <td><?php echo $user_info['email']; ?></td>
                        <td><?php echo "********"; ?></td>
                        <td><?php echo $user_info['gender']; ?></td>
                        <td><img src="uploads/users/<?php echo $user_info['photo']; ?>" alt="Photo" width="50"></td>
                        <td><?php echo $user_info['created_at']; ?></td>
                        <td class="text-center">
                            <a href="profile.php?id=<?php echo $user_info['id']; ?>" class="btn btn-success">View</a>
                            <a href="edit_user.php?id=<?php echo $user_info['id']; ?>" class="btn btn-warning">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $user_info['id']; ?>">
                                Delete
                            </button>
         
                        
                        </td>

                    </tr>

                    
                    <div class="modal fade" id="exampleModal<?php echo $user_info['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure to Delete ??</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                Deleted file can not be recover  !!!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <a href="delete_user.php?id=<?php echo $user_info['id']; ?>" class="btn btn-danger">Yes</a>
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