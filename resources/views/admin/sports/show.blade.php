
@extends('layouts.admin')
@section('title')
    Sport Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $sport->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Name (УЗ)</th> <td>{{ $sport->name_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (UZ)</th> <td>{{ $sport->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (RU)</th> <td>{{ $sport->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (EN)</th> <td>{{ $sport->name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sinf (УЗ)</th> <td>{{ $sport->class_uz }}</td>
                                    </tr>
                                     <tr>
                                        <th>Sinf  (UZ)</th> <td>{{ $sport->class_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sinf  (RU)</th> <td>{{ $sport->class_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sinf  (EN)</th> <td>{{ $sport->class_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (УЗ)</th> <td>{{ $sport->teacher_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (UZ)</th> <td>{{ $sport->teacher_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (RU)</th> <td>{{ $sport->teacher_oz }}/td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (EN)</th> <td>{{ $sport->teacher_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun</th> <td>{{ $sport->week_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun</th> <td>{{ $sport->week_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun</th> <td>{{ $sport->week_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun</th> <td>{{ $sport->week_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun </th> <td>{{ $sport->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th> <td>{{ $sport->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vaqt</th> <td>{{ $sport->time }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $sport->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $sport->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/sports/images/{{ $sport->image }}" width="100">

                                     </td>
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
