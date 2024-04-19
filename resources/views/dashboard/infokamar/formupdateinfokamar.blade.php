<!-- Modal -->
@foreach ($datakamar as $data)
    <div class="modal fade" id="update-{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="update" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kamar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/kamar/{{ $data->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" id="kelas" name="kelas">
                                <option value="{{ $data->kelas }}">{{ $data->kelas }}</option>
                                <option value="vip">VIP</option>
                                <option value="deluxe">DELUXE</option>
                                <option value="bangsal">BANGSAL</option>
                                <option value="kelas I">KELAS I</option>
                                <option value="kelas II">KELAS II</option>
                                <option value="kelas III">KELAS III</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kamar" class="form-label">Nama Kamar</label>
                            <input type="text" class="form-control" id="kamar" name="Kamar"
                                value="{{ $data->Kamar }}">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_tt" class="form-label">Jumlah Tempat Tidur</label>
                            <input type="number" class="form-control jumlah_tt" name="jumlahTT"
                                value="{{ $data->jumlahTT }}">
                        </div>
                        <div class="mb-3">
                            <label for="terisi" class="form-label">Terisi</label>
                            <input type="number" class="form-control terisi" name="jumlahTerisi"
                                value="{{ $data->jumlahTerisi }}">
                        </div>
                        <div class="mb-3">
                            <label for="kosong" class="form-label">Kosong</label>
                            <input type="number" class="form-control kosong" name="jumlahKosong"
                                value="{{ $data->jumlahKosong }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="infokamar" class="btn btn-warning">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endforeach
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.modal').forEach(function(modal) {
            const jumlah = modal.querySelector('.jumlah_tt');
            const terisi = modal.querySelector('.terisi');
            const kosong = modal.querySelector('.kosong');

            if (jumlah && terisi && kosong) {
                kosong.addEventListener('mouseover', function() {
                    kosong.value = jumlah.value - terisi.value;
                });
            }
        });
    });
</script>
