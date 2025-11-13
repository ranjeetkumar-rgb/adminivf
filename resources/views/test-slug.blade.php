<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slug Generation Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Slug Generation Test</h2>
                <p>Type in the heading field to see the slug auto-generate:</p>
                
                <div class="mb-3">
                    <label for="heading" class="form-label">Heading</label>
                    <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter heading">
                </div>
                
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Auto-generated slug">
                    <small class="form-text text-muted">This should auto-generate from the heading</small>
                </div>
                
                <div class="alert alert-info">
                    <strong>Debug Info:</strong>
                    <div id="debug"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, testing slug generation...');
            
            const headingInput = document.getElementById('heading');
            const slugInput = document.getElementById('slug');
            const debugDiv = document.getElementById('debug');
            
            if (headingInput && slugInput) {
                console.log('Found heading and slug inputs');
                
                headingInput.addEventListener('input', function() {
                    const heading = this.value;
                    console.log('Heading input:', heading);
                    
                    if (heading && !slugInput.value) {
                        const slug = heading.toLowerCase()
                            .replace(/[^a-z0-9\s-]/g, '')
                            .replace(/\s+/g, '-')
                            .replace(/-+/g, '-')
                            .replace(/^-+|-+$/g, '');
                        
                        slugInput.value = slug;
                        console.log('Generated slug:', slug);
                        
                        debugDiv.innerHTML = `
                            <strong>Heading:</strong> ${heading}<br>
                            <strong>Generated Slug:</strong> ${slug}<br>
                            <strong>Time:</strong> ${new Date().toLocaleTimeString()}
                        `;
                    }
                });
                
                headingInput.addEventListener('blur', function() {
                    const heading = this.value;
                    console.log('Heading blur:', heading);
                    
                    if (heading && !slugInput.value) {
                        const slug = heading.toLowerCase()
                            .replace(/[^a-z0-9\s-]/g, '')
                            .replace(/\s+/g, '-')
                            .replace(/-+/g, '-')
                            .replace(/^-+|-+$/g, '');
                        
                        slugInput.value = slug;
                        console.log('Generated slug on blur:', slug);
                        
                        debugDiv.innerHTML = `
                            <strong>Heading:</strong> ${heading}<br>
                            <strong>Generated Slug:</strong> ${slug}<br>
                            <strong>Time:</strong> ${new Date().toLocaleTimeString()}<br>
                            <strong>Event:</strong> Blur
                        `;
                    }
                });
            } else {
                console.error('Could not find heading or slug inputs');
                debugDiv.innerHTML = '<strong>Error:</strong> Could not find input fields';
            }
        });
    </script>
</body>
</html> 