@extends('layouts.admin')

@section('title')
    Create Tasks
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.tasks.update',$task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>Vazifalar O'zgartirish</h4>
                            </div>
                            <div class="card-body">
                               
                               
                                {{-- Add Product DESC --}}
                                <div class="form-group">
                                    <label>Vazifalar (УЗ)</label>
                                    <textarea type="text" class="form-control " name="body_oz">{{ $task->body_oz }}</textarea>
                                    @error('body_oz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Vazifalar (UZ)</label>
                                    <textarea type="text" class="form-control " name="body_uz">{{ $task->body_uz }}</textarea>
                                    @error('body_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Vazifalar (RU)</label>
                                    <textarea type="text" class="form-control " name="body_ru">{{ $task->body_ru }}</textarea>
                                    @error('body_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
            
                                </div>
                                <div class="form-group">
                                    <label>Vazifalar (EN)</label>
                                    <textarea type="text" class="form-control" name="body_en">{{ $task->body_en }}</textarea>
                                    @error('body_en')
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
