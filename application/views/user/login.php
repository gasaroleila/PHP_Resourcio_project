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
            height: 55%;
            margin:auto;
        }

        h3 {
            color: #524bd7; 
        }

        input[type=submit] {
            background-color: #524bd7!important;
            
        }
        p .errors{
            color: red !important;
        }


    </style>
</head>
<body class="d-flex justify-content-center">
    <div class="container bg-white rounded p-4 shadow-lg col-lg-5 col-xl-4 col-md-6 col-sm-7 col-9">
        <h3 class="fw-bold mb-3">Log In</h3>
        
    <?php 
    $message=$this->session->flashdata('error');
    if (isset($message)):?>
    <?php echo "<small class='text-danger'>".$this->session->flashdata('error')."</small>";
     $this->session->unset_userdata('error');?> 
    <?php endif;?>

    <?php $attributes=array('class'=>'mt-auto');?>
    <?php echo form_open(base_url('login'),$attributes)?>

    <div class="form-floating mb-3">

    <?php $atts=array(
        'type'=>'text',
        'id'=>'floatingInput',
        'class'=>'form-control shadow-none',
        'name'=>'email',
        'placeholder'=>'Email'
        );
        ?>
    <?php echo form_input($atts)?>
    <small class="text-danger"><?= form_error('email') ?></small>
    <?php echo form_label('Email','"for"="floatingInput"')?>
    </div>

    <div class="form-floating mb-3">
        <?php $attr=array(
            'type'=>'password',
            'class'=>'form-control shadow-none',
            'name'=>'Password',
            'placeholder'=>'Password'
            );
            ?>
        <?php echo form_password($attr)?>
        <small class="text-danger"><?= form_error('Password') ?></small>
        <?php echo form_label('Password',)?>
    </div>
   
   <?php
    $attr=array(
        'type'=>'submit',
        'class'=>'btn text-light',
        'name'=>'submit',
        'value'=>'Login'
        );
    ?>
    <a href="<?= site_url('User/user_reset') ?>" class="d-block float-end">Forgot Password?</a>
    <?php echo form_submit($attr)?>
    
    <?php
    $err=$this->session->flashdata('inactive');
    if (isset($err)):?>
    <?php echo $this->session->flashdata('inactive');
    $this->session->unset_userdata('inactive');?> 
    <?php endif;?>
    <?php echo form_close();?>
        </div>
    </div>
</body>
</html>