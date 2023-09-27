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
                                    <label>Sarlavha (УЗ)</label>
                                    <input type="text" class="form-control" name="title_oz"
                                        value="{{ $news->title_oz }}">
                                    @error("title_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (Uz)</label>
                                    <input type="text" class="form-control" name="title_uz"
                                    value="{{ $news->title_uz }}">
                                    @error('title_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (Ru)</label>
                                    <input type="text" class="form-control" name="title_ru"
                                    value="{{ $news->title_ru }}">
                                    @error('title_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (En)</label>
                                    <input type="text" class="form-control" name="title_en"
                                    value="{{ $news->title_en }}">
                                    @error('title_en')
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

