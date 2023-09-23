@extends('layouts.admin')

@section('title')
    Update Requisites
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.requisites.update',$requisite->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>Qo'shimcha dars qo'shish</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Sarlavha (УЗ)</label>
                                    <input type="text" class="form-control" name="title_oz"
                                        value="{{ $requisite->title_oz }}">
                                    @error("title_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (Uz)</label>
                                    <input type="text" class="form-control" name="title_uz"
                                        value="{{ $requisite->title_uz }}">
                                    @error('title_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (Ru)</label>
                                    <input type="text" class="form-control" name="title_ru"
                                        value="{{ $requisite->title_ru }}">
                                    @error('title_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha (En)</label>
                                    <input type="text" class="form-control" name="title_en"
                                        value="{{ $requisite->title_en }}">
                                    @error('title_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (УЗ)</label>
                                    <input type="text" class="form-control" name="recipient_oz"
                                        value="{{ $requisite->recipient_oz }}">
                                    @error("recipient_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (Uz)</label>
                                    <input type="text" class="form-control" name="recipient_uz"
                                        value="{{ $requisite->recipient_uz }}">
                                    @error('recipient_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (Ru)</label>
                                    <input type="text" class="form-control" name="recipient_ru"
                                        value="{{ $requisite->recipient_ru }}">
                                    @error('recipient_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (En)</label>
                                    <input type="text" class="form-control" name="recipient_en"
                                        value="{{ $requisite->recipient_en }}">
                                    @error('recipient_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Bank nomi (УЗ)</label>
                                    <input type="text" class="form-control" name="bank_name_oz"
                                        value="{{ $requisite->bank_name_oz }}">
                                    @error("bank_name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bank nomi (Uz)</label>
                                    <input type="text" class="form-control" name="bank_name_uz"
                                        value="{{ $requisite->bank_name_uz }}">
                                    @error('bank_name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bank nomi (Ru)</label>
                                    <input type="text" class="form-control" name="bank_name_ru"
                                        value="{{ $requisite->bank_name_ru }}">
                                    @error('bank_name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bank nomi (En)</label>
                                    <input type="text" class="form-control" name="bank_name_en"
                                        value="{{ $requisite->bank_name_en }}">
                                    @error('bank_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>INN</label>
                                    <input type="number" class="form-control" name="tin"
                                        value="{{ $requisite->tin }}">
                                    @error("tin")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>KPP</label>
                                    <input type="number" class="form-control" name="checkpoint"
                                        value="{{ $requisite->checkpoint }}">
                                    @error('checkpoint')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>BIK</label>
                                    <input type="number" class="form-control" name="bic"
                                        value="{{ $requisite->bic }}">
                                    @error('bic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Account </label>
                                    <input type="number" class="form-control" name="account"
                                        value="{{ $requisite->account }}">
                                    @error('account')
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





