@extends('layouts.admin')

@section('title')
    Maktab nomito'liq & Raqami
@endsection
@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.schoolName.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h6>Misol uchun : <strong>11-sonli umumta'lim maktabi</strong></h6>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Maktab nomi to'liq Uz</label>
                                    <input type="text" class="form-control" name="name_uz" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maktab nomi to'liq Ru</label>
                                    <input type="text" class="form-control" name="name_ru" value="{{ old('name_ru') }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maktab nomi to'liq Eng</label>
                                    <input type="text" class="form-control" name="name_en" value="{{ old('name_en') }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maktab nomi to'liq Oz</label>
                                    <input type="text" class="form-control" name="name_oz" value="{{ old('name_oz') }}">
                                    @error('name_oz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <br>
                                <hr>
                                <h6>Misol uchun:   <strong>Sirdaryo, Guliston shahar</strong></h6>
                                <br>
                                <hr>
                                <br>
                                <div class="form-group">
                                    <label>Viloyat (tuman) Uz</label>
                                    <input type="text" class="form-control" name="city_uz" value="{{ old('city_uz') }}">
                                    @error('city_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Viloyat (Tuman) Ru</label>
                                    <input type="text" class="form-control" name="city_ru" value="{{ old('city_ru') }}">
                                    @error('city_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Viloyat (Tuman) Oz</label>
                                    <input type="text" class="form-control" name="city_oz" value="{{ old('city_oz') }}">
                                    @error('city_oz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                           
                                <div class="form-group">
                                    <label>Viloyat (Tuman) Eng</label>
                                    <input type="text" class="form-control" name="city_en" value="{{ old('city_en') }}">
                                    @error('city_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maktab rasmi</label>
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Save</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
@endsection
