<?php

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
                        <th>ACTION</th>
                    </tr>

                <?php foreach($select_result as $user_info) {  ?>

                    <tr>
                        <td><?php echo $user_info['id']; ?></td>
                        <td><?php echo $user_info['name']; ?></td>
                        <td><?php echo $user_info['email']; ?></td>
                        <td><?php echo "********"; ?></td>
                        <td><?php echo $user_info['gender']; ?></td>
                        <td><a href="profile.php?id=<?php echo $user_info['id']; ?>" class="btn btn-success">Details</a></td>

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