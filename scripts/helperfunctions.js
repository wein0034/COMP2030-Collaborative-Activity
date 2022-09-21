function getUrlParam(name)
{
    const params = new URLSearchParams(window.location.search);
    return params.has(name) ? params.get(name) : "";
}