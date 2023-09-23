
@extends('layouts.admin')
@section('title')
    Lesson Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $lesson->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Name (УЗ)</th> <td>{{ $lesson->name_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (UZ)</th> <td>{{ $lesson->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (RU)</th> <td>{{ $lesson->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (EN)</th> <td>{{ $lesson->name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sinf (УЗ)</th> <td>{{ $lesson->class_oz }}</td>
                                    </tr>
                                     <tr>
                                        <th>Sinf  (UZ)</th> <td>{{ $lesson->class_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sinf  (RU)</th> <td>{{ $lesson->class_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sinf  (EN)</th> <td>{{ $lesson->class_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (УЗ)</th> <td>{{ $lesson->teacher_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (UZ)</th> <td>{{ $lesson->teacher_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (RU)</th> <td>{{ $lesson->teacher_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>O'qituvchi (EN)</th> <td>{{ $lesson->teacher_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun (УЗ)</th> <td>{{ $lesson->week_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun (UZ)</th> <td>{{ $lesson->week_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun (RU)</th> <td>{{ $lesson->week_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hafta kun(EN)</th> <td>{{ $lesson->week_en }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Phone</th> <td>{{ $lesson->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vaqt</th> <td>{{ $lesson->time }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $lesson->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $lesson->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/lessons/images/{{ $lesson->image }}" width="100">

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
