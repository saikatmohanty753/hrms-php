@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show msg-sess" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fal fa-trash-alt"></i></span>
    </button>
    <strong>Opps !</strong>&nbsp; {{ Session::get('error') }}
</div>
{{ Session::forget('error') }}
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show msg-sess" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fal fa-times-circle"></i></span>
    </button>
    <strong>Success !</strong>&nbsp; {{ Session::get('success') }}
</div>
{{ Session::forget('success') }}
@endif
<script type="text/javascript">
    $(document).ready(function() {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 100,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        setTimeout(function(){
            $('.msg-sess').fadeOut('slow');
        },2000);

        @if(!empty($errors->all()) && count($errors->all()) > 0)
        @foreach($errors->all() as $error)
        console.log('Error: ');
        toastr.error("{{ $error }}");
        @endforeach
        @endif
    } );
</script>
