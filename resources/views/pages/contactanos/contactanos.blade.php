@extends('layouts.app')

@section('body-class', 'class-contactanos-page')

@section('content')

<!-- ========================================
SECCION 1 — INFORMACION DE CONTACTO
======================================== -->

<section class="class-contactanos">

    <h1 class="class-contactanos-title">Contáctanos</h1>

    <p class="class-contactanos-desc">
        ¡Estamos para ayudarte! Queremos resolver tus dudas rápidamente. Póngase en contacto con nosotros y nos aseguraremos de brindarle una respuesta pronto.
    </p>

    <div class="class-contactanos-cards">

        <!-- CARD 1 — TELEFONO -->

        <div class="class-contactanos-card">

            <svg class="class-contactanos-card-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 10C15 10 11 11 9 16C7 21 9 27 13 31C17 35 23 37 28 35C33 33 34 29 34 29L29 26C29 26 27 28 25 27C23 26 20 23 19 21C18 19 20 17 20 17L15 10Z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <h3 class="class-contactanos-card-title">Teléfono</h3>

            <p class="class-contactanos-card-text">
                Para atención personalizada, comunícate con nosotros al siguiente número.
            </p>

            <a href="tel:+51999999999" class="class-contactanos-card-action">
                +51 920 379 619
            </a>

        </div>


        <!-- CARD 2 — EMAIL -->

        <div class="class-contactanos-card">

            <svg class="class-contactanos-card-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7" y="13" width="36" height="24" rx="2" stroke="#000" stroke-width="1.5"/>
                <path d="M7 15L25 27L43 15" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
            </svg>

            <h3 class="class-contactanos-card-title">Email</h3>

            <p class="class-contactanos-card-text">
                Envíanos un email para consultas detalladas o documentación o menos urgentes.
            </p>

            <a href="mailto:contacto@sedia.pe" class="class-contactanos-card-action">
                informes@proteplus.pe
            </a>

        </div>


        <!-- CARD 3 — CHAT -->

        <div class="class-contactanos-card">

            <svg class="class-contactanos-card-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 10H41C42.1 10 43 10.9 43 12V32C43 33.1 42.1 34 41 34H28L20 43V34H9C7.9 34 7 33.1 7 32V12C7 10.9 7.9 10 9 10Z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16 20H34" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M16 26H26" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
            </svg>

            <h3 class="class-contactanos-card-title">Chatea con nosotros</h3>

            <p class="class-contactanos-card-text">
                Conversa con nosotros en tiempo real por WhatsApp que se encuentra en la esquina inferior
            </p>

            <a href="https://wa.me/51999999999" target="_blank" rel="noopener" class="class-contactanos-card-action">
                Abre el chat
            </a>

        </div>

    </div>

</section>


<!-- ========================================
SECCION 2 — FORMULARIO CTA
======================================== -->

