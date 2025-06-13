
@php
    use Illuminate\Support\Facades\DB;
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"  style="border-right: 1px solid #3a3a3a;">
    <div class="app-brand demo py-3">
        <a class="app-brand-link">
            <span class="app-brand-logo demo">
                <span style="color:var(--bs-primary);">
                    <img src="{{ asset('vendor/img/F-light.png') }}" width="88">
                </span>
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-semibold ms-2">9 Pay</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                    fill-opacity="0.9" />
                <path
                    d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                    fill-opacity="0.4" />
            </svg>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1 mt-3 gap-2">
        <!-- Dashboards -->
        @if (Session::has('adminid'))
            
        <li class="menu-item">
            <a href="{{ url(route('admin_dashboard')) }}" class="menu-link">
                <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Admin Dashboard">Admin Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url(route('add_privacy_policy')) }}" class="menu-link">
                <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Admin Dashboard">Add Privacy Policy</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url(route('admin_logout')) }}" class="menu-link">
                <i class='menu-icon tf-icons ri-user-line'></i>
                <div data-i18n="Logout">Logout</div>
            </a>
        </li>
        @else 
            <li class="menu-item">
                <a href="{{ url(route('merchant_dashboard')) }}" class="menu-link">
                    <i class='menu-icon tf-icons ri-home-smile-line'></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
            <!-- <li class="menu-item">
                <a href="{{ url(route('merchant_add_credit')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-bank-card-line "></i>
                    <div data-i18n="Add Credit">Add Credit</div>
                </a>
            </li> -->
            <!-- <li class="menu-item">
                <a href="{{ url(route('merchant_deposit_address')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-luggage-deposit-line"></i>
                    <div data-i18n="Deposit Address">Deposit Address</div>
                </a>
            </li> -->
            {{-- <li class="menu-item">
                <a href="{{ url(route('merchant_transaction')) }}" class="menu-link">
                    <i class='menu-icon tf-icons ri-bill-line'></i>
                    <div data-i18n="Transactions">Transactions</div>
                </a>
            </li> --}}
            {{-- <li class="menu-item">
                <a href="{{ url(route('merchant_project_details')) }}" class="menu-link">
                    <i class='menu-icon tf-icons ri-bill-line'></i>
                    <div data-i18n="Project Details">Project Details</div>
                </a>
            </li> --}}
            <li class="menu-item">
                <a href="{{ url(route('merchant_project_transactions')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-history-fill"></i>
                    <div data-i18n="Transactions History">Transactions History</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url(route('merchant_support_ticket')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-ticket-line"></i>
                    <div data-i18n="Support Tickets">Support Tickets</div>
                </a>
            </li>
            @php
                $merchantid= Session::get('merchantid');
                $merchant = DB::table('merchants')->where('id', $merchantid)->first();                
            @endphp
            @if($merchant->api_postfix=='techmont')
            <li class="menu-item">
                <a href="{{ url(route('merchant_withdrawl_transaction')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-wallet-3-line"></i> 
                    <div data-i18n="Withdrawl Transactions">Withdrawl Transactions</div>
                </a>
            </li>
            @endif
            <!-- <li class="menu-item">
                <a href="{{ url(route('merchant_project_history')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-file-history-line"></i>
                    <div data-i18n="Credit History">Credit History</div>
                </a>
            </li> -->
            <!-- <li class="menu-item">
                <a href="{{ url(route('merchant_settings')) }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-settings-line"></i>
                    <div data-i18n="Settings">Settings</div>
                </a>
            </li> -->
            {{-- <li class="menu-item">
                <a href="{{ url(route('merchant_project_wallet')) }}" class="menu-link">
                    <i class='menu-icon tf-icons ri-bill-line'></i>
                    <div data-i18n="Project Wallet">Project Wallet</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url(route('merchant_recent_transactions')) }}" class="menu-link">
                    <i class='menu-icon tf-icons ri-bill-line'></i>
                    <div data-i18n="Recent Transactions">Recent Transactions</div>
                </a>
            </li> --}}
    
            <li class="menu-item">
                <a href="{{ url(route('merchant_logout')) }}" class="menu-link">
                    <i class='menu-icon tf-icons ri-user-line'></i>
                    <div data-i18n="Logout">Logout</div>
                </a>
            </li>
        @endif

    </ul>
</aside>
