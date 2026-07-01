<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a class="brand footer-brand" href="{{ url('/') }}">
                    <span class="brand-mark">E</span>
                    <span>ETECT</span>
                </a>
                <p>Smart digital tools for growing teams, stores, and service businesses.</p>
            </div>

            <div>
                <h3>Company</h3>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('product') }}">Products</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            <div>
                <h3>Contact</h3>
                <p>Phnom Penh, Cambodia</p>
                <p>hello@etect.test</p>
            </div>
        </div>
        <div class="footer-bottom">Copyright {{ date('Y') }} ETECT. All rights reserved.</div>
    </div>
</footer>
