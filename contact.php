<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "insert";

  $conn = mysqli_connect($server, $username, $password, $dbname);

  if(isset($_POST['submit']) == "false"){

    sleep(3);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $link = $_POST['link'];
    $description = $_POST['description'];
    $profileLink = $_POST['profileLink'];
    $descriptionProfile = $_POST['descriptionProfile'];

    $query = "insert into contactForm(name, email, link, description, profileLink, descriptionProfile) values('$name', '$email', '$link', '$description', '$profileLink', '$descriptionProfile')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());
  }
?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      media="screen"
      href="https://fontlibrary.org//face/opendyslexic"
      type="text/css"
    />

    <link rel="stylesheet" href="custom.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

    <title>LITOutreach</title>
  </head>
  <body>
    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">LITOutreach</span>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-sm-0 nav nav-one-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.html">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Resources
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="copyright.html"
                    >Copyrighting</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="publishing.html">Publishing</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="creators.html">Creators</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Banner -->
    <div
      id="carouselExampleInterval"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div
          class="carousel-item active parallaxImg5"
          data-bs-interval="3000"
        ></div>
        <div class="carousel-item parallaxImg6" data-bs-interval="4000"></div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--Font Button -->
    <button
      type="button"
      class="btn btn-dark float-end fontButton"
      id="FontFamily"
    >
      <span id="buttonFont"></span>
    </button>

    <!-- Section One -->
    <div>
      <img
        src="img/contact_icon.jpg"
        class="img-fluid float-end contactFirstImg"
        alt="Responsive image"
        width="550"
      />

      <h1 class="contactLeftHeader h1 fw-bold">Want to get in touch?</h1>

      <p class="contactLeftParagraph">
        Contact us with the information bellow for any business inquires. If
        your looking to submit work, please reference the spesific instructions
        bellow. If on a mobile device, the contact information can be found in
        the footer.
      </p>

      <div class="contactIconsBlock">
        <p class="bi bi-twitter float-start contactIcons"></p>
        <p>@fakeLITOutreach_Twitter</p>

        <p class="bi bi-facebook float-start contactIcons"></p>
        <p>@fakeLITOutreach_Facebook</p>

        <p class="bi bi-envelope-fill float-start contactIcons"></p>
        <p>fakeLITOutreach@gmail.com</p>

        <p class="bi bi-instagram float-start contactIcons"></p>
        <p>@fakeLITOutreach_Insta</p>
      </div>
    </div>

    <!--Section Two-->
    <div class="specialDiv sectionTwoBackground">
      <!-- Section Two form -->
      <feildset>
      <form
        class="contactForm container-fluid float-start needs-validation"
        novalidate
        name="frmContact" method="POST" action=""
      >
        <p class="contantFormHeader">SUBMIT WORK</p>
        <label for="" class="form-label" style="color: red;">(this form is currently deactivated)</label>
        <p class="contantFormHeader2">Basic...</p>
        <div class="row">
          <div class="mb-3 col">
            <label for="name" class="form-label"
              >Name (or pen-name) :</label
            >
            <input
              type="text"
              class="form-control nameInput"
              id="name"
              placeholder="name example"
              required
              placeholder="name" value=""
              name="name"
            />
          </div>
          <div class="mb-3 col">
            <label for="email" class="form-label">Email address :</label>
            <input
              type="text"
              class="form-control emailInput"
              id="email"
              placeholder="name@example.com"
              required
              name="email" 
              value="" 
              required
            />
          </div>
        </div>
        <div class="mb-3">
          <label for="link" class="form-label">Link to your work :</label>
          <input
            type="text"
            class="form-control workInput"
            id="link"
            placeholder="E.G. Amazon Link, Wattpad Link, Google Drive PDF, Other"
            required
            name="link" 
          />
        </div>
        <div class="mb-3">
          <label for="description" class="form-label"
            >Brief description of work :</label
          >
          <textarea
            class="form-control descriptionInput"
            id="description"
            type="text"
            rows="3"
            required
            name="description"
          ></textarea>
        </div>
        <p class="contantFormHeader2">If you aren't already a creator...</p>
        <div class="row">
          <div class="mb-3 col">
            <label for="profileLink" class="form-label"
              >Link to profile picture</label
            >
            <input
            type="text"
            class="form-control profileInput"
            id="profileLink"
            name="profileLink"
            placeholder="E.G link to google drive file"
            />
          </div>
          <div class="mb-3 col">
            <label for="descriptionProfile" class="form-label"
              >Bio For Your Creator Profile :</label
            >
            <textarea
              class="form-control"
              type="text"
              id="descriptionProfile"
              name="descriptionProfile"
              rows="1"
            ></textarea>
          </div>
        </div>
        <button type="submit" name="submit" id="Submit" class="btn btn-dark btn-md btn-block">Submit</button>

        <br />
      </form>
      </feildset>

      <!-- Section two text -->
      <h1 class="contactRightHeader float-end h1 fw-bold">
        Promote Your Work With LITOutreach
      </h1>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <p class="contactRightParagraph float-end">
        Email us your work directly with the contact information bellow, or fill
        out the form to the left, and we'll get back to you about promoting your
        creations through LITOutreach
      </p>
    </div>

    <!-- Contact Footer -->
    <footer class="text-center text-white footer">
      <!-- Grid container -->
      <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg text-light m-1"
            href="https://docs.google.com/presentation/d/1peDqSZQdapvTjckcBKU4xv6EcPjQx3FB49fwnGLSV4k/edit#slide=id.g1277e2048df_0_10"
            role="button"
            ><i class="bi bi-facebook"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg text-light m-1"
            href="https://docs.google.com/presentation/d/1peDqSZQdapvTjckcBKU4xv6EcPjQx3FB49fwnGLSV4k/edit#slide=id.g1277e2048df_0_10"
            role="button"
            ><i class="bi bi-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-link btn-floating btn-lg text-light m-1"
            href="https://docs.google.com/presentation/d/1peDqSZQdapvTjckcBKU4xv6EcPjQx3FB49fwnGLSV4k/edit#slide=id.g1277e2048df_0_10"
            role="button"
            ><i class="bi bi-envelope-fill"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-light m-1"
            href="https://docs.google.com/presentation/d/1peDqSZQdapvTjckcBKU4xv6EcPjQx3FB49fwnGLSV4k/edit#slide=id.g1277e2048df_0_10"
            role="button"
            ><i class="bi bi-instagram"></i
          ></a>
        </section>
      </div>

      <!-- Copyright -->
      <div class="text-center text-light p-3 copyrightSectionFooter">
        © 2020 Copyright:
        <a
          class="text-light"
          href="file:///Users/danicakane/Downloads/Computer%20science%20website/home_index.html"
          >LITOutreach.com</a
        >
        <br />
        <br />
        <a
          class="text-center text-light p-3"
          href="https://www.freepik.com/vectors/old-library"
          >Old library vector created by upklyak - www.freepik.com</a
        >
        <br />
        <a
          class="text-center text-light p-3"
          href="https://www.freepik.com/vectors/art-room"
        >
          Art room vector created by upklyak - www.freepik.com
        </a>
        <br />
        <a
          class="text-center text-light p-3"
          href="https://www.freepik.com/vectors/website-theme"
        >
          Website theme vector created by pikisuperstar - www.freepik.com
        </a>
      </div>
    </footer>

    <!--link to Bootstrap JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <script src="index.js"></script>
  </body>
</html>
