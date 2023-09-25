@extends('layouts.admin')
@section('title')
    Teachers
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
                            <h3>O'qituvchilar</h3>
                            <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary ml-auto">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>F.I.Sh</th>
                                            <th>Telefon</th>
                                            <th>Email</th>
                                            <th>Rasm</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $teacher->name_uz }}</td>
                                                <td>{{ $teacher->phone }}</td>
                                                <td>{{ $teacher->email }}</td>
                                                <td>
                                                    
                                                        <img alt="image" src="/teachers/images/{{ $teacher->image }}" width="50">

                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.teachers.edit', $teacher->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.teachers.show', $teacher->id) }}"
                                                            class="btn btn-warning">Show</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.teachers.destroy', $teacher->id) }}"
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
                                    {{ $teachers->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
