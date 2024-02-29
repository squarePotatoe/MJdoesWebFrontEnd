<?php 
include "components/head.php"; ?>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php include "components/blog/blog-cover-header.php" ?>
    </div>
<body>
    <div class="container">
        <header class=" 1h-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                <?php if (isset($_SESSION["user_id"])) { ?>
                    <button class="btn btn-sm btn-outline-secondary" onclick="changeThemeColor()">Lights</button>
                    <a href="" class="link-secondary mx-1"><?php output_username(); ?></a>
                <?php } else { ?>
                    <button class="btn btn-sm btn-outline-secondary" onclick="changeThemeColor()">Lights</button>
                    <a href="" class="link-secondary mx-1"></a>
                <?php } ?>
                
                </div>
                <div class="col-4 text-center">
                    <a href="" class="blog-header-logo text-body-emphasis text-decoration-none">Blog</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                <!-- <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a> -->
                
                <?php if (isset($_SESSION["user_id"])) { ?>
                    <form  class="nav-link logout-button fw-bold py-1 px-0" id="logoutForm" method="post">
                        <button class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('logoutForm').action='handlers/logout_handler.php';">Logout</button>
                    </form>
                <?php } else { ?>
                    <a class="btn btn-sm btn-outline-secondary" href="login">Login</a>
                <?php } ?>



                </div>
            </div>
        </header>
        <?php if (isset($_SESSION["user_id"])) { ?>
            <?php include "components/blog/blog-logged-in-nav.php"; ?>
        <?php } ?>
    </div>
