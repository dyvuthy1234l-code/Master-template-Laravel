@extends('client.layouts.client_layout')

@section('title', 'ETECT - Smart Digital Solutions')

@section('content')
    @include('client.common.slide')

    <section class="section">
        <div class="section-heading">
            <p class="eyebrow">What We Do</p>
            <h2>Simple tools with a professional finish.</h2>
        </div>

        <div class="feature-grid">
            <article class="feature-card">
                <span>01</span>
                <h3>Business Websites</h3>
                <p>Clean websites that present your brand, products, and contact details clearly.</p>
            </article>
            <article class="feature-card">
                <span>02</span>
                <h3>Admin Systems</h3>
                <p>Practical dashboards for managing records, orders, staff, and reports.</p>
            </article>
            <article class="feature-card">
                <span>03</span>
                <h3>Online Stores</h3>
                <p>Product pages, checkout flows, and customer-friendly shopping experiences.</p>
            </article>
        </div>
    </section>

    <section class="stats-band">
        <div>
            <strong>120+</strong>
            <span>Projects Planned</span>
        </div>
        <div>
            <strong>24/7</strong>
            <span>Online Access</span>
        </div>
        <div>
            <strong>4</strong>
            <span>Main Services</span>
        </div>
    </section>
@endsection
