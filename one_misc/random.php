<!DOCTYPE html>
<html lang = "en-US">
    <meta charset="UTF-8">

<body>
    
<?php
    echo "GRACE!<p>";

        $firstname = "Ben ";
        $lastname = "Johnson";


        echo "God is faithful to ".$firstname; 
        $firstname .= $lastname;
        echo "</p>God is faithful to ".$firstname; 

echo "<p>";
    $text0 = 'My friend\'s dad.';
    $text1 = "She wrote upon it, \"Return to sender\".";
        echo $text1;
echo "<p>";

        $heading = "Date\tName\tPayment";
        echo $heading;
echo "<p>";

$author = "Steve Ballmer";
echo "Developers, Developers, developers, developers, developers,
developers, developers, developers, developers!
- $author.";
echo "<p>";

$author = "Brian W. Kernighan";
echo <<<_END
Debugging is twice as hard as 

writing the code in the first place.
Therefore, if 'you' write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_END;
    echo "<p>";

         
$number = 12345 * 67890;
echo "$number<p>";
echo substr($number, 3, 2);
    echo "<p>";

$temp = "The date is ";
echo longdate($temp, time());
function longdate($text, $timestamp)
{
return $text . date("l F jS Y", $timestamp);
}
    echo "<p>";
    
echo 'ARRAYS';
    echo "<p>";

$someArray = array(1, 'three', 6);
$someArray[] = '19';
$someArray[4] = 'obi';
echo $someArray[3];
echo "<p/>$someArray[4]";

echo "<p>";

$cheapTalk = array('Emeka' => '100', 'Ebuka' => '200', 'Eloka' => '300' );

echo "They say he's got NGN".$cheapTalk['Eloka'];


    ?>
</body>
    
    
</html>