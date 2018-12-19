@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Gestion des types de cameras')
        @endslot


        <table class="table table-dark text-white">
            <tbody>
            @if($cameras->isEmpty())
                <p class="text-center">@lang("Vous n'avez aucune caméra pour le moment")</p>
            @else
                @foreach($cameras as $camera)
                    <tr>
                        <td>{{ $camera->name }}</td>
                        <td>
                            <a type="button" href="{{ route('camera.destroy', $camera->id) }}"
                               class="btn btn-danger btn-sm pull-right invisible" data-toggle="tooltip"
                               title="@lang("Supprimer le type de camera") {{ $camera->name }}"><i
                                    class="fas fa-trash fa-lg"></i></a>
                            <a type="button" href="{{ route('camera.edit', $camera->id) }}"
                               class="btn btn-warning btn-sm pull-right mr-2 invisible" data-toggle="tooltip"
                               title="@lang("Modifier l'album") {{ $camera->name }}"><i
                                    class="fas fa-edit fa-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    @endcomponent

@endsection

@section('script')

    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>

    @include('partials.script-delete', ['text' => __('Vraiment supprimer ce genre de camera ?'), 'return' => 'removeTr'])

@endsection
