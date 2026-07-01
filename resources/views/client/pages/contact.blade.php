@extends('client.layouts.client_layout')

@section('title', 'Contact - ETECT')

@section('content')
    <section class="contact-section">
        <div>
            <p class="eyebrow">Contact</p>
            <h1>Tell us what you want to build.</h1>
            <p>Send your project idea and we will help shape it into a clean, usable website or web system.</p>

            <div class="contact-info">
                <span>Phnom Penh, Cambodia</span>
                <span>hello@etect.test</span>
                <span>+855 12 345 678</span>
            </div>
        </div>

        <form class="contact-form">
            <label>
                Name
                <input type="text" placeholder="Your name">
            </label>
            <label>
                Email
                <input type="email" placeholder="you@example.com">
            </label>
            <label>
                Message
                <textarea rows="5" placeholder="Write your message"></textarea>
            </label>
            <button type="button">Send Message</button>
        </form>
    </section>
@endsection
