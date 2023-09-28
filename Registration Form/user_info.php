<?php

    require 'header.php';
    require 'database.php';

?>

<?php

    $select = "SELECT * FROM users ORDER by id DESC";

    $select_result = mysqli_query($connection, $select);


?>

<section class="user-list">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <div class="head text-center bg-success text-white py-3">
                    <h3>Users Information List</h3>
                </div>
                <table class="table table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>GENDER</th>
                        <th>ACTION</th>
                    </tr>

                    <?php foreach($select_result as $users){ ?>
                    <tr>
                        <td><?php echo $users['id'] ?></td>
                        <td><?php echo $users['name'] ?></td>
                        <td><?php echo $users['email'] ?></td>
                        <td><?php echo $users['phone'] ?></td>
                        <td><?php echo $users['gender'] ?></td>
                        <td><a href="profile_info.php?id=<?php echo $users['id'] ?>" class="btn btn-success">View</a></td>
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