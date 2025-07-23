<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .toast-success, .toast-info, .toast-warning, .toast-error {
        white-space: nowrap;
        text-align: center;
    }
</style>
<script>
    // Toastr configuration (optional)
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000",
    };

    // Display Toastr notifications based on session messages
    @if (session()->has('success'))
        toastr.success('{{ session('success') }}', 'Success');
    @endif
	@if (session()->has('info'))
        toastr.info('{{ session('info') }}', 'Info');
    @endif
	@if (session()->has('warning'))
        toastr.warning('{{ session('warning') }}', 'Warning');
    @endif
	@if (session()->has('error'))
        toastr.error('{{ session('error') }}', 'Error');
	  @endif
 
</script>