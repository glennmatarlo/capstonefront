<nav class="navbar navbar-expand-lg navbar-light position-sticky">
        <a class="navbar-brand" href="/home">
        <img style="margin-left:50px;margin-right: 20px;" src="https://i.ibb.co/Xtf9fS1/logo.png" width="115" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;" href="/home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;"  href="#">FAQs</a>
            </li>
            </ul>
        </div>

        <!--Signin-up button -->
        <div class="float-right text-white" style="margin-right:30px;">
                <a type="button" href="{{url('/register')}}" class="btn text-white"  data-toggle="modal" data-target="#exampleModal">Sign-up</a> / &nbsp;
                <a href="{{url('/login')}}" class="btn btn-outline-light">Sign-in</a>
        </div>
</nav>