<?php
require_once '../PHPWord.php';

$PHPWord = new PHPWord();



$document = $PHPWord->loadTemplate('Template.docx');


#reemplaza una variable con varias imagenes
$aImgs = array(
    array(
        	'img' => '_earth.JPG',
	'size' => array(580, 280)
    )
);
$document->replaceStrToImg( 'areaImages', $aImgs);

$document->setValue('Value1', 'Sunhhhhh');
$document->setValue('Value2', 'Mercury');
$document->setValue('Value3', 'Venus');
$document->setValue('Value4', 'Earth');
$document->setValue('Value5', 'Mars');
$document->setValue('Value6', 'Jupiter');
$document->setValue('Value7', 'Saturn');
$document->setValue('Value8', 'Uranus');
$document->setValue('Value9', 'Neptun');
$document->setValue('Value10', 'Pluto');
$document->setValue('myReplacedValue', 'Pluto');


$document->setValue('weekday', date('l'));
$document->setValue('time', date('H:i'));

$document->save('Solarsystem.docx');



?>