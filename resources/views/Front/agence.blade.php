@extends('layouts.master')

@section('content')
	<div class="swiper-container-laure">
		<div class="swiper-wrapper">
			<div class="swiper-slide image1">
				<section class="section-pascal">
					<span class="pascal">
                        pascale <br>  chef de projet création
					</span>
					<img src="{{ asset('assets/images/pascal.jpg') }}" alt="">
				</section>

				<section class="section-laure">
					<span class="laure">
                                laure <br>  responsable  relation partenaires  concierge
					</span>
					<img src="{{ asset('assets/images/laure.jpg') }}" alt="">
				</section>
			</div>
			<div class="swiper-slide image2">
				<section class="esprit">
                    <h1>Notre <span class="pink">ESprit</span></h1>
					<p><span class="pink">Caribbean Planner</span>  est une agence  d'organisation de mariage et
					 et  d'evenement  privées  dans les Caraïbes</p>
					<p>Fondée  par  <span class="pink" >amour</span>  de la decoration et de  l'oragnisation, nous  sommes des wedding  planner
					basés en  Guadeloupe  qui mettons  notre  rigueur   et notre  profesionnalisme a votre service</p>
					<p>Nous vous offrons   un service   <span class="pink">ultra personalisé</span>  en faisant  disparaitre   votre stress   pour ne laisser   place   qu'au <span>bonheur</span>   de s'unir   sous le soleil  des Antilles .</p>
					<p>Afin de repondre au mieux  a vos demandes ,  nous  <span > avons   installé   un bureau   sur Paris  avec  une</span></p>
				</section>
			</div>
			<div class="swiper-slide image3">
				<section class="engagement">
					<h1>Notre  <span class="pink"> engagement </span></h1>


					<ul>
						<li>La ceremonie  de  reves  ayant  le meilleur  rapport qualité/prix</li>
						<li>Un cradre  idylique  avec les paysages  hauts  en  couleur  et en biodiversités  avec  des  normes  de qualité  et des exigences  de  sécurités
						francaise   et  européennes</li>
						<li> Développer  le  " weeding  Tourism "   dans  les iles  Francaise </li>
						<li>  Conseils  avisés  et  un  carnet  d'adresses  avec  des professionnels  de confiances  et  de qualités </li>
					</ul>
				</section>
			</div>
			<div class="swiper-slide image4">
				<section  class="choisir">
					<h1>Pourquoi <br>  <span class="pink">nous  choisir ?</span> </h1>


					<ul>
						<li>Présence  d'une  consultante  en île   de France</li>
						<li>L'organisation   et  la  gestion  de votre  mariage  de  A  a Z</li>
						<li>Un service  de conciergerie   est mit   a votre   disposition  de 24/24 durant  toute  la  durée  de  l'évènement</li>
						<li>Un grand  nombre  de  lieux  magiques   pour  répondre  a tous vos besoins   et  vos  souhaits</li>
					</ul>
				</section>
			</div>
			<div class="swiper-slide image5">
				<section class="christina">
					<p class="pink title-christina"><span > Christina </span>   </p>
                    <p class="fondatrice"><span >Fondatrice et wedding planner</span> </p>


					<p id="partie1">Christina  est  une amoureuse  de la Vie  et a  un sens   incroyable   de 'optimisme.
					Grande passionée  par  son travail  , elle  voie  le meilleur  et le positif   de tout   ce qu'elle   Pas boudhiste  . Mais elle  aurait pu
					mais ellle  aurait pu   l'etre  pour elle  il y a une solution  a  tout probleme</p>

					<p  id="partie2">Son experience en tant  que directrice  de magasin  spécialisé puis  de  Wedding  Planner   dans   sa propre agence   depuis  2010  lui  fournissent un   et le savoir nécessaire  pour  veiller   a ce  que ses clients </p>
					<span class="btn">
						<a href="{{url('contact')}}">Nous  contacter</a>
					</span>
				</section>
			</div>
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<!-- If we need scrollbar -->
		<div class="swiper-scrollbar"></div>
	</div>
@stop