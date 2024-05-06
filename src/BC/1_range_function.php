<?php

print_r(range('9', 'A'));
//print_r(range(1, 10, 0));
print_r(range(new stdClass(), [])); // object , array and resource are not more accepted starting from 8.3

