@extends('layouts.admin')
@section('title')
    Director
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
                            <h3>Rahbariyat</h3>
                            <a href="{{ route('admin.directors.create') }}" class="btn btn-primary ml-auto">Create</a>
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
                                            <th>Biografiya</th>
                                            <th>Rasm</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($directors as $director)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $director->name_uz }}</td>
                                                <td>{{ $director->phone }}</td>
                                                <td>{!! \Str::limit($director->biography_uz,20) !!}</td>
                                                <td>
                                                    
                                                        <img alt="image" src="/directors/images/{{ $director->image }}" width="50">

                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.directors.edit', $director->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.directors.show', $director->id) }}"
                                                            class="btn btn-warning">Show</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.directors.destroy', $director->id) }}"
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
                                    {{ $directors->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
