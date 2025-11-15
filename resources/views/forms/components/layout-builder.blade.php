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
                <button type="button" id="background-config-btn" class="layout-builder-btn" title="Background Configuration">
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

    <!-- Background Configuration Modal -->
    <div id="background-config-modal" class="background-modal" style="display: none;">
        <div class="background-modal-overlay"></div>
        <div class="background-modal-content">
            <div class="background-modal-header">
                <h3>🎨 Background Configuration</h3>
                <button type="button" id="background-modal-close" class="background-modal-close">✕</button>
            </div>

            <div class="background-modal-body">
                <!-- Background Type Selector -->
                <div class="background-config-section">
                    <label class="background-config-label">Background Type</label>
                    <div class="background-type-buttons">
                        <button type="button" id="bg-type-color" class="background-type-btn active" data-type="color">
                            🎨 Color
                        </button>
                        <button type="button" id="bg-type-image" class="background-type-btn" data-type="image">
                            🖼️ Image
                        </button>
                        <button type="button" id="bg-type-transparent" class="background-type-btn" data-type="transparent">
                            ⬜ Transparent
                        </button>
                    </div>
                </div>

                <!-- Color Configuration -->
                <div id="color-config" class="background-config-section">
                    <label class="background-config-label" for="bg-color">Background Color</label>
                    <div class="color-input-group">
                        <input type="color" id="bg-color" class="background-color-picker" value="#ffffff">
                        <input type="text" id="bg-color-text" class="background-color-text" value="#ffffff" placeholder="#ffffff">
                    </div>
                </div>

                <!-- Image Configuration -->
                <div id="image-config" class="background-config-section" style="display: none;">
                    <label class="background-config-label" for="bg-image">Background Image</label>
                    <div class="image-upload-area">
                        <input type="file" id="bg-image" class="background-image-input" accept="image/*">
                        <div class="image-upload-drop-zone">
                            <p>📁 Choose image or drag & drop</p>
                            <p class="image-upload-info">Max size: 2MB • Formats: JPG, PNG, GIF, WebP</p>
                        </div>
                        <div id="image-preview" class="image-preview" style="display: none;">
                            <img id="preview-img" src="" alt="Preview">
                            <button type="button" id="remove-image" class="remove-image-btn">🗑️ Remove</button>
                        </div>
                    </div>

                    <!-- Image CSS Properties -->
                    <div class="image-properties">
                        <div class="property-row">
                            <div class="property-col">
                                <label class="background-config-label" for="bg-size">Size</label>
                                <select id="bg-size" class="background-select">
                                    <option value="cover">Cover</option>
                                    <option value="contain">Contain</option>
                                    <option value="auto">Auto</option>
                                    <option value="100% 100%">Stretch</option>
                                </select>
                            </div>
                            <div class="property-col">
                                <label class="background-config-label" for="bg-repeat">Repeat</label>
                                <select id="bg-repeat" class="background-select">
                                    <option value="no-repeat">No Repeat</option>
                                    <option value="repeat">Repeat</option>
                                    <option value="repeat-x">Repeat X</option>
                                    <option value="repeat-y">Repeat Y</option>
                                </select>
                            </div>
                        </div>
                        <div class="property-row">
                            <div class="property-col">
                                <label class="background-config-label" for="bg-position">Position</label>
                                <select id="bg-position" class="background-select">
                                    <option value="center center">Center</option>
                                    <option value="top left">Top Left</option>
                                    <option value="top center">Top Center</option>
                                    <option value="top right">Top Right</option>
                                    <option value="center left">Center Left</option>
                                    <option value="center right">Center Right</option>
                                    <option value="bottom left">Bottom Left</option>
                                    <option value="bottom center">Bottom Center</option>
                                    <option value="bottom right">Bottom Right</option>
                                </select>
                            </div>
                            <div class="property-col">
                                <label class="background-config-label" for="bg-attachment">Attachment</label>
                                <select id="bg-attachment" class="background-select">
                                    <option value="scroll">Scroll</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="local">Local</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="background-modal-footer">
                <button type="button" id="background-apply-btn" class="background-apply-btn">Apply Background</button>
                <button type="button" id="background-reset-btn" class="background-reset-btn">Reset</button>
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

    // ===== BACKGROUND CONFIGURATION FUNCTIONALITY =====

    const backgroundBtn = document.getElementById('background-config-btn');
    const backgroundModal = document.getElementById('background-config-modal');
    const backgroundModalClose = document.getElementById('background-modal-close');
    const backgroundApplyBtn = document.getElementById('background-apply-btn');
    const backgroundResetBtn = document.getElementById('background-reset-btn');

    // Background type buttons
    const bgTypeColor = document.getElementById('bg-type-color');
    const bgTypeImage = document.getElementById('bg-type-image');
    const bgTypeTransparent = document.getElementById('bg-type-transparent');

    // Configuration sections
    const colorConfig = document.getElementById('color-config');
    const imageConfig = document.getElementById('image-config');

    // Form inputs
    const bgColorPicker = document.getElementById('bg-color');
    const bgColorText = document.getElementById('bg-color-text');
    const bgImageInput = document.getElementById('bg-image');
    const imagePreview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    const removeImageBtn = document.getElementById('remove-image');

    // CSS property inputs
    const bgSize = document.getElementById('bg-size');
    const bgRepeat = document.getElementById('bg-repeat');
    const bgPosition = document.getElementById('bg-position');
    const bgAttachment = document.getElementById('bg-attachment');

    // Background state
    let backgroundState = {
        type: 'color',
        color: '#ffffff',
        image: null,
        imageBase64: null,
        size: 'cover',
        repeat: 'no-repeat',
        position: 'center center',
        attachment: 'scroll'
    };

    // Open background modal
    backgroundBtn.addEventListener('click', function() {
        backgroundModal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    });

    // Close background modal
    function closeBackgroundModal() {
        backgroundModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    backgroundModalClose.addEventListener('click', closeBackgroundModal);

    // Close modal when clicking overlay
    backgroundModal.addEventListener('click', function(e) {
        if (e.target === backgroundModal || e.target.classList.contains('background-modal-overlay')) {
            closeBackgroundModal();
        }
    });

    // Background type switching
    function switchBackgroundType(type) {
        // Update button states
        document.querySelectorAll('.background-type-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById('bg-type-' + type).classList.add('active');

        // Show/hide configuration sections
        colorConfig.style.display = type === 'color' ? 'block' : 'none';
        imageConfig.style.display = type === 'image' ? 'block' : 'none';

        backgroundState.type = type;
    }

    bgTypeColor.addEventListener('click', () => switchBackgroundType('color'));
    bgTypeImage.addEventListener('click', () => switchBackgroundType('image'));
    bgTypeTransparent.addEventListener('click', () => switchBackgroundType('transparent'));

    // Color picker synchronization
    bgColorPicker.addEventListener('change', function() {
        bgColorText.value = this.value;
        backgroundState.color = this.value;
    });

    bgColorText.addEventListener('input', function() {
        if (/^#[0-9A-F]{6}$/i.test(this.value)) {
            bgColorPicker.value = this.value;
            backgroundState.color = this.value;
        }
    });

    // Image upload handling
    bgImageInput.addEventListener('change', handleImageUpload);

    function handleImageUpload(e) {
        const file = e.target.files[0];
        if (!file) return;

        // Validate file size (2MB max)
        if (file.size > 2 * 1024 * 1024) {
            alert('Image size must be less than 2MB');
            bgImageInput.value = '';
            return;
        }

        // Validate file type
        if (!file.type.startsWith('image/')) {
            alert('Please select a valid image file');
            bgImageInput.value = '';
            return;
        }

        // Convert to base64
        const reader = new FileReader();
        reader.onload = function(e) {
            const base64 = e.target.result;
            backgroundState.image = file.name;
            backgroundState.imageBase64 = base64;

            // Show preview
            previewImg.src = base64;
            imagePreview.style.display = 'block';
            document.querySelector('.image-upload-drop-zone').style.display = 'none';
        };
        reader.readAsDataURL(file);
    }

    // Remove image
    removeImageBtn.addEventListener('click', function() {
        bgImageInput.value = '';
        backgroundState.image = null;
        backgroundState.imageBase64 = null;
        imagePreview.style.display = 'none';
        document.querySelector('.image-upload-drop-zone').style.display = 'block';
    });

    // CSS property updates
    bgSize.addEventListener('change', () => backgroundState.size = bgSize.value);
    bgRepeat.addEventListener('change', () => backgroundState.repeat = bgRepeat.value);
    bgPosition.addEventListener('change', () => backgroundState.position = bgPosition.value);
    bgAttachment.addEventListener('change', () => backgroundState.attachment = bgAttachment.value);

    // Apply background
    backgroundApplyBtn.addEventListener('click', function() {
        applyBackgroundToCanvas();
        closeBackgroundModal();
    });

    // Reset background
    backgroundResetBtn.addEventListener('click', function() {
        backgroundState = {
            type: 'color',
            color: '#ffffff',
            image: null,
            imageBase64: null,
            size: 'cover',
            repeat: 'no-repeat',
            position: 'center center',
            attachment: 'scroll'
        };

        // Reset form
        switchBackgroundType('color');
        bgColorPicker.value = '#ffffff';
        bgColorText.value = '#ffffff';
        bgImageInput.value = '';
        removeImageBtn.click(); // Trigger image removal
        bgSize.value = 'cover';
        bgRepeat.value = 'no-repeat';
        bgPosition.value = 'center center';
        bgAttachment.value = 'scroll';

        // Apply reset background
        applyBackgroundToCanvas();
    });

    // Apply background styles to canvas
    function applyBackgroundToCanvas() {
        const canvas = document.querySelector('.layout-builder-canvas');

        if (backgroundState.type === 'transparent') {
            canvas.style.background = 'transparent';
            canvas.style.backgroundImage = 'none';
        } else if (backgroundState.type === 'color') {
            canvas.style.backgroundColor = backgroundState.color;
            canvas.style.backgroundImage = 'none';
        } else if (backgroundState.type === 'image' && backgroundState.imageBase64) {
            canvas.style.backgroundImage = `url(${backgroundState.imageBase64})`;
            canvas.style.backgroundSize = backgroundState.size;
            canvas.style.backgroundRepeat = backgroundState.repeat;
            canvas.style.backgroundPosition = backgroundState.position;
            canvas.style.backgroundAttachment = backgroundState.attachment;
            canvas.style.backgroundColor = backgroundState.color; // Fallback color
        }

        console.log('Background applied:', backgroundState);
    }

    // Drag and drop functionality for image upload
    const dropZone = document.querySelector('.image-upload-drop-zone');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, () => dropZone.classList.add('drag-over'), false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, () => dropZone.classList.remove('drag-over'), false);
    });

    dropZone.addEventListener('drop', function(e) {
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            bgImageInput.files = files;
            handleImageUpload({ target: { files: files } });
        }
    });

    // Click to upload functionality
    dropZone.addEventListener('click', function() {
        bgImageInput.click();
    });

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

