
@extends('layouts.admin')
@section('title')
    Resources Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $resource->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Name (УЗ)</th> <td>{{ $resource->name_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (UZ)</th> <td>{{ $resource->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (RU)</th> <td>{{ $resource->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name (EN)</th> <td>{{ $resource->name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (УЗ)</th> <td>{{ $resource->body_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (UZ)</th> <td>{{ $resource->body_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body (RU)</th> <td>{{ $resource->body_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>Body (EN)</th> <td>{{ $resource->body_en }}</td>
                                    </tr>

                                    <tr>
                                        <th>Info (УЗ)</th> <td>{{ $resource->info_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Info (UZ)</th> <td>{{ $resource->info_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Info (RU)</th> <td>{{ $resource->info_oz }}/td>
                                    </tr>
                                    <tr>
                                        <th>Info (EN)</th> <td>{{ $resource->info_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Url</th> <td>{{ $resource->url }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Link</th>
                                    <td>
                                              
                                             <img alt="image" src="/resources/links/{{ $resource->image }}" width="100">

                                     </td>
                                    </tr> 
                                    <tr>
                                        <th>Created_at </th> <td>{{ $resource->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $resource->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                    <td>
                                              
                                             <img alt="image" src="/resources/images/{{ $resource->image }}" width="100">

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
