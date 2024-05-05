<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>

    <style media="screen">
        .showBtn{
            position: relative;
        }
        .showBtn button{
            position: absolute;
            top: 0;
            right: 0;
        }
        
    </style>

    <!-- bootstrap css file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body> 

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8 py-5 text-center m-auto bg-info">
                    <form action="view.php" method="post">

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
                            <button type="button" onclick="myFunction()" class="btn btn-primary">Show</button>
                            
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

                        <div class="form-group my-2">
                            <select name="country" class="form-control">
                                <option value="">Choose your country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="America">America</option>
                                <option value="Franc">Franc</option>
                                <option value="USN">Unitade State of Noakhali</option>
                            </select>

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['country_error'])){
                                        echo $_GET['country_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                                <input type="radio"  name="gender" value="Male"> Male
                                <input type="radio"  name="gender" value="Female"> Female
                                <input type="radio"  name="gender" value="Others"> Others

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['gender_error'])){
                                        echo $_GET['gender_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">

                                <input type="checkbox"  name="hobbies[]" value="Cricket"> Cricket
                                <input type="checkbox"  name="hobbies[]" value="Football"> Football
                                <input type="checkbox"  name="hobbies[]" value="Ha-Du-Du"> Ha-Du-Du
                                <input type="checkbox"  name="hobbies[]" value="swimming"> swimming

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['hobbies_error'])){
                                        echo $_GET['hobbies_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <select name="subject[]" multiple class="form-control">
                                <option value="">Choose your favorite subjects..</option>
                                <option value="Math">Math</option>
                                <option value="ICT">ICT</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                            </select>

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['subject_error'])){
                                        echo $_GET['subject_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            
                            <textarea name="message" class="form-control" placeholder="Message yor problem under 10 word"></textarea>

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['message_error'])){
                                        echo $_GET['message_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            
                            <input type="date" class="form-control" name="dob">
                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['dob_error'])){
                                        echo $_GET['dob_error'];
                                    }

                                ?>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-success">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </section>



    




    <!-- bootstrap js file link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <*======= password show button function======*>
    <script>
        function myFunction() {
        var x = document.getElementById("passShow");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    
</body>
</html>