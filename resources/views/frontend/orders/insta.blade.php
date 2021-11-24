@extends('layouts.blog3')
@section('header')
<header class="header text-center text-white" style="background-color: #b9a0c9;">
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">

                <h1 class="display-4">Votre commande effectuer</h1>
                
            </div>
        </div>

    </div>
</header><!-- /.header -->
@section('content')
    <div class="site-section" id="home-section">
        <div class="container">
           
            <button type="button" class="btn btn-success print-btn justify-content-center" style="justify-content: right;">Telecharger PDF</button>

            <div class="card pb-10 mt-2">

                <div class="card-header bg-primary ">

                    <h3 class="card-title" style="color: white">Votre commande effectuer 

                    </h3>

                </div><!-- end of box header -->
                <div class="card-body">                    
                    <div id="print-area">                    
                    <table class="data-table-nosort table nowrap">
                        <tr>
                            <th>Order name</th>                            
                            <th>Prix</th>
                            <th>Carte code</th>
                        </tr>

                        @foreach ($cartes as $carte)
                             <tr>
                                @foreach ($offres_brk as $offre)
                                   @if ($offre->id == $carte->offre_id)
                                       <td>{{ $offre->name }}</td>     
                                       <td>{{ $offre->price }}</td>                                    
                                   @endif
                                @endforeach
                                <td>{{ $carte->code }} </td>
                            </tr>                            
                        @endforeach

                    </table><!-- end of table -->
                    </div>
                    
                </div><!-- end of box body -->

            </div><!-- end of box -->
            @foreach ($cartes as $carte)
            @php

                 DB::table('cards')->where('id', $carte->id)->update(['new_carte' => 1]);

            @endphp                              
            @endforeach
            

        </div>
    </div>

@endsection
