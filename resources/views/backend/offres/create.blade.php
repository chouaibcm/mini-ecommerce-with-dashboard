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
                            <li class="breadcrumb-item active">Les Offres</li>
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

                    <form action="{{ route('offres.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="form-group">
                            <label>Les categoriés</label>
                            <select name="category_id" class="form-control">
                                <option value="">Tous les categoriés</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Le nom d'offre</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Prix</label>
                            <input type="number" name="price" step="0.01" class="form-control"
                                value="{{ old('price') }}">
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
