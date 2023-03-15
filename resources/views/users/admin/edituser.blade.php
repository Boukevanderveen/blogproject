@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Bewerk gebruiker</h1>
    </div>
</div>
<div class="row">
    <div class="col-12 card">
        @foreach($user as $user)
        <form method="post" name="userform" action="/admin/users/update">
            <input value="{{$user->id}}" name="id" type="hidden"> 

            <div class="row mb-3  mt-4">
                <label for="name" class="col-md-4 col-form-label text-md-end">Naam:</label>
                <div class="col-md-5">
                    <input value="{{$user->name}}" id="name" type="text" class="form-control" name="name" required autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">E-mail:</label>
                <div class="col-md-5">
                    <input value="{{$user->email}}" id="email" type="text" class="form-control" name="email" required autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Wachtwoord:</label>
                <div class="col-md-5">
                    <input id="password" type="password" class="form-control" name="password" required autofocus>
                </div>
            </div>
            @csrf
        </form>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-2">
            @if($user->isAdmin)
            <a href="removeadmin"><button class="btn btn-danger mb-3">Verwijder admin</button></a>
            @else
            <a href="makeadmin"><button class="btn btn-danger mb-3">Maak admin</button></a>
            @endif
            </div>

            <div class="col-4">
                <button type="submit" form="myform" class="btn btn-primary mb-3">Submit</button>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection