<?php
$a = array( 
    "จงใช้เงินของคุณ",
"ซื้้้อในสิ่งที่เงินซื้อได้" ,
 "และจงใช้เวลาของคุณ" ,
"ไปกับสิ่งที่เงินไม่สามารถซื้อได้"
);
$random_key = array_rand($a,1);
echo"<p>" . $a[$random_key] . "</p>";
?>