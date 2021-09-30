@extends('layouts.app')

@section('content')
    <style>
        table {
        width: 70%;
        
        }
        td, th {
        text-align: center;
        height: 70px;
        padding: 15px;
        }
    </style>
    <br/>
    
    <br/>
    <table class="table-bordered tabel">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th colspan="2">AKSI</th>
        </tr>
        @foreach($datas as $key=>$value)

            <tr>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->kelas }}</td>
                <td>{{ $value->alamat }}</td>
                <td class="text-center"><a class="btn btn-info" href="{{ url('siswa/'.$value->id.'/edit') }}">Update</a></td>

                <td>
                    <form action="{{ url('siswa/'.$value->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btb btn-danger" type="submit">HAPUS</button> 
                    </form>
                </td>
            
            </tr>

        @endforeach
    </table>
    <a class="btn btn-info" href="{{ url('siswa/create') }}">Tambah</a>
@endsection