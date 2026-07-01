@extends('client.layouts.client_layout')

@section('title', 'Products - ETECT')

@section('content')
    <section class="page-hero compact">
        <p class="eyebrow">Products</p>
        <h1>Choose the right digital solution for your workflow.</h1>
    </section>

    <section class="product-grid">
        <article class="product-card">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=700&q=80" alt="Analytics dashboard">
            <div>
                <h2>Business Dashboard</h2>
                <p>Track key data, users, tasks, and performance in one organized place.</p>
                <a href="{{ route('contact') }}">Request Demo</a>
            </div>
        </article>

        <article class="product-card">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=700&q=80" alt="Online shopping payment">
            <div>
                <h2>E-Commerce Website</h2>
                <p>Showcase products, receive orders, and create a smoother buying experience.</p>
                <a href="{{ route('contact') }}">Request Demo</a>
            </div>
        </article>

        <article class="product-card">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=700&q=80" alt="Team planning work">
            <div>
                <h2>Custom Web App</h2>
                <p>Build a tailored system for your school, shop, service team, or organization.</p>
                <a href="{{ route('contact') }}">Request Demo</a>
            </div>
        </article>
    </section>
@endsection
