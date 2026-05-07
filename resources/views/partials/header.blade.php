<header class="class-header-container">

    <nav class="class-header-nav">

        <!-- IZQUIERDA -->
        <div class="class-header-left">
            <span class="class-header-menu-icon">≡</span>
            <span class="class-header-menu-text">MENU</span>
        </div>

        <!-- CENTRO -->
        <div class="class-header-center">
            <h1 class="class-header-logo"> <a href="{{ route('inicio') }}">SEDIA</a></h1>
        </div>

        <!-- DERECHA -->
        <div class="class-header-right">

            <!-- LUPA -->
            <a href="/buscar" class="class-header-search-icon">
                <img src="image/icon-search.png" alt="Buscar">
            </a>

            <!-- CARRITO -->
            <a href="/carrito" class="class-header-cart-icon">
                <img src="image/icon-cart.png" alt="Carrito">
            </a>

            <!-- CONTADOR -->
            <div class="class-header-cart-count">
                1
            </div>

        </div>
    </nav>

</header>

<div class="class-menu-overlay"></div>

<aside class="class-menu-sidebar">

    <!-- HEADER MENU -->

    <div class="class-menu-top">

        <div class="class-menu-title">
            <span class="class-menu-icon">≡</span>
            <span>MENU</span>
        </div>

        <div class="class-menu-close"></div>

    </div>


    <!-- MENU CONTENT -->

    <div class="class-menu-content">

        <!-- NOSOTROS -->
        <div class="class-menu-group">

            <div class="class-menu-title">
                Nosotros
            </div>

            <a class="class-menu-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                href="{{ route('nosotros') }}">
                Sobre nosotros
            </a>

            <a class="class-menu-link {{ request()->routeIs('proyectos') ? 'active' : '' }}"
                href="{{ route('proyectos') }}">
                Proyectos
            </a>

            <a class="class-menu-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                href="{{ route('contacto') }}">
                Contáctanos
            </a>

            <a class="class-menu-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                href="{{ route('contacto') }}">
                Blog
            </a>

        </div>


        <!-- PRODUCTOS -->
        <div class="class-menu-group">

            <div class="class-menu-title">
                Productos
            </div>

            <a class="class-menu-link {{ request()->is('productos/promociones') ? 'active' : '' }}"
                href="/productos/promociones">
                Promociones
            </a>

            <a class="class-menu-link {{ request()->routeIs('productos') ? 'active' : '' }}"
                href="{{ route('productos') }}">
                Productos
            </a>


            <!-- SILLAS -->
            <div class="class-menu-dropdown">
                <span>Sillas</span>
                <span class="class-menu-arrow"></span>
            </div>

            <div class="class-menu-sub">
                <a class="{{ request()->is('productos/sillas/obj1') ? 'active' : '' }}" href="/productos/sillas/obj1">obj1</a>
                <a class="{{ request()->is('productos/sillas/obj2') ? 'active' : '' }}" href="/productos/sillas/obj2">obj2</a>
            </div>


            <!-- TABURETES -->
            <div class="class-menu-dropdown">
                <span>Taburetes</span>
                <span class="class-menu-arrow"></span>
            </div>

            <div class="class-menu-sub">
                <a class="{{ request()->is('productos/taburetes/obj1') ? 'active' : '' }}" href="/productos/taburetes/obj1">obj1</a>
                <a class="{{ request()->is('productos/taburetes/obj2') ? 'active' : '' }}" href="/productos/taburetes/obj2">obj2</a>
            </div>


            <!-- MESAS -->
            <div class="class-menu-dropdown">
                <span>Mesas</span>
                <span class="class-menu-arrow"></span>
            </div>

            <div class="class-menu-sub">
                <a class="{{ request()->is('productos/mesas/obj1') ? 'active' : '' }}" href="/productos/mesas/obj1">obj1</a>
                <a class="{{ request()->is('productos/mesas/obj2') ? 'active' : '' }}" href="/productos/mesas/obj2">obj2</a>
            </div>


            <a class="class-menu-link {{ request()->is('productos/bases-mesa') ? 'active' : '' }}"
                href="/productos/bases-mesa">
                Bases de mesa
            </a>

            <a class="class-menu-link {{ request()->is('productos/tableros-mesa') ? 'active' : '' }}"
                href="/productos/tableros-mesa">
                Tableros de mesa
            </a>


            <!-- MOBILIARIO -->
            <div class="class-menu-dropdown">
                <span>Mobiliario de Negocio</span>
                <span class="class-menu-arrow"></span>
            </div>

            <div class="class-menu-sub">
                <a class="{{ request()->is('productos/mobiliario/obj1') ? 'active' : '' }}" href="/productos/mobiliario/obj1">obj1</a>
                <a class="{{ request()->is('productos/mobiliario/obj2') ? 'active' : '' }}" href="/productos/mobiliario/obj2">obj2</a>
            </div>

        </div>

    </div>

</aside>
<script>
let lastScroll = 0;
const header = document.querySelector(".class-header-container");
const headerHeight = header ? header.offsetHeight : 100;
/* PAGINAS TRANSPARENTES */
const transparentPages =
    document.body.classList.contains("class-home") ||
    document.body.classList.contains("class-proyectos-page") ||
    document.body.classList.contains("class-sobre-nosotros-page");
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    /* ARRIBA DEL TODO: transparente, visible */
    if (currentScroll <= 0) {
        header.classList.remove("class-header-hidden");
        if (transparentPages) {
            header.classList.remove("class-header-scrolled");
        }
        lastScroll = currentScroll;
        return;
    }
    const isScrollingDown = currentScroll > lastScroll + 5;
    const isScrollingUp = currentScroll < lastScroll - 5;
    /* PAGINAS TRANSPARENTES */
    if (transparentPages) {
        if (isScrollingDown) {
            /* Mientras baja y aún se ve el header: mantener transparente */
            if (currentScroll <= headerHeight) {
                header.classList.remove("class-header-scrolled");
                header.classList.remove("class-header-hidden");
            } else {
                /* Ya dejó de verse: ocultar con efecto */
                header.classList.add("class-header-hidden");
            }
        } else if (isScrollingUp) {
            /* Al subir: mostrar blanco con borde */
            header.classList.remove("class-header-hidden");
            header.classList.add("class-header-scrolled");
        }
    } else {
        /* Paginas normales: siempre blanco con borde */
        header.classList.add("class-header-scrolled");
        if (isScrollingDown && currentScroll > headerHeight) {
            header.classList.add("class-header-hidden");
        } else if (isScrollingUp) {
            header.classList.remove("class-header-hidden");
        }
    }
    lastScroll = currentScroll;
});
</script>