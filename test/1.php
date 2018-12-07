<?php
$f_bi = 8;
$f_hi = 56;
$f_ch = array(
substr(md5($f_hi."a"),0,$f_bi),
substr(md5($f_hi."b"),0,$f_bi),
substr(md5($f_hi."c"),0,$f_bi),
substr(md5($f_hi."d"),0,$f_bi),
substr(md5($f_hi."e"),0,$f_bi),
substr(md5($f_hi."f"),0,$f_bi),
substr(md5($f_hi."g"),0,$f_bi),
substr(md5($f_hi."h"),0,$f_bi),
substr(md5($f_hi."i"),0,$f_bi),
substr(md5($f_hi."j"),0,$f_bi),
substr(md5($f_hi."k"),0,$f_bi),
substr(md5($f_hi."l"),0,$f_bi),
substr(md5($f_hi."m"),0,$f_bi),
substr(md5($f_hi."n"),0,$f_bi),
substr(md5($f_hi."o"),0,$f_bi),
substr(md5($f_hi."p"),0,$f_bi),
substr(md5($f_hi."q"),0,$f_bi),
substr(md5($f_hi."r"),0,$f_bi),
substr(md5($f_hi."s"),0,$f_bi),
substr(md5($f_hi."t"),0,$f_bi),
substr(md5($f_hi."u"),0,$f_bi),
substr(md5($f_hi."v"),0,$f_bi),
substr(md5($f_hi."w"),0,$f_bi),
substr(md5($f_hi."x"),0,$f_bi),
substr(md5($f_hi."y"),0,$f_bi),
substr(md5($f_hi."z"),0,$f_bi),
);
$f_cy = array(
	"a",
	"b",
	"c",
	"d",
	"e",
	"f",
	"g",
	"h",
	"i",
	"j",
	"k",
	"l",
	"m",
	"n",
	"o",
	"p",
	"q",
	"r",
	"s",
	"t",
	"u",
	"v",
	"w",
	"x",
	"y",
	"z",
);
$encode = str_replace($f_cy,$f_ch,"ab");
echo $encode;
echo "<br />";
echo str_replace($f_ch,$f_cy,"cabdef");
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
foreach (range('a', 'z') as $char) {
    echo "	substr(md5(\$f_hi.\"".$char."\"),0,\$f_bi),<br />";;
}
foreach (range('a', 'z') as $char) {
    echo "\"".$char."\",<br />";;
}