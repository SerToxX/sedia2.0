@extends('layouts.app')

@section('title', 'Inicio')
@section('description', 'Descubre la colección de sillas, taburetes y mesas de Sedia. Diseño, confort e innovación para cada espacio de tu hogar.')

@section('body-class', 'class-home')

@push('styles')
    @vite('resources/css/index.css')
@endpush

@section('content')

{{-- =====================================================
     1. HERO
===================================================== --}}
<section class="class-hero">

    <video
        class="class-hero-video"
        autoplay muted loop playsinline
        preload="metadata"
        poster="{{ asset('image/hero.webp') }}">
        <source src="{{ asset('video/prueba.mp4') }}" type="video/mp4">
    </video>

    <div class="class-hero-overlay"></div>

    <div class="class-hero-content">
        <h1 class="class-hero-title">
            Colección de sillas <br> exclusivas
        </h1>
        <a href="/productos" class="class-hero-button">COMPRA AHORA</a>
    </div>

</section>


{{-- =====================================================
     2. SOBRE NOSOTROS
===================================================== --}}
<section class="class-about">
    <div class="class-about-container">

        <h2 class="class-about-title">
            Estilo y confort diario que <br>
            inspiran hogar
        </h2>

        <p class="class-about-text">
            Al combinar diseño, comodidad e innovación, creamos sillas de hogar que aportan estilo y
            funcionalidad a cada espacio. Piezas pensadas para brindar confort diario sin renunciar a la
            estética, perfectas para acompañar la vida moderna con elegancia y personalidad.
        </p>

        <a href="/nosotros" class="class-about-button">LEE SOBRE NOSOTROS</a>

    </div>
</section>


{{-- =====================================================
     3. CATEGORÍAS
===================================================== --}}
<section class="class-categories">

    <h2 class="class-categories-title">Conoce nuestras categorías</h2>

    {{-- Fila 1: 65% / 35% --}}
    <div class="class-cat-row class-cat-row-top">

        <a href="#" class="class-cat-item">
            <img src="{{ asset('image/taburetes.png') }}" alt="Taburetes" loading="lazy" decoding="async" style="object-position:center 60%">
            <div class="class-cat-label">
                <h3>TABURETES</h3>
                <span>Ver todos</span>
            </div>
        </a>

        <a href="#" class="class-cat-item">
            <img src="{{ asset('image/bases.png') }}" alt="Bases" loading="lazy" decoding="async">
            <div class="class-cat-label">
                <h3>BASES</h3>
                <span>Ver todos</span>
            </div>
        </a>

    </div>

    {{-- Fila 2: 50% / 50% --}}
    <div class="class-cat-row class-cat-row-bottom">

        <a href="#" class="class-cat-item">
            <img src="{{ asset('image/mesas.png') }}" alt="Mesas" loading="lazy" decoding="async" style="object-position:center 40%">
            <div class="class-cat-label">
                <h3>MESAS</h3>
                <span>Ver todos</span>
            </div>
        </a>

        <a href="#" class="class-cat-item">
            <img src="{{ asset('image/comedor.png') }}" alt="Comedor" loading="lazy" decoding="async" style="object-position:center 65%">
            <div class="class-cat-label">
                <h3>COMEDOR</h3>
                <span>Ver todos</span>
            </div>
        </a>

    </div>

</section>


{{-- =====================================================
     4. BENEFICIOS
===================================================== --}}
<section class="class-benefits">
    <div class="class-benefits-grid">

        <div class="class-benefit">
            <div class="class-benefit-icon">
                <img src="{{ asset('image/icons/icon-delivery.svg') }}" alt="Delivery" width="50" height="50">
            </div>
            <h3>Delivery gratuito</h3>
            <p>Ofrece soluciones profesionales en sillas para proyectos comerciales, arquitectónicos.</p>
        </div>

        <div class="class-benefit">
            <div class="class-benefit-icon">
                <img src="{{ asset('image/icons/icon-security.svg') }}" alt="Pago seguro" width="50" height="50">
            </div>
            <h3>Pago seguro</h3>
            <p>Ofrece soluciones profesionales en sillas para proyectos comerciales, arquitectónicos.</p>
        </div>

        <div class="class-benefit">
            <div class="class-benefit-icon">
                <img src="{{ asset('image/icons/icon-quality.svg') }}" alt="Calidad" width="50" height="50">
            </div>
            <h3>Calidad garantizada</h3>
            <p>Ofrece soluciones profesionales en sillas para proyectos comerciales, arquitectónicos.</p>
        </div>

        <div class="class-benefit">
            <div class="class-benefit-icon">
                <img src="{{ asset('image/icons/icon-guide.svg') }}" alt="Guía" width="50" height="50">
            </div>
            <h3>Guía personalizada</h3>
            <p>Ofrece soluciones profesionales en sillas para proyectos comerciales, arquitectónicos.</p>
        </div>

    </div>
