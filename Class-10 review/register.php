<?php

    require 'header.php';

?>

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8 py-5 text-center m-auto bg-dark">

                    <div class="header text-white py-2 mb-3 bg-secondary">
                        <h2>Resigtration Form</h2>
                    </div>
                    <form action="register-post.php" method="post">

                        <div class="form-group my-2">
                            <input type="text" class="form-control" name="fname" placeholder="Enter your name...">

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['name_error'])){
                                        echo $_GET['name_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email...">

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['email_error'])){
                                        echo $_GET['email_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2 showBtn">
                            <input type="password" class="form-control" name="password" placeholder="Enter password..." id="passShow">
                            <button type="button" onclick="myFunction()" class="btn btn-success">Show</button>
                            
                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['pass_error'])){
                                        echo $_GET['pass_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <input type="password" class="form-control" name="re_password" placeholder="Confirm password...">

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['re_pass_error'])){
                                        echo $_GET['re_pass_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group py-2 text-white">
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                            <input type="radio" name="gender" value="Others">Others
                        </div>

                       


                        <button type="submit" class="btn btn-success mt-4">Submit</button>

                        <div class="<?=(!empty($_GET['success'])?'alert alert-success':'') ?>  mt-3" role="alert">
                                    
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



    
<?php

    require 'footer.php';

?>

