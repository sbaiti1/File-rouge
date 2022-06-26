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

function emptyInputLogin($email,$pswd){
    
    if(empty($email) || empty($pswd) ){
        $result = true ;
    }
    else{
        $result = false;
    }
    return $result;

}

function update_user_infos($conn,$nom,$prenom,$email,$pswd){
    $sql = "UPDATE USERS
    SET firstname = 'kkk '
    WHERE id = 5;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo "hello world";
  }

}

}

//photo 
function photo($nom){
    switch($nom){
        case "salma":
            $photo = "me";
            break;

        case "somaya":
            $photo = "bestie";
            break;

        case "clara":
            $photo = "brunnete";
            break;
        case "abderazak":
            $photo = "ziko";
            break;

        default:
        $photo = "user";
        
    }
    return $photo;
}