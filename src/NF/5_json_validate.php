<?php

function checkJsonValid(string $string): bool {
    json_decode($string);

    return json_last_error() === JSON_ERROR_NONE;
}


// php > 8.3
var_dump(json_validate('{ "test": { "foo": "bar" } }')); // true

