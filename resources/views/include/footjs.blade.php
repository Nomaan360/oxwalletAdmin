<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
<!-- <script src="{{ asset('vendor/js/bootstrap-old.js') }}"></script> -->
<script src="{{ asset('vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('vendor/js/menu.js') }}"></script>
<!-- Vendors JS -->
<script src="{{ asset('vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('vendor/libs/@form-validation/popular.js') }}"></script>
<script src="{{ asset('vendor/libs/@form-validation/bootstrap5.js') }}"></script>
<script src="{{ asset('vendor/libs/@form-validation/auto-focus.js') }}"></script>
<script src="{{ asset('vendor/libs/toastr/toastr.js') }}"></script>

<script src="{{ asset('js/ui-toasts.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(function() {
        var url = window.location.href;
        var menulink = $('.menu-link').find(`a[href="${url}"]`);
    });
    $(function() {
        var pgurl = window.location.href;
        // console.log(pgurl);
        $('.menu-item').removeClass('active');
        $('.menu-item').removeClass('open');
        $(".menu-inner .menu-item .menu-link").each(function(){
            // console.log($(this).attr("href"))
            if($(this).attr("href") == pgurl || $(this).attr("href") == '') {
                $(this).parent().addClass("active");
            }
        })
        $('.menu-link.active').parent('.menu-sub').parent('.menu-item').addClass('open');
        $('.menu-item.active').parent('.menu-sub').parent('.menu-item').addClass('open');
        $('.menu-item.open').parent('.menu-sub').parent('.menu-item').addClass('open');
        $('.menu-item.open').parent('.menu-sub').parent('.menu-item').addClass('open');
        // console.log($('.menu-link.active').parent('.menu-sub').length);
    });
</script>

@if(Session::has('toast'))
    <script type="text/javascript">
        var toast = @json(Session::get('toast'));
        toastr.success(toast['message']);       
    </script>
@elseif(Session::has('errtoast'))
  <script type="text/javascript">
        var toast = @json(Session::get('errtoast'));
        toastr.error(toast['message']);       
    </script>
@endif