<x-app-layout>


    <div style="margin-top: 0px; box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);
    -webkit-box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);
    -moz-box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);">

        <div
            style=" width:16%; background-color:rgb(31, 31, 31); height:600px; margin-left:0px; display:flex;flex-direction:column">
            <div style="color: white; border:none; margin-left:6%;margin-top:7%;">
                <span class="fa fa-plus-square-o"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:6%;">Create a new Blog</a><br>
            </div>

            <div style="color: white; border:none; margin-left:6%;margin-top:7%;">
                <span class="fa fa-eye"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:6%;">My Blogs</a><br>
            </div>

            <div style="color: white; border:none; margin-left:6%;margin-top:7%;">
                <span class="fa fa-cog"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:6%;">Parameters</a><br>
            </div>

        </div>

    </div>
</x-app-layout>

<!DOCTYPE HTML>
<html>

<head>

</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">

        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.html" class="active">Dashboard</a></li>

                <li><a href="blog.html">Blog</a></li>

                <li><a href="about.html">About</a></li>

                <li><a href="team.html">Authors</a></li>

                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>



        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Contact Us</h2>
                    <form method="post" action="#">
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
                        <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States
                            of America</li>
                    </ul>

                    <h2>Follow Us</h2>

                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
                        </li>
                        <li><a href="#" class="icon style2 fa-instagram"><span
                                    class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a>
                        </li>
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
