<script src="{{ asset('public/vendor/sweetalert/sweetalert.all.js')  }}"></script>
<script>
    $(document.body).on('click', '.js-hapus', function(event) {
        event.preventDefault();
        var $form = $(this).closest('form');
        Swal.fire({
            title: 'Yakin Ingin Hapus?',   
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
                $form.submit();
                Swal.fire('Dihapus!', 'Berita Berhasil Dihapus', 'success')
            }
            else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swal.fire(
                'Dibatalkan',
                'Berita Batal Dihapus!',
                'error'
                )
            }
        })
    });
</script>

@if (Session::has('alert.config'))
    @if(config('sweetalert.animation.enable'))
        <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
    @endif
    <script src="{{ asset('public/vendor/sweetalert/sweetalert.all.js')  }}"></script>
    <script>
        Swal.fire({!! Session::pull('alert.config') !!});
    </script>
@endif