@extends('layouts.admin')

@section('title')
    Create Requisites
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.requisites.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Rekvizitlar qo'shish</h4>
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
                                
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (УЗ)</label>
                                    <input type="text" class="form-control" name="recipient_oz"
                                        value="{{ old("recipient_oz") }}">
                                    @error("recipient_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (Uz)</label>
                                    <input type="text" class="form-control" name="recipient_uz"
                                        value="{{ old('recipient_uz') }}">
                                    @error('recipient_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (Ru)</label>
                                    <input type="text" class="form-control" name="recipient_ru"
                                        value="{{ old('recipient_ru') }}">
                                    @error('recipient_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qabul Qiluvchi (En)</label>
                                    <input type="text" class="form-control" name="recipient_en"
                                        value="{{ old('recipient_en') }}">
                                    @error('recipient_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Bank nomi (УЗ)</label>
                                    <input type="text" class="form-control" name="bank_name_oz"
                                        value="{{ old("bank_name_oz") }}">
                                    @error("bank_name_oz")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bank nomi (Uz)</label>
                                    <input type="text" class="form-control" name="bank_name_uz"
                                        value="{{ old('bank_name_uz') }}">
                                    @error('bank_name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bank nomi (Ru)</label>
                                    <input type="text" class="form-control" name="bank_name_ru"
                                        value="{{ old('bank_name_ru') }}">
                                    @error('bank_name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bank nomi (En)</label>
                                    <input type="text" class="form-control" name="bank_name_en"
                                        value="{{ old('bank_name_en') }}">
                                    @error('bank_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>INN</label>
                                    <input type="text" class="form-control" name="tin"
                                        value="{{ old("tin") }}">
                                    @error("tin")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>KPP</label>
                                    <input type="text" class="form-control" name="checkpoint"
                                        value="{{ old('checkpoint') }}">
                                    @error('checkpoint')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>BIK</label>
                                    <input type="text" class="form-control" name="bic"
                                        value="{{ old('bic') }}">
                                    @error('bic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Account </label>
                                    <input type="text" class="form-control" name="account"
                                        value="{{ old('account') }}">
                                    @error('account')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Add Product DESC --}}
                                
                               
                                
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





