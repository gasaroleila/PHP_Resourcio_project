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

        .desc {
            height: 100px
        }


    </style>
</head>

<body class="d-flex justify-content-center">
<div class="container  h-75 bg-white rounded p-4 shadow-lg col-lg-5 col-xl-4 col-md-6 col-sm-7 col-9">
        <h3 class="fw-bold mb-3">Edit Resource</h3>
    
        <form action="<?= site_url('ResourceHandler/updateResource/').$resource[0]['resourceId']?>" method="post">

                       <div class="mb-3">
                                <label for="r_name" class="form-label">Resource name</label>
                                <input type="text" name="resourceName" id="r_name" class="form-control" value="<?= $resource[0]['resourceName']?>">
                            </div>
                            <div class="mb-3">
                                <label for="r_desc" class="form-label">Description</label>
                                <input name="resourceDescription" id="r_desc" class="form-control desc" value="<?= $resource[0]['description']?>">
                            </div>
                            <div class="mb-3">
                                <label for="r_link" class="form-label">Link</label>
                                <input type="text" name="resourceLink" id="r_link" class="form-control" value="<?= $resource[0]['link']?>">
                            </div>
                    
                      <div class="mt-5">
                        <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                        </form>
        </div>
    </div>
</body>
</html>