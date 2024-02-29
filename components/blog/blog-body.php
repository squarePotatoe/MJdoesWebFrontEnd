<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <!-- Featured post start -->
            <?php include "components/blog/blog-featured.php"; ?>
        <!-- Featured post end -->

        <!-- Latest posts section -->
        </div>
            <div class="row mb-2">
            <!-- Coding post  -->
                <?php include "components/blog/blog-latest-coding.php"; ?>

            <!-- Life post  -->
                <?php include "components/blog/blog-latest-life.php"; ?>
            </div>
            <!-- Latest post section end -->

            <div class="row g-5">
                <div class="col-md-8">
                    <h3 id="article" class="pd-4 md-4 fst-italic border-bottom">Be it as it may</h3>

                    <?php include "components/blog/blog-article.php"; ?>

                        <!-- Pagination start -->
                        <div class="pagination">
                            <?php if ($currentPage > 1) { ?>
                                <a href="?page=<?php echo $currentPage - 1; ?>#article"><i class="bi bi-caret-right"></i></a>
                            <?php } ?>

                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                <?php if ($i == $currentPage) { ?>
                                    <span class="current"><?php echo $i; ?></span>
                                <?php } else { ?>
                                    <a href="?page=<?php echo $i; ?>#article"><?php echo $i; ?></a>
                                <?php } ?>
                            <?php } ?>

                            <?php if ($currentPage < $totalPages) { ?>
                                <a href="?page=<?php echo $currentPage + 1; ?>#article"></a>
                            <?php } ?>
                        </div>
                        <!-- Pagination end -->
                </div>
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic">About</h4>
                            <p class="mb-0">Tell people a little bit about the publications and reasoning</p>
                        </div>
                        <div>
                            <h4 class="fst-italic">Recent posts</h4>
                            <ul class="list-unstyled">
                                <?php 
                                    include "components/blog/blog-recent-post.php"; 
                                ?>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
    </main>
    
