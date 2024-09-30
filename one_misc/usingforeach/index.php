<?php

//USING FOR EACH

$state = array("Abia", "Bauchi", "CrossRiver", "Ebonyi");
$s = 0;

foreach ($state as $item) {
    echo "$s: $item<br>";
    ++$s;
}
echo "<p>";

$country = array("Angola", "Brazil", "Chile", "Denmark", "Ethiopia");
$t = 0;

foreach ($country as $item) {
    echo "$t: $item<br>";
    ++$t;

}
echo "<p>";

$partofspeech = array(
'Noun' => "names a place, person, animal, or thing",
'Verb' => "an action word: it does a thing",
'Pronoun' => "used in a place of a noun",
'Adverb' => "modifies a verb, another adverb, or an adjective",);

    foreach ($partofspeech as $item => $meaning) {
        echo "<b>$item:</b> $meaning<p>";
    }
?>