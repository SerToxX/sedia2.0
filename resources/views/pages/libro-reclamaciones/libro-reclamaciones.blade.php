{{-- resources/views/libro-reclamaciones.blade.php --}}

@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/libro-reclamaciones.css') }}">

<section class="class-reclamaciones-section">

    <div class="class-reclamaciones-container">

        {{-- =========================================
             HEADER
        ========================================== --}}

        <div class="class-reclamaciones-header">

            <h1 class="class-reclamaciones-title">
                Libro de reclamaciones
            </h1>

            <p class="class-reclamaciones-description">
                En ProOffice, nos comprometemos a ofrecerte productos y servicios de calidad.
                Si tu experiencia no fue satisfactoria o deseas presentar un reclamo o queja,
                ponemos a tu disposición nuestro Libro de Reclamaciones virtual, conforme a lo
                establecido en el Código de Protección y Defensa del Consumidor – Ley N° 29571.
            </p>

        </div>

    </div>

    {{-- =========================================
         PASOS TEXTO
    ========================================== --}}

    <div class="class-reclamaciones-steps-wrapper">

        <div class="class-reclamaciones-steps-title-container">

            <h2 class="class-reclamaciones-steps-title">
                Para poder registrar tu reclamo o queja sigue los siguientes pasos
            </h2>

        </div>

        <div class="class-reclamaciones-steps-content">

            <ol class="class-reclamaciones-steps-list">

                <li>
                    Llenar el siguiente formulario registrando el tipo de reclamo o queja,
                    tienda donde fuiste atendido y datos de contacto para poder ubicarte.
                </li>

                <li>
                    Después de completar el formulario haz clic en el botón “Enviar”.
                </li>

                <li>
                    El proveedor deberá dar respuesta al reclamo en un plazo no mayor
                    de quince (15) días hábiles.
                </li>

            </ol>

        </div>

    </div>

    <div class="class-reclamaciones-container">

        <div class="class-reclamaciones-form-section">

            {{-- =========================================
                 PROGRESS
            ========================================== --}}

            <div
                class="class-reclamaciones-steps-progress"
                id="class-reclamaciones-progress"
            >

                <div class="class-reclamaciones-steps-progress-wrapper">

                    {{-- STEP 1 --}}
                    <div class="class-reclamaciones-step-item">

                        <div class="class-reclamaciones-step-top">

                            <div class="class-reclamaciones-step-line"></div>

                            <div class="class-reclamaciones-step-circle class-reclamaciones-step-circle-active">
                                1
                            </div>

                            <div class="class-reclamaciones-step-line class-reclamaciones-step-line-active"></div>

                        </div>

                        <span class="class-reclamaciones-step-label class-reclamaciones-step-label-active">
                            Datos del <br>
                            consumidor
                        </span>

                    </div>

                    {{-- STEP 2 --}}
                    <div class="class-reclamaciones-step-item">

                        <div class="class-reclamaciones-step-top">

                            <div class="class-reclamaciones-step-line"></div>

                            <div class="class-reclamaciones-step-circle">
                                2
                            </div>

                            <div class="class-reclamaciones-step-line"></div>

                        </div>

                        <span class="class-reclamaciones-step-label">
                            Información <br>
                            del producto
                        </span>

                    </div>

                    {{-- STEP 3 --}}
                    <div class="class-reclamaciones-step-item">

                        <div class="class-reclamaciones-step-top">

                            <div class="class-reclamaciones-step-line"></div>

                            <div class="class-reclamaciones-step-circle">
                                3
                            </div>

                            <div class="class-reclamaciones-step-line"></div>

                        </div>

                        <span class="class-reclamaciones-step-label">
                            Detalles <br>
                            del reclamo
                        </span>

                    </div>

                </div>

            </div>

            {{-- =========================================
                 FORM
            ========================================== --}}

            <form
                class="class-reclamaciones-form"
                id="class-reclamaciones-form"
            >

                {{-- STEP 1 --}}
                <div
                    class="class-reclamaciones-step-content-form"
                    data-step="1"
                >

                    <div class="class-reclamaciones-form-grid">

                        {{-- LEFT --}}
                        <div class="class-reclamaciones-form-column">

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Nombres
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Tipo de documento
                                </label>

                                <select class="class-reclamaciones-select">

                                    <option value="">
                                       
                                    </option>

                                    <option value="dni">
                                        DNI
                                    </option>

                                    <option value="ce">
                                        Carnet de extranjería
                                    </option>

                                </select>

                            </div>

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Telefono o celular
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                        </div>

                        {{-- RIGHT --}}
                        <div class="class-reclamaciones-form-column">

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Apellidos
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    N° de documento
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Correo electronico
                                </label>

                                <input
                                    type="email"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                        </div>

                    </div>

                    {{-- BOTTOM --}}
                    <div class="class-reclamaciones-form-row-3">

                        <div class="class-reclamaciones-field">

                            <label class="class-reclamaciones-label">
                                Region
                            </label>

                            <input
                                type="text"
                                class="class-reclamaciones-input"
                            >

                        </div>

                        <div class="class-reclamaciones-field">

                            <label class="class-reclamaciones-label">
                                Distrito
                            </label>

                            <input
                                type="text"
                                class="class-reclamaciones-input"
                            >

                        </div>

                        <div class="class-reclamaciones-field">

                            <label class="class-reclamaciones-label">
                                Direccion
                            </label>

                            <input
                                type="text"
                                class="class-reclamaciones-input"
                            >

                        </div>

                    </div>

                </div>

                {{-- STEP 2 --}}
                <div
                    class="class-reclamaciones-step-content-form"
                    data-step="2"
                    style="display: none;"
                >

                    <div class="class-reclamaciones-form-grid">

                        <div class="class-reclamaciones-form-column">

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Fecha de compra
                                </label>

                                <input
                                    type="date"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Monto reclamado (si en caso aplica)
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                        </div>

                        <div class="class-reclamaciones-form-column">

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Número de comprobante de pago
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Producto/ servicio adquirido
                                </label>

                                <input
                                    type="text"
                                    class="class-reclamaciones-input"
                                >

                            </div>

                        </div>

                    </div>

                </div>

                {{-- STEP 3 --}}
                <div
                    class="class-reclamaciones-step-content-form"
                    data-step="3"
                    style="display: none;"
                >

                    <div class="class-reclamaciones-form-grid">

                        <div class="class-reclamaciones-form-column">

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Descripción
                                </label>

                                <textarea
                                    class="class-reclamaciones-textarea"
                                    placeholder="Explica de manera clara el motivo de su queja"
                                ></textarea>

                            </div>

                        </div>

                        <div class="class-reclamaciones-form-column">

                            <div class="class-reclamaciones-field">

                                <label class="class-reclamaciones-label">
                                    Pedido o solución solicitada
                                </label>

                                <textarea
                                    class="class-reclamaciones-textarea"
                                    placeholder="Indica lo que solicitas como respuesta o compensacion"
                                ></textarea>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- SUCCESS --}}
                <div
                    class="class-reclamaciones-success"
                    id="class-reclamaciones-success"
                    style="display: none;"
                >

                    <div class="class-reclamaciones-success-circle">
                        ✓
                    </div>

                    <h2 class="class-reclamaciones-success-title">
                        Tu reclamo ha sido registrado correctamente
                    </h2>

                    <p class="class-reclamaciones-success-text">
                        Hemos recibido tu reclamo correctamente.
                        Estamos revisando tu caso y te responderemos
                        a la brevedad a través de los datos proporcionados.
                    </p>

                </div>

                {{-- ACTIONS --}}
                <div
                    class="class-reclamaciones-actions"
                    id="class-reclamaciones-actions"
                >

                    <button
                        type="button"
                        class="class-reclamaciones-next"
                        id="class-reclamaciones-next"
                    >

                        <span class="class-reclamaciones-next-text">
                            Siguiente
                        </span>

                        <div class="class-reclamaciones-next-circle">

                            <span class="class-reclamaciones-next-icon">
                                →
                            </span>

                        </div>

                    </button>

                </div>

            </form>

        </div>

    </div>

