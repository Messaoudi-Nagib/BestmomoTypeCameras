@extends('layouts.form')

@section('content')


    @slot('title')
        @lang('E-commerce best-momo')
    @endslot
    <div class="container-fluid">
        <div class="col-8">
        <h1>
            Bienvenue sur la partie e-commerce !
        </h1>
    </div>


    </div>

    <div class="row">
        <div class="col-6 mx-auto">
            <a href="{{ route('commerce.create') }}" >
                <button class="btn btn-outline-secondary">
                    Ajouter une vente
                </button>
            </a>

            <a href="{{ route('commerce.index') }}" >
                <button class="btn btn-outline-secondary">
                    Editer une vente
                </button>
            </a>

        </div>
    </div>
@endsection

@section('script')




@endsection
