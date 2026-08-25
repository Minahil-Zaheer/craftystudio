<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Customize Your Gift | Crafted With Love</title>

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
                    <a
                        class="nav-link"
                        href="index.php"
                    >
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="products.php"
                    >
                        Products
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link active"
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


<!-- HEADER -->

<section class="page-header">

    <div class="container">

        <span class="small-title">
            Make It Personal
        </span>

        <h1>
            Customize Your Gift
        </h1>

        <p>
            Choose every little detail to make your gift special.
        </p>

    </div>

</section>


<!-- CUSTOMIZER -->

<section class="section">

    <div class="container">

        <div class="customizer">

            <div class="row">


                <!-- PREVIEW -->

                <div class="col-lg-5">

                    <div class="custom-preview">

                        <img
                            id="previewImage"
                            src="https://images.unsplash.com/photo-1513883049090-d0b7439799bf?auto=format&fit=crop&w=900&q=80"
                            class="preview-image"
                            alt="Gift preview"
                        >

                        <h3
                            id="previewProduct"
                            class="mt-4"
                        >
                            Select A Product
                        </h3>

                        <p class="text-muted">
                            Your selected gift will appear here.
                        </p>

                    </div>

                </div>


                <!-- FORM -->

                <div class="col-lg-7">

                    <form id="customForm">


                        <div class="mb-3">

                            <label class="form-label">
                                Select Product
                            </label>

                            <select
                                id="productSelect"
                                class="form-select"
                            >

                                <option value="">
                                    Choose a product
                                </option>

                                <option value="Crochet Teddy">
                                    Crochet Teddy
                                </option>

                                <option value="Crochet Flower">
                                    Crochet Flower
                                </option>

                                <option value="Ribbon Rose Bouquet">
                                    Ribbon Rose Bouquet
                                </option>

                                <option value="Premium Ribbon Bouquet">
                                    Premium Ribbon Bouquet
                                </option>

                                <option value="Love Gift Box">
                                    Love Gift Box
                                </option>

                                <option value="Birthday Hamper">
                                    Birthday Hamper
                                </option>

                            </select>

                        </div>


                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Color
                                </label>

                                <select
                                    id="color"
                                    class="form-select"
                                >

                                    <option value="0">
                                        Pink
                                    </option>

                                    <option value="0">
                                        White
                                    </option>

                                    <option value="0">
                                        Purple
                                    </option>

                                    <option value="0">
                                        Blue
                                    </option>

                                    <option value="0">
                                        Yellow
                                    </option>

                                    <option value="100">
                                        Custom Color (+₹100)
                                    </option>

                                </select>

                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Size
                                </label>

                                <select
                                    id="size"
                                    class="form-select"
                                >

                                    <option value="0">
                                        Small
                                    </option>

                                    <option value="200">
                                        Medium (+₹200)
                                    </option>

                                    <option value="400">
                                        Large (+₹400)
                                    </option>

                                </select>

                            </div>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Ribbon / Style
                            </label>

                            <select
                                id="style"
                                class="form-select"
                            >

                                <option value="0">
                                    Classic
                                </option>

                                <option value="100">
                                    Premium Ribbon (+₹100)
                                </option>

                                <option value="150">
                                    Luxury Style (+₹150)
                                </option>

                            </select>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Personal Message
                            </label>

                            <textarea
                                id="message"
                                class="form-control"
                                rows="4"
                                placeholder="Example: Happy Birthday Sarah! ❤️"
                            ></textarea>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Quantity
                            </label>

                            <input
                                id="quantity"
                                type="number"
                                class="form-control"
                                value="1"
                                min="1"
                            >

                        </div>


                        <div class="form-check mb-4">

                            <input
                                id="giftWrap"
                                class="form-check-input"
                                type="checkbox"
                            >

                            <label
                                class="form-check-label"
                                for="giftWrap"
                            >
                                Add Premium Gift Wrapping (+₹150)
                            </label>

                        </div>


                        <!-- PRICE -->

                        <div class="price-box">

                            <div class="d-flex justify-content-between">

                                <span>
                                    Base Price
                                </span>

                                <strong>
                                    ₹<span id="basePrice">0</span>
                                </strong>

                            </div>


                            <div class="d-flex justify-content-between mt-2">

                                <span>
                                    Customization
                                </span>

                                <strong>
                                    ₹<span id="customPrice">0</span>
                                </strong>

                            </div>


                            <hr>


                            <div class="d-flex justify-content-between">

                                <strong>
                                    Total
                                </strong>

                                <span class="total-price">
                                    ₹<span id="totalPrice">0</span>
                                </span>

                            </div>

                        </div>


                        <button
                            type="button"
                            id="addToCartButton"
                            class="btn btn-main btn-lg w-100 mt-4"
                        >

                            <i class="bi bi-bag-plus"></i>

                            Add To Cart

                        </button>


                        <button
                            type="button"
                            id="whatsappButton"
                            class="btn whatsapp-btn btn-lg w-100 mt-2"
                        >

                            <i class="bi bi-whatsapp"></i>

                            Order Directly On WhatsApp

                        </button>


                    </form>

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

                <h3>
                    Crafted With Love
                </h3>

                <p>
                    Handmade gifts created especially for you.
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
                    <a href="cart.html">
                        Cart
                    </a>
                </p>

                <p>
                    <a href="contact.html">
                        Contact
                    </a>
                </p>

            </div>


            <div class="col-lg-4">

                <h5>
                    Need Help?
                </h5>

                <p>
                    Chat with us about your custom order.
                </p>

                <a
                    class="btn whatsapp-btn whatsapp-link"
                    target="_blank"
                >
                    <i class="bi bi-whatsapp"></i>
                    Chat With Us
                </a>

            </div>

        </div>

    </div>

