<?php
require_once('config.php');
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./login_signup.css">
    <title>Signup</title>
  </head>
  <body>



      <div class="container">
          <div class="row align-items-center vh-100" id="login">
              <div class="col-md-8 mx-auto">
                  <div class="card shadow-lg rounded">
                      <div class="card-body">
                          <form action="./signup.php" method="post">
                                <h1 class="text-center mb-5 ">Sign Up</h1>
                                <div class="form-group">
                                    <input type="text" class="form-control " name="regid" placeholder="Enter Registration ID" required>
                                </div>
                                <div class="form-group">
                                  <input type="email" class="form-control" name= "email" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                  <input type="password" class="form-control " name= "password" placeholder="Enter Password" required>
                                </div>
                                <!-- <button type="submit" class="btn btn-md w-100 btn-block" name="submit-btn">Signup</button> -->
                                <input type="submit" class="btn btn-md w-100 btn-block" name="create" value="Signup"/>
                                <p class="text-center" id="create-account"><a href="login.php">Existing user? login</a></p>
                                <p>message:
                                  <?php
                                  if(isset($_POST['create'])){

                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $regid = $_POST['regid'];

                                    $sql = "insert into users (registration_id,email,password) values(?,?,?)";
                                    $statement = $db->prepare($sql);
                                    $resultset = $statement->execute([$regid,$email,$password]);
                                    if($resultset){
                                      echo "User saved sucessfully!";
                                    }else{
                                      echo "error in saving data!";
                                    }

                                    // echo $email . " " . $password . " " . $regid;
                                  }

                                  ?>
                                </p>
                            </form>
                      </div>
                  </div>
              </div>
          </div>

      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>