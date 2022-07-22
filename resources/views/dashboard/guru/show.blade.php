@extends('layouts.default')
 @section('content')
    <section>
        <div class="container"><div class="form-group mt-4 ">
            <a href="{{url('/')}}" class="btn btn-outline-primary">Kembali ke halaman utama</a>
        </div></div>
        <div class="container mt-3">
            <h1 class="mb-4">Edit Data Siswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    
                    <form action="/guru/update/{{$datas->id}}" method="POST" enctype="multipart/form-data" >
                        @csrf     
                        <div class="mb-4 ">
                            <label for="nama" class="form-label primary">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" id="nama" aria-describedby="emailHelp"name="nama"value="{{$datas->nama}}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="mb-2">Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukan Alamat" id="alamat" aria-describedby="emailHelp"name="alamat"value="{{$datas->alamat}}">
                        </div>
                        <div class="mb-3">
                            <label for="nis" class="mb-2">NIS</label>
                            <input type="text" class="form-control" placeholder="MasukaN NIS" id="nis" aria-describedby="emailHelp"name="nis"value="{{$datas->nis}}">
                        </div>
                        <div class="mb-3">
                            <label for="ttl" class="mb-2">Tanggal Lahir</label>
                            <input type="date" class="form-control"  id="ttl" aria-describedby="emailHelp"name="ttl"value="{{$datas->ttl}}">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="mb-2">No Hp</label>
                            <input type="text" class="form-control"  id="nohp" aria-describedby="emailHelp"name="nohp"value="{{$datas->nohp}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" class="form-control"  id="email" aria-describedby="emailHelp"name="email"value="{{$datas->email}}">
                        </div>
                        <div class="mb-4 ">
                            <label for="jabatan" class="mb-2 ">Jabatan</label>
                            <input type="text" class="form-control"  id="jabatan" aria-describedby="emailHelp"name="jabatan"value='{{$datas->jabatan}}'>
                        </div>
                        
                        <div class="form-group mt-2 d-inline me-5 mb-2">
                            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-plus-circle-fill "></i>  Simpan Siswa</button>
                        </div>

                        
                
                    </form>
                </div>
            </div>
        </div>
    </section>
 @endsection