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
                                    <label>Sarlavha (УЗ)</label>
                                    <input type="text" class="form-control" name="title_oz"
                                        value="{{ old("title_oz") }}">
                                    @error("title_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (Uz)</label>
                                    <input type="text" class="form-control" name="title_uz"
                                        value="{{ old('title_uz') }}">
                                    @error('title_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (Ru)</label>
                                    <input type="text" class="form-control" name="title_ru"
                                        value="{{ old('title_ru') }}">
                                    @error('title_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (En)</label>
                                    <input type="text" class="form-control" name="title_en"
                                        value="{{ old('title_en') }}">
                                    @error('title_en')
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
