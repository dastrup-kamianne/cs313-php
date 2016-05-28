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
    
    case 'patient_edit':
        $patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);
        include('patient_edit.php');
        break;
    
    case 'edit_patient_db':
        $id = filter_input(INPUT_POST, 'id', 
            FILTER_VALIDATE_INT);
        $fname = filter_input(INPUT_POST, 'fname');
        $lname = filter_input(INPUT_POST, 'lname');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zipcode = filter_input(INPUT_POST, 'zipcode',FILTER_VALIDATE_INT);
        $phone = filter_input(INPUT_POST, 'phone',FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email');
        include('details.php');
        break;
    
    case 'add_patient':
        include('add_patient.php');
        break;
    
    case 'add_patient_db':
        $fname = filter_input(INPUT_POST, 'fname');
        $lname = filter_input(INPUT_POST, 'lname');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zipcode = filter_input(INPUT_POST, 'zipcode',FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone',FILTER_VALIDATE_INT);
        $apptDate = filter_input(INPUT_POST, 'apptDate');
        $apptType = filter_input(INPUT_POST, 'apptType');
        $method = filter_input(INPUT_POST, 'method');
        $notes = filter_input(INPUT_POST, 'notes');
        include('patient_list.php');
        break;
    
    case 'add_appt':
        $patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);
        include('add_appt_form.php');
        break;
    
    case 'add_appt_db':
        $id = filter_input(INPUT_POST, 'id', 
            FILTER_VALIDATE_INT);
        $apptDate = filter_input(INPUT_POST, 'apptDate');
        $apptType = filter_input(INPUT_POST, 'apptType');
        include('details.php');
        break;
    
    case 'preference_edit':
        $patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);
        include('preference_edit.php');
        break;
    
    case 'edit_pref_db':
        $id = filter_input(INPUT_POST, 'id', 
            FILTER_VALIDATE_INT);
        $method = filter_input(INPUT_POST, 'method');
        $notes = filter_input(INPUT_POST, 'notes');
        include('details.php');
        break;
    
    case 'searchlname':
        $lname = filter_input(INPUT_POST, 'lname');
        include('search_results.php');
        break;
    
    case 'searchfname':
        $fname = filter_input(INPUT_POST, 'fname');
        include('search_results.php');
        break;
    
    case 'searchdate':
        $date = filter_input(INPUT_POST, 'date');
        include('search_results.php');
        break;
    }
?>