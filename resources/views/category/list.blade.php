@extends('layouts.batoiEmpresa')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class=" text-center row gx-4 gx-lg-5 row-cols-12 row-cols-md-12 row-cols-xl-12 justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 ">
                    @include('category.table')
                </div>
                <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-success">Añadir nueva</button>
                </a>
            </div>
            <div class="d-flex justify-content-center">
                {!! $categories->links() !!}
            </div>
        </div>
    </section>
@endsection
