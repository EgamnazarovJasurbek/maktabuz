@extends('layouts.admin')
@section('title')
    Gallery
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
                            <h3>Maktab rasmlar</h3>
                            <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary ml-auto">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Rasm</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    
                                                    <img alt="image" src="/galleries/images/{{ $gallery->image }}" width="80">

                                                </td>
                                                <td>{{ $gallery->created_at }}</td>
                                                <td>{{ $gallery->updated_at }}</td>
                                                
                                               
                                                <td>
                                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        {{-- <a href="{{ route('admin.galleries.show', $gallery->id) }}"
                                                            class="btn btn-warning">Show</a> --}}
                                                    <form style="display: inline"
                                                        action="{{ route('admin.galleries.destroy', $gallery->id) }}"
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
