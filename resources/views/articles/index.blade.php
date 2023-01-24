@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('articles.create')}}"
                        class="btn btn-outline-success  box-shadow-3 mx-1 mb-1" >Add Article</a>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                        <span class="alert-inner--text"><strong>Success!</strong> {{Session::get('message')}}</span>
                    </div>
                    @endif
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-5p border-bottom-0">Id</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-15p border-bottom-0">Date</th>
                                    <th class="wd-15p border-bottom-0">Update</th>
                                    {{-- <th class="wd-15p border-bottom-0">Color</th> --}}
                                    <th class="wd-15p border-bottom-0">opreations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article )
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->created_at}}</td>
                                        <td>{{$article->updated_at}}</td>



                                        <td>
                                            <div class="btn-group" role="group"
                                                 aria-label="Basic example">
                                                  <a href="{{route('articles.edit',$article->id)}}"
                                                    class="btn btn-outline-primary  box-shadow-3 mx-1 mb-1" >Edit</a>
                                                <a href="{{route('articles.show',$article->slug)}}"
                                                    class="btn btn-outline-warning  box-shadow-3 mx-1 mb-1" >Show</a>
                                                    <form method="post" action="{{route('articles.destroy',$article->id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-outline-danger btn-min-width box-shadow-3 mx-1 mb-1" type="submit">Delete</button>
                                                    </form>                                         </div>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
