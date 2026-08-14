@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-content hero-split">

        <div>
            <p class="eyebrow">WELCOME TO PAWBILI</p>

            <h1>
                Everything Your Pet Needs,
                <span>Just a Paw Away.</span>
            </h1>

            <p>
                Your friendly online shop for pet food, treats,
                grooming essentials, accessories, and more.
            </p>

            <a href="{{ route('services') }}" class="btn">
                Explore Our Products
            </a>
        </div>

        <div class="pet-media-wrap">
            <div class="pet-orb pet-orb-main">
                <img src="{{ asset('images/pet-main.png') }}" alt="Main Pet">
            </div>

            <div class="pet-orb pet-orb-small pet-orb-top">
                <img src="{{ asset('images/pet-small-1.png') }}" alt="Pet Small Top">
            </div>

            <div class="pet-orb pet-orb-small pet-orb-bottom">
                <img src="{{ asset('images/pet-small-2.png') }}" alt="Pet Small Bottom">
            </div>
        </div>

    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">ABOUT PAWBILI</p>

        <h2>Your Pet's Needs, All in One Place</h2>

        <p>
            PawBili is an online pet supplies shop created to make
            pet shopping easier and more convenient for owners.
        </p>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">FEATURED CATEGORIES</p>
        <h2>Shop for Your Best Friend</h2>
    </div>

    <div class="card-grid">

        <div class="card">
            <div class="card-icon">DOG</div>
            <h3>Dog Food & Treats</h3>
            <p>
                Everyday food and tasty treats for your canine companions.
            </p>
        </div>

        <div class="card featured">
            <div class="card-icon">CAT</div>
            <h3>Cat Litter & Accessories</h3>
            <p>
                Litter, toys, and accessories to keep your cats comfortable.
            </p>
        </div>

        <div class="card">
            <div class="card-icon">FISH</div>
            <h3>Aquariums & Fish Supplies</h3>
            <p>
                Essential products for your aquatic pets and aquariums.
            </p>
        </div>

    </div>
</section>

<section class="section">
    <div class="cta">
        <h2>Ready to Shop for Your Pet?</h2>

        <p>
            Find quality pet essentials at PawBili.
        </p>

        <a href="{{ route('contact') }}" class="btn">
            Get in Touch
        </a>
    </div>
</section>

@endsection