<?php
    include "connect.php";
    //include "showrecipe.php";
    include "update_database.php";

    //$process = mysqli_query($connection, "SELECT * FROM recipe_detail") or die (mysqli_error($connection));

    // Check if recipe_id is set in the URL
    if (isset($_GET['recipe_id'])) {
      $recipe_id =  $_GET['recipe_id'];

      // Fetch recipe details using prepared statement (recommended)
      $stmt = mysqli_prepare($connection, "SELECT * FROM recipe_detail WHERE recipe_id = ?");
      mysqli_stmt_bind_param($stmt, "s", $recipe_id);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      // Check if recipe exists
      if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
      
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width-device-width, initial-scale-1.0" />

    <!-- css -->
    <link rel="stylesheet" href="saverecipe-style.css" />

    <!--Bootstrap CSS and JS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!--jQuery-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!--Connect Bootstrap for Icon-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!--End Connect Bootstrap-->

    <!--<link rel="stylesheet" href="myborrow.css" />-->

    <!--Preconnect to Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: "Poppins";
        font-weight: 600;
        font-style: normal;
      }
    </style>

    <title>Save Recipe - Masakuy</title>
  </head>
  <body>
    <!--Navbar-->
    <nav
      class="navbar navbar-expand-lg"
      style="background-color: #ffaf45; padding: 1% 0.5%"
    >
      <div class="container-fluid" style="margin-left: 0%">
        <a class="navbar-brand" href="recipeUnfiltered.html" style="width: 7%">
          <img
            src="assets/img/iconPutih.png"
            alt=""
            style="width: 100%; height: 100%"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item me-2">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                style="font-size: 20px"
                >Recipe</a
              >
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="articles.html" style="color: white; font-size: 20px"
                >Article</a
              >
            </li>
          </ul>
          <div class="dropdown" style="width: 71%">
            <a
              class="btn text-white fw-semibold"
              style="font-size: 20px; border: none"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <span style="margin-right: 0.5vw">Category</span>
              <span
                ><i class="bi bi-caret-down-fill" style="font-size: 20px"></i
              ></span>
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
          <img
            src="assets/img/profil.png"
            alt=""
            style="width: 13%; height: 13%"
          />
          <!-- <img src="assets/img/profil.png" alt="" style="width: 5vw; height: 10vh;"> -->
        </a>
      </div>
    </nav>
    <!--End navbar-->

    <!--#TODO-->

    <!--Start Recipe Title and Save Button-->
    <div class="container" id="main-save" style="margin-top: 2rem">
      <!--Back button-->
      <div style="margin-bottom: 1rem">
        <div class="btn-back">
          <a href="index.php"
            ><i class="bi bi-arrow-left" style="margin-right: 0.5rem"></i
            >Back</a
          >
        </div>
      </div>
      <!--End Back Button-->

      <div class="row">
        <div class="col">

          <img
            src="<?php echo $data['photo'] ?>"
            alt="Salad"
            width="90%"
            class="rounded"
          />
          
          <!--TO CHECK LATER-->
          <input type="hidden" id="recipeId" value="<?php echo $data['recipe_id']; ?>"/>
        </div>
        <div class="col">
          <strong>
            <h3 style="font-weight: 600">
              <?php echo $data ['title_recipe'] ?>
            </h3>
          </strong>

          <!--Alergens-->
          <!--class="row"-->
          <div class="container-alergens">
            <div class="contains">
              <span id="milk"><?php echo $data ['category_ingredient'] ?></span>
              <span id="local"><?php echo $data ['category'] ?></span>
            </div>
          </div>
          <!--End Alergens and Category-->

          <!--Servings and time-->
          <div class="row" style="margin-top: 1rem">
            <div class="col">
              <div
                class="container border border-dark rounded"
                id="serving-time"
                style="padding: 1rem"
              >
                <i class="bi bi-stopwatch" style="margin-right: 1rem"></i>
                <?php echo $data ['time'] ?>
                minutes
              </div>
            </div>

            <div class="col">
              <div
                class="container border border-dark rounded"
                id="servings"
                style="padding: 1rem"
              >
                <i class="bi bi-person" style="margin-right: 1rem"></i>
                <?php echo $data ['serving'] ?>
                servings
              </div>
            </div>
          </div>
          <!--End Servings and time-->

          <!--Button Save Recipe-->
          <button
            type="button"
            class="btnc btn-outline-primary"
            id="saveButton"
            style="margin-top: 2rem"
          >
            <i class="bi bi-bookmark" style="margin-right: 1rem"></i>
            <span class="btnc-text">Save Recipe</span>
          </button>
          <!--End Button-->

          <!--Script Save Button-->
          <script>

            let saveButton = document.getElementById("saveButton");

            saveButton.addEventListener("click" , ()=> {
              let icon = saveButton.querySelector("i");
              let buttonText = saveButton.querySelector("span");
              let recipe_id = document.getElementById("recipeId").value; //GET the recipe ID from hidden field

              if (icon.classList.contains("bi-bookmark")){
                //if the button is currently in "Save" state
                icon.classList.replace("bi-bookmark", "bi-bookmark-fill");
                buttonText.innerText = "Saved Recipe";
                //send AJAX request to update database value to 1
                updateDatabaseValue(1, recipe_id);
              } else {
                //if the button is currently in "Saved" state
                icon.classList.replace("bi-bookmark-fill", "bi-bookmark");
                buttonText.innerText = "Save Recipe";
                //send AJAX request to update database value to 0
                updateDatabaseValue(0, recipe_id);
              }

            });

            
            function updateDatabaseValue(value, recipe_id){
              //send AJAX request to update database value
              console.log("Updating database value to:", value);
              let xhr = new XMLHttpRequest();
              xhr.open("POST", "update_database.php", true);
              xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
              xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                    console.log("Database value updated successfully.");
                  } else {
                    console.error("Error updating database value.");
                  }
                }
              };
              xhr.send("value=" + value + "&recipe_id=" + recipe_id);
            }

            
          </script>
          <!--End Script Save Button-->
        </div>
      </div>

      <div class="row" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-4">
          <div
            class="container border border-dark rounded"
            id="ingredients"
            style="padding: 1rem"
          >
            <h4>Ingredients:</h4>
            <ul>
              <?php echo $data['ingredients'] ?>
            </ul>
          </div>
        </div>
        <div class="col-8">
          <div
            class="container border border-dark rounded"
            id="steps"
            style="padding: 1rem"
          >
            <h4>Steps:</h4>
            <ol>
              <?php echo $data['steps'] ?>
            </ol>

            <?php 
            
          } else {
            echo "Error: Recipe not found.";
            exit;
          }
    
          mysqli_stmt_close($stmt);
        } else {
          echo "Please select a recipe to view details.";
          exit;
        }
            
            ?>
          
          </div>
        </div>
      </div>
    </div>
    <!--End Recipe Title and Save Button-->

    <!--Footer-->
    <footer class="text-black pt-4 pb-4" style="background-color: #ffaf45">
      <div class="container-fluid text-center">
        <div class="row text-center ps-2 pe-4">
          <div
            class="col-3 d-flex justify-content-start"
            style="font-size: 25px"
          >
            Masakuy
          </div>
          <div
            class="col-6 d-flex justify-content-evenly"
            style="padding-top: 0.5rem"
          >
            <a
              href="index.php"
              class="link-offset-2 link-underline link-underline-opacity-0 text-black"
              >Home</a
            >
            <a
              href="index.php"
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
    <!--End Footer-->
  </body>
</html>