</section>


{{-- =====================================================
     5. NUESTRAS PROMOCIONES
===================================================== --}}
<section class="class-promos">

    <h2 class="class-section-title">Nuestras promociones</h2>

    <div class="class-promos-grid">

        {{-- Card 1 --}}
        <a href="#" class="class-promo-card">
            <div class="class-promo-img">
                <img src="{{ asset('image/productos/product-white.jpg') }}" alt="Roma Blanca" loading="lazy" decoding="async">
            </div>
            <div class="class-promo-info">
                <div class="class-promo-top">
                    <span class="class-promo-name">Roma</span>
                    <div class="class-promo-swatches">
                        <span class="class-swatch" style="background:#72655c;"></span>
                        <span class="class-swatch" style="background:#d9d9d9;"></span>
                        <span class="class-swatch-more">+3</span>
                    </div>
                </div>
                <p class="class-promo-cat">Comedor Exterior</p>
                <div class="class-promo-price">
                    <span class="class-price">S/. 410.00</span>
                    <span class="class-price-old">S/. 820.00</span>
                </div>
            </div>
        </a>

        {{-- Card 2 --}}
        <a href="#" class="class-promo-card">
            <div class="class-promo-img">
                <img src="{{ asset('image/productos/product-terracota.jpg') }}" alt="Roma Terracota" loading="lazy" decoding="async">
            </div>
            <div class="class-promo-info">
                <div class="class-promo-top">
                    <span class="class-promo-name">Roma</span>
                    <div class="class-promo-swatches">
                        <span class="class-swatch" style="background:#c27557;"></span>
                        <span class="class-swatch" style="background:#d9d9d9;"></span>
                        <span class="class-swatch-more">+3</span>
                    </div>
                </div>
                <p class="class-promo-cat">Comedor Exterior</p>
                <div class="class-promo-price">
                    <span class="class-price">S/. 410.00</span>
                    <span class="class-price-old">S/. 820.00</span>
                </div>
            </div>
        </a>

        {{-- Card 3 --}}
        <a href="#" class="class-promo-card">
            <div class="class-promo-img">
                <img src="{{ asset('image/productos/product-nd187.jpg') }}" alt="Roma Oscura" loading="lazy" decoding="async">
            </div>
            <div class="class-promo-info">
                <div class="class-promo-top">
                    <span class="class-promo-name">Roma</span>
                    <div class="class-promo-swatches">
                        <span class="class-swatch" style="background:#3d2a23;"></span>
                        <span class="class-swatch" style="background:#d9d9d9;"></span>
                        <span class="class-swatch-more">+3</span>
                    </div>
                </div>
                <p class="class-promo-cat">Comedor Exterior</p>
                <div class="class-promo-price">
                    <span class="class-price">S/. 410.00</span>
                    <span class="class-price-old">S/. 820.00</span>
                </div>
            </div>
        </a>

        {{-- Card 4 --}}
        <a href="#" class="class-promo-card">
            <div class="class-promo-img">
                <img src="{{ asset('image/productos/product-taupe.jpg') }}" alt="Roma Taupe" loading="lazy" decoding="async">
            </div>
            <div class="class-promo-info">
                <div class="class-promo-top">
                    <span class="class-promo-name">Roma</span>
                    <div class="class-promo-swatches">
                        <span class="class-swatch" style="background:#6d7389;"></span>
                        <span class="class-swatch" style="background:#d9d9d9;"></span>
                        <span class="class-swatch-more">+3</span>
                    </div>
                </div>
                <p class="class-promo-cat">Comedor Exterior</p>
                <div class="class-promo-price">
                    <span class="class-price">S/. 410.00</span>
                    <span class="class-price-old">S/. 820.00</span>
                </div>
            </div>
        </a>

    </div>

