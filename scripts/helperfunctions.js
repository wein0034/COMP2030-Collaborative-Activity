// contributor: taken from prac2

function getUrlParam(name)
{
    /// <summary>Retrieves the value of a URL parameter.</summary>
    /// <param name="name" type="String">The URL parameter to retrieve.</param>
    /// <returns type="String">The value of the parameter. If the parameter is not present or does not have a value, returns ""</returns>
    let parser = new DOMParser();
    const params = new URLSearchParams(window.location.search);
    return params.has(name) ? params.get(name) : "";
}


function SetField(className, attribute, content, instance = -1, child = 0)
{
    /// <summary>Overrides the content of specified attribute within a child of of an element with a specified class.</summary>
    /// <param name="className" type="String">The class of the element to target.</param>
    /// <param name="attribute" type="String">The attribute to override.</param>
    /// <param name="content" type="String">The new value of the attribute.</param>
    /// <param name="instance" type="Number">Which occurence of the class to target. Defaults to last.</param>
    /// <param name="child" type="Number">The index of the child to target. Defaults to first.</param>
    const elemList = document.getElementsByClassName(className);
    const elemArr = [...elemList];

    if (instance < 0)
    {
        instance = elemArr.length - 1;
    }

    if (child == -1)
    {
        elemArr[instance][attribute] = content;
    }
    else
    {
        elemArr[instance].children[child][attribute] = content;
    }
}

function CounterDisplay(text)
{
    document.getElementById("resultsCounter").innerText = text;
}
