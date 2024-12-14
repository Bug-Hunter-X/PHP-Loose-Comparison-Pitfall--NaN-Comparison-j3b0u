//This is the correct implementation.
function fooCorrect(a, b) {
  return Object.is(a,b);
}

//The Object.is() method correctly compares NaN values.
$a = NAN;
$b = NAN;
$result = fooCorrect($a, $b); // false
echo $result; // false

//Example with other values:
$a = 10;
$b = 10;
$result = fooCorrect($a, $b); // true
echo $result; //true

$a = 10;
$b = "10";
$result = fooCorrect($a, $b); // false
echo $result; //false