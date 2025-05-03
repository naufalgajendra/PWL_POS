<div class="d-flex justify-content-center">
    <!-- Edit Button -->
    <a href="{{ $editUrl }}" class="btn btn-sm btn-warning me-1">
        <i class="fas fa-edit"></i> Edit
    </a>
    
    <!-- Delete Button with Confirmation Modal -->
    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $kategori->id }}">
        <i class="fas fa-trash"></i> Delete
    </button>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal{{ $kategori->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $kategori->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel{{ $kategori->id }}">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus kategori <strong>{{ $kategori->kategori_nama }}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="{{ $deleteUrl }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
