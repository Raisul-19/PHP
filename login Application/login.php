<?php

    require 'header.php';
    require 'database.php';

?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto my-5 bg-success">
            <div class="header text-center bg-primary py-2 mt-2 text-white">
                <h3>Log In Here</h3>
            </div>
            <form action="login-post.php" method="post">
                <div class="py-3">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email...">
                </div>
                <div class="py-3 showBtn">
                    <input type="password" name="password" class="form-control" placeholder="Password...">
                    <button type="button" onclick="myFunction()" class="btn btn-primary">Show</button>
                </div>

                <div class="err_msg text-warning text-center">
                    <?php

                        if(!empty($_GET['login_error'])){
                            echo $_GET['login_error'];
                        }

                    ?>
                </div>

                <div class="py-3 text-center">

                    <button type="submit" class="btn btn-primary">Login</button>
                    
                </div>



            </form>
        </div>
    </div>
</div>

<?php

    require 'footer.php';

?>