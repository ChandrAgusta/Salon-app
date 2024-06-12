@extends('home')

@section('container')
    <div class="container" style="margin-top: 15vh">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Jasa</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Jasa</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tBody" class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Potong Rambut</td>
                                <td>50000</td>
                                <td>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalPesan">Pesan</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

    {{-- MODAL --}}
    <!-- Modal -->
    <div class="modal fade" id="modalPesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-3" placeholder="Nama" id="nama">
                            <input type="text" class="form-control mb-3" placeholder="Nomor" id="nomor">
                            <input type="text" class="form-control mb-3" placeholder="Alamat" id="alamat">
                            <input type="text" class="form-control mb-3" placeholder="Jam" id="jam">
                            <select class="form-control mb-2" id="pembayaran" name="pembayaran">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="cash">Cash</option>
                                <option value="Transfer">Transfer</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Pesan</button>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection()