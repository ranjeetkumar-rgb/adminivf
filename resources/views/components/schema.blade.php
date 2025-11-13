{{-- Legacy Schema Support (for backward compatibility) --}}
@if(isset($schema) && $schema)
    @if(is_array($schema))
        @foreach($schema as $schemaItem)
            <script type="application/ld+json">
                {!! json_encode($schemaItem, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
            </script>
        @endforeach
    @else
        <script type="application/ld+json">
            {!! $schema !!}
        </script>
    @endif
@endif

{{-- Dynamic Schema Rendering (includes global + content-specific schemas) --}}
@if(isset($dynamicSchemas) && $dynamicSchemas->count() > 0)
    @foreach($dynamicSchemas as $schema)
        @if($schema->is_active && $schema->validateSchemaData())
            <script type="application/ld+json">
                {!! $schema->getFormattedSchema() !!}
            </script>
        @endif
    @endforeach
@else
    {{-- Fallback: Get schemas directly if dynamicSchemas not provided --}}
    @php
        $fallbackSchemas = \App\Models\Schema::where('is_active', true)->get();
    @endphp
    
    @if($fallbackSchemas->count() > 0)
        @foreach($fallbackSchemas as $schema)
            @if($schema->validateSchemaData())
                <script type="application/ld+json">
                    {!! $schema->getFormattedSchema() !!}
                </script>
            @endif
        @endforeach
    @endif
@endif 