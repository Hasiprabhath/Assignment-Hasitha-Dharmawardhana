<?php
/**
* The main header file
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package assignmentbyhasitha
*/
?>

<!doctype html>
<html lang="zxx" dir="ltr" style="overflow-x: hidden;">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Assignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!--FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600;700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo get_home_url(); ?>/wp-content/themes/assignmentbyhasitha/style.css?v=0.0001">

  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

  <header style="background: linear-gradient(#fbf1e4, white, #fbf1e4);">
    <div class="container">


      <nav class="navbar bg-transparent py-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/Capture-removebg-preview.png" class="img-fluid"></a>
          <div class="ms-auto">
            <button class="border-0 mx-lg-3 bg-transparent"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/02cc464b-db4f-4cff-9fa3-f05f306bb064.png" class="img-fluid"></button>
            <button class="navbar-toggler mx-lg-3 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
              <span>
                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/a790d8e4-b45e-4d38-9150-2339f3a88c2a.png" class="img-fluid">
              </span>
            </button>
            <button class="navbar-toggler mx-lg-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span>
                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/9a179aa8-da06-4d75-9760-46af72f97b9f.png" class="img-fluid">
              </span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background: linear-gradient(#fbf1e4, white, #fbf1e4);width: 550px;">
              <div class="offcanvas-header d-flex justify-content-end">
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div>
                  <h2 class="fw-bold">Your Cart</h2>
                </div>
                <hr>

                <div class="py-1">
                  <div class="row">
                    <div class="col-lg-3">
                      <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/d0d21132-d792-4c99-8b89-ebee2245367d.png" class="img-fluid" height="80" width="80">
                    </div>
                    <div class="col-lg-6">
                      <div class="card border-0 h-100 bg-transparent">
                        <div class="card-body">
                          <h6 class="fw-bold text-uppercase">ithin kithul treacle</h6>
                          <h6 class="fw-bold text-uppercase">50 ml</h6>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-3">
                          <h6 class="textColor">$ 99.9</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card border-0 h-100 bg-transparent">
                        <div class="card-body">
                          <div class="qty">
                            <span class="minus">-</span>
                            <input type="number" class="count" name="qty" value="1">
                            <span class="plus">+</span>
                          </div>
                        </div>
                        <div class="card-footer text-center bg-transparent border-0 pt-3">
                          <h6 class="textColor">$ 99.1</h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <hr>
                <div class="py-1">
                  <div class="row">
                    <div class="col-lg-3">
                      <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/fcd2d22b-b337-4736-b274-4b89d5ecfe6e.png" class="img-fluid" height="80" width="80">
                    </div>
                    <div class="col-lg-6">
                      <div class="card border-0 h-100 bg-transparent">
                        <div class="card-body">
                          <h6 class="fw-bold text-uppercase">ithin kithul jaggery</h6>
                          <h6 class="fw-bold text-uppercase">100 ml</h6>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-3">
                          <h6 class="textColor">$ 199.9</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card border-0 h-100 bg-transparent">
                        <div class="card-body">
                          <div class="qty">
                            <span class="minus">-</span>
                            <input type="number" class="count" name="qty" value="1">
                            <span class="plus">+</span>
                          </div>
                        </div>
                        <div class="card-footer text-center bg-transparent border-0 pt-3">
                          <h6 class="textColor">$ 199.1</h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>

          </div>
        </div>
      </nav>
      <div class="collapse text-center" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="p-4">
          <div>
            <a href="#" class="text-decoration-none textColor mb-2">
              <h3 class="fw-bold">Home</h3>
            </a>
            <a href="#" class="text-decoration-none textColor mb-2">
              <h3 class="fw-bold">Tropical Kithul Ways</h3>
            </a>
            <a href="#" class="text-decoration-none textColor mb-2">
              <h3 class="fw-bold">Our Story</h3>
            </a>
            <a href="product.php" class="text-decoration-none textColor mb-2">
              <h3 class="fw-bold">Our Products</h3>
            </a>
            <a href="#" class="text-decoration-none textColor mb-2">
              <h3 class="fw-bold">The Process</h3>
            </a>
            <a href="#" class="text-decoration-none textColor mb-2">
              <h3 class="fw-bold">Sustainability</h3>
            </a>
          </div>

          <div class="pt-3">
            <div class="row">
              <div class="col-lg-6 d-flex justify-content-start">
                <small class="textColor">All Right Reserved @ ithinKithul2021</small>
              </div>
              <div class="col-lg-6 d-flex justify-content-end">
                <ul class="list-inline">
                  <li class="list-inline-item mx-md-2">
                    <a href="#" class="text-decoration-none textColor">
                      <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/7ff98f91-cba6-4a5f-bfb3-1c6d6ae175ef.png" height="30" width="30" class="img-fluid">
                    </a>
                  </li>
                  <li class="list-inline-item mx-md-2">
                    <a href="#" class="text-decoration-none textColor">
                      <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/9c824e99-b539-4025-934f-5ae24cec9922.png" height="30" width="30" class="img-fluid">
                    </a>
                  </li>
                  <li class="list-inline-item mx-md-2">
                    <a href="#" class="text-decoration-none textColor">
                      <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/08/e1d8b449-929d-4794-a069-31e4443f303a.png" height="30" width="30" class="img-fluid">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </header>
