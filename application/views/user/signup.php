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
            height: 100vh;
            width: 100vw;
            background-image: url('./assets/images/background.jpg')!important;
        }

        .container {
            height: 98%;
            margin:auto;
        }

        h3 {
            color: #524bd7; 
        }

        button {
            background-color: #524bd7!important;
        }
        small {
          color: red;
        }

    </style>
</head>
<body class="d-flex justify-content-center">
<div class="container bg-white rounded p-4 shadow-lg col-lg-5 col-xl-4 col-md-6 col-sm-7 col-9">
        <h3 class="fw-bold mb-3">Register Student</h3>
    
        <form action=<?php echo base_url("register")?> method="POST" enctype='multipart/form-data' class="mt-auto">
            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-none" name="names" id="floatingInput" placeholder="Full names">
              <label for="floatingInput">Full names</label>
              <small><?= form_error('names') ?></small>
            </div>
            
            <div class="form-floating mb-3">
              <input type="email" class="form-control shadow-none" name="email" id="floatingInput" placeholder="Email">
              <label for="floatingInput">Email</label>
              <small><?= form_error('email') ?></small>
            </div>
            
            <select onchange=getSector(this) class="form-select" name="district" aria-label="Default select example" required>
            <option>Insert distirct</option>
              <?php
              $prevloc='';
              foreach ($locations as $location){
                if($prevloc != $location->districtName){
                echo "<option value=$location->districtId > $location->districtName </option>";
                }
                $prevloc=$location->districtName;
              }
              ?>
            </select>
            
            <select class="form-select mb-3 mt-3 sectors"  name="sector" aria-label="Default select example" required>
              <option selected value="">Insert Sector</option>
              <?php
              foreach ($locations as $location){
                echo "<option style='display: none;' class='$location->districtId sectors-options' value=$location->sectorId > $location->sectorName </option>";
              }
              ?>
            </select>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-none" name="username" id="floatingInput" placeholder="Username">
              <label for="floatingInput">Username</label>
              <small><?= form_error('username') ?></small>
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control shadow-none" name="password" id="floatingInput" placeholder="Password">
              <label for="floatingInput">Password</label>
              <small><?= form_error('password') ?></small>
            </div>

          <button type="submit" class="btn text-light">Register</button>
    
          </form>
        </div>
    </div>
    <script>
      function getSector(id){
        let selector = document.getElementsByClassName("sectors")[0];
            selector.value="";
          let allSectors = document.getElementsByClassName("sectors-options");
        for(let a=0; a<allSectors.length; a++){
              allSectors[a].style.display = "none";
        }
        let sectors = document.getElementsByClassName(id.value);
        for(let i=0; i<sectors.length; i++){
              sectors[i].style.display = "block";
        }
      }
	</script>
</body>
</html>