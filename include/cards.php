<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="../images/logo.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PlayVerse</title>
  <link rel="stylesheet" href="../public/style.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://kit.fontawesome.com/91c32085df.js"
    crossorigin="anonymous"></script>
</head>

<body>
<div class="container p-4">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/amongus1.webp"class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Join the Ultimate Gaming Showdown!</h5>
            <p>Enter the arena of top-tier tournaments. Battle it out in your favorite games and rise to the top of the leaderboard. Are you ready to prove your skills?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/freefire1.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5 class="text-black">Win Big, Play Bigger!</h5>
            <p  class="text-black">From cash rewards to exclusive in-game items, our tournaments offer incredible prizes for the best players. Do you have what it takes to win?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/roadrash1.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Road-Rash</h5>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quod a autem, ratione accusamus consequuntur enim eveniet atque rem dicta dolorum explicabo officia, similique delectus. Voluptas quaerat dicta sapiente ab?</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

    <div class="container">
      <div class="row p-2 mt-4 mb-4">
      <div class="col my-3">
           <div class="card bg-dark">
            <div class="card__img">
            <img src="../images/freefire2.webp" alt="img" class = "w-100">
            </div>
            <div class="card__title text-light">Free Fire</div>
            <div class="card__subtitle my-3 text-light">Action-packed battle royale shooter</div>
            <div class="card__wrapper">
              <button class="btn btn-outline-primary m-2 mx-3" id="create">Create Room</button>
              <button class="btn btn-outline-success m-2 mx-3" id="join">Join Room</button>
            </div>
          </div>
        </div>
        <div class="col my-3">
           <div class="card bg-dark">
            <div class="card__img">
            <img src="../images/amongus.webp" alt="img" class = "w-100">
            </div>
            <div class="card__title text-light">Among Us</div>
            <div class="card__subtitle my-3 text-light">Social deduction game in space</div>
            <div class="card__wrapper">
              <button class="btn btn-outline-primary m-2 mx-3" id="create">Create Room</button>
              <button class="btn btn-outline-success m-2 mx-3" id="join">Join Room</button>
            </div>
          </div>
        </div>
        <div class="col my-3">
           <div class="card bg-dark">
            <div class="card__img">
              <img src="../images/roadrash.webp" alt="img" class = "w-100">
            </div>
            <div class="card__title text-light">Road Rash</div>
            <div class="card__subtitle my-3 text-light">Deceptive multiplayer game in space</div>
            <div class="card__wrapper">
              <button class="btn btn-outline-primary m-2 mx-3" id="create">Create Room</button>
              <button class="btn btn-outline-success m-2 mx-3" id="join">Join Room</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="container">
      <div class="alert alert-primary text-danger-emphasis" role="alert">
        Know More About <a href="OurTeam.php">Our Team</a>
      </div>
    </div>
    <script src = "../public/script.js"></script>
</body>
</html>