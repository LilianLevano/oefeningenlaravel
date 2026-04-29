const nav = document.getElementById("header");
const btn = document.getElementById("hideNav");

btn.addEventListener("click", () => {
    nav.classList.toggle("hidden");
});

const btnExtraLinks = document.getElementById('extraLinks')
const extraLinksDiv = document.getElementById('extra-links-div')


btnExtraLinks.addEventListener('click', () =>{
    console.log("yo")
    extraLinksDiv.classList.toggle("hidden");
})
