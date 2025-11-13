// Page Loader Management
class PageLoader {
    constructor() {
        this.loader = document.getElementById('page-loader');
        this.isLoading = false;
        this.loadingTimeout = null;
        this.init();
    }

    init() {
        // Show loader on page load
        this.show();
        
        // Hide loader when page is fully loaded
        window.addEventListener('load', () => {
            this.hide();
        });

        // Show loader on page unload (navigation)
        window.addEventListener('beforeunload', () => {
            this.show();
        });

        // Handle browser back/forward navigation
        window.addEventListener('popstate', () => {
            // Show loader briefly when navigating back/forward
            this.show();
            // Hide after a short delay to allow page to load
            setTimeout(() => {
                this.hide();
            }, 500);
        });

        // Handle page visibility changes (when user switches tabs and comes back)
        document.addEventListener('visibilitychange', () => {
            if (!document.hidden) {
                // Page became visible again, ensure loader is hidden
                setTimeout(() => {
                    this.hide();
                }, 100);
            }
        });

        // Handle AJAX requests
        this.setupAjaxHandlers();
        
        // Handle form submissions
        this.setupFormHandlers();
        
        // Handle link clicks
        this.setupLinkHandlers();
    }

    show() {
        if (this.loader && !this.isLoading) {
            this.isLoading = true;
            this.loader.classList.remove('hidden');
            
            // Set a minimum display time to prevent flickering
            this.loadingTimeout = setTimeout(() => {
                this.minimumDisplayTime = true;
            }, 300);
        }
    }

    hide() {
        if (this.loader && this.isLoading) {
            // Ensure minimum display time
            if (!this.minimumDisplayTime) {
                setTimeout(() => this.hide(), 300);
                return;
            }

            this.isLoading = false;
            this.minimumDisplayTime = false;
            this.loader.classList.add('hidden');
            
            if (this.loadingTimeout) {
                clearTimeout(this.loadingTimeout);
                this.loadingTimeout = null;
            }
        }
    }

    // Force hide method for emergency cases
    forceHide() {
        if (this.loader) {
            this.isLoading = false;
            this.minimumDisplayTime = true;
            this.loader.classList.add('hidden');
            
            if (this.loadingTimeout) {
                clearTimeout(this.loadingTimeout);
                this.loadingTimeout = null;
            }
        }
    }

    setupAjaxHandlers() {
        // Intercept jQuery AJAX requests
        if (typeof $ !== 'undefined') {
            $(document).ajaxStart(() => {
                this.show();
            });

            $(document).ajaxStop(() => {
                this.hide();
            });

            $(document).ajaxError(() => {
                this.hide();
            });
        }

        // Intercept fetch requests
        const originalFetch = window.fetch;
        window.fetch = (...args) => {
            this.show();
            return originalFetch(...args)
                .then(response => {
                    this.hide();
                    return response;
                })
                .catch(error => {
                    this.hide();
                    throw error;
                });
        };
    }

    setupFormHandlers() {
        // Handle form submissions
        document.addEventListener('submit', (e) => {
            const form = e.target;
            
            // Don't show loader for forms with data-no-loader attribute
            if (form.hasAttribute('data-no-loader')) {
                return;
            }

            // Don't show loader for forms that are already being submitted
            if (form.classList.contains('submitting')) {
                return;
            }

            // Show loader for form submissions
            this.show();
            form.classList.add('submitting');
        });
    }

    setupLinkHandlers() {
        // Handle internal link clicks
        document.addEventListener('click', (e) => {
            const link = e.target.closest('a');
            
            if (link && this.shouldShowLoaderForLink(link)) {
                this.show();
            }
        });
    }

    shouldShowLoaderForLink(link) {
        // Don't show loader for external links
        if (link.hostname !== window.location.hostname) {
            return false;
        }

        // Don't show loader for links with specific attributes
        if (link.hasAttribute('data-no-loader') || 
            link.hasAttribute('target') || 
            link.hasAttribute('download')) {
            return false;
        }

        // Don't show loader for hash links
        if (link.hash && link.pathname === window.location.pathname) {
            return false;
        }

        // Don't show loader for JavaScript links
        if (link.href === 'javascript:void(0)' || link.href === '#') {
            return false;
        }

        return true;
    }

    // Public method to show loader with custom message
    showWithMessage(message) {
        const textChars = this.loader?.querySelectorAll('.text-char');
        if (textChars && textChars.length > 0) {
            // Clear existing text
            textChars.forEach(char => char.textContent = '');
            
            // Set new message
            const newText = message || 'LOADING...';
            const chars = newText.split('');
            
            // Update each character with animation delay
            chars.forEach((char, index) => {
                if (textChars[index]) {
                    textChars[index].textContent = char;
                    textChars[index].style.animationDelay = `${index * 0.1}s`;
                }
            });
            
            // Hide remaining characters
            for (let i = chars.length; i < textChars.length; i++) {
                if (textChars[i]) {
                    textChars[i].textContent = '';
                }
            }
        }
        this.show();
    }

    // Public method to hide loader
    hideLoader() {
        this.hide();
    }
}

// Initialize page loader when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.pageLoader = new PageLoader();
    
    // If page is already loaded (cached), hide the loader immediately
    if (document.readyState === 'complete') {
        setTimeout(() => {
            window.pageLoader.forceHide();
        }, 100);
    }
});

// Global functions for manual control
window.showPageLoader = (message) => {
    if (window.pageLoader) {
        window.pageLoader.showWithMessage(message);
    }
};

window.hidePageLoader = () => {
    if (window.pageLoader) {
        window.pageLoader.hideLoader();
    }
};

window.forceHidePageLoader = () => {
    if (window.pageLoader) {
        window.pageLoader.forceHide();
    }
};

// Emergency timeout to ensure loader doesn't get stuck
setTimeout(() => {
    if (window.pageLoader) {
        window.pageLoader.forceHide();
    }
}, 10000); // 10 seconds timeout

// Additional fallback: hide loader on window focus (useful for back navigation)
window.addEventListener('focus', () => {
    setTimeout(() => {
        if (window.pageLoader) {
            window.pageLoader.forceHide();
        }
    }, 200);
});

// Fallback for browser back/forward cache issues
window.addEventListener('pageshow', (event) => {
    // If page is loaded from cache, ensure loader is hidden
    if (event.persisted) {
        setTimeout(() => {
            if (window.pageLoader) {
                window.pageLoader.forceHide();
            }
        }, 100);
    }
});

// Manual override for debugging (can be called from console)
window.debugPageLoader = () => {
    console.log('Page Loader Debug Info:');
    console.log('Page Loader Instance:', window.pageLoader);
    console.log('Loader Element:', document.getElementById('page-loader'));
    console.log('Document Ready State:', document.readyState);
    console.log('Window Load State:', window.performance.getEntriesByType('navigation')[0]?.type);
    
    if (window.pageLoader) {
        window.pageLoader.forceHide();
        console.log('Page loader force hidden');
    }
}; 