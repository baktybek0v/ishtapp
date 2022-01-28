@extends('admin.layouts.app')

@section('content')

    @include('admin.partials.subheader')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Добавить</h3>
                </div>
                <!--begin::Form-->
                {!! Form::model($skillset, ['route' => 'skillset.store', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                    @include('admin.skillset.form', $skillset)
                {!! Form::close() !!}
                <!--end::Form-->
            </div>
        </div>
        <!--end::Container-->
    </div>

@endsection

@section('scripts')
@endsection

