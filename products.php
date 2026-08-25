<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Products | Crafted With Love</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg sticky-top">

    <div class="container">

        <a class="navbar-brand" href="index.php">
            Crafted <span>With Love</span>
        </a>


        <button
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#mainNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        <div
            class="collapse navbar-collapse"
            id="mainNav"
        >

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link active"
                        href="products.php"
                    >
                        Products
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="customize.php"
                    >
                        Customize
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="about.php"
                    >
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="contact.php"
                    >
                        Contact
                    </a>
                </li>

            </ul>


            <div class="social-area">

                <a
                    class="social-icon instagram-link"
                    target="_blank"
                >
                    <i class="bi bi-instagram"></i>
                </a>

                <a
                    class="social-icon facebook-link"
                    target="_blank"
                >
                    <i class="bi bi-facebook"></i>
                </a>

                <a
                    class="btn whatsapp-btn whatsapp-link"
                    target="_blank"
                >
                    <i class="bi bi-whatsapp"></i>
                    WhatsApp
                </a>

                <a
                    href="cart.html"
                    class="btn cart-button position-relative ms-2"
                >
                    <i class="bi bi-bag fs-4"></i>

                    <span
                        class="cart-count position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                    >
                        0
                    </span>
                </a>

            </div>

        </div>

    </div>

</nav>


<!-- PAGE HEADER -->

<section class="page-header">

    <div class="container">

        <span class="small-title">
            Handmade Collection
        </span>

        <h1>
            Our Products
        </h1>

        <p>
            Find something beautiful for someone special.
        </p>

    </div>

</section>


<!-- PRODUCTS -->

<section class="section">

    <div class="container">


        <div class="filter-buttons">

            <button
                class="filter-btn active"
                onclick="filterProducts('all', this)"
            >
                All
            </button>

            <button
                class="filter-btn"
                onclick="filterProducts('crochet', this)"
            >
                Crochet
            </button>

            <button
                class="filter-btn"
                onclick="filterProducts('bouquet', this)"
            >
                Ribbon Flowers
            </button>

            <button
                class="filter-btn"
                onclick="filterProducts('hamper', this)"
            >
                Gift Hampers
            </button>

        </div>


        <div class="row g-4">


            <!-- PRODUCT -->

            <div
                class="col-lg-4 col-md-6 product-item"
                data-category="crochet"
            >

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=900&q=80"
                        class="product-img"
                        alt="Crochet Teddy"
                    >

                    <div class="product-content">

                        <span class="product-category">
                            Crochet
                        </span>

                        <h3 class="product-title">
                            Crochet Teddy
                        </h3>

                        <p>
                            Cute handmade crochet teddy.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                ₹799
                            </span>

                            <a
                                href="customize.html?product=Crochet%20Teddy"
                                class="btn btn-main"
                            >
                                Customize
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <div
                class="col-lg-4 col-md-6 product-item"
                data-category="crochet"
            >

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1598301257982-0cf014dabbcd?auto=format&fit=crop&w=900&q=80"
                        class="product-img"
                        alt="Crochet Flower"
                    >

                    <div class="product-content">

                        <span class="product-category">
                            Crochet
                        </span>

                        <h3 class="product-title">
                            Crochet Flower
                        </h3>

                        <p>
                            Handmade everlasting crochet flower.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                ₹499
                            </span>

                            <a
                                href="customize.html?product=Crochet%20Flower"
                                class="btn btn-main"
                            >
                                Customize
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <div
                class="col-lg-4 col-md-6 product-item"
                data-category="bouquet"
            >

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=900&q=80"
                        class="product-img"
                        alt="Ribbon Rose Bouquet"
                    >

                    <div class="product-content">

                        <span class="product-category">
                            Ribbon Flowers
                        </span>

                        <h3 class="product-title">
                            Ribbon Rose Bouquet
                        </h3>

                        <p>
                            Beautiful handmade ribbon roses.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                ₹999
                            </span>

                            <a
                                href="customize.html?product=Ribbon%20Rose%20Bouquet"
                                class="btn btn-main"
                            >
                                Customize
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <div
                class="col-lg-4 col-md-6 product-item"
                data-category="bouquet"
            >

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=900&q=80"
                        class="product-img"
                        alt="Premium Bouquet"
                    >

                    <div class="product-content">

                        <span class="product-category">
                            Ribbon Flowers
                        </span>

                        <h3 class="product-title">
                            Premium Ribbon Bouquet
                        </h3>

                        <p>
                            Premium everlasting ribbon bouquet.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                ₹1,499
                            </span>

                            <a
                                href="customize.html?product=Premium%20Ribbon%20Bouquet"
                                class="btn btn-main"
                            >
                                Customize
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <div
                class="col-lg-4 col-md-6 product-item"
                data-category="hamper"
            >

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1608831540955-35094d48694a?auto=format&fit=crop&w=900&q=80"
                        class="product-img"
                        alt="Love Gift Box"
                    >

                    <div class="product-content">

                        <span class="product-category">
                            Gift Hamper
                        </span>

                        <h3 class="product-title">
                            Love Gift Box
                        </h3>

                        <p>
                            A beautiful personalized gift box.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                ₹1,299
                            </span>

                            <a
                                href="customize.html?product=Love%20Gift%20Box"
                                class="btn btn-main"
                            >
                                Customize
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <div
                class="col-lg-4 col-md-6 product-item"
                data-category="hamper"
            >

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=900&q=80"
                        class="product-img"
                        alt="Birthday Hamper"
                    >

                    <div class="product-content">

                        <span class="product-category">
                            Gift Hamper
                        </span>

                        <h3 class="product-title">
                            Birthday Hamper
                        </h3>

                        <p>
                            A cheerful handmade birthday hamper.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                ₹1,599
                            </span>

                            <a
                                href="customize.html?product=Birthday%20Hamper"
                                class="btn btn-main"
                            >
                                Customize
                            </a>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">

                <h3>Crafted With Love</h3>

                <p>
                    Handmade gifts created with love.
                </p>

                <div>

                    <a
                        class="footer-social instagram-link"
                        target="_blank"
                    >
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a
                        class="footer-social facebook-link"
                        target="_blank"
                    >
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a
                        class="footer-social whatsapp-link"
                        target="_blank"
                    >
                        <i class="bi bi-whatsapp"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-3">

                <h5>Quick Links</h5>

                <p>
                    <a href="index.html">Home</a>
                </p>

                <p>
                    <a href="products.html">Products</a>
                </p>

                <p>
                    <a href="customize.html">Customize</a>
                </p>

                <p>
                    <a href="about.html">About</a>
                </p>

            </div>


            <div class="col-lg-4">

                <h5>Contact</h5>

                <p>
                    <i class="bi bi-whatsapp"></i>
                    +91 12345 67890
                </p>

                <a
                    class="btn whatsapp-btn whatsapp-link"
                    target="_blank"
                >
                    Chat On WhatsApp
                </a>

            </div>

        </div>


        <hr class="mt-5">

        <p class="text-center mb-0">
            © 2026 Crafted With Love.
        </p>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script src="assets/js/script.js"></script>

</body>
</html>