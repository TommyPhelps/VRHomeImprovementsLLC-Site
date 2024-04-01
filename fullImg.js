var modal = document.getElementById("myModal");
var modalImg = document.getElementById("modalImg");
var projects = document.querySelectorAll(".project");

projects.forEach(function(project) {
    project.addEventListener("click", function() {
        modal.style.display = "block";
        modalImg.src = "";
        const lowResSrc = this.querySelector("img").src;
        modalImg.src = lowResSrc;
        modalImg.style.maxWidth = "100%";
        modalImg.style.height = "auto";

        const highResImg = new Image();
        highResImg.src = lowResSrc.replace(/(\.)(png|jpe?g|webp)/, "@2x$1$2");
        highResImg.onload = function() {
            modalImg.src = highResImg.src;
        };
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
