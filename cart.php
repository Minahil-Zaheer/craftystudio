<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Shopping Cart | Crafted With Love</title>

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
                    <a class="nav-link" href="products.php">
                        Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="customize.php">
                        Customize
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        Contact
                    </a>
                </li>

            </ul>


            <a
                href="cart.html"
                class="btn cart-button position-relative"
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

</nav>


<section class="page-header">

    <div class="container">

        <span class="small-title">
            Your Selection
        </span>

        <h1>
            Shopping Cart
        </h1>

        <p>
            Review your customized gifts before ordering.
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div id="cartItems"></div>

            </div>


            <div class="col-lg-4">

                <div
                    class="cart-summary"
                    id="cartSummary"
                >

                    <h3>
                        Order Summary
                    </h3>

                    <hr>


                    <div class="d-flex justify-content-between">

                        <span>
                            Total
                        </span>

                        <strong class="price">
                            ₹<span id="cartTotal">
                                0
                            </span>
                        </strong>

                    </div>


                    <button
                        onclick="checkoutWhatsApp()"
                        class="btn whatsapp-btn w-100 mt-4"
                    >

                        <i class="bi bi-whatsapp"></i>

                        Checkout On WhatsApp

                    </button>


                    <a
                        href="products.html"
                        class="btn btn-outline-main w-100 mt-2"
                    >
                        Continue Shopping
                    </a>


                    <button
                        onclick="clearCart()"
                        class="btn btn-outline-danger w-100 mt-2"
                    >
                        Clear Cart
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>


<footer>

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">

                <h3>
                    Crafted With Love
                </h3>

                <p>
                    Handmade gifts made especially for you.
                </p>

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


            <div class="col-lg-3">

                <h5>
                    Quick Links
                </h5>

                <p>
                    <a href="index.html">
                        Home
                    </a>
                </p>

                <p>
                    <a href="products.html">
                        Products
                    </a>
                </p>

                <p>
                    <a href="customize.html">
                        Customize
                    </a>
                </p>

            </div>


            <div class="col-lg-4">

                <h5>
                    Need Help?
                </h5>

                <p>
                    Contact us for custom orders.
                </p>

                <a
                    class="btn whatsapp-btn whatsapp-link"
                    target="_blank"
                >
                    WhatsApp Us
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