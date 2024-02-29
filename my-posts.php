<?php 
include "components/blog/blog-header.php"; ?>

<!-- Main Content-->
<div class="container px-0 px-lg-5">
  <?php  if (!isset($_SESSION["user_id"])) { ?>
         Need to log in to be here!
      <?php } else { ?>
        <div class="col-md-10 col-lg-8 col-xl-10">
     
    <?php 
      $posts = retrieve_posts_by_author($pdo, $_SESSION['user_username']);
      $result = $posts['result'];
      $totalPages = $posts['totalPages'];
      $currentPage = $posts['currentPage'];
    ?>
        <?php foreach($result as $post) { ?>

          <div class="post-preview">
            <a href="post.php?id=<?php echo $post['id']; ?>">

              <h2 class="preview-title"><?php echo $post['header']; ?></h2>
              
                </a>
                <h4 style="white-space: pre-line;" class="preview-subtitle"><?php echo $post['subtitle']; ?></h4>
                    <p class="preview-meta">
                      Posted in 
                       <a href="#!"><?php echo $post['category']; ?></a>
                      <?php echo $post['date']; ?>
                    </p>
          </div>
          <!-- Divider-->
          <hr class="my-4" />
        <?php } ?>  

      <!-- Pager-->

      <div class="pagination">
        <?php if ($currentPage > 1) { ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php } ?>

          <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
              <?php if ($i == $currentPage) { ?>
                  <span class="current"><?php echo $i; ?></span>
              <?php } else { ?>
                  <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php } ?>
          <?php } ?>

        <?php if ($currentPage < $totalPages) { ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php } ?>
      </div>
      </div>
      <?php } ?>

    </div>

<?php include "components/blog/blog-footer.php"; ?>

