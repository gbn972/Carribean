@extends('layouts.master')

@section('content')
	@parent
        <section class="section-prestation">
            <div class=" prestations-container">
                <figure>
                    <img src="{{ asset('assets/images/ceremonie.jpg') }}">
                    <figcaption>CEREMONIE</figcaption>
                </figure>



                <figure>
                    <img src="{{ asset('assets/images/champagne.jpg') }}" alt="">
                    <figcaption>CHAMPAGNE</figcaption>
                </figure>


                <figure>
                   <img src="{{ asset('assets/images/bateau.jpg') }}" alt="" >
                    <figcaption>BATEAU</figcaption>
                </figure>
            </div>
        </section>
@stop