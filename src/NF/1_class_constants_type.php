<?php

interface I {
    const string PHP = 'PHP 8.2';
}

class Foo implements I {
    const string PHP = [];
}
var_dump(Foo::PHP);