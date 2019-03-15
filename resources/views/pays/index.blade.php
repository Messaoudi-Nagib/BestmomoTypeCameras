@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Gestion des types de cameras')
        @endslot


        <table class="table table-dark text-white">
            <tbody>
            @if($pays->isEmpty())
                <p class="text-center">@lang("Aucun pays")</p>
            @else
                @foreach($pays as $unpays)
                    <tr>
                        <td>{{ $unpays->name }}</td>
                        <td>
                            <a type="button" href="{{ route('pays.destroy', $unpays->id) }}"
                               class="btn btn-danger btn-sm pull-right invisible" data-toggle="tooltip"
                               title="@lang("Supprimer le pays") {{ $unpays->name }}"><i
                                    class="fas fa-trash fa-lg"></i></a>
                            <a type="button" href="{{ route('camera.edit', $unpays->id) }}"
                               class="btn btn-warning btn-sm pull-right mr-2 invisible" data-toggle="tooltip"
                               title="@lang("Modifier") {{ $unpays->name }}"><i
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
