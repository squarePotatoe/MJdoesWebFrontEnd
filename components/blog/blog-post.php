
<main class="container">
            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="pd-4 md-4 fst-italic border-bottom">Be it as it may</h3>
                    <?php $id = $_GET['id'];
                            $result = retrieve_post_by_id($pdo, $id);?>
                    <form id="post-link" method="post" action="handlers/delete-post_handler.php?id=<?php echo $id; ?>">
                        
                        <?php if (isset($_SESSION["user_username"]) && ($_SESSION["user_username"]) === $result['author']) { ?>
                        <div class="d-flex justify-content-end mb-4">
                        <button type="submit" name="delete" class="btn btn-outline-secondary">Delete post</button>

                        <a class="btn btn-primary mx-1" href="edit-post.php?id=<?php echo $id; ?>">Edit post</a>
                        </div>

                        <?php } ?>

                        <article id="article" class="blog-post">
                            
                            <h2 class="display-5 link-body emphasis mb-1"><?php echo $result['header']; ?>
                        
                        </h2>
                            <p class="blog-post-meta">
                                <?php 
                                    $timeStamp = strtotime($result['date']);
                                    echo date("F d Y", $timeStamp); 
                                ?>
                                by <a href=""><?php echo $result['author'];?></a>
                                in <a href=""><?php echo $result['category'];?></a>
                            </p>
                            <h4><?php echo $result['subtitle'];?></h4>
                            <p style="white-space: pre-line; font-size: 1.15rem;"><?php echo $result['content'];?>
                            </p>
                            <hr>

                        </article>
                        
                    </form>

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
    