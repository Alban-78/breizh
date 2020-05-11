document.getElementById("cookieok").addEventListener("click", hideCookiebar);

function hideCookiebar() {
    // JE CACHE MA BARRE
    document.getElementById("cookie-bar").style.display = 'none';

    // SI OUI JE STOCK DANS COOKIE AGREE
    sessionStorage.setItem("cookiedac", "true")
};
if (sessionStorage.getItem("cookiedac") == "true") {

    document.getElementById("cookie-bar").style.display = 'none';
}
    //SI L'UTILISATEUR REFUSE
document.getElementById("nocookie").addEventListener("click", redirection);

function redirection() {

    document.location.href = "https://www.google.com/"

};