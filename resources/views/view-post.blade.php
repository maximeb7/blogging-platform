<!DOCTYPE HTML>
<html>

<head>
    <title>Area 17 | Blogging Platform</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <noscript>
        <link rel="stylesheet" href=" {{ 'assets/css/noscript.css' }}" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="fa fa-pencil"></span> <span class="title">Area 17 | Blogging Platform</span>
                </a>

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
                <li><a href="index.html">Home</a></li>

                <li><a href="blog.html" class="active">Blog</a></li>

                <li><a href="about.html">About</a></li>

                <li><a href="team.html">Authors</a></li>

                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <div class="row justify-content-between mh-100">
                    <div class="col-sm-4">
                        @if(isset($post) )
                        <h1 style="margin: 0 0 0 0">{{ $post->title }}</h1>
                        <h6 style="color: #5b5b5b;"> by {{ $post->user_name }}</h6>
                        @endif
                    </div>

                    @if(isset($post))
                    <div style="display: flex;">
                        <a href="/" style="border: none;margin-top: 2%; color:white;">
                            <button class="favorite styled button-30" type="button-29"
                                style="border-radius: 4px;font-size: 12px; heigth:23px;width:100%; background-color: white;color:#343434 !important">
                                Home
                            </button>
                        </a>
                        <a href="{{ route('post.user', $post->user_name )}}"
                            style="border: none;margin-top: 2%;margin-left:2%; color:white;">
                            <button class="favorite styled button-30" type="button-29"
                                style="border-radius: 4px;font-size: 12px; heigth:23px;width:100%; background-color:#343434;color:white !important">
                                Go to {{$post->user_name}} blog
                            </button>
                        </a>
                    </div>

                </div>


                <div class="image main">
                    <img src="images/blog-fullscreen-1-1920x700.jpg" class="img-fluid" alt="" />
                </div>

                <div>{!! $post->post_content !!}</div>
                @if(Auth::user() && Auth::user()->id == $post->user_id)
                <div style="display: flex; flex-direction: row;">
                    <a href="{{ route('post.edit', ['username' => $post->user_name , 'slug_post' => $post->slug_title]) }}"
                        style="border: none;margin-top: 7%; color:white;">
                        <button class="favorite styled button-30" type="button-29"
                            style="font-size: 12px; heigth:23px;width:100%; background-color:#6c6c6c;color:white !important; font-family:Arial, Helvetica, sans-serif; border-radius:4px;">
                            Edit
                        </button>
                    </a>
                    <button type="button" class="favorite styled button-30" data-toggle="modal"
                        data-target="#exampleModal"
                        style="font-size: 12px; heigth:23px;width:9%; background-color:#414141;color:white !important; margin-top: 7%; margin-left: 1%; font-family:Arial, Helvetica, sans-serif; border-radius: 4px;">
                        Delete
                    </button>

                    <!-- Modal -->
                    @include('delete-popup')
                    {{-- </a> --}}
                </div>
                @endif
                @endif
            </div>
        </div>
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Leave a comment</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>

                            <div class="field half">
                                <input type="text" name="email" id="email" placeholder="Email" />
                            </div>

                            <div class="field">
                                <textarea name="message" id="message" rows="3" placeholder="Your message"></textarea>
                            </div>

                            <div class="field text-right">
                                <label>&nbsp;</label>

                                <ul class="actions">
                                    <li><input type="submit" value="Submit" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section>

                    <h2>Share This</h2>

                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        <li><a href="#" class="icon style2 fa-behance"><span class="label">Behance</span></a></li>
                    </ul>
                </section>

                <ul class="copyright">
                    <li>Copyright © 2020 Company Name </li>
                    <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
