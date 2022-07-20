<section class='col'>
    <article class='card h-100' id="card">
        <img src='<?php if (isset($imgSrc)) echo assets('upload/' . $imgSrc); else echo assets('upload/null.jpg'); ?>'
             class='card-img-top'>
        <section class='card-body'>
            <h4 class='card-title'>
                <a href='blogDetailsPanel.php?id=<?php echo $id; ?>' class='card-link text-decoration-none'>
                    عنوان: <?php echo $title; ?>
                </a>
            </h4>
            <section class='card-text'>
                <p>
                    <span class='fw-bold'>متن مقاله:</span>
                    <?php echo $text; ?>
                </p>
            </section>
        </section>
        <footer class='card-footer'>
            <section class="row justify-content-between">
					<span class='col'>
						<a href='editBlog.php?id=<?php echo $id; ?>' class='btn btn-primary'>ویرایش</a>
						<a href='deleteBlog.php?id=<?php echo $id; ?>' class='btn btn-danger'>حذف</a>
					</span>
                <span class='col text-end align-self-center'>
						<a href='likeBlog.php?id=<?php echo $id; ?>'
                           class='btn fa-lg <?php if (isset($like)) echo 'fas'; else echo 'far'; ?> fa-heart'></a>
						<a href='saveBlog.php?id=<?php echo $id; ?>' class='btn fa-lg far fa-bookmark'
                           target='_blank'></a>
					</span>
                <section>
        </footer>
    </article>
</section>