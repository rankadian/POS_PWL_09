@empty($detail_penjualan)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data yang anda cari tidak ditemukan
                </div>
                <a href="{{ url('/detail_penjualan') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
@else
    <form action="{{ url('/detail_penjualan/' . $detail_penjualan->detail_id . '/update_ajax') }}" method="POST"
        id="form-edit">
        @csrf
        @method('PUT')
        <div id="modal-master" class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Detail Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {{--  <div class="form-group">
                        <label>Penjualan ID</label>
                        <input value="{{ $detail_penjualan->penjualan_id }}" type="text" name="penjualan_id" id="penjualan_id" class="form-control" required>
                        <small id="error-penjualan_id" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Barang ID</label>
                        <input value="{{ $detail_penjualan->barang_id }}" type="text" name="barang_id" id="barang_id" class="form-control" required>
                        <small id="error-barang_id" class="error-text form-text text-danger"></small>
                    </div>  --}}
                    <div class="form-group">
                        <label>Penjualan</label>
                        <select name="penjualan_id" id="penjualan_id" class="form-control" required>
                            <option value="">- Pilih Kode Penjualan -</option>
                            @foreach ($penjualan as $item)
                                <option value="{{ $item->penjualan_id }}"
                                    {{ $detail_penjualan->penjualan_id == $item->penjualan_id ? 'selected' : '' }}>
                                    {{ $item->penjualan_kode ?? 'ID: ' . $item->penjualan_id }}
                                </option>
                            @endforeach
                        </select>
                        <small id="error-penjualan_id" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Barang</label>
                        <select name="barang_id" id="barang_id" class="form-control" required>
                            <option value="">- Pilih Barang -</option>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->barang_id }}"
                                    {{ $detail_penjualan->barang_id == $barang->barang_id ? 'selected' : '' }}>
                                    {{ $barang->barang_kode }} - {{ $barang->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                        <small id="error-barang_id" class="error-text form-text text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input value="{{ $detail_penjualan->harga }}" type="number" name="harga" id="harga"
                            class="form-control" required>
                        <small id="error-harga" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input value="{{ $detail_penjualan->jumlah }}" type="number" name="jumlah" id="jumlah"
                            class="form-control" required>
                        <small id="error-jumlah" class="error-text form-text text-danger"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $("#form-edit").validate({
                rules: {
                    penjualan_id: {
                        required: true
                    },
                    barang_id: {
                        required: true
                    },
                    harga: {
                        required: true,
                        min: 1
                    },
                    jumlah: {
                        required: true,
                        min: 1
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            if (response.status) {
                                $('#myModal').modal('hide');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message
                                });
                                dataDetailPenjualan.ajax.reload();
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: response.message
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endempty