<?php

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
                            <td><img src="uploads/user/<?php echo $user_info['photo'] ?>" alt="" width="50"></td>
                            <td><a href="single-view.php?id=<?php echo $user_info['id'] ?>"><button class="btn btn-success">View</button></a></td>
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