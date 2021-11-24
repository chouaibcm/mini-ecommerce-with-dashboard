@if (session('success'))

    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 5000,
            killer: true
        }).show();
    </script>

@endif

@if (session('error'))

    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: "{{ session('error') }}",
            timeout: 5000,
            killer: true
        }).show();
    </script>

@endif

@if (session('alert'))

    <script>
        new Noty({
            type: 'alert',
            layout: 'topRight',
            text: "{{ session('alert') }}",
            timeout: 5000,
            killer: true
        }).show();
    </script>

@endif

@if (session('warning'))

    <script>
        new Noty({
            type: 'warning',
            layout: 'topRight',
            text: "{{ session('warning') }}",
            timeout: 5000,
            killer: true
        }).show();
    </script>

@endif
