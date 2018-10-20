<?php

/*
 * @param $date date in YYYY-MM-DD format
 */
 function isValidDate ( $date ) {
 if(preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $date, $matches)) 
  {
   if(checkdate($matches[2], $matches[3], $matches[1]))
    { 
     return true;
    } else return false;
  } else return false;
 }

function isValidName ( $name ) {
    if ( preg_match("/^[a-zA-Z ]*$/", $name) ) {
      return true;
    } else return false;
}

function isValidEmail ( $email ) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true; 
    } else return false;
}

function isValidPO ( $po ) {
    return true;
}

function isValidCompany ( $company ) {
    
}

function isValidPhone ( $phone ) {
    
}

function isValidPincode ( $pincode ) {
    
}

function isValidCategory ( $category ) {
    if( $category === "Pre" || $category === "Post") {
        return true;
    } else return false;
}

function isValidGST ( $gst ) {
    return true;
}

function isValidCIN ( $cin ) {
    return true;
}

function isValidAddress ( $address ) {
    return true;
}

function isValidCreditLimit ( $creditLimit ) {
    return true;
}

function isValidCreditTerm ( $creditTerm ) {
    return true;
}

function isValidBoolean ( $boolean ) {
    if( $boolean === 1 || $boolean === 0 ) {
        return true;
    } else return false;
}
?>