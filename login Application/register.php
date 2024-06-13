<?php

    require 'header.php';

?>

    <div class="container">
        <div class="row py-5">
            <div class="col-lg-10 m-auto bg-info">
                <div class="header text-center bg-primary mt-3 py-2 text-white">
                    <h2>Register Here</h2>
                </div>
                <form action="register-post.php" method="post" enctype="multipart/form-data">
                    <div class="py-3">
                        <input type="text" name="fname" class="form-control" placeholder="Enter your name...">

                        <div class="err_msg text-center text-danger">
                            <?php
                                if(!empty($_GET['name_error'])){
                                    echo $_GET['name_error'];
                                }

                            ?>
                        </div>

                    </div>

                    <div class="py-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email...">
                        <div class="err_msg text-center text-danger">
                            <?php
                                if(!empty($_GET['email_error'])){
                                    echo $_GET['email_error'];
                                }

                            ?>
                        </div>
                    </div>

                    <div class="py-3">
                        <input type="password" name="password" class="form-control" placeholder="Creat your password...">
                        <div class="err_msg text-center text-danger">
                            <?php
                                if(!empty($_GET['password_error'])){
                                    echo $_GET['password_error'];
                                }

                            ?>
                        </div>
                    </div>

                    <div class="py-3">
                        <input type="password" name="re_password" class="form-control" placeholder="Confirm password...">

                        <div class="err_msg text-center text-danger">
                            <?php
                                if(!empty($_GET['re_password_error'])){
                                    echo $_GET['re_password_error'];
                                }

                            ?>
                        </div>
                    </div>

                    <div class="py-3 text-center text-white">
                        <input type="radio" name="gender" id="gender-male" class="" value="male"><label for="gender-male">Male</label>
                        <input type="radio" name="gender" id="gender-female" class="" value="female"><label for="gender-female">Female</label>
                        <input type="radio" name="gender" id="gender-others" class="" value="others"><label for="gender-others">Others</label>

                        <div class="err_msg text-center text-danger">
                            <?php
                                if(!empty($_GET['gender_error'])){
                                    echo $_GET['gender_error'];
                                }

                            ?>
                        </div>
                    </div>

                    <div class="py-3">
                        <input type="file" name="photo" class="form-control">

                        <div class="err_msg text-center text-danger">
                            <?php
                                if(!empty($_GET['file_error'])){
                                    echo $_GET['file_error'];
                                }

                            ?>
                        </div>
                    </div>



                    <div class="py-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    <div class="<?=(!empty($_GET['success']))?'alert alert-success':'';  ?> text-center" role="alert">
                        
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




<?php

    require 'footer.php';

?>