@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="layout-builder-container">
        <!-- Top Toolbar -->
        <div class="layout-builder-toolbar">
            <div class="layout-builder-toolbar-left">
                <span class="layout-builder-logo">📧 Email Builder</span>
            </div>
            <div class="layout-builder-toolbar-right">
                <button type="button" id="email-theme-toggle" class="layout-builder-btn" title="Toggle Email Content Theme">
                    <span class="theme-icon">📧</span> <span class="theme-text">Email Light</span>
                </button>
                <button type="button" class="layout-builder-btn" title="Background Configuration">
                    🎨 Background
                </button>
                <button type="button" class="layout-builder-btn" title="Clear Canvas">
                    🗑️ Clear
                </button>
                <button type="button" class="layout-builder-btn" title="Settings">
                    ⚙️ Settings
                </button>
            </div>
        </div>

        <div class="layout-builder-main">
            <!-- Left Sidebar - Available Blocks -->
            <div class="layout-builder-sidebar layout-builder-sidebar-left">
                <div class="layout-builder-sidebar-header">
                    <h3>Content Blocks</h3>
                </div>
                <div class="layout-builder-blocks-container">
                    <!-- Basic Blocks -->
                    <div class="layout-builder-block-category">
                        <h4>Basic</h4>
                        <div class="layout-builder-block-item" data-block-type="text">
                            <span class="layout-builder-block-icon">📝</span>
                            <span class="layout-builder-block-label">Text</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="image">
                            <span class="layout-builder-block-icon">🖼️</span>
                            <span class="layout-builder-block-label">Image</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="button">
                            <span class="layout-builder-block-icon">🔘</span>
                            <span class="layout-builder-block-label">Button</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="divider">
                            <span class="layout-builder-block-icon">➖</span>
                            <span class="layout-builder-block-label">Divider</span>
                        </div>
                    </div>

                    <!-- Layout Blocks -->
                    <div class="layout-builder-block-category">
                        <h4>Layout</h4>
                        <div class="layout-builder-block-item" data-block-type="columns-2">
                            <span class="layout-builder-block-icon">⬜⬜</span>
                            <span class="layout-builder-block-label">2 Columns</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="columns-3">
                            <span class="layout-builder-block-icon">⬜⬜⬜</span>
                            <span class="layout-builder-block-label">3 Columns</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="spacer">
                            <span class="layout-builder-block-icon">↕️</span>
                            <span class="layout-builder-block-label">Spacer</span>
                        </div>
                    </div>

                    <!-- Media Blocks -->
                    <div class="layout-builder-block-category">
                        <h4>Media</h4>
                        <div class="layout-builder-block-item" data-block-type="video">
                            <span class="layout-builder-block-icon">🎥</span>
                            <span class="layout-builder-block-label">Video</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="social">
                            <span class="layout-builder-block-icon">🔗</span>
                            <span class="layout-builder-block-label">Social</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Center Canvas Area -->
            <div class="layout-builder-canvas-area">
                <div class="layout-builder-canvas-header">
                    <div class="layout-builder-canvas-controls">
                        <button type="button" class="layout-builder-view-btn active">📱 Mobile</button>
                        <button type="button" class="layout-builder-view-btn">💻 Desktop</button>
                    </div>
                </div>
                <div class="layout-builder-canvas-wrapper">
                    <div id="layout-builder-canvas-{{ $statePath }}" class="layout-builder-canvas" data-email-theme="light">
                        <div class="layout-builder-canvas-placeholder">
                            <p>✨ Start building your email</p>
                            <p>Drag blocks from the left sidebar to begin</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar - Properties Panel -->
            <div class="layout-builder-sidebar layout-builder-sidebar-right">
                <div class="layout-builder-sidebar-header">
                    <h3>Properties</h3>
                </div>
                <div class="layout-builder-properties-panel">
                    <div class="layout-builder-no-selection">
                        <p>🎯 Select a block to edit its properties</p>
                        <p>Click on any block in the canvas to see available options here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hidden input to store form data -->
    <input type="hidden" name="{{ $statePath }}" value="" />
