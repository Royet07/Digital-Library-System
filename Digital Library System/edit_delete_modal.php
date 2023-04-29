<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit Book</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edit.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">ISBN:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id"
                                    value="<?php echo $row['id']; ?>" style="display: none;">
                                <input type="number" class="form-control" name="isbn"
                                    value="<?php echo $row['isbn']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Title:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title"
                                    value="<?php echo $row['title']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Author:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="author"
                                    value="<?php echo $row['author']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Category:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="category"
                                    value="<?php echo $row['category']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Price:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="price"
                                    value="<?php echo $row['price']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Copies:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="copies"
                                    value="<?php echo $row['copies']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">BookFile:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="book_file"
                                    value="<?php echo $row['book_file']; ?>" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span
                        class="glyphicon glyphicon-check"></span> Update</a>
                    </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Delete Member</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php echo $row['title']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Download File -->
<div class="modal fade" id="download_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Download Book File</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Download?</p>
                <h3 class="text-center"><span style="font-weight: light;">Book Name: </span><?php echo $row['title']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="<?php echo $row['book_file']; ?>" class="btn btn-success"><span
                        class="glyphicon glyphicon-download-alt"></span> Yes</a>
            </div>

        </div>
    </div>
</div>