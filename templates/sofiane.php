<?php

function ft_strlen($str)
{
    for ($i=0; $i < 100; i++){
        if (!isset($str[$i])){
            break;
        }
    }
    return $i;
}

function ft_strlen($str)
{
	for ($i=0; $i < 100; $i++) { 
		if (!isset($str[$i])) {
			break ;
		}	
	}
	return $i;
}

function X(){
    $str = "";

    for ($i=0; $i < 100; $i++){
        $str .= 'X';
    }
    return $str;
}

function XY(){
    $str = "";
    for ($i=0; $i < 100; $i++){
        $str .= 'XY';
    }

    return count($str);
}

function oddEven($nb)
    {
        if($nb % 2 == 0){
            return "pair";
        }
            return "impair";
    }
    
function mb_strrev($str) 
    {
        $newRow = "";
        for ($i = mb_strlen($str); $i >= 0; $i--){
            $newRow = $mb_substr($str, $i, 1);
        }
        return $newRow;
    }

function array_map($array, $nb)
    {
        while ($array[$i]){
            $array[$i++] += $nb; ///que devient $array[0] ?
        }
        return $array;
    }
    



?>



<!DOCTYPE html>
<html>
<head>
	<title>LES EXERCICES DE SOFIANE</title>
</head>
<body>

	<?php echo ft_strlen("Salut");?>
    <?php echo X();?>
    <?php echo oddEven(5);?>
    <?php echo mb_strrev('hello');?>
    <?php echo array_map();?>
    
</body>
</html>

