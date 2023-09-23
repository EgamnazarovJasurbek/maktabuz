@extends('layouts.admin')

@section('title')
    Edit Director
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.directors.update',$director->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>Rahbariyatni o'zgartirish</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>F.I.SH (УЗ)</label>
                                    <input type="text" class="form-control" name="name_oz"
                                        value="{{ $director->name_oz }}">
                                    @error("name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (Uz)</label>
                                    <input type="text" class="form-control" name="name_uz"
                                        value="{{ $director->name_uz }}">
                                    @error('name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (Ru)</label>
                                    <input type="text" class="form-control" name="name_ru"
                                        value="{{ $director->name_ru }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>F.I.SH (En)</label>
                                    <input type="text" class="form-control" name="name_en"
                                        value="{{ $director->name_en }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (УЗ)</label>
                                    <input type="text" class="form-control" name="reception_time_oz"
                                        value="{{ $director->reception_time_oz }}">
                                    @error("reception_time_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (Uz)</label>
                                    <input type="text" class="form-control" name="reception_time_uz"
                                        value="{{ $director->reception_time_uz }}">
                                    @error('reception_time_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (Ru)</label>
                                    <input type="text" class="form-control" name="reception_time_ru"
                                        value="{{ $director->reception_time_ru }}">
                                    @error('reception_time_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (En)</label>
                                    <input type="text" class="form-control" name="reception_time_en"
                                        value="{{ $director->reception_time_en }}">
                                    @error('reception_time_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                                <div class="form-group">
                                    <label>Biografiya (УЗ)</label>
                                    <textarea type="text" class="form-control " name="biography_oz">{{ $director->biography_oz }}</textarea>
                                    @error('biography_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Biografiya (UZ)</label>
                                    <textarea type="text" class="form-control " name="biography_uz">{{ $director->biography_uz }}</textarea>
                                    @error('biography_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Biografiya (RU)</label>
                                    <textarea type="text" class="form-control " name="biography_ru">{{ $director->biography_ru }}</textarea>
                                    @error('biography_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Biografiya (EN)</label>
                                    <textarea type="text" class="form-control" name="biography_en">{{ $director->biography_en }}</textarea>
                                    @error('biography_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Toifasi</label>
                                    <input type="text" class="form-control" name="category"
                                        value="{{ $director->category }}">
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $director->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Telefon Raqam</label>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ $director->phone }}">
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
                                <img width="200px" class="mt-3" src="{{ asset('directors/images/'. $director->image) }}" alt="">
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
