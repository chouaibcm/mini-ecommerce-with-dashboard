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
                            <li class="breadcrumb-item active">Les Cates</li>
                        </ol>
                    </nav>
                </div>
            </div>


        <section class="content ">

            <div class="card ">
                
                <div class="card-header bg-info">
                    <h4>Ajouter</h4>
                </div>
                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('cards.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="form-group">
                            <label>Les Offres</label>
                            <select name="offre_id" class="form-control">
                                <option value="">Tous les offres</option>
                                @foreach ($offres as $offre)
                                    <option value="{{ $offre->id }}"
                                        {{ old('offre_id') == $offre->id ? 'selected' : '' }}>
                                        {{ $offre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Code de carte</label>
                            <textarea name="code" id="code" cols="5" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div>
  <!-- end of box -->

        </section><!-- end of content -->


    </div>
        @endsection
