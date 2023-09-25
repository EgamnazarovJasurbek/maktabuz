@extends('layouts.admin')
@section('title')
    Requisites
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
                            <h3>Rekvizitlar</h3>
                            <a href="{{ route('admin.requisites.create') }}" class="btn btn-primary ml-auto">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Title</th>
                                            <th>Qabul Qiluvchi</th>
                                            <th>Bank Nomi</th>
                                            <th>INN</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($requisites as $requisite)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $requisite->title_uz }}</td>
                                                <td>{{ $requisite->recipient_oz }}</td>
                                                <td>{{ $requisite->bank_name_uz }}</td>
                                                <td>{{ $requisite->tin }}</td>
                                               
                                                <td>
                                                    <a href="{{ route('admin.requisites.edit', $requisite->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.requisites.show', $requisite->id) }}"
                                                            class="btn btn-warning">Show</a>
                                                    <form style="display: inline"
                                                        action="{{ route('admin.requisites.destroy', $requisite->id) }}"
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
                                    {{ $requisites->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
