var coll = document.getElementsByClassName("collapsible");
var i;

// temporarily using login.js for the login page collapsibles
// will modify this script to modularly work across all collapsible pages
// ~Julian

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
} 