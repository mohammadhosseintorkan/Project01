<?php
$image1 = "./assets/images/carousel-1.jpg";
$image2 = "./assets/images/carousel-2.jpg";
$image3 = "./assets/images/carousel-3.jpg";
echo "
        <!-- End Navbar -->
    <main class='main-content position-relative border-radius-lg '>
        <div class='container-fluid py-4'>
          <div class='row'>
            <div class='col-xl-3 col-sm-6 mb-xl-0 mb-4'>
              <div class='card'>
                <div class='card-body p-3'>
                  <div class='row'>
                    <div class='col-10'>
                      <div class='numbers'>
                        <p class='text-sm mb-0 text-uppercase font-weight-bold'>درآمد کل</p>
                        <h5 class='font-weight-bolder'>
                            15,530,000 ریال
                        </h5>
                        <p class='mb-0'>
                          <span class='text-success text-sm font-weight-bolder'>+55%</span> از دیروز
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-xl-3 col-sm-6 mb-xl-0 mb-4'>
              <div class='card'>
                <div class='card-body p-3'>
                  <div class='row'>
                    <div class='col-8'>
                      <div class='numbers'>
                        <p class='text-sm mb-0 text-uppercase font-weight-bold'>تعداد کاربران</p>
                        <h5 class='font-weight-bolder'>
                            2 نفر
                        </h5>
                        <p class='mb-0'>
                          <span class='text-success text-sm font-weight-bolder'>+3%</span> از هفته گذشته
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-xl-3 col-sm-6 mb-xl-0 mb-4'>
              <div class='card'>
                <div class='card-body p-3'>
                  <div class='row'>
                    <div class='col-10'>
                      <div class='numbers'>
                        <p class='text-sm mb-0 text-uppercase font-weight-bold'>تعداد مشتریان</p>
                        <h5 class='font-weight-bolder'>
                            12 نفر
                        </h5>
                        <p class='mb-0'>
                          <span class='text-danger text-sm font-weight-bolder'>-2%</span> از سه ماهه گذشته
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-xl-3 col-sm-6'>
              <div class='card'>
                <div class='card-body p-3'>
                  <div class='row'>
                    <div class='col-10'>
                      <div class='numbers'>
                        <p class='text-sm mb-0 text-uppercase font-weight-bold'>تعداد فروش</p>
                        <h5 class='font-weight-bolder'>
                            24 محصول
                        </h5>
                        <p class='mb-0'>
                          <span class='text-success text-sm font-weight-bolder'>+5%</span> نسبت به ماه گذشته
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='row mt-4 min-height-400'>
            <div class='col-lg-7 mb-lg-0 mb-4'>
              <div class='card z-index-2 h-100'>
                <div class='card-header pb-0 pt-3 bg-transparent'>
                  <h6 class='text-capitalize'>سفارشات اخیر</h6>
                </div>
                <div class='card-body p-3'>
                  gfdgdg</br>
                  gfdgdg</br>
                  gfdgdg</br>
                  gfdgdg</br>
                </div>
              </div>
            </div>
            <div class='col-lg-5'>
              <div class='card card-carousel overflow-hidden h-100 p-0'>
                <div id='carouselExampleCaptions' class='carousel slide h-100' data-bs-ride='carousel'>
                  <div class='carousel-inner border-radius-lg h-100'>
                    <div class='carousel-item h-100 active' style='background-image: url({$image1});
          background-size: cover;'>
                      <div class='carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5'>
                        <div class='icon icon-shape icon-sm bg-white text-center border-radius-md mb-3'>
                          <i class='ni ni-camera-compact text-dark opacity-10'></i>
                        </div>
                        <h5 class='text-white mb-1'>Get started with Argon</h5>
                        <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                      </div>
                    </div>
                    <div class='carousel-item h-100' style='background-image: url({$image2});
          background-size: cover;'>
                      <div class='carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5'>
                        <div class='icon icon-shape icon-sm bg-white text-center border-radius-md mb-3'>
                          <i class='ni ni-bulb-61 text-dark opacity-10'></i>
                        </div>
                        <h5 class='text-white mb-1'>Faster way to create web pages</h5>
                        <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                      </div>
                    </div>
                    <div class='carousel-item h-100' style='background-image: url({$image3});
          background-size: cover;'>
                      <div class='carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5'>
                        <div class='icon icon-shape icon-sm bg-white text-center border-radius-md mb-3'>
                          <i class='ni ni-trophy text-dark opacity-10'></i>
                        </div>
                        <h5 class='text-white mb-1'>Share with us your design tips!</h5>
                        <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                      </div>
                    </div>
                  </div>
                  <button class='carousel-control-prev w-5 me-3' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='visually-hidden'>Previous</span>
                  </button>
                  <button class='carousel-control-next w-5 me-3' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='visually-hidden'>Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class='row mt-4'>
            <div class='col-lg-7 mb-lg-0 mb-4'>
              <div class='card '>
                <div class='card-header pb-0 p-3'>
                  <div class='d-flex justify-content-between'>
                    <h6 class='mb-2'>Sales by Country</h6>
                  </div>
                </div>
                <div class='table-responsive'>
    xgxhhfghfh
                </div>
              </div>
            </div>
            <div class='col-lg-5'>
              <div class='card'>
                <div class='card-header pb-0 p-3'>
                  <h6 class='mb-0'>Categories</h6>
                </div>
                <div class='card-body p-3'>
    gdgdg
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>";
?>