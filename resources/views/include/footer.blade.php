<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
        <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
        <div class="text-body mb-2 mb-md-0">
            © <script>
            document.write(new Date().getFullYear())

            </script>, OxWallet
        </div>
        <div class="d-flex align-items-center gap-5">
            <div class="text-center">
                <a href="#">OxWallet</a>
            </div>
            @if (Session::has('merchantid'))
                <div class="text-end">
                    <a href="#" class="menu-link">
                        <div data-i18n="Support">Support</div>
                    </a>
                </div>
            @endif
        </div>

        <!-- <div class="d-none d-lg-inline-block">

            <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
            <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

            <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


            <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

        </div> -->
        </div>
    </div>
</footer>
<!-- / Footer -->
