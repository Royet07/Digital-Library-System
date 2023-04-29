<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Add New Book</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="add.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">ISBN:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="isbn" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Title:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Author:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="author" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Category:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="category" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Price:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Copies:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="copies" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">BookFile:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="book_file" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span
                        class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </form>
            </div>

        </div>
    </div>
</div>