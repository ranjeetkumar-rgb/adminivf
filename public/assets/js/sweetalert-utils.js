// Global SweetAlert Utilities
// Replace all confirm() and alert() calls with SweetAlert

// Global SweetAlert configuration
const SwalConfig = {
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, proceed!',
    cancelButtonText: 'Cancel',
    reverseButtons: true
};

// SweetAlert confirm function to replace confirm()
function swalConfirm(message, callback, options = {}) {
    const config = {
        ...SwalConfig,
        title: 'Are you sure?',
        text: message,
        icon: 'warning',
        showCancelButton: true,
        ...options
    };

    Swal.fire(config).then((result) => {
        if (result.isConfirmed) {
            if (typeof callback === 'function') {
                callback();
            }
        }
    });
}

// SweetAlert alert function to replace alert()
function swalAlert(message, title = 'Information', icon = 'info') {
    return Swal.fire({
        title: title,
        text: message,
        icon: icon,
        confirmButtonText: 'OK',
        confirmButtonColor: '#3085d6'
    });
}

// SweetAlert success function
function swalSuccess(message, title = 'Success!') {
    return Swal.fire({
        title: title,
        text: message,
        icon: 'success',
        confirmButtonText: 'OK',
        confirmButtonColor: '#28a745'
    });
}

// SweetAlert error function
function swalError(message, title = 'Error!') {
    return Swal.fire({
        title: title,
        text: message,
        icon: 'error',
        confirmButtonText: 'OK',
        confirmButtonColor: '#dc3545'
    });
}

// SweetAlert warning function
function swalWarning(message, title = 'Warning!') {
    return Swal.fire({
        title: title,
        text: message,
        icon: 'warning',
        confirmButtonText: 'OK',
        confirmButtonColor: '#ffc107'
    });
}

// Enhanced delete confirmation function
function deleteConfirm(name, event, element, url = null) {
    event.preventDefault();
    
    const message = `Are you sure you want to delete "${name}"? This action cannot be undone.`;
    
    Swal.fire({
        title: 'Delete Confirmation',
        text: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Show page loader with custom message
            if (window.showPageLoader) {
                window.showPageLoader('Deleting...');
            }
            
            // First, try to find a hidden form in the same container
            const container = element.closest('.dropdown-menu') || element.closest('td') || element.parentElement;
            const hiddenForm = container ? container.querySelector('form[style*="display: none"]') : null;
            
            if (hiddenForm) {
                // Use the hidden form if found
                hiddenForm.submit();
            } else if (url) {
                // Create a temporary form and submit it
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = url;
                form.style.display = 'none';
                
                // Add CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]');
                if (csrfToken) {
                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = csrfToken.getAttribute('content');
                    form.appendChild(csrfInput);
                }
                
                // Add method override for DELETE
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);
                
                document.body.appendChild(form);
                form.submit();
            } else if (element && element.closest('form')) {
                // If element is in a form, submit the form
                element.closest('form').submit();
            } else if (element && element.getAttribute('href')) {
                // If element has href, navigate to it
                window.location.href = element.getAttribute('href');
            }
        }
    });
}

// Form submission confirmation
function formConfirm(message, formElement) {
    Swal.fire({
        title: 'Confirm Action',
        text: message,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, proceed!',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            formElement.submit();
        }
    });
}

// Replace native confirm with SweetAlert
window.confirm = function(message) {
    return new Promise((resolve) => {
        Swal.fire({
            title: 'Confirm',
            text: message,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            resolve(result.isConfirmed);
        });
    });
};

// Replace native alert with SweetAlert
window.alert = function(message) {
    Swal.fire({
        title: 'Information',
        text: message,
        icon: 'info',
        confirmButtonText: 'OK',
        confirmButtonColor: '#3085d6'
    });
}; 