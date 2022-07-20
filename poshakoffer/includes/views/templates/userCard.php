<section class='col'>
    <article class='card h-100' id="card">
        <img src="<?php echo $imgSrc; ?>" class='card-img-top'>
        <section class='card-body'>
            <h4 class='card-title'>
                <a href='userDetails.php?id=<?php echo $id; ?>' class='card-link text-decoration-none'>
                    نام کاربر: <?php echo $firstname . ' ' . $lastname; ?>
                </a>
            </h4>
            <section class='card-text'>
                <p>
                    <span class='fw-bold'>نام کاربری:</span>
                    <?php echo $username; ?> <br>
                    <span class='fw-bold'>پست الکترونیکی:</span>
                    <?php echo $email; ?>
                </p>
            </section>
        </section>
    </article>
</section>