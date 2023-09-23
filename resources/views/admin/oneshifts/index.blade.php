@extends('layouts.admin')
@section('title')
    Shifts
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
                            <h3>1-Smena Dars Jadvali</h3>
                            <a href="{{ route('admin.oneshifts.create') }}" class="btn btn-primary ml-auto">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Name_O'z</th>
                                            <th>Name Uz</th>
                                            <th>Name_Ru</th>
                                            <th>Name_En</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($oneshifts as $oneshift)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $oneshift->name_oz }}</td>
                                                <td>{{ $oneshift->name_uz }}</td>
                                                <td>{{ $oneshift->name_ru }}</td>
                                                <td>{{ $oneshift->name_en }}</td>
                                                <td>
                                                    <a href="{{ route('admin.oneshifts.edit', $oneshift->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        {{-- <a href="{{ route('admin.oneshifts.show', $oneshift->id) }}"
                                                            class="btn btn-warning">Show</a> --}}
                                                    <form style="display: inline"
                                                        action="{{ route('admin.oneshifts.destroy', $oneshift->id) }}"
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
