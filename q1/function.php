<?php

function checkpalindrome($str)
{
    $len=strlen($str);
    $count = 0;
    for($i=0,$j=$len-1;$i<$len/2&&$j>=0;$i++,$j--)
    {
        if($str[$i]!=$str[$j])
        {
            $count = 1;
        }
    }
    if($count>0)
    {
        echo $str." is not palindrome";
    }
    else
    {
        echo $str." is palindrome";
    }

}

function countvowel($str)
{
    $string = strtolower($str);
    $vowels = array("a"=>0,"e"=>0,"i"=>0,"o"=>0,"u"=>0);
    $cnt=0;
 
    for($i=0; $i<strlen($string); $i++)
    {
        if($string[$i] == 'a'){
            ++$cnt;
            ++$vowels['a'];
        }
        if($string[$i] == 'e') {
            ++$cnt;
            ++$vowels['e'];
        }
        if($string[$i] == 'i') {
            ++$cnt;
            ++$vowels['i'];
        }
        if($string[$i] == 'o') {
            ++$cnt;
            ++$vowels['o'];
        }
        if($string[$i] == 'u') {
            ++$cnt;
            ++$vowels['u'];
        }
    }
    
    echo "<h3>Total number of vowels found : ".$cnt."</h3>";
    echo "Occurence of 'a' : ".$vowels['a']."<br>";
    echo "Occurence of 'e' : ".$vowels['e']."<br>";
    echo "Occurence of 'i' : ".$vowels['i']."<br>";
    echo "Occurence of 'o' : ".$vowels['o']."<br>";
    echo "Occurence of 'u' : ".$vowels['u']."<br>";
}

?>
