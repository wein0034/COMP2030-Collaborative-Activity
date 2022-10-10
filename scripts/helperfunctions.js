// contributor: taken from prac2

function getUrlParam(name)
{
    const params = new URLSearchParams(window.location.search);
    return params.has(name) ? params.get(name) : "";
}

function SetField(className, attribute, content, instance = -1, child = 0)
{
    const elemList = document.getElementsByClassName(className);
    const elemArr = [...elemList];

    if (instance < 0)
    {
        instance = elemArr.length - 1;
    }

    elemArr[instance].children[child][attribute] = content;
}

function CounterDisplay(text)
{
    document.getElementById("resultsCounter").innerText = text;
}
