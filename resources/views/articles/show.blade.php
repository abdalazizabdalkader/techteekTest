@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 ">
            <div class="card">
                <div class="card-header">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                        <span class="alert-inner--text"><strong>Success!</strong> {{Session::get('message')}}</span>
                    </div>
                @endif
                    <h3>{{ $article->title }}</h3>
                </div>
                <div class="card-body">

                        <div>
                            {!! $article->content !!}
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
