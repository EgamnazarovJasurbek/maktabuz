
@extends('layouts.admin')
@section('title')
    Tasks Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $task->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Body (УЗ)</th> <td>{{ $task->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (UZ)</th> <td>{{ $task->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (RU)</th> <td>{{ $task->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (EN)</th> <td>{{ $task->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $task->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $task->updated_at }}</td>
                                    </tr>
                                   
                                    
                                   
                                   
                                   
                                   
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
