     @extends('layouts.default')
     @section('content')

     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Edu+QLD+Beginner&family=Ubuntu:wght@300&display=swap">
     <style> 
     body {
      font-family: 'Edu QLD Beginner', cursive;
     }
     </style>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>
     <section>
     <div class="container mt-5 ">
         <div  div class="row">
            <div class="col-lg">      
            <h2 style="text-align: center;color:rgb(30, 134, 225);" class="mb-3 ">Nama Siswa Yang Sudah Terdaftar</h2>
            
            </div>
            <div class="table-responsive p-3  ">
            <table class="table-bordered border-primary display py-3" id="tableSiswa" >
               <thead>
                 <tr>
                   <th scope="col" style="width:50px;">No</th>
                   <th scope="col">Nama</th>
                   <th scope="col">Alamat</th>
                   <th scope="col" style="width: 190px;">Action</th>
                 </tr>
               </thead>
               <tbody>
                <?php $i=1 ?>
                @foreach ($datas as $data)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $data->nama  }}</td>
                  <td>{{ $data->alamat  }}</td>
                  <td >
                    <div class="btn-group me-4 mb-2">
                      <a href="{{url('/show/'.$data->id)}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                      <a href="{{url('/show/'.$data->id)}}" class="btn btn-outline-warning  btn-sm ">Edit</a>
                    </div>
                    <div class="btn-group">
                      <a href="{{url('/destroy/'.$data->id)}}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                      <a href="{{url('/destroy/'.$data->id)}}" class="btn btn-outline-danger ">Hapus</a>
                    </div>
                </td>
                  
                </tr>
                @endforeach
               </tbody>
            </table>
            <a href="{{url('create')}}" class="btn btn-outline-primary mt-4 mb-3 "><i class="bi bi-plus-circle-fill "></i> Tambah Siswa </a>
          </div>
           
        </div>
     </div>
    </section>    
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
    $('#tableSiswa').DataTable();
});
    </script>
   @endsection