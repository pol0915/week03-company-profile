<footer class="footer">
    <div class="footer-container">
        <div>
            <h2>Paw<span>Bili</span></h2>
            <p>
                Everything Your Pet Needs, Just a Paw Away.
            </p>
        </div>

        <div>
            <h3>Quick Links</h3>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div>
            <h3>Contact</h3>
            <p>hello@pawbilishop.com</p>
            <p>+63 912 345 6789</p>
            <p>Metro Manila, Philippines</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} PawBili. All rights reserved.</p>
    </div>
</footer>