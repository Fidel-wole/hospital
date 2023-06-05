let menu = document.querySelector('.menu')
let sidebar = document.querySelector('.sidebar')
let mainContent = document.querySelector('.main--content')
let form1= document.querySelector('.the-form');
let button = document.querySelector('.add');
let cancel = document.querySelector('.cancel');
const  form = document.querySelector('form'),
       nextBtn = form.querySelector('.nextBtn'),
       backBtn = form.querySelector('.backBtn'),
       allInput  =form.querySelectorAll('.first input');



// menu.onclick = function() {
//     sidebar.classList.toggle('active')
//     mainContent.classList.toggle('active')
// }
// button.onclick = function(){
//     form1.style.display="flex";
    
// }
// cancel.onclick =function(){
//     form1.style.display="none";
// }

       

nextBtn.addEventListener('click', ()=>{
    allInput.forEach(input=>{
        if(input.value !== ""){
             form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
            alert('invalid');
 } })

})
backBtn.addEventListener('click', ()=>{
    form.classList.remove('secActive');
});

function submit(){
    let success = document.getElementById('success');
    success.style.display="block";
    setTimeout(function(){
        success.style.opacity='0';
    }, 6000)
    setTimeout(function(){
        success.style.display='none';
        success.style.opacity='1';
    }, 4000)
    
}
setTimeout(submit, 10);