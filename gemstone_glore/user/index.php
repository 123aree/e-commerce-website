<?php include 'header.php'; ?>


<div class="container my-5">
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image5.png" class="d-block w-100" alt="...">
            </div>
            
        </div>
        <buttolass="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Grid Images -->
    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="product1.jpg" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Resin Alphabets Keychains</h5>
                    <p class="card-text">Customize your name keychain.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="product2.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Wing Painting</h5>
                    <p class="card-text">beautiful wing painting.make your room look asthetic</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="product3.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Neon Sign</h5>
                    <p class="card-text">Make your empty space look beautiful.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
<div class="carousel-inner">
<div class="carousel-item-active">
            <img src="Products.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item-active">
            <img src="image6.png" class="d-block w-100" alt="...">
    </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function checkLogin() {
        var loggedIn = <?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>;
        if (!loggedIn) {
            alert('Please log in first to view the cart.');
            window.location.href = 'form/login.php';
            return false;
        } else {
            window.location.href = 'viewcart.php';
            return true;
        }
    }
</script>
<?php include'footer.html'?>
</body>
</html>
