<html>
<body>
      <h2 style="margin-left: 80px; margin-top:20px;">Hello {{ Auth::user()->name}} !</h2>
       <div id="app">

        <section>
            <div style="margin-left: 18%; width:900px;">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('create_post')}}">
                    @csrf
                     <div class="form-group">
                       <label for="exampleInputEmail1">Title</label>
                       <input type="text" id="title" name="title" class="form-control" required="">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Description</label>
                       @csrf
                        <textarea name="content" id="mytextarea" cols="30" rows="10"></textarea>
                     </div>
                     <input id="author" name="author" type="hidden" value="{{Auth::user()->name}}">

                     <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
            </div>

        </section>
       </div>
       <script src="https://cdn.tiny.cloud/1/skvzsabyp0l5c6b7n28tu058vv89ba5ib3qj6rs3sn7xx0dx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
       <script>
           tinymce.init({
               selector:'#mytextarea'
           });
       </script>
       <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>







