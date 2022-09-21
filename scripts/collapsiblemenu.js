var allowMultipleExpanded = new Boolean(true);
var collapsibles;

Init()

function Init()
{
  // add an event listener to every element with the "collapsible" class
  collapsibles = document.getElementsByClassName("collapsible");
  for (var i = 0; i < collapsibles.length; i++) 
  {
    collapsibles[i].addEventListener("click", function () { ToggleCollapse(event.target) });  // ToggleCollapse loaded from collapsiblemenu.js
  }
}

function ToggleCollapse(elem) 
{
  // toggle whether the element passed as a parameter (elem) is currently collapsed
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

  // if only one element should be expanded at once, iterate through every other element and set it to be collapsed
  if (!allowMultipleExpanded)
  {
    for (var i = 0; i < collapsibles.length; i++) 
    {
      if (collapsibles[i] != elem)
      {
        SetCollapse(collapsibles[i], true);
      }
    }
  }
}

// set certain elements to be collapsed or not
function SetCollapse(elem, collapse)
{
  var content = elem.nextElementSibling;

  if (collapse)
  {
    elem.classList.remove("active");
    content.style.display = "none";
  }
  else
  {
    elem.classList.add("active");
    content.style.display = "block";
  }
}

// allow external scripts (eg login.js) to customise this setting
function SetAllowMultipleExpanded(set)
{
  if (set === true)
  {
    allowMultipleExpanded = true;
  }
  else
  {
    allowMultipleExpanded = false;
  }
}
