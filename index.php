<!DOCTYPE html>
<html lang="en">
<head>
    <title>VR Home Improvements LLC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <div class="logo-container">
            <a href=""><img src="images/company-logo.png" alt="A company logo with company initials next to a house"></a>
        </div>
        <div class="links-container">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#reviews">Reviews</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <div class="hero" id="home">
        <h1>Welcome to VR Home Improvements LLC - Elevating Homes and Spaces in Oklahoma</h1>
        <p>Embark on a journey of unparalleled craftsmanship with VR Home Improvements LLC, your trusted 
        partner for comprehensive construction services in Oklahoma. From groundbreaking ideas to structurally
        sound implementations, we bring dreams to life through meticulous construction and home improvement services.</p>
        <button class="prim-button">Contact us</button>
    </div>

    <div class="about" id="about">
        <div>
            <h2>About Us</h2>
            <p>At VR Home Improvements LLC, we take pride in being the cornerstone of excellence in the construction 
            industry in Oklahoma. With a commitment to quality, innovation, and client satisfaction, we have established 
            ourselves as a reliable choice for all your home improvement needs.</p>
            <p>Our team of skilled professionals possesses a wealth of experience in transforming spaces into havens of 
            comfort and style. From concept to completion, we approach each project with unwavering dedication, 
            ensuring that your vision is not just realized but exceeded.</p>
            <p>We believe in transparency, clear communication, and a client-centric approach. Our mission is to not 
            just build structures but to create homes that stand the test of time, reflecting the unique 
            personality and aspirations of our clients.</p>
        </div>
        <div>
            <h2>Why Choose Us?</h2>
            <ul>
                <div>
                    <li>Expertise and Experience:</li>
                    <p>With years of experience in providing construction services in Oklahoma, VR Home Improvements LLC 
                    brings a wealth of knowledge and skills to every project.</p>
                </div>
                <div>
                    <li>Quality Assurance:</li>
                    <p>We adhere to the highest standards of craftsmanship, using premium materials to ensure the 
                    longevity and durability of our work, delivering top-notch home improvement solutions.</p>
                </div>
                <div>
                    <li>Timely Delivery:</li>
                    <p>Efficient project management ensures that your project is completed on schedule without 
                    compromising quality, offering prompt and reliable construction services.</p>
                </div>
                <div>
                    <li>Client-Centric Approach:</li>
                    <p>Your vision is our guide. We work closely with our clients, fostering open communication to ensure 
                    that every detail is considered, and expectations are met for a personalized home improvement experience.</p>
                </div>
            </ul>
        </div>
    </div>

    <div class="services" id="services">
        <h2>Services</h2>
        <ul>
            <div>
                <li>Framing</li>
                <img src="images/framing.jpg" alt="framing">
            </div>
            <div>
                <li>Plumbing</li>
                <img src="images/plumbing.jpg" alt="plumbing">
            </div>
            <div>
                <li>Roofing</li>
                <img src="images/roofing.jpg" alt="roofing">
            </div>
            <div>
                <li>Electrical</li>
                <img src="images/electrical.jpg" alt="electrical">
            </div>
        </ul>
    </div>

    <div class="projects-container" id="projects">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project" onclick="openModal('images/project1_before.jpg', 'images/project1_after.jpg')">
                <img src="images/project1_before.jpg" alt="Project 1's before photo">
            </div>
            <div class="project" onclick="openModal('images/project2_before.jpg', 'images/project2_after.jpg')">
                <img src="images/project2_before.jpg" alt="Project 2's before photo">
            </div>
            <div class="project" onclick="openModal('images/project3_before.jpg', 'images/project3_after.jpg')">
                <img src="images/project3_before.jpg" alt="Project 3's before photo">
            </div>
        </div>
    </div>

    <div id="myModal" class="modal" onclick="closeModal()">
        <div class="modal-content-container">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalBefore" src="" alt="Before Construction Image">
            <img class="modal-content" id="modalAfter" src="" alt="After Construction Image">
        </div>
    </div>

    <div class="reviews-container" id="reviews">
        <h2>Reviews</h2>
        <div class="review-container">
            <div>
                <img src="images/bJohnson.jpg" alt="Image of a woman">
                <div>
                    <p><strong>Bianca Johnson</strong></p>
                    <p>December 4, 2019</p>
                </div>
            </div>
            <p>Such a hard working group and they do such a great job.</p>
        </div>
    </div>

    <main class="contact-container" id="contact">
        <div>
            <h2>Contact Us</h2>
            <p><strong>Address:</strong> Porter, OK</p>
            <p><strong>Phone:</strong> (918) 649-0217</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12932.874787658571!2d-95.53081271532626!3d35.86815711043851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b670d5ad6532a9%3A0x77ba2b225e153aad!2sPorter%2C%20OK%2074454!5e0!3m2!1sen!2sus!4v1709185422350!5m2!1sen!2sus" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <form class="contact-form" action="contactForm.php" method="post">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="text" name="email" placeholder="Your email" required>
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Your message" required></textarea>
                <button class="prim-button" type="submit" name="Submit">Send</button>
            </form>
        </div>
    </main>

    <footer>
        <div class="social-links">
            <a href="https://www.facebook.com/vrhomeimprovementsllc/">Facebook</a>
        </div>
        <p>&copy; 2024 VR Home Improvements LLC. All rights reserved.</p>
    </footer>

    <script>
        var modal = document.getElementById("myModal");
        var modalBefore = document.getElementById("modalBefore");
        var modalAfter = document.getElementById("modalAfter");

        var span = document.getElementsByClassName("close")[0];

        function openModal(beforeImageSrc, afterImageSrc) {
            modalBefore.src = beforeImageSrc;
            modalAfter.src = afterImageSrc;
            modal.style.display = "flex";
            document.body.style.overflow = "hidden";
            adjustModalImage();
        }

        function closeModal() {
            modal.style.display = "none";
            document.body.style.overflow = "";
        }

        span.onclick = closeModal;

        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }

        function adjustModalImage() {
            var windowHeight = window.innerHeight;
            var windowWidth = window.innerWidth;
            var modalContentContainer = document.querySelector(".modal-content-container");

            if (modalBefore.naturalWidth > windowWidth || modalBefore.naturalHeight > windowHeight) {
                var scaleFactor = Math.min(windowWidth / modalBefore.naturalWidth, windowHeight / modalBefore.naturalHeight);
                var newWidth = modalBefore.naturalWidth * scaleFactor;
                var newHeight = modalBefore.naturalHeight * scaleFactor;
                modalContentContainer.style.width = newWidth + "px";
                modalContentContainer.style.height = newHeight + "px";
            } else {
                modalContentContainer.style.width = "auto";
                modalContentContainer.style.height = "auto";
            }

            modalContentContainer.style.top = "50%";
            modalContentContainer.style.left = "50%";
            modalContentContainer.style.transform = "translate(-50%, -50%)";
        }

        window.onresize = adjustModalImage;
    </script>
</body>
</html>
