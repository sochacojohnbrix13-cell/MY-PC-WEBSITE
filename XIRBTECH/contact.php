<?php

include_once "db.php";

$message = "";

if (isset($_POST["btnSubmit"])) {

    $name = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $inquiry = $_POST["txtMessage"];

    $query = "INSERT INTO inquiries (name, email, message)
              VALUES ('$name', '$email', '$inquiry')";

    $res = mysqli_query($conn, $query);

    if ($res) {
        $message = "Your message has been successfully sent!";
    } else {
        $message = "Failed to send your message.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Contact | XIRBTECH</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="css/style.css">

</head>

<body class="bg-dark text-white">

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary">

    <div class="container">

        <a
            class="navbar-brand fw-bold"
            href="index.html">

            <i class="bi bi-pc-display"></i>
            XIRBTECH

        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="index.html">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="products.html">
                        Products
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="about.html">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link active"
                        href="contact.php">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- CONTACT SECTION -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <p class="text-primary fw-bold mb-2">
                GET IN TOUCH
            </p>

            <h1 class="display-5 fw-bold">
                Contact <span class="text-primary">XIRBTECH</span>
            </h1>

            <p class="text-secondary">

                Have questions about our computer parts,
                products, or services? Send us a message.

            </p>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card bg-black text-white border-secondary shadow-lg">

                    <div class="card-body p-4 p-md-5">

                        <?php if ($message != "") { ?>

                            <div class="alert alert-info">

                                <?php echo $message; ?>

                            </div>

                        <?php } ?>


                        <form
                            method="POST"
                            action="contact.php">


                            <!-- NAME -->

                            <div class="mb-4">

                                <label
                                    class="form-label"
                                    for="txtName">

                                    <i class="bi bi-person"></i>
                                    Full Name

                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="txtName"
                                    name="txtName"
                                    placeholder="Enter your name"
                                    required>

                            </div>


                            <!-- EMAIL -->

                            <div class="mb-4">

                                <label
                                    class="form-label"
                                    for="txtEmail">

                                    <i class="bi bi-envelope"></i>
                                    Email Address

                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="txtEmail"
                                    name="txtEmail"
                                    placeholder="Enter your email"
                                    required>

                            </div>


                            <!-- MESSAGE -->

                            <div class="mb-4">

                                <label
                                    class="form-label"
                                    for="txtMessage">

                                    <i class="bi bi-chat-left-text"></i>
                                    Message

                                </label>

                                <textarea
                                    class="form-control"
                                    id="txtMessage"
                                    name="txtMessage"
                                    rows="6"
                                    placeholder="Write your message here..."
                                    required></textarea>

                            </div>


                            <!-- SUBMIT -->

                            <div class="d-grid">

                                <button
                                    type="submit"
                                    name="btnSubmit"
                                    class="btn btn-primary btn-lg">

                                    <i class="bi bi-send"></i>

                                    Send Message

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>


        <!-- CONTACT INFORMATION -->

        <div class="row text-center mt-5">

            <div class="col-md-4 mb-4">

                <i class="bi bi-envelope-fill fs-1 text-primary"></i>

                <h5 class="mt-3">
                    Email
                </h5>

                <p class="text-secondary">
                    support@xirbtech.com
                </p>

            </div>


            <div class="col-md-4 mb-4">

                <i class="bi bi-pc-display fs-1 text-primary"></i>

                <h5 class="mt-3">
                    Computer Parts
                </h5>

                <p class="text-secondary">
                    Quality components for every build.
                </p>

            </div>


            <div class="col-md-4 mb-4">

                <i class="bi bi-headset fs-1 text-primary"></i>

                <h5 class="mt-3">
                    Support
                </h5>

                <p class="text-secondary">
                    We're here to help with your build.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer class="bg-black border-top border-secondary py-4">

    <div class="container text-center">

        <h5 class="fw-bold">
            XIRBTECH
        </h5>

        <p class="text-secondary mb-0">

            BUILD. UPGRADE. PERFORM.

        </p>

        <small class="text-secondary">

            © 2026 XIRBTECH. All Rights Reserved.

        </small>

    </div>

</footer>


<script
    src="https://code.jquery.com/jquery-3.7.1.min.js">
</script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>