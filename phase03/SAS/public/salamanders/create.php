<?=
require_once('../../private/initialize.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Handle form values sent by new.php
    $salamanderName = $_POST['salamanderName'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
    
    echo "Form parameters<br>";
    echo "Salamander: " . $salamanderName . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Variable: " . $visible . "<br>";
}

else
    redirect_to('/staff/subjects/new.php');