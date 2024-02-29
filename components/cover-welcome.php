
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <?php include "components/cover-header.php" ?>

    <main class="px-3">

    <?php if (isset($_SESSION["user_id"])) { ?>
        <h1>Welcome, <?php output_username(); ?>!</h1>
        <p class="lead">
            Your are now logged in!
        </p>
        <p class="lead"><a href="" class="btn btn-lg btn-light fw-bold border-white bg-white">Proceed</a></p>

        <?php } else if (isset($_SESSION["user_username"]) && ($_SESSION["user_username"]) === "MJSD") { ?>
            <h1 class="cover-text">Welcome back</h1>
        <?php } else { ?> 
            <h1>Welcome to MJdoesCode</h1>
        <p class="lead">
            Hello there and welcome to my unfinished site!
        </p>
        <p class="lead"><a href="" class="btn btn-lg btn-light fw-bold border-white bg-white">Call to action</a></p>
        <?php } ?>

    </main>

