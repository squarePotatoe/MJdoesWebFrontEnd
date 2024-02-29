<?php 
    $posts = retrieve_recent_posts($pdo);
    // $content = $posts['content'];
    // $shortContent = substr($content, 22, 120);
?>
<?php foreach($posts as $post) { ?>

<li>
<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="post.php?id=<?php echo $post['id']?>#article">
    <!-- <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg> -->
    <div class="col-lg-8">
    <h6 class="mb-0"><?php echo $post['header']; ?></h6>
    <small class="text-body-secondary">
        Posted on 
        <?php 
            $timeStamp = strtotime($post['date']);
            echo date("F d Y", $timeStamp);  
        ?>
    </small>
    </div>
</a>
</li>

<?php }?>