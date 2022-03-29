<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./login_signup.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>
      <div class="container">
          <div class="row align-items-center vh-100" id="login">
              <div class="col-md-6 mx-auto">
                  <div class="card shadow-lg rounded">
                      <div class="card-body">
                          <form action="#" method="post">
                              <h1 class="text-center mb-5 ">Login</h1>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" required>

                              </div>
                              <div class="form-group">

                                <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Enter Password" required>
                              </div>

                                <button type="button" class="btn btn-md w-100 btn-block">Login</button>
                                <p class="text-center" id="create-account"><a href="./signup.php">New user? create account</a></p>

                            </form>
                      </div>
                  </div>
              </div>

          </div>

      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>