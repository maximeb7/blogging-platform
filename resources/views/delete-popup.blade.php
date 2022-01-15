<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete post</h5>
                                <a type="button" class="favorite styled button-30" data-dismiss="modal" aria-label="Close" style="border:none">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>
                            <div class="modal-body">
                                Do you really want to delete this post ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary mr-r-5" data-dismiss="modal" style="font-size: 12px; heigth:23px;width:20%; background-color:white;color:#414141 !important; margin-top: 7%; margin-left: 1%; font-family:Arial, Helvetica, sans-serif; border-radius: 4px;">Cancel</button>
                                <a href="{{ route('delete.post', $post->id) }}" style="border:none; width:34%; margin-top:4.7%; margin-right:16%">
                                    <button type="button" class="btn btn-primary" style="font-size: 12px; heigth:23px;width:60%; background-color:#414141;color:white !important; margin-top: 7%; margin-left: 1%; font-family:Arial, Helvetica, sans-serif; border-radius: 4px;">Delete</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
