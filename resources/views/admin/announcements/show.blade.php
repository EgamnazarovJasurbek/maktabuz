
@extends('layouts.admin')
@section('title')
     Show Announcements
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $announcement->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Title (УЗ)</th> <td>{{ $announcement->title_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title (UZ)</th> <td>{{ $announcement->title_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title (RU)</th> <td>{{ $announcement->title_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title (EN)</th> <td>{{ $announcement->title_en }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Body (УЗ)</th> <td>{{ $announcement->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (UZ)</th> <td>{{ $announcement->body_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (RU)</th> <td>{{ $announcement->body_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>Body (EN)</th> <td>{{ $announcement->body_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at </th> <td>{{ $announcement->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $announcement->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/elon/images/{{ $announcement->image }}" width="100">

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
