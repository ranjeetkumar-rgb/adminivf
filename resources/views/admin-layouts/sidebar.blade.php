    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>
                    <li>
                        <a href="{{ url('admin') }}" class="waves-effect">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">@lang('translation.Dashboards')</span>
                        </a>
                    </li>

                    <li class="menu-title" data-key="t-pages">@lang('translation.Pages')</li>
                    @php
                        $consultationRoutes = ['admin.consultations.index', 'admin.consultations.show', 'admin.consultations.edit'];
                    @endphp
                    @can('view-consultations')
                    <li class="{{ in_array(Route::currentRouteName(), $consultationRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $consultationRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="phone"></i>
                            <span>Consultations</span>
                            @if(isset($stats) && $stats['new'] > 0)
                                <span class="badge bg-danger rounded-pill ms-auto">{{ $stats['new'] }}</span>
                            @endif
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $consultationRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('admin.consultations.index') }}"
                                    class="{{ Route::currentRouteName() == 'admin.consultations.index' ? 'active' : '' }}">All Consultations</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.consultations.index', ['status' => 'new']) }}"
                                    class="{{ request('status') == 'new' ? 'active' : '' }}">New Consultations</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.consultations.index', ['status' => 'contacted']) }}"
                                    class="{{ request('status') == 'contacted' ? 'active' : '' }}">Contacted</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.consultations.index', ['status' => 'consulted']) }}"
                                    class="{{ request('status') == 'consulted' ? 'active' : '' }}">Consulted</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.consultations.index', ['status' => 'cancelled']) }}"
                                    class="{{ request('status') == 'cancelled' ? 'active' : '' }}">Cancelled</a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @php
                        $blogCategoryRoutes = ['admin.blog-categories.index', 'admin.blog-categories.create', 'admin.blog-categories.edit'];
                    @endphp
                    @can('view-blog-categories')
                    <li class="{{ in_array(Route::currentRouteName(), $blogCategoryRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $blogCategoryRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="folder"></i>
                            <span>Blog Categories</span>
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $blogCategoryRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('admin.blog-categories.index') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog-categories.index' ? 'active' : '' }}">Manage Categories</a>
                            </li>
                            @can('create-blog-categories')
                            <li>
                                <a href="{{ route('admin.blog-categories.create') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog-categories.create' ? 'active' : '' }}">Add Category</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    @php
                        $blogRoutes = ['admin.blog.index', 'admin.blog.create', 'admin.blog.edit', 'admin.blog.engagement.index', 'admin.blog.engagement.comments', 'admin.blog.engagement.user-profiles']; // Add all related routes
                    @endphp
                    @can('view-blogs')
                    <li class="{{ in_array(Route::currentRouteName(), $blogRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $blogRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="edit"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $blogRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('admin.blog.index') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog.index' ? 'active' : '' }}">Manage
                                    Blogs</a>
                            </li>
                            @can('create-blogs')
                            <li>
                                <a href="{{ route('admin.blog.create') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog.create' ? 'active' : '' }}">Add
                                    Blog</a>
                            </li>
                            @endcan
                            <li>
                                <a href="{{ route('admin.blog.engagement.index') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog.engagement.index' ? 'active' : '' }}">
                                    <i class="fas fa-chart-line me-2"></i>Engagement Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.engagement.comments') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog.engagement.comments' ? 'active' : '' }}">
                                    <i class="fas fa-comments me-2"></i>Manage Comments
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.engagement.user-profiles') }}"
                                    class="{{ Route::currentRouteName() == 'admin.blog.engagement.user-profiles' ? 'active' : '' }}">
                                    <i class="fas fa-users me-2"></i>User Profiles
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                   
                    @php
                        $testimonialRoutes = ['testimonials.index', 'testimonials.create', 'testimonials.edit', 'testimonials.show']; // Add all related routes
                        $faqRoutes = ['admin.faq.index', 'admin.faq.create', 'admin.faq.edit', 'admin.faq.show'];
                        $siteSettings =['admin.view-site-settings','admin.create-site-settings','admin.edit-site-settings','admin.delete-site-settings'];
                        $schemaRoutes = ['admin.schema.index', 'admin.schema.create', 'admin.schema.edit', 'admin.schema.show']; // Add schema routes
                        $pageSeoRoutes = ['admin.page-seo.index', 'admin.page-seo.create', 'admin.page-seo.edit', 'admin.page-seo.show']; // Add page SEO routes
                    @endphp
                    @canany(['view-testimonials', 'view-site-settings', 'view-faqs'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="settings"></i>
                            <span data-key="t-general-setting">@lang('translation.General_Setting')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('view-testimonials')
                            <li class="{{ in_array(Route::currentRouteName(), $testimonialRoutes) ? 'mm-active' : '' }}"><a href="{{ route('testimonial.index') }}" key="t-testimonial-section">@lang('translation.Testimonial_Section')</a></li>
                            @endcan
                            @can('view-site-settings')
                            <li class="{{ in_array(Route::currentRouteName(), $siteSettings) ? 'mm-active' : '' }}"><a href="{{ route('admin.site-settings.index') }}" key="t-testimonial-section">Site Settings</a></li>
                            @endcan
                            @can('view-faqs')
                            <li class="{{ in_array(Route::currentRouteName(), $faqRoutes) ? 'mm-active' : '' }}"><a href="{{ route('admin.faq.index') }}" key="t-faq-section">@lang('translation.FAQ_Section')</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcanany
                    @can('view-seo-settings')
                    <li class="{{ in_array(Route::currentRouteName(), $schemaRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $schemaRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="code"></i>
                            <span>Schema Management</span>
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $schemaRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('admin.schema.index') }}"
                                    class="{{ Route::currentRouteName() == 'admin.schema.index' ? 'active' : '' }}">Manage Schemas</a>
                            </li>
                            @can('create-seo-settings')
                            <li>
                                <a href="{{ route('admin.schema.create') }}"
                                    class="{{ Route::currentRouteName() == 'admin.schema.create' ? 'active' : '' }}">Add Schema</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view-page-seo')
                    <li class="{{ in_array(Route::currentRouteName(), $pageSeoRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $pageSeoRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="search"></i>
                            <span>Page SEO Management</span>
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $pageSeoRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('admin.page-seo.index') }}"
                                    class="{{ Route::currentRouteName() == 'admin.page-seo.index' ? 'active' : '' }}">Manage Page SEO</a>
                            </li>
                            @can('create-page-seo')
                            <li>
                                <a href="{{ route('admin.page-seo.create') }}"
                                    class="{{ Route::currentRouteName() == 'admin.page-seo.create' ? 'active' : '' }}">Add Page SEO</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @php
                        $fileUploadRoutes = ['admin.file-upload.index']; // Add file upload routes
                    @endphp
                    @can('view-file-upload')
                    <li class="{{ in_array(Route::currentRouteName(), $fileUploadRoutes) ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.file-upload.index') }}"
                            class="{{ Route::currentRouteName() == 'admin.file-upload.index' ? 'active' : '' }}">
                            <i data-feather="upload"></i>
                            <span>File Upload</span>
                        </a>
                    </li>
                    @endcan

                    @php
                        $imageCompressionRoutes = ['admin.image-compression.index']; // Add image compression routes
                    @endphp
                    @can('view-image-compression')
                    <li class="{{ in_array(Route::currentRouteName(), $imageCompressionRoutes) ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.image-compression.index') }}"
                            class="{{ Route::currentRouteName() == 'admin.image-compression.index' ? 'active' : '' }}">
                            <i data-feather="image"></i>
                            <span>Image Compression</span>
                        </a>
                    </li>
                    @endcan

                    @php
                        $userRoutes = ['manage-users.index', 'manage-users.create', 'manage-users.edit', 'manage-users.show']; // Add all related routes
                    @endphp
                    @can('view-users')
                    <li class="{{ in_array(Route::currentRouteName(), $userRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $userRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="users"></i>
                            <span data-key="t-manage-users">@lang('translation.Manage_Users')</span>
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $userRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('manage-users.index') }}"
                                    class="{{ Route::currentRouteName() == 'manage-users.index' ? 'active' : '' }}">Manage
                                    Users</a>
                            </li>
                            @can('create-users')
                            <li>
                                <a href="{{ route('manage-users.create') }}"
                                    class="{{ Route::currentRouteName() == 'manage-users.create' ? 'active' : '' }}">Add
                                    User</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @php
                        $roleRoutes = ['roles.index', 'roles.create', 'roles.edit', 'roles.show']; // Add all related routes
                    @endphp
                    @can('view-roles')
                    <li class="{{ in_array(Route::currentRouteName(), $roleRoutes) ? 'mm-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="has-arrow {{ in_array(Route::currentRouteName(), $roleRoutes) ? 'mm-active' : '' }}">
                            <i data-feather="shield"></i>
                            <span>Role Management</span>
                        </a>
                        <ul class="sub-menu"
                            aria-expanded="{{ in_array(Route::currentRouteName(), $roleRoutes) ? 'true' : 'false' }}">
                            <li>
                                <a href="{{ route('roles.index') }}"
                                    class="{{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}">Manage
                                    Roles</a>
                            </li>
                            @can('create-roles')
                            <li>
                                <a href="{{ route('roles.create') }}"
                                    class="{{ Route::currentRouteName() == 'roles.create' ? 'active' : '' }}">Add
                                    Role</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @php
                        $performanceRoutes = ['admin.performance']; // Add performance routes
                    @endphp
                    @can('view-performance')
                    <li class="{{ in_array(Route::currentRouteName(), $performanceRoutes) ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.performance') }}"
                            class="{{ Route::currentRouteName() == 'admin.performance' ? 'active' : '' }}">
                            <i data-feather="activity"></i>
                            <span>@lang('translation.Performance')</span>
                        </a>
                    </li>
                    @endcan
                </ul>

            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
