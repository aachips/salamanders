<?php
function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamanders";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_salamander_by_id($id) {
    global $db;
    $sql = "SELECT * FROM salamanders ";
    $sql .="WHERE id=$id";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $result;
}

function update_salamander($salamander) {
    global $db;

    $errors = validate_salamander($salamander);
        $errors = [];    
    //if(!empty($errors)) {}
}

function insert_salamander($salamander) {
    global $db;
    $errors = validate_salamander($salamander);
    if(!empty($errors)) 
        return $errors;

    $sql = "INSERT INTO salamander ";
    $sql .= "(name, habitat, description) ";
    $sql .= "VALUES("; 
    $sql .= "'" . $salamander['name'] . "', "; 
    $sql .= "'" . $salamander['habitat'] . "', "; 
    $sql .= "'" . $salamander['description'] . "', "; 
    $sql .= ")";
    echo $sql; exit(); 
    $result = mysqli_query($db, $sql);

    if($result) 
        return true;
    else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}

// function delete_salamander