<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Sistema | IncanatoApps.com" />
    <meta name="author" content="IncanatoApps" />
    <meta name="description" content="Sistema." />
    <meta name="keywords" content="Sistema, IncanatoApps" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    @vite(['resources/css/adminlte.css'])
    <!--end::Required Plugin(AdminLTE)-->
    @stack('estilos')
    @vite(['resources/css/style.css'])
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('plantilla.header')
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('plantilla.menu')
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <div class="container-fluid"></div>
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        @yield('contenido')
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <strong>Copyright © 2025 <a href="#" class="text-decoration-none">Incanatoapps</a>.</strong>
        All rights reserved.
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->

    {{-- ======================================================= --}}
    {{--         HTML DEL MODAL PARA COMPARTIR ENLACE            --}}
    {{-- (Va aquí, dentro del body, antes de los scripts)        --}}
    {{-- ======================================================= --}}
    @auth
    <div class="modal fade" id="shareLinkModal" tabindex="-1" aria-labelledby="shareLinkModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="shareLinkModalLabel"><i class="bi bi-share-fill me-2"></i> ¡Comparte tu Tienda!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Este es el enlace público a tu tienda. Cópialo y compártelo con tus clientes.</p>
            <div class="input-group">
                <input type="text" class="form-control" value="{{ route('mostrarProductosPublico', auth()->user()) }}" id="storeLinkInput" readonly>
                <button class="btn btn-primary" type="button" id="copyLinkBtn">
                    <i class="bi bi-clipboard me-1"></i> Copiar
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endauth
    {{-- ======================================================= --}}


    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)-->
    <!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)-->
    <!--begin::Required Plugin(AdminLTE)-->
    @vite(['resources/js/adminlte.js'])
    <!--end::Required Plugin(AdminLTE)-->
    <!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
    @stack('scripts')

    {{-- ======================================================= --}}
    {{--            SCRIPT PARA COPIAR EL ENLACE                 --}}
    {{-- (Va aquí, al final de todo, para asegurar que      --}}
    {{-- Bootstrap y el modal ya se hayan cargado)               --}}
    {{-- ======================================================= --}}
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const copyButton = document.getElementById('copyLinkBtn');
          const linkInput = document.getElementById('storeLinkInput');

          if (copyButton) {
              copyButton.addEventListener('click', function () {
                  navigator.clipboard.writeText(linkInput.value).then(function() {
                      const originalText = copyButton.innerHTML;
                      copyButton.innerHTML = '<i class="bi bi-check-lg me-1"></i> ¡Copiado!';
                      setTimeout(function() {
                          copyButton.innerHTML = originalText;
                      }, 2000);
                  }).catch(function(err) {
                      console.error('Error al intentar copiar el enlace: ', err);
                      alert('Error al copiar. Por favor, selecciona el texto manualmente.');
                  });
              });
          }
      });
    </script>
    
  </body>
  <!--end::Body-->
</html>