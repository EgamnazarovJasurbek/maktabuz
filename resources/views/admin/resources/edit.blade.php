@extends('layouts.admin')

@section('title')
    Update Resources
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.resources.update',$resource->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>Resurslar O'zgartirish</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>Name (УЗ)</label>
                                    <input type="text" class="form-control" name="name_oz"
                                        value="{{ $resource->name_oz }}">
                                    @error("name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (Uz)</label>
                                    <input type="text" class="form-control" name="name_uz"
                                        value="{{ $resource->name_uz }}">
                                    @error('name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (Ru)</label>
                                    <input type="text" class="form-control" name="name_ru"
                                        value="{{ $resource->name_ru }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (En)</label>
                                    <input type="text" class="form-control" name="name_en"
                                        value="{{ $resource->name_en }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qisqacha (УЗ)</label>
                                    <textarea type="text" class="form-control " name="body_oz">{{ $resource->body_oz }}</textarea>
                                    @error('body_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qisqacha (UZ)</label>
                                    <textarea type="text" class="form-control " name="body_uz">{{ $resource->body_uz }}</textarea>
                                    @error('body_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qisqacha (RU)</label>
                                    <textarea type="text" class="form-control " name="body_ru">{{ $resource->body_ru }}</textarea>
                                    @error('body_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Qisqacha (EN)</label>
                                    <textarea type="text" class="form-control" name="body_en">{{ $resource->body_en }}</textarea>
                                    @error('body_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qo'shimcha malumot (УЗ)</label>
                                    <textarea type="text" class="form-control " name="info_oz">{{ $resource->info_oz }}</textarea>
                                    @error('info_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qo'shimcha malumot (UZ)</label>
                                    <textarea type="text" class="form-control " name="info_uz">{{ $resource->info_uz }}</textarea>
                                    @error('info_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qo'shimcha malumot (RU)</label>
                                    <textarea type="text" class="form-control " name="info_ru">{{ $resource->info_ru }}</textarea>
                                    @error('info_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Qo'shimcha malumot (EN)</label>
                                    <textarea type="text" class="form-control" name="info_en">{{ $resource->info_en }}</textarea>
                                    @error('info_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Veb-sayt</label>
                                    <input type="text" class="form-control" name="url"
                                        value="{{ $resource->url }}">
                                    @error('url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Saytga havola</label>
                                    <input type="file" class="form-control" name="link">
                                    @error('link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <img width="200px" class="mt-3" src="{{ asset('resources/links/'. $resource->link) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label>Rasm </label>
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <img width="200px" class="mt-3" src="{{ asset('resources/images/'. $resource->image) }}" alt="">
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
