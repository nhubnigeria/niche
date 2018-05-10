<!-- create modal content -->
<div id="create-category" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                {{Form::open(['route' => 'store_category', 'method' => 'POST'])}}
                    <div class="form-group">
                        <label for="name" class="control-label">Category Name:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="code" class="control-label">Code:</label>
                        <input type="text" class="form-control" id="recipient-name" name="code"/>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Description:</label>
                        <input type="text" class="form-control" id="recipient-name" name="description"/>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>
<!-- /.modal -->