<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Contact Us | Crafted With Love</title>

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
                    <a class="nav-link active" href="contact.php">
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
            We'd Love To Hear From You
        </span>

        <h1>
            Contact Us
        </h1>

        <p>
            Have a question or want a custom gift?
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="row g-4">


            <div class="col-md-4">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="bi bi-whatsapp"></i>

                    </div>

                    <h3>
                        WhatsApp
                    </h3>

                    <p>
                        Chat with us about your order
                        or customization.
                    </p>

                    <a
                        class="btn whatsapp-btn whatsapp-link"
                        target="_blank"
                    >
                        Message Us
                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="bi bi-instagram"></i>

                    </div>

                    <h3>
                        Instagram
                    </h3>

                    <p>
                        Follow our latest creations,
                        designs and customer orders.
                    </p>

                    <a
                        class="btn btn-main instagram-link"
                        target="_blank"
                    >
                        Follow Us
                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="bi bi-facebook"></i>

                    </div>

                    <h3>
                        Facebook
                    </h3>

                    <p>
                        Visit our Facebook page for
                        updates and announcements.
                    </p>

                    <a
                        class="btn btn-main facebook-link"
                        target="_blank"
                    >
                        Visit Page
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>


<section class="section bg-light">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="customizer">

                    <div class="section-title mb-4">

                        <span class="small-title">
                            Send A Message
                        </span>

                        <h2>
                            Tell Us What You Need
                        </h2>

                    </div>


                    <form
                        onsubmit="sendContactMessage(event)"
                    >

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Your Name
                                </label>

                                <input
                                    id="contactName"
                                    type="text"
                                    class="form-control"
                                    required
                                >

                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Phone Number
                                </label>

                                <input
                                    id="contactPhone"
                                    type="tel"
                                    class="form-control"
                                    required
                                >

                            </div>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Occasion
                            </label>

                            <select
                                id="contactOccasion"
                                class="form-select"
                            >

                                <option>
                                    Birthday
                                </option>

                                <option>
                                    Anniversary
                                </option>

                                <option>
                                    Wedding
                                </option>

                                <option>
                                    Graduation
                                </option>

                                <option>
                                    Valentine's Day
                                </option>

                                <option>
                                    Other
                                </option>

                            </select>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Your Message
                            </label>

                            <textarea
                                id="contactMessage"
                                class="form-control"
                                rows="5"
                                required
                            ></textarea>

                        </div>


                        <button
                            class="btn whatsapp-btn w-100"
                            type="submit"
                        >

                            <i class="bi bi-whatsapp"></i>

                            Send Through WhatsApp

                        </button>

                    </form>

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
                    Handmade gifts created with care.
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

                <p>
                    <a href="cart.html">
                        Cart
                    </a>
                </p>

            </div>


            <div class="col-lg-4">

                <h5>
                    Contact Details
                </h5>

                <p>
                    <i class="bi bi-whatsapp"></i>
                    +91 12345 67890
                </p>

                <p>
                    <i class="bi bi-envelope"></i>
                    hello@craftedwithlove.com
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


<script>

function sendContactMessage(event) {

    event.preventDefault();


    const name =
        document.getElementById(
            "contactName"
        ).value;


    const phone =
        document.getElementById(
            "contactPhone"
        ).value;


    const occasion =
        document.getElementById(
            "contactOccasion"
        ).value;


    const message =
        document.getElementById(
            "contactMessage"
        ).value;


    const whatsappMessage = `

Hello! I would like to make an enquiry.

Name: ${name}

Phone: ${phone}

Occasion: ${occasion}

Message:
${message}

    `.trim();


    const url =
        `https://wa.me/${WHATSAPP_NUMBER}?text=` +
        encodeURIComponent(
            whatsappMessage
        );


    window.open(
        url,
        "_blank"
    );

}

</script>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<link rel="stylesheet" href="assets/css/style.css">

</body>
</html>