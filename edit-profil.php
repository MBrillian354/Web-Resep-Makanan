<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masakuy</title>
    <!-- css -->
    <link rel="stylesheet" href="edit-profil.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <style>
      body {
        font-family: "Poppins";
        font-weight: 600;
        font-style: normal;
      }
        
      a {text-decoration:none;}
    </style>
  </head>
  <body>
    <nav id="navbar" class="navbar navbar-expand-lg" style="background-color: #ffaf45; padding: 1% 0.5%">
      <div class="container-fluid" style="margin-left: 0%">
        <a class="navbar-brand" href="recipeUnfiltered.html" style="width: 7%">
          <img src="assets/img/iconPutih.png" alt="" style="width: 100%; height: 100%" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item me-2">
              <a class="nav-link" href="#" style="color: white; font-size: 20px">Recipe</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#" style="color: white; font-size: 20px">Article</a>
            </li>
          </ul>
          <div class="dropdown" style="width: 71%">
            <a class="btn text-white fw-semibold" style="font-size: 20px; border: none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span style="margin-right: 0.5vw">Category</span>
              <span><i class="bi bi-caret-down-fill" style="font-size: 20px"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#">Breakfast</a>
                <ul>
                  <li><a href="">Meat</a></li>
                  <li><a href="">Seafood</a></li>
                  <li><a href="">Mushroom</a></li>
                  <li><a href="">Vegetables</a></li>
                  <li><a href="">Egg</a></li>
                  <li><a href="">Noodles</a></li>
                  <li><a href="">Tofu</a></li>
                  <li><a href="">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">Lunch</a>
                <ul>
                  <li><a href="">Meat</a></li>
                  <li><a href="">Seafood</a></li>
                  <li><a href="">Mushroom</a></li>
                  <li><a href="">Vegetables</a></li>
                  <li><a href="">Egg</a></li>
                  <li><a href="">Noodles</a></li>
                  <li><a href="">Tofu</a></li>
                  <li><a href="">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">Dinner</a>
                <ul>
                  <li><a href="">Meat</a></li>
                  <li><a href="">Seafood</a></li>
                  <li><a href="">Mushroom</a></li>
                  <li><a href="">Vegetables</a></li>
                  <li><a href="">Egg</a></li>
                  <li><a href="">Noodles</a></li>
                  <li><a href="">Tofu</a></li>
                  <li><a href="">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">Dessert</a>
                <ul>
                  <li><a href="">Milk</a></li>
                  <li><a href="">Fruit</a></li>
                  <li><a href="">Chocolate</a></li>
                  <li><a href="">Jelly</a></li>
                  <li><a href="">Yogurt</a></li>
                  <li><a href="">Biscuit</a></li>
                  <li><a href="">Cheese</a></li>
                  <li><a href="">Flour</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">Snack</a>
                <ul>
                  <li><a href="">Meat</a></li>
                  <li><a href="">Seafood</a></li>
                  <li><a href="">Mushroom</a></li>
                  <li><a href="">Vegetables</a></li>
                  <li><a href="">Egg</a></li>
                  <li><a href="">Noodles</a></li>
                  <li><a href="">Tofu</a></li>
                  <li><a href="">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">Traditional Food</a>
                <ul>
                  <li><a href="">Meat</a></li>
                  <li><a href="">Seafood</a></li>
                  <li><a href="">Mushroom</a></li>
                  <li><a href="">Vegetables</a></li>
                  <li><a href="">Egg</a></li>
                  <li><a href="">Noodles</a></li>
                  <li><a href="">Tofu</a></li>
                  <li><a href="">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">International Food</a>
                <ul>
                  <li><a href="">Meat</a></li>
                  <li><a href="">Seafood</a></li>
                  <li><a href="">Mushroom</a></li>
                  <li><a href="">Vegetables</a></li>
                  <li><a href="">Egg</a></li>
                  <li><a href="">Noodles</a></li>
                  <li><a href="">Tofu</a></li>
                  <li><a href="">Chicken Meat</a></li>
                </ul>
              </li>
            </ul>
          </div>
            
      </div>
        <a href="profil.php" class="d-flex justify-content-end me-4 pe-2">
          <img src="assets/img/profil.png" alt="" style="width: 13%; height: 13%" />
        </a>
          
      </div>
    </nav>

    <div class="row" style="margin-top: 2rem; margin-bottom: 3rem;">
        <div class="container col-3" style="align-items: center;">
            <img class="circle-profil"
                src="assets/img/profil.png" alt="profil anda">
            <button class="btn shadow d-block" style="color: black; margin-top: 2rem; font-weight: 800; border-color: #ffaf45; border-width: 3px;">Change Profil<i class="bi bi-pencil" style="margin: 0.5rem;"></i></button>
        </div>
        <div class="container col-7">
          <form class="col" method="get post" style="width: auto;">
            <div class="mb-3">
              <label for="name" style="font-size: 12pt;">Name</label>
              <input class="form-control" type="text" name="name" value="Rivandi Ignasius" style="width: 800px; background-color: transparent; border: black; border-radius: 3px; margin-top: 2em;"></div>
            <div class="mb-3">
              <label for="email" style="font-size: 12pt;">Email</label>
              <input class="form-control" type="email" name="email" value="rivandi@gmail.com" style="width: 800px; background-color: transparent; border: black; border-radius: 3px; margin-top: 3em;"></div>
            <div class="mb-4">
              <label for="password" style="font-size: 12pt;">Password</label>
              <input class="form-control" type="password" name="password" value="*****" style="width: 800px; background-color: transparent; border: black; border-radius: 3px; margin-top: 3em;"></div>
            <div class="row" style="align-items: end;">
              <button class="btn shadow w-100" type="button" style="width: 100px; color: black; background-color: white; border-color: black; border-radius: 3px; font-weight: 800; visibility: hidden;">Cancel</button>
              <button class="btn shadow w-100" type="submit" style="width: 100px; color: black; background-color: #ffaf45; font-weight: 800;">Saved Changes</button>
            </div>
          </form>
        </div>
    </div>

    <footer class="text-black pt-4 pb-4" style="background-color: #ffaf45;">
      <div class="container-fluid text-center">
        <div class="row text-center ps-2 pe-4">
          <div class="col-3 d-flex justify-content-start" style="font-size: 25px;">Masakuy</div>
          <div
            class="col-6 d-flex justify-content-evenly"
            style="padding-top: 0.5rem;"
          >
            <a
              href="#"
              class="link-offset-2 link-underline link-underline-opacity-0 text-black"
              >Home</a
            >
            <a
              href="#"
              class="link-offset-2 link-underline link-underline-opacity-0 text-black"
              >Recipe</a
            >
            <a
              href="articles.html"
              class="link-offset-2 link-underline link-underline-opacity-0 text-black"
              >Article</a
            >
          </div>
          <div class="col-3 d-flex justify-content-end">
            <i
              class="bi bi-whatsapp"
              style="font-size: 28px; margin-right: 10px"
            ></i>
            <i
              class="bi bi-instagram"
              style="font-size: 28px; margin-right: 10px"
            ></i>
            <i
              class="bi bi-twitter-x"
              style="font-size: 28px; margin-right: 10px"
            ></i>
          </div>
        </div>
      </div>
    </footer>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>