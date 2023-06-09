
//ajax search
const searchButton = document.querySelector('.search-button');
const keyword = document.querySelector('.keyword');
const searchContainer = document.querySelector('.search-container');

//event ketika menuliskan keyword
keyword.addEventListener('keyup', function(){
    // //ajax
    // //xmlhttrequest
    // const xhr = new XMLHttpRequest();


    // xhr.onreadystatechange = function(){
    //     if(xhr.readyState == 4 && xhr.status == 200){
    //         searchContainer.innerHTML = xhr.responseText
    //     }
    // };

    // xhr.open('get', 'ajax/search.php?keyword=' + keyword.value);
    // xhr.send();

    //fetch()
    fetch('ajax/search.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (searchContainer.innerHTML = response));

});
