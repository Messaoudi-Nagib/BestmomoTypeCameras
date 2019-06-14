
@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter une enchere')
        @endslot
        <form method="POST" action="{{ route('enchere.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent
@endsection
