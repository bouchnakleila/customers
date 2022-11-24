'use strict';

////////////////////////////////////////////////////////////////////
// FONCTIONS SPECIFIQUES AU PROJET HORS GESTIONNAIRES D'EVENEMENT //
////////////////////////////////////////////////////////////////////

function resp1(data) {
        
    data.forEach(element => {
        $('.result').append(`<li><a href="#" data-index=${element.customerNumber}>${element.customerName}</a></li>`);
    });
    
}

function resp2(data){
   
    $("#name").html(data['customerName']);
    $("#contact").html(data['contactLastName']);
    $("#phone").html(data['phone']);
    $("#adress").html(data['addressLine2']);
    $("#country").html(data['country']);
    $(".customer-detail").css("display","block"); 
    
}

function resp3(data) {

    $("input[name=lname]").val(data['contactLastName']);
    $("input[name=fname]").val(data['contactFirstName']);
    $("input[name=phone]").val(data['phone']);
    $("input[name=names]").val(data['customerName']);
    $("input[name=adres1]").val(data['addressLine1']);
    $("input[name=adres2]").val(data['addressLine2']);
    $("input[name=code]").val(data['postalCode']);
    $("input[name=ville]").val(data['city']);
    $("input[name=pays]").val(data['country']);
}

