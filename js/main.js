const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener('click', function(){
    if(searchBox.style.top == '30px'){
        searchBox.style.top = '-30px';
        searchBox.style.pointerEvents = 'none';
    } else {
        searchBox.style.top = '30px';
        searchBox.style.pointerEvents = 'auto'
    }
})