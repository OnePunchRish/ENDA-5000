<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENDA-5000</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <section class="hero-page">
            <div class="logo">
                <a href="#">
                    <img src="/images/logo.png" alt="ENDA-5000 Logo">
                </a>
            </div>
            <div class="contact-numbers">
                <div class="contact-items">
                    <img src="/images/Phone.svg" alt="Phone">
                    <a href="#" class="phone">+91-99999XXXXX</a>
                </div>
                <div class="contact-items">
                    <img src="/images/WhatsApp.svg" alt="WhatsApp">
                    <a href="#" class="whatsapp">+91-99999XXXXX</a>
                </div>    
            </div>
            <div class="hero-image">
                <img src="/images/hero.svg" alt="Hero Image">
            </div>
            <div class="content">
                <h1>ENDA-5000 Series</h1>
                <h2>Stack Gas Analysis System</h2>
                <p>Precise, stable gas flow control, unaffected by pressure or<br>temperature. Ideal for accurate measurements and<br>automation in industries.</p>
                <div class="buttons">
                    <button class="hero-btn">
                        <span>Explore</span>
                    </button>
                    <button class="hero-btn">
                        <span id="contact">Contact</span>
                    </button>
                </div>    
            </div>
            <div class="contact-icon-container">
                <div id="contact-icon">
                    <img src="/images/queries.svg" alt="Contact Icon">
                </div>
                <div id="contact-button">
                    <span>Contact Us</span>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="head">
                <h2>About</h2>
            </div>
            <div class="about-content">
                <p>HORIBA has over 100,000 CEM systems installed and 30 years of quality and experience. That is the base on which HORIBA's ENDA-5000 series of stack-gas analysis systems are built. These systems have a small footprint and use cross modulated non-dispersive infrared (NDIR) and magneto-pneumatic detectors that are inherently drift-free. The ENDA-5000 series are superior continuous analysis systems that perform reliably for difficult exhaust gas measurements, when measurement errors cannot be tolerated. This CEM series features a intuitive touch panel that makes every operation available with the touch of a single button. The ENDA-5000 series systems are also designed for ease of maintenance. They are ideal for a variety of uses, including emissions monitoring from steam boilers, refuse incinerators, and electric power generation plants to assure pollution standards are being met.</p>
            </div>
            <div class="image-popup-container">
                <img src="/images/about.jpg" alt="Sample Image" class="clickable-image" onclick="showImagePopup(this)">
            </div>
            <div id="image-popup" class="image-popup">
                <span class="close-button" onclick="closeImagePopup()">&times;</span>
                <img id="popup-image" class="popup-content">
            </div>
        </section>

        <section class="features">
            <div class="head">
                <h2>Features</h2>
            </div>
            <div class="features-container">
                <div class="feature-item">
                    <h2>▶ Long-term stability: Cross-flow modulated non-dispersive infrared (NDIR) detection is renowned for long-term stability</h2>
                    <ul>
                        <li>No need for optical adjustments</li>
                        <li>
                            With NDIR, the sample gas and reference gas are introduced into a single measurement cell alternately to 
                            obtain modulation signal. Therefore there is no need to adjust two different optical paths so that they are balanced.
                        </li>
                        <li>A stable zero point</li>
                        <li>
                            Since ENDA-5000 series output the difference between the measured gas and the reference gas each time 
                            measurement occurs (once a second), the zero point is extremely stable.
                        </li>
                        <li>Continuous cleaning keeps the cell clean</li>
                    </ul>
                </div>
                <div class="feature-item">
                    <h2>▶ Compact: Body yields wider maintenance area</h2>
                    <ul>
                        <li>
                            The ENDA-5000 series can be installed almost anywhere, with ample room on all sides for easy access and 
                            much easier maintenance.
                        </li>
                    </ul>
                </div>
                <div class="feature-item">
                    <h2>▶ Easy to use: Features an intuitive touch panel</h2>
                    <ul>
                        <li>
                            The operator can easily switch between the corrected and converted density settings screens or view alert 
                            information with touch of a single button.
                        </li>
                    </ul>
                </div>
                <div class="feature-item">
                    <h2>▶ Complies to world environmental regulations by local engineering</h2>
                </div>
                <div class="read-more-button">
                    <a href="https://www.horiba.com/int/process-and-environmental/products/detail/action/show/Product/enda-5000-series-448/"><button class="custom-btn btn-1">Read More</button></a>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <div class="contact-heading">
                <h2>Contact Us</h2>
            </div>
            <form class="contact-form">
                <div class="form-left">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required />
        
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required />
        
                    <label for="phone">Phone No.</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />
        
                    <div class="checkbox-container">
                        <input type="checkbox" id="privacy" name="privacy" required />
                        <label for="privacy">I have read and agree to the HORIBA <a href="https://www.horiba.com/ind/legal/privacy-notice/">privacy notice</a></label>
                    </div>
                </div>
                <div class="form-right">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="Enter your city" required />
        
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                </div>
        
                <button type="submit" class="submit-btn">Submit</button>
            </form>
            <footer class="footer">
            <div class="footer-content">
                <h3>FOLLOW US</h3>
                <div class="social-icons">
                    <img src="/images/facebook.png" alt="Facebook">
                    <img src="/images/twitter.png" alt="Twitter">
                    <img src="/images/linkedin-in.png" alt="LinkedIn">
                    <img src="/images/instagram.png" alt="Instagram">
                </div>
                <hr class="footer-line" />
                <div class="footer-links">
                    <a href="https://www.horiba.com/ind/legal/terms-and-conditions/">Terms and Conditions</a>
                    <a href="https://www.horiba.com/ind/legal/privacy-notice/">Privacy Note</a>
                    <a href="#">Cookies</a>
                    <a href="https://www.horiba.com/ind/">HORIBA website</a>
                </div>
            </div>
        </footer>
        </section>
        
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
