<?php

    require 'header.php'

?>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-lg-7 text-center m-auto pb-5 bg-dark">
                <div class="head bg-secondary py-3 mb-4 text-white">
                    <h3>Registration Form</h3>
                </div>


                <form class="text-white" action="register-post.php" method="post">
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="fname" placeholder="enter your name">

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['nam_err'])){
                                echo $_GET['nam_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="email" placeholder="enter your email">

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['eml_err'])){
                                echo $_GET['eml_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group mb-3 pass-btn">
                        <input class="form-control" type="password" name="password" placeholder="enter a strong password" id="myInput" class="from-control">
                        <button class="btn btn-success" type="button" onclick="myFunction()">show</button>

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['pass_err'])){
                                echo $_GET['pass_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="re-password" placeholder="enter re-password">

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['rpass_err'])){
                                echo $_GET['rpass_err'];
                            }

                            ?>
                        </div>

                
                    </div>


                    <div class="form-group mb-3">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Fe-male">Fe-male
                        <input type="radio" name="gender" value="Other">Other

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['gender_err'])){
                                echo $_GET['gender_err'];
                            }

                            ?>
                        </div>

                
                    </div>


                    <button type="submit" class="btn btn-success">Submit</button>


                    <div class="success_msg">
                        <div class="<?=(!empty($_GET['succ_msg'])?'alert alert-success':''); ?> mt-4" role="alert">
                            <?php

                                if(!empty($_GET['succ_msg'])){
                                    echo $_GET['succ_msg'];
                                }

                            ?>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>



<?php


    require 'footer.php';

?>