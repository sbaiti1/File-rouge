<?php

function emptyInputSignup($nom,$prenom,$email,$pswd){
    
    if(empty($nom) || empty($prenom) || empty($email) || empty($pswd) ){
        $result = true ;
    }
    else{
        $result = false;
    }
    return $result;

}

function invalidemail($email){
    
    if(! filter_var($email , FILTER_VALIDATE_EMAIL)){
        $result = true ;
    }
    else{
        $result = false;
    }
    return $result;

}

function createUser($conn,$nom,$prenom,$email,$pswd){
    $sql = "INSERT INTO USERS (firstname, lastname, email , pswd) VALUES ('$prenom', '$nom', '$email' , '$pswd')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    

 
    $conn->close();
    
}