</x-dynamic-component>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Theme state management
    let emailDarkMode = false;

    // Get theme toggle buttons and elements
    const emailToggle = document.getElementById('email-theme-toggle');
    const container = document.querySelector('.layout-builder-container');
    const canvas = document.querySelector('.layout-builder-canvas');

    // Make editor automatically sync with Filament's dark mode
    function syncEditorWithFilament() {
        const isFilamentDark = document.documentElement.classList.contains('dark') ||
                              document.body.classList.contains('dark');

        if (isFilamentDark) {
            container.classList.add('dark');
        } else {
            container.classList.remove('dark');
        }
    }

    // Initial sync with Filament's theme
    syncEditorWithFilament();

    // Watch for Filament theme changes and sync automatically
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                syncEditorWithFilament();
            }
        });
    });

    // Observe changes to document element class (where Filament sets dark mode)
    observer.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['class']
    });

    // Email theme toggle (independent of editor theme)
    emailToggle.addEventListener('click', function() {
        emailDarkMode = !emailDarkMode;

        if (emailDarkMode) {
            canvas.setAttribute('data-email-theme', 'dark');
        } else {
            canvas.setAttribute('data-email-theme', 'light');
        }

        updateEmailToggleButton();
    });

    function updateEmailToggleButton() {
        const icon = emailToggle.querySelector('.theme-icon');
        const text = emailToggle.querySelector('.theme-text');

        if (emailDarkMode) {
            icon.textContent = '📧';
            text.textContent = 'Email Light';
            emailToggle.classList.add('active');
        } else {
            icon.textContent = '📧';
            text.textContent = 'Email Dark';
            emailToggle.classList.remove('active');
        }
    }

    // Initialize email button state
    updateEmailToggleButton();

    console.log('Layout builder initialized - Editor syncs with Filament theme, Email theme independent');
});
</script>

<style>
.layout-builder-container {
    width: 100%;
    min-height: 600px;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    overflow: hidden;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

/* Top Toolbar */
.layout-builder-toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 16px;
    background: #f3f4f6;
    color: #1f2937;
    border-bottom: 1px solid #e5e7eb;
}

.layout-builder-logo {
    font-weight: 600;
    font-size: 16px;
}

.layout-builder-toolbar-right {
    display: flex;
    gap: 8px;
}

.layout-builder-btn {
    background: #ffffff;
    color: #374151;
    border: 1px solid #d1d5db;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.layout-builder-btn:hover {
    background: #f9fafb;
    border-color: #9ca3af;
}

/* Main Layout */
.layout-builder-main {
    display: flex;
    height: 500px;
}

/* Sidebars */
.layout-builder-sidebar {
    background: #f9fafb;
    border-right: 1px solid #e5e7eb;
    overflow-y: auto;
}

.layout-builder-sidebar-left {
    width: 250px;
}

.layout-builder-sidebar-right {
    width: 280px;
    border-right: none;
    border-left: 1px solid #e5e7eb;
}

.layout-builder-sidebar-header {
    padding: 16px;
    background: #f3f4f6;
    border-bottom: 1px solid #e5e7eb;
}

.layout-builder-sidebar-header h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #1f2937;
}

/* Blocks Container */
.layout-builder-blocks-container {
    padding: 16px;
}

.layout-builder-block-category {
    margin-bottom: 24px;
}

.layout-builder-block-category h4 {
    margin: 0 0 12px 0;
    font-size: 14px;
    font-weight: 600;
    color: #6b7280;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.layout-builder-block-item {
    display: flex;
    align-items: center;
    padding: 10px 12px;
    margin-bottom: 8px;
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    cursor: grab;
    transition: all 0.2s ease;
    user-select: none;
}

.layout-builder-block-item:hover {
    border-color: #3b82f6;
    background: #f0f9ff;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.layout-builder-block-icon {
    margin-right: 10px;
    font-size: 16px;
}

.layout-builder-block-label {
    font-size: 14px;
    font-weight: 500;
    color: #374151;
}

