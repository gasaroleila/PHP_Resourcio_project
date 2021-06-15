<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Resources</title>
        
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            overflow:hidden
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
        a i.fa-user{
            padding:5px;
            border-radius:50%;
            border:1px solid #ddd;
        }
        hr {
            margin-top: -10px
        }
        tr td:first-child{
            white-space: nowrap;
        }
        tr td:nth-of-type(2){
            text-align:left;
        }
        tr td:last-of-type{
            text-align:center;
        }
        .notifications li:not(:first-of-type){
            font-size:14px;
            padding:10px;
        }
        .notifications li:last-of-type{
            padding: 5px;
            cursor:pointer;
            color:#524BD7;
        }

        .desc {
            height: 150px
        }

        a {
            color: #524bd7; 
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
                            <a class="nav-link fw-bold active" aria-current="page"  href=<?php echo site_url('collection')?>>
                            <i class="fas fa-home"></i>    Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- the notifications -->
                            <div class="dropdown">
                                <a class="nav-link fw-bold" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                    <i class="fas fa-bell"></i>    Notifications
                                </a>

                                <ul class="dropdown-menu notifications" aria-labelledby="dropdownMenuLink">
                                    <li class="fw-bold border-bottom pb-2 ps-2">Notifications</li>
                                    <?php
                                    foreach($notification as $notifyData){ ?>
                                    <li class="border-bottom text-nowrap"><?= $notifyData->title ?></li>
                                    
                                    <?php
                                    }
                                    $collectionId = $parentId['collectionId'];
                                    ?>
                                    <li class="text-center"><a href="<?= site_url('notification_controller/clearAll/').$collectionId?>"> Clear All</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">
                                <i class="fas fa-user"></i>    MPeter
                            </a>
                            <!-- Update info model -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label for="r_name" class="form-label">Names</label>
                                                <input type="text" name="resource_name" id="r_name" class="form-control">
                                            </div>
                                            <select class="form-select " aria-label="Default select example">
                                                <option selected>District</option>
                                                <option value="1">Rwanda</option>
                                                <option value="2">Kenya</option>
                                                <option value="3">Burundi</option>
                                            </select>
            
                                            <select class="form-select mb-3 mt-3" aria-label="Default select example">
                                                <option selected>Sector</option>
                                                <option value="1">Manager</option>
                                                <option value="2">Admin</option>
                                                <option value="3">Instructor</option>
                                            </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <input type="submit" class="btn btn-primary" value="Save">
                                    </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
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
        <div class="header d-flex justify-content-between">
             <?php
                
                $this->db->select('*');
                $collectionData = $this->db->get_where('collection',array('collectionId'=>$collectionId))->result_array();
             ?>
            <h4 class="p-3"><span> <i class="fas fa-folder-open"></i> </span><a href="<?= site_url('collection')?>">Collections/</a><a href="#"><?= $collectionData[0]['collectionName']?> </a>Resources</h4>
            <span class="p-4">
                <svg data-bs-toggle="modal" data-bs-target="#exampleModal" xmlns="http://www.w3.org/2000/svg" width="27" height="33" viewBox="0 0 27 33">
                <g id="Icon_feather-file-plus" data-name="Icon feather-file-plus" transform="translate(-4.5 -1.5)">
                    <path id="Path_372" data-name="Path 372" d="M21,3H9A3,3,0,0,0,6,6V30a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V12Z" fill="none" stroke="#524bd7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_373" data-name="Path 373" d="M21,3v9h9" fill="none" stroke="#524bd7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_374" data-name="Path 374" d="M18,27V18" fill="none" stroke="#524bd7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_375" data-name="Path 375" d="M13.5,22.5h9" fill="none" stroke="#524bd7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                </g>
                </svg>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new resource</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php 
                        if(isset($resource)) {
                        $collectionId = $resources[0]['collectionId'];
                        }
                        ?>
                    <form action="<?= site_url('ResourceHandler/addResource/').$collectionId?>" method="post">

                       <div class="mb-3">
                                <label for="r_name" class="form-label">Resource name</label>
                                <input type="text" name="resourceName" id="r_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="r_desc" class="form-label">Description</label>
                                <input type="text" name="resourceDescription" id="r_desc" class="form-control desc" ></input>
                            </div>
                            <div class="mb-3">
                                <label for="r_link" class="form-label">Link</label>
                                <input type="text" name="resourceLink" id="r_link" class="form-control">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                            </form>
                    </div>
                </div>
                </div>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="27" height="33" viewBox="0 0 27 36">
                     <path id="Icon_awesome-file-upload" data-name="Icon awesome-file-upload" d="M15.75,9.563V0H1.688A1.683,1.683,0,0,0,0,1.688V34.313A1.683,1.683,0,0,0,1.688,36H25.313A1.683,1.683,0,0,0,27,34.313V11.25H17.438A1.692,1.692,0,0,1,15.75,9.563Zm4.583,15.188H15.75v5.625A1.125,1.125,0,0,1,14.625,31.5h-2.25a1.125,1.125,0,0,1-1.125-1.125V24.751H6.667a1.125,1.125,0,0,1-.792-1.924l6.78-6.729a1.2,1.2,0,0,1,1.69,0l6.78,6.729A1.125,1.125,0,0,1,20.333,24.751ZM26.508,7.383,19.624.492A1.686,1.686,0,0,0,18.429,0H18V9h9V8.571A1.682,1.682,0,0,0,26.508,7.383Z" fill="#524bd7"/>
                </svg> -->
            </span>
        </div>
        <hr>
        <div id="#paginate" class="container table-responsive">
            <table id="paginate" class="data-table table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     
                    foreach($resources as $resource) {
                    ?>
                    <tr>
                        <td><?= $resource['resourceName']?></td>
                        <td><?=  $resource['description']?></td>
                        <td><a href="<?= $resource['link']?>"><?= $resource['link']?></a></td>
                        <td>    
                            <div class="btn-group dropstart">
                                <a type="button" class="btn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= site_url("ResourceHandler/editResource/").$resource['resourceId']?>"> <i class="fas fa-pen text-primary"></i> Edit</a></li>
                                    <li><a class="dropdown-item" href="<?= site_url("ResourceHandler/deleteResource/").$resource['resourceId']?>"> <i class="fas fa-trash text-danger"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <?php  }?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready( function () {
        $('#paginate').DataTable();
    } );
    </script>
</body>
</html>