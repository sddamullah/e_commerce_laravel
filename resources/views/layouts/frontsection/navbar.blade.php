<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">E-commerce</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href=" {{url('/')}}" class="{{Request::is ('/') ? 'active' : '' }} ">Home</a></li>


                <li><a href="{{url('trending_category')}}" class="{{Request::is ('trending_category') ? 'active' : '' }} ">Category</a></li>
                <li><a href=" #">Portfolio</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Blog</a></li>

                <li><a href="#">Contact</a></li>
                <li><a href="{{url('/dashboard')}}" class="getstarted">Login</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->