@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
Post
@endsection

{{-- Head --}}
@section('head')

@endsection

{{-- Container --}}
@section('container')
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bakti Sosial</td>
            <td>29 Agustus 2023</td>
            <td><button>Edit</button></td>
        </tr>
    </table>
@endsection