<?php 
    include 'php/connection.php';
    
    if(isset($_POST['submit'])){
    
        $First_name=$_POST["fname"];
        $Last_name=$_POST["lname"];
        $Email=$_POST["email"];
        $Mobile=$_POST["mob"];
    
     $sql="INSERT INTO student (First_name, Last_name, Email, Mobile)
      VALUES('$First_name','$Last_name','$Email','$Mobile')";
    
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully!";
    }
    else{
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.js">
    <link rel="stylesheet" href="css/main.css">
    <style>

</style> 
</head>
<body>   

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Request a Demo</h3>
           
            

            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
            <div class="card">
                <h5 class="text-center mb-4">Powering world-class companies</h5>
                <form action="" method="post" class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                        <label class="form-control-label px-3">First name<span class="text-danger"> *</span>
                        </label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> 
                        <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                             <label class="form-control-label px-3">Business email<span class="text-danger">
                                  *</span></label> <input type="email" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                    </div>
                    
                    
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" name="submit" class="btn-block btn-primary">submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>