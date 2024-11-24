<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <section id="header">
    <div >

        <nav id="navbar">
         <img src="CULOGO.png" alt="Logo" id="logo">
         
          <a id="space" href="#About">About</a>
          <!-- <a href="event.php" id="events-link">Events</a> -->
          <a  href="event.php">Events</a>

          <a href="speakers.php">Speakers</a>

          <a href="#">Teams</a>
          <a href="#">Tests</a>
          <a href="#contact">Contact Us</a>
            <button class="btn btn-primary" id="joinbutton">Join</button>
            <a href="logout.php" class="btn btn-warning">Logout</a>
            
     
        </nav>
    </div>
    <div id="text" class="container">

        <h4>A COMMUNITY OF CENTURIONS</h4>
        <h1>
        CONNECT AND LEARN FROM EXPERINCE 
        </h1>

        <div id="btns">
        <button class="btn btn-success" id="btn">Join us</button>
        <button class="btn btn-primary" id="btn">Events</button>
</div>


    </div>

   </section>

 <!-- About Section  -->

<section id="About" class="py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
          <img class="img-fluid" loading="lazy" src="CULOGO.png" id="abtimg" alt="">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h2 id="Abt" class="h1 mb-3">Who Are We?</h2>
              <p id="Abt" class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>
              <p id="Abt" class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p>
              <div class="row gy-4 gy-md-0 gx-xxl-5X">
                <div class="col-12 col-md-6">
                  <div class="d-flex">
                    <div class="me-4 text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                      </svg>
                    </div>
                    <div>
                      <h4 id="Abt" class="mb-3">Versatile Brand</h4>
                      <p id="Abt" class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex">
                    <div class="me-4 text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                      </svg>
                    </div>
                    <div>
                      <h4 id="Abt" class="mb-3">Digital Agency</h4>
                      <p id="Abt" class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Our clients  -->

 <!--====== CLIENT LOGO PART START ======-->
<section id="clients" class="client-logo-area client-logo-one">
    <!--======  Start Section Title Two ======-->
    <div class="section-title-two">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="content">
                   <span style="color: white;"> Our Partners </span>
                   <h2 style="color: white;" class="fw-bold">Our Awesome Clients</h2>
                   <p style="color: white;">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                      eiusmod tempor incididunt ut labore aliqua.
                   </p>
                </div>
             </div>
          </div>
       </div>
       <!-- container -->
    </div>
    <!--====== End Section Title Two ======-->
    <div class="container">
       <div class="row">
          <div class="col-md-3 col-6">
             <div class="single-client text-center">
                <img src="https://cdn.ayroui.com/1.0/images/client-logo/graygrids.svg" alt="Logo" />
             </div>
             <!-- single client -->
          </div>
          <div class="col-md-3 col-6">
             <div class="single-client text-center">
                <img src="https://cdn.ayroui.com/1.0/images/client-logo/uideck.svg" alt="Logo" />
             </div>
             <!-- single client -->
          </div>
          <div class="col-md-3 col-6">
             <div class="single-client text-center">
                <img src="https://cdn.ayroui.com/1.0/images/client-logo/ayroui.svg" alt="Logo" />
             </div>
             <!-- single client -->
          </div>
          <div class="col-md-3 col-6">
             <div class="single-client text-center">
                <img src="https://cdn.ayroui.com/1.0/images/client-logo/lineicons.svg" alt="Logo" />
             </div>
             <!-- single client -->
          </div>
       </div>
       <!-- row -->
    </div>
    <!-- container -->
 </section>
 <!--====== CLIENT LOGO PART ENDS ======-->



  <!-- Testinomal -->

  <!-- Carousel wrapper -->
<div id="carouselMultiItemExample" data-mdb-carousel-init class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button class="carousel-control-prev position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span style="color: white;" class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span  style="color: white;" class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
              style="width: 150px;" />
            <h5 style="color: white;" class="mb-3">Anna Deynah</h5>
            <p style="color: white;">UX Designer</p>
            <p style="color: white;" >
              <i class="fas fa-quote-left pe-2" ></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;" >John Doe</h5>
            <p style="color: white;">Web Developer</p>
            <p style="color: white;" >
              <i  class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;">Maria Kate</h5>
            <p style="color: white;">Photographer</p>
            <p style="color: white;" >
              <i class="fas fa-quote-left pe-2" style="color: white;"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p style="color: white;" >UX Designer</p>
            <p  style="color: white;" >
              <i class="fas fa-quote-left pe-2" style="color: white;"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;">Alex Rey</h5>
            <p style="color: white;">Web Developer</p>
            <p  style="color: white;">
              <i style="color: white;" class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(5).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;">Maria Kate</h5>
            <p style="color: white;">Photographer</p>
            <p  style="color: white;">
              <i style="color: white;" class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(6).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;">Anna Deynah</h5>
            <p style="color: white;">UX Designer</p>
            <p  style="color: white;">
              <i style="color: white;" class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;">John Doe</h5>
            <p style="color: white;">Web Developer</p>
            <p class="text-muted" style="color: white;">
              <i style="color: white;" class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3" style="color: white;">Maria Kate</h5>
            <p style="color: white;">Photographer</p>
            <p class="text-muted" style="color: white;">
              <i style="color: white;" class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->





<!-- Contact page  -->

<section id="contact">
  <div class="container-fluid px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-sm-6 d-none d-sm-block bg-image"></div>
              <div class="col-sm-6 p-4">
                <div class="text-center">
                  <div class="h3 fw-light" style="color: white;">Contact Form</div>
                  <p class="mb-4 " style="color: white;">Split layout contact form</p>
                </div>
  
                <!-- * * * * * * * * * * * * * *
            // * * SB Forms Contact Form * *
            // * * * * * * * * * * * * * * *
  
            // This form is pre-integrated with SB Forms.
            // To make this form functional, sign up at
            // https://startbootstrap.com/solution/contact-forms
            // to get an API token!
            -->
  
                <form id="contactForm">
  
                  <!-- Name Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                    <label for="name" style="color: white;">Name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required" style="color: white;">Name is required.</div>
                  </div>
  
                  <!-- Email Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                    <label for="emailAddress" style="color: white;">Email Address</label>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required" style="color: rgb(44, 10, 10);">Email Address is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email" style="color: white;">Email Address Email is not valid.</div>
                  </div>
  
                  <!-- Message Input -->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                  </div>
  
                  <!-- Submit success message -->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                      <p>To activate this form, sign up at</p>
                      <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                  </div>
  
                  <!-- Submit error message -->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                  </div>
  
                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                  </div>
                </form>
                <!-- End of contact form -->
  
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

    

<script>
    // JavaScript to redirect to login.php when Join button is clicked
    document.getElementById("joinbutton").addEventListener("click", function() {
        window.location.href = "login.php";
    });




    document.getElementById("events-link").addEventListener("click", function() {
        window.location.href = "event.php";
    });
</script>






</body>
</html>