<?php 
include 'hospital_data.php';
$patient_count = $hospitalObj->display_patient();
$count = count($patient_count);

// echo $count;

if($count >= 4){ 
    echo "room is full";
}else{
    echo "add more: <input type = 'text'>";
}

echo "<pre>";
print_r($patient_count);
echo "</pre>";
?>