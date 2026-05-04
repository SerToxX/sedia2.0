@extends('layouts.app')

@section('body-class', 'class-proyectos-page')

@section('content')

<section class="class-proyectos-hero">

    <!-- IMAGEN -->
    <img
        src="{{ asset('image/proyectos-inicio.png') }}"
        alt="Proyectos Sedia"
        class="class-proyectos-hero-img">

    <!-- CONTENIDO -->
    <div class="class-proyectos-hero-content">

        <h1 class="class-proyectos-hero-title">
            PROYECTOS CON<br>
            SEDIA PROJECT
        </h1>

        <button class="class-proyectos-hero-button">
            COTIZAR PROYECTO
        </button>

    </div>

</section>

<section class="class-proyectos-info">

    <div class="class-proyectos-info-container">

        <!-- BLOQUE 1 -->

        <div class="class-proyectos-info-top">

            <div class="class-proyectos-info-img-wrap">
                <img
                    src="{{ asset('image/proyecto-espacios.png') }}"
                    class="class-proyectos-info-img">
            </div>

            <div class="class-proyectos-info-text">

                <h2>
                    Creando espacios con<br>
                    diseño y comodidad.
                </h2>

                <p>
                    Sillas de comedor y de barra para interior y exterior, diseñadas
                    para disfrutar cada momento: compartir, relajarse y vivir tu día a
                    día con estilo, comodidad y funcionalidad.
                </p>

            </div>

        </div>


        <!-- BLOQUE 2 -->

        <div class="class-proyectos-negocios">

            <div class="class-proyectos-negocios-text">

                <h3>
                    Soluciones para
                    cada tipo de
                    negocio
                </h3>

                <p>
                    Cada espacio que diseñamos refleja una visión hecha realidad.
                    En Sedia, transformamos ideas en ambientes funcionales,
                    estéticos y listos para disfrutarse desde el primer día.
                </p>

            </div>

            <div class="class-proyectos-negocios-grid">

                <div class="class-proyectos-card">
                    <img src="{{ asset('image/restaurantes.png') }}">
                    <span>Restaurantes</span>
                </div>

                <div class="class-proyectos-card">
                    <img src="{{ asset('image/cafeterias.png') }}">
                    <span>Cafeterías</span>
                </div>

                <div class="class-proyectos-card">
                    <img src="{{ asset('image/bares.png') }}">
                    <span>Bares</span>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="class-proyectos-bloque3">

    <div class="class-proyectos-bloque3-container">

        <div class="class-proyectos-bloque3-text">

            <h2>
                Nuestros proyectos<br>
                cobran vida
            </h2>

            <p>
                Desde cafeterías y restaurantes hasta patios, terrazas y espacios
                comerciales, ofrecemos sillas, taburetes y mesas que se adaptan al
                estilo, uso y dinámica de cada negocio. Mobiliario práctico,
                resistente y listo para el día a día.
            </p>

        </div>

        <div class="class-proyectos-bloque3-img-wrap">
            <img src="{{ asset('image/proyectos-mesa.png') }}">
        </div>

    </div>

</section>

