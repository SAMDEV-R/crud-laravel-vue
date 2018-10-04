@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="pb-2 mt-4 mb-2 border-bottom">CRUD Laravel y VueJs</h1>
        </div>
    </div>
    <br><br>
    <div  id="crud" class="row">    
        <div class="col-md-7">
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#create">
            Nueva Tarea
            </a>
            
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tarea</th>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="keep in keeps">
                        <td width="10px">@{{ keep.id }}</td>
                        <td>@{{ keep.keep }}</td>
                        <td width="10px"><a href="#" class="btn btn-warning btn-sm">Editar</a></td>
                        <td width="10px"><a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)" >Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
            @include('create')
        </div>
        <div class="col-md-5">
            <pre>
                @{{ $data }}        
            </pre>
        </div>
        
    </div>


@endsection