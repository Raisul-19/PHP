<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5 Form validation</title>

    <!-- bootstrap css file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center m-auto py-5 bg-light">
                <form action="main.php" method="post">
                    <div class="form-group mb-3">
                        <label for="fname">Full Name : </label>
                        <input type="text" id="fname" name="fname" placeholder="enter your name">
                        <div class="err text-danger">
                            <?php
                               if(!empty($_GET['name_error'])){
                                    echo $_GET['name_error'];
                               }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email : </label>
                        <input type="text" id="email" name="email" placeholder="enter your email">

                        <div class="err text-danger">
                            <?php
                                if(!empty($_GET['email_error'])){
                                    echo $_GET['email_error'];
                                }

                            ?>

                        </div>

                
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password : </label>
                        <input type="password" id="password" name="password" placeholder="enter a strong password">

                        <div class="err text-danger">
                            <?php
                            if(!empty($_GET['pass_error'])){
                                echo $_GET['pass_error'];
                            }

                            ?>
                        </div>

                
                    </div>

                    
                    <div class="form-group mb-3">
                    <label for="re-password">Re-Password : </label>
                        <input type="password" id="re-password" name="re-password" placeholder="enter re-password">

                        <div class="err text-danger">
                            <?php
                                if(!empty($_GET['rpass_error'])){
                                    echo $_GET['rpass_error'];
                                }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group w-50 mx-auto mb-3">
                        <select class="form-control" name="country">
                            <option value="">Select your country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="USN">United Stade of Noakhali</option>
                            <option value="Brazil">Brazil</option>
                        </select>

                        <div class="err text-danger">
                            <?php
                                if(!empty($_GET['country_error'])){
                                    echo $_GET['country_error'];
                                }

                            ?>

                        </div>

                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>


    <!-- bootstrap js file link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>