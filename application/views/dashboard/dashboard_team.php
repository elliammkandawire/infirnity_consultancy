

<div class="col-lg-9"><!--start col-lg-4-->
    <div class="w3-card-16">

        <?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
            <?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
            <div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Feedback!</strong> <?php echo $message ?>
            </div>
            <?php $_SESSION['message']=null; } ?>
        <header class="w3-container w3-blue">
            <h5>Latest to Oldest</h5>
            <button class="btn btn-success" data-toggle="modal" data-target="#add" onclick="add_summary_note()" data-whatever="@mdo"><i class="fa fa-plus"></i> Add</button>
        </header>


        <div class="row">
            <div class="col-sm-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php foreach($pagenation as $page_number): ?>
                            <li class="page-item <?php if($page==$page_number){ echo "active";} ?>"><a class="page-link active" href="<?php echo base_url() ?>team_admin?page=<?php echo $page_number ?>"><?php echo $page_number ?></a></li>

                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div id="container" style="width: 100%;">
        <?php foreach($data as $item): ?>
            <div class="gallery w3-container">
                <a target="_blank" href="<?php echo base_url(); ?>images\news\<?php echo $item->picture; ?>">
                    <img src="<?php echo base_url(); ?>images\team\<?php echo $item->picture; ?>" alt="" style="object-fit: cover; height: 200px;" >
                </a>
                <div class="desc"><?php echo $item->fullname;  ?></div>
                <div class="container">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit" data-whatever="@mdo" onclick="edit_team('<?php echo $item->id; ?>')"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-warning btn-sm" onclick="delete_('<?php echo $item->id; ?>','<?php echo $item->fullname; ?>','Confirm deleting team member with name ','team/delete')"><i class="fa fa-trash"></i></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div><!--end col-lg-4-->


</div>
</div>
</div>
</div>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="add_team" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Full Name:</label>
                                <input type="text" class="form-control" name="fullname"  required="">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Position</label>
                                <input  type="text" class="form-control" name="position">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Email</label>
                                <input  type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Twitter Link</label>
                                <input  type="text" class="form-control" value="#" name="twitter_link">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Facebook Link</label>
                                <input  type="text" class="form-control" value="#" name="facebook_link">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Deleted</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">News Artwork:</label>
                                <input type="file" class="form-control" name="picture" accept=".jpg, .png, .jpeg, .gif" required="" onchange="readURL(this,'picture')">
                            </div>

                            <div>
                                <img src="#" alt="" style="object-fit: cover; height: 200px; width: 50%;" id="picture">
                            </div>
                            <br>


                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php $uri = $_SERVER['REQUEST_URI']; ?>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 60%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="update_team" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" class="form-control" name="id" id="edit_id" required="">
                            <input type="hidden" class="form-control" id="url"  value="<?php echo base_url(); ?>">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Full Name:</label>
                                <input type="text" class="form-control" name="fullname" id="edit_fullname"  required="">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Position</label>
                                <input  type="text" class="form-control" name="position" id="edit_position">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Email</label>
                                <input  type="email" class="form-control" name="email" id="edit_email">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Twitter Link</label>
                                <input  type="text" class="form-control" name="twitter_link" id="edit_twitter_link">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Facebook Link</label>
                                <input  type="text" class="form-control" name="facebook_link" id="edit_facebook_link">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Status</label>
                                <select class="form-control" name="status" id="edit_status">
                                    <option value="1">Active</option>
                                    <option value="0">Deleted</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">News Picture:</label>
                                <input type="file" class="form-control" name="picture" accept=".jpg, .png, .jpeg, .gif"  onchange="readURL(this,'picture_edit')">
                                <input type="hidden" id="current_picture" name="current_picture">
                            </div>

                            <div>
                                <img src="#" alt="" style="object-fit: cover; height: 200px; width: 50%;" id="picture_edit">
                            </div>
                            <br>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reflesh('news_admin')">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>






