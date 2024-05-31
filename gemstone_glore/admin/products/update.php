<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .thumbnail {
            height: 100px;
            width: auto;
        }
    </style>
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border bg-white border-primary border-success p-2 mt-3">
                <?php
                $id = $_GET['Id'];
                include 'config.php'; 
                $record = mysqli_query($config, "SELECT * FROM `tblproducts` WHERE Id=$id");
                $data = mysqli_fetch_array($record);
                ?>
                <form action="update.php?Id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">    
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-success">Product Update:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" value="<?php echo $data['Pname']; ?>" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" value="<?php echo $data['Pprice']; ?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="Pimage" class="form-control"><br>
                        <img src="<?php echo $data['Pimage']; ?>" alt="" class="thumbnail">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category:</label>
                        <select class="form-select" name="Pages" aria-label="Default select example">
                            <option value="Home" <?php if ($data['Pcategory'] == 'Home') echo 'selected'; ?>>Home</option>
                            <option value="Resin Products" <?php if ($data['Pcategory'] == 'Resin Products') echo 'selected'; ?>>Resin Products</option>
                            <option value="Canvas Paintings" <?php if ($data['Pcategory'] == 'Canvas Paintings') echo 'selected'; ?>>Canvas Paintings</option>
                            <option value="Neon Lights" <?php if ($data['Pcategory'] == 'Neon Lights') echo 'selected'; ?>>Neon Lights</option>
                        </select>
                    </div>
                    <input type="hidden" value="<?php echo $data['Id']; ?>" name="id">
                    <button name="Update" class="text-bg-success p-3 fs-4 fw-bold my-5 form-control">Update</button>
                </form>
            </div>
        </div>
    </div>

    <?php 
    if (isset($_POST['Update'])) {
        $id = $_POST['id'];
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $image_des = "uploadimage/" . $image_name;
        move_uploaded_file($image_loc, $image_des);
        $product_category = $_POST['Pages'];
        
        // Database connection
        include 'config.php'; 
        
        // Checking record for update and update query
        mysqli_query($config, "UPDATE `tblproducts` SET `Pname`='$product_name', `Pprice`='$product_price', `Pimage`='$image_des', `Pcategory`='$product_category' WHERE Id=$id");
        
        echo "
             <script>
             alert('Product updated Successfully');
             window.location.href='index.php';
             </script>";
        
    }
    ?>
</body>
</html>
