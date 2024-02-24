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
            <a href="#contact">Contact</a>
            </div>
        </nav>

        <div class="hero" id="home">
            <h1>Welcome to VR Home Improvements LLC - Elevating Homes and Spaces in Oklahoma</h1>

            <p>Embark on a journey of unparalleled craftsmanship with VR Home Improvements LLC, your trusted 
            partner for comprehensive construction services in Oklahoma. From groundbreaking ideas to structurally
            sound implementations, we bring dreams to life through meticulous construction and home improvement services.</p>
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
                <h3>Why Choose Us?</h3>
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
                    <img src="images/framing.jpg" alt="framing">
                    <li>Framing</li>
                </div>

                <div>
                    <img src="images/plumbing.jpg" alt="plumbing">
                    <li>Plumbing</li>
                </div>

                <div>
                    <img src="images/roofing.jpg" alt="roofing">
                    <li>Roofing</li>
                </div>

                <div>
                    <img src="images/electrical.jpg" alt="electrical">
                    <li>Electrical</li>
                </div>
            </ul>
        </div>

        <main>
            <div class="contact-container" id="contact">
                <div>
                    <h2>Contact Us</h2>
                    <p><strong>Address:</strong> Porter, OK</p>
                    <p><strong>Phone:</strong> (918) 649-0217</p>
                </div>
                <div>
                    <form class="contact-form" action"contactForm.php" method="post">
                        <input type="text" name="name" placeholder="Your name" required>
                        <input type="text" name="email" placeholder="Your email" required>
                        <input type="text" name="subject" placeholder="Subject">
                        <input name="message" placeholder="Your message" required>
                        <button type="submit" name="Submit">Send</button>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <div class="social-links">
                <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
                <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
            </div>
            <p>&copy; 2024 VR Home Improvements LLC. All rights reserved.</p>
        </footer>
    </body>
</html>
