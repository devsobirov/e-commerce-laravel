@extends('layouts.admin')

@section('page-heading') Янги продукт категорияси яратиш сахифаси @endsection

@section('content')
    <section id="input-style">
        <form class="row"  method="POST" action="{{ route('admin.category.store') }}">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-1">
                            <label for="roundText">Kategoriya nomi</label>
                            <input type="text" class="form-control round" name="name" value="{{ $category->name }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-1">
                            <label for="roundText">Kategoriya uchun slug (URL)</label>
                            <input type="text" class="form-control round" name="slug">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Qisaqacha ma'lumot (izox)</label>
                            <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end mb-3 pe-3">
                        <button type="submit" class="btn btn-success">Яратиш</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
