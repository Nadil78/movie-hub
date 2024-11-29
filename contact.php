<!-- Contact Us Section -->
<section id="contact-us" style="padding: 50px 0; background: url('wick.jpg') no-repeat center center/cover; background-color: #f3f3f3;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; background-color: rgba(0, 0, 0, 0.8); padding: 30px; border-radius: 10px;">
        <h2 style="text-align: center; font-size: 2.5em; color: #fff; margin-bottom: 30px;">Contact Us</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-between;">

            <!-- Contact Form -->
            <div class="contact-form" style="flex: 1; min-width: 300px; background-color: #1c1c1c; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <h3 style="font-size: 1.8em; margin-bottom: 20px; color: orange;">Plan Your Movie Experience</h3>
                <form action="#" method="POST">
                    <div style="margin-bottom: 15px;">
                        <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-size: 1em;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-size: 1em;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <textarea name="message" rows="5" placeholder="Tell us about your movie interests" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-size: 1em;"></textarea>
                    </div>
                    <button type="submit" style="padding: 10px 20px; background-color: orange; color: #fff; border: none; border-radius: 5px; font-size: 1.1em; cursor: pointer;">Submit Your Inquiry</button>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="contact-details" style="flex: 1; min-width: 300px; background-color: #1c1c1c; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <h3 style="font-size: 1.8em; margin-bottom: 20px; color: orange;">Visit Our Office</h3>
                <p style="font-size: 1em; color: #fff;">123 Movie Lane, Film City, Cinemaland</p>
                <p style="font-size: 1em; color: #fff;">Phone: +123 456 789</p>
                <p style="font-size: 1em; color: #fff;">Email: info@moviehub.com</p>
                <h3 style="font-size: 1.8em; margin-top: 30px; margin-bottom: 20px; color: orange;">Office Hours</h3>
                <p style="font-size: 1em; color: #fff;">Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p style="font-size: 1em; color: #fff;">Saturday: 10:00 AM - 4:00 PM</p>
                <p style="font-size: 1em; color: #fff;">Closed on Sundays</p>
            </div>

            <!-- Embedded Map -->
            <div class="map" style="flex: 1; min-width: 300px; background-color: #1c1c1c; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509619!2d144.95373631537742!3d-37.8162793797517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5774c324888978!2s123%20Movie%20Lane%2C%20Film%20City%2C%20Cinemaland!5e0!3m2!1sen!2sus!4v1602917237165!5m2!1sen!2sus" 
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle form submission
        document.querySelectorAll('.contact-form, .contact-details, .map').forEach(card => {
            card.addEventListener('mouseover', function() {
                card.style.transform = 'scale(1.05)';
                card.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.7)';
            });

            card.addEventListener('mouseout', function() {
                card.style.transform = 'scale(1)';
                card.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.5)';
            });
        });

        document.querySelector('.contact-form form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Thank you for reaching out! We will assist you with your movie experience soon.');
        });
    </script>
</section>
