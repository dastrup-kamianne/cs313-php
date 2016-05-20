<?php

function get_patients(){
$query = 'SELECT * FROM patient
         ORDER BY patientNumber';
$statement = $db->prepare($query);
$statement->execute();
$patients = $statement->fetchAll();
$statement->closeCursor();
return $patients;
}

function display_details($number) {
    global $db;
    $query = 'SELECT * FROM patient
             WHERE patientNumber = :number';
$statement = $db->prepare($query);
$statement->bindValue(':number', $number);
$statement->execute();
$patient = $statement->fetch();
$statement->closeCursor();
return $patient;

}













?>