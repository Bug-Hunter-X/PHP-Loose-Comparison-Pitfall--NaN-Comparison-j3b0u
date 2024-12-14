function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This function will return true when a and b are same values including NaN.  This is a common pitfall.
var result = foo(NaN, NaN); // true
console.log(result); // true

// The correct implementation will use Object.is function which returns false for NaN === NaN case.
function fooCorrect(a, b) {
  return Object.is(a,b);
}

var resultCorrect = fooCorrect(NaN, NaN); // false
console.log(resultCorrect); // false