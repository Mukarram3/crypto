<header class="transition">
    <div class="container">
        <div class="row flex-align">
            <div class="col-lg-4 col-md-3 col-8">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('assets/images2/logo.png')}}" class="transition" alt="Cryptcon"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-4 text-right">
                <div class="menu-toggle">
                    <span></span>
                </div>
                <div class="menu">
                    <ul class="d-inline-block">
                        <li class="mega-menu">
                            <span class="opener plus"></span>
                            <a href="{{url('index1')}}">Home</a>
                            <ul class="transition">
                                <li><a href="{{url('index1')}}">Home One</a></li>
                                <li><a href="{{url('index2')}}">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="mega-menu">
                            <span class="opener plus"></span>
                            <a href="about.html">Pages</a>
                            <ul class="transition">
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('blog-list')}}">Blog</a></li>
                                <li><a href="{{url('token-sale')}}">Token Sale</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                <li><a href="{{url('faq')}}">FAQ</a></li>
                                <li><a href="{{url('404')}}">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('feature')}}">Feature</a></li>
                        <li><a href="{{url('roadmap')}}">Roadmap</a></li>
                        <li><a href="{{url('team')}}">Team</a></li>
                    </ul>
                    <div class="signin d-inline-block">
                        <a href="{{url('login')}}" class="btn">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>