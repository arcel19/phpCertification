<?php 

declare(strict_types = 1);

// require_once 'App/Account.php';
require_once 'App/socialMedia.php';
require_once 'App/Dnatest.php';
require_once 'App/Grade.php';

// spl_autoload_register( function($class) {
//     $formattedClass = str_replace("\\", "/", $class);
//     $path = "{$formattedClass}.php";

//     require_once $path;
// });

// use App\{Account,socialMedia,Dnatest};

// $myAccount = new Account('john', 20);

// $myAccount?->deposit(30);
 

// $timezone = new DateTimeZone("America/Chicago");
// $date = new DateTimeZone("12/22/78", $timezone);
// $date->setTimezone(new DateTimeZone("Europe/Paris"))
// ->SetDate(2023, 6 ,16)
// ->setTime(9, 30);

// echo "<pre>";
//     var_dump($date);
// echo " </pre>";



use App\Dnatest,Grade;

$Test = new Dnatest;

// echo "<pre>";
//     var_dump($Test->nucleotidecount('GATTACA'));
// echo "</pre>";


$student = new Grade;

$student->add('junioer', 4);
$student->add('chris', 4);
$student->add('apple',2);
$student->add('add', 1);
$student->add('acdd',5);
$student->grades(4);
$student->grades(1);
$student->studentsByGrade();

echo "<pre>";
    var_dump($student);
echo "</pre>";