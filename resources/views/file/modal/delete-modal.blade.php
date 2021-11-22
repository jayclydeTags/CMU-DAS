<form action="{{ route('file.destroy',$file->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('DELETE')

    <div class="modal fade" id="ModalDelete{{ $file->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('File Delete') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You sure you want to delete <b>{{ $file->filename }}</b> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