/* ===== BACKGROUND CONFIGURATION MODAL ===== */

.background-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.background-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(4px);
}

.background-modal-content {
    position: relative;
    background: white;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 600px;
    max-height: 90vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.background-modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    border-bottom: 1px solid #e5e7eb;
    background: #f9fafb;
}

.background-modal-header h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #1f2937;
}

.background-modal-close {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: #6b7280;
    padding: 4px;
    border-radius: 4px;
    transition: all 0.2s ease;
}

.background-modal-close:hover {
    background: #f3f4f6;
    color: #374151;
}

.background-modal-body {
    padding: 24px;
    overflow-y: auto;
    flex: 1;
}

.background-config-section {
    margin-bottom: 24px;
}

.background-config-section:last-child {
    margin-bottom: 0;
}

.background-config-label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 500;
    color: #374151;
}

.background-type-buttons {
    display: flex;
    gap: 8px;
    margin-top: 8px;
}

.background-type-btn {
    flex: 1;
    padding: 12px 16px;
    background: white;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    color: #6b7280;
    cursor: pointer;
    transition: all 0.2s ease;
    text-align: center;
}

.background-type-btn:hover {
    border-color: #d1d5db;
    color: #374151;
}

.background-type-btn.active {
    background: #3b82f6;
    border-color: #3b82f6;
    color: white;
}

.color-input-group {
    display: flex;
    gap: 12px;
    align-items: center;
}

.background-color-picker {
    width: 60px;
    height: 40px;
    border: 2px solid #e5e7eb;
    border-radius: 6px;
    cursor: pointer;
    background: none;
}

.background-color-text {
    flex: 1;
    padding: 10px 12px;
    border: 2px solid #e5e7eb;
    border-radius: 6px;
    font-family: 'Courier New', monospace;
    font-size: 14px;
    color: #374151;
}

.background-color-text:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.image-upload-area {
    position: relative;
}

.background-image-input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.image-upload-drop-zone {
    border: 2px dashed #d1d5db;
    border-radius: 8px;
    padding: 40px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #f9fafb;
}

.image-upload-drop-zone:hover,
.image-upload-drop-zone.drag-over {
    border-color: #3b82f6;
    background: #f0f9ff;
}

.image-upload-drop-zone p {
    margin: 4px 0;
    color: #6b7280;
}

.image-upload-info {
    font-size: 12px;
    color: #9ca3af !important;
}

.image-preview {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    background: #f3f4f6;
    border-radius: 8px;
    margin-top: 12px;
}

.image-preview img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 4px;
    border: 1px solid #e5e7eb;
}

.remove-image-btn {
    background: #ef4444;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    transition: background 0.2s ease;
}

