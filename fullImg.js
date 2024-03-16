var modal = document.getElementById("myModal");
var modalImg = document.getElementById("modalImg");
var projects = document.querySelectorAll(".project");

projects.forEach(function(project) {
    project.addEventListener("click", function() {
        modal.style.display = "block";
        modalImg.src = this.querySelector("img").src;
        modalImg.style.maxWidth = "100%";
        modalImg.style.height = "auto";
    });
});

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
};
