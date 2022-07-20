<?php
echo "
<section class='position-relative bg-white p-3'>
			<h2 class='mb-3'>
				نام کاربر: {$firstname} {$lastname}
			</h2>
			<img src = '{$imgSrc}' class = 'rounded-circle mb-3' width='10%' height='25%'>
			<p>
                <span class = 'fw-bold mb-3'>نام کاربری:</span>
                {$username} <br>
                <span class = 'fw-bold mb-3'>پست الکترونیکی:</span>
                {$email} <br>
                <span class = 'fw-bold mb-3'>شماره موبایل:</span>
                {$mobile} <br>
                <span class = 'fw-bold mb-3'>تاریخ تولد:</span>
                {$birthday}
			</p>
			<hr>
			<section class = 'row container'>
				<span class = 'col'>
				    <a href = 'editUser.php?id={$id}' class = 'btn btn-primary'>ویرایش</a>
                    <a href = 'deleteUser.php?id={$id}' class = 'btn btn-danger'>حذف</a>
				</span>
			</section>
</section>";
?>