let menu = document.querySelector(".menu");
let sidebar = document.querySelector(".sidebar");
let mainContent = document.querySelector(".main--content");
let body = document.querySelector('.hmm');
let form1 = document.querySelector(".container2");
let button = document.querySelector(".add");
let cancel = document.querySelector(".cancel");

menu.onclick = function () {
    sidebar.classList.toggle("active");
    mainContent.classList.toggle("active");
};
button.onclick = function () {
    form1.style.display = "block";
    body.style.display="none"
};
cancel.onclick = function () {
    form1.style.display = "none";
    body.style.display="block"
};

