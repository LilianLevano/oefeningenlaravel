const nav = document.getElementById("nav");
const btn = document.getElementById("hideNav");

btn.addEventListener("click", () => {
    nav.classList.toggle("hidden");
});
