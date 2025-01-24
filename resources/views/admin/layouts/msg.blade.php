{{-- LOGIN --}}
@if(Session::has('userlogin'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '50px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('userlogin') }}");
 </script>
 @endif

 {{-- UPLOAD FILE --}}
@if(Session::has('Uploded'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '50px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('Uploded') }}");
 </script>

@endif

 {{-- DELETED --}}
@if(Session::has('deleted'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // White text color
            toastElement.style.backgroundColor = 'red'; // Red background color
            toastElement.style.marginTop = '50px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font weight
        }
    }
    toastr.success("{{ Session::get('deleted') }}");
</script>

 @endif