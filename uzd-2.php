<!-- 2. Užduotis
Sukurkite tinklapį kuris suskaičiuotų, kiek duotas skaičius a turi lyginių ir nelyginių skaitmenų. Kai a = 63258, tai lyginių 3, nelyginių 2 -->

<?php  

 $out=''; // jei neuždėtume, mestų error kad nepriskirtas
 // kintamasis išvedant duomenis
 // isset - nes form action ""
// $a=123;
// $b=floor($a / 10);
// echo $b;

 $lyginis=0;
 $nelyginis=0;
 if (isset($_POST['skaicius']) &&  $_POST['skaicius']!=''   ){
    $skaicius=$_POST['skaicius'];
    $dalmuo=$skaicius;
    while ($dalmuo > 0){
       $liekana=$dalmuo % 10;
       if ($liekana % 2 == 0){
       ++$lyginis;
       }
       else{
        ++$nelyginis;
       }
       $dalmuo=floor($dalmuo / 10);
    }

    $out="Įvestas skaičius $skaicius turi $lyginis lyginių ir $nelyginis nelyginų skaitmenų.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Algos didinimas, initial-scale=1.0">
    <title>Antra užduotis</title>
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

        <div class="container">
            <div class="d-flex justify-content-center mt-4 mb-4">
                <h1>Antroji užduotis</h1>
            </div>
            <div class="d-flex justify-content-center ps-5 pe-5">
                <p>Sukurkite tinklapį kuris suskaičiuotų, kiek duotas skaičius a turi lyginių ir nelyginių skaitmenų. Kai a = 63258, tai lyginių 3, nelyginių 2</p>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <!-- Formos pradžia -->
                <form action="" method="post">
                    <div class="ps-5 pb-3">
                        <input type="text" name="skaicius" placeholder="Įvedamas skaičius" value="<?=isset($_POST['skaicius'])?$_POST['skaicius']:''?>">
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

</body>
</html>