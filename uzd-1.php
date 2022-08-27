<!-- 1. Užduotis
Programuotojui moka a Eurų atlyginimą. Darbdavys pažadėjo kiekvieną mėnesį padidinti atlyginimą x Eurų. Sukurkite puslapį kuriame galėtumėme įvesti pradinį atlyginimą ir kiekvieno mėnesio padidinamą sumą. Suskaičiuokite ir išveskite po kiek mėnesių jo atlyginimas bus daugiau nei dvigubai didesnis. -->

<?php  

$pakeltas_atlyg=0;
$menesiai=0;

 $out=''; // jei neuždėtume, mestų error kad nepriskirtas
 // kintamasis išvedant duomenis
 if (isset($_POST['pradinis_atlyg']) &&  $_POST['pradinis_atlyg']!=''   ){
    $pradinis_atlyg=$_POST['pradinis_atlyg'];
    $pakelimas=$_POST['pakelimas'];
    
    $pakeltas_atlyg=$pradinis_atlyg;

    while ($pakeltas_atlyg < 2*$pradinis_atlyg){
        ++$menesiai;
    $pakeltas_atlyg=$pakeltas_atlyg+$pakelimas;
    }
    $out="Pradinis atlyginimas $pradinis_atlyg EUR; <br> 
    Pakėlimas kas mėnesį $pakelimas Eur; <br><br>
    Pakeltas atlyginimas 2x ir daugiau, t.y. $pakeltas_atlyg EUR pasieks per $menesiai mėnesių.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Algos didinimas, initial-scale=1.0">
    <title>Pirma užduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    <div class="">
        <div class="container">
            <div class="d-flex justify-content-center mt-4 mb-4">
                <h1>Pirmoji užduotis</h1>
            </div>
            <div class="d-flex justify-content-center ps-5 pe-5">
                <p>Programuotojui moka a Eurų atlyginimą. Darbdavys pažadėjo kiekvieną mėnesį padidinti atlyginimą x Eurų. Sukurkite puslapį kuriame galėtumėme įvesti pradinį atlyginimą ir kiekvieno mėnesio padidinamą sumą. Suskaičiuokite ir išveskite po kiek mėnesių jo atlyginimas bus daugiau nei dvigubai didesnis.</p>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <!-- Formos pradžia -->
                <form action="" method="post">
                    <div class="ps-5 pb-3">
                        <input type="text" name="pradinis_atlyg" placeholder="Pradinis atlyginimas (EUR)">
                    </div>
                    <div class="ps-5 pb-3">
                        <input type="text" name="pakelimas" placeholder="Pakėlimas  per mėnesį (EUR)">
                    </div>
                    <div class="ps-5 pb-3">
                        <button>Skaičiuoti</button>
                    </div>
                </form>
                <!-- Formos pabaiga -->
            </div>
            <hr>
            <!-- <?=(isset($out))?$out:''?> -->
            <div class="d-flex justify-content-center">
                <?=$out?>
            </div>
            <div class="float-end pt-3">
                <a href="nav.php"> Atgal </a>
            </div>
        </div>
    </div>
</body>

</html>