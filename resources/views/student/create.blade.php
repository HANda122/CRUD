@extends('layouts.app')

@php

    $title = 'Data Siswa';
    $preTitle = 'Tambah Data';

@endphp  

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store')}}" method="post">
            @csrf
            <div class="mb3">
                <label for="" class="form-label">
                    name
                </label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    Phone Numebr
                </label>
                <input type="text" name="phone_number" class="form-control">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    Class
                </label>
                <input type="text" name="class" class="form-control">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    address
                </label>
                <input type="text" name="address" class="form-control">
            </div>

            <div class="mb3">
                
                <input type="submit" value="submit"  class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
@endsection