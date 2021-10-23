<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Form</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/welcome_message.php">Fun-Run</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/welcome_message.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="/funrun">Funrun</a></li>
            <li><a class="dropdown-item" href="/mini">Mini Marathon</a></li>
            <li><a class="dropdown-item" href="/vip">VIP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/super">Super VIP</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary me-3" type="submit">Search</button>
        <a href="/register" class="btn btn-success me-3">Register</a>
        <a href="/login" class="btn btn-primary me-1">Login</a>
      </form>
    </div>
  </div>
</nav>

                <br>
    <!---------------- End NAVBAR-------------------------->

        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h1>Sign Up</h1>
                    <hr>
                    <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
                    <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID_Card Number</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    <button type="submit" class="btn btn-success">Sign Up</button>
                    <a href="/welcome_message.php" class="btn btn-danger me-1">Cancel</a>
                </form>
                </div>
            </div>
        </div>
                        <br><br><br>
        <!------------------End Card--------------->

        <!-- Footer -->
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
        <div class="container p-4">
    <!-- Section: Form -->
    <section class="">
        <form action="">
        <!--Grid row-->
            <div class="row d-flex justify-content-center">
          <!--Grid column-->
            <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">(Email address)</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      Fun run เดิน-วิ่ง เพื่อการกุศลถ้าคุณพร้อมกันเเล้วเราออกไปวิ่งกันเถอะ
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Facebook</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.facebook.com/BewKung013" class="text-white">- Tawat Laoaroon</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Line ID</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.facebook.com/BewKung013" class="text-white">- Bew_Kung</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Instagram</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.facebook.com/BewKung013" class="text-white">- @bew_tw</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Youtube</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.youtube.com/watch?v=sABqCFHl0R8" class="text-white">- BEW KUNG</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/BewKung013">BewKung.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>