</footer>


<div class="toast-container position-fixed bottom-0 end-0 p-3">

    <div
        id="cartToast"
        class="toast"
    >

        <div class="toast-header">

            <strong class="me-auto">
                Crafted With Love
            </strong>

            <button
                class="btn-close"
                data-bs-dismiss="toast"
            ></button>

        </div>

        <div class="toast-body">
            Added to cart!
        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script src="assets/js/script.js"></script>


<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        const productSelect =
            document.getElementById("productSelect");

        const color =
            document.getElementById("color");

        const size =
            document.getElementById("size");

        const style =
            document.getElementById("style");

        const quantity =
            document.getElementById("quantity");

        const giftWrap =
            document.getElementById("giftWrap");


        const previewImage =
            document.getElementById("previewImage");

        const previewProduct =
            document.getElementById("previewProduct");


        const basePrice =
            document.getElementById("basePrice");

        const customPrice =
            document.getElementById("customPrice");

        const totalPrice =
            document.getElementById("totalPrice");


        function calculate() {

            const product =
                productSelect.value;


            if (!product) {

                basePrice.textContent = "0";
                customPrice.textContent = "0";
                totalPrice.textContent = "0";

                return;

            }


            const base =
                PRODUCTS[product].price;


            const customization =
                Number(color.value) +
                Number(size.value) +
                Number(style.value) +
                (giftWrap.checked ? 150 : 0);


            const qty =
                Math.max(
                    1,
                    Number(quantity.value) || 1
                );


            basePrice.textContent =
                base * qty;


            customPrice.textContent =
                customization * qty;


            totalPrice.textContent =
                (base + customization) * qty;


            previewProduct.textContent =
                product;


            previewImage.src =
                PRODUCTS[product].image;

        }


        productSelect.addEventListener(
            "change",
            calculate
        );

        color.addEventListener(
            "change",
            calculate
        );

        size.addEventListener(
            "change",
            calculate
        );

        style.addEventListener(
            "change",
            calculate
        );

        quantity.addEventListener(
            "input",
            calculate
        );

        giftWrap.addEventListener(
            "change",
            calculate
        );


        /* URL PRODUCT */

        const params =
            new URLSearchParams(
                window.location.search
            );


        const productFromURL =
            params.get("product");


        if (
            productFromURL &&
            PRODUCTS[productFromURL]
        ) {

            productSelect.value =
                productFromURL;

            calculate();

        }


        /* ADD TO CART */

        document
            .getElementById("addToCartButton")
            .addEventListener(
                "click",
                function () {


                    const product =
                        productSelect.value;


                    if (!product) {

                        alert(
                            "Please select a product first."
                        );

                        return;

                    }


                    const colorText =
                        color.options[
                            color.selectedIndex
                        ].text;


                    const sizeText =
                        size.options[
                            size.selectedIndex
                        ].text;


                    const styleText =
                        style.options[
                            style.selectedIndex
                        ].text;


                    const qty =
                        Math.max(
                            1,
                            Number(quantity.value) || 1
                        );


                    const custom =
                        Number(color.value) +
                        Number(size.value) +
                        Number(style.value) +
                        (giftWrap.checked ? 150 : 0);


                    const unitPrice =
                        PRODUCTS[product].price +
                        custom;


                    const item = {

                        product: product,

                        category:
                            PRODUCTS[product].category,

                        image:
                            PRODUCTS[product].image,

                        color:
                            colorText,

                        size:
                            sizeText,

                        style:
                            styleText,

                        message:
                            document.getElementById(
                                "message"
                            ).value,

                        giftWrap:
                            giftWrap.checked,

                        quantity:
                            qty,

                        unitPrice:
                            unitPrice,

                        total:
                            unitPrice * qty

                    };


                    addProductToCart(item);

                }
            );


        /* WHATSAPP */

        document
            .getElementById("whatsappButton")
            .addEventListener(
                "click",
                function () {


                    const product =
                        productSelect.value;


                    if (!product) {

                        alert(
                            "Please select a product first."
                        );

                        return;

                    }


                    const qty =
                        Math.max(
                            1,
                            Number(quantity.value) || 1
                        );


                    const custom =
                        Number(color.value) +
                        Number(size.value) +
                        Number(style.value) +
                        (giftWrap.checked ? 150 : 0);


                    const total =
                        (
                            PRODUCTS[product].price +
                            custom
                        ) * qty;


                    const message = `

Hello! I would like to order a custom gift. 🎁

Product: ${product}

Color: ${
    color.options[color.selectedIndex].text
}

Size: ${
    size.options[size.selectedIndex].text
}

Style: ${
    style.options[style.selectedIndex].text
}

Quantity: ${qty}

Gift Wrapping: ${
    giftWrap.checked ? "Yes" : "No"
}

Personal Message:
${
    document.getElementById("message").value
    || "None"
}

Estimated Total: ₹${total}

Please confirm availability and final price.

                    `.trim();


                    window.open(
                        `https://wa.me/${WHATSAPP_NUMBER}?text=` +
                        encodeURIComponent(message),
                        "_blank"
                    );

                }
            );

    });

</script>

</body>
</html>