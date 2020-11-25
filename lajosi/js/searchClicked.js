
// Search Icon Clicked?
console.log('Hello World');

//Find search icon
const getSearchClicked = document.querySelector('.top__searchClicked');
console.log(getSearchClicked);

//Find the search box!
const searchBox = document.querySelector('.top__search');
console.log(searchBox);

getSearchClicked.addEventListener("click", function (e) {
    console.log('Clicked to open');
    searchBox.classList.add('showSearch');
});

//Find the closing X to close the box
const closingx = document.querySelector('.top__cross');
console.log(closingx);

closingx.addEventListener("click", function (e) {
    console.log('Clicked to close');
    searchBox.classList.remove('showSearch');
});


