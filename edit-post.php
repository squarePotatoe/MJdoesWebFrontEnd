<?php 
include "components/blog/blog-header.php"; 


$id = $_GET['id'];

$result = retrieve_post_by_id($pdo, $id);

$header = $result['header'];
$subtitle = $result['subtitle'];
$content = $result['content'];
?>

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Let if flow</h2>
        </div>
        <div class="row g-5">
            <!-- Left sidebar -->
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-secondary">Tools to be had</span>
                    <span class="badge bg-secondary rounded-pill">!</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justifycontent-between 1h-sm">
                        <div>
                            <h6 class="my-0">Tool name</h6>
                            <small class="text-body-secondary">Description</small>
                        </div>
                    </li>
                </ul>
                <!-- Needs implementation -->
                <form action="" class="card p-2">
                    <div class="input-group">
                        <input placeholder="Insert image" type="text" class="form-control">
                        <button class="btn btn-secondary" type="submit">Upload</button>
                    </div>
                </form>
            </div>

            <!-- Compose area -->
            <div class="col-md-7 col-lg-8">
                <h4>Begin</h4>
                <form action="handlers/update-post_handler.php?id=<?php echo $id?>headline=<?php echo $header?>" method="post" novalidate class="needs-validation">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="headline" class="form-label">Blog header title</label>
                            <input class="form-control" type="text" name="header" value="<?php echo $header; ?>">
                        </div>
                        <div class="col-12">
                            <label for="subtitle" class="form-label">Blog subtitle</label>
                            <?php echo '<input class="form-control" type="text" name="subtitle" value="' . $subtitle . '">'?>
                        </div>
                        <div class="col-12">
                            <label for="categoryInput" class="form-label">Category</label>
                            <select name="category" id="category-select" aria-label="Default select" class="form-select">
                                <option selected="selected" value="Coding">Coding</option>
                                <option value="Life">Life</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contentInput" class="form-label">Your post</label>
                            <div>
                            <textarea id="textField" name="content" class="form-control" placeholder="Your text" rows="20"><?php echo htmlspecialchars($result['content']);?></textarea>
                            </div>
                        </div>

                    </div>

                    <button onclick="document.getElementById('postForm').action='handlers/create-post_handler.php';" class="btn btn-primary my-3" type="submit" name="submit">Update post</button>

                    <?php show_post_errors(); ?>

                </form>
            </div>
        </div>
    </main>
</div>

<?php include "components/blog/blog-footer.php"; ?>

