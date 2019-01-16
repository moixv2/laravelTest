@extends('template')

@section('contenu')
  {!! Form::open(['url'=>'users'])!!} <!-- Ouvre le formulaire et pointe vers url "users" -->
      {!! Form::label('nom', 'Entrer votre nom : ') !!}
      {!! Form::text('nom') !!}
      {!! Form::submit('Envoyer !') !!}
  {!! Form::close() !!} <!-- clos le formulaire -->
@endsection
