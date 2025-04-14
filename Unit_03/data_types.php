<?php
// Since this is only a php file, I will not have the closing tag. 
// If you need to use single quotes and have contractions, do as follows:
$contraction_example = 'I\'m you\'re example';

// Maybe we want to append an exclamation to the contraction example:
echo $contraction_example . '!';

// Maybe we want to concatenate an exclamation, white space, and the contraction example again:
echo $contraction_example . '!' . ' ' . $contraction_example;

// So far I have only used single quotes, so now let's use double quotes so I don't need to worry about using this character `\` to escape like I have to when using single quotes and have contractions.
echo "{$contraction_example} this is using double quotes and the variable 'contraction example'.";

// I can add a new line
echo "\n";

// I can tab something
echo "\t this indention uses tab";

// To echo a number, you can simply output the number
echo 42;

// Or, if you want it to output the result of 4 * 2
echo 4 * 2;

// PHP is able to convert strings like this and treat them as numbers
echo '4' * '2';

// We can round numbers, and we can round to specific digit which is the second parameter
echo round(3.33, 1);

$test_num = 1;

// We can update test_num
$test_num = $test_num + 2;

// Now, test_num will be 3.

// We can use the var_dump function to help debug better than just using echo. For strings:
var_dump('Hello from var-dump');

// For integers
var_dump(42);

// For floating point number
var_dump(3.14);

// This will return int(9)
var_dump('4' + 5);

// Use var_dump with a variable
$message = 'Howdy friend!';
var_dump($message);

// Passing in booleans
var_dump(true);
var_dump(false);

// Compare conditions and return true/false
$meaning = 42;
var_dump($meaning > 13);  // true
var_dump($meaning < 13);  // false
var_dump($meaning >= 13); // true

$name = 'Dez';
var_dump($name === 'Dez'); // true
var_dump($name !== 'Dez'); // false

var_dump($meaning === '42'); // false, because it is comparing an integer type to a string type
var_dump($meaning == '42');  // true, because we are not comparing the type only the value

// If we want to check if a variable exists or not, we use the isset function
var_dump(isset($name)); // This would return true, because I do have the variable $name set so it does exist.
var_dump(isset($mamba)); // This would return false, because I do not have the variable $mamba set so it does not exist.

var_dump(empty($name)); // This would return false, because I have a variable $name set and it is NOT empty.
var_dump(empty($mamba)); // This would return true, because I do not have a variable $mamba set and it is read as empty. If $mamba was a defined but empty string, this would also return true.

// If we wanted to completely remove a variable, then we can use unset. This only applies to code below the unset, as it is read from top to bottom. 
unset($test_num);


