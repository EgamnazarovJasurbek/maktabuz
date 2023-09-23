@extends('layouts.admin')

@section('title')
    Update Connections
@endsection
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.connections.update',$connection->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>Bog'lanishni o'zgartirish</h4>
                            </div>
                            <div class="card-body">
                               
                               
                                <div class="form-group">
                                    <label>Mudir</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $connection->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label>Faks</label>
                                <input type="tel" class="form-control" name="faks"
                                    value="{{ $connection->faks }}">
                                @error('faks')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                                
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" name="instagram"
                                        value="{{ $connection->instagram }}">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Telegram</label>
                                    <input type="text" class="form-control" name="telegram"
                                        value="{{ $connection->telegram }}">
                                    @error('telegram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Telefon Raqam</label>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ $connection->phone }}">
                                    @error('phone')
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