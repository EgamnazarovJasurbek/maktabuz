
@extends('layouts.admin')
@section('title')
    Directors Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $director->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Ism (УЗ)</th> <td>{{ $director->name_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism (UZ)</th> <td>{{ $director->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism (RU)</th> <td>{{ $director->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism (EN)</th> <td>{{ $director->name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qabul (УЗ)</th> <td>{{ $director->reception_time_oz }}</td>
                                    </tr>
                                     <tr>
                                        <th>Qabul (UZ)</th> <td>{{ $director->reception_time_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qabul (RU)</th> <td>{{ $director->reception_time_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qabul (EN)</th> <td>{{ $director->reception_time_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Biografiya (УЗ)</th> <td>{{ $director->biography_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Biografiya (UZ)</th> <td>{{ $director->biography_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Biografiya (RU)</th> <td>{{ $director->biography_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>Biografiya (EN)</th> <td>{{ $director->biography_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Toifasi</th> <td>{{ $director->category }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telefon </th> <td>{{ $director->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th> <td>{{ $director->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $director->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $director->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/directors/images/{{ $director->image }}" width="100">

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
