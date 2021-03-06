<?php

$t = new Test\Mcall();

assert($t->testCall1() === "hello public");
assert($t->testCall2() === "hello protected");
assert($t->testCall3() === "hello private");

assert($t->testCall4(2, 3) === 5);
assert($t->testCall5(6, 7) === 13);
assert($t->testCall6(4, 5) === 9);

assert($t->testCall7(2, 3) === 10);
assert($t->testCall8(6, 7) === 26);
assert($t->testCall9(4, 5) === 18);

assert($t->testCall10() === "hello public");
assert($t->testCall11() === "hello protected");
assert($t->testCall12() === "hello private");

assert($t->testCall13(2, 3) === 5);
assert($t->testCall14(6, 7) === 13);
assert($t->testCall15(4, 5) === 9);

assert($t->optionalParameterString("test") == 'test');
assert($t->optionalParameterString() == "test string");
assert($t->optionalParameterStringNull() == "");

assert($t->optionalParameterInt(1) == 1);
assert($t->optionalParameterInt() == 2);

assert($t->optionalParameterVar(1) === 1);
assert($t->optionalParameterVar("testtesttesttest") === "testtesttesttest");
assert($t->optionalParameterVar() === NULL);

assert($t->optionalParameterBoolFalse() === false);
assert($t->optionalParameterBoolTrue() === true);

assert($t->optionalParameterBooleanNull() == false);
assert($t->optionalParameterBooleanNull(true) == true);

assert($t->optionalParameterBoolean() === true);
assert($t->optionalParameterBoolean(false) === false);

try {
	$t->optionalParameterBoolean('test');
	assert(false);
} catch (InvalidArgumentException $e) {
	assert(true);
}

assert($t->arrayParamWithDefaultEmptyArray() === array());
assert($t->arrayParamWithDefaultEmptyArray(array(1)) === array(1));