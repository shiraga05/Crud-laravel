@extends('layouts.default')
 @section('content')
    <section>
        <div class="container justify-content-center "><div class="form-group mt-4 ">
            <a href="/guru" class="btn btn-outline-primary">Kembali ke halaman utama</a>
        </div></div>
        <div class="container mt-3">
            <h1 class="mb-4">Tambah Siswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    
                    <form action="/guru/store " method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="mb-4  ">
                            <label for="nama" class="form-label ">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" id="nama" aria-describedby="emailHelp"name="nama">
                        </div>
                          <div class="mb-3">
                            <label for="alamat" class="mb-2">Alamat</label>
                           <textarea class="form-control"placeholder="Masukan Alamat" id="alamat" aria-describedby="emailHelp"name="alamat"></textarea>
                          </div>
                          <div class="mb-4 ">
                            <label for="nis" class="form-label ">NIS</label>
                            <input type="text" class="form-control" placeholder="Masukan NIS" id="nis" aria-describedby="emailHelp"name="nis">
                        </div>
                        <div class="mb-4 ">
                            <label for="ttl" class="form-label ">TTL</label>
                            <input type="date" class="form-control"  id="ttl" aria-describedby="emailHelp"name="ttl">
                        </div>
                        <div class="mb-4 ">
                            <label for="nohp" class="form-label ">No.HP</label>
                            <input type="text" class="form-control" placeholder="Masukan No.Hp" id="nohp" aria-describedby="emailHelp"name="nohp">
                        </div>
                        <div class="mb-4 ">
                            <label for="email" class="form-label ">Email</label>
                            <input type="email" class="form-control" placeholder="Masukan Nama" id="email" aria-describedby="emailHelp"name="email">
                        </div>
                         <div class="mb-4 ">
                            <label for="jabatan" class="form-label ">Jabatan</label>
                            <input type="text" class="form-control" placeholder="Masukan Jabatan" id="jabatan" aria-describedby="emailHelp"name="jabatan">
                        </div>
                        

                        <div class="form-group mt-2 d-inline me-5 mb-2">
                            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-plus-circle-fill "></i>  Tambah Siswa</button>
                        </div>

                        
                
                    </form>
                </div>
            </div>
        </div>
    </section>
 @endsection