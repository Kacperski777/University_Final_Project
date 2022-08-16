
/* TIME FUNCTION FOR INDEX HOME PAGE, SHOWING AND UPDATING EVERY SECOND TIME AND DATE */

function time(){

  // Declaring date in a const
  const date = new Date();
 // Declaring hours, minutes and seconds in const
  const hours = date.getHours();
  const minutes = date.getMinutes();
  const seconds = date.getSeconds();


  // Adding all those const into one variable
  let times = hours + ":" + minutes + ":" + seconds;


  //if/else statement, adding a zero to make the timer look nicer e.g. 18:5:2 to 18:05:02
  if(seconds < 10){
   times = hours + ":" + minutes + ":0" + seconds;
    document.getElementById('date_id').innerHTML = times;
  }
  if(minutes < 10){
    times = hours + ":0" + minutes + ":" + seconds;
    document.getElementById('date_id').innerHTML = times;
  }
  if(seconds < 10 && minutes < 10){
    times = hours + ":0" + minutes + ":0" + seconds;
    document.getElementById('date_id').innerHTML = times;
  }
  else{
    date.getSeconds();
  }

  //shows the date on index page
  document.getElementById('date_id').innerHTML = times;
  document.getElementById('date_id2').innerHTML = date.toLocaleString('en-GB' , {
    weekday: 'long', // long, short, narrow
    day: 'numeric', // numeric, 2-digit
    year: 'numeric', // numeric, 2-digit
    month: 'long', // numeric, 2-digit, long, short, narrow
  });

    // call this function again in 1000ms
  setTimeout(time, 1000);
}

/* ------------------------------------------------------------------------------------ */


// EXECUTING THE FUNCTION
time();
