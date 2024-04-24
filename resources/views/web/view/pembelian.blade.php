@extends('template.layout')
@extends('template.nav')
@section('title', 'profil - Toko Baju ')
@section('main')
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah metode pembayaran</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman metode pembayaran</li>
                    </ol>
                    <form action="{{ route('action.create_pembelian') }}" method="post">   
                    @csrf

                    <div class="col-12 col-md-4 form-group">

                    <label for="user" class="form-label">User</label>
                    <select class="form-control" name="user" id="user" required>
                    <option disabled selected>- Pilih User -</option>
                    @foreach ($data_user as $item)
                    <option value="{{ $item->user_id }}">
                    {{ $item->user_id }}
                    </option>
                    @endforeach
                    </select>
                    <label for="pembelian_metode_pembayaran_id" class="form-label">User</label>
                    <select class="form-control" name="metode_pembayaran" id="metode_pembayaran" required>
                    <option disabled selected>- Pilih  metode pembayaran-</option>
                    @foreach ($metode_pembayaran as $item)
                    <option value="{{ $item->metode_pembayaran_id }}">
                    {{ $item->metode_pembayaran_id }}
                    </option>
                    @endforeach
                    </select>
                    </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="pembelian_tanggal" class="form-label">  tanggal pembelian*</label>
                                <input type="text" name="tanggal" id="tanggal" class="form-control"
                                    placeholder="Masukkan harga pakaian">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="pembelian_total_harga" class="form-label"> total harga*</label>
                                <input type="text" name="total_harga" id="total_harga" class="form-control"
                                    placeholder="Masukkan nama">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="pembelian_status" class="form-label"> status pembelian*</label>
                                <select name="pembelian_status" id="pembelian_status" class="formcontrol">
                                <option selected>-Pilih Status-</option>
                                <option value="beli">beli</option>
                                <option value="proses">proses</option>
                                <option value="selesai">selesai</option>
                                <option value="batal">batal</option>
                            </select>
                            </div>
                                    <input type="submit" class="btn btn-primary" value="Tambahkan">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>