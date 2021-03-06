<?php
switch (2) {
  case 1:
    $test = 'first';
    break;
  case 2:
    $test = 'second';
    break;
  case 10:
  case 20:
    $test = 'big';
    break;
  case 100:
  default:
    $test = 1;
}

switch ($var):
  case 1:
  case 2:
    echo "Goodbye!";
    break;
  default:
    echo "I only understand 1 and 2.";
endswitch;

switch ( 2 ) {
    case 1:
        $test = 'first';
        break;
    default:
        $test = 1;
}

switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}

switch ($longLongLongLongLongLongLongLongLongLongLongLongLongLongLongLongVariable) {}

switch ($longLongLongLongLongLongLongVariable && $longLongLongLongLongLongLongVariable) {}
