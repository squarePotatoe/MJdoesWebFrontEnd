<?php include "components/head.php"; ?>
<body>
<section class="custom-section">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-6 col-xl-5">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-10 col-xl-10 order-2 order-lg-1">

                        <?php  if (!isset($_SESSION["user_id"])) { ?>
                            
                            <h3  class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</h3>

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="font-weight: 400; font-size: 1.2rem;">Use the information provided to log in and continue.</p>

                            <form class="mx-1 mx-md-4" action="handlers/login_handler.php" method="post">
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="form-control" type="text" name="username" placeholder="Username">
                                        </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="form-control" type="password" name="pwd" placeholder="Password">
                                        </div>
                                </div>

                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button class="btn btn-primary" style="min-width: 100%;">Login</button>
                                </div>
                                
                            </form>

                        <?php } ?>

                            <?php check_login_errors(); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("components/cover-footer.php"); ?>
