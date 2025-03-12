<?php
// $name="shaky";
// var_dump($name);

// $age=39;
// var_dump($age);
// $base=20;
// $height=15;
// $area=$base * $height;
//  $perimeter = $base + $height;
//  print($area);
//  print($perimeter);
//  $remainder = 5%2; 
// $firstname = "shamirah";
// $lastname = "shamy//  print($remainder);
// ";
// $fullname = $firstname . ' ' . $lastname;
// print($fullname);
// $name = "good";
// $length = strlen($name);
// var_dump($length);


// $str = "Hello World!";
// echo $str . "<br>";
// echo trim($str,"Hed!");

// $str = strtoupper("i am trying my level best to be a programmer");
// echo strtoupper($str);
// echo strtolower($str);

// $text = 'my name is nakanjako Suzan';
// echo ucfirst($text);

// $names = 'samalie, maria, suzan, mike';
// $names = explode(',',$names);
// var_dump($names);
// $names = implode(',',$names);
// var_dump($names).'<br>';



// echo ceil(12.3). '<br>';


// $string = 3.87564;
// echo floor($string);
// echo round($string). '<br>' .'<br>';



// echo rand(3,8). '<br>';



// echo max(1, 2, 3, 4, 5, 6, 10). '<br>';
// echo min(1, 2, 3, 4, 5, 6, 13 );


// $list = [1, 2, 3]; 
// array_unshift($list,5); 
// $count = count($list);
// print_r ($list);
// var_dump($count);

// $str = 'one,two,three,four';
// $explode = explode(",", $str);
// print_r($explode);





// $yes = array('this', 'is', 'an array');

// echo is_array($yes) ? 'good' : 'not an Array';
// echo "\n";

// $no = 'this is a string';






// $a = "Hello world";
// echo is_array($a);

// $is_array = is_array($no);

// print_r($is_array);

// $a = array("a"=>"shamy","b"=>"shaky","c"=>"shamy");
// print_r(array_unique($a)). '<br>' .'<br>';



// $a = array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a). '<br>';



// $a = array("a"=>"shamy","b"=>"ratif","c"=>"sharifah");
// print_r(array_reverse($a)). '<br>';
 

// function myfunction($d,$c)
// {
// return $d . "," . $c;
// }
// $a = array("shamy","shaky","ratif");
// print_r(array_reduce($a,"myfunction"));

// $numbers = [1, 2, 3, 4, 5];

// $sum = array_reduce($numbers, function ($carry, $item) {
//     return $carry + $item;
// }, 0);

// echo $sum; 


// $numbers = [1, 2, 3, 4, 5];

// $squaredNumbers = array_map(function ($num) {
//     return $num * $num;
// }, $numbers);

// print_r($squaredNumbers). '<br>';
// $words = ["hello", "world", "php"];

// $upperWords = array_map('strtoupper', $words);

// print_r($upperWords). '<br>';



// $numbers = [1, 2, 3, 4, 5, 6,7,8,9,10,11,12];

// $oddNumbers = array_filter($numbers, function ($num) {
//     return $num % 2 == 1;
// });

// print_r($oddNumbers);


// $array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// print_r(array_rand($array,1)). "\n";




// $a = array("A","Cat","Dog","A","Dog");
// print_r(array_count_values($a))."\n";



// $fruits = ["Apple", "Banana", "Cherry"];

// $result = implode(", ", $fruits);

// echo $result; 




// $a = array("red","green","blue");
// array_pop($a);
// print_r($a);

// $a=array("red","green","blue");
// array_shift($a);
// print_r($a);


// $numbers = array(4, 6, 2, 22, 11);


// sort($numbers);
// print_r($numbers);


// $numbers = array(4, 6, 2, 22, 11);
// rsort($numbers);


// $fruits = ["apple", "banana", "cherry"];

// array_walk($fruits, function (&$item) {
//     $item = strtoupper($item); 
// });

// print_r($fruits);



// $a = array("Volvo"=>"XC90","BMW"=>"X5");
// if (array_key_exists("Volvo",$a))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }



//   $a = array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
//   print_r(array_keys($a));


//   $a = array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
//   print_r(array_values($a));





// $counter = 0;
// while($counter <100){
//     echo "$counter";
//     $counter++;
// }

// $counter = 0;
// do{
//     echo $counter;
//     $counter++;
// } while($counter < 10);



// $list = ['a', 'b','c','d'];
// foreach($list as $value){
//     echo $value;
// }

// $list = ['a', 'b', 'c', 'd'];
// for($i = 0; $i < count($list); $i++){
//     echo $list[$i];
// }


// $list = ['a', 'b', 'c'];
// for ($i = 0; $i < count($list); $i++) {
//  if ($list[$i] == 'b') {
//  break;
//  }
//  echo $list[$i];
// }




// $list = ['a', 'b', 'c'];
// for ($i = 0; $i < count($list); $i++) {
//  if ($list[$i] == 'b') {
//  continue;
//  }
//  echo $list[$i];
// }



// $character = 'a';
// function test() {
//  return 'b';
// }
// $character = test();


$character = 'a';
function test($c) {
 echo $c;
}
test($character);


?>


