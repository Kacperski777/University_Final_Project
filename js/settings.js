
/* ALL VARIABLES */

var toggleOn = document.getElementsByClassName('toggleOn')[0];
var toggleOff = document.getElementsByClassName('toggleOff')[0];

var bodys = document.body;
var center = document.querySelectorAll(".center")[0];
var icon = document.querySelectorAll("i")[0];
var all = document.getElementsByTagName('html')[0]

var small_font = document.getElementById('small-font')
var medium_font = document.getElementById('medium-font')
var large_font = document.getElementById('large-font')



/* ------------ */



/* LOCAL STORAGE */
  all.style.fontSize = localStorage.font;
bodys.style.backgroundColor = localStorage.set1;
  bodys.style.color = localStorage.set2;
  icon.style.color = localStorage.set2;



/* ------------ */


/* TOGGLE ON AND TOGGLE OFF FUNCTION FOR DARK MODE */

toggleOff.addEventListener("click", function(){
  toggleOff.style.display = "none";
  toggleOn.style.display = "block";
  localStorage.setItem('set1', "black");
  localStorage.setItem('set2', "#87CEFA");
    localStorage.setItem('dark', "_dark");
  bodys.style.backgroundColor = localStorage.set1;
  bodys.style.color = localStorage.set2;
  icon.style.color = localStorage.set2;
});


toggleOn.addEventListener("click", function(){
    toggleOn.style.display = "none";
  toggleOff.style.display = "block";
  localStorage.setItem('set1', "#87CEFA");
  localStorage.setItem('set2', "black");
      localStorage.setItem('dark', "");


  bodys.style.backgroundColor = localStorage.set1;
  bodys.style.color = localStorage.set2;
    icon.style.color = localStorage.set2;
});

/* ---------------------------------------------- */


/* MORE VARIABLES FOR FONT OPTION */

var small = document.getElementsByClassName('smalls')[0];
var medium = document.getElementsByClassName('medium')[0];
var large = document.getElementsByClassName('large')[0];
var smallFont = document.getElementsByClassName('pSfont')[0]
var mediumFont = document.getElementsByClassName('pMfont')[0]
var largeFont = document.getElementsByClassName('pLfont')[0]

/* ----------------------------- */


/* FONT SIZE SETTING - CHANGING PIXELS */


small_font.addEventListener("click", function(){
  localStorage.setItem('font', "14px");
  all.style.fontSize = localStorage.font;
})

medium_font.addEventListener("click", function(){
  localStorage.setItem('font', "16px");
  all.style.fontSize = localStorage.font;
})

large_font.addEventListener("click", function(){
  localStorage.setItem('font', "22px");
  all.style.fontSize = localStorage.font;
})

/* ------------------------------------ */








/* FONT SIZE FUNCTIONS - DISPLAYS A PARAGRAPH WHEN MOUSE IS OVER CERTAIN ICON */

small.addEventListener("mouseover", function(){
  smallFont.style.display = "block";
})

small.addEventListener("mouseout", function(){
  smallFont.style.display = "none";
})

medium.addEventListener("mouseover", function(){
  mediumFont.style.display = "block";
})

medium.addEventListener("mouseout", function(){
  mediumFont.style.display = "none";
})

large.addEventListener("mouseover", function(){
  largeFont.style.display = "block";
})

large.addEventListener("mouseout", function(){
  largeFont.style.display = "none";
})


/* -------------------------------------------------------------------------- */


/* WINDOW MODE FUNCTION - DECLARES NEW VARIABLE AND OPENS IT IN A NEW SMALLER WINDOW (600x650)  */

let windowTab

function openWin(){
  windowTab = window.open(
              "./index.html", "_blank", "width=600, height=650");
}

/* -------------------------------------------------------------------------------------------  */


function alerts(){
  alert("Feature not Available!")
}