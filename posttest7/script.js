var icon = document.getElementById('theme');''

icon.onclick = function() {
    document.body.classList.toggle('darkmode');
}




// alert("Selamat Datang di Website Pendaftaran Perlombaan 18th Asian Games 2018")





const button = document.getElementById('daftar-button');
button.addEventListener("click", function showInfo() {
    const x = document.getElementById('info');
    if (x.style.display == 'none') {
        x.style.display == 'block';
    } else {
        x.style.display = 'none';
    }
});


function showPopup() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}






var tutorial = document.getElementsByClassName('info-container');
tutorial.innerText= "Test";
tutorial.style.backgroundColor = "green";
