var showme = document.querySelector(".showme");
var hidden_tip_show = document.querySelector(".hidden_tip_show");

if (showme){
    showme.addEventListener('click', function (e) {
        e.preventDefault();
        hidden_tip_show.classList.toggle('active');
    })
}
