<?php 
    $featured = retrieve_post_by_featured($pdo);
?>

<div class="col-lg-6 px-0">
    <h1 class="display-4 fst-italic"><?php echo $featured['header'];?></h1>
    <h3 class="my-3">
     <?php echo $featured['subtitle'];?>
    </h3>
    <p class="lead mb-0">
        <?php echo substr($featured['content'], 0, 150);?>
        <a href="post.php?id=<?php echo $featured['id']?>#article" class="text-body-emphasis fw-bold">
             read more...
        </a>
    </p>
</div>