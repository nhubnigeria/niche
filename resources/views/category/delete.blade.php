<!-- Delete Modal -->
<div class="modal fade m-medium" id="delete_category_{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-category" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Delete Category?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p class="s-text">Remove <strong>'{{ ucwords($cat->name) }}'</strong> from your list of categories? </br><span class="p-text">This cannot be undone.</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{route('delete_category', $cat->id)}}" class="btn btn-fill btn-danger pull-right">Delete</a>
            </div>
        </div>
    </div>
</div>