<?php
 
$recuperation2 = $_POST['Pedro'];
 
switch($recuperation2 ){
    case 1:
        echo "one";
        break;
        case 2:
            echo "two";
            break;
            case 3:
                echo "three";
            break;
            case 4:
                echo "four";
            break;
            case 5:
                echo "five";
            break;
}
$result = $_POST['Pedro'];

if($result>5){
    echo ('Numero invalido');
}
