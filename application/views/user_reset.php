<?php
  if($this->session->userdata('studentId')) {
      redirect('collection');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Reset Password</title>
</head>
<body>
    <div class="container col-5 mt-5">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title"></h5>
                <p class="card-text fw-bold">Enter your email to get a password recovery link.</p>
                <form action=<?php  echo base_url("user/user_reset") ?> method="POST">
                    <input type="text" name="email" class="form-control mb-2" placeholder="Email">
                    <small style="color:red;"><?php echo form_error('email') ?></small>
                    <a class="btn btn-secondary" href=<?php echo base_url("user/login_view") ?> >Back to login</a>
                    <input type="submit" class="btn btn-primary" value="Get link">
                </form>
            </div>
        </div>
    </div>
  
</body>
</html>