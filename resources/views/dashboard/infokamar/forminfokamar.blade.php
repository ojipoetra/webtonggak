<!-- Modal -->
<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kamar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" id="kelas" name="kelas">
                            <option selected disabled>== Pilih Kelas ==</option>
                            <option value="VIP">VIP</option>
                            <option value="DELUXE">DELUXE</option>
                            <option value="BANGSAL">BANGSAL</option>
                            <option value="kelas I">KELAS I</option>
                            <option value="kelas II">KELAS II</option>
                            <option value="kelas III">KELAS III</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kamar" class="form-label">Nama Kamar</label>
                        <input type="text" class="form-control" id="kamar" name="kamar">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_tt" class="form-label">Jumlah Tempat Tidur</label>
                        <input type="number" class="form-control" id="jumlah_tt" name="jumlahTT">
                    </div>
                    <div class="mb-3">
                        <label for="terisi" class="form-label">Terisi</label>
                        <input type="number" class="form-control" id="terisi" name="jumlahTerisi">
                    </div>
                    <div class="mb-3">
                        <label for="kosong" class="form-label">Kosong</label>
                        <input type="number" class="form-control" id="kosong" name="jumlahKosong">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
<script>
    const jumlahTT = document.getElementById('jumlah_tt');
    const terisi = document.getElementById('terisi');
    const kosong = document.getElementById('kosong');

    terisi.addEventListener('keyup', function() {
        kosong.value = jumlahTT.value - terisi.value;
    });
</script>
