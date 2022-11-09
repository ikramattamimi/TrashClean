<div class="dropdown">
    <a href="#" type="button" class="btn btn-sm btn-primary">Tambah Sampah
        Baru <i class="bi bi-plus-circle"></i></a>

    <ul>
        <li>
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-jemput">
                Jemput
            </button>
        </li>
        <li>
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-tambah">
                Antar Sendiri
            </button>
        </li>
    </ul>

    <!-- Modal -->
    <div class="modal fade" id="modal-jemput" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jemput Sampah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Sampah akan segera dijemput oleh petugas.
                        Mohon periksa pesanan anda:</p>
                    <div class="row d-flex align-items-center">
                        <div class="col-8">
                            <p>Jumlah Sampah Organik:</p>
                        </div>
                        <div class="col-4">
                            <input id="span-jumlah-quant[1]" class="form-control border-0" value="1 keranjang"
                                disabled />
                        </div>
                    </div>

                    <div class="row d-flex align-items-center">
                        <div class="col-8">
                            <p>Jumlah Sampah Anorganik:</p>
                        </div>
                        <div class="col-4">
                            <input id="span-jumlah-quant[2]" class="form-control border-0" value="1 keranjang"
                                disabled />
                        </div>
                    </div>

                    <div class="row d-flex align-items-center">
                        <div class="col-8">
                            <p>Jumlah Sampah B3:</p>
                        </div>
                        <div class="col-4">
                            <input id="span-jumlah-quant[3]" class="form-control border-0" value="1 keranjang"
                                disabled />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
</div>