</section>


{{-- =====================================================
     6. PRODUCTOS DESTACADOS (sobre fondo)
===================================================== --}}
<section class="class-featured">

    <div class="class-featured-inner">

        <a href="#" class="class-featured-card">
            <div class="class-featured-img">
                <img src="{{ asset('image/productos/product-luna.jpg') }}" alt="Luna Negra" loading="lazy" decoding="async">
            </div>
            <div class="class-featured-info">
                <div class="class-featured-top">
                    <span class="class-featured-name">Luna</span>
                    <div class="class-promo-swatches">
                        <span class="class-swatch" style="background:#2a2a2a;"></span>
                        <span class="class-swatch" style="background:#d9d9d9;"></span>
                        <span class="class-swatch-more">+3</span>
                    </div>
                </div>
                <p class="class-promo-cat">Comedor Exterior</p>
                <div class="class-promo-price">
                    <span class="class-price">S/. 410.00</span>
                    <span class="class-price-old">S/. 820.00</span>
                </div>
            </div>
        </a>

        <a href="#" class="class-featured-card">
            <div class="class-featured-img">
                <img src="{{ asset('image/productos/product-mesa.jpg') }}" alt="Mesa en U" loading="lazy" decoding="async">
            </div>
            <div class="class-featured-info">
                <div class="class-featured-top">
                    <span class="class-featured-name">Mesa en U</span>
                    <div class="class-promo-swatches">
                        <span class="class-swatch" style="background:#72655c;"></span>
                        <span class="class-swatch" style="background:#d9d9d9;"></span>
                        <span class="class-swatch-more">+3</span>
                    </div>
                </div>
                <p class="class-promo-cat">Comedor Exterior</p>
                <div class="class-promo-price">
                    <span class="class-price">S/. 410.00</span>
                    <span class="class-price-old">S/. 820.00</span>
                </div>
            </div>
        </a>

    </div>

</section>


{{-- =====================================================
     7. SEDIA PROJECT
===================================================== --}}
<section class="class-sedia-project">

    <div class="class-sedia-left">
        <p class="class-sedia-sub">Soluciones a medida</p>
        <h2 class="class-sedia-title">SEDIA<br>PROJECT</h2>
        <p class="class-sedia-text">
            Ofrece soluciones profesionales en sillas para proyectos comerciales, arquitectónicos
            y de diseño. Equipamos espacios con piezas duraderas, funcionales y estéticas,
            adaptadas al concepto y necesidad de cada cliente.
        </p>
        <a href="/nosotros" class="class-sedia-link">MÁS INFORMACIÓN</a>
    </div>

    <div class="class-sedia-right">
        <img src="{{ asset('image/sedia-project.jpg') }}"
             alt="Sedia Project" loading="lazy" decoding="async">
    </div>

</section>


{{-- =====================================================
     8. DISEÑO Y COMODIDAD
===================================================== --}}
<section class="class-design">

    <div class="class-design-text">
        <h2 class="class-design-title">Diseño y comodidad</h2>
        <p class="class-design-sub">
            NUESTRAS SILLAS REFLEJAN TU ESTILO DE VIDA Y CREAN ESPACIOS ACOGEDORES, AUTÉNTICOS Y CON PERSONALIDAD
        </p>
        <p class="class-design-body">
            Descubre una colección de sillas de hogar diseñadas para adaptarse a cada espacio y estilo,
            desde propuestas clásicas hasta líneas contemporáneas y minimalistas. Nuestra selección incluye
            sillas de comedor, sillas de barra, poltronas y opciones para exterior e interior, combinando
            diseño, confort y materiales de alta calidad.
        </p>
    </div>

    <div class="class-design-collage">
        <div class="class-design-main">
            <img src="{{ asset('image/design-main.jpg') }}" alt="Diseño principal" loading="lazy" decoding="async">
        </div>
        <div class="class-design-side">
            <img src="{{ asset('image/design-side1.jpg') }}" alt="Detalle 1" loading="lazy" decoding="async">
            <img src="{{ asset('image/design-side2.jpg') }}" alt="Detalle 2" loading="lazy" decoding="async">
        </div>
    </div>

</section>


