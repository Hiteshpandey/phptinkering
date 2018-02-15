<?php

$tmpArray = array(
    array("one", array(1, 2, 3)),
    array("two", array(4, 5, 6)),
    array("three", array(
            7,
            8,
            array("four", 9, 10)
    ))
);

print_r($tmpArray);

echo "<br><br>";

nestecho($tmpArray);


function nestecho($data){
	foreach ($data as $key => $value) {
		if (is_array($value)) {
			nestecho($value);
		}
		else
		{
			echo $value."<br>";
		}
	}
}
