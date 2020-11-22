<div class="navbar-area">
    <div class="mobile-nav">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo.png') }}" width="100" alt="Logo">
            </a>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" width="100" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item {{ in_array($curr_url,['gpa.calculator'])?'active':'' }}">
                            <a href="{{ route('gpa.calculator') }}" class="nav-link">GPA Calculator</a>
                        </li>
                        <li class="nav-item {{ $curr_url=='contact'?'active':'' }}">
                            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item {{ $curr_url=='about'?'active':'' }}">
                            <a href="{{ route('about') }}" class="nav-link">About Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option justify-content-center d-block align-items-center">
                        <div>
                            <a href="{{ route('gpa.calculator') }}" class="nav-link {{ in_array($curr_url,['gpa.calculator'])?'active':'' }}">GPA Calculator</a>
                        </div>
                        <div>
                            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                        </div>
                        <div>
                            <a href="{{ route('contact') }}" class="nav-link">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
