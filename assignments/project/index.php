<?php
require('db_connect.php');
require('db_patient.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'options';
    }
}

switch ($action){
    case 'options':
        include ('dentallist.php');
        break;
    
    case 'get_patients':
        include ('patient_list.php');
        break;
        
    case 'search_patients':
      include('patient_search.php');
        break;
    
    case 'patient_details':
        $patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);
        include('details.php');
        break;
    
    case 'search':
        
        include('search_results.php');
        break;
    }
?>