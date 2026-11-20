@extends('layouts.master')

@section('content')
    <h2>Daftar Mata Kuliah</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>Jurusan</th>
                <th>Jumlah Mahasiswa</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $matkul)
            <tr>
                <td>{{ $matkul[0] }}</td>    
                <td>{{ $matkul[1] }}</td>
                <td>{{ $matkul[2] }}</td>
                <td><button type="button" class="btn btn-warning">  Detail </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection