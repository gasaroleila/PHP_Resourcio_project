<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }

        body {
            background-image: url('./assets/images/background.jpg');
            height: 100vh;
            width: 100vw;
        }

        .container {
            height: 50%;
            margin:auto;
        }

        h3 {
            color: #524bd7; 
        }

        button {
            background-color: #524bd7!important;
            
        }


    </style>
</head>
<body class="d-flex justify-content-center">
<div class="container bg-white rounded p-4 shadow-lg col-lg-5 col-xl-4 col-md-6 col-sm-7 col-9">
        <h3 class="fw-bold mb-3">Log In</h3>
    
        <form action="createUser.php" method="POST" enctype='multipart/form-data' class="mt-auto">
            <div class="form-floating mb-3">
              <input type="email" class="form-control shadow-none" id="floatingInput" placeholder="Email">
              <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control shadow-none" id="floatingInput" placeholder="Password">
              <label for="floatingInput">Password</label>
            </div>

          <button class="btn text-light">Register</button>
    
          </form>
        </div>
    </div>
</body>
</html>