<?php
include "Database.class.php";
class Search
{
    public function afficheCustomer($lettre)
    {
     
    //$lettre = json_encode($lettre);

    //echo $lettre;
    
    $pdo = new Database();

    $sql = "SELECT * FROM `customers` WHERE `customerName` like '$lettre%'";

    $result = $pdo->query($sql);

    return $result;

    }    

    public function detail($id)
    {
        $pdo = new Database();

        $sql = "SELECT * FROM `customers` WHERE `customerNumber`= ?";
    
        $result = $pdo->queryOne($sql,[$id]);
    
        return $result;

    }

    public function editer($customerName,$contactLastName,$contactFirstName,$phone,
                           $addressLine1,$addressLine2,$city,$postalCode,$country,$id)
    {
       
    

        $pdo = new Database();

        
        $sql ="UPDATE `customers` 
                SET `customerName`='$customerName',`contactLastName`='$contactLastName',`contactFirstName`='$contactFirstName',`phone`='$phone',
                    `addressLine1`='$addressLine1',`addressLine2`='$addressLine2',`city`='$city',`postalCode`='$postalCode',`country`='$country' 
                WHERE `customerNumber`='$id'";

                $result = $pdo->executeSql($sql);

        
    }
    
}


