<!-- Delete Modal -->
<div class="modal fade m-medium" id="delete_sub_category_{{$sub->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-subcategory" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Delete Sub-Category?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p class="s-text">Remove <strong>'{{ ucwords($sub->name) }}'</strong> from your list of sub-categories? </br><span class="p-text">This cannot be undone.</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{route('delete_sub_category', $sub->id)}}" class="btn btn-fill btn-danger pull-right">Delete</a>
            </div>
        </div>
    </div>
</div>