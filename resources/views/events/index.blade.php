@extends('layouts.app')
@section('content')

    <div class="container">

        <div id="agenda">

        </div>
    </div>

         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#evento">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="formCallender">
                             {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" id="title" class="form-control" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="start">Start</label>
                                <input type="date" name="start" id="start" class="form-control" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="end">End</label>
                                <input type="date" name="end" id="end" class="form-control" aria-describedby="helpId">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btnGuardar" >Guardar</button>
                        <button type="button" class="btn btn-success" id="btnEdit">Editar</button>
                        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

@endsection