</section>

<script>

document.addEventListener('DOMContentLoaded', () => {

    let currentStep = 1

    const totalSteps = 3

    const steps = document.querySelectorAll('.class-reclamaciones-step-item')

    const formSteps = document.querySelectorAll('.class-reclamaciones-step-content-form')

    const nextButton = document.getElementById('class-reclamaciones-next')

    const progress = document.getElementById('class-reclamaciones-progress')

    const success = document.getElementById('class-reclamaciones-success')

    const actions = document.getElementById('class-reclamaciones-actions')

    /*
    ==========================================
    UPDATE UI
    ==========================================
    */

    function updateStepsUI(){

        /*
        ==========================================
        PROGRESS
        ==========================================
        */

        steps.forEach((step, index) => {

            const stepNumber = index + 1

            const circle = step.querySelector('.class-reclamaciones-step-circle')

            const label = step.querySelector('.class-reclamaciones-step-label')

            const lines = step.querySelectorAll('.class-reclamaciones-step-line')

            /*
            RESET
            */

            circle.classList.remove(
                'class-reclamaciones-step-circle-active',
                'class-reclamaciones-step-circle-completed'
            )

            label.classList.remove(
                'class-reclamaciones-step-label-active'
            )

            lines.forEach(line => {

                line.classList.remove(
                    'class-reclamaciones-step-line-active'
                )

            })

            /*
            ACTIVE
            */

            if(stepNumber === currentStep){

                circle.classList.add(
                    'class-reclamaciones-step-circle-active'
                )

                label.classList.add(
                    'class-reclamaciones-step-label-active'
                )

                /*
                LEFT + RIGHT
                */

                lines.forEach(line => {

                    line.classList.add(
                        'class-reclamaciones-step-line-active'
                    )

                })

                circle.innerHTML = stepNumber

            }

            /*
            COMPLETED
            */

            if(stepNumber < currentStep){

                circle.classList.add(
                    'class-reclamaciones-step-circle-completed'
                )

                circle.innerHTML = '✓'

                lines.forEach(line => {

                    line.classList.add(
                        'class-reclamaciones-step-line-active'
                    )

                })

            }

            /*
            PENDING
            */

            if(stepNumber > currentStep){

                circle.innerHTML = stepNumber

            }

        })

        /*
        ==========================================
        SHOW STEP
        ==========================================
        */

        formSteps.forEach(step => {

            if(Number(step.dataset.step) === currentStep){

                step.style.display = 'block'

            }else{

                step.style.display = 'none'

            }

        })

        /*
        ==========================================
        BUTTON TEXT
        ==========================================
        */

        if(currentStep === totalSteps){

            document.querySelector(
                '.class-reclamaciones-next-text'
            ).innerText = 'Enviar'

        }else{

            document.querySelector(
                '.class-reclamaciones-next-text'
            ).innerText = 'Siguiente'

        }

    }

    /*
    ==========================================
    NEXT
    ==========================================
    */

    nextButton.addEventListener('click', () => {

        if(currentStep < totalSteps){

            currentStep++

            updateStepsUI()

        }else{

            /*
            HIDE
            */

            progress.style.display = 'none'

            formSteps.forEach(step => {

                step.style.display = 'none'

            })

            actions.style.display = 'none'

            /*
            SHOW SUCCESS
            */

            success.style.display = 'flex'

        }

    })

    /*
    ==========================================
    INIT
    ==========================================
    */

    updateStepsUI()

})

</script>

@endsection