function titlePage(title) {
    titleDOM = document.getElementById("page-title");
    titleDOM.innerText = title;
}

function selectLinks(element_ids) {
    element_ids.forEach(element_id => {
        elementDOM = document.getElementById(element_id);
        elementDOM.classList.add("nav-menu-link--selected");
    });
}