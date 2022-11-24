'use strict';

///////////////////////////////
// GESTIONNAIRES D'EVENEMENT //
///////////////////////////////

function Affiche(){
    
    let lettre = $("#customer").val();
    if(lettre==''){
        window.location.reload();
    }

    $.getJSON("customer.php",{lettre : lettre}, resp1)
    
}

function AfficheDetail(){

let id= $(this).data('index');
$("#edit").attr('data-edit',$(this).data('index'));
$.getJSON("customer.php",{id:id},resp2)

}

function AfficheCustomer(){
        
    $(".detail").show();

    let id=$(this).data('edit');

    $("#submit").attr('data-submit',$(this).data('edit'));
    
    $.getJSON("customer.php",{id:id},resp3)
    
}

function UpdatDetail(event){
event.preventDefault();
    // let id=$(this).data('submit');
let customer={}
customer.customerNumber=$(this).data('submit');
customer.customerName=$("input[name=names]").val();
customer.addressLine1=$("input[name=adres1]").val();
customer.addressLine2=$("input[name=adres2]").val();
customer.postalCode=$("input[name=code]").val();
customer.city=$("input[name=ville]").val();
customer.country=$("input[name=pays]").val();
customer.contactLastName=$("input[name=lname]").val();
customer.contactFirstName=$("input[name=fname]").val();
customer.phone=$("input[name=phone]").val();

    $.post("customer.php",{customer:customer},function(data,resp){

        if(resp!=false) 
        {   
            
        
            $(".detail").hide()
            
        }
        else
        {
            alert('erreur de mise a jour');
        }
    
       
    });
    
}

