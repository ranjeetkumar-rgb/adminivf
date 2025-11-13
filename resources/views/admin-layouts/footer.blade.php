<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © {{ $globalSettings->site_name ?? 'IndiaIVF' }}.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    @if($globalSettings && $globalSettings->copyright_text)
                        {{ $globalSettings->copyright_text }}
                    @else
                        Design & Develop by <a href="#!" class="text-decoration-underline">{{ $globalSettings->site_name ?? 'IndiaIVF' }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
