<html>

<body>

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
                        <textarea name="post_content" id="mytextarea" cols="30" rows="10"></textarea>
                    </div>
                    <input id="author" name="author" type="hidden" value="{{Auth::user()->id}}">

                    <button type="submit" class="favorite styled button-30" type="button-29"
                        style="font-size: 12px; heigth:23px;width:15%; background-color:#361e62;color:white !important">Save</button>
                </form>
            </div>

        </section>
    </div>
    <script src="https://cdn.tiny.cloud/1/skvzsabyp0l5c6b7n28tu058vv89ba5ib3qj6rs3sn7xx0dx/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
               selector:'#mytextarea'
           });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
