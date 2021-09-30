@extends('layouts.app')

@section('content')
    <br/>
    <form method="POST" action="{{ url('siswa') }}">    
        @csrf 
        Nama : <input type="text" name="nama"><br/>
        Kelas : <input type="text" name="kelas"><br/>
        Alamat : <input type="text" name="alamat"><br/>

        

        <button type="submit">SIMPAN</button>
    </form>
@endsection