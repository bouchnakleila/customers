<?php
include 'Search.class.php';

$search=new Search();

if(!empty($_GET['lettre']))
{
    $result=$search->afficheCustomer($_GET["lettre"]);
    echo json_encode($result);
}

if(!empty($_GET['id']))
{
    $result=$search->detail($_GET["id"]);
    echo json_encode($result);
}

if(!empty($_POST['customer']))
{
    $customer=$_POST['customer'];
    $result  =$search->editer($customer['customerName'],$customer['contactLastName'],$customer['contactFirstName'],
              $customer['phone'],$customer['addressLine1'],$customer['addressLine2'],$customer['city'],
              $customer['postalCode'],$customer['country'],$customer['customerNumber']);
}
    