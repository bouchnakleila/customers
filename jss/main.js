'use strict';

////////////////////
// CODE PRINCIPAL //
////////////////////
$("#customer").on('keyup',Affiche);

$(".result").on('click','a',AfficheDetail);

$("#edit").on('click',AfficheCustomer);
    
$("#submit").on('click',UpdatDetail);

