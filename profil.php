<?php
    include "connect.php";
    include "update_database.php";

    $process_saved_recipe = mysqli_query($connection, "SELECT * FROM recipe_detail WHERE save=1") or die (mysqli_error($connection));
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>Masakuy - Profil</title>

    <!-- css -->
    <link rel="stylesheet" href="profil.css" />
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        font-family: "Poppins";
        font-weight: 600;
        font-style: normal;
      }
        
      a {text-decoration:none;}
    </style>

    <!-- Bootstrap Icon -->
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" 
    />
  </head>

  <body>
    <!-- Nav bar -->
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
              <a class="nav-link" href="index.php" style="color: white; font-size: 20px;">Recipe</a>
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

    <!-- Logout button -->
    <button
      type="button"
      class="btn-left btn-outline-primary"
      style="margin-top: 3%;">
      <i class="bi bi-door-open"></i>
      logout
    </button>

    <!-- Profil Edit -->
    <div class="container" id="profil-part" style="margin-top: 4%;">
      <div class="container-profil">
        <img class="circle-profil"
          src="assets/img/profil.png" alt="profil anda">
        <button class="change-profil" onclick="navigateToEdit()"><i class="bi bi-pencil"></i></button>
      </div>
      <div class="col" style="margin-top: 2.5%;">
        <h2>Masakuyy</h2>
        <h4>masakuyy@masak.com</h4>
      </div>
    </div>

    <script>
      function navigateToEdit() {
        // Change 'otherpage.html' to the URL of the page you want to navigate to
        window.location.href = 'edit-profil.php';
      }
      </script>

    <!-- Line Boundary -->
    <div class="line" style="margin-left: 5%; margin-right: 5%; margin-top: 4%;"></div>

    <!-- Saved Recipe -->
    <div class="SavedRecipe" style="margin-top: 1%; margin-left: 5%;">
      <h3>Saved Recipe <i class="bi bi-bookmark-fill"></i></h3>
      <?php
        while($data = mysqli_fetch_assoc($process_saved_recipe)){
      ?>
      <div class="row">
        <div class="col-6">
          <a href="saverecipe.php">
            <div class="card" style="width: 30rem; border-color: black; border-radius: 10px; padding: 5px;">
              <img src="<?php echo $data['photo'] ?>" class="card-img" alt=""/>
              <div class="card-img-overlay">
                <span style="margin-left: 90%; font-size: 30px;"><i class="bi bi-bookmark-fill" onclick=""></i></span>
              </div>
              <div class="card-body px-0">
                <div>
                  <span class="badge rounded-pill" style="background-color: #fb6d48; font-size: 15px; font-weight: 400; margin-right: 12.7rem"> <i class="bi bi-stopwatch" style="font-size: 18px"></i><?php echo $data['time']." minutes" ?></span>
                  <span class="badge rounded-pill" style="background-color: #fb6d48; font-size: 15px; font-weight: 400"> <i class="bi bi-person" style="font-size: 18px"></i><?php echo $data['serving']." servings" ?></span>
                </div>
                <p class="card-title" style="font-size: 20px; font-weight: 600"><?php echo $data['title_recipe'] ?></p>
              </div>
            </div>
          </a>
        </div>
      </div>
      
      <?php
        }
      ?>
      
    </div>

    <footer style="font-family: Poppins; background-color: #ffaf45;">
      <div class="container pb-3 " style="text-align:left">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-5 border-top pb-2" >
        <div class="col-5">
          <h3 style="font-weight: 600; ">Masakuy</h3>
          <p class="text-body-secondary fw-semibold" style="text-align: justify;" >Explore authentic and healthy recipes. Traditional and global food at the palm of your hand</p>
        </div>
    
        <div class="col-2 offset-2">
          <h4 style="font-weight: 600; ">Explore</h4>
          <ul class="nav flex-column fw-semibold">
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Recipe</a></li>
            <li class="nav-item mb-2"><a href="articles.html" class="nav-link p-0 text-body-secondary">Articles</a></li>
          </ul>
        </div>
    
        <div class="col-2">
          <h4 style="font-weight: 600; ">Information</h4>
          <ul class="nav flex-column fw-semibold">
            <li class="nav-item mb-2"><a href="terms_condition.html" class="nav-link p-0 text-body-secondary">Terms & Conditions</a></li>
            <li class="nav-item mb-2"><a href="faq.html" class="nav-link p-0 text-body-secondary">F&Q</a></li>
            <li class="nav-item mb-2"><a href="contact_us.html" class="nav-link p-0 text-body-secondary">Contact</a></li>
          </ul>
        </div>
    
        <div class="col-2">
          <h4 style="font-weight: 600; ">Find Us On</h4>
          <div class="row" style="font-size: 40px">
            <div class="col-3">
                <a href="https://www.whatsapp.com" class="text-black" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="https://www.instagram.com" class="text-black" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-2">
                <a href="https://www.twitter.com" class="text-black" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
          </div>
        </div>

      </div>
      <p class="text-center">© 2024 Masakuy</p>
      </div>
      </footer>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html>