@php
    $setting = \App\Models\SystemSetting::first();
@endphp
<footer>
    <div class="footer-shape-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 338" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 0.394531L1920 0.394531V195.395C1920 195.395 1296.52 337.395 864.745 337.395C432.973 337.395 0 195.395 0 195.395V0.394531Z"
                fill="#01120D" />
        </svg>
    </div>
    <div class="footer-1">
        <div class="footer-content">
            <div>
                <h3 class="footer-content-title">Subscribe to our Newsletter</h3>
            </div>
            <di class="subcribe-now">
                <form action="{{ route('subscribe') }}" method="POST" class="subcribe-now-field">
                    @csrf
                    <input type="email" class="subcribe-now-input-field" name="email" required
                        placeholder="Enter your email">
                    <button type="submit" class="og-btn">Subcribe Now</button>
                </form>
        </div>
    </div>
    <div class="container flex footer-navlink">
        <ul class="flex footer-nav-hyper-link">
            <li>
                <a class="og-footer-link" href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="og-footer-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li>
                <a class="og-footer-link" href="{{ route('service') }}">Services</a>
            </li>
            <li>
                <a class="og-footer-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li>
                {{-- <a class="og-footer-link" href="#">Blogs</a> --}}
            </li>
        </ul>
        <div>
            <a href="{{ $setting->facebook ?? '#' }}">
                <img src="frontend/assets/images/social_icon_1.png" alt="">
            </a>
            <a href="{{ $setting->instagram ?? '#' }}">
                <img src="frontend/assets/images/social_icon_2.png" alt="">
            </a>
            <a href="{{ $setting->youtube ?? '#'}}">
                <img src="frontend/assets/images/social_icon_3.png" alt="">
            </a>
        </div>
    </div>
    <hr>
    <div class="container flex space-between og-footer-bottom-terms">
        <p>{{ $setting->copyright ?? '© 2025 All rights reserved' }} </p>
        <div>
            <a class="og-footer-term-link" href="#">Terms of Service</a>
            <a class="og-footer-term-link" href="#">Privacy Policy</a>
        </div>
    </div>
</footer>
