@extends('layouts.admin')

@section('title')
    Create Announcements
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.announcements.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>E'lon qo'shish</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>Sarlavha_1 (УЗ)</label>
                                    <input type="text" class="form-control" name="title_1_oz"
                                        value="{{ old("title_1_oz") }}">
                                    @error("title_1_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_1 (Uz)</label>
                                    <input type="text" class="form-control" name="title_1_uz"
                                        value="{{ old('title_1_uz') }}">
                                    @error('title_1_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_1 (Ru)</label>
                                    <input type="text" class="form-control" name="title_1_ru"
                                        value="{{ old('title_1_ru') }}">
                                    @error('title_1_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_1 (En)</label>
                                    <input type="text" class="form-control" name="title_1_en"
                                        value="{{ old('title_1_en') }}">
                                    @error('title_1_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (УЗ)</label>
                                    <input type="text" class="form-control" name="title_2_oz"
                                        value="{{ old("title_2_oz") }}">
                                    @error("title_2_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (Uz)</label>
                                    <input type="text" class="form-control" name="title_2_uz"
                                        value="{{ old('title_2_uz') }}">
                                    @error('title_2_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (Ru)</label>
                                    <input type="text" class="form-control" name="title_2_ru"
                                        value="{{ old('title_2_ru') }}">
                                    @error('title_2_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (En)</label>
                                    <input type="text" class="form-control" name="title_2_en"
                                        value="{{ old('title_2_en') }}">
                                    @error('title_2_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                                <div class="form-group">
                                    <label>Matn (УЗ)</label>
                                    <textarea type="text" class="form-control " name="body_oz">{{ old('body_oz') }}</textarea>
                                    @error('body_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Matn (UZ)</label>
                                    <textarea type="text" class="form-control " name="body_uz" >{{ old('body_uz') }}</textarea>
                                    @error('body_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Matn (RU)</label>
                                    <textarea type="text" class="form-control " name="body_ru" >{{ old('body_ru') }}</textarea>
                                    @error('body_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Matn (EN)</label>
                                    <textarea type="text" class="form-control ckeditor" name="body_en" >{{ old('body_en') }}</textarea>
                                    @error('body_en')
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
