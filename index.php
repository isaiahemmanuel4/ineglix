<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ineglix Computers | Shop & Repairs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">INEGLIX <span class="lemon-text">COMPUTERS</span></div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Repairs</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#contact" class="btn-contact">Contact Us</a></li>
        </ul>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <header id="home" class="hero">
        <div class="hero-content">
            <h1>Your Tech, <span class="lemon-text">Optimized.</span></h1>
            <p>Expert Repairs for Desktops & Laptops | Sales of Computers & Bluetooth Speakers | Printer Installations.</p>
            <a href="#shop" class="btn-main">View Products</a>
        </div>
    </header>

    <section id="services" class="section">
        <h2 class="section-title">Our <span class="lemon-text">Services</span></h2>
        <div class="services-grid">
            <div class="card">
                <i class="fas fa-tools icon"></i>
                <h3>Hardware Repairs</h3>
                <p>Expert fixing of Desktops and Laptops including screen and battery replacement.</p>
            </div>
            <div class="card">
                <i class="fas fa-print icon"></i>
                <h3>Printer Installation</h3>
                <p>Complete setup, driver installation, and networking for all printer brands.</p>
            </div>
            <div class="card">
                <i class="fas fa-laptop-medical icon"></i>
                <h3>Software Fixes</h3>
                <p>OS installation, virus removal, and speed optimization.</p>
            </div>
        </div>
    </section>

    <section id="shop" class="section dark-bg">
        <h2 class="section-title">Latest <span class="lemon-text">Sales</span></h2>
        
        <div class="shop-grid">
            <div class="product-card">
                <div class="product-img">
                    <i class="fas fa-laptop fa-5x"></i>
                </div>
                <div class="product-info">
                    <h3>HP EliteBook</h3>
                    <p class="category">Computer</p>
                    <p class="price">$450.00</p>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <i class="fas fa-music fa-5x"></i>
                </div>
                <div class="product-info">
                    <h3>Sony XB13</h3>
                    <p class="category">Bluetooth Speaker</p>
                    <p class="price">$60.00</p>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="footer-content">
            <h3>Ineglix Computers</h3>
            <p>Quality Service. Trusted Repairs.</p>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Ineglix Computers. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
