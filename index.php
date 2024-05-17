<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masakuy</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- css -->
    <link rel="stylesheet" href="index.css" />
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
    <?php if (isset($user)): ?>
        <?php
        include "proses.php"?>
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
              <a class="nav-link active" aria-current="page" href="#" style="font-size: 20px">Recipe</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="articles.html" style="color: white; font-size: 20px">Article</a>
            </li>
          </ul>
          <div class="dropdown" style="width: 71%">
            <a class="btn text-white fw-semibold" style="font-size: 20px; border: none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span style="margin-right: 0.5vw">Category</span>
              <span><i class="bi bi-caret-down-fill" style="font-size: 20px"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="Breakfast">Breakfast</a>
                <ul>
                  <li><a id="ingredient" style="color: white" value="Meat">Meat</a></li>
                  <li><a id="ingredient" style="color: white" value="Seafood">Seafood</a></li>
                  <li><a id="ingredient" style="color: white" value="Mushroom">Mushroom</a></li>
                  <li><a id="ingredient" style="color: white" value="Vegetables">Vegetables</a></li>
                  <li><a id="ingredient" style="color: white" value="Egg">Egg</a></li>
                  <li><a id="ingredient" style="color: white" value="Noodles">Noodles</a></li>
                  <li><a id="ingredient" style="color: white" value="Tofu">Tofu</a></li>
                  <li><a id="ingredient" style="color: white" value="Chicken">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="Lunch">Lunch</a>
                <ul>
                  <li><a style="color: white" id="ingredient" value="Meat">Meat</a></li>
                  <li><a style="color: white" id="ingredient" value="Seafood">Seafood</a></li>
                  <li><a style="color: white" id="ingredient" value="Mushroom">Mushroom</a></li>
                  <li><a style="color: white" id="ingredient" value="Vegetables">Vegetables</a></li>
                  <li><a style="color: white" id="ingredient" value="Egg">Egg</a></li>
                  <li><a style="color: white" id="ingredient" value="Noodles">Noodles</a></li>
                  <li><a style="color: white" id="ingredient" value="Tofu">Tofu</a></li>
                  <li><a style="color: white" id="ingredient" value="Chicken">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="Dinner">Dinner</a>
                <ul>
                  <li><a style="color: white" id="ingredient" value="Meat">Meat</a></li>
                  <li><a style="color: white" id="ingredient" value="Seafood">Seafood</a></li>
                  <li><a style="color: white" id="ingredient" value="Mushroom">Mushroom</a></li>
                  <li><a style="color: white" id="ingredient" value="Vegetables">Vegetables</a></li>
                  <li><a style="color: white" id="ingredient" value="Egg">Egg</a></li>
                  <li><a style="color: white" id="ingredient" value="Noodles">Noodles</a></li>
                  <li><a style="color: white" id="ingredient" value="Tofu">Tofu</a></li>
                  <li><a style="color: white" id="ingredient" value="Chicken">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="Dessert">Dessert</a>
                <ul>
                  <li><a style="color: white" id="ingredient" value="Milk">Milk</a></li>
                  <li><a style="color: white" id="ingredient" value="Fruit">Fruit</a></li>
                  <li><a style="color: white" id="ingredient" value="Chocolate">Chocolate</a></li>
                  <li><a style="color: white" id="ingredient" value="Jelly">Jelly</a></li>
                  <li><a style="color: white" id="ingredient" value="Yogurt">Yogurt</a></li>
                  <li><a style="color: white" id="ingredient" value="Biscuit">Biscuit</a></li>
                  <li><a style="color: white" id="ingredient" value="Cheese">Cheese</a></li>
                  <li><a style="color: white" id="ingredient" value="Flour">Flour</a></li>
                </ul>
              </li>
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="Snack">Snack</a>
                <ul>
                  <li><a style="color: white" id="ingredient" value="Meat">Meat</a></li>
                  <li><a style="color: white" id="ingredient" value="Seafood">Seafood</a></li>
                  <li><a style="color: white" id="ingredient" value="Mushroom">Mushroom</a></li>
                  <li><a style="color: white" id="ingredient" value="Vegetables">Vegetables</a></li>
                  <li><a style="color: white" id="ingredient" value="Egg">Egg</a></li>
                  <li><a style="color: white" id="ingredient" value="Noodles">Noodles</a></li>
                  <li><a style="color: white" id="ingredient" value="Tofu">Tofu</a></li>
                  <li><a style="color: white" id="ingredient" value="Chicken">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="Local">Traditional Food</a>
                <ul>
                  <li><a style="color: white" id="ingredient" value="Meat">Meat</a></li>
                  <li><a style="color: white" id="ingredient" value="Seafood">Seafood</a></li>
                  <li><a style="color: white" id="ingredient" value="Mushroom">Mushroom</a></li>
                  <li><a style="color: white" id="ingredient" value="Vegetables">Vegetables</a></li>
                  <li><a style="color: white" id="ingredient" value="Egg">Egg</a></li>
                  <li><a style="color: white" id="ingredient" value="Noodles">Noodles</a></li>
                  <li><a style="color: white" id="ingredient" value="Tofu">Tofu</a></li>
                  <li><a style="color: white" id="ingredient" value="Chicken">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a style="color: white" class="dropdown-item" id="category" value="International">International Food</a>
                <ul>
                  <li><a style="color: white" id="ingredient" value="Meat">Meat</a></li>
                  <li><a style="color: white" id="ingredient" value="Seafood">Seafood</a></li>
                  <li><a style="color: white" id="ingredient" value="Mushroom">Mushroom</a></li>
                  <li><a style="color: white" id="ingredient" value="Vegetables">Vegetables</a></li>
                  <li><a style="color: white" id="ingredient" value="Egg">Egg</a></li>
                  <li><a style="color: white" id="ingredient" value="Noodles">Noodles</a></li>
                  <li><a style="color: white" id="ingredient" value="Tofu">Tofu</a></li>
                  <li><a style="color: white" id="ingredient" value="Chicken">Chicken Meat</a></li>
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

    <!-- jumbotron -->
    <div class="card text-bg-dark" style="border-radius: 0px">
      <img src="assets/img/jumbotron.jpg" class="card-img" alt="" style="border-radius: 0px; height: 15rem" />
      <span class="efek"></span>
      <div class="card-img-overlay text-center mt-5">
        <h1 class="card-title" style="font-weight: 700">Recipe</h1>
        <h3 class="card-text">Collection of recipes ranging from traditional dishes to modern culinary creations</h3>
      </div>
    </div>

    <!-- konten -->
    <div class="container" style="margin-bottom: 6vh"></div>

    <div class="container-fluid me-5 ps-4">
      <p style="font-size: 30px; font-weight: 600">Recipe</p>
      <div class="row mb-3">

      <?php
          $daftarResep = ambilDataResep();
          foreach ($daftarResep as $resep){
            ?>

            <div class="col-4 mb-5">
              <div class="card" style="width: 25.8rem; border: none">
                <img src="<?php echo $resep ['photo'] ?>" class="card-img-top" alt="" style="border-style: solid; border-radius: 15px; border-width: 2px; height: 12rem;"/> <!-- ambil gambar dari database -->
                <div class="card-body px-0 py-1">
                  <div class="d-flex justify-content-between">
                    <span class="badge rounded-pill" style="background-color: #FB6D48; font-size: 15px; font-weight: 400;">
                      <i class="bi bi-stopwatch" style="font-size: 20px;"></i> <?php echo $resep ['time'] ?> minutes<!-- ambil kolom dari tabel -->
                    </span>
                    <span class="badge rounded-pill" style="background-color: #FB6D48; font-size: 15px; font-weight: 400;">
                      <i class="bi bi-person" style="font-size: 20px;"></i> <?php echo $resep ['serving'] ?> servings<!-- ambil kolom dari tabel -->
                    </span>
                  </div>
                  <a href="saverecipe.php?recipe_id=<?php echo $resep['recipe_id']; ?>" class="card-title stretched-link" style="font-size: 20px; font-weight: 600;"><?php echo $resep ['title_recipe'] ?></a>
                </div>
              </div>
            </div>

            <?php
          }
      ?>    
      </div>
    </div>

    <script>
      // di video nama filenya adalah script.js
      let category = document.querySelector("#category");
      let ingredient = document.querySelector("#ingredient");
      let container = document.querySelector(".mb-3");

      category.addEventListener("change", function(){
          let foodCategory = this.value;
          let selectedIngredient = ingredient.value;

          let http = new XMLHttpRequest();

          http.onload = function(){
              if(this.readyState == 4 && this.status == 200){
                  let response = JSON.parse(this.responseText);
                  let out = "";
                  for(let item of response){
                      out += `
                          <div class="col-4 mb-5">
                              <div class="card" style="width: 25.8rem; border: none">
                                  <img src="${item.photo}" class="card-img-top" alt="" style="border-style: solid; border-radius: 15px; border-width: 2px; height: 12rem;"/> <!-- ambil gambar dari database -->
                                  <div class="card-body px-0 py-1">
                                      <div class="d-flex justify-content-between">
                                          <span class="badge rounded-pill" style="background-color: #FB6D48; font-size: 15px; font-weight: 400;">
                                              <i class="bi bi-stopwatch" style="font-size: 20px;"></i> ${item.time} minutes<!-- ambil kolom dari tabel -->
                                          </span>
                                          <span class="badge rounded-pill" style="background-color: #FB6D48; font-size: 15px; font-weight: 400;">
                                              <i class="bi bi-person" style="font-size: 20px;"></i> ${item.serving} servings<!-- ambil kolom dari tabel -->
                                          </span>
                                      </div>
                                      <a href="saverecipe.html" class="card-title stretched-link" style="font-size: 20px; font-weight: 600;">${item.title_recipe}</a><!-- ambil kolom dari tabel -->
                                  </div>
                              </div>
                          </div>
                      `;
                  }
                  container.innerHTML = out;
              }
          }

          http.open('POST', "script.php");
          http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
          http.send("category="+foodCategory+"&ingredient="+selectedIngredient);
      });

      // tonton video di menit 7.59
    </script>




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
      
     <script>
        function isLoggedIn() {
            return true;
        }

        window.onload = function() {
            var loginStatus = isLoggedIn();
            var navbarEnd = document.querySelector('.d-flex.justify-content-end.me-4.pe-2');

            if (loginStatus) {
            navbarEnd.innerHTML = '<a/> <img href="profil.php" src="assets/img/profil.png" style="width: 12%;float:right;" /> </a>';
            } else {
            navbarEnd.innerHTML = '<a href="login.html" role="button" class="btn fs-5 btn-outline-light" style="background-color: #ffaf45; color: #ffffff;" style="text-decoration:none;">Sign In</a>';            
            }
        }
    </script>
</html>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>