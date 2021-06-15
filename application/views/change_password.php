<?php
  if($this->session->userdata('studentId')) {
      redirect('User/login');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            height: 40%;
            margin:auto;
        }

        h3 {
            color: #524bd7; 
        }

        input[type=submit] {
            background-color: #524bd7!important;
            color:white;
        }
        p .errors{
            color: red !important;
        }


    </style>
</head>
<body class="d-flex justify-content-center">
    <div class="container bg-white rounded p-4 shadow-lg col-lg-5 col-xl-4 col-md-6 col-sm-7 col-9">
        <h3 class="fw-bold mb-3">Change Password</h3>
        <form action=<?= site_url("User/change_password?random=$random")?> method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">New Password</label>
                <input type="password" class="form-control" name="password" id="exampleFormControlInput1">
                <small class="text-danger"><?php echo form_error('password') ?></small>
                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm" id="exampleFormControlInput1">
                <small class="text-danger"><?php echo form_error('confirm') ?></small>

            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" hidden value=<?= $email ?> id="exampleFormControlInput1" >
            </div>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>