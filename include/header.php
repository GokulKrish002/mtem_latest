<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/logo.png" sizes="32x32" />
  <link rel="icon" href="images/logo.png" sizes="192x192" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Motherstransport</title>
</head>

<body>
  <!-- aside -->
  <aside class="side-contents">
    <button class="btn btn-dark-blue close-btn" id="side-bar-closer">
      <i class="fa-solid fa-x"> <span class="fs-0">close sidebar</span></i>
    </button>
    <ul>
      <li class="h3"><a href="#">Links</a></li>
      <li class="fade-up-links"><a href="index.php">Home</a></li>
      <li class="fade-up-links"><a href="about.php">About</a></li>
      <li class="fade-up-links"><a href="contact.php">Contact</a></li>
      <li class="fade-up-links"><a href="gallery.php">Gallery</a></li>
      <li class="fade-up-links"><a href="services.php">Services</a></li>
      <li class="fade-up-links"><a href="completedProjects.php">Completed Projects</a></li>
      <li class="fade-up-links"><a href="ongoingProjects.php">Ongoing Projects</a></li>
    </ul>
  </aside>

  <main>
    <nav class="px-1 px-md-5">
      <div class="h-100 d-flex justify-content-between align-items-center">
        <div class="position-relative">
          <div class="logo-container">
            <a href="#" class="logo d-block">
              <img src="images/logonew.png" class="object-contain" alt="">
            </a>
          </div>
        </div>
        <div class="d-block d-md-none">
          <button name="test" type="button" class="btn btn-dark-blue" id="side-bar-open"> <i
              class="fa fa-bars"></i></button>
        </div>

        <div class="align-items-center d-none d-md-flex">
          <div class="d-none d-lg-flex align-items-top mr-4">
            <div class="mr-2">
              <div class="navbar-icon p-1">
                <img src="icons/location.png" class="object-contain" alt="">
              </div>
            </div>
            <div>
              <p class="h6">VELACHERY</p>
              <p class="text-secondary">PALLIKARANAI CHENNAI.</p>
            </div>
          </div>
          <div class="d-flex align-items-top">
            <div class="mr-2">
              <div class="navbar-icon p-2">
                <img src="icons/mail.png" class="object-contain" alt="">
              </div>
            </div>
            <div>
              <p class="h6">motherteam12@gmail.com</p>
              <p class="text-secondary">Office Hour 09:00am - 05:00pm</p>
            </div>
          </div>

        </div>
      </div>


      <ul class="d-flex justify-content-center floating-dropdown-nav-design top-float-dropdown drop-navbar-hide">
        <li><a href="completedProjects.php" class="floating-projects-link drop-projects">Completed Projects</a></li>
        <li><a href="ongoingProjects.php" class="floating-projects-link drop-projects">Ongoing Projects</a></li>
      </ul>
    </nav>