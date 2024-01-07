<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name    =$_POST['name'];                                                                                                                    
        $email   =$_POST['email']; 
        $mobile  =$_POST['mobile']; 
        $password=$_POST['password']; 


        $sql="insert into `crud` (name,email,mobile,password)
        values('$name','$email','$mobile','$password')";

        $result=mysqli_query($con,$sql);

        if($result){
           /*  echo "data inserted successfully"; */
           header('location:display.php');
        }
        else{
            die(mysqli_error($con));
        }
        
    }


?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <form method="POST">



            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>



            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>


    </div>








</body>

</html>