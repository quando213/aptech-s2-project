<a type="button" class="btn btn-danger" data-bs-toggle="modal"
   data-bs-target="#delete-{{ $id }}">Xóa</a>
<div class="modal fade" id="delete-{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yêu cầu xác nhận</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ $content && strlen($content) ? $content : 'Bạn có chắc chắn muốn xóa?' }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <a href="{{ $href }}" class="btn btn-danger">Xóa</a>
            </div>
        </div>
    </div>
</div>
