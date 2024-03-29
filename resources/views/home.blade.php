<!DOCTYPE HTML>
<html>

<head>
    <title>Bubble</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <script src="/js/vue.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div class="app">

        <example-component></example-component>
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <div class="inner" style="display: flex; flex-direction:row; justify-content: space-between">

                    <!-- Logo -->
                    <a class="logo">
                        <span class="fa fa-pencil"></span> <span class="title"
                            style="font-weight: bold; font-size:18px;">Bubble Blog</span>
                    </a>


                    <div class="button-div" style="justify-content: space-evenly; display:flex;">

                        @if(!Auth::user())
                        <a href="{{ route('login') }}" style="border: none;">
                            <button class="favorite styled button-30" type="button-29"
                                style="font-size: 12px; heigth:23px;">
                                Login
                            </button>
                        </a>

                        <div style="margin-left: 10px;">
                            <a href="{{ route('register') }}" style="border: none; color:white">
                                <button class="favorite styled" type="button"
                                    style="font-size: 12px; heigth:23px; background-color:rgb(99, 99, 99); color:white !important">
                                    Register
                                </button>
                            </a>
                        </div>
                        @else



                        <form method="POST" action="{{ route('logout') }}" style="margin: 0px;color:white;">
                            @csrf
                            <a style="border: none;" :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                                <button class="favorite styled button-30" type="button-29"
                                    style="font-size: 12px; heigth:23px;">
                                    Logout
                                </button>
                            </a>
                        </form>
                        @endif

                    </div>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

                </div>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="/dashboard" class="active">Dashboard</a></li>
                </ul>
            </nav>

            <!-- Main -->
            <div id="main">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/Bubble Blog.gif" alt="First slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <br>
                <div class="inner">
                    <!-- About Us -->
                    <br>
                    <h2 class="h2" style="color: rgb(18, 18, 18)">Latest blog posts</h2>

                    @if(!is_null($array_posts))
                    <div class="row ">
                        @foreach ($array_posts as $post )
                        <div class="col-sm-4 shadow-sm p-3 mb-5 bg-white rounded" style="padding-bottom:3%">
                            <div style="margin-bottom: 2%;  height:40vh;">
                                <h3 class="m-n">{{ Str::limit($post['title'],40)}}</h3>
                                <p> {{$post->user_name}} | {{$post->created_at}}</p>
                                <div class="new-content">{!! Str::limit($post->post_content, 500) !!}</div>
                            </div>
                            <div style="display: flex; flex-direction:row; justify-content:right">
                                <div style="">
                                    <a href="{{ route('post.see', [$post->user_name, $post->slug_title] )}} "
                                        style="border: none;">
                                        <button class="favorite styled button-30" type="button-29"
                                            style="font-size: 9px; heigth:23px;width:100%">
                                            See Post
                                        </button>
                                    </a>
                                </div>
                                <div style="margin-left: 1.5vh;">
                                    <a href="{{ route('post.user', $post->user_name )}}"
                                        style="border: none;margin-top: 2%; color:white;">
                                        <button class="favorite styled button-30" type="button-29"
                                            style="font-size: 9px; heigth:23px;width:100%; background-color:#343434;color:white !important">
                                            {{$post->user_name}} blog
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="row">
                        <h3>There are actually no posts to display</h3>
                    </div>
                    @endif

                    <div>
                        {!! $array_posts->links('vendor.pagination.bootstrap-4') !!}
                    </div>
                    <p class="text-center"><a href="blog.html">Read More &nbsp;<i
                                class="fa fa-long-arrow-right"></i></a></p>
                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <section>
                        <h2>Contact Us</h2>
                        <form method="" action="#">
                            <div class="fields">
                                <div class="field half">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>

                                <div class="field half">
                                    <input type="text" name="email" id="email" placeholder="Email" />
                                </div>

                                <div class="field">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                                </div>

                                <div class="field">
                                    <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                                </div>

                                <div class="field text-right">
                                    <label>&nbsp;</label>

                                    <ul class="actions">
                                        <li><input type="submit" value="Send Message" class="primary" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section>
                        <h2>Contact Info</h2>

                        <ul class="alt">
                            <li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
                            <li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
                            <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United
                                States of America</li>
                        </ul>

                        <h2>Follow Us</h2>

                        <ul class="icons">
                            <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
                            </li>
                            <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        </ul>
                    </section>

                    <ul class="copyright">
                        <li>Copyright © 2020 Company Name </li>
                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                    </ul>
                </div>
            </footer>

        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

<style>
    .new-content {
        overflow: hidden;

    }

    .new-content img {
        width: 100%;
        border: none;
        height: auto;
    }

    .new-content p {
        width: 100%;
    }
</style>
