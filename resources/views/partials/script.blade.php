   <!-- JAVASCRIPT -->
   <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
   <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

   <!-- glightbox js -->
   <script src="{{asset('assets/libs/glightbox/js/glightbox.min.js')}}"></script>

   <!-- Swiper JS -->
   <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>

   <!-- fg-emoji-picker JS -->
   <script src="{{asset('assets/libs/fg-emoji-picker/fgEmojiPicker.js')}}"></script>

   <!-- page init -->
   <script src="{{asset('assets/js/pages/index.init.js')}}"></script>

   <script src="{{asset('assets/js/app.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
    }
    @if(Session::has('success'))
        toastr.success("{{ session('success') }}")
    @endif
  </script>
  <script>
    toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
    }
    @if(Session::has('error'))
        toastr.error("{{ session('error') }}")
    @endif
  </script>
