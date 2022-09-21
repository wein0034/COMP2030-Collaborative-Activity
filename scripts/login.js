var coll = document.getElementsByClassName("collapsible");
var i;

Init();

function Init() 
{
  for (i = 0; i < coll.length; i++) 
  {
    coll[i].addEventListener("click", function () { ToggleCollapse(event.target) });
  }

  if (getUrlParam("returning") === "true")
  {
    
    console.log("Entered via Log In");
    ToggleCollapse(coll[1]);
  }
  else
  {
    console.log("Entered via Sign Up");
    ToggleCollapse(coll[0]);
  }
}

function ToggleCollapse(elem) 
{
  elem.classList.toggle("active");
  var content = elem.nextElementSibling;

  if (content.style.display === "block")
  {
    content.style.display = "none";
  }
  else
  {
    content.style.display = "block";
  }
}