.remove-image-btn:hover {
    background: #dc2626;
}

.image-properties {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e5e7eb;
}

.property-row {
    display: flex;
    gap: 16px;
    margin-bottom: 16px;
}

.property-col {
    flex: 1;
}

.background-select {
    width: 100%;
    padding: 8px 12px;
    border: 2px solid #e5e7eb;
    border-radius: 6px;
    background: white;
    color: #374151;
    font-size: 14px;
    cursor: pointer;
}

.background-select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.background-modal-footer {
    padding: 20px 24px;
    background: #f9fafb;
    border-top: 1px solid #e5e7eb;
    display: flex;
    gap: 12px;
    justify-content: flex-end;
}

.background-apply-btn {
    background: #3b82f6;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s ease;
}

.background-apply-btn:hover {
    background: #2563eb;
}

.background-reset-btn {
    background: #f3f4f6;
    color: #374151;
    border: 1px solid #d1d5db;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.background-reset-btn:hover {
    background: #e5e7eb;
    border-color: #9ca3af;
}

/* Dark mode styles for background modal */
.dark .background-modal-content {
    background: #1f2937;
    color: #f9fafb;
}

.dark .background-modal-header {
    background: #111827;
    border-color: #374151;
}

.dark .background-modal-header h3 {
    color: #f9fafb;
}

.dark .background-modal-close {
    color: #9ca3af;
}

.dark .background-modal-close:hover {
    background: #374151;
    color: #f9fafb;
}

.dark .background-config-label {
    color: #e5e7eb;
}

.dark .background-type-btn {
    background: #374151;
    border-color: #4b5563;
    color: #d1d5db;
}

.dark .background-type-btn:hover {
    border-color: #6b7280;
    color: #f9fafb;
}

.dark .background-color-picker,
.dark .background-color-text,
.dark .background-select {
    background: #374151;
    border-color: #4b5563;
    color: #f9fafb;
}

.dark .background-color-text:focus,
.dark .background-select:focus {
    border-color: #3b82f6;
}

.dark .image-upload-drop-zone {
    background: #374151;
    border-color: #4b5563;
    color: #d1d5db;
}

.dark .image-upload-drop-zone:hover,
.dark .image-upload-drop-zone.drag-over {
    background: #1e3a8a;
    border-color: #3b82f6;
}

.dark .image-preview {
    background: #374151;
}

.dark .image-properties {
    border-color: #4b5563;
}

.dark .background-modal-footer {
    background: #111827;
    border-color: #374151;
}

.dark .background-reset-btn {
    background: #374151;
    border-color: #4b5563;
    color: #e5e7eb;
}

.dark .background-reset-btn:hover {
    background: #4b5563;
    border-color: #6b7280;
}

/* Responsive design */
@media (max-width: 640px) {
    .background-modal {
        padding: 10px;
    }

    .background-modal-content {
        max-width: 100%;
    }

    .background-type-buttons {
        flex-direction: column;
    }

    .property-row {
        flex-direction: column;
        gap: 12px;
    }

    .background-modal-footer {
        flex-direction: column;
    }
}
</style>