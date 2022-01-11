<template>
    <form method="post" >

                     <div class="form-group">
                       <label for="exampleInputEmail1">Title</label>
                       <input type="text" id="title" name="title" class="form-control" required="">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Description</label>

                        <textarea name="content" id="mytextarea" cols="30" rows="10"></textarea>
                     </div>
                     <input id="author" name="author" type="hidden" >

                     <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
