/**
 * UTM & Advertising Conversion Tracker Utility
 */

(function () {
    document.addEventListener("DOMContentLoaded", function () {
        // Query parameters we want to capture
        const trackingParams = [
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_term',
            'utm_content',
            'gclid',
            'fbclid'
        ];

        const urlParams = new URLSearchParams(window.location.search);
        
        // 1. Capture and save UTM parameters to SessionStorage
        trackingParams.forEach(function (param) {
            if (urlParams.has(param)) {
                sessionStorage.setItem(param, urlParams.get(param));
            }
        });

        // 2. Capture and save Landing Page and Referrer
        if (!sessionStorage.getItem('landing_url')) {
            sessionStorage.setItem('landing_url', window.location.href);
        }
        if (!sessionStorage.getItem('referrer_url')) {
            sessionStorage.setItem('referrer_url', document.referrer || 'Direct');
        }

        // 3. Inject tracked parameters into hidden inputs in all forms
        setTimeout(populateHiddenFormFields, 100); // Small delay to ensure forms are rendered
    });

    /**
     * Finds hidden input fields matching tracked parameters and fills them
     */
    function populateHiddenFormFields() {
        const forms = document.querySelectorAll("form");
        if (forms.length === 0) return;

        const trackingParams = [
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_term',
            'utm_content',
            'gclid',
            'fbclid'
        ];

        forms.forEach(function (form) {
            // Populate UTMs
            trackingParams.forEach(function (param) {
                const storedValue = sessionStorage.getItem(param);
                if (storedValue) {
                    setOrInsertHiddenField(form, param, storedValue);
                }
            });

            // Populate landing and referrer
            const landingUrl = sessionStorage.getItem('landing_url');
            if (landingUrl) {
                setOrInsertHiddenField(form, 'landing_url', landingUrl);
            }

            const referrerUrl = sessionStorage.getItem('referrer_url');
            if (referrerUrl) {
                setOrInsertHiddenField(form, 'referrer_url', referrerUrl);
            }

            // Populate current source page URL
            setOrInsertHiddenField(form, 'source_page', window.location.pathname + window.location.search);
        });
    }

    /**
     * Sets value of an existing hidden field, or creates one if it doesn't exist
     */
    function setOrInsertHiddenField(form, name, value) {
        let field = form.querySelector(`input[name="${name}"]`);
        if (!field) {
            field = document.createElement("input");
            field.type = "hidden";
            field.name = name;
            form.appendChild(field);
        }
        field.value = value;
    }

    // Expose populate function in case forms are loaded dynamically
    window.populateTrackingFields = populateHiddenFormFields;
})();
