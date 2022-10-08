function SetField(field, content, instance = -1)
{
    const elemList = document.getElementsByClassName(field);
    const elemArr = [...elemList];
    
    if (instance < 0)
    {
        instance = elemArr.length - 1;
    }
    
    elemArr[instance].children[0].innerText = content;
}

function CounterDisplay(text)
{
    document.getElementById("resultsCounter").innerText = text;
}