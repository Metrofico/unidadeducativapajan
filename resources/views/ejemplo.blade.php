{{-- Llamar a una referencia de hoja de estilo en cascada --}}
<link rel="stylesheet" href="{{asset('css/ejemplo.css')}}">
{{-- CUERPO --}}
<div class="replacer-root container">
    Esta es una plantilla de ejemplo
</div>
{{-- Codigo script al final y despues del cuerpo --}}
<script>
    $.getScript("{{asset('js/AOSInit.js')}}");
</script>

