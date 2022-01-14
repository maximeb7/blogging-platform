<x-app-layout>


    <div style="margin-top: 0px; box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);
    -webkit-box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53);
    -moz-box-shadow: 9px 1px 5px -1px rgba(209,209,209,0.53); height:100%; display:flex;">

        <div
            style=" width:10%; background-color:rgb(31, 31, 31); height:100%; margin-left:0px; display:flex;flex-direction:column">


            <div style="color: white; border:none; margin-left:6%;margin-top:7%;">
                <span class="fa fa-eye"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:12%;">My Posts</a><br>
            </div>

            <div style="color: white; border:none; margin-left:6%;margin-top:75vh;">
                <span class="fa fa-cog"></span><a href="#" class="w3-bar-item w3-button"
                    style="color: white; border:none; margin-left:12%;">Parameters</a><br>
            </div>

            <div style="color: white; border:none; margin-left:0%;margin-top:7%;">

                    <form method="POST" action="{{ route('logout') }}" style="margin: 0px;color:white;">
                        @csrf
                        <span class="fa fa-sign-out" style="color: white; margin-left:7%"></span>
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();" style="color: white; margin-left:0%;">Logout
                        </x-dropdown-link>
                    </form>
                    </a><br>
            </div>

        </div>

        <div>
            <h2 style="margin-left: 80px; margin-top:20px; color:rgb(62, 62, 62)">Hello {{ Auth::user()->name}} !</h2>
            @if (isset($success))
               <h3 style="margin-left: 80px; margin-top:15px;"> Congratulations !!{{$success}}</h3>


            @endif
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
