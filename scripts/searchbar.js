var showOnIndexPage = false;

Init()

function Init()
{
    Cosmetic();
}

function Cosmetic()
{
    var searchBars = document.getElementsByClassName("searchBar");

    // Go through each search bar...
    for (const SB of searchBars) 
    {
        for (const child of SB.children) 
        {
            // find the text box...
            if (child.hasAttribute("placeholder"))
            {
                // if the search bar is on the index page...
                if(SB.parentElement.classList.contains("indexBar"))
                {
                    // change the placeholder
                    child.setAttribute("placeholder", "Something else...");   

                    // hide the top bar search bar on the index page if the setting to do so is on
                    if (!showOnIndexPage)
                    {
                        for (const other of searchBars) 
                        {
                            if (other != SB)
                            {
                                other.style.display = "none";
                            }
                        }
                    }
                }
                // keep the most recent search query into the textbox between pages
                else if (getUrlParam("searchQuery") != "")
                {
                    child.setAttribute("value", getUrlParam("searchQuery"));   
                }
            }
        }
    }
}
