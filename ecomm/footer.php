<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="footer-info">
            <h2>About Us</h2>
            <p>We are a premium musical instrument store offering a wide range of instruments, accessories, and expert advice to musicians of all levels. Visit our store or shop online today!</p>
        </div>
        
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h3>Contact Info</h3>
            <p><strong>Phone:</strong>1234567890</p>
            <p><strong>Email:</strong> support@musicstore.com</p>
            <p><strong>Address:</strong> SA RE GA Store, Sanepa, Nepal</p>
        </div>

        <div class="footer-social">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://youtube.com" target="_blank">YouTube</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Music Store. All rights reserved.</p>
    </div>
</footer>

<!-- Styles for Footer (Optional, can be added in a separate CSS file) -->
<style>
    /* General Footer Styling */
    footer {
        background-color: #a0522d;
        color: #fff;
        padding: 20px;
        font-family: Arial, sans-serif;
        width: 100%;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-info, .footer-links, .footer-contact, .footer-social {
        flex: 1;
        margin: 10px;
    }

    .footer-links ul, .footer-social ul {
        list-style: none;
        padding: 0;
    }

    .footer-links a, .footer-social a {
        color: #fff;
        text-decoration: none;
        margin: 5px 0;
        display: block;
    }

    .footer-links a:hover, .footer-social a:hover {
        text-decoration: underline;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
    }

    /* Ensure Footer is always at the bottom */
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .footer-container {
        margin-top: auto;
    }

</style>
