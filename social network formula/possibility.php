<?
// расцет вероятности победы
function possibility($rate_sum) {
if ($rate_sum < 3) {
$e = 0.50;
}
elseif (($rate_sum -->= 3) and ($rate_sum <= 10)) {
$e = 0.51;
}
elseif (($rate_sum >= 11) and ($rate_sum <= 17)) {
$e = 0.52;
}
elseif (($rate_sum >= 18) and ($rate_sum <= 25)) {
$e = 0.53;
}
elseif (($rate_sum >= 26) and ($rate_sum <= 32)) {
$e = 0.54;
}
elseif (($rate_sum >= 33) and ($rate_sum <= 39)) {
$e = 0.55;
}
elseif (($rate_sum >= 40) and ($rate_sum <= 46)) {
$e = 0.56;
}
elseif (($rate_sum >= 47) and ($rate_sum <= 53)) {
$e = 0.57;
}
elseif (($rate_sum >= 62) and ($rate_sum <= 68)) {
$e = 0.59;
}
elseif (($rate_sum >= 69) and ($rate_sum <= 76)) {
$e = 0.60;
}
elseif (($rate_sum >= 77) and ($rate_sum <= 83)) {
$e = 0.61;
}
elseif (($rate_sum >= 84) and ($rate_sum <= 91)) {
$e = 0.62;
}
elseif (($rate_sum >= 92) and ($rate_sum <= 98)) {
$e = 0.63;
}
elseif (($rate_sum >= 99) and ($rate_sum <= 106)) {
$e = 0.64;
}
elseif (($rate_sum >= 107) and ($rate_sum <= 113)) {
$e = 0.65;
}
elseif (($rate_sum >= 114) and ($rate_sum <= 121)) {
$e = 0.66;
}
elseif (($rate_sum >= 122) and ($rate_sum <= 129)) {
$e = 0.67;
}
elseif (($rate_sum >= 130) and ($rate_sum <= 137)) {
$e = 0.68;
}
elseif (($rate_sum >= 138) and ($rate_sum <= 145)) {
$e = 0.69;
}
elseif (($rate_sum >= 146) and ($rate_sum <= 153)) {
$e = 0.70;
}
elseif (($rate_sum >= 154) and ($rate_sum <= 162)) {
$e = 0.71;
}
elseif (($rate_sum >= 163) and ($rate_sum <= 170)) {
$e = 0.72;
}
elseif (($rate_sum >= 171) and ($rate_sum <= 179)) {
$e = 0.73;
}
elseif (($rate_sum >= 180) and ($rate_sum <= 188)) {
$e = 0.74;
}
elseif (($rate_sum >= 189) and ($rate_sum <= 197)) {
$e = 0.75;
}
elseif (($rate_sum >= 198) and ($rate_sum <= 206)) {
$e = 0.76;
}
elseif (($rate_sum >= 207) and ($rate_sum <= 215)) {
$e = 0.77;
}
elseif (($rate_sum >= 216) and ($rate_sum <= 225)) {
$e = 0.78;
}
elseif (($rate_sum >= 226) and ($rate_sum <= 235)) {
$e = 0.79;
}
elseif (($rate_sum >= 236) and ($rate_sum <= 245)) {
$e = 0.80;
}
elseif (($rate_sum >= 246) and ($rate_sum <= 256)) {
$e = 0.81;
}
elseif (($rate_sum >= 257) and ($rate_sum <= 267)) {
$e = 0.82;
}
elseif (($rate_sum >= 268) and ($rate_sum <= 278)) {
$e = 0.83;
}
elseif (($rate_sum >= 279) and ($rate_sum <=290)) {
$e = 0.84;
}
elseif (($rate_sum >= 291) and ($rate_sum <= 302)) {
$e = 0.85;
}
elseif (($rate_sum >= 303) and ($rate_sum <= 315)) {
$e = 0.86;
}
elseif (($rate_sum >= 316) and ($rate_sum <= 328)) {
$e = 0.87;
}
elseif (($rate_sum >= 329) and ($rate_sum <= 344)) {
$e = 0.88;
}
elseif (($rate_sum >= 345) and ($rate_sum <= 357)) {
$e = 0.89;
}
elseif (($rate_sum >= 358) and ($rate_sum <= 374)) {
$e = 0.90;
}
elseif (($rate_sum >= 375) and ($rate_sum <= 391)) {
$e = 0.91;
}
elseif (($rate_sum >= 392) and ($rate_sum <= 411)) {
$e = 0.92;
}
elseif (($rate_sum >= 412) and ($rate_sum <= 432)) {
$e = 0.93;
}
elseif (($rate_sum >= 433) and ($rate_sum <= 456)) {
$e = 0.94;
}
elseif (($rate_sum >= 457) and ($rate_sum <= 484)) {
$e = 0.95;
}
elseif (($rate_sum >= 485) and ($rate_sum <= 517)) {
$e = 0.96;
}
elseif (($rate_sum >= 518) and ($rate_sum <= 559)) {
$e = 0.97;
}
elseif (($rate_sum >= 560) and ($rate_sum <= 619)) {
$e = 0.98;
}
elseif (($rate_sum >= 620) and ($rate_sum <= 735)) {
$e = 0.99;
}
elseif ($rate_sum >= 735){
$e = 1;
}
return $e;
}
?>