<div id="edit_subcategory_{{$sub->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sub-Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                {{Form::open(['route' => ['update_sub_category', $sub->id], 'method' => 'PUT'])}}
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Sub-Category:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name" value="{{ ucwords($sub->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Category:</label>
                        <select  name="category_id" class="custom-select" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}" {{ $sub->category_id == $cat->id ? "selected":"" }}>{{ ucwords($cat->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="code" class="control-label">Code:</label>
                        <input type="text" class="form-control" id="recipient-name" name="code"/>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Description:</label>
                        <input type="text" class="form-control" id="recipient-name" name="description"/>
                    </div>
                <!--</form>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success waves-effect waves-light">Save changes</button>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>