<?php
 echo $Id  = $_GET['Id'];
 // Database connection
include 'config.php'; 
        
 // Delete query
   mysqli_query($config, "DELETE FROM `tblproducts` WHERE Id=$Id");
   echo "
   <script>
   alert('Product deleted Successfully');
   window.location.href='index.php';
   </script>
   ";
?>