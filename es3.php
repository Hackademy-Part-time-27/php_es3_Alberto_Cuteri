<?php 

// CREA UN PROGRAMMA CHE CONTROLLA CHE LA PASSWORD INSERITA CONTENGA ALMENO 
// 8 CARATTERI, UNA LETTERA MAIUSCOLA, UN CARATTERE NUMERICO, UN CARATTERE SPECIALE.

//FATTIBILE CON WHILE, DO WHILE, IF 

$insPass = readline('Inserire password:');
$response = passwordCheck($insPass);
echo $response;

function passwordCheck($password) 
{   
    $checkLunghezza = false;
    $checkMaiuscola = false;
    $checkSpeciale = false;
    // $checkNum = false;
    
    //! check lunghezza
    function checkLenght($password) 
    {
        if(strlen($password) >= 8) {
            return true;
        }    
        return false;
    }
    
    //! check maiuscola
    function checkCapital($password) {
        
        for ($i=0; $i < strlen($password); $i++) {
            if (ctype_upper($password[$i])) {
                return true;
            }
        }
    }

    //! check carattere speciale
    function checkSpecial($password) {
        
        for ($i=0; $i < strlen($password); $i++) {
            if (htmlspecialchars($password[$i])) {
                return true;
            }
        }
    }

    $checkLunghezza = checkLenght($password);
    $checkMaiuscola = checkCapital($password);
    $checkSpeciale = checkSpecial($password);
    // $checkNum = checkNumber($password);
    
    if($checkLunghezza) {
        // echo "Lunghezza OK! \n";
    } else {
        echo "La password deve avere almeno 8 caratteri \n";
    }
    
    if($checkMaiuscola) {
        // echo "Maiuscola OK! \n";
    } else {
        echo "La password deve avere almeno una lettera maiuscola! \n";
    }   

    if($checkSpeciale) {
        // echo "Carattere speciale OK! \n";
    } else {
        echo "La password deve avere almeno un carattere speciale! \n";
    }


    //! valutiamo entrambe le condizioni
    if ($checkLunghezza && $checkMaiuscola && $checkSpeciale){
        return "Login effettuato! \n";
    } else {
        return "Password non valida! \n";
    }

    
    
}

