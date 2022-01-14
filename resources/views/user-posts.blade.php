<!DOCTYPE HTML>
<html>
	<head>
		<title>AREA 17 - Blogging Platform</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <script src="/js/vue.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"/></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="fa fa-pencil"></span> <span class="title">AREA 17 - Blogging Platform</span>
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
							<h1> Welcome to {{ $user_name }} blog</h1>

							<div class="image main">
								<img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<div class="container-fluid">
								<div class="row">
									<div class="col-9">
                                        <div class="row">


                                        </div>

                                        @foreach ($array_posts as $post )

                                        <div style="margin-top:9%; margin-left:5%; margin-right:5%; ">
                                            <div class="col-sm-10 text-center ml-5 mt-3 mb-5 shadow-sm p-3 mb-5 bg-white rounded" >
                                            <div style="margin-bottom: 3%;  height:40vh;">
                                                <h3 class="m-n">{{ Str::limit($post['title'],40)}}</h3>
								                <p> {{$post->user_name}} | {{$post->created_at}}</p>
								             <div class="new-content" >{!! Str::limit($post->post_content, 500) !!}</div>

                                             </div>
                                            <div style="margin-left:2vh">
                                                <a href="{{ route('post.see', [$post->user_name, $post->slug_title] )}} " style="border: none;">
									                <button class="favorite styled button-30" type="button-29" style="font-size: 10px; heigth:23px;width:50%">
										            See Post
									                </button>
								                </a>
                                            </div>

							            </div>
                                        </div>


						    @endforeach

									</div>

									<div class="col-3">
										<div class="form-group">
				                            <h4>Blog Search</h4>
				                        </div>

										<div class="form-group">
				                            <div class="input-group">
				                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

				                                <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
				                            </div>
				                        </div>

				                        <br>

				                        <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>

				                        <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut.</a></p>

				                        <p><a href="#">Vatae expedita deleniti optio ex adipisci . </a></p>

				                        <p><a href="#">Soluta non modi dolorem voluptates dolor laborum.</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
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


<style>
	.new-content{
		overflow: hidden;

	}
	.new-content img{
		width: 100%;
		border: none;
		height: auto;
	}
	.new-content p{
		width: 100%;
	}

</style>
