<?php
echo "<h2> Home Work 2 </h2> ";
echo "<u><b> first Program </b></u><br> ";
$value =123;
if(is_numeric($value)){
    echo"valid number "  ;
    echo "<br>";
    
}
else{
    echo "Invalid";
    echo "<br>";
 
}
echo "<b> Ternary operator </b><br> ";

$value = "qqq";
 echo is_numeric($value)? "valid number ":"Invalid number" ;

 echo "<br>";


echo "<u><b> Second Program </b></u><br> ";  // second program

  $a = 10;
  $b = $a > 15 ? 20 : 5;
  print ("Value of b is " . $b);
  echo "<br>";

echo "<b> Ternary operator </b><br> ";

$age = 20;
  echo ($age >= 18) ? "Adult" : "Not Adult";

 echo "<br>";



echo "<u><b> third Program </b></u><br> "; // third program
$age = 10;
if ($age >= 18){
    echo 'vote dite parba';
}
else{
    echo 'vote dite parba na';
  
}
echo "<br>";
echo "<b> Ternary operator </b><br> ";

$result = 62;

echo ($result >= 40) ? "Passed" : " Failed";


 echo "<br>";

 
 
 echo "<u><b> four Program </b></u><br> ";// four program

 $a =10;
if($a !=='20'){
    echo 'Right';
    echo "<br>";
}
else{
    echo 'worng';
    echo "<br>";
}
echo "<b> Ternary operator </b><br> ";
$a = 10;
echo ($a !== "10") ? "right" : " worng";
echo "<br>";

 
echo "<u><b> five Program </b></u><br> ";// five program
$a=20;
$b=30;
$c=40;
$d=50;
if($c>$b && $c>$a && $c >$d){
    echo "A is greater than B , C & D ";
}
elseif($b>$a && $b>$c && $b>$d){
    echo "B is greater than A , C & D ";
}
elseif($a>$b && $a>$c && $a>$d){
    echo "C is greater than A ,B & D";
}
else{
        echo "D is greater than A , B & C" ;
        echo "<br>"; 
    } 

                                          
 echo "<u><b> Six Program </b></u><br> ";   // Six program

 if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
    echo "<br>"; 
}
                                          
echo "<u><b> seven Program </b></u><br> "; // Seven program
$marks = 101;
if($marks>=80 && $marks <=100){
    echo'A+';
}
elseif($marks>=70 && $marks <80){
    echo'A';
}
elseif($marks>=60 && $marks <70){
    echo'A-';
}
elseif($marks>=50 && $marks <60){
    echo'B';
}
elseif($marks>=40 && $marks <50){
    echo'C';
}
elseif($marks>=30 && $marks <40){
    echo'D';
}
else{
    echo'F';
    echo "<br>"; 
}

echo "<u><b> Eight </b></u><br> "; // Eignt program

function authCheck($useremail,$userpass){
    $dbemail = "razia@gmail.com";
    $dbpass =" 12345";
    
    if($useremail ==  $dbemail  )
    {
        if($userpass==$dbpass){
            echo"welcome to your dashboard";
        
   
    }
    else{
        echo"wrong password";
    }
     }
     else{
        echo"enter correct email";
        echo "<br>"; 
     }
    }
    
    authCheck("raz.ia@gmail.com",12345);

    echo "<u><b> Nine </b></u><br> "; // Nine program
function checkText($name){



if (ctype_alpha($name)){
    echo 'vaild';
    echo "<br>";
}
else{
    echo 'Invalid';
    echo "<br>";
}
}
checkText("YDTDT");

echo "<u><b> Ten</b></u><br> "; // ten program

$sum = 10;
if($sum > 0){
    echo " positive number";

}
elseif($sum < 0){
    echo " negative number";
}
else{
    echo "neutral number";
}