<section class="class-proyectos-beneficios">

    <div class="class-proyectos-beneficios-container">

        <!-- IMAGEN -->

        <div class="class-proyectos-beneficios-img-wrap">
            <img src="{{ asset('image/proyectos-beneficios.png') }}">
        </div>

        <!-- CONTENIDO -->

        <div class="class-proyectos-beneficios-content">

            <h2 class="class-proyectos-beneficios-title">
                ¿Por qué elegirnos?
            </h2>

            <div class="class-proyectos-beneficios-grid">

                <!-- ITEM 1 -->

                <div class="beneficio-item">
                    <span class="beneficio-num">1</span>
                    <h3>Diseño que funciona</h3>
                    <p>
                        Creamos espacios estéticos, cómodos y pensados para el
                        uso diario de tu negocio.
                    </p>
                </div>

                <!-- ITEM 2 -->

                <div class="beneficio-item beneficio-border-left">
                    <span class="beneficio-num">2</span>
                    <h3>Asesoría personalizada</h3>
                    <p>
                        Te guiamos en materiales, estilos y distribución para
                        que tu proyecto quede perfecto desde el inicio.
                    </p>
                </div>

                <!-- ITEM 3 -->

                <div class="beneficio-item beneficio-border-top">
                    <span class="beneficio-num">3</span>
                    <h3>Diseño que funciona</h3>
                    <p>
                        Trabajamos con productos de calidad que resisten el
                        ritmo real de cafeterías, restaurantes y todo tipo de negocios.
                    </p>
                </div>

                <!-- ITEM 4 -->

                <div class="beneficio-item beneficio-border-top beneficio-border-left">
                    <span class="beneficio-num">4</span>
                    <h3>Entregas confiables</h3>
                    <p>
                        Cumplimos tiempos y aseguramos que tu pedido llegue
                        correctamente embalado y en perfectas condiciones.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="class-proyectos-form">

    <div class="class-proyectos-form-container">

        <h2 class="class-proyectos-form-title">
            Tu proyecto empieza con una idea...<br>
            y SEDIA lo hace realidad.
        </h2>

        @include('partials.message-toast')
        <form class="class-proyectos-form-grid"
              id="formContactoProyectos"
              method="POST"
              action="{{ route('contacto.enviar') }}"
              enctype="multipart/form-data"
              novalidate>
            @csrf
            <div class="form-group">
                <label>Nombres y Apellidos</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label>Empresa</label>
                <input type="text" name="empresa">
            </div>
            <div class="form-group">
                <label>Telefono /Celular</label>
                <input type="text" name="telefono">
            </div>
            <div class="form-group">
                <label>DNI / RUC</label>
                <input type="text" name="documento">
            </div>
            <div class="form-group full">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group full">
                <label>Comentanos de tu proyecto</label>
                <textarea name="mensaje" required></textarea>
            </div>
            <div class="form-group full">
                <label>Archivos (Máx. 20 archivos, total 50MB)</label>
                <input type="file" name="archivos[]" id="archivosInput" style="display: none;" multiple accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.xls,.xlsx,.zip,.rar">
                <div id="archivosList" class="class-proyectos-archivos-list"></div>
                <p id="archivosTotal" class="class-proyectos-archivos-total">Total: 0.00 MB / 50.00 MB</p>
            </div>
            <div class="class-proyectos-form-bottom">
                <button type="button" class="btn-file" id="btnSelectFiles">
                    Seleccionar archivos
                </button>
                <button type="submit" class="btn-submit" id="btnSubmit">
                    ENVIAR
                </button>
            </div>
        </form>

    </div>

</section>

