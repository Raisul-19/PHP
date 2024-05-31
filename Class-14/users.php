<?php

    if(!isset($_COOKIE['name'])){
        header('location:login.php');
    }
    else{
        setcookie('name', 'value', time()+30);
    }

    require 'session-check.php';
    require 'header.php';
    require 'database.php';

?>

<?php

$select = "SELECT * FROM users ORDER by id DESC"; // for desending order

$select_result = mysqli_query($connection, $select);


?>

<section>
    <div class="container">
        <div class="row p-5">
            <div class="col-md-12">
                <div class="position-absolute">
                    <a href="logout.php" class="btn btn-danger">LogOut</a>
                </div>
                <div class="head text-center py-3 bg-secondary text-white">
                    <h3>Users Information List</h3>
                </div>

                <table class="table table-dark table-striped">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>GENDER</th>
                        <th>PHOTO</th>
                        <th>ACTION</th>
                    </tr>

                    <?php foreach($select_result as $user_info){ ?>

                        <tr>
                            <td><?php echo $user_info['id'] ?></td>
                            <td><?php echo $user_info['name'] ?></td>
                            <td><?php echo $user_info['email'] ?></td>
                            <!-- <td> <?php // echo $user_info['password'] ?></td> -->
                            <td>********</td>
                            <td><?php echo $user_info['gender'] ?></td>
                            <td><img src="upload/user/<?php echo $user_info['photo'] ?>" alt="" width="50"></td>
                            <td>
                                <a href="single-view.php?id=<?php echo $user_info['id'] ?>"><button class="btn btn-success">View</button></a>

                                <a href="edit-user.php?id=<?php echo $user_info['id'] ?>"><button class="btn btn-warning">Edit</button></a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $user_info['id'] ?>">
                                    Delete
                                </button>


                            </td>
                            
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $user_info['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    Delete korle kintu ar fire pabu na !!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Vul Hoise</button>
                                <a href="delete-user.php?id=<?php echo $user_info['id'] ?>" type="button" class="btn btn-danger">Abar Jigay</a>
                            </div>
                            </div>
                        </div>
                        </div>



                    <?php } ?>

                    <?php
                    if($select_result->num_rows==0){  ?>

                    <tr>
                        <td colspan="7" class="text-center"><h3>No Data Available.</h3></td>
                    </tr>

                   <?php  }  ?>




                </table>

            </div>
        </div>
    </div>
</section>







<?php

require 'footer.php';

?>