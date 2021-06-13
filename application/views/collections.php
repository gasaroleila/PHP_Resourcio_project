<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            width: 100vw;
            height: 100vh;
            overflow:hidden
        }
        nav a{
            color:#524BD7;
        }
        a.active{
            color:#FA2A77;
        }
        a span{
            color:#BC25A8;
        }
        .container {
            height: 82%;
        }

        h4 {
          color: #524bd7;
        }

        hr {
            margin-top: -10px
        }

        .collection {
            height: 35%!important
        }

        .collection-1 {
            background-color: #524BD7
        }

        .collection-2 {
            background-color: #E7B93C
        }

        .collection-3 {
            background-color: #54AE78
        }

        .collection-4 {
            background-color: #524bd7
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand col-sm-7 fw-bold" href="#">Resourc<span>io</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav w-100 d-flex justify-content-around me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page"  href="#">
                        <i class="fas fa-home"></i>    Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold active" href="#">
                        <i class="fas fa-file"></i>     Resources
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">
                            <i class="fas fa-bell"></i>    Notifications
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link fw-bold" href="#">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

<div class="container col-9 shadow mt-5">
        <div class="content col-11 mx-auto h-100">
        <div class="header d-flex justify-content-between">
            <h4 class="p-3"><span><svg xmlns="http://www.w3.org/2000/svg" width="35.5" height="20" viewBox="0 0 40.5 27">
  <path id="Icon_awesome-folder-open" data-name="Icon awesome-folder-open" d="M40.268,20.538l-5.092,8.73A4.5,4.5,0,0,1,31.288,31.5H3.166a1.688,1.688,0,0,1-1.458-2.538L6.8,20.233A4.5,4.5,0,0,1,10.688,18H38.81a1.687,1.687,0,0,1,1.458,2.538ZM10.688,15.75H33.75V12.375A3.375,3.375,0,0,0,30.375,9H19.125l-4.5-4.5H3.375A3.375,3.375,0,0,0,0,7.875v19.55L4.857,19.1A6.773,6.773,0,0,1,10.688,15.75Z" transform="translate(0 -4.5)" fill="#524bd7"/>
  </svg>
  </span>Collections</h4>
  <span class="p-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="27" viewBox="0 0 36 27">
    <path id="Icon_awesome-folder-plus" data-name="Icon awesome-folder-plus" d="M32.625,9h-13.5l-4.5-4.5H3.375A3.375,3.375,0,0,0,0,7.875v20.25A3.375,3.375,0,0,0,3.375,31.5h29.25A3.375,3.375,0,0,0,36,28.125V12.375A3.375,3.375,0,0,0,32.625,9Zm-6.75,11.813a1.125,1.125,0,0,1-1.125,1.125H19.688V27a1.125,1.125,0,0,1-1.125,1.125H17.438A1.125,1.125,0,0,1,16.313,27V21.938H11.25a1.125,1.125,0,0,1-1.125-1.125V19.688a1.125,1.125,0,0,1,1.125-1.125h5.063V13.5a1.125,1.125,0,0,1,1.125-1.125h1.125A1.125,1.125,0,0,1,19.688,13.5v5.063H24.75a1.125,1.125,0,0,1,1.125,1.125Z" transform="translate(0 -4.5)" fill="#524bd7"/>
    </svg>
    </span>
</span>
        </div>

        <hr>

            <div class="collection-group col-12 h-100 d-flex flex-wrap justify-content-evenly">
                <div class="collection collection-1 col-2 h-25 rounded-2">
                    <h1 class="text-light px-2 fs-1">8<span class="float-end px-3">
                    <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.33" height="20" viewBox="0 0 5.33 20" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <path id="Icon_awesome-ellipsis-v" data-name="Icon awesome-ellipsis-v" d="M4.353,13.466a2.79,2.79,0,0,0,2.665-2.9,2.79,2.79,0,0,0-2.665-2.9,2.79,2.79,0,0,0-2.665,2.9A2.79,2.79,0,0,0,4.353,13.466ZM1.688,17.659a2.79,2.79,0,0,1,2.665-2.9,2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,17.659Zm0-14.194A2.79,2.79,0,0,1,4.353.563a2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,3.466Z" transform="translate(-1.688 -0.563)" fill="#fff"/>
            </svg>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Rename</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#triggerNewResource">New Resource</a></li>
            </ul>
            </div>      
            </span></h1>

            <p class="text-light fs-5  col-10 mx-auto mt-4"><span class="fw-bold">PHP</span>resources</p>
                <hr class="col-10 mx-auto bg-white">
                <a href="#" class="text-light float-end px-4 py-4">View All</a>
                </div>

                <div class="collection collection-2 col-2 h-25 rounded-2 ml-3">
                    <h1 class="text-light px-2 fs-1">8<span class="float-end px-3">
                                <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.33" height="20" viewBox="0 0 5.33 20" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <path id="Icon_awesome-ellipsis-v" data-name="Icon awesome-ellipsis-v" d="M4.353,13.466a2.79,2.79,0,0,0,2.665-2.9,2.79,2.79,0,0,0-2.665-2.9,2.79,2.79,0,0,0-2.665,2.9A2.79,2.79,0,0,0,4.353,13.466ZM1.688,17.659a2.79,2.79,0,0,1,2.665-2.9,2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,17.659Zm0-14.194A2.79,2.79,0,0,1,4.353.563a2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,3.466Z" transform="translate(-1.688 -0.563)" fill="#fff"/>
            </svg>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Rename</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#triggerNewResource">New Resource</a></li>
            </ul>
            </div>
                        
            </span></h1>

            <p class="text-light fs-5  col-10 mx-auto mt-4"><span class="fw-bold">PHP</span>resources</p>
                <hr class="col-10 mx-auto bg-white">
                <a href="#" class="text-light float-end px-4 py-4">View All</a>
                </div>


                <div class="collection collection-3 col-2 h-25 rounded-2 ml-">
                    <h1 class="text-light px-2 fs-1">8<span class="float-end px-3">

                    <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.33" height="20" viewBox="0 0 5.33 20" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <path id="Icon_awesome-ellipsis-v" data-name="Icon awesome-ellipsis-v" d="M4.353,13.466a2.79,2.79,0,0,0,2.665-2.9,2.79,2.79,0,0,0-2.665-2.9,2.79,2.79,0,0,0-2.665,2.9A2.79,2.79,0,0,0,4.353,13.466ZM1.688,17.659a2.79,2.79,0,0,1,2.665-2.9,2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,17.659Zm0-14.194A2.79,2.79,0,0,1,4.353.563a2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,3.466Z" transform="translate(-1.688 -0.563)" fill="#fff"/>
            </svg>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Rename</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#triggerNewResource">New Resource</a></li>
            </ul>
            </div>
            </span></h1>

            <p class="text-light fs-5  col-10 mx-auto mt-4"><span class="fw-bold">PHP</span>resources</p>
                <hr class="col-10 mx-auto bg-white">
                <a href="#" class="text-light float-end px-4 py-4">View All</a>
                </div>

                <div class="collection collection-4 col-2 h-25 rounded-2">
                    <h1 class="text-light px-2 fs-1">8<span class="float-end px-3">
                    <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.33" height="20" viewBox="0 0 5.33 20" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <path id="Icon_awesome-ellipsis-v" data-name="Icon awesome-ellipsis-v" d="M4.353,13.466a2.79,2.79,0,0,0,2.665-2.9,2.79,2.79,0,0,0-2.665-2.9,2.79,2.79,0,0,0-2.665,2.9A2.79,2.79,0,0,0,4.353,13.466ZM1.688,17.659a2.79,2.79,0,0,1,2.665-2.9,2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,17.659Zm0-14.194A2.79,2.79,0,0,1,4.353.563a2.79,2.79,0,0,1,2.665,2.9,2.79,2.79,0,0,1-2.665,2.9A2.79,2.79,0,0,1,1.688,3.466Z" transform="translate(-1.688 -0.563)" fill="#fff"/>
            </svg>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Rename</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#triggerNewResource">New Resource</a></li>
            </ul>
            </div>
            </span></h1>

            <p class="text-light fs-5  col-10 mx-auto mt-4"><span class="fw-bold">PHP</span>resources</p>
                <hr class="col-10 mx-auto bg-white">
                <a href="#" class="text-light float-end px-4 py-4">View All</a>
                </div>


            </div>
            </div>

   <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>

  <div class="modal fade" id="triggerNewResource" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="triggerNewResourceLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="triggerNewResourceLabel">Resource Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="#" method="post">
           <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-none" id="floatingInput" placeholder="collection Name" name="collectionName">
              <label for="floatingInput">Resource Name</label>
            </div>

            <div class="form-floating mb-3">
            <textarea class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Description</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-none" id="floatingInput" placeholder="collection Name" name="collectionName">
              <label for="floatingInput">Link</label>
            </div>

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
    </div>
    </div>

 
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Collection Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="#" method="post">
             <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-none" id="floatingInput" placeholder="collection Name" name="collectionName">
              <label for="floatingInput">Collection Name</label>
            </div>

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
    </html>