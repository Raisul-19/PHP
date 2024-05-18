<?php

    require 'header.php';
    require 'database.php';

?>

<?php

    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);


?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto my-5">
                <div class="header bg-primary py-3 text-center text-white">
                    <h3>Profile Information</h3>
                </div>

                <table class="table table-striped table-primary">
                    <tr>
                        <td>ID</td>
                        <td></td>

                    </tr>

                </table>
            </div>
        </div>
    </div>
</section>




<?php

    require 'footer.php';

?>