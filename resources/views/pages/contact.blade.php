@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="page-header">
    <p class="eyebrow">GET IN TOUCH</p>
    <h1>Contact PawBili</h1>
    <p>
        Have a question? We'd love to hear from you.
    </p>
</section>

<section class="section">
    <div class="contact-grid">

        <div class="contact-info">
            <p class="eyebrow">CONTACT INFORMATION</p>

            <h2>We're Here to Help</h2>

            <p>
                Whether you have a question about our products
                or simply want to learn more about PawBili,
                feel free to contact us.
            </p>

            <div class="contact-item">
                <strong>Address</strong>
                <p>
                    123 Pawsome Street,<br>
                    Pet District, Metro Manila,<br>
                    Philippines
                </p>
            </div>

            <div class="contact-item">
                <strong>Email</strong>
                <p>hello@pawbilishop.com</p>
            </div>

            <div class="contact-item">
                <strong>Phone</strong>
                <p>+63 912 345 6789</p>
            </div>

            <div class="contact-item">
                <strong>Business Hours</strong>
                <p>Monday – Saturday<br>9:00 AM – 6:00 PM</p>
            </div>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>

            <form>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email">

                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Write your message..."></textarea>

                <button type="submit" class="btn">
                    Send Message
                </button>
            </form>
        </div>

    </div>
</section>

@endsection