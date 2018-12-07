<?php
$f_bi = 4;
$f_hi = md5("0435331005");
$f_ch = array(
substr(md5($f_hi."Z"),1,$f_bi),
substr(md5($f_hi."g"),1,$f_bi),
);
$f_cy = array(
"Z",
"g",
);
header("Content-Type: image/jpeg");
$encodea = str_replace($f_cy,$f_ch,base64_encode(file_get_contents("../6e7ad70fly1fvf1kp5yfqj22dc2dcnjn.jpg")));
//echo $encodea;echo "<br />";
//echo base64_decode(str_replace($f_ch,$f_cy,$encodea));echo "<br />";
$encodeb = str_replace($f_cy,$f_ch,base64_encode($encodea));
//echo $encodeb;echo "<br />";
echo base64_decode(str_replace($f_ch,$f_cy,base64_decode(str_replace($f_ch,$f_cy,$encodeb))));

//echo file_get_contents("6e7ad70fly1fvf1kp5yfqj22dc2dcnjn.jpg", true);