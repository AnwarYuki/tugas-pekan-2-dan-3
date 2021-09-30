@extends('layouts.app')

@section('content')
    <br/>
    <form method="POST" action="{{ url('siswa/'.$model->id) }}">
        @csrf 
        <input type="hidden" name="_method" value="PATCH">
        Nama : <input type="text" name="nama" value="{{ $model->nama}}"><br/>
        Kelas : <input type="text" name="kelas"value="{{ $model->kelas}}"><br/>
        Alamat : <input type="text" name="alamat"value="{{ $model->alamat}}"><br/>

        

        <button type="submit">SIMPAN</button>
    </form>
@endsection