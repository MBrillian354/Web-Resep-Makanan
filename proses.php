<!-- di video nama file ini adalah function.php -->
<?php
    function koneksi(){
        $hostname = "localhost";
        $userDatabase = "root";
        $passwordUser = "";
        $databaseName = "recipesave";

        $koneksi = mysqli_connect($hostname, $userDatabase, $passwordUser, $databaseName) or die (msqli_error());

        return $koneksi;
    }

    function ambilDataResep(){  //kalau di video namanya function getAllProducts, kayaknya gak bakal dipake
        $tabel_recipesDetail1 = mysqli_query(koneksi(), "SELECT * FROM recipe_detail") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail1)){
            $daftarResep[] = $row; //daftar resep = products
        }

        return $daftarResep;
    }

    function getRecipeByCategory($category, $ingredient){
        $tabel_recipesDetail2 = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = '$category' AND category_ingredient = '$ingredient'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail2)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
?>


<!-- coba tambahin statement if else -->