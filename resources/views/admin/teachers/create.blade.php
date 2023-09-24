@extends('layouts.admin')

@section('title')
    Create Teachers
@endsection
@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>O'qituvchi qo'shish</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>F.I.SH (УЗ)</label>
                                    <input type="text" class="form-control" name="name_oz"
                                        value="{{ old("name_oz") }}">
                                    @error("name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (Uz)</label>
                                    <input type="text" class="form-control" name="name_uz"
                                        value="{{ old('name_uz') }}">
                                    @error('name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (Ru)</label>
                                    <input type="text" class="form-control" name="name_ru"
                                        value="{{ old('name_ru') }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (En)</label>
                                    <input type="text" class="form-control" name="name_en"
                                        value="{{ old('name_en') }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (УЗ)</label>
                                    <input type="text" class="form-control" name="class_time_oz"
                                        value="{{ old("class_time_oz") }}">
                                    @error("class_time_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (Uz)</label>
                                    <input type="text" class="form-control" name="class_time_uz"
                                        value="{{ old('class_time_uz') }}">
                                    @error('class_time_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (Ru)</label>
                                    <input type="text" class="form-control" name="class_time_ru"
                                        value="{{ old('class_time_ru') }}">
                                    @error('class_time_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (En)</label>
                                    <input type="text" class="form-control" name="class_time_en"
                                        value="{{ old('class_time_en') }}">
                                    @error('class_time_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                              
                                <div class="form-group">
                                    <label>Mutaxasislik (УЗ)</label>
                                    <input type="text" class="form-control" name="specialist_oz"
                                        value="{{ old('specialist_oz') }}">
                                    @error('specialist_oz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mutaxasislik (UZ)</label>
                                    <input type="text" class="form-control" name="specialist_uz"
                                        value="{{ old('specialist_uz') }}">
                                    @error('specialist_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mutaxasislik (RU)</label>
                                    <input type="text" class="form-control" name="specialist_ru"
                                        value="{{ old('specialist_ru') }}">
                                    @error('specialist_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mutaxasislik (EN)</label>
                                    <input type="text" class="form-control" name="specialist_en"
                                        value="{{ old('specialist_en') }}">
                                    @error('specialist_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label>Toifasi</label>
                                    <input type="text" class="form-control" name="category"
                                        value="{{ old('category') }}">
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label>Toifa kiriting</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Telefon Raqam</label>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               
                                <div class="form-group">
                                    <label>Rasm </label>
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
