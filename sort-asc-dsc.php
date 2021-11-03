<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Array</title>
</head>
<body>

<form action="" method="post">

<h1>Membuat Sorting Ascending dan Descending</h1><p>
Masukkan angka yang diurutkan
<p>
<p>
<!-- inputan angka -->
<pre>
Data ke 1  : <input type="text" name="arr1">
Data ke 2  : <input type="text" name="arr2">
Data ke 3  : <input type="text" name="arr3">
Data ke 4  : <input type="text" name="arr4">
Data ke 5  : <input type="text" name="arr5">
Data ke 6  : <input type="text" name="arr6">
Data ke 7  : <input type="text" name="arr7">
Data ke 8  : <input type="text" name="arr8">
Data ke 9  : <input type="text" name="arr9">
Data ke 10 : <input type="text" name="arr10">

<!-- tombol input - masuk ke sini dulu untuk input/push array -->
<input type="submit" name="asc" value="Sortir Ascending">

<!-- tombol sortir -->
<input type="submit" name="desc" value="Sortir Descending">

</pre>
</body>
</html>



<?php

// ASCENDING
// push array
if (isset($_POST['asc'])) {
    $a = [];
    $data1 = $_POST['arr1'];
    $data2 = $_POST['arr2'];
    $data3 = $_POST['arr3'];
    $data4 = $_POST['arr4'];
    $data5 = $_POST['arr5'];
    $data6 = $_POST['arr6'];
    $data7 = $_POST['arr7'];
    $data8 = $_POST['arr8'];
    $data9 = $_POST['arr9'];
    $data10 = $_POST['arr10'];
    array_push($a,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10);


    // sortir asc
    $numbers = $a;
    sort($numbers);

    $arrlength = count($numbers);

    for($x = 0; $x < $arrlength; $x++) {
        var_dump($numbers[$x]);
        echo ", ";
    }
}




// DESCENDING
// push array
if (isset($_POST['desc'])) {
    $b = [];
    $dataa1 = $_POST['arr1'];
    $dataa2 = $_POST['arr2'];
    $dataa3 = $_POST['arr3'];
    $dataa4 = $_POST['arr4'];
    $dataa5 = $_POST['arr5'];
    $dataa6 = $_POST['arr6'];
    $dataa7 = $_POST['arr7'];
    $dataa8 = $_POST['arr8'];
    $dataa9 = $_POST['arr9'];
    $dataa10 = $_POST['arr10'];
    array_push($b,$dataa1,$dataa2,$dataa3,$dataa4,$dataa5,$dataa6,$dataa7,$dataa8,$dataa9,$dataa10);


    // sortir desc
    $numbers1 = $b;
    rsort($numbers1);

    $arrlength1 = count($numbers1);

    for($y = 0; $y < $arrlength1; $y++) {
        var_dump($numbers1[$y]);
        echo ", ";
    }


}



?>