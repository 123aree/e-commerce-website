<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <?php
    include 'header.php';
    ?>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <h1 class="text-warning my-3 font-monospace text-center">CANVAS PAINTINGS</h1>
                <!-- Debugging: Check if the PHP script is running -->
                <?php
                include 'conn.php';
                /*
                if (!$config) {
                    die("Connection failed: " . mysqli_connect_error());
                } else {
                    echo "<p>Database connection successful.</p>";
                }
                */

                $Record = mysqli_query($conn, "SELECT * FROM tblproducts");
                /*
                if (!$Record) {
                    echo "<p>Error: Unable to fetch records. Check your database connection and query.</p>";
                } else {
                    echo "<p>Query executed successfully. Records found: " . mysqli_num_rows($Record) . "</p>";
                }
                */

                while ($row = mysqli_fetch_array($Record)) {
                    $check_page = $row['Pcategory'];
                    if ($check_page === 'Canvas Paintnig') { // Match the typo in the database
                        echo "
                        <div class='col-md-6 col-lg-4 mb-4 d-flex justify-content-center'>
                            <form action='viewcart.php' method='POST'>
                                <div class='card shadow-sm' style='width: 14rem;'>
                                    <img src='../admin/products/{$row['Pimage']}' class='card-img-top' 
                                    alt='Product Image' style='height: 200px; object-fit: cover;'>
                                    <div class='card-body text-center'>
                                        <h5 class='card-title fs-5'>{$row['Pname']}</h5>
                                        <p class='card-text fs-6'>RS: {$row['Pprice']}</p>
                                        <input type='hidden' name='Pname' value='{$row['Pname']}'>
                                        <input type='hidden' name='Pprice' value='{$row['Pprice']}'>
                                        <div>
                                            <input type='number' name='Pquantity' class='form-control text-center' min='1' max='10' 
                                            placeholder='Quantity' style='width: 100%; max-width: 120px; margin: 0 auto; required'>
                                        </div>
                                        <input type='submit' name='addCart' class='btn btn-dark w-100' value='Add To Cart'>
                                    </div>
                                </div>
                            </form>
                        </div>
                        ";
                    }
                    /*
                    else {
                        echo "<p>Product category: $check_page (Not a canvas painting)</p>";
                    }
                    */
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
