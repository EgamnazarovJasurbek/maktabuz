@extends('layouts.admin')

@section('title')
    Edit news
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>Yangiliklar O'zgartirish</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Sarlavha_1 (УЗ)</label>
                                    <input type="text" class="form-control" name="title_1_oz"
                                        value="{{ $news->title_1_oz }}">
                                    @error("title_1_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_1 (Uz)</label>
                                    <input type="text" class="form-control" name="title_1_uz"
                                    value="{{ $news->title_1_uz }}">
                                    @error('title_1_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_1 (Ru)</label>
                                    <input type="text" class="form-control" name="title_1_ru"
                                    value="{{ $news->title_1_ru }}">
                                    @error('title_1_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_1 (En)</label>
                                    <input type="text" class="form-control" name="title_1_en"
                                    value="{{ $news->title_1_en }}">
                                    @error('title_1_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (УЗ)</label>
                                    <input type="text" class="form-control" name="title_2_oz"
                                    value="{{ $news->title_2_oz }}">
                                    @error("title_2_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (Uz)</label>
                                    <input type="text" class="form-control" name="title_2_uz"
                                    value="{{ $news->title_2_uz }}">
                                    @error('title_2_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (Ru)</label>
                                    <input type="text" class="form-control" name="title_2_ru"
                                    value="{{ $news->title_2_ru }}">
                                    @error('title_2_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha_2 (En)</label>
                                    <input type="text" class="form-control" name="title_2_en"
                                    value="{{ $news->title_2_en }}">
                                    @error('title_2_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                                <div class="form-group">
                                    <label>Matn (УЗ)</label>
                                    <textarea type="text" class="form-control " name="body_oz">{{ $news->body_oz }}</textarea>
                                    @error('body_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Matn (UZ)</label>
                                    <textarea type="text" class="form-control " name="body_uz">{{ $news->body_oz }}</textarea>
                                    @error('body_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Matn (RU)</label>
                                    <textarea type="text" class="form-control " name="body_ru">{{ $news->body_oz }}</textarea>
                                    @error('body_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Matn (EN)</label>
                                    <textarea type="text" class="form-control ckeditor" name="body_en">{{ $news->body_oz }}</textarea>
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
                                    <img width="200px" class="mt-3" src="{{ asset('news/images/'. $news->image) }}" alt="">
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

