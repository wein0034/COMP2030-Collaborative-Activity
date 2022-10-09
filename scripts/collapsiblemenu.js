// contributor: Julian Weinrich wein0034

var allowMultipleExpanded = false;
var startCollapsed = true;
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

  // set every collapsible item to the default state based on 'startCollapsed'
  for (var i = 0; i < collapsibles.length; i++) 
  {
    SetCollapse(collapsibles[i], startCollapsed);
  }
}

function ToggleCollapse(elem) 
{
  elem = FindCollapsable(elem);

  // toggle whether the element passed as a parameter (elem) is currently collapsed
  elem.classList.toggle("active");
  var content = elem.nextElementSibling;
  if (content.style.display == "block")
  {
    content.style.display = "none";
  }
  else
  {
    content.style.display = "block";
  }

  // if only one element should be expanded at once, iterate through every other element and set it to be collapsed
  if (allowMultipleExpanded == false)
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

// iterate up the element heirarchy until an element with collapsible is found, then return that element
// this is required because nextElementSibling is used above to select the element to show/hide, and if an element that is a child of the element with collapsible is clicked, the toggled element will be one of its siblings instead of the correct element
function FindCollapsable(elem)
{
  var original = elem;

  while (!elem.classList.contains("collapsible"))
  {
    if (elem.parentElement != null)
    {
      elem = elem.parentElement;
    }
    else
    {
      return original
    }
  }

  return elem;
}