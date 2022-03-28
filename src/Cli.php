<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function welcome()
{
    print_r("Welcome to the Brain Game!\n");
    $name = prompt("May I have your name?\n");
    print_r("Hello, " . $name . "!\n");
}
