function resizeCategoriesNavbar() {
    let categoriesListElement = document.getElementById("categories-list");
    let categoriesCollection = categoriesListElement.children;
    hideAllInsideMoreCategories();
    if (window.innerWidth < 580) {
        hideOverflowedElements(1, categoriesCollection); //hide all elements from categoriesList
        showOverflowedElementsInsideMoreCategories(1); //show all categories inside more categories list
        return;
    }
    showAllElements(categoriesCollection);
    let indexOfFirstOverflowedElement = findIndexOfFirstOverflowed(categoriesCollection);
    hideOverflowedElements(indexOfFirstOverflowedElement, categoriesCollection);
    showOverflowedElementsInsideMoreCategories(indexOfFirstOverflowedElement);

}

function findIndexOfFirstOverflowed(categoriesCollection) {
    let indexOfFirstOverflowedElement = 0;
    for (let i = 0; i < categoriesCollection.length; i++) {
        let currentElement = categoriesCollection.item(i);
        if (currentElement.offsetTop !== 0) {
            let moreCategoriesElement = document.getElementById("more-categories");
            moreCategoriesElement.style.display = 'block';
            indexOfFirstOverflowedElement = i;
            return indexOfFirstOverflowedElement;
        }
    }
}

function hideOverflowedElements(indexOfFirstOverflowedElement, categoriesCollection) {
    let i = categoriesCollection.length - 1;
    let end = indexOfFirstOverflowedElement - 1;
    while (i >= end) {
        categoriesCollection.item(i).style.display = 'none';
        i--;
    }
}


function showAllElements(categoriesCollection) {
    let moreCategoriesElement = document.getElementById("more-categories");
    moreCategoriesElement.style.display = 'none';
    for (i = 0; i < categoriesCollection.length; i++) {
        categoriesCollection.item(i).style.display = "block";
    }
}

function hideAllInsideMoreCategories() {
    let moreCategoriesCollection = document.getElementById("more-categories-list").children;
    for (let i = 0; i < moreCategoriesCollection.length; i++) {
        moreCategoriesCollection.item(i).style.display = 'none';
    }
}

function showOverflowedElementsInsideMoreCategories(indexOfFirstOverflowedElement) {
    let moreCategoriesCollection = document.getElementById("more-categories-list").children;
    let start = indexOfFirstOverflowedElement - 1;
    let end = moreCategoriesCollection.length;
    for (let i = start; i < end; i++) {
        moreCategoriesCollection.item(i).style.display = 'block';
    }
}

$(resizeCategoriesNavbar);
$(window).resize(function () {
    setTimeout(resizeCategoriesNavbar);
});
$("#more-categories").click(function () {
    $("#more-categories-list").toggle();
});
$("#user-actions").click(function () {
    $("#user-actions-list").toggle();
});
$("#navbar-toggle-button").click(function () {
    $("#navbar-dropdown-menu").toggle();
});