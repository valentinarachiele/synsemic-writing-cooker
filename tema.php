<?php
/* File, where the random text/quotes are stored one per line */
$settings['text_from_file'] = 'tema.txt';
/*
   0 = raw mode: print the text as it is, when using RanTex as an include
   1 = Javascript mode: when using Javascript to display the quote
*/
$settings['display_type'] = 1;

/* Allow on-the-fly settings override? 0 = NO, 1 = YES */
$settings['allow_otf'] = 1;

/* Override type? */
if ($settings['allow_otf'] && isset($_GET['type']))
{
	$type = intval($_GET['type']);
}
else
{
	$type = $settings['display_type'];
}

/* Get a list of all text options */
if ($settings['text_from_file'])
{
	$settings['quotes'] = file($settings['text_from_file']);
}

/* If we have any text choose a random one, otherwise show 'No text to choose from' */
if (count($settings['quotes']))
{
	$txt = $settings['quotes'][array_rand($settings['quotes'])];
}
else
{
	$txr = 'No text to choose from';
}

/* Output the image according to the selected type */
if ($type)
{
    /* New lines will break Javascript, remove any and replace them with <br /> */
    $txt = nl2br(trim($txt));
    $txt = str_replace(array("\n","\r"),'',$txt);
	echo 'document.write(\''.addslashes($txt).'\')';
}
else
{
	echo $txt;
}
?>