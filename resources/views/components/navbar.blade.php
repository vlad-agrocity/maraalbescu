<div x-data="data()">
    <nav class="nav-container">
        <div class="site-content nav-content">
            <div class="nav-items">
                <div class="nav-logo">Mara Albescu</div>

                <div class="burger-menu"
                     :class="{ active: showMobileMenu }"
                     @click="showMobileMenu = !showMobileMenu"
                >
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>

                <div class="nav-links">
                    <a href="{{ route('home') }}" class="nav-link @if(url()->current() === route('home')) active @endif">Home</a>
                    <a href="{{ route('portfolio') }}" class="nav-link @if(url()->current() === route('portfolio')) active @endif">Portfolio</a>
                    <a href="{{ route('about') }}" class="nav-link @if(url()->current() === route('about')) active @endif">About</a>
                    <a href="{{ route('contact') }}" class="nav-link @if(url()->current() === route('contact')) active @endif">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="mobile-links" :class="{ active: showMobileMenu }">
        <a href="{{ route('home') }}" class="nav-link @if(url()->current() === route('home')) active @endif">Home</a>
        <a href="{{ route('portfolio') }}" class="nav-link @if(url()->current() === route('portfolio')) active @endif">Portfolio</a>
        <a href="{{ route('about') }}" class="nav-link @if(url()->current() === route('about')) active @endif">About</a>
        <a href="{{ route('contact') }}" class="nav-link @if(url()->current() === route('contact')) active @endif">Contact</a>
    </div>
</div>


@push('scripts')
<script>
    function data() {
        return {
            showMobileMenu: false
        }
    }
</script>
@endpush


