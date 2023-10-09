<?php

    require 'header.php';
    require 'database.php';


    $select = "SELECT * FROM users ORDER by id DESC";
    $select_result = mysqli_query($db_connection, $select);


?>

<section>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-12 mx-auto">
                <div class="head text-center text-white bg-success py-3">

                    <h2>Users Information</h2>

                </div>
                <table class="table table-striped table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>GENDER</th>
                        <th>PHOTO</th>
                        <th>ACTION</th>
                    </tr>

                    <?php foreach($select_result as $user_info){   ?>

                        <tr>
                            <td><?php echo $user_info['id'];  ?></td>
                            <td><?php echo $user_info['name'];  ?></td>
                            <td><?php echo $user_info['email'];  ?></td>
                            <td>********</td>
                            <td><?php echo $user_info['gender'];  ?></td>
                            <td><img src="upload/user/<?php echo $user_info['photo'] ?>" alt="" width="50"></td>
                            <td>
                                <a href="profile.php?id=<?php echo $user_info['id'];  ?>"><button class="btn btn-success">View</button></a>
                                <a href="edit_user.php?id=<?php echo $user_info['id'];  ?>"><button class="btn btn-warning">Edite</button></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        Delete
                                </button>
                            </td>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    After delete , you can't get this data !!!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                    <a href="delete_user.php?id=<?php echo $user_info['id'] ?>" type="button" class="btn btn-primary">YES</a>
                                </div>
                                </div>
                            </div>
                            </div>

                        </tr>



                    <?php  }  ?>


                    <?php if($select_result->num_rows==0){ ?>
                        <tr>
                            <td colspan="6" class="text-center text-capitalize"><h3>no data available</h3></td>
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