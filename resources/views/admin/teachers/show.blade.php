
@extends('layouts.admin')
@section('title')
    Teachers Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $teacher->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Ism (УЗ)</th> <td>{{ $teacher->name_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism (UZ)</th> <td>{{ $teacher->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism (RU)</th> <td>{{ $teacher->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism (EN)</th> <td>{{ $teacher->name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dars vaqti (УЗ)</th> <td>{{ $teacher->class_time_oz }}</td>
                                    </tr>
                                     <tr>
                                        <th>Dars vaqti (UZ)</th> <td>{{ $teacher->class_time_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dars vaqti (RU)</th> <td>{{ $teacher->class_time_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dars vaqti (EN)</th> <td>{{ $teacher->class_time_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mutaxasislik (УЗ)</th> <td>{{ $teacher->specialist_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mutaxasislik (UZ)</th> <td>{{ $teacher->specialist_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mutaxasislik (RU)</th> <td>{{ $teacher->specialist_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>Mutaxasislik (EN)</th> <td>{{ $teacher->specialist_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Toifasi</th> <td>{{ $teacher->category }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telefon </th> <td>{{ $teacher->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th> <td>{{ $teacher->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $teacher->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $teacher->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/teachers/images/{{ $teacher->image }}" width="100">

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
