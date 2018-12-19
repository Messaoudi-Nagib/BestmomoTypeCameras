@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Types de caméras disponibles : ')
        @endslot


        <table class="table table-dark text-white">
            <tbody>
            @foreach($camera as $cam)
                <tr>
                    <td>{{ $cam->name }}</td>
                </tr>
            @endforeach
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

    @include('partials.script-delete', ['text' => __('Vraiment supprimer cette catégorie ?'), 'return' => 'removeTr'])

@endsection