{{-- =====================================================
     9. BLOG — ARTÍCULO DESTACADO + GRID
===================================================== --}}
<section class="class-blog">

    <h2 class="class-section-title">Disfruta nuestros artículos</h2>

    {{-- Artículo destacado --}}
    <div class="class-blog-featured">
        <div class="class-blog-feat-text">
            <h3 class="class-blog-feat-title">Comedor con Estilo Atemporal</h3>
            <p class="class-blog-feat-body">
                Descubre cómo elegir sillas de comedor que combinen diseño y comodidad para crear
                un ambiente acogedor y sofisticado. Materiales, colores y proporciones que transforman
                cada reunión en una experiencia especial.
                <br><br>
                Opta por tapizados duraderos, estructuras resistentes y tonos que armonicen con tu mesa.
                Una buena elección puede renovar por completo la percepción del espacio.
            </p>
            <a href="#" class="class-blog-read">LEER ARTÍCULO</a>
        </div>
        <a href="#" class="class-blog-feat-img">
            <img src="{{ asset('image/blog/blog-featured.jpg') }}" alt="Comedor con Estilo Atemporal" loading="lazy" decoding="async">
        </a>
    </div>

    {{-- Divider --}}
    <div class="class-blog-divider">
        <a href="#" class="class-blog-all">MIRAR TODOS LOS ARTÍCULOS</a>
    </div>

    {{-- Grid de 3 artículos --}}
    <div class="class-blog-grid">

        <article class="class-blog-card">
            <a href="#" class="class-blog-img-wrap">
                <img src="{{ asset('image/blog/blog1.jpg') }}" alt="Comedor con Estilo Atemporal" loading="lazy" decoding="async">
            </a>
            <div class="class-blog-card-body">
                <h3>Comedor con Estilo Atemporal</h3>
                <p>Descubre cómo elegir sillas de comedor que combinen diseño y comodidad para crear
                   un ambiente acogedor y sofisticado.</p>
                <a href="#" class="class-blog-read">LEER ARTÍCULO</a>
            </div>
        </article>

        <article class="class-blog-card">
            <a href="#" class="class-blog-img-wrap">
                <img src="{{ asset('image/blog/blog2.jpg') }}" alt="Sillas de barra" loading="lazy" decoding="async">
            </a>
            <div class="class-blog-card-body">
                <h3>Sillas de barra que marcan tendencia esta temporada</h3>
                <p>Las sillas de barra aportan personalidad y dinamismo a cocinas y espacios sociales.
                   Encuentra la altura ideal y acabados modernos.</p>
                <a href="#" class="class-blog-read">LEER ARTÍCULO</a>
            </div>
        </article>

        <article class="class-blog-card">
            <a href="#" class="class-blog-img-wrap">
                <img src="{{ asset('image/blog/blog3.jpg') }}" alt="Espacios compactos" loading="lazy" decoding="async">
            </a>
            <div class="class-blog-card-body">
                <h3>Espacios compactos, grandes ideas, cambios necesarios</h3>
                <p>Optimiza ambientes pequeños con sillas de diseño ligero y proporciones equilibradas.
                   Soluciones prácticas que mantienen la elegancia.</p>
                <a href="#" class="class-blog-read">LEER ARTÍCULO</a>
            </div>
        </article>

    </div>

</section>


{{-- =====================================================
     10. TRABAJA CON NOSOTROS
===================================================== --}}
<section class="class-jobs">
    <div class="class-jobs-overlay"></div>
    <div class="class-jobs-content">
        <h2 class="class-jobs-title">¡Trabaja con nosotros!</h2>
        <p class="class-jobs-text">
            Si eres arquitecto, diseñador o buscas amueblar tu negocio,<br>
            Sedia Project está pensado para ti.
        </p>
    </div>
</section>


{{-- =====================================================
     11. NEWSLETTER
===================================================== --}}
<section class="class-newsletter">
    <form class="class-newsletter-form" action="#" method="POST">
        @csrf
        <div class="class-newsletter-field">
            <input
                type="email"
                name="email"
                placeholder="INGRESA TU EMAIL"
                class="class-newsletter-input"
                required>
            <button type="submit" class="class-newsletter-btn" aria-label="Enviar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                    <path d="M22.5 11L1.5 1L6 11L1.5 21L22.5 11Z"
                          stroke="#B8C1A8" stroke-width="1.5"
                          stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </form>
</section>


@push('scripts')
    @vite('resources/js/home.js')
@endpush

@endsection
