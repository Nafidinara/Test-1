<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test Programmer</title>
</head>
<body>
    <h1>Soal praktek</h1>
    <h3>NOMOR.1</h3>
    <?php
    for($x=1;$x<=15;$x+=2){
        echo $x.',';
    }
    ?>
    <h3>NOMOR.2</h3>
    <?php
    $a = date('n-y-j',mktime(0,0,0,11,23,20));
    echo "<p>I. <strong>".$a."</strong></p>";
    ?>
    
    <?php
    $a = "2020-11-23";
    $b = date('n-y-j', strtotime('+60 month', strtotime($a)));
    echo "<p>II. <strong>".$b."</strong></p>";
    ?>

    <?php
    $lahir = "2002-07-25";
    $now = "2020-02-11";
    $biday = new DateTime($lahir);
    $skr = new DateTime($now);
    
    $diff = $skr->diff($biday);
    
    $tahun = $diff->y;
    $bulan = $diff->m;
    $hari = $diff->d;

    echo "<p>III. <strong>umur saya adalah : ".$tahun." tahun ".$bulan." bulan ".$hari." hari.</strong></p>";
    ?>

<h3>NOMOR.3</h3>
    <p>I, II, dan III</p>
    <?php
$angka = array(20, 10, 100, 30, 15,5);
array_push ($angka, 120);
array_splice ($angka, 1,1);
sort($angka);
$arrlength = count($angka);
echo '<table border=1>';
echo '<tr><td>no</td><td>Angka</td></tr>';
$no=1;
for($x = 0; $x < $arrlength; $x++) {
	echo '<tr>';
    echo '<td>' . $no++ . '</td><td>' .$angka[$x] . '</td>';
}
echo '</table>';
?>

<h3>NOMOR.4</h3>
<?php
$kata = ['Aku', 'Suka', 'Makan', 'Nasi', 'Padang'];
$rev = array_reverse($kata);
$arrlength = count($kata);

$a = [];
$b = [];
for($i = 0; $i<$arrlength; $i++){
    $a[$i] = $kata[0];
    $b[$i] = $kata[4];
    for ($k = 1; $k <= $i; $k++){
       $a[$i] = $a[$i]." ".$kata[$k];
       $b[$i] = $b[$i]." ".$rev[$k];
    }
}

$c = array_merge($a, $b);
$jadi = json_encode($c);

echo "<p><strong>".$jadi."</strong></p>";
?>
</body>
</html>