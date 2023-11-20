<?php
class tabung {
    function volume($jari,$tinggi){
        $phi = 3.14;
        echo "phi = $phi";echo "<br/>";
        echo "Jari - jari = $jari";echo "<br/>";
        echo "Tinggi = $tinggi";echo "<br/>";
        $volume = $phi * $jari*$jari* $tinggi;
        echo "Volume tabung adalah : " . $volume;
    }
    function luasP($jari,$tinggi){
        $phi = 3.14;
        $luasPer = 2 * $phi * $jari * ($jari + $tinggi);
        echo "Luas permukaan Tabung adalah ". $luasPer;
    }
    function luasS($jari,$tinggi){
        $phi = 3.14;
        $luasSel = 2 * $phi * $jari *  $tinggi;
        echo "Luas selimut Tabung adalah ". $luasSel;
    }
}
?>