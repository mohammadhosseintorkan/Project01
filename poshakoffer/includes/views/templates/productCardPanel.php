<section class='col p-3'>
    <a href='productDetails.php?id=<?php echo $id; ?>'>
        <article class='card h-100' id="card">
            <img src='<?php if (isset($imgSrc)) echo assets('upload/' . $imgSrc); else echo assets('upload/null.jpg'); ?>'
                 class='card-img-top'>
            <section class='card-body'>
                <h4 class='card-title'>
                    <a href='productDetailsPanel.php?id=<?php echo $id; ?>' class='card-link text-decoration-none'>
                        نام محصول: <?php echo $name; ?>
                    </a>
                </h4>
                <section class='card-text'>
                    <p>
                        <span class='fw-bold'>قیمت:</span>
                        <?php echo number_format($price); ?>
                        تومان<br>
                        <span class='fw-bold'>توضیحات:</span>
                        <?php echo $description; ?>
                    </p>
                </section>
            </section>
            <footer class='card-footer'>
                <section class="row justify-content-between">
                        <span class='col'>
                            <a href='editProduct.php?id=<?php echo $id; ?>' class='btn btn-primary m-1'>ویرایش</a>
                            <a href='deleteProduct.php?id=<?php echo $id; ?>' class='btn btn-danger m-1'>حذف</a>
                        </span>
                    <span class='col text-end align-self-center'>
                            <a href='likeProduct.php?id=<?php echo $id; ?>'
                               class='btn fa-lg <?php if (isset($like)) echo 'fas'; else echo 'far'; ?> fa-heart'></a>
                            <a href='saveProduct.php?id=<?php echo $id; ?>' class='btn fa-lg far fa-bookmark'
                               target='_blank'></a>
                    </span>
                <section>
            </footer>
        </article>
    </a>
</section>