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
