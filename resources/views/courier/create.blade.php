<!-- create modal content -->
<div id="create-courier" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Courier</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                {{Form::open(['route' => 'store_courier', 'method' => 'POST'])}}
                    <div class="form-group">
                        <label for="name" class="control-label">Courier Name:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Address:</label>
                        <input type="text" class="form-control" id="recipient-name" name="address"/>
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