
@extends('layouts.admin')
@section('title')
    Requisites Show
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Batafsil ko'rish:  Id -> {{ $requisite->id }}</h4>
                            <div class="card-header-form">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
                    
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tr>
                                        <th>Title (УЗ)</th> <td>{{ $requisite->title_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title (UZ)</th> <td>{{ $requisite->title_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title (RU)</th> <td>{{ $requisite->title_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title (EN)</th> <td>{{ $requisite->title_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qabul Qiluvchi (УЗ)</th> <td>{{ $requisite->recipient_oz }}</td>
                                    </tr>
                                     <tr>
                                        <th>Qabul Qiluvchi  (UZ)</th> <td>{{ $requisite->recipient_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qabul Qiluvchi  (RU)</th> <td>{{ $requisite->recipient_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qabul Qiluvchi  (EN)</th> <td>{{ $requisite->recipient_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank nomi (УЗ)</th> <td>{{ $requisite->bank_name_oz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank nomi (UZ)</th> <td>{{ $requisite->bank_name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank nomi (RU)</th> <td>{{ $requisite->bank_name_ru }}/td>
                                    </tr>
                                    <tr>
                                        <th>Bank nomi (EN)</th> <td>{{ $requisite->bank_name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th>INN</th> <td>{{ $requisite->tin }}</td>
                                    </tr>
                                    <tr>
                                        <th>KPP</th> <td>{{ $requisite->checkpoint }}</td>
                                    </tr>
                                    <tr>
                                        <th>BIK</th> <td>{{ $requisite->bic }}</td>
                                    </tr>
                                    <tr>
                                        <th>Account</th> <td>{{ $requisite->account }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Created_at </th> <td>{{ $requisite->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th> <td>{{ $requisite->updated_at }}</td>
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
