<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Main Layout')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
</head>
<body>
    @include('client.common.header')

    <main>
        @hasSection('content')
            @yield('content')
        @else
            @include('client.common.slide')

            <section class="section bg-white">
                <div class="container">
                    <div class="section-heading text-center mx-auto">
                        <p class="eyebrow">Our Services</p>
                        <h2>Everything your client website needs.</h2>
                        <p>Clean pages, clear navigation, product previews, and a contact flow that feels ready for real customers.</p>
                    </div>

                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <article class="feature-card h-100">
                                <span>01</span>
                                <h3>Website Design</h3>
                                <p>Modern responsive pages for company profiles, services, and product information.</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="feature-card h-100">
                                <span>02</span>
                                <h3>Product Showcase</h3>
                                <p>Organized product sections with images, details, and calls to action.</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="feature-card h-100">
                                <span>03</span>
                                <h3>Contact System</h3>
                                <p>A friendly contact page for customers to ask questions and request service.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section light-section">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6">
                            <p class="eyebrow">Why ETECT</p>
                            <h2 class="section-title">A neat layout for a real business website.</h2>
                            <p class="section-text">This main layout now has a complete structure: header, slide banner, service cards, product preview, and footer. Each page can still add its own content with Blade sections.</p>
                            <a class="btn custom-primary" href="{{ route('product') }}">See Products</a>
                        </div>
                        <div class="col-lg-6">
                            <img class="rounded-img" src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=900&q=80" alt="Team reviewing website design">
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>

    @include('client.common.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/client.js') }}"></script>
</body>
</html>
