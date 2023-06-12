const form = document.querySelector("form");
const nextBtn = form.querySelector(".nextBtn");
const backBtn = form.querySelector(".backBtn");
const allInput = form.querySelectorAll(".first input");

nextBtn.addEventListener("click", () => {
    allInput.forEach((input) => {
        if (input.value !== "") {
            form.classList.add("secActive");
        } else {
            form.classList.remove("secActive");
        }
    });
});

backBtn.addEventListener("click", () => {
    form.classList.remove("secActive");
});


function submit() {
    let success = document.getElementById("success");
    success.style.display = "block";
    setTimeout(function () {
        success.style.opacity = "0";
    }, 6000);
    setTimeout(function () {
        success.style.display = "none";
        success.style.opacity = "1";
    }, 4000);
}
setTimeout(submit, 10);