<?php 

// Create Function Hello

function hello()
{
    echo "Hello,World";
}

hello(); //Hello World

$current_user="Mike";

function is_mike()
{
    global $current_user;
    
    if($current_user=="Mike")
    {
        echo "\nYou Is Mike";
    }else{
        echo "\nNope, You not mike";
    }
}

is_mike();

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hello,$key \n";
        }
    }else
    {
        echo "Hello Friend !";
    }
}

helloName(["Make","Mohede",":Hompton"]);



function get_info($name,$title=NULL)
{
    if($title)
    {
        echo "$name was arrived,and came as $title";
    }else
    {
        echo "$name was arrived,welcome";
        
    }
}

get_info("Mike","frog");

function helloWorld($word)
{
    return "\nHello World $word";
}

// $hello=helloWorld(); //\nHello World
// var_dump(helloWorld());

// echo $hello;
// var_dump($hello); 

echo PHP_EOL;

function add_up($a,$b)
{
    return [$a,$b,$a+$b];
}

print_r(add_up(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;
    }
    
    return $result;
}

var_dump(sumArray([1,4,5,5]));



function answer()
{
    return "You anwer the question";
}

$answer=answer(); //saved n variable

echo PHP_EOL;

//callback function

$answer_cal="answer";

echo $answer_cal()."!!"; //Call Function 

//anonymus function

$askName="what is your name ?";
$name="Buddy";

echo PHP_EOL;

$ask=function()use($askName,$name) // ini untuk yang global
{
    return "Ask the question ?,$askName $name";
};

echo $ask();

echo PHP_EOL;

$ask=function()use($askName)
{
    return "Ask the question?,$askName";
};

echo $ask();

function br()
{
    echo PHP_EOL;
}
br();
//Byuilt-in string function

$magang="magang TOP jos";

echo strlen($magang); //14 

br();

echo substr($magang,7); //TOP jos

br();

echo substr($magang,7,6); //TOP jos

br();

echo strpos($magang,"j"); //11

br();

echo $magang[11]; //j


$team=["Mike"=>"Developer","Crish"=>"Designer","Hompton"=>"Manager"];

print_r(array_keys($team)); //array_keys berguna untuk menampilkan

var_dump(array_key_exists("John",$team)); //array_key_exists untuk mengecek ada atau enggaknya key contoh ("John")

array_walk($team,function($value,$key){

    echo " $key is a $value \n";
});


if(array_key_exists("Mike",$team))
{
    echo "Mike found is \$team";
}else{
    echo "Mike not found is \$team";

}

br();

array_walk($team,function($value,$key){
    echo "$key is a $value";
});









?>