// contributor: Julian Weinrich wein0034

Init();

function Init() 
{
  SetAllowMultipleExpanded(false);  //SetAllowMultipleExpanded loaded from collapsiblemenu.js

  if (getUrlParam("returning") === "true")  // getUrlParam loaded from helperfunctions.js
  {
    
    console.log("Entered via Log In");
    ToggleCollapse(collapsibles[1]);
  }
  else
  {
    console.log("Entered via Sign Up");
    ToggleCollapse(collapsibles[0]);
  }
}
