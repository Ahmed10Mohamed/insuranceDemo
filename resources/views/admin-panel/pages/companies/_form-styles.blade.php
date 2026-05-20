<style>
    /* ═══════════════════════════════════════════════════════════
       Company Form — Enhanced Input Readability (Scoped)

       Scoped via: html body .nq-company-form
       No !important needed: this <style> loads AFTER custom.css
       (head.blade.php: @yield('css') appears after custom.css link),
       and our selectors have higher specificity than custom.css's
       base .form-control rules.

       Exception: Select2 JS sets inline styles on rendered text,
       so .select2-selection__rendered color needs !important.

       Uses background-color (longhand) instead of background
       (shorthand) to preserve background-image for .is-invalid
       validation icons.
       ═══════════════════════════════════════════════════════════ */

    /* ─── Text Inputs ─── */
    html body .nq-company-form .form-floating-outline .form-control {
        background-color: rgba(25, 25, 50, 0.95);
        color: #fff;
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
        font-size: 0.95rem;
    }

    html body .nq-company-form .form-floating-outline .form-control:focus {
        background-color: rgba(30, 30, 55, 1);
        border-color: var(--nq-primary);
        color: #fff;
        box-shadow: 0 0 0 3px rgba(var(--nq-primary-rgb), 0.5);
    }

    html body .nq-company-form .form-floating-outline .form-control::placeholder {
        color: rgba(200, 200, 220, 0.7);
    }

    /* ─── Validation: .is-invalid ─── */
    html body .nq-company-form .form-floating-outline .form-control.is-invalid {
        border-color: #ff4d4f;
        /* background-image is NOT overridden — validation icon shows */
    }

    html body .nq-company-form .form-floating-outline .form-control.is-invalid:focus {
        border-color: #ff4d4f;
        box-shadow: 0 0 0 3px rgba(255, 77, 79, 0.3);
    }

    /* ─── Disabled / Readonly ─── */
    html body .nq-company-form .form-floating-outline .form-control:disabled,
    html body .nq-company-form .form-floating-outline .form-control[readonly] {
        background-color: rgba(20, 20, 40, 0.5);
        color: rgba(200, 200, 220, 0.6);
        border-color: rgba(var(--nq-primary-rgb), 0.2);
        cursor: not-allowed;
    }

    /* ─── Floating Labels — idle ─── */
    html body .nq-company-form .form-floating-outline > label,
    html body .nq-company-form .form-floating > label {
        color: rgba(200, 200, 220, 0.7);
        font-size: 0.9rem;
    }

    /* ─── Floating Labels — active / filled ─── */
    html body .nq-company-form .form-floating-outline .form-control:focus ~ label,
    html body .nq-company-form .form-floating-outline .form-control:not(:placeholder-shown) ~ label,
    html body .nq-company-form .form-floating > .form-control:focus ~ label,
    html body .nq-company-form .form-floating > .form-control:not(:placeholder-shown) ~ label {
        color: var(--nq-primary-light);
        background-color: rgba(30, 30, 50, 1);
        padding: 0 6px;
        font-size: 0.8rem;
    }

    /* ─── Select2 — trigger / selection box ─── */
    html body .nq-company-form .select2-container--default .select2-selection--single {
        background-color: rgba(25, 25, 50, 0.95);
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
        min-height: 46px;
        border-radius: var(--nq-radius-sm);
    }

    html body .nq-company-form .select2-container--default .select2-selection--single:hover {
        border-color: rgba(var(--nq-primary-rgb), 0.55);
    }

    /* !important required: Select2 JS injects inline color on this element */
    html body .nq-company-form .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #fff !important;
        line-height: 46px;
        padding-right: 12px;
        font-size: 0.95rem;
    }

    html body .nq-company-form .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: rgba(200, 200, 220, 0.7) !important;
    }

    html body .nq-company-form .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 46px;
    }

    html body .nq-company-form .select2-container--default.select2-container--open .select2-selection--single {
        border-color: var(--nq-primary);
        box-shadow: 0 0 0 3px rgba(var(--nq-primary-rgb), 0.5);
    }

    /* ─── Select2 — dropdown panel ───
       forms-selects.js uses dropdownParent: $this.parent(),
       so the dropdown renders inside .nq-company-form. */
    html body .nq-company-form .select2-dropdown {
        background-color: rgba(25, 25, 50, 0.98);
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
        border-radius: var(--nq-radius-sm);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    }

    html body .nq-company-form .select2-search--dropdown .select2-search__field {
        background-color: rgba(20, 20, 40, 0.9);
        color: #fff;
        border: 1px solid rgba(var(--nq-primary-rgb), 0.3);
        border-radius: 6px;
        padding: 0.5rem 0.75rem;
    }

    html body .nq-company-form .select2-search--dropdown .select2-search__field:focus {
        border-color: var(--nq-primary);
        box-shadow: 0 0 0 2px rgba(var(--nq-primary-rgb), 0.3);
        outline: none;
    }

    html body .nq-company-form .select2-results__option {
        color: var(--nq-text);
        padding: 0.55rem 0.85rem;
        transition: background 0.15s ease, color 0.15s ease;
    }

    html body .nq-company-form .select2-results__option--highlighted[aria-selected] {
        background-color: var(--nq-primary);
        color: #fff;
    }

    html body .nq-company-form .select2-results__option[aria-selected="true"] {
        background-color: rgba(var(--nq-primary-rgb), 0.2);
        color: var(--nq-primary-light);
    }

    /* ─── Native form-select (fallback) ─── */
    html body .nq-company-form .form-select {
        background-color: rgba(25, 25, 50, 0.95);
        color: #fff;
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
    }

    html body .nq-company-form .form-select:focus {
        border-color: var(--nq-primary);
        box-shadow: 0 0 0 3px rgba(var(--nq-primary-rgb), 0.5);
    }

    /* ─── Input Group (password fields) ─── */
    html body .nq-company-form .input-group .form-control {
        background-color: rgba(25, 25, 50, 0.95);
        color: #fff;
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
    }

    html body .nq-company-form .input-group .form-control:focus {
        background-color: rgba(30, 30, 55, 1);
        border-color: var(--nq-primary);
        box-shadow: 0 0 0 3px rgba(var(--nq-primary-rgb), 0.5);
    }

    html body .nq-company-form .input-group-text {
        background-color: rgba(var(--nq-primary-rgb), 0.15);
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
        color: var(--nq-text);
    }

    /* ─── File Input ─── */
    html body .nq-company-form .form-control[type="file"] {
        background-color: rgba(25, 25, 50, 0.95);
        color: var(--nq-text);
        border-width: 1.5px;
        border-style: solid;
        border-color: rgba(var(--nq-primary-rgb), 0.35);
    }

    html body .nq-company-form .form-control[type="file"]::file-selector-button {
        background-color: rgba(var(--nq-primary-rgb), 0.2);
        color: var(--nq-primary-light);
        border-color: rgba(var(--nq-primary-rgb), 0.3);
    }

    /* ─── Form Labels (outside floating) ─── */
    html body .nq-company-form .form-label {
        color: var(--nq-text);
        font-weight: 600;
    }
</style>
