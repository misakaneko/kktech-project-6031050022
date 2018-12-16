<?php
function land_update($land,$name, $value){
	global $earth;
	$cars = '[{"f":"th","th":"1"},{"f":"jp","jp":"2"}]';
	define("ferxDrFxxerx",sql_load(typeMultilanguage, $name, 1));
	$cars = ferxDrFxxerx;
	if(preg_match('/'.$land.'/i', $cars)){ $xc = 0; } else { $xc = 1;}
	//return $cars;
	//return json_decode($cars, true)[0]['f'];
	if($cars == 'false'){
		echo sql_newdata(typeMultilanguage, $name, 'null');
	}
	if($cars == 'null' || $cars == 'false'){
		$cars = '[{"f":"null","null":"0"}]';
		$gf = '';
	}
	$cars = json_decode($cars, true);
	if(strlen($land) <= 2){
	} else {
		return '1';
	}
	if(preg_match('/GR|GL|GU|KH|GP|GT|QA|GH|GA|CV|GY|GN|GW|CW|GD|KR|KP|CX|GS|SS|NF|BV|UM|HM|GG|GM|CI|KM|CR|KZ|KI|CU|KG|KW|KE|CA|CM|HR|CO|GE|JO|JM|DJ|CN|JE|TD|CL|CZ|SM|WS|SA|EH|ZW|SY|SD|SR|SC|KN|LC|VC|SH|SN|RS|ST|SL|BL|PM|MF|ZM|SO|CY|JP|DM|DK|TT|TO|TL|TR|TN|TV|TM|TG|TW|TJ|TZ|TK|TH|VA|NO|NA|NR|NI|NC|NZ|NU|NL|AN|NP|NG|NE|BR|IO|BN|BW|BA|BD|BG|BB|BH|BS|BI|BF|BJ|BE|BY|BZ|BM|BO|PR|PK|PA|PG|PY|PS|PW|PE|PT|PL|FR|MM|FI|PH|FJ|GF|TF|PF|BT|MN|MS|ME|MU|MR|MD|MT|MV|MO|MK|MG|YT|MQ|MW|ML|MY|MX|MZ|MC|MA|FM|GI|UG|UA|YE|DE|RW|RU|RE|RO|LU|LV|LA|LI|LT|LY|LS|LB|LR|VU|WF|VE|VN|LK|ES|SK|SI|SZ|CH|SE|US|AE|GB|CG|DO|CD|CF|SG|CK|KY|CC|SB|TC/i', $land)){
	} else {
		return '2';
	}
	for($i=0;$i<200;$i++){
		if(isset($cars[$i]['f'])){
			if($xc == 1){
				for($i=0,$f='';$i<200;$i++){
					if(isset($cars[$i]['f'])){
						$f = $f.json_encode(array(	'f' => $cars[$i]['f'],
							$cars[$i]['f'] => $cars[$i][$cars[$i]['f']])
						);
						if(isset($gf)){$f = $f.'';} else {if($f == ''){$f = $f;} else {$f = $f.',';}}
					} else {
						$l = $i;
						$i = 9999999;
					}
				}
				if(isset($gf)){
					$f = '';
					return sql_update(typeMultilanguage, $name, '['.$f.json_encode(array(	'f' => $land, $land => $value)).']');
				}
				//return '['.$f.json_encode(array(	'f' => $land, $land => $value)).']';
				return sql_update(typeMultilanguage, $name, '['.$f.json_encode(array(	'f' => $land, $land => $value)).']');
			} else {
				for($i=0,$f='';$i<200;$i++){
					if(isset($cars[$i]['f'])){
						if($land == $cars[$i]['f']){
							$c = str_replace($cars[$i][$cars[$i]['f']],$value,$cars[$i][$cars[$i]['f']]);
						} else {
							$c = $cars[$i][$cars[$i]['f']];
						}
						$f = $f.json_encode(array(	'f' => $cars[$i]['f'],
							$cars[$i]['f'] => $c)
						);
						
					} else {
						$l = $i;
						$i = 9999999;
					}
				}
				if(isset($gf)){
					$f = '';
				}
			$f = str_replace('}{','},{',$f);
				return sql_update(typeMultilanguage, $name, '['.$f.']');
			}
		} else {
			$i = 9999999;
			return '3';
		}
	}
}