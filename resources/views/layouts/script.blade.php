{{--<!-- jQuery 3 -->--}}
<script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>

<!-- SlimScroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- Minimalelite Admin App -->
<script src="{{asset('js/template.js')}}"></script>

<!-- Minimalelite Admin for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>

<!-- CK Editor -->
{{--<script src="{{asset('assets/vendor_components/ckeditor/ckeditor.js')}}"></script>--}}
<script src="{{asset('assets/vendor_components/ckeditor/ckeditor5.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
{{--<script src="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>--}}

<!-- Minimalelite Admin for editor -->
{{--<script src="{{asset('js/pages/editor.js')}}"></script>--}}
<script src="{{asset('js/pages/ckeditor.js')}}"></script>

<script>
    $.ajaxSetup({
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{csrf_token()}}');
        }
    });
</script>
<!-- custom -->
<script src="{{asset('js/custom.js')}}"></script>

<script>
    $(document).ready(function() {
        $(".alert").fadeTo(1500, 500).slideUp(500, function(){
            $(".alert").slideUp(2000);
        });
    });
</script>