<div class="class-contactanos-cta">

    <!-- BLOQUE VERDE -->

    <div class="class-contactanos-green">

        <h2 class="class-contactanos-green-title">
            Envíanos un mensaje!
        </h2>

        <p class="class-contactanos-green-text">
            ¿Tienes alguna duda, sugerencia o consulta?<br> Escríbenos y te daremos una solución.
        </p>

        <div class="class-contactanos-social">

            <!-- Facebook -->
            <a href="#" class="class-contactanos-social-icon" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 2H15C13.67 2 12.4 2.53 11.46 3.46C10.53 4.4 10 5.67 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73 14.1 6.48 14.29 6.29C14.48 6.1 14.73 6 15 6H18V2Z"/>
                </svg>
            </a>

            <!-- YouTube -->
            <a href="#" class="class-contactanos-social-icon" aria-label="YouTube">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.54 6.42C22.42 5.94 22.19 5.5 21.86 5.14C21.53 4.78 21.11 4.51 20.65 4.36C18.88 3.86 12 3.86 12 3.86C12 3.86 5.12 3.86 3.35 4.36C2.89 4.51 2.47 4.78 2.14 5.14C1.81 5.5 1.58 5.94 1.46 6.42C1 8.2 1 12 1 12C1 12 1 15.8 1.46 17.58C1.58 18.06 1.81 18.5 2.14 18.86C2.47 19.22 2.89 19.49 3.35 19.64C5.12 20.14 12 20.14 12 20.14C12 20.14 18.88 20.14 20.65 19.64C21.11 19.49 21.53 19.22 21.86 18.86C22.19 18.5 22.42 18.06 22.54 17.58C23 15.8 23 12 23 12C23 12 23 8.2 22.54 6.42ZM9.75 15.52V8.48L15.5 12L9.75 15.52Z"/>
                </svg>
            </a>

            <!-- Instagram -->
            <a href="#" class="class-contactanos-social-icon" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C8.74 2 8.33 2.01 7.05 2.07C5.78 2.13 4.9 2.33 4.14 2.63C3.35 2.94 2.68 3.35 2.01 4.01C1.35 4.68 0.94 5.35 0.63 6.14C0.33 6.9 0.13 7.78 0.07 9.05C0.01 10.33 0 10.74 0 12C0 15.26 0.01 15.67 0.07 16.95C0.13 18.22 0.33 19.1 0.63 19.86C0.94 20.65 1.35 21.32 2.01 21.99C2.68 22.65 3.35 23.06 4.14 23.37C4.9 23.67 5.78 23.87 7.05 23.93C8.33 23.99 8.74 24 12 24C15.26 24 15.67 23.99 16.95 23.93C18.22 23.87 19.1 23.67 19.86 23.37C20.65 23.06 21.32 22.65 21.99 21.99C22.65 21.32 23.06 20.65 23.37 19.86C23.67 19.1 23.87 18.22 23.93 16.95C23.99 15.67 24 15.26 24 12C24 8.74 23.99 8.33 23.93 7.05C23.87 5.78 23.67 4.9 23.37 4.14C23.06 3.35 22.65 2.68 21.99 2.01C21.32 1.35 20.65 0.94 19.86 0.63C19.1 0.33 18.22 0.28 16.95 0.07C15.67 0.01 15.26 0 12 0ZM12 2.16C15.2 2.16 15.58 2.17 16.85 2.23C18.02 2.28 18.65 2.47 19.07 2.63C19.63 2.85 20.02 3.1 20.43 3.51C20.84 3.92 21.09 4.31 21.31 4.87C21.47 5.29 21.66 5.92 21.71 7.09C21.77 8.36 21.78 8.74 21.78 11.94C21.78 15.14 21.77 15.52 21.71 16.79C21.66 17.96 21.47 18.59 21.31 19.01C21.09 19.57 20.84 19.96 20.43 20.37C20.02 20.78 19.63 21.03 19.07 21.25C18.65 21.41 18.02 21.6 16.85 21.65C15.58 21.71 15.2 21.72 12 21.72C8.8 21.72 8.42 21.71 7.15 21.65C5.98 21.6 5.35 21.41 4.93 21.25C4.37 21.03 3.98 20.78 3.57 20.37C3.16 19.96 2.91 19.57 2.69 19.01C2.53 18.59 2.34 17.96 2.29 16.79C2.23 15.52 2.22 15.14 2.22 11.94C2.22 8.74 2.23 8.36 2.29 7.09C2.34 5.92 2.53 5.29 2.69 4.87C2.91 4.31 3.16 3.92 3.57 3.51C3.98 3.1 4.37 2.85 4.93 2.63C5.35 2.47 5.98 2.28 7.15 2.23C8.42 2.17 8.8 2.16 12 2.16ZM12 5.84C9.24 5.84 7 8.08 7 10.84C7 13.6 9.24 15.84 12 15.84C14.76 15.84 17 13.6 17 10.84C17 8.08 14.76 5.84 12 5.84ZM12 14C10.27 14 8.86 12.59 8.86 10.86C8.86 9.13 10.27 7.72 12 7.72C13.73 7.72 15.14 9.13 15.14 10.86C15.14 12.59 13.73 14 12 14ZM18.54 5.64C18.54 6.32 17.99 6.87 17.31 6.87C16.63 6.87 16.08 6.32 16.08 5.64C16.08 4.96 16.63 4.41 17.31 4.41C17.99 4.41 18.54 4.96 18.54 5.64Z"/>
                </svg>
            </a>

            <!-- Twitter/X -->
            <a href="#" class="class-contactanos-social-icon" aria-label="Twitter">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.24 2H21.5L14.48 10.02L22.75 22H16.26L11.2 15.34L5.38 22H2.12L9.62 13.43L1.75 2H8.41L13 8.1L18.24 2ZM17.1 20.08H18.91L7.47 3.88H5.53L17.1 20.08Z"/>
                </svg>
            </a>

            <!-- LinkedIn -->
            <a href="#" class="class-contactanos-social-icon" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8C17.59 8 19.11 8.63 20.24 9.76C21.37 10.89 22 12.41 22 14V21H18V14C18 13.47 17.79 12.96 17.41 12.59C17.04 12.21 16.53 12 16 12C15.47 12 14.96 12.21 14.59 12.59C14.21 12.96 14 13.47 14 14V21H10V14C10 12.41 10.63 10.89 11.76 9.76C12.89 8.63 14.41 8 16 8Z"/>
                    <rect x="2" y="9" width="4" height="12"/>
                    <circle cx="4" cy="4" r="2"/>
                </svg>
            </a>

        </div>

    </div>


    <!-- BLOQUE FORMULARIO -->

    <div class="class-contactanos-form-wrap">

        @include('partials.message-toast')

        <form
            id="formContactanos"
            method="POST"
            action="{{ route('contactanos.enviar') }}"
            novalidate>
            @csrf

            <div class="class-contactanos-form-grid">

                <div>
                    <input
                        type="text"
                        name="nombres"
                        placeholder="Nombres"
                        class="class-contactanos-input">
                </div>

                <div>
                    <input
                        type="text"
                        name="apellidos"
                        placeholder="Apellidos"
                        class="class-contactanos-input">
                </div>

                <div>
                    <input
                        type="tel"
                        name="celular"
                        placeholder="Celular"
                        class="class-contactanos-input">
                </div>

                <div>
                    <input
                        type="text"
                        name="asunto"
                        placeholder="Asunto"
                        class="class-contactanos-input">
                </div>

            </div>

            <div class="class-contactanos-form-full">
                <input
                    type="email"
                    name="correo"
                    placeholder="Correo electrónico"
                    class="class-contactanos-input">
            </div>

            <div class="class-contactanos-form-full">
                <textarea
                    name="mensaje"
                    placeholder="Deja tu mensaje"
                    class="class-contactanos-textarea"></textarea>
            </div>

            <div class="class-contactanos-form-bottom">
                <button type="submit" class="class-contactanos-btn">
                    ENVIAR
                </button>
            </div>

        </form>

    </div>

</div>

@push('scripts')
    @vite('resources/js/contactanos/form.js')
@endpush

@endsection
