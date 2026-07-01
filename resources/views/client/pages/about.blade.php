@extends('client.layouts.client_layout')

@section('title', 'About - ETECT')

@section('content')
    <section class="split-section">
        <div>
            <p class="eyebrow">About Us</p>
            <h1>We design useful web systems that feel easy to run every day.</h1>
            <p>ETECT focuses on practical digital products: websites, admin panels, e-commerce pages, and custom tools for local businesses.</p>
            <p>Our design style is clean, fast, and focused on what customers need to do next.</p>
        </div>
        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=80" alt="People collaborating in a meeting">
    </section>

    <section class="values">
        <article>
            <h2>Clear</h2>
            <p>Interfaces are organized so users can understand them quickly.</p>
        </article>
        <article>
            <h2>Reliable</h2>
            <p>Features are planned for real workflows, not just good screenshots.</p>
        </article>
        <article>
            <h2>Scalable</h2>
            <p>The project can grow as your business grows.</p>
        </article>
    </section>
@endsection
