<?php
declare(strict_types=1);
enum Error: int
{
    case NO_ERROR = 0;
    case INVALID_USER = 1;
    case USER_LAB_HIDDEN = 2;
    case NO_GROWING_CREATURES = 3;
    case CREATURE_DOES_NOT_EXIST = 4;
    case INVALID_API_CALL = 5;
    case SPECIES_DOES_NOT_EXIST = 6;
    case TAB_DOES_NOT_EXIST = 7;
    case TAB_HIDDEN = 8;
}
