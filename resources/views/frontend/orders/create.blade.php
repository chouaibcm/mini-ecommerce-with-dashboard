@extends('layouts.blog3')
<header class="header text-center text-white" style="background-color: #b9a0c9;">
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">

                <h1 class="display-4">أحصل على طلبك الان</h1>

            </div>
        </div>

    </div>
</header><!-- /.header -->
@section('content')
    <div class="site-section" id="home-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6">

                    <div class="card ">

                        <div class="card-header">

                            <h3 class="card-title" style="margin-bottom: 10px font-weight: bold;">Catégorie </h3>

                        </div><!-- end of box header -->

                        <div class="card-body">

                                        <label style="font-weight: bold;">{{ $category->name }}</label>
                                                @if ($category->offres->count() > 0)

                                                    <table class="data-table-nosort table nowrap">
                                                        <tr>
                                                            <th style="font-weight: bold;">Nom</th>
                                                            <th style="font-weight: bold;">Prix</th>                                                            
                                                            <th style="font-weight: bold;">Quantité</th>
                                                            <th style="font-weight: bold;">Ajouter</th>
                                                        </tr>

                                                        @foreach ($category->offres as $offre)
                                                         @if ($offre->stock > 0)
                                                             <tr>
                                                                <td>{{ $offre->name }}</td>
                                                                <td>{{ number_format($offre->price, 2) }}</td>
                                                                <td>{{ $offre->stock }}</td>
                                                                <td>
                                                                    <a href=""
                                                                       id="offre-{{ $offre->id }}"
                                                                       data-name="{{ $offre->name }}"
                                                                       data-id="{{ $offre->id }}"
                                                                       data-price="{{ $offre->price }}"
                                                                       class="btn btn-success btn-sm add-offre-btn">
                                                                       add<i class="fa fa-plus"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                         @endif
                                                            
                                                        @endforeach

                                                    </table><!-- end of table -->

                                                @else
                                                    <h5>Aucune donnée disponible</h5>
                                                @endif



                            
                        </div><!-- end of box body -->

                    </div><!-- end of box -->

                </div><!-- end of col -->




                <div class="col-md-6">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title" style="font-weight: bold;">Les commandes</h3>

                        </div><!-- end of box header -->

                        <div class="card-body">

                            <form action="{{ route('users.orders.store', $user->id) }}" method="post">

                                {{ csrf_field() }}
                                {{ method_field('post') }}

                                @include('partials._errors')

                                <table class="data-table-nosort table nowrap">
                                    <thead>
                                    <tr>
                                        <th style="font-weight: bold;">L'offre</th>
                                        <th style="font-weight: bold;">Quantité</th>
                                        <th style="font-weight: bold;">Le prix</th>
                                    </tr>
                                    </thead>

                                    <tbody class="order-list">


                                    </tbody>

                                </table><!-- end of table -->

                                <h4>Total : <span class="total-price">0</span></h4>

                                <button class="btn btn-primary btn-block disabled" id="add-order-form-btn"><i class="fa fa-plus"></i> Ajouter commande</button>

                            </form>

                        </div><!-- end of box body -->

                    </div><!-- end of box -->
                </div><!-- end of col -->
            </div>
        </div>
    </div>

@endsection
