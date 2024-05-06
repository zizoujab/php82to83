<?php

// dynamic class constant fetch
class Foo {
    const PHP = 'PHP 8.3';
}

$searchableConstant = 'PHP';

var_dump(constant(Foo::class . "::{$searchableConstant}")); // PHP v 8.2
var_dump(Foo::{$searchableConstant}); // PHP v 8.3
