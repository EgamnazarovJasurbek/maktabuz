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
                            <h3>Qo'shimcha darslar</h3>
                            <a href="{{ route('admin.lessons.create') }}" class="btn btn-primary ml-auto">Create</a>
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
                                        @foreach ($lessons as $lesson)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $lesson->name_uz }}</td>
                                                <td>{{ $lesson->teacher_uz }}</td>
                                                <td>{{ $lesson->class_uz }}</td>
                                                <td>
                                                    
                                                        <img alt="image" src="/lessons/images/{{ $lesson->image }}" width="50">

                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.lessons.edit', $lesson->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.lessons.show', $lesson->id) }}"
                                                            class="btn btn-warning">Show</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.lessons.destroy', $lesson->id) }}"
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
                                    {{ $lessons->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
