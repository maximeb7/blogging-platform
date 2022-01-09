<html>


<body>
      <h2 style="margin-left: 80px; margin-top:20px;">Hello {{ Auth::user()->name}} !</h2>
       <div id="app">
           <dashboard-component></dashboard-component>
       </div>
       <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>








