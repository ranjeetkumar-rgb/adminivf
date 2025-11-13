<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schema Test Page</title>
    <meta name="description" content="Test page for dynamic schema system">
</head>
<body>
    <h1>Schema Test Page</h1>
    <p>This page demonstrates the dynamic schema system. Check the page source to see the generated JSON-LD schemas.</p>
    
    <div>
        <h2>Active Schemas:</h2>
        <ul>
            @foreach($dynamicSchemas as $schema)
                <li>
                    <strong>{{ $schema->name }}</strong> ({{ $schema->type }})
                    @if($schema->content_type)
                        - {{ ucfirst($schema->content_type) }}
                    @else
                        - Global
                    @endif
                    <br>
                    <small>{{ $schema->description }}</small>
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h2>Schema Statistics:</h2>
        @php
            $schemaService = app(\App\Services\SchemaService::class);
            $stats = $schemaService->getSchemaStats();
        @endphp
        <ul>
            <li>Total Schemas: {{ $stats['total'] }}</li>
            <li>Active Schemas: {{ $stats['active'] }}</li>
            <li>Inactive Schemas: {{ $stats['inactive'] }}</li>
            <li>Global Schemas: {{ $stats['global'] }}</li>
            <li>Content-Specific Schemas: {{ $stats['content_specific'] }}</li>
        </ul>
    </div>

    <div>
        <h2>Schema Types:</h2>
        <ul>
            @foreach($stats['by_type'] as $type => $count)
                <li>{{ $type }}: {{ $count }}</li>
            @endforeach
        </ul>
    </div>

    <hr>
    <p><a href="{{ route('admin.schema.index') }}">Go to Schema Management</a></p>
</body>
</html>

{{-- Include the schema component to render schemas --}}
<x-schema :dynamicSchemas="$dynamicSchemas" /> 