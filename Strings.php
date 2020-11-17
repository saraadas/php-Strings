<?php
//$x = 60;
//if ($x >= 90) 
{ 
    //$grade = 'A'; 
} 
//else
{ 
    //if ($x >= 80 && $x <= 89) 
    { 
        //$grade = 'B'; 
    } 
    //else 
    { 
        //if ($x >= 60 && $x <= 79) 
        { 
            //$grade = 'C'; 
        } 
        //else 
        { 
            //if ($x >= 33 && $x<= 59)  
            { 
                //$grade = 'D'; 
            } 
            //else 
            { 
                //$grade = 'Fail';
            } 
        } 
    } 
}//
 
//echo $grade . "\n";
$str = "a girl has no name";
$str1= '082307'; 
$str2= 'the quick brown fox jumps over lazy dog';
$str3= 'jumps';
$str4 = 'www.example.com/public_html/index.php';
$str5 = 'Ayham@example.com';
$str6 = 65.45;
$str7 = 104.35;
$str8 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$str9 = 'football';
$str10 = 'footboll';
$str11 = strspn($str1 ^ $str2, "\0");
$str12 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$str13 = "https://www.orange.com/index.php";
$my_url = 'http://www.example.com/5478631';
echo "<table border='1'>";
echo "<tr>";
echo "<th>Function Name</th>";
echo "<th>Function Output</th>";
echo "</tr>";
echo "<tr>";
echo "<td>Q1-a Transform to uppercase</td>";
echo "<td>".strtoupper($str)."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q1-b Transform to lowercase</td>";
echo "<td>".strtolower($str)."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q1-c First character uppercase</td>";
echo "<td>".ucfirst($str)."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q1-d First character of each word uppercase</td>";
echo "<td>".ucwords($str)."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q2- Split String</td>";
echo "<td>".substr(chunk_split($str1, 2, ':'), 0, -1)."\n"."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q3- Check substring</td>";
echo "<td>".strpos($str2, $str3)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q4- Convert variable to string</td>";
echo "<td>".strval( $str1 )."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q5- Extract file name</td>";
echo "<td>".substr(strrchr($str4, "/"), 1)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q6- Extract user name</td>";
echo "<td>".strstr($str5, '@', true)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q7- Last three characters</td>";
echo "<td>".substr($str5, -3)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q8- Format values as currency</td>";
echo "<td>".sprintf("%1.2f", $str6+$str7)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q9- Generate simple random password</td>";
echo "<td>".substr(str_shuffle($str8), 0,8)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q10- Replace word</td>";
echo "<td>".preg_replace('/the/', 'That', $str2, 1)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q11- First character that is diffrent</td>";
echo "<td>".$str11 = strspn($str9 ^ $str10, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',$str11, $str9[$str11], $str10[$str11]);
printf("\n")."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q12- Put string in an array</td>";
echo "<td>".$array = explode("<br>", $str12);
var_dump($array)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q13- Get the file name component</td>";
echo "<td>".$file = basename($str13, ".php") ."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q14- Print the next charac of specific charc</td>";
echo "<td>";
$charac1 ="a";
$next_charac1 = ++$charac1;
$next_charac2 = ++$charac1;
    if (strlen($next_charac1) > 1) 
{
 $next_charac1 = $next_charac1[0];
 }
echo $next_charac1."\n";
$charac2 ="z";
$next_charac2 = ++$charac2;
    if (strlen($next_charac2) > 1) 
{
 $next_charac2 = $next_charac2[0];
 }
echo $next_charac2."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q15- remove part of a string</td>";
echo "<td>".$sub_string = 'rayy@';
$str14 = 'rayy@example.com';
if (substr($str14, 0, strlen($sub_string)) == $sub_string) 
{
 $str14 = substr($str14, strlen($sub_string));
}
echo $str14."\n"."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q16- Get a hex demp of string</td>";
echo "<td>". $str15 = 'rayy@example.com';
echo bin2hex($str15)."\n"."</td";
echo "</tr>";
echo "<tr>";
echo "<td>Q17- Insert a string at the specified position in a given string </td>";
echo "<td>".$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q18- The first word of the sentence</td>";
echo "<td>".$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q19- Remove all landing zeroes</td>"; 
echo "<td>".$y = '000547023.24';
$strr = ltrim($y, '0');
echo $strr."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q20-  Remove part of string</td>";
echo "<td>".$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q21- Remove tailing slash from string</td>";
echo "<td>".$my_strr = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_strr, '/')."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q22- get the charac after the last /</td>";
echo "<td>".substr($my_url, strrpos($my_url, '/' )+1)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q23- replace multiple charac </td>";
echo "<td>".$my_string = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_string)."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q24- select the first 5 words </td>";
echo "<td>".$my_string1 = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string1), 0, 5))."\n"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q25- remove comma</td>";
echo "<td>".$str25 = "2,543.12";
$z = str_replace( ',', '', $str25);
if( is_numeric($z))
  {
  echo $z."\n";
  }"</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Q26- print letters from a to z /</td>";
echo "<td>". for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x)."\n"."</td>";
echo "</tr>";
?>
