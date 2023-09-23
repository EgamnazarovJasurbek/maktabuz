
@extends('layouts.admin')
@section('title')
    News Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $news->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Title_1 (УЗ)</th> <td>{{ $news->title_1_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title_1 (UZ)</th> <td>{{ $news->title_1_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title_1 (RU)</th> <td>{{ $news->title_1_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title_1 (EN)</th> <td>{{ $news->title_1_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title_2 (УЗ)</th> <td>{{ $news->title_2_oz }}</td>
                                    </tr>
                                     <tr>
                                        <th>Title_2 (UZ)</th> <td>{{ $news->title_2_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title_2 (EN)</th> <td>{{ $news->title_2_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title_2 (RU)</th> <td>{{ $news->title_2_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (УЗ)</th> <td>{{ $news->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (UZ)</th> <td>{{ $news->body_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (RU)</th> <td>{{ $news->body_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>Body (EN)</th> <td>{{ $news->body_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $news->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $news->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/news/images/{{ $news->image }}" width="100">

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
