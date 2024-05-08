<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>database connection</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
 
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="form bg-info text-white px-3 py-5">
                            <div class="head text-center">
                                <h2>Sign Up Here</h2>
                            </div>
                            <form action="user_post.php" method="post">
                                <div class="py-2">
                                    <input type="text" name="fname" class="form-control" placeholder="Enter your name...">

                                    <div class="error_msg text-center text-danger">
                                    <?php
                                            if(!empty($_GET['name_error'])){
                                                echo $_GET['name_error'];
                                            }

                                        ?>
                                    </div>

                                </div>
                                <div class="py-2">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email...">

                                    <div class="error_msg text-center text-danger">
                                    <?php
                                            if(!empty($_GET['email_error'])){
                                                echo $_GET['email_error'];
                                            }

                                        ?>
                                    </div>

                                </div>
                                <div class="py-2">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password...">

                                    <div class="error_msg text-center text-danger">
                                    <?php
                                            if(!empty($_GET['password_error'])){
                                                echo $_GET['password_error'];
                                            }

                                        ?>
                                    </div>

                                </div>
                                <div class="py-2 text-center">
                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="others">others

                                    <div class="error_msg text-center text-danger">
                                    <?php
                                            if(!empty($_GET['gender_error'])){
                                                echo $_GET['gender_error'];
                                            }

                                        ?>
                                    </div>

                                </div>

                                <div class="py-2">
                                    <button class="btn btn-warning form-control">Submit</button>
                                </div>

                                <div class="<?=(!empty($_GET['success']))?'alert alert-success':''; ?> text-center" role="alert">
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
            </div>
        </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


  </body>
</html>