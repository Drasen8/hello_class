<?php
function comparar($patron,$cadena){
    if(preg_match($patron, $cadena)){
        echo "bien"."\n";
    
    }else{
        echo "mal"."\n";
    }

    
}
/*
e) Genera el patrón para fecha en formato dd/mm/aaaa o bien dd-mm-aaaa


k) 
l) Genera el patrón para texto en blanco, números, mayúsculas/minúsculas y caracteres
acentuados*/

//a) Telefono comunidad valenciana
echo"Telefono comunidad valenciana";
$cadena = "960123456";
$cadena2 = "962123456";
$cadena3 = "950123456";
$patron = "/^96/";
comparar($patron,$cadena);
comparar($patron,$cadena2);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//b) Codigo postal
$cadena = "468734";
$cadena2 = "468758";
$cadena3 = "968756";
$patron = "/^46|12|03/";
comparar($patron,$cadena);
comparar($patron,$cadena2);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//c) Telefono
$cadena = "676372633";
$cadena2 = "673733273";
$cadena3 = "968756";
$patron = "/[ -]*(6|7)[ -]*([0-9][ -]*){8}/";
comparar($patron,$cadena);
comparar($patron,$cadena2);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//d) NIF
$cadena = "73647366A";
$cadena2 = "83647666F";
$cadena3 = "968756";
$patron = "/^[0-9]{8}[A-Z]{1}$/";
comparar($patron,$cadena);
comparar($patron,$cadena2);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//e) Fecha
$cadena = "20-05-2002";
$cadena2 = "83647666F";
$cadena3 = "968756";
$patron = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(199[0-9]|200[0-9]|201[0-9])$/";
comparar($patron,$cadena);
comparar($patron,$cadena2);
comparar($patron,$cadena3);
echo"-------------------"."\n";



//f) Aprobado tanto may como min
echo"Aprobado tanto may como min"."\n";
$cadena = "aprobado";
$cadena3 = "APROBADO";
$cadena2 = "apro23423434";
$patron = '/aprobado/i';
comparar($patron,$cadena);
comparar($patron,$cadena3);
comparar($patron,$cadena2);
echo"-------------------"."\n";

//g) Aprobado en min
echo"Aprobado"."\n";
$cadena = "aprobado";
$cadena3 = "dfsdfsdf";
$patron = "/^(aprobado)$/";
comparar($patron,$cadena);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//h) Aprobado
$cadena = "aprobado APROBADO";
$cadena2 = "APROBADO aprobado";
$cadena3 = "968756";
$patron = '/^(?=.*\baprobado\b)(?=.*\bAPROBADO\b).*/';
comparar($patron,$cadena);
comparar($patron,$cadena2);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//i) Mayusminyespacios
echo"Mayusminyespacios"."\n";
$cadena = "APROBADO aprobado";
$cadena3 = "dfsdfsd   `+";
$patron = '/^[a-zA-Z\s]+$/';
comparar($patron,$cadena);
comparar($patron,$cadena3);
echo"-------------------"."\n";

//j) Solo num
echo"Solo num"."\n";
$cadena = "237467346";
$cadena3 = "dfsdfsd   `+";
$patron = '/^[1-9\s]+$/';
comparar($patron,$cadena);
comparar($patron,$cadena3);
echo"-------------------"."\n";


//j) Solo num con espacios
echo"Solo num con espacios"."\n";
$cadena = "APROBADO aprobado";
$cadena3 = "dfsdfsd   `+";
$patron = '/\b\d+\b(\s+\b\d+\b)*/'; 
comparar($patron,$cadena);
comparar($patron,$cadena3);
echo"-------------------"."\n";

?>