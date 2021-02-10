@extends('layouts.layout')

@section('title', 'Catalogue')

@section('content')
    <div class = "photo-anne-sophie">
        <img id = "photo-anne-sophie" class="img-fluid" src={{ asset('images/anne-sophie.png') }} alt="photo de Anne Sophie">
        <div class="btn-group dropend">
                <form action="/product" method="get">
                    <select name="sortby" class="form-select" id="inputGroupSelect04">
                        <option selected><p class="trier">Trier par</p></option>
                        <option value="name"><p class="trier">Nom</p></option>
                        <option value="price"><p class="trier">Prix</p></option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit">Valider</button>
                </form>

{{--            </ul>--}}
        </div>

    </div>
    <div class="row body-productlist">
        @foreach ($productlist as $product)
            <div class="col product-col">
                <div class="product">
                    <img class="photoproduct" src={{ asset('images/image.png') }} alt="photo of product">
                    @if ($product->price/100 <= 20)
                        <p class="bestprice">Best price <br></p>
                    @endif
                    <p>{{ $product->name }} - €{{ $product->price/100 }}</p>
                    <a >                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection

