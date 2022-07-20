<section class='col p-3'>
        <article class='row card h-100' id="card" style="flex-direction: row">
            <a class='col-1 p-0' href='productDetails.php?id=<?php echo $id; ?>'>
            <img src='<?php if (isset($imgSrc)) echo assets('upload/' . $imgSrc); else echo assets('upload/null.jpg'); ?>'
                 class='card-img-top h-100 w-100'>
            </a>
            <section class='col-10 card-body'>
                <h4 class='card-title'>
                    <a href='productDetails.php?id=<?php echo $id; ?>' class='card-link text-decoration-none'>
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
            <footer class='col-1 card-footer'>
                <section class="row justify-content-between">
                        <span class='col'>
                            <a href='deleteShoppingCart.php?id=<?php echo $id; ?>' class='btn btn-danger m-1'>حذف</a>
                        </span>
                    <section>
            </footer>
        </article>
</section>