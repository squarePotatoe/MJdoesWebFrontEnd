<?php 
    $posts = retrieve_posts($pdo);
    $result = $posts['result'];
    $totalPages = $posts['totalPages'];
    $currentPage = $posts['currentPage'];
    
?>
<?php foreach($result as $post) { ?>

<article class="blog-post">
    <a class="display-5 link-body emphasis mb-1" style="text-decoration: none; color: inherit;" href="post.php?id=<?php echo $post['id']?>#article">
    <h2 class="display-5 link-body emphasis mb-1"><?php echo $post['header']; ?></h2>
    </a>
    <p class="blog-post-meta">
        <?php 
            $timeStamp = strtotime($post['date']);
            echo date("F d Y", $timeStamp); 
        ?>
         by <a href=""><?php echo $post['author'];?></a>
         in <a href=""><?php echo $post['category'];?></a>
    </p>
    <h4><?php echo $post['subtitle'];?></h4>
    <p style="white-space: pre-line;"><?php echo substr($post['content'], 0, 300);?>
    <?php if (strlen($post['content']) > 300) { ?>
        <a style="white-space: pre-line;" href="post.php?id=<?php echo $post['id']?>#article" class="text-body-emphasis fw-bold">
        read more...
    </a>
    <?php } ?>
    </p>
    <hr>

</article>

<?php } ?>