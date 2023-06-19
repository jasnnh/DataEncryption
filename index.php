<?php
$text = "hello world today is 6/19/2023";
$key = 10;

echo "Untouched: " . $text . "<br>";
$enc = Encipher($text, $key);
echo "Encrypted: " . Encipher($text, $key) . "<br>";
echo "Decrypted: " . Decipher($enc, $key) . "<br>";
echo "Decrypted wrong key: " . Decipher($enc, $key / 2) . "<br>";

function Cipher($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function Decipher($input, $key)
{
	return Encipher($input, 26 - $key);
}

?>