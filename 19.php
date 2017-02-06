<?php
// 19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.
$a = '78';
$b = 78;

	if ($a === $b)
	{
		echo "Эквивалентны";	
	} else 
		{
		echo "Не эквивалентны";
		}	
	echo '<br/>';	
	var_dump ($a === $b);	
	echo '<br/>';
	var_dump ($a, $b);
?>