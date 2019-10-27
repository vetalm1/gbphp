
function modalwindow(fileName) {
    //alert(path);
    document.querySelector('.modal-wind').innerHTML = 
    '<img onclick="document.querySelector(\'.modal-wind\').innerHTML = \'\'" class="modal-img" src = "' + 
    'img\\' + fileName + '">';

};
