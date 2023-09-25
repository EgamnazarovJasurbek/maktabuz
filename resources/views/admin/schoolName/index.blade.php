@extends('layouts.admin')
@section('title')
   Maktab Raqami
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            @if(session('success')) 
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>×</span>
                  </button>
                  {{ session('success') }}
                </div>
              </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Maktabning raqami</h3>
                            <a href="{{ route('admin.schoolName.create') }}" class="btn btn-primary ml-auto">Qo'shish</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Maktab nomi</th>
                                            <th>Viloyat (tuman)</th>
                                            <th>Created_at</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($schoolName as $name)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $name->name_uz }}</td>
                                                <td>{{ $name->city_uz }}</td>
                                                <td>{{ $name->created_at }}</td>
                                              
                                                <td>
                                                    <a href="{{ route('admin.schoolName.edit', $name->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.schoolName.destroy', $name->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are You Delete?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Pagination --}}
    
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {{-- {{ $categories->links() }} --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
