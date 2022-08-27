<!-- 3. Užduotis
 Faile yra pateikiami skaičiai, temperatūrų nuoskaitos. Nuskaitykite iš failo duomenis ir suskaičiuokite: minimalią, maksimalią ir vidutinę temperatūras ir jas išveskite į ekraną.  Padarykite galimybę įkelti failą. -->

<?php
 $out=''; // reikalingas, kol neįvesti duomenys.

// Failo nuskaitymas
if (isset($_POST['upload'])) {
    move_uploaded_file(
        $_FILES['failas']['tmp_name'],
        'C:/xampp/htdocs/php/pask-4-nd/' . $_FILES['failas']['name']
    );

    $failas = 'C:/xampp/htdocs/php/pask-4-nd/'.$_FILES['failas']['name'];
    $f=fopen($failas, "r");
    
// Failo nuskaitymo pabaiga
    $arr = array();
    $suma = 0;
    $vid = 0; 

    while ($eilute = fgets($f)) {  //fgets - nuskaito viena eilute
       array_push($arr, $eilute);
    }

    $visosTemp = array_sum($arr);
    $nuoskaitos = count($arr);
    
    $vid = round(($visosTemp / $nuoskaitos), 1);

    sort($arr);
    $min = implode(", ", array_slice($arr, 0, 1));
    $max = implode(", ", array_slice($arr, $nuoskaitos - 1, 1));
    $out = ''; // jei neuždėtume, mestų error kad nepriskirtas

    $out = "Minimali temperatūra yra $min C<br>
           Maksimali temperatūra yra $max C<br>
           Vidutinė temperatūra yra $vid C";
   
    fclose($f);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Algos didinimas, initial-scale=1.0">
    <title>Trečioji užduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
    // include ("nav.php")  
    // naudojam puslapyja tam paciam, virsuj-apacioj
    // dar yra 
    /* 
      include_once - naudojam bibliotekom
      require
      require_once - naudojam bibliotekom
      */

    ?>

    <div class="container">
        <div class="d-flex justify-content-center mt-4 mb-4">
            <h1>Trečioji užduotis</h1>
        </div>
        <div class="d-flex justify-content-center ps-5 pe-5">
            <p>Faile yra pateikiami skaičiai, temperatūrų nuoskaitos. Nuskaitykite iš failo duomenis ir
                suskaičiuokite: minimalią, maksimalią ir vidutinę temperatūras ir jas išveskite į ekraną.
                Padarykite galimybę įkelti failą.</p>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <!-- Formos pradžia -->
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="ps-5 pb-3">
                    <input type="hidden" name="upload" value="1">
                    <input type="file" name="failas">
                    <button>Išsiųsti</button>
                </div>
            </form>
            <!-- Formos pabaiga -->
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <?= $out ?>
        </div>
        <div class="float-end pt-3 pe-5">
            <a href="nav.php"> Atgal </a>
        </div>
    </div>

</body>

</html>