<script>
(function () {
    const MAX_FILES = 20;
    const MAX_TOTAL_BYTES = 50 * 1024 * 1024;
    const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'zip', 'rar'];
    const form = document.getElementById('formContactoProyectos');
    const inputFiles = document.getElementById('archivosInput');
    const btnSelectFiles = document.getElementById('btnSelectFiles');
    const btnSubmit = document.getElementById('btnSubmit');
    const archivosList = document.getElementById('archivosList');
    const archivosTotal = document.getElementById('archivosTotal');
    const toastEl = document.getElementById('classMessageToast');
    const toastTitle = document.getElementById('classMessageTitle');
    const toastText = document.getElementById('classMessageText');
    const toastIcon = document.getElementById('classMessageIcon');
    const toastClose = document.getElementById('classMessageClose');
    const toastProgressBar = document.getElementById('classMessageProgressBar');
    let toastTimer = null;
    let selectedFiles = [];
    let dt = new DataTransfer();
    function formatMB(bytes) {
        return (bytes / (1024 * 1024)).toFixed(2);
    }
    function getTotalBytes(filesArray) {
        return filesArray.reduce((acc, f) => acc + (f.size || 0), 0);
    }
    function getFileExt(fileName) {
        const parts = fileName.split('.');
        return parts.length > 1 ? parts.pop().toLowerCase() : '';
    }
    function showToast(type, title, message, durationMs = 8000) {
        if (!toastEl) return;
        if (toastTimer) {
            clearTimeout(toastTimer);
            toastTimer = null;
        }
        toastEl.classList.remove('class-message-hidden', 'class-message-success', 'class-message-error', 'class-message-warning', 'class-message-info');
        toastEl.classList.add('class-message-' + type);
        toastTitle.textContent = title;
        toastText.innerHTML = message;
        if (type === 'success') toastIcon.textContent = '✓';
        if (type === 'error') toastIcon.textContent = '!';
        if (type === 'warning') toastIcon.textContent = '!';
        if (type === 'info') toastIcon.textContent = 'i';
        toastProgressBar.style.animation = 'none';
        toastProgressBar.offsetHeight;
        toastProgressBar.style.animation = 'class-message-progress ' + durationMs + 'ms linear forwards';
        toastEl.classList.add('class-message-show');
        toastTimer = setTimeout(() => {
            hideToast();
        }, durationMs);
    }
    function hideToast() {
        if (!toastEl) return;
        toastEl.classList.remove('class-message-show');
        toastEl.classList.add('class-message-hidden');
    }
    if (toastClose) {
        toastClose.addEventListener('click', hideToast);
    }
    function setFieldError(fieldName, hasError) {
        const field = form.querySelector('[name="' + fieldName + '"]');
        if (!field) return;
        field.classList.toggle('class-proyectos-input-error', hasError);
    }
    function clearAllFieldErrors() {
        const fields = form.querySelectorAll('input, textarea');
        fields.forEach(function (el) {
            el.classList.remove('class-proyectos-input-error');
        });
    }
    function syncInputFiles() {
        dt = new DataTransfer();
        selectedFiles.forEach(function (file) {
            dt.items.add(file);
        });
        inputFiles.files = dt.files;
    }
    function renderFilesList() {
        archivosList.innerHTML = '';
        if (selectedFiles.length === 0) {
            archivosList.innerHTML = '<p class="class-proyectos-archivos-empty">No hay archivos seleccionados.</p>';
        } else {
            const ul = document.createElement('ul');
            ul.className = 'class-proyectos-archivos-items';
            selectedFiles.forEach(function (file, index) {
                const li = document.createElement('li');
                li.className = 'class-proyectos-archivo-item';
                const info = document.createElement('span');
                info.className = 'class-proyectos-archivo-info';
                info.textContent = (index + 1) + '. ' + file.name + ' (' + formatMB(file.size) + ' MB)';
                const btnRemove = document.createElement('button');
                btnRemove.type = 'button';
                btnRemove.className = 'class-proyectos-archivo-remove';
                btnRemove.textContent = 'Quitar';
                btnRemove.addEventListener('click', function () {
                    selectedFiles.splice(index, 1);
                    syncInputFiles();
                    renderFilesList();
                });
                li.appendChild(info);
                li.appendChild(btnRemove);
                ul.appendChild(li);
            });
            archivosList.appendChild(ul);
        }
        const totalBytes = getTotalBytes(selectedFiles);
        archivosTotal.textContent = 'Total: ' + formatMB(totalBytes) + ' MB / 50.00 MB';
    }
    function validateRequiredFields() {
        const requiredFields = [
            { name: 'nombre', label: 'Nombres y Apellidos' },
            { name: 'email', label: 'Email' },
            { name: 'mensaje', label: 'Comentanos de tu proyecto' }
        ];
        const missing = [];
        requiredFields.forEach(function (item) {
            const field = form.querySelector('[name="' + item.name + '"]');
            const value = field ? field.value.trim() : '';
            const invalid = value === '';
            setFieldError(item.name, invalid);
            if (invalid) missing.push(item.label);
        });
        return missing;
    }
    function validateFilesClient() {
        const errors = [];
        if (selectedFiles.length > MAX_FILES) {
            errors.push('Solo se permiten hasta ' + MAX_FILES + ' archivos.');
        }
        const invalidType = selectedFiles.find(function (f) {
            return !ALLOWED_EXTENSIONS.includes(getFileExt(f.name));
        });
        if (invalidType) {
            errors.push('Archivo no permitido: ' + invalidType.name + '.');
        }
        const totalBytes = getTotalBytes(selectedFiles);
        if (totalBytes > MAX_TOTAL_BYTES) {
            errors.push('El total de archivos excede 50MB (actual: ' + formatMB(totalBytes) + 'MB).');
        }
        if (errors.length > 0) {
            setFieldError('archivos[]', true);
        } else {
            setFieldError('archivos[]', false);
        }
        return errors;
    }
    function parseServerErrors(errorsObj) {
        const messages = [];
        const fieldsWithErrors = new Set();
        if (!errorsObj || typeof errorsObj !== 'object') {
            return { messages: [], fields: [] };
        }
        Object.keys(errorsObj).forEach(function (key) {
            const msgs = errorsObj[key] || [];
            msgs.forEach(function (m) {
                messages.push(m);
            });
            if (key.startsWith('archivos')) {
                fieldsWithErrors.add('archivos[]');
            } else {
                fieldsWithErrors.add(key);
            }
        });
        return {
            messages: messages,
            fields: Array.from(fieldsWithErrors)
        };
    }
    btnSelectFiles.addEventListener('click', function () {
        inputFiles.click();
    });
    inputFiles.addEventListener('change', function (e) {
        const incoming = Array.from(e.target.files || []);
        if (incoming.length === 0) return;
        const beforeCount = selectedFiles.length;
        selectedFiles = selectedFiles.concat(incoming);
        if (selectedFiles.length > MAX_FILES) {
            selectedFiles = selectedFiles.slice(0, MAX_FILES);
            showToast(
                'warning',
                'Límite de archivos',
                'Solo se permiten hasta 20 archivos.'
            );
        }
        syncInputFiles();
        renderFilesList();
        if (beforeCount === selectedFiles.length) {
            showToast('info', 'Archivos', 'No se agregaron archivos nuevos.');
        }
        inputFiles.value = '';
    });
    form.querySelectorAll('input, textarea').forEach(function (el) {
        el.addEventListener('input', function () {
            if (el.classList.contains('class-proyectos-input-error') && el.value.trim() !== '') {
                el.classList.remove('class-proyectos-input-error');
            }
        });
    });
    renderFilesList();
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        clearAllFieldErrors();
        const missingFields = validateRequiredFields();
        const fileErrors = validateFilesClient();
        if (missingFields.length > 0 || fileErrors.length > 0) {
            let html = '';
            if (missingFields.length > 0) {
                html += '<strong>Faltan campos obligatorios:</strong><br>' + missingFields.join(', ') + '<br><br>';
            }
            if (fileErrors.length > 0) {
                html += '<strong>Archivos:</strong><br>' + fileErrors.join('<br>');
            }
            showToast('error', 'Revisa el formulario', html.trim());
            return;
        }
        const formData = new FormData(form);
        selectedFiles.forEach(function (file) {
            formData.append('archivos[]', file);
        });
        btnSubmit.disabled = true;
        btnSubmit.textContent = 'Enviando...';
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(function (response) {
            return response.json()
                .then(function (data) {
                    return { ok: response.ok, status: response.status, data: data };
                })
                .catch(function () {
                    return {
                        ok: false,
                        status: response.status,
                        data: {
                            success: false,
                            message: 'Error del servidor. Intenta nuevamente.'
                        }
                    };
                });
        })
        .then(function (result) {
            const data = result.data || {};
            if (result.ok && data.success) {
                showToast('success', 'Mensaje enviado', 'Tu mensaje fue enviado correctamente.');
                form.reset();
                selectedFiles = [];
                syncInputFiles();
                renderFilesList();
                clearAllFieldErrors();
                return;
            }
            if (result.status === 422) {
                const parsed = parseServerErrors(data.errors);
                parsed.fields.forEach(function (fieldName) {
                    if (fieldName === 'archivos[]') {
                        setFieldError('archivos[]', true);
                        return;
                    }
                    setFieldError(fieldName, true);
                });
                let html = '';
                if (Array.isArray(data.missing_fields) && data.missing_fields.length > 0) {
                    html += '<strong>Faltan campos obligatorios:</strong><br>' + data.missing_fields.join(', ') + '<br><br>';
                }
                if (parsed.messages.length > 0) {
                    html += '<strong>Detalle:</strong><br>' + parsed.messages.join('<br>');
                } else {
                    html += data.message || 'Error de validación.';
                }
                showToast('error', 'Corrige los campos', html);
                return;
            }
            showToast('error', 'Error', data.message || 'Ocurrió un error al enviar. Intenta nuevamente.');
        })
        .catch(function (error) {
            showToast('error', 'Error de conexión', 'No se pudo enviar el formulario. ' + error.message);
        })
        .finally(function () {
            btnSubmit.disabled = false;
            btnSubmit.textContent = 'ENVIAR';
        });
    });
})();
</script>

@endsection