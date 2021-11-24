@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header ">
            <div class="row ">
                <div class="col-md-6 col-sm-12 mt-4">

                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-dashboard"></i> Accueil
                                </a></li>
                            <li class="breadcrumb-item active"> Les Cartes</li>
                        </ol>
                    </nav>
                </div>
            </div>


            <section class="content pb-5">

                <div class="card pb-5 mb-5">
                    <div class="card-header bg-info">
                        <h4>Les Cartes</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('cards.index') }}" method="get">
                                <div class="row mt-4">
                                    <div class="col-md-5 col-sm-12 mb-20 pd-20">
                                        <input type="text" name="search" class="form-control search-input"
                                            placeholder="Rechercher" value="{{ request()->search }}">
                                    </div>
                                    <div class="col-md-5 col-sm-12 mb-20 pd-20">
                                        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i>Chercher</button>
                                        <a href="{{ route('cards.create') }}" class="btn btn-info"><i
                                                class="fa fa-plus"></i>Ajouter</a>
    
                                    </div>
                                </div>
                            </form>
                            @if ($cards->count() > 0)
                                <table class="data-table-nosort table nowrap mt-2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="table-plus">Code</th>
                                            <th>offre de carte</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cards as $index => $card)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $card->code }}</td>
                                            <td>{{ $card->offre->name }}</td>
                                            <td>

                                                <a href="{{ route('cards.edit', $card->id) }}"
                                                    class="btn btn-info btn-sm"><i class="icon-copy dw dw-edit2"></i>
                                                    Modifier</a>

                                                <form action="{{ route('cards.destroy', $card->id) }}" method="post"
                                                    style="display: inline-block">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger delete btn-sm"><i
                                                            class="icon-copy dw dw-delete-3"></i> Supprimer</button>
                                                </form><!-- end of form -->

                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $cards->appends(request()->query())->links() }}
                            @else
    
                                <h2>Aucune donnée disponible</h2>
    
                            @endif
    
    
                        </div>
                    </div>
                    
                </div>
                <!-- end of box -->

            </section><!-- end of content -->


        </div>
    @endsection
