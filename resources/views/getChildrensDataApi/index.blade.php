@extends('layoutsMaster.master')
@section('content')

    <h1 style="text-align: center">Data Anak dari Api</h1>
    <br>

    <div class="container">
      
        <table class="table table-dark table-striped" style="text-align: center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>     
                    <th>Jenis Kelamin</th> 
                    <th>Alamat</th> 
                    <th>Tempat Tanggal Lahir</th> 
                    <th>Golongan darah</th> 
                    <th colspan="2">Aksi</th>
                    
                </tr>    
            </thead>
            
             
            @foreach ($childrens as $data)
                <tbody>
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['jenis_kelamin'] }}</td>
                        <td>{{ $data['alamat'] }}</td>
                        <td>{{ $data['ttl'] }}</td>
                        <td>{{ $data['golongan_darah'] }}</td>
                        
                        
                        <td>
                            <form action="{{ route('edit.api',$data['id_anak']) }}" method="post">
                                @csrf
                                <button style="background: transparent;border:none;">
                                    <img style="width: 20px" src="{{ asset('style\assets\img\edit.png') }}" alt="error">
                                </button>
                               
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('delete.api',$data['id_anak']) }}" method="get">
                                @csrf
                                <button style="background: transparent;border:none;">
                                    <img style="width: 20px" src="{{ asset('style\assets\img\remove.png') }}" alt="error">
                                </button>
                               
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <br>
        <a href="{{ route('addData.api') }}" class="btn btn-primary">Tambah Data</a>


     
    </div>


@endsection