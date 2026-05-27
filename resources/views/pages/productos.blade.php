@extends('layouts.app')

@section('title', 'Productos')
@section('description', 'Explora nuestra colección completa de sillas, taburetes, mesas y mobiliario de exterior e interior.')

@section('body-class', 'class-listing-page')

@push('styles')
    @vite('resources/css/listing.css')
@endpush

@section('content')

<!-- ============================
HERO
============================ -->
<section class="class-listing-hero">
    <img src="{{ asset('image/sobre-nosotros-banner.png') }}" class="class-listing-hero-img" loading="eager" fetchpriority="high" alt="Sillas de exterior">
    <div class="class-listing-hero-overlay"></div>
    <div class="class-listing-hero-content">
        <h1 class="class-listing-hero-title">SILLAS DE<br>EXTERIOR</h1>
    </div>
</section>


<!-- ============================
FILTROS
============================ -->
<div class="class-listing-filters-bar">
    <div class="class-listing-filters-container">
        <button class="class-listing-filters-btn" type="button">
            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0" y1="2" x2="14" y2="2" stroke="currentColor" stroke-width="1.5"/>
                <line x1="0" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                <line x1="0" y1="10" x2="14" y2="10" stroke="currentColor" stroke-width="1.5"/>
                <circle cx="4" cy="2" r="1.5" fill="white" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="10" cy="6" r="1.5" fill="white" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="5" cy="10" r="1.5" fill="white" stroke="currentColor" stroke-width="1.2"/>
            </svg>
            Filtros
        </button>
        <span class="class-listing-filters-count">Mostrando 1–12 de 54 resultados</span>
    </div>
</div>


<!-- ============================
GRID PRODUCTOS
============================ -->
<div class="class-listing-body">
    <div class="class-listing-container">
        <div class="class-listing-grid">

            <!-- CARD 1 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/productos/silla1.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Exterior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/41.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/taburetes.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Interior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/41.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/comedor.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Exterior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/40.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/taburetes.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Interior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/40.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 5 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/comedor.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Exterior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/41.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 6 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/taburetes.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Interior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/40.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 7 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/comedor.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Exterior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/41.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 8 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/taburetes.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Interior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/40.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 9 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/comedor.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Exterior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/41.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 10 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/taburetes.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Interior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/40.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 11 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/comedor.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch" style="background:#8b8478;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Exterior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/41.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

            <!-- CARD 12 -->
            <div class="class-listing-card">
                <div class="class-listing-card-img-wrap">
                    <img src="{{ asset('image/taburetes.png') }}" loading="lazy" decoding="async" alt="Roma">
                </div>
                <div class="class-listing-card-info">
                    <div class="class-listing-card-top">
                        <span class="class-listing-card-name">Roma</span>
                        <div class="class-listing-card-swatches">
                            <span class="class-listing-swatch" style="background:#2d2d2d;"></span>
                            <span class="class-listing-swatch" style="background:#c97c5d;"></span>
                            <span class="class-listing-swatch" style="background:#b8c1a8;"></span>
                            <span class="class-listing-swatch-count">×3</span>
                        </div>
                    </div>
                    <span class="class-listing-card-category">Comedor Interior</span>
                    <div class="class-listing-card-prices">
                        <span class="class-listing-price-sale">S/40.00</span>
                        <span class="class-listing-price-original">S/59.00</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
