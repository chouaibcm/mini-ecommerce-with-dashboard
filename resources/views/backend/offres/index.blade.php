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
                            <li class="breadcrumb-item active"> Les Offres</li>
                        </ol>
                    </nav>
                </div>
            </div>


            <section class="content pb-5">

                <div class="card pb-5 mb-5">
                    <div class="card-header bg-info">
                        <h4>Les Offres</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('offres.index') }}" method="get">
                                <div class="row mt-4">
                                    <div class="col-md-5 col-sm-12 mb-20 pd-20">
                                        <input type="text" name="search" class="form-control search-input"
                                            placeholder="Rechercher" value="{{ request()->search }}">
                                    </div>
                                    <div class="col-md-5 col-sm-12 mb-20 pd-20">
                                        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i>Chercher</button>
                                        <a href="{{ route('offres.create') }}" class="btn btn-info"><i
                                                class="fa fa-plus"></i>Ajouter</a>
    
                                    </div>
                                </div>
                            </form>
                            @if ($offres->count() > 0)
                                <table class="data-table-nosort table nowrap mt-2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="table-plus">Le nom complet</th>
                                            <th>Prix</th>
                                            <th>categories</th>
                                            <th>stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offres as $index => $offre)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $offre->name }}</td>
                                                <td>{{ $offre->price }}</td>
                                                <td>{{ $offre->category->name }}</td>
                                                <td>{{ $offre->stock }}</td>
                                                <td>
    
                                                    <a href="{{ route('offres.edit', $offre->id) }}"
                                                        class="btn btn-info btn-sm"><i class="icon-copy dw dw-edit2"></i>
                                                        Modifier</a>
    
                                                    <form action="{{ route('offres.destroy', $offre->id) }}" method="post"
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
                                {{ $offres->appends(request()->query())->links() }}
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
