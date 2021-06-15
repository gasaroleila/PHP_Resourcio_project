<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .container{
            margin-top: 2%;
        }
        nav a, .header .fas{
            color:#524BD7;
            
        }
        a.active{
            color:#FA2A77;
        }
        a span{
            color:#BC25A8;
        }
        header button{
            border: 1px solid #5708D3!important;
        }
        header button a{
            text-decoration: none;
        }
        h3{
            margin-left: 35%;
            border-bottom: 3px solid #5708D3!important;
        }
        .members .elt{
            flex-direction: column;
            align-items: center;
        }
        .members .elt .image{
            height: 70px;
            width: 70px;
        }
        .members .elt .image img{
            height: 100%;
            width: 100%;
        }
        .body{
            margin-top: 5px!important;
        }
        .body .main{
            width: 70%;
        }
        /* .svg{
            position: absolute;
            top: 20px;
            float:right;
            left:23em;
        } */
    </style>
</head>
<body>
<div class="big container p-7">
    <header class="col-md-12 float-end mb-5">
        <a class="navbar-brand col-sm-7 fs-2 fw-bold" href="#">Resourc<span>io</span></a>
        <button type="submit" class="btn float-end mx-3"><a href="<?= site_url('User/login_view')?>">Login</a> </button>
        <button type="submit" class="btn float-end m-right-5"><a href="<?= site_url('User/register')?>">Sign Up</a> </button>
    </header>
<div class="body">
<div class="main">
    <div class="container content">
        <h2 class="text-centre col-md-8 mb-5">With resourcio you can keep track of your resources without any difficulties.</h2>
        <p class="text-start col-md-6">You can signup as a user(student) or instructor to start keeping and sharing your resources with friends, the best thing is that you will no longer worry about losing the links that you still need for future use.</p>
    </div>
    <h3 class="col-md-2 text-center mt-5 text-success">Our Team</h3>
    <div class="members mx-4 mt-4 d-flex col-md-7">
        <div class="elt shadow-lg mx-2 col-md-4 border d-flex text-center">
            <div class="image mt-3" >
                <img src="<?= base_url("assets/images/jabes.jpg") ?>" class="rounded-circle" alt="profile">
            </div>
            <div class="des">
                <strong>Mfitumukiza Peter</strong>
                <p>Developer at Resourcio</p>
            </div>
        </div>
        <div class="elt shadow-lg mx-2 col-md-4 border d-flex text-center">
            <div class="image mt-3">
                <img src="<?= base_url("assets/images/peter.jpg") ?>" class="rounded-circle" alt="profile">
            </div>
            <div class="des">
                <strong>Nshuti Jabes</strong>
                <p>software engineer at Resourcio</p>
            </div>
        </div>
        <div class="elt shadow-lg mx-2 col-md-4 border d-flex text-center">
            <div class="image mt-3">
                <img src="<?= base_url("assets/images/leila.jpg") ?>" class="rounded-circle" alt="profile">
            </div>
            <div class="des">
                <strong>Uwamungu Leila</strong>
                <p>Project manager at Resourcio</p>
            </div>
        </div>
        <div class="elt shadow-lg mx-2 col-md-4 border d-flex text-center">
            <div class="image mt-3">
                <img src="<?= base_url("assets/images/Rashid.jpg") ?>" class="rounded-circle" alt="profile">
            </div>
            <div class="des">
                <strong>Alli Rashid</strong>
                <p>Designer at Resourcio</p>
            </div>
        </div>
    </div>
</div>
<!-- <div class="svg">
        <img src="<?= base_url("assets/images/landing.svg") ?>" alt="">
</div> -->
</div>
</div>

</body>
</html>