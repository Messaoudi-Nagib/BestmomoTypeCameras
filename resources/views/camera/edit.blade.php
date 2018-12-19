@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Modifier un type de caméra')
        @endslot


        <form method="POST" action="{{ route('camera.update', $camera->id) }}">
            @csrf
            @method('PUT')

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $camera->name,
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent

@endsection
