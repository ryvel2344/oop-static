<?php

class Matematika {

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        if($b == 0){
            return "Tidak bisa bagi 0";
        }
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$hasil = "";

if(isset($_POST['hitung'])){
    $a = isset($_POST['a']) ? $_POST['a'] : 0;
    $b = isset($_POST['b']) ? $_POST['b'] : 0;
    $sisi = isset($_POST['sisi']) ? $_POST['sisi'] : 0;
    $operasi = $_POST['operasi'];

    if($operasi == "kali"){
        $hasil = Matematika::kali($a,$b);
    } elseif($operasi == "bagi"){
        $hasil = Matematika::bagi($a,$b);
    } elseif($operasi == "tambah"){
        $hasil = Matematika::tambah($a,$b);
    } elseif($operasi == "kurang"){
        $hasil = Matematika::kurang($a,$b);
    } elseif($operasi == "luas"){
        $hasil = Matematika::luasPersegi($sisi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        .container {
            width: 350px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 5px;
        }

        p {
            text-align: center;
            color: gray;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            height: 45px;
            padding: 10px;
            margin-bottom: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            height: 45px;
            background: #4a7cff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 15px;
            padding: 15px;
            background: #f5f5f5;
            text-align: center;
            border-radius: 8px;
        }

        .hasil h3 {
            margin: 0;
            font-size: 26px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator</h2>
    <p>Operasi dan luas persegi</p>

    <form method="POST">
        <input type="number" name="a" placeholder="">
        <input type="number" name="b" placeholder="">
        <input type="number" name="sisi" placeholder="Sisi Persegi">

        <select name="operasi">
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="luas">Luas Persegi</option>
        </select>

        <button type="submit" name="hitung">HITUNG</button>
    </form>

    <div class="hasil">
        <h3><?php echo $hasil; ?></h3>
    </div>
</div>

</body>
</html>

