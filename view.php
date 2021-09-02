<?php/*

 session_start();
 include ('config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();
}
$email=$_SESSION['email'];
 */?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="view.css">

    <title>View profile</title>
</head>
<body>
   <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" style="text-align: right;">
          <a class="navbar-brand" href="#">TEACHERS' INFORMATION</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Update profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
        </div>
        </div>
      </nav>
<!--End Navbar-->

<!--Heading Block background-->
<div class="headingBlock">
    <h1 class="headingBlock_h1">Welcome </h1>
    
</div>

<!--End Heading Blobk Background-->

<!--faculty details block-->
 <div class="row container-fluid">
  <div class="col-md-7 sub " >
    <h2 class="heading3" >Faculty details</h2>
  </div>
  <div class="col-md-6 sub " >
    <h5 class="heading3" > Total number of Faculty :</h5>
  </div>

  
</div>

<!--End faculty details block-->

<!--Professor-->
<?php/*
  $sql="SELECT a.course_id,c.CourseName,a.year FROM assign_course a,course c WHERE a.email='$email' AND a.course_id=c.CID";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()){

  
*/?>

<div class="course">
<a class="cardAnchorTag" href="#">
  <div class="card" >
    <div class="card-body">
      <h4 class="card-title" >Srila Parui</h4>
      <p class="card-text">
        <span>Department name : </span>
        <span class="courseCode" style=" margin-right: 1%;"></span>
        
      </p>
    </div>
  </div>
</a>
</div>

<?php //}?>


<!--End professor-->


  

          
    

</body>
</html>