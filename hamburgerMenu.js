
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById("myModal");
    const modalImg = document.getElementById("modalImg");
    const projects = document.querySelectorAll(".project");
    const closeBtn = document.getElementsByClassName("close")[0];
    const menuToggle = document.querySelector('.menu-toggle');
    const linksContainer = document.querySelector('.links-container');

    projects.forEach(function (project) {
        project.addEventListener("click", function () {
            modal.style.display = "block";
            modalImg.src = this.querySelector("img").src;
            modalImg.style.maxWidth = "100%";
            modalImg.style.height = "auto";
        });
    });

    closeBtn.onclick = function () {
        modal.style.display = "none";
    };

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    menuToggle.addEventListener('click', function () {
        const isOpen = linksContainer.style.display === 'flex';
        linksContainer.style.display = isOpen ? 'none' : 'flex';
        menuToggle.classList.toggle('menu-open', !isOpen);
        menuToggle.setAttribute('aria-expanded', !isOpen);
    });

    linksContainer.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            linksContainer.style.display = 'none';
            menuToggle.classList.remove('menu-open');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });
});
