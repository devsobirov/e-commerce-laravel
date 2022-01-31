@extends('layouts.admin')

@section('page-heading')
    Продукт категорияларини бошкариш
@endsection

@section('content')
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="d-flex justify-content-between card-header">
                    <span>Барча категориялар</span>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Янги яратиш</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped dataTable-table" id="table1">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Номи</th>
                                <th>УРЛ (slug)</th>
                                <th>Изох</th>
                                <th>Амалиётлар</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $cats)
                            <tr>
                                <td>{{$cats->id}}</td>
                                <td>{{$cats->name}}</td>
                                <td>{{$cats->slug}}</td>
                                <td>{{$cats->description}}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-warning my-1">Тахрирлаш</a>
                                    <form action="">
                                        <button type="submit" class="btn btn-danger my-1">Учириш</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Каткгориялар мавжуд эмас</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="dataTable-bottom">
                    {{ $categories->links() }}
                </div>
            </div>

        </section>
    </div>
@endsection
