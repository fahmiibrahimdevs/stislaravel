<div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">Stisla</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <x-sidebar-dropdown title="Dashboard" icon="fas fa-fire" :active="['dashboard', 'dashboard.ecommerce']">
                            <x-sidebar-link route="dashboard" title="General Dashboard" />
                            <x-sidebar-link route="dashboard.ecommerce" title="Ecommerce Dashboard" />
                        </x-sidebar-dropdown>

                        <li class="menu-header">Starter</li>
                        <x-sidebar-dropdown title="Layout" icon="fas fa-columns">
                            <x-sidebar-link href="#" title="Default Layout" />
                            <x-sidebar-link href="#" title="Transparent Sidebar" />
                            <x-sidebar-link href="#" title="Top Navigation" />
                        </x-sidebar-dropdown>
                        
                        <x-sidebar-link route="pages.blank" title="Blank Page" icon="far fa-square" />

                        <x-sidebar-dropdown title="Bootstrap" icon="fas fa-th" active="pages.bootstrap-*">
                            <x-sidebar-link route="pages.bootstrap-alert" title="Alert" />
                            <x-sidebar-link route="pages.bootstrap-badge" title="Badge" />
                            <x-sidebar-link route="pages.bootstrap-breadcrumb" title="Breadcrumb" />
                            <x-sidebar-link route="pages.bootstrap-buttons" title="Buttons" />
                            <x-sidebar-link route="pages.bootstrap-card" title="Card" />
                            <x-sidebar-link route="pages.bootstrap-carousel" title="Carousel" />
                            <x-sidebar-link route="pages.bootstrap-collapse" title="Collapse" />
                            <x-sidebar-link route="pages.bootstrap-dropdown" title="Dropdown" />
                            <x-sidebar-link route="pages.bootstrap-form" title="Form" />
                            <x-sidebar-link route="pages.bootstrap-list-group" title="List Group" />
                            <x-sidebar-link route="pages.bootstrap-media-object" title="Media Object" />
                            <x-sidebar-link route="pages.bootstrap-modal" title="Modal" />
                            <x-sidebar-link route="pages.bootstrap-nav" title="Nav" />
                            <x-sidebar-link route="pages.bootstrap-navbar" title="Navbar" />
                            <x-sidebar-link route="pages.bootstrap-pagination" title="Pagination" />
                            <x-sidebar-link route="pages.bootstrap-popover" title="Popover" />
                            <x-sidebar-link route="pages.bootstrap-progress" title="Progress" />
                            <x-sidebar-link route="pages.bootstrap-table" title="Table" />
                            <x-sidebar-link route="pages.bootstrap-tooltip" title="Tooltip" />
                            <x-sidebar-link route="pages.bootstrap-typography" title="Typography" />
                        </x-sidebar-dropdown>

                        <li class="menu-header">Stisla</li>
                        <x-sidebar-dropdown title="Components" icon="fas fa-th-large" active="pages.components-*">
                            <x-sidebar-link route="pages.components-article" title="Article" />
                            <x-sidebar-link route="pages.components-avatar" title="Avatar" linkClass="beep beep-sidebar" />
                            <x-sidebar-link route="pages.components-chat-box" title="Chat Box" />
                            <x-sidebar-link route="pages.components-empty-state" title="Empty State" linkClass="beep beep-sidebar" />
                            <x-sidebar-link route="pages.components-gallery" title="Gallery" />
                            <x-sidebar-link route="pages.components-hero" title="Hero" linkClass="beep beep-sidebar" />
                            <x-sidebar-link route="pages.components-multiple-upload" title="Multiple Upload" />
                            <x-sidebar-link route="pages.components-pricing" title="Pricing" linkClass="beep beep-sidebar" />
                            <x-sidebar-link route="pages.components-statistic" title="Statistic" />
                            <x-sidebar-link route="pages.components-tab" title="Tab" />
                            <x-sidebar-link route="pages.components-table" title="Table" />
                            <x-sidebar-link route="pages.components-user" title="User" />
                            <x-sidebar-link route="pages.components-wizard" title="Wizard" linkClass="beep beep-sidebar" />
                        </x-sidebar-dropdown>

                        <x-sidebar-dropdown title="Forms" icon="far fa-file-alt" active="pages.forms-*">
                            <x-sidebar-link route="pages.forms-advanced-form" title="Advanced Form" />
                            <x-sidebar-link route="pages.forms-editor" title="Editor" />
                            <x-sidebar-link route="pages.forms-validation" title="Validation" />
                        </x-sidebar-dropdown>

                        <x-sidebar-dropdown title="Google Maps" icon="fas fa-map-marker-alt" active="pages.gmaps-*">
                            <x-sidebar-link route="pages.gmaps-advanced-route" title="Advanced Route" />
                            <x-sidebar-link route="pages.gmaps-draggable-marker" title="Draggable Marker" />
                            <x-sidebar-link route="pages.gmaps-geocoding" title="Geocoding" />
                            <x-sidebar-link route="pages.gmaps-geolocation" title="Geolocation" />
                            <x-sidebar-link route="pages.gmaps-marker" title="Marker" />
                            <x-sidebar-link route="pages.gmaps-multiple-marker" title="Multiple Marker" />
                            <x-sidebar-link route="pages.gmaps-route" title="Route" />
                            <x-sidebar-link route="pages.gmaps-simple" title="Simple" />
                        </x-sidebar-dropdown>

                        <x-sidebar-dropdown title="Modules" icon="fas fa-plug" active="pages.modules-*">
                            <x-sidebar-link route="pages.modules-calendar" title="Calendar" />
                            <x-sidebar-link route="pages.modules-chartjs" title="ChartJS" />
                            <x-sidebar-link route="pages.modules-datatables" title="DataTables" />
                            <x-sidebar-link route="pages.modules-flag" title="Flag" />
                            <x-sidebar-link route="pages.modules-font-awesome" title="Font Awesome" />
                            <x-sidebar-link route="pages.modules-ion-icons" title="Ion Icons" />
                            <x-sidebar-link route="pages.modules-owl-carousel" title="Owl Carousel" />
                            <x-sidebar-link route="pages.modules-sparkline" title="Sparkline" />
                            <x-sidebar-link route="pages.modules-sweet-alert" title="Sweet Alert" />
                            <x-sidebar-link route="pages.modules-toastr" title="Toastr" />
                            <x-sidebar-link route="pages.modules-vector-map" title="Vector Map" />
                            <x-sidebar-link route="pages.modules-weather-icon" title="Weather Icon" />
                        </x-sidebar-dropdown>

                        <li class="menu-header">Pages</li>
                        <x-sidebar-dropdown title="Auth" icon="far fa-user" :active="['login', 'register', 'password.*']">
                            <x-sidebar-link route="password.request" title="Forgot Password" />
                            <x-sidebar-link route="login" title="Login" />
                            <x-sidebar-link route="login" title="Login 2" linkClass="beep beep-sidebar" />
                            <x-sidebar-link route="register" title="Register" />
                            <x-sidebar-link route="password.request" title="Reset Password" />
                        </x-sidebar-dropdown>

                        <x-sidebar-dropdown title="Errors" icon="fas fa-exclamation" active="pages.errors-*">
                            <x-sidebar-link route="pages.errors-503" title="503" />
                            <x-sidebar-link route="pages.errors-403" title="403" />
                            <x-sidebar-link route="pages.errors-404" title="404" />
                            <x-sidebar-link route="pages.errors-500" title="500" />
                        </x-sidebar-dropdown>

                        <x-sidebar-dropdown title="Features" icon="fas fa-bicycle" active="pages.features-*">
                            <x-sidebar-link route="pages.features-activities" title="Activities" />
                            <x-sidebar-link route="pages.features-post-create" title="Post Create" />
                            <x-sidebar-link route="pages.features-posts" title="Posts" />
                            <x-sidebar-link route="pages.features-profile" title="Profile" />
                            <x-sidebar-link route="pages.features-settings" title="Settings" />
                            <x-sidebar-link route="pages.features-setting-detail" title="Setting Detail" />
                            <x-sidebar-link route="pages.features-tickets" title="Tickets" />
                        </x-sidebar-dropdown>

                        <x-sidebar-dropdown title="Utilities" icon="fas fa-ellipsis-h" active="pages.utilities-*">
                            <x-sidebar-link route="pages.utilities-contact" title="Contact" />
                            <x-sidebar-link route="pages.utilities-invoice" title="Invoice" />
                            <x-sidebar-link route="pages.utilities-subscribe" title="Subscribe" />
                        </x-sidebar-dropdown>

                        <x-sidebar-link route="pages.credits" title="Credits" icon="fas fa-pencil-ruler" />
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i>
                            <div>Documentation</div>
                        </a>
                    </div>
                </aside>
            </div>