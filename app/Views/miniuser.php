<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Funrun</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="/welcome_message.php">Fun-Run</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/homeuser">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="/funrunuser">Funrun</a></li>
                <li><a class="dropdown-item" href="/miniuser">Mini Marathon</a></li>
                <li><a class="dropdown-item" href="/vipuser">VIP</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/superuser">Super VIP</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary me-3" type="submit">Search</button>
            <?php $session = session(); ?>
                <h5 class="user me-3"><?php echo $session->get('name')?></h5> 
            <a href="/logout" class="btn btn-danger">Logout</a>
        </form>
        </div>
    </div>
    </nav>
    <br>
    <center><h2>Mini Marathon</h2></center>
    <center><div class="card mb-5" style="max-width: 1000px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="https://www.dianashoppingonline.com/run/index/bg.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Mini Marathon</h5>
            <p class="card-text">กิจกรรมการวิ่งในทุกวันนี้มีหลายประเภท ไม่ว่าจะเป็นการเดิน-วิ่งระยะสั้นประมาณ 2-3 กิโลเมตรหรือ 5K (5 กิโลเมตร) ที่เรียกว่า Fun Run การวิ่งมินิมาราธอน (10.5 กิโลเมตร) ฮาล์ฟมาราธอน (21 กิโลเมตร) หรือการวิ่งมาราธอนซึ่งเป็นระยะมาตรฐานที่มักใช้ในการแข่งขันระดับนานาชาติ (มีระยะทางอย่างเป็นทางการอยู่ที่ 42.195 กิโลเมตร)
ทั้งนี้การวิ่งมาราธอนจัดเป็นประเภทหนึ่งของ endurance sports ซึ่งเป็นกีฬาที่ต้องใช้ความแข็งแรงและความทนทานของกล้ามเนื้อ รวมถึงระบบหัวใจและหลอดเลือด เนื่องจากมีการเคลื่อนไหวในลักษณะเดิมๆ ซ้ำๆ เป็นระยะเวลานาน มีความต้องการในการใช้พลังงานอย่างมากและต่อเนื่อง ซึ่งแตกต่างจากการวิ่งทั่วไปหรือการวิ่งด้วยอัตราเร่ง (sprinter) จึงเหมาะสำหรับนักวิ่งที่มีการเตรียมตัวมาโดยเฉพาะ</p>
            <p class="card-text"><small class="text-muted">สมัครเข้าร่วมกิจกรรมได้เเล้วตั้งเเต่ 10/พ.ย./2564 ถึง 12/พ.ย./2564</small></p>
            <a href="/lun" class="btn btn-primary me-1">สมัครเข้าร่วมกิจกรรม</a>
        </div>
        </div>
    </div>
    </div>
    </center>
                <br><br><br>

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