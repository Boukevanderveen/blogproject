@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Creëer rol</h1>
    </div>
</div>
<div class="row">
    <div class="col-12 card">
        <form method="post" name="projectroleform" action="/admin/roles/create">
            <input type="hidden"> 

            <div class="row mb-3  mt-4">
                <label for="name" class="col-md-4 col-form-label text-md-end">Naam:</label>
                <div class="col-md-5">
                    <input id="name" type="text" class="form-control" name="name" autofocus>
                </div>
            </div>

            <div class="row">
            <div class="col-7"></div>
            <div class="col-5">
                <a href="/admin/roles"><button type="button" class="btn btn-secondary mb-3">Ga terug</button></a>
                <button class="btn btn-primary mb-3">Bevestig</button>
            </div>
            </div>
            @csrf
        </form>
    </div>
</div>
@endsection