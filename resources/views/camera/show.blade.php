@extends('layouts.form')

@section('content')


    @slot('title')
        @lang('Photos par type de camera :')
    @endslot

    <div class="card-columns">
        @foreach($images as $image)
            <div class="card @if($image->adult) border-danger @endif" id="image{{ $image->id }}">
                <a href="{{ url('images/' . $image->name) }}" class="image-link" data-link="{{ route('image.click', $image->id) }}">
                    <img class="card-img-top"
                         src="{{ url('thumbs/' . $image->name) }}"
                         alt="image">
                </a>
                @isset($image->description)
                    <div class="card-body">
                        <p class="card-text">{{ $image->description }}</p>
                    </div>
                @endisset
                <div class="card-footer text-muted">
                    <em>
                        <a href="{{ route('user', $image->user->id) }}" data-toggle="tooltip"
                           title="{{ __('Voir les photos de ') . $image->user->name }}">{{ $image->user->name }}</a>
                    </em>
                    <div class="pull-right">
                        <em>
                            (<span class="image-click">{{ $image->clicks }}</span> {{ trans_choice(__('vue|vues'), $image->clicks) }}) {{ $image->created_at->formatLocalized('%x') }}
                        </em>
                    </div>
                    <div class="star-rating" id="{{ $image->id }}">
                        <span class="count-number">({{ $image->users->count() }})</span>
                        <div id="{{ $image->id . '.5' }}" data-toggle="tooltip" title="5" @if($image->rate > 4) class="star-yellow" @endif>
                            <i class="fas fa-star"></i>
                        </div>
                        <div id="{{ $image->id . '.4' }}" data-toggle="tooltip" title="4" @if($image->rate > 3) class="star-yellow" @endif>
                            <i class="fas fa-star"></i>
                        </div>
                        <div id="{{ $image->id . '.3' }}" data-toggle="tooltip" title="3" @if($image->rate > 2) class="star-yellow" @endif>
                            <i class="fas fa-star"></i>
                        </div>
                        <div id="{{ $image->id . '.2' }}" data-toggle="tooltip" title="2" @if($image->rate > 1) class="star-yellow" @endif>
                            <i class="fas fa-star"></i>
                        </div>
                        <div id="{{ $image->id . '.1' }}" data-toggle="tooltip" title="1" @if($image->rate > 0) class="star-yellow" @endif>
                            <i class="fas fa-star"></i>
                        </div>



                        <span class="pull-right">
                                @adminOrOwner($image->user_id)
                                    <a class="toggleIcons"
                                       href="#">
                                    <i class="fa fa-cog"></i>
                                    </a>
                                    <span class="menuIcons" style="display: none">
                                        <a class="form-delete text-danger"
                                           href="{{ route('image.destroy', $image->id) }}"
                                           data-toggle="tooltip"
                                           title="@lang('Supprimer cette photo')">
                                           <i class="fa fa-trash"></i>
                                        </a>
                                        <a class="description-manage"
                                           href="{{ route('image.description', $image->id) }}"
                                           data-toggle="tooltip"
                                           title="@lang('Gérer la description')">
                                           <i class="fa fa-comment"></i>
                                        </a>
                                        <a class="albums-manage"
                                           href="{{ route('image.albums', $image->id) }}"
                                           data-toggle="tooltip"
                                           title="@lang('Gérer les albums')">
                                           <i class="fa fa-folder-open"></i>
                                        </a>
                                        <a class="category-edit"
                                           data-id="{{ $image->category_id }}"
                                           href="{{ route('image.update', $image->id) }}"
                                           data-toggle="tooltip"
                                           title="@lang('Changer de catégorie')">
                                           <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="adult-edit"
                                           href="{{ route('image.adult', $image->id) }}"
                                           data-toggle="tooltip"
                                           title="@lang('Changer de statut')">
                                           <i class="fa @if($image->adult) fa-graduation-cap @else fa-child @endif"></i>
                                        </a>
                                    </span>
                                <div class="type-camera">
                                <p>
                                    <span class="badge badge-pill badge-dark">{{$image->camera->name}}</span>
                                </p>
                                </div>
                                    <form action="{{ route('image.destroy', $image->id) }}" method="POST" class="hide">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endadminOrOwner
                            </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('script')

    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>

    @include('partials.script-delete', ['text' => __('Vraiment supprimer cette catégorie ?'), 'return' => 'removeTr'])

@endsection
