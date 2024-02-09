<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoMania - Welcome</title>
    <link rel="stylesheet" href="styleB.css">
</head>

<body>
    <div id="background"></div>
    <div id="content">
        <header>
            <nav>
                <div class="container001">
                    <div id="logo"><img src="logo (2).png" alt="MotoMania Logo"></div>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div><a href="login.php" class="btn login-btn">Login</a>
                    <a href="register.php" class="btn register-btn">Register</a>
                </div>
            </nav>
        </header>

        <section id="hero">
            <div class="container">
                <h1>Welcome to MotoMania</h1>
                <p>Your source for all things moto-related!</p>
                <a href="#products" class="cta-button">Explore Products</a>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2>About Us</h2>
                <p>MotoMania: Your premier hub for motorcycle enthusiasts! We're not just a store;<br> we're a passionate community dedicated to serving all your moto needs. <br> Quality, expertise, and community—experience it all at MotoMania.</p>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <h2>Our Products</h2>
                <p>Discover our top-tier range of motorcycle products, carefully chosen for riders like you: Gear & Accessories: Explore our curated selection of high-quality gear and accessories designed to enhance your ride. Parts & Upgrades: Find top-notch
                    parts and upgrades to personalize and optimize your motorcycle. Apparel & Lifestyle: Ride in style with our trendy apparel and lifestyle products for riders. Ride with passion. Choose MotoMania.</p>
            </div>
            <section class="section pastel">
                <div class="thumbnail">
                    <img src="https://powersports.in/cdn/shop/collections/axxis-mobile.jpg?v=1677575261&width=540" alt="Bruce Wayne">
                    <h4> Helmets </h4>
                </div>

                <div class="thumbnail">
                    <img src="https://powersports.in/cdn/shop/files/KordaGuardRedRidingGloves_5e59d49a-fb1d-462f-8780-3b4ead5ba402_1800x1800.jpg?v=1695296616" alt="Bruce Wayne">
                    <h4> Gloves</h4>
                </div>

                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,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" alt="Bruce Wayne">
                    <h4> jackets </h4>
                </div>

                <div class="thumbnail">
                    <img src="https://powersports.in/cdn/shop/files/RyoConquerBoots.jpg?v=1686305501&width=1080" alt="Bruce Wayne">
                    <h4> Boots </h4>
                </div>
            </section>
        </section>

        <section id="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Get in touch with us for all your moto needs.</p>
            </div>
        </section>
        <div class="footer">
            <div class="footer-first">
                <h3>INFO</h3>
                <ul>
                    <li><a href=""> Contact Us</a><br></li>
                    <li><a href=""> Releases</a><br></li>
                    <li><a href=""> Stores</a><br></li>
                    <li><a href=""> Brands</a><br></li>
                    <li><a href=""> Blogs</a><br></li>
                </ul>

            </div>
            <div class="footer-second">
                <h3>POLICIES</h3>
                <ul>
                    <li><a href=""> Help Center</a><br></li>
                    <li><a href=""> Privacy Policy</a><br></li>
                    <li><a href=""> Returns & Exchange</a><br></li>
                    <li><a href=""> Terms & Conditions</a><br></li>
                    <li><a href=""> Ordrrs & Shipping</a><br></li>
                    <li><a href=""> Terms of Services</a><br></li>
                </ul>

            </div>
            <div class="footer-third">
                <h3>OUR SOCIALS</h3>
                <i class="fa-brands fa-facebook" id="fb"></i>
                <i class="fa-brands fa-instagram" id="insta"></i>
            </div>
            <div class="footer-fourth">
                <h3>SUBSCRIBE TO OUR <br> NEWSLETTER</h3>
                <input type="email" class="footer-email" placeholder="Email Address">
                <button>Subscribe</button>
            </div>
        </div>
    </div>

</body>

</html>
</div>
</body>

</html>