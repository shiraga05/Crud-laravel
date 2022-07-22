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
     <section class="bg-light   ">  
      
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      
    
     <div class="container mt-3 ">
      
    
 @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-light mb-3"><i class="bi bi-person me-2 "></i>{{auth()->user()->name}}<hr style="height: 1px;
        background-color: rgb(0, 0, 0);
        border: none;">  
        <p>Anda adalah
          @if(auth()->user()->role == '1')
          guru
          @elseif(auth()->user()->role == '2')
          siswa
          @else anda adalah penyusup
          @endif </p></button>
      <div >
        
                                <a class="btn btn-danger text-white" href="{{route('logout')}}"role="button" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power d-inline me-2 " viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg>    Logout</a>
                                                        </div>
                          </div>
                                <div >
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                           
                        @endguest
       
       </div>
  </nav>


         <div  div class="row">
            <div class="col-lg">      
            <h2 style="text-align: center;color:rgb(30, 134, 225);" class="mb-3 mt-3">Nama Siswa </h2>
                              @if(auth()->user()->role == '1')

            <a href="/guru/create" class="btn btn-outline-primary mt-4 mb-3 "><i class="bi bi-plus-circle-fill "></i> Tambah Siswa </a>
          @endif  
          </div>
            <div class="table-responsive p-3  ">
            <table class="table-bordered border-dark display py-3" id="tableSiswa" >
               <thead>
                 <tr class="bg-primary">
                   <th scope="col" style="width:50px;">No</th>
                   <th scope="col">Nama</th>
                   <th scope="col">Alamat</th>
                   <th scope="col">NIS</th>
                   <th scope="col">TTL</th>
                   <th scope="col">No.Hp</th>
                   <th scope="col">Email</th>
                   <th scope="col">Jabatan</th>
                   @if(auth()->user()->role == '1')
                
                   <th scope="col">Action</th>
                     @endif
                 </tr>
               </thead>
               <tbody>
                <?php $i=1 ?>
                @foreach ($datas as $data)
                <tr class="bg-light">
                  <td>{{ $i++ }}</td>
                  <td>{{ $data->nama  }}</td>
                  <td>{{ $data->alamat  }}</td>
                  <td>{{$data->nis}}</td>
                  <td>{{$data->ttl}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success " href="http://wa.me/{{$data->nohp}}" target="_blank" role="button" ><i class="bi bi-whatsapp">
                        </i></a>
                       <a href="http://wa.me/" class="btn btn-outline-success">{{$data->nohp}}</a>
                    </div>
                
                     
                  
                   
                
                  </td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->jabatan}}</td>
                @if(auth()->user()->role == '1')
                <td>
                 
                  <div class="btn-group mb-2 me-2">
                      <a href="guru/show/{{$data->id}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="guru/show/{{$data->id}}" class="btn btn-outline-warning">Edit</a>
                  </div>
                  <div class="btn-group mb-2">
                      <a href="guru/destroy/{{$data->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                      <a href="guru/destroy/{{$data->id}}" class="btn btn-outline-danger">Hapus</a>
                  </div>
                  @endif
                </td>
  
                  
                </tr>
                @endforeach
               </tbody>
            </table>
           
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