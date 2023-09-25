@extends('layouts.admin')
@section('title')
   Announcements
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
                            <h3>E'lonlar sahifasi</h3>
                            <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary ml-auto">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Sarlavha_1</th>
                                            <th>Sarlavha_2</th>
                                            <th>Matn</th>
                                            <th>Rasm</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($announcements as $announcement)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $announcement->title_1_uz }}</td>
                                                <td>{{ $announcement->title_2_uz }}</td>
                                                <td>{!! \Str::limit($announcement->body_uz,20) !!}</td>
                                                <td>
                                                    
                                                        <img alt="image" src="/elon/images/{{ $announcement->image }}" width="50">

                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.announcements.edit', $announcement->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.announcements.show', $announcement->id) }}"
                                                            class="btn btn-warning">Show</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.announcements.destroy', $announcement->id) }}"
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
                                    {{ $announcements->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
