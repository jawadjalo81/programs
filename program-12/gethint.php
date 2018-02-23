<?php
// Array with names
$a[] = "Justice League";
$a[] = "Thor: Ragnarok";
$a[] = "Murder on the Orient Express";
$a[] = "Wonder";
$a[] = "Star Wars: The Last Jedi";
$a[] = "Coco";
$a[] = "Daddy's Home 2";
$a[] = "Valerian and the City of a Thousand Planets";
$a[] = "Lady Bird";
$a[] = " American Assassin";
$a[] = "Logan Lucky";
$a[] = "Wonder Woman";
$a[] = "Mudbound";
$a[] = "It (I)";
$a[] = "Three Billboards Outside Ebbing, Missouri";
$a[] = "Wind River";
$a[] = "Blade Runner 2049";
$a[] = "Atomic Blonde";
$a[] = "Call Me by Your Name";
$a[] = "Jigsaw";
$a[] = "Spider-Man: Homecoming";
$a[] = "The Disaster Artist";
$a[] = "The Star";
$a[] = "Get Out";
$a[] = " Baby Driver";
$a[] = "The Greatest Showman";
$a[] = "Roman J. Israel, Esq.";
$a[] = "The Hitman's Bodyguard";
$a[] = "A Bad Moms Christmas";
$a[] = "Hangman";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 