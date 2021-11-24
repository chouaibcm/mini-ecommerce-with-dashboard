@extends('layouts.blog3')
<header class="header text-center text-white" style="background-color: #b9a0c9;">
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">

                <h1 class="display-4">Mes Commandes</h1>

            </div>
        </div>

    </div>
</header><!-- /.header -->
@section('content')
    <div class="site-section" id="home-section">
        <div class="container">


            @if ($cartes->count() > 0)

                <button type="button" class="btn btn-success print-btn justify-content-center"
                    style="justify-content: right;">Telecharger PDF</button>

                <div class="card pb-10 mt-2">


                    <div class="card-header bg-primary ">

                        <h3 class="card-title" style="color: white">Les commandes précédentes

                        </h3>

                    </div><!-- end of box header -->
                    <div class="card-body">
                        <div id="print-area">
                            <div class="table-responsive">
                            <table class="table hover nowrap">
                                <tr>
                                    <th>num de commande</th>
                                    <th class="table-plus datatable-nosort">Offre name</th>
                                    <th class="table-plus datatable-nosort">Carte code</th>
                                    <th>Prix</th>
                                    <th>Date de commande</th>
                                </tr>
                                
                                @foreach ($orders as $order)
                                   
                                    @foreach ($order->offres as $offre)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td class="table-plus">{{ $offre->name }}</td>
                                            <td>    
                                            <?php $i = 0; ?>                                            
                                            @foreach ($cartes as $carte)
                                                @if ($offre->id == $carte->offre_id)
                                                @if ($order->id == $carte->order_id)
                                                <?php $i++; ?>
                                                    {{ $carte->code }} <br>
                                                @endif
                                                @endif
                                            @endforeach
                                            </td>
                                            <td>{{ $offre->price * $i}}</td>
                                            <td>{{ $order->created_at }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </table><!-- end of table -->
                        </div>
                            {{ $orders->appends(request()->query())->links() }}
                        </div>


                    </div><!-- end of box body -->

                </div><!-- end of box -->

            @else
                <h2 class="text-center text-white serif text-uppercase mb-4">Aucun commande effectuer</h2>

            @endif





        </div>
    </div>

@endsection
