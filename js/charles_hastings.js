$('.map').maphilight();

$('.map').maphilight({

  // fill the shape
  fill: true,

  // fill color
  fillColor: 'white',

  // fill opacity
  fillOpacity: 0.4,

  // outline the shape
  stroke: true,

  // stroke color
  strokeColor: ' 000000',

  // stroke opacity
  strokeOpacity: 1,

  // stroke width
  strokeWidth: 1,

  // fade in the shapes on mouseover
  fade: true,

  // always show the hilighted areas
  alwaysOn: false,

  // never show the hilighted areas
  neverOn: false,

  // The name of an attribute to group areas by, or a selector for elements in the map to group.
  // Or an array of the same
  // If this is present then all areas in the map which have the same attribute value as the hovered area will hilight as well
  groupBy: false,

  // If true, applies the class on the <img> to the wrapper div maphilight created.
  // If a string, that string is used as a class on the wrapper div.
  wrapClass: true,

  // apply a shadow to the shape
  shadow: false,
  shadowX: 0,
  shadowY: 0,
  shadowRadius: 6,
  shadowColor: '000000',
  shadowOpacity: 0.9,
  // Can be 'outside', 'inside', or 'both'.
  shadowPosition: 'outside',
  // Can be 'stroke' or 'fill'
  shadowFrom: false,

});

$('.map').maphilight().parent().addClass('center-map');





//let active = localStorage.getItem("active");

//if(active == null){
 // active = 1;
//}else{
 // active = localStorage.getItem("active") ;
//}






//let active_booking = document.getElementById("active-booking");


//function show_active_booking() { active_booking.innerHTML = active + "/1" }




//$(document).ready(show_active_booking());



//function set(){
 // active = 0;
 // localStorage.setItem("active", 0)
 // show_active_booking();
//}



//function func() {

//active = 1;
  
//setTimeout(function(){
//  func();
//},24*60*60*60);
//}






















function available(id, test){
  let ava =  document.querySelectorAll(".ava")[test].innerHTML = "Taken";
  document.querySelectorAll(".ava")[test].style.color = "red";




  switch (id) {
    case "1001":
     ava
      break;
      case "1003":
       ava
        break;
        case "1012":
      ava
        break;
        case "1010":
          ava
           break;
           case "1008":
            ava
             break;
             case "1004":
           ava
             break;
             case "1005":
              ava
               break;
               case "1006":
                ava
                 break;
                 case "1009":
               ava
                 break;
                 case "1007":
                ava
                 break;
                 case "1011":
               ava
                 break;
    default:
      break;
  }
 
  
}


