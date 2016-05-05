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
        return $name;
        include(survey.php);
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
        if ($anna > $elsa && $anna > $queen && $anna > $bulda){
            $answer = $anna;
        }
        elseif ($elsa > $anna && $elsa > $queen && $elsa > $bulda){
            $answer = $elsa;
        }
        elseif ($queen > $anna && $queen > $elsa && $queen > $bulda){
            $answer = $queen;
        }
        elseif ($bulda > $anna && $bulda > $queen && $bulda > $elsa){
            $answer = $bulda;
        }
        elseif ($kristoff > $olaf && $kristoff > $hans && $kristoff > $oaken){
            $answer = $kristoff;
        }
        elseif ($olaf > $kristoff && $olaf > $hans && $olaf > $oaken){
            $answer = $olaf;
        }
        elseif ($hans > $olaf && $hans > $kristoff && $hans > $oaken){
            $answer = $hans;
        }
        elseif ($oaken > $olaf && $oaken > $hans && $oaken > $kristoff){
            $answer = $oaken;
        }
        include 'results.php';
break;
}
?>