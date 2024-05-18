<?php

    require 'header.php';

?>


<!-- form design start -->


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center my-5 pb-3 bg-info">
                <div class="header py-3 my-3 bg-secondary text-white">
                    <h2>Registration Here </h2>
                </div>

                <form action="registration_post.php" method="post">
                    <div class="form-group py-2">
                        <input type="text" class="form-control" name="fname" placeholder="Enter your name...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['name_error'])){
                                    echo $_GET['name_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['email_error'])){
                                    echo $_GET['email_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="password" class="form-control" name="password" placeholder="Creat a password...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['password_error'])){
                                    echo $_GET['password_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="password" class="form-control" name="re_password" placeholder="Confirm password...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['re_password_error'])){
                                    echo $_GET['re_password_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="radio" name="gender" id="male" value="Male"><label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="Female"><label for="female">Female</label>
                        <input type="radio" name="gender" id="others" value="Others"><label for="others">Others</label>

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['gender_error'])){
                                    echo $_GET['gender_error'];
                                }

                            ?>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-5">Submit</button>

                    <div class="<?=(!empty($_GET['success']))?'alert alert-success':'';  ?> mt-3" role="alert"">
                        <?php
                            if(!empty($_GET['success'])){
                                echo $_GET['success'];
                            }

                        ?>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>




<!-- form design end -->






<?php

    require 'footer.php';

?>