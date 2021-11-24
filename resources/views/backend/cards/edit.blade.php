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
                            <li class="breadcrumb-item active">Les Cartes</li>
                        </ol>
                    </nav>
                </div>
            </div>


        <section class="content ">

            <div class="card ">
                <div class="card-header bg-info">
                    <h4>Modifier</h4>
                </div>
                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('cards.update', $card->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label>Les Offres</label>
                            <select name="offre_id" class="form-control" disabled>
                                <option value="">Tous les offres</option>
                                @foreach ($offres as $offre)
                                    <option value="{{ $offre->id }}"
                                        {{ $card->offre_id == $offre->id ? 'selected' : '' }}>
                                        {{ $offre->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Code de carte</label>
                            <input type="number" name="code" class="form-control"
                                value="{{ $card->code }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Modifier</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div>
  <!-- end of box -->

        </section><!-- end of content -->


    </div>
        @endsection
