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
        $patients = get_patients();
        include ('patient_list.php');
        break;
        
    case 'search_patients':
        include('patient_search.php');
        break;
    
    case 'patient_details':
        $patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);
        $patient = display_details($patient_id);
        include('details.php');
        break;
    
    case 'show_add_form':
        $categories = get_categories();
        include('recipe_add.php');
        break;
    case 'add_recipe':
        $name = filter_input(INPUT_POST, 'name');
        $ingredients = filter_input(INPUT_POST, 'ingredients');
        $directions = filter_input(INPUT_POST, 'directions');
        $gluten = isset($_POST['Gluten']);
        $dairy = isset($_POST['Dairy']);
        $egg = isset($_POST['Egg']);
        $allergy = isset($_POST['Allergy']);
        
        if ($name == NULL || $ingredients == NULL || $directions == NULL ) {
            $error = "Invalid entry. Check all fields and try again.";
            include('error.php');
        }
        else if (($gluten == FALSE) && ($dairy == FALSE) 
             && ($egg == FALSE) && ($allergy == FALSE)){
            $error = "Invalid entry. Please mark at least one checkbox.";
            include('error.php');    
        }
        else { 
            add_recipe($name, $ingredients, $directions, $gluten, $dairy, $egg);
            include('recipe_view.php');
        }
        break;
    case 'show_edit_form':
        $recipe_id = filter_input(INPUT_POST, 'recipe_id', 
            FILTER_VALIDATE_INT);
        $recipe = get_recipe($recipe_id);
        $categories = get_categories();
        include('recipe_edit.php');
        break;
    case 'edit_recipe':
        $recipe_id = filter_input(INPUT_POST, 'recipe_id', 
            FILTER_VALIDATE_INT);
        $name = filter_input(INPUT_POST, 'name');
        $ingredients = filter_input(INPUT_POST, 'ingredients');
        $directions = filter_input(INPUT_POST, 'directions');
        $gluten = isset($_POST['Gluten']);
        $dairy = isset($_POST['Dairy']);
        $egg = isset($_POST['Egg']);
        if ($recipe_id == NULL || 
            $recipe_id == FALSE || $name == NULL || 
            $ingredients == NULL || $directions == NULL) {
            $error = "Invalid entry. Check all fields and try again.";
            include('error.php');}
        else if (($gluten == FALSE) && ($dairy == FALSE) 
             && ($egg == FALSE) && ($allergy == FALSE)){
            $error = "Invalid entry. Please mark at least one checkbox.";
            include('error.php');    
        }
        else { 
            edit_recipe($recipe_id, $name, $ingredients, $directions, $gluten, $dairy, $egg);
            header("Location: .?category_id=$category_id");
        }
        break;
}

?>