<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!---bootstrap CND-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-secondary">
<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border bg-white  p-3 border-primary border-success p-2 mt-3 shadow">

         
            <form action="login1.php" method="post">
         <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-success">Login:</p>
         </div>
     <div class="mb-3">
       <label  class="form-label">Name:</label>
       <input type="text" name=" username"class="form-control"placeholder ="Enter  User Name">
     </div>

     <div class="mb-3">
       <label  class="form-label">Password:</label>
       <input type="password" name=" userpassword"class="form-control"placeholder ="Enter User Password:">
     </div>

          
     <button class="text-bg-success p-3 fs-4 fw-bold my-5 form-control">Login</button>
     
    </fo>
           </div>
         </div>
    </div>
    
</body>
</html>