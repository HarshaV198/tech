<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
<script>
    $.notify({
        message: '{{ $key }}'
    }, {
        type: '{{ $type }}'
    });
</script>