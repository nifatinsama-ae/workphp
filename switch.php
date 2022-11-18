<?php

$today = date('D');

//switch ($today) {
    //case 'Fri':
        //echo "วันนี้ วันศุกร์";
       // break;
    //case 'Sat':
       // echo "วันนี้ วันเสาร์";
       // break;
     //case 'Son':
         //echo "วันนี้ วันอาทิตย์";
       // break;
    //case 'Mon':
       // echo "วันนี้ วันจันทร์";
        // break;
   // case 'Tue':
         //echo "วันนี้ วันอังคาร";
        // break;
    //case 'Wed':
        //echo "วันนี้ วันพุธ";
        // break;
    //case 'Thu':
        //echo "วันนี้ วันพฤหัสบดี";
        // break;
    
   // default:
       // echo "วันนี้ วันพฤหัสบดี";
      //  break;
//}
$mounth = date('M');

switch ($mounth) {
    case 'Nov':
        echo "เดือนนี้ได้ พฤศจิกายน";
        break;
    case 'Dec':
        echo "เดือนนี้ได้ ธันวาคม ";
        break;
     case 'Jan':
        echo "เดือนนี้ได้ มกราคม";
        break;
    case 'Feb':
        echo "เดือนนี้ได้ กุมภาพันธ์";
         break;
    case 'Mar':
         echo "เดือนนี้ได้ มีนาคม";
         break;
     case 'Apr':
        echo "เดือนนี้ได้ เมษายน";
        break;
    case 'May':
        echo "เดือนนี้ได้ พฤษภาคม";
        break;
     case 'Jun':
        echo "เดือนนี้ได้ มิถุนายน";
        break;
    case 'Jul':
         echo "เดือนนี้ได้ กรกฎาคม";
         break;
     case 'Aug':
         echo "เดือนนี้ได้ สิงหาคม";
        break;
    case 'Sept':
        echo "เดือนนี้ได้ กันยายน";
        break;   
     case 'Oct':
        echo "เดือนนี้ได้ ตุลาคม";
        break;   
           
   

    
    default:
        echo "เดือนนี้ได้ พฤษจิกายน";
        break;
}





?>
