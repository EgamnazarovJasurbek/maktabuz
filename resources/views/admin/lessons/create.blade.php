@extends('layouts.admin')

@section('title')
    Create Lessons
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.lessons.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Qo'shimcha dars qo'shish</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>Name (УЗ)</label>
                                    <input type="text" class="form-control" name="name_oz"
                                        value="{{ old("name_oz") }}">
                                    @error("name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (Uz)</label>
                                    <input type="text" class="form-control" name="name_uz"
                                        value="{{ old('name_uz') }}">
                                    @error('name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (Ru)</label>
                                    <input type="text" class="form-control" name="name_ru"
                                        value="{{ old('name_ru') }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (En)</label>
                                    <input type="text" class="form-control" name="name_en"
                                        value="{{ old('name_en') }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>O'qituvchi (УЗ)</label>
                                    <input type="text" class="form-control" name="teacher_oz"
                                        value="{{ old("teacher_oz") }}">
                                    @error("teacher_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>O'qituvchi (Uz)</label>
                                    <input type="text" class="form-control" name="teacher_uz"
                                        value="{{ old('teacher_uz') }}">
                                    @error('teacher_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>O'qituvchi (Ru)</label>
                                    <input type="text" class="form-control" name="teacher_ru"
                                        value="{{ old('teacher_ru') }}">
                                    @error('teacher_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>O'qituvchi (En)</label>
                                    <input type="text" class="form-control" name="teacher_en"
                                        value="{{ old('teacher_en') }}">
                                    @error('teacher_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Sinf (УЗ)</label>
                                    <input type="text" class="form-control" name="class_oz"
                                        value="{{ old("class_oz") }}">
                                    @error("class_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sinf (Uz)</label>
                                    <input type="text" class="form-control" name="class_uz"
                                        value="{{ old('class_uz') }}">
                                    @error('class_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sinf (Ru)</label>
                                    <input type="text" class="form-control" name="class_ru"
                                        value="{{ old('class_ru') }}">
                                    @error('class_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sinf (En)</label>
                                    <input type="text" class="form-control" name="class_en"
                                        value="{{ old('class_en') }}">
                                    @error('class_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                              
                                <div class="form-group">
                                    <label>Hafta kun (УЗ)</label>
                                    <input type="text" class="form-control" name="week_oz"
                                        value="{{ old('week_oz') }}">
                                    @error('week_oz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hafta kun (UZ)</label>
                                    <input type="text" class="form-control" name="week_uz"
                                        value="{{ old('week_uz') }}">
                                    @error('week_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hafta kun (RU)</label>
                                    <input type="text" class="form-control" name="week_ru"
                                        value="{{ old('week_ru') }}">
                                    @error('week_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hafta kun (EN)</label>
                                    <input type="text" class="form-control" name="week_en"
                                        value="{{ old('week_en') }}">
                                    @error('week_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Soat</label>
                                    <input type="text" class="form-control" name="time"
                                        value="{{ old('time') }}">
                                    @error('time')
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
