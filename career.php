<!DOCTYPE html>
  <html lang="en">
<?php include 'config.php'?>     
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                .banner{
                    background:url('background-img3.jpg');
                    background-size: cover;
                }
                .navbar{
                 overflow: hidden;
                background-color: #333;
                 position: fixed;
                top: 0;
                width: 100%;
                }
                .box{
                  display:flex;
                  justify-content:space-evenly;
                }
            </style>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Career</title>
        </head>.
        <body>

        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"style="position: fixed;">
        <!--
 <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
 </nav>
  -->
 <!-- <div>
    <img src="background-img3.jpg" alt="" class="img-fluid" width="1900">
            
  </div> -->
 </div>
              </nav><br><br>
 <div class="row">
  <div class="col-12">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('background-img3.jpg'); background-size:auto;">
    <div class="container">
      <h1 class="display-4"><b>Job Portal</b></h1>
      <p class="lead">Best Jobs available matching your skills</p>
              </div>
              </div>
              </div>
              </div>
              <div class="box">
                <?php
                $sql="SELECT cname,position,Jdesc,CTC,skills from jobs";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows>0){
                  while($rows=$result->fetch_assoc()){
                    echo'
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h3 class="card-title">'.$rows['position'].'</h3>
                    <h4 class="card-subtitle mb-2 text-muted">'.$rows['cname'].'</h4>
                    <p class="card-text">
                    <p style="color: black; text-align:justify;">'.$rows['Jdesc'].'</p>
                    <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
                    <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
                    </p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                    Apply Now
                  </button>
                    </div>
                    </div>';
                  }
                }
                ?>
                <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id=""name="cname" >
    </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <texxtarea name="" id="" cols="30" rows="10" class="form-control" name="JDesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" classs="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
              </div>                

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>...
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>


</html>