@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Registro de Asistencias</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! url('attendances/arrival_record/create') !!}">Nuevo Registro de llegada</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('attendances.arrival_record.table')
            </div>
        </div>
    </div>
@endsection

