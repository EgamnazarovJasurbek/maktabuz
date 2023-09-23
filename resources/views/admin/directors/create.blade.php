@extends('layouts.admin')

@section('title')
    Create Director
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.directors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Rahbariyat qo'shish</h4>
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
                                    <label>Qabul vaqti (УЗ)</label>
                                    <input type="text" class="form-control" name="reception_time_oz"
                                        value="{{ old("reception_time_oz") }}">
                                    @error("reception_time_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (Uz)</label>
                                    <input type="text" class="form-control" name="reception_time_uz"
                                        value="{{ old('reception_time_uz') }}">
                                    @error('reception_time_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (Ru)</label>
                                    <input type="text" class="form-control" name="reception_time_ru"
                                        value="{{ old('reception_time_ru') }}">
                                    @error('reception_time_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul vaqti (En)</label>
                                    <input type="text" class="form-control" name="reception_time_en"
                                        value="{{ old('reception_time_en') }}">
                                    @error('reception_time_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                                <div class="form-group">
                                    <label>Biografiya (УЗ)</label>
                                    <textarea type="text" class="form-control " name="biography_oz">{{ old('biography_oz') }}</textarea>
                                    @error('biography_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Biografiya (UZ)</label>
                                    <textarea type="text" class="form-control " name="biography_uz">{{ old('biography_uz') }}</textarea>
                                    @error('biography_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Biografiya (RU)</label>
                                    <textarea type="text" class="form-control " name="biography_ru">{{ old('biography_ru') }}</textarea>
                                    @error('biography_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Biografiya (EN)</label>
                                    <textarea type="text" class="form-control" name="biography_en">{{ old('biography_en') }}</textarea>
                                    @error('biography_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Toifasi</label>
                                    <input type="text" class="form-control" name="category"
                                        value="{{ old('category') }}">
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
