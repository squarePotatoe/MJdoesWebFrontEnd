<?php
    $result = retrieve_latest_post_by_category($pdo, "Life");
    $timeStamp = strtotime($result['date']);
    $formattedDate = date("F d Y", $timeStamp);
    $content = $result['content'];
    $shortContent = substr($content, 22, 70);
?>
<div class="col-md-6">

    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success-emphasis">Life</strong>
            <h3 class="mb-0"><?php echo $result['header']; ?></h3>
            <div class="mb-1 text-body-secondary"><?php echo $formattedDate; ?></div>
                <p class="card-text mb-auto">
                    <?php echo $shortContent."...";?>
                </p>
            <a href="post.php?id=<?php echo $result['id']?>#article" class="icon-link gap-1 icon-link-hover stretched-link">
                Read more...

            <svg class="bi"><use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
    </div>
</div>