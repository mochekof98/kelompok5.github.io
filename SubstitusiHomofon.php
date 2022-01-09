<?php 
function getTable(){ 

$tabel = array("A"=>array("BU","CP","AV","AH","BT","BS","CQ"), 
               "B"=>array("AT"), 
               "C"=>array("DL","BK","AU"), 
               "D"=>array("BV", "DY", "DM", "AI"), 
               "E"=>array("DK", "CO", "AW", "BL","AA",    "CR", "BM", "CS","AF", "AG", "BO","BN", "BE"), 
               "F"=>array("BW","CM","CN"), 
               "G"=>array("DN","BJ"), 
               "H"=>array("AS","CL","CK"), 
               "I"=>array("DJ","BI","AX","CJ","AB","BP","CU","CT"), 
               "J"=>array("BX"), 
               "K"=>array("DI"), 
               "L"=>array("AR", "BH", "CI", "AJ"), 
               "M"=>array("DH", "BG", "AY"), 
               "N"=>array("BY","DG","DF","CH","AC","BR","DU","DT"), 
               "O"=>array("DZ","BF","DX","AK","CG","BQ","DR"), 
               "P"=>array("BZ", "DE", "AZ"), 
               "Q"=>array("DD"), 
               "R"=>array("AQ","DC","DQ","AL","CE","CF","CV","DS"), 
               "S"=>array("AP","AN","AO","CD","DW","DV"), 
               "T"=>array("CB","DB","DP","CC","AD","CY","CW","CX","AE"), 
               "U"=>array("CA","AM","BA"), 
               "V"=>array("BB"), 
               "W"=>array("CZ"), 
               "X"=>array("BD"), 
               "Y"=>array("DO", "DA"), 
               "Z"=>array("BC")); 
return $tabel; 
} 
function enkripsi($str){ 
    $str = str_ireplace(' ','',$str); 
    $str = strtoupper($str); 
    $len = strlen($str); 
    $tabel = getTable(); 
    $chiper = ''; 
    for($i=0;$i<$len;$i++){ 
if(array_key_exists($str[$i], $tabel)){ 
    $c = count($tabel[$str[$i]]); 
    $chiper .= $tabel[$str[$i]][rand(0,$c-1)]; 
    } 
    } 
    return $chiper; 
    }  
function dekripsi($chipertext){ 
    $len = strlen($chipertext);   
    if($len%2==0){  
    $tabel = getTable(); 
    $plaintext = ''; 
    $i=0; 
    while($i<$len){ 
    foreach($tabel as $tab=>$tabs){   
    if(in_array($chipertext[$i].$chipertext[$i+1], $tabel[$tab])){$plaintext .= $tab;}   
    } 
    $i+=2; 
    } 
    }  
else{ 
    $plaintext = 'Chipertext tidak lengkap'; 
    } 
    return $plaintext; 
    } 