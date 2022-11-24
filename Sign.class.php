<?php
include 'Database.class.php';
include 'sign.phtml';

class Sign
{
    public function signin($customerName, $contactLastName,
                           $contactFirstName, $phone,$addressLine1, $addressLine2,
                           $city, $state, $postalCode, $country,$salesRepEmployeeNumber, $creditLimit)
    {
        $pdo= new Database();

        $sql= " INSERT INTO `customers`(`customerName`, `contactLastName`,
                                `contactFirstName`, `phone`,`addressLine1`, `addressLine2`,
                                `city`, `state`, `postalCode`, `country`,`salesRepEmployeeNumber`, `creditLimit`)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        $pdo->executeSql($sql,[$customerName, $contactLastName,
                                        $contactFirstName, $phone,$addressLine1, $addressLine2,
                                        $city, $state, $postalCode, $country,$salesRepEmployeeNumber, $creditLimit]);
    }
}
                
$sign= new Sign();
$id=$sign->signin($_POST['names'],$_POST['lname'],$_POST['fname'],$_POST['phone'],$_POST['adres1'],
$_POST['adres2'],$_POST['ville'],$_POST['state'],$_POST['code'],$_POST['pays'],
$_POST['salesrep'],$_POST['credit']);

echo $id;
