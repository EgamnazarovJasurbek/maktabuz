@extends('layouts.admin')

@section('title')
    Edit Teachers
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.teachers.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>O'qituvchi o'zgartirish</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>F.I.SH (УЗ)</label>
                                    <input type="text" class="form-control" name="name_oz"
                                        value="{{ $teacher->name_oz }}">
                                    @error("name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (Uz)</label>
                                    <input type="text" class="form-control" name="name_uz"
                                        value="{{ $teacher->name_uz }}">
                                    @error('name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (Ru)</label>
                                    <input type="text" class="form-control" name="name_ru"
                                        value="{{$teacher->name_ru }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (En)</label>
                                    <input type="text" class="form-control" name="name_en"
                                        value="{{ $teacher->name_en }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (УЗ)</label>
                                    <input type="text" class="form-control" name="class_time_oz"
                                        value="{{ $teacher->class_time_oz }}">
                                    @error("class_time_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (Uz)</label>
                                    <input type="text" class="form-control" name="class_time_uz"
                                        value="{{ $teacher->class_time_uz }}">
                                    @error('class_time_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (Ru)</label>
                                    <input type="text" class="form-control" name="class_time_ru"
                                        value="{{ $teacher->class_time_ru }}">
                                    @error('class_time_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Dars vaqti (En)</label>
                                    <input type="text" class="form-control" name="class_time_en"
                                        value="{{ $teacher->class_time_en }}">
                                    @error('class_time_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                              
                                <div class="form-group">
                                    <label>Mutaxasislik (УЗ)</label>
                                    <input type="text" class="form-control" name="specialist_oz"
                                        value="{{ $teacher->specialist_oz }}">
                                    @error('specialist_oz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mutaxasislik (UZ)</label>
                                    <input type="text" class="form-control" name="specialist_uz"
                                        value="{{ $teacher->specialist_uz }}">
                                    @error('specialist_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mutaxasislik (RU)</label>
                                    <input type="text" class="form-control" name="specialist_ru"
                                        value="{{ $teacher->specialist_ru }}">
                                    @error('specialist_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mutaxasislik (EN)</label>
                                    <input type="text" class="form-control" name="specialist_en"
                                        value="{{ $teacher->specialist_en }}">
                                    @error('specialist_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Toifasi</label>
                                    <input type="text" class="form-control" name="category"
                                        value="{{ $teacher->category }}">
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $teacher->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Telefon Raqam</label>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ $teacher->phone }}">
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
                                <img width="200px" class="mt-3" src="{{ asset('teachers/images/'. $teacher->image) }}" alt="">
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
