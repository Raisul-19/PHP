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
                        <th>ACTION</th>
                    </tr>

                    <?php foreach($select_result as $user_info){   ?>

                        <tr>
                            <td><?php echo $user_info['id'];  ?></td>
                            <td><?php echo $user_info['name'];  ?></td>
                            <td><?php echo $user_info['email'];  ?></td>
                            <td><?php echo $user_info['password'];  ?></td>
                            <td><?php echo $user_info['gender'];  ?></td>
                            <td>
                                <a href="profile.php?id=<?php echo $user_info['id'];  ?>"><button class="btn btn-success">View</button></a>
                                <a href="edit_user.php?id=<?php echo $user_info['id'];  ?>"><button class="btn btn-warning">Edite</button></a>
                                <a href="delete_user.php?id=<?php echo $user_info['id'];  ?>"><button class="btn btn-danger">Delete</button></a>
                            </td>
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