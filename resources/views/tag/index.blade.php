@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-btn fa-list"></i>Lista de Tags
                </div>

                <div class="panel-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                        <i class="fa fa-btn fa-plus"></i>Nuevo
                    </button>
                    <hr/>

                    <div class="content-ajax">
                        @include('tag.partial.table')
                    </div>
                </div>

                <div class="panel-footer text-center">

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
