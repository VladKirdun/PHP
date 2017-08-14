<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	
<?
	$m = array(
		'a'=>'3',
		'b'=>'Hummer',
		'c'=>'BMW',
		'd'=>'Toyota'
		); 
	$s = array(
		'a'=>'7',
		'b'=>'TU-144',
		'c'=>'Boing',
		'd'=>'СУ'
		); 
	$t = array(
		'a'=>'2',
		'b'=>'Пантера',
		'c'=>'Т-34',
		'd'=>'Волга'
		);
	$k = array(
		'a'=>'5',
		'b'=>'Ямато',
		'c'=>'Ясень',
		'd'=>'Петропавловск'
		); 
	$TH = array($m, $s, $t, $k);

	function func($arg1,$arg2) {
		$arr1_values = array_values($arg1);
		foreach ($arr1_values as $value) {
			foreach ($value as $key => $val){
				if($key == $arg2 && $arg2 == 'a'){
					usort($arg1, 'sortOnA');
					echo "<pre>";
					var_dump($arg1);
					echo "</pre>";
					break;
				}
				else if($key == $arg2 && $arg2 == 'b'){
					usort($arg1, 'sortOnB');
					echo "<pre>";
					var_dump($arg1);
					echo "</pre>";
					break;
				}
				else if($key == $arg2 && $arg2 == 'c'){
					usort($arg1, 'sortOnC');
					echo "<pre>";
					var_dump($arg1);
					echo "</pre>";
					break;
				}
				else if($key == $arg2 && $arg2 == 'd'){
					usort($arg1, 'sortOnD');
					echo "<pre>";
					var_dump($arg1);
					echo "</pre>";
					break;
				}
			}
			break;
		}
	}
func($TH, 'b');

function sortOnA($a, $b)
{
   if ($a['a'] == $b['a']) return 0;
   return $a['a'] > $b['a'] ? 1 : -1;
}

function sortOnB($a, $b)
{
   if (strcmp($a['b'], $b['b']) == 0) return 0;
   return (strcmp($a['b'], $b['b']) > 0) ? 1 : -1;
}

function sortOnC($a, $b)
{
   if (strcmp($a['c'], $b['c']) == 0) return 0;
   return (strcmp($a['c'], $b['c']) > 0) ? 1 : -1;
}

function sortOnD($a, $b)
{
   if (strcmp($a['d'], $b['d']) == 0) return 0;
   return (strcmp($a['d'], $b['d']) > 0) ? 1 : -1;
}

?>

</body>
</html>