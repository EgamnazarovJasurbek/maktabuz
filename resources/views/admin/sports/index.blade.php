@extends('layouts.admin')
@section('title')
    Extra Lessons
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
                            <h3>Sport to'garaklari</h3>
                            <a href="{{ route('admin.sports.create') }}" class="btn btn-primary ml-auto">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Name</th>
                                            <th>O'qituvchi</th>
                                            <th>Sinf</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($sports as $sport)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $sport->name_uz }}</td>
                                                <td>{{ $sport->teacher_uz }}</td>
                                                <td>{{ $sport->class_uz }}</td>
                                                <td>
                                                    
                                                        <img alt="image" src="/sports/images/{{ $sport->image }}" width="50">

                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.sports.edit', $sport->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.sports.show', $sport->id) }}"
                                                            class="btn btn-warning">Show</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.sports.destroy', $sport->id) }}"
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
