<?php
echo "
			<aside class='col-12 col-lg-1'>
			    <span class = 'col align-self-center'>
			        <nav class='navbar navbar-light bg-light'>
			            <ul>
			                <li><a href = 'likeProduct.php?id=<?php echo $id;?>' class = 'd-flex align-items-center text-white text-decoration-none dropdown-toggle fa-lg ";
if (isset($like)) echo 'fas'; else echo 'far';
echo " fa-heart'></a></li>
			                <li><a href = 'saveProduct.php?id=<?php echo $id;?>' class = 'd-flex align-items-center text-white text-decoration-none dropdown-toggle fa-lg far fa-bookmark' target = '_blank'></a></li> 
                        </ul>
					</nav>
                </span>
            </aside>
			
			<main class='container col-12 col-lg-11 text-center'>
                <h2>
                    نام محصول: {$name}
                </h2>
                
                <img src = '";
if (isset($imgSrc)) echo assets('upload/' . $imgSrc); else echo assets('upload/null.jpg');
echo "' class = 'card-img-top p-5' style='width: 50%;'>
                
                <h3>مشخصات</h3>
                <p>
                    <span class = 'fw-bold'>قیمت: </span>";
echo number_format($price);
echo "			تومان<br>
                    <span class = 'fw-bold'>توضیحات: </span>";
if (!empty($description)) echo $description;
else echo '---';
echo "
                </p>
                
                <h3>ویژگی ها</h3>
                <p>
                    <span class = 'fw-bold'>نوع محصول: </span>";
echo($typeProduct);
echo " <br>
                    <span class = 'fw-bold'>سایز های محصول: </span>";
echo($sizeProduct);
echo "
                </p>
            </main>
            
            <hr>
            
            <footer>
                <section class = 'row container'>
                    <!-- <span class = 'col'>
                        <a href = 'editProduct.php?id={$id}' class = 'btn btn-primary'>ویرایش</a>
                        <a href = 'deleteProduct.php?id={$id}' class = 'btn btn-danger'>حذف</a>
                    </span> -->
                </section>
            </footer>
";
