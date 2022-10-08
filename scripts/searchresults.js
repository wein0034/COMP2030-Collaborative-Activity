function SetField(field, attribute, content, instance = -1, child = 0)
{
    const elemList = document.getElementsByClassName(field);
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