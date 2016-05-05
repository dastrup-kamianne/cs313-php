<?php
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'start_survey';
    }
}

switch ($action){
    case 'start_survey':
        break;
    case 'continue':
        $name = filter_input(INPUT_POST, 'name');
        $gender = filter_input(INPUT_POST, 'gender');
        include(survey.php);
        return $name;
        return $gender;
        break;
    case 'show_results':
        $food = filter_input(INPUT_POST, 'food');
        $hair = filter_input(INPUT_POST, 'hair');
        $activity = filter_input(INPUT_POST, 'activity');
        switch ($food){
            case 'anna':
                $anna += 1;
                return $anna;
                break;
            case 'elsa':
                $elsa += 1;
                return $elsa;
                break;
            case 'queen':
                $queen += 1;
                return $queen;
                break;
            case 'bulda':
                $bulda += 1;
                return $bulda;
                break;
            case 'kristoff':
                $kristoff += 1;
                return $kristoff;
                break;
            case 'olaf':
                $olaf += 1;
                return $olaf;
                break;
            case 'hans':
                $hans += 1;
                return $hans;
                break;
            case 'oaken':
                $oakn += 1;
                return $oaken;
        break;}
        switch ($hair){
            case 'anna':
                $anna += 1;
                return $anna;
                break;
            case 'elsa':
                $elsa += 1;
                return $elsa;
                break;
            case 'queen':
                $queen += 1;
                return $queen;
                break;
            case 'bulda':
                $bulda += 1;
                return $bulda;
                break;
            case 'kristoff':
                $kristoff += 1;
                return $kristoff;
                break;
            case 'olaf':
                $olaf += 1;
                return $olaf;
                break;
            case 'hans':
                $hans += 1;
                return $hans;
                break;
            case 'oaken':
                $oakn += 1;
                return $oaken;
                break;
        }
        switch ($activity){
            case 'anna':
                $anna += 1;
                return $anna;
                break;
            case 'elsa':
                $elsa += 1;
                return $elsa;
                break;
            case 'queen':
                $queen += 1;
                return $queen;
                break;
            case 'bulda':
                $bulda += 1;
                return $bulda;
                break;
            case 'kristoff':
                $kristoff += 1;
                return $kristoff;
                break;
            case 'olaf':
                $olaf += 1;
                return $olaf;
                break;
            case 'hans':
                $hans += 1;
                return $hans;
                break;
            case 'oaken':
                $oakn += 1;
                return $oaken;
        break;}
        break;
}
?>