/* Canvas Area */
.layout-builder-canvas-area {
    flex: 1;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

.layout-builder-canvas-header {
    padding: 12px 16px;
    background: #f9fafb;
    border-bottom: 1px solid #e5e7eb;
    display: flex;
    justify-content: center;
}

.layout-builder-canvas-controls {
    display: flex;
    gap: 4px;
    background: #e5e7eb;
    padding: 2px;
    border-radius: 6px;
}

.layout-builder-view-btn {
    padding: 6px 12px;
    background: transparent;
    border: none;
    border-radius: 4px;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.2s ease;
    color: #6b7280;
}

.layout-builder-view-btn.active,
.layout-builder-view-btn:hover {
    background: white;
    color: #1f2937;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.layout-builder-canvas-wrapper {
    flex: 1;
    padding: 20px;
    background: #f8fafc;
    overflow: auto;
}

.layout-builder-canvas {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    background: white;
    min-height: 400px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    position: relative;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.layout-builder-canvas-placeholder {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #9ca3af;
    font-size: 16px;
    line-height: 1.6;
}

.layout-builder-canvas-placeholder p {
    margin: 8px 0;
}

/* Properties Panel */
.layout-builder-properties-panel {
    padding: 16px;
}

.layout-builder-no-selection {
    text-align: center;
    color: #6b7280;
    font-size: 14px;
    line-height: 1.6;
}

.layout-builder-no-selection p {
    margin: 8px 0;
}

/* Dark mode styles */
.dark .layout-builder-container {
    background: #1f2937;
    border-color: #374151;
}

.dark .layout-builder-toolbar {
    background: #1f2937;
    color: white;
    border-bottom-color: #374151;
}

.dark .layout-builder-btn {
    background: #374151;
    color: white;
    border-color: #4b5563;
}

.dark .layout-builder-btn:hover {
    background: #4b5563;
    border-color: #6b7280;
}

.dark .layout-builder-btn.active {
    background: #3b82f6;
    border-color: #2563eb;
    color: white;
}

.dark .layout-builder-btn.active:hover {
    background: #2563eb;
}

.dark .layout-builder-sidebar {
    background: #111827;
    border-color: #374151;
}

.dark .layout-builder-sidebar-header {
    background: #1f2937;
    border-color: #374151;
}

.dark .layout-builder-sidebar-header h3 {
    color: #f9fafb;
}

.dark .layout-builder-block-category h4 {
    color: #9ca3af;
}

.dark .layout-builder-block-item {
    background: #374151;
    border-color: #4b5563;
    color: #f9fafb;
}

.dark .layout-builder-block-item .layout-builder-block-label {
    color: #e5e7eb;
}

.dark .layout-builder-block-item:hover {
    background: #4b5563;
    border-color: #3b82f6;
}

.dark .layout-builder-block-item:hover .layout-builder-block-label {
    color: #f9fafb;
}

.dark .layout-builder-canvas-area {
    background: #1f2937;
}

.dark .layout-builder-canvas-header {
    background: #111827;
    border-color: #374151;
}

.dark .layout-builder-canvas {
    background: #ffffff;
}

.dark .layout-builder-canvas-wrapper {
    background: #111827;
}

.dark .layout-builder-properties-panel {
    background: #111827;
}

.dark .layout-builder-no-selection {
    color: #9ca3af;
}

/* Email content theme styles - separate from editor theme */
.layout-builder-canvas[data-email-theme="dark"] {
    background: #1f2937 !important;
    color: #f9fafb;
}

.layout-builder-canvas[data-email-theme="dark"] .layout-builder-canvas-placeholder {
    color: #9ca3af;
}

.layout-builder-canvas[data-email-theme="dark"] .email-block {
    background: #374151;
    border-color: #4b5563;
    color: #f9fafb;
}

.layout-builder-canvas[data-email-theme="dark"] .email-block.text-block {
    color: #f9fafb;
}

.layout-builder-canvas[data-email-theme="dark"] .email-block.button-block a {
    background: #3b82f6;
    color: #ffffff;
}

/* Button styles for theme toggles */
.layout-builder-btn.active {
    background: #3b82f6;
    border-color: #2563eb;
}

.layout-builder-btn.active:hover {
    background: #2563eb;
}
</style>