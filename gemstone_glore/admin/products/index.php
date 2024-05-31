<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
                  <!---bootstrap CND-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../user/style.css">
 </head>

<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border bg-white border-primary border-success p-2 mt-3">

            <form action="insert.php" method="post" enctype="multipart/form-data">    
    
         <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-success">Product Details:</p>
         </div>
     <div class="mb-3">
       <label  class="form-label">Product Name:</label>
       <input type="text" name=" Pname"class="form-control"placeholder ="Enter Product Name">
     </div>

     <div class="mb-3">
       <label  class="form-label">Product Price:</label>
       <input type="text" name=" Pprice"class="form-control"placeholder ="Enter Product Price:">
     </div>

     <div class="mb-3">
       <label  class="form-label">Add Product Image:</label>
       <input type="file"name=" Pimage" class="form-control">
     </div>
     <div class="mb-3">
       <label  class="form-label">Select Page Category:</label>
       <select class="form-select" name=" Pages"aria-label="Default select example">
          <option value="Home">Home</option>
               <option value="Resin Products">Resin Products</option>
               <option value="Canvas Paintnig">Canvas Paintings</option>
            <option value="Neon Lights">Neon Lights</option>
</select>
     </div>
     <button name=" submit"class ="text-bg-success p-3 fs-4 fw-bold my-5 form-control">Upload</button>
     
    </form>
           </div>
         </div>
    </div>
                     <!--fetch data-->
                     <div class="container ">
                      <div class="row">
                        <div class="col-md-8 m-auto bg-white">
                          
                      
                      <table class="table table-hover border my-5 border-success ">

 <thead class="bg-dark fs-3 text-center  "style="background-color-sucess: ; color: #ffffff ">
 <th>Id</th>
 <th>Name</th>
 <th>Price</th>
 <th>Image</th>
 <th>Category</th>
 <th>Update</th>
 <th>Delete</th>
 </thead>
 
 
 <tbody class="m-auto fs-6 text-center" >
  <?php
 include("config.php");
 $Record= mysqli_query($config,"SELECT * FROM `tblproducts` ");
         while($row=mysqli_fetch_array($Record))
        echo"
 <tr>
 <td>$row[Id]</td>
 <td>$row[Pname]</td>
 <td>$row[Pprice]</td>
 <td><image src='$row[Pimage]' height ='100px' width = 'auto'></td>
 <td>$row[Pcategory]</td>
 <td><a href = 'update.php ?Id=$row[Id]' class='btn btn-success'>Update</a></td>
 <td><a href = 'delete.php ?Id=$row[Id]' class='btn btn-success'>Delete</a></td>
</tr>

";

  

  ?>
 </tbody>
</table>
</div>
</div>
</div>
</body>
</html>