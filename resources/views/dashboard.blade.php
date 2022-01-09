<x-app-layout>


    <div style="margin-top: 0px; box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);
    -webkit-box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);
    -moz-box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53); height:100%; display:flex;">

        <div
            style=" width:16%; background-color:rgb(31, 31, 31); height:900px; margin-left:0px; display:flex;flex-direction:column">


            <div style="color: white; border:none; margin-left:6%;margin-top:7%;">
                <span class="fa fa-eye"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:6%;">My Blogs</a><br>
            </div>

            <div style="color: white; border:none; margin-left:6%;margin-top:7%;">
                <span class="fa fa-cog"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:6%;">Parameters</a><br>
            </div>

        </div>

        <div>
            @include('createblog')
        </div>

    </div>
</x-app-layout>

<!DOCTYPE HTML>
<html>


<body class="is-preload">
    <!-- Wrapper -->


    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
