<body class="d-flex h-100 text-center text-bg-dark">
    <div class="d-flex w-100 h-100 mx-auto flex-column">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php include "components/cover-header.php" ?>
    </div>
    <main>
        <!-- Top section start -->
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">About</h1>
                    <p class="lead about-text">
                        This is meant to have something short and whitty here, but alas the time has not yet come for that...
                    </p>
                    <p>
                        <a href="" class="btn btn-primary my-2">Button!</a>
                        <a href="" class="btn btn-secondary my-2">Button?</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- Top section end -->

        <!-- Album section start -->
        <div class="album py-5 bg-body-rertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-col-md-3 g-3">
                    <?php include "components/about/album-item.php"; ?>
                    <?php include "components/about/album-item.php"; ?>
                    <?php include "components/about/album-item.php"; ?>
                    <?php include "components/about/album-item.php"; ?>
                    <?php include "components/about/album-item.php"; ?>
                    <?php include "components/about/album-item.php"; ?>
                </div>
            </div>
        </div>
        <!-- Album section end -->

    </main>
    <footer class="text-about py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="text-start mb-1">MJdoesCode</p>
        </div>
    </footer>
    </div>
</body>