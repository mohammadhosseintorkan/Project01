<section class='col'>
    <article class='card h-100' id="card">
        <section class='card-body'>
            <h4 class='card-title'>
                <a href='messageDetails.php?id=<?php echo $id; ?>' class='card-link text-decoration-none'>
                    عنوان پیام: <?php echo $title; ?>
                </a>
            </h4>
            <section class='card-text'>
                <p>
                    <span class='fw-bold'>متن پیام:</span>
                    <?php echo $body; ?>
                </p>
            </section>
        </section>
    </article>
</section>