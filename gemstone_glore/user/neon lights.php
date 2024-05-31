<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <?php
    include 'header.php';
    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">

         
    <h1 class="text-warning my-3 font-monospace text-center">NEON LIGTHS</h1>
    <!--$record varible will store the database from localhost -->
    <?php
    include 'conn.php';
    $Record=mysqli_query($conn,"select * from tblproducts");
    #$row variable will fetch data from $record 
    #whlie loop is use becaue we have alot of items
     while($row=mysqli_fetch_array($Record)){
    #here we will add the url of image that is stored in admin>>product game 
    $check_page= $row['Pcategory'];
    if($check_page=== 'Neon Lights'){
    
        echo "
        <div class='col-md-6 col-lg-4 mb-4 d-flex justify-content-center'>
        <form action='viewcart.php' method='POST'>
            <div class='card shadow-sm' style='width: 14rem;'>
                <img src='../admin/products/$row[Pimage] ' class='card-img-top' 
                alt='Product Image' style='height: 200px; object-fit: cover;'>
                <div class='card-body text-center'>
                    <h5 class='card-title fs-5'>$row[Pname]</h5>
                    <p class='card-text fs-6'>RS: $row[Pprice]</p>
                    <input type='hidden' name='Pname' value= '$row[Pname] '>
                    <input type='hidden' name='Pprice' value='$row[Pprice] '>
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
}
?> 
</div></div>
</div>
</div>
</body>
</html>