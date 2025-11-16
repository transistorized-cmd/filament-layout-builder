<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="layout-builder-container">
        <!-- Top Toolbar -->
        <div class="layout-builder-toolbar">
            <div class="layout-builder-toolbar-left">
                <span class="layout-builder-logo">📧 Email Builder</span>
            </div>
            <div class="layout-builder-toolbar-right">
                <button type="button" id="email-theme-toggle-{{ $getStatePath() }}" class="layout-builder-btn" title="Toggle Email Content Theme">
                    <span class="theme-icon">📧</span> <span class="theme-text">Email Light</span>
                </button>
                <button type="button" id="background-config-btn-{{ $getStatePath() }}" class="layout-builder-btn" title="Background Configuration">
                    🎨 Background
                </button>
                <button type="button" id="clear-canvas-btn-{{ $getStatePath() }}" class="layout-builder-btn" title="Clear Canvas">
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
                        <div class="layout-builder-block-item" data-block-type="text" draggable="true">
                            <span class="layout-builder-block-icon">📝</span>
                            <span class="layout-builder-block-label">Text</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="image" draggable="true">
                            <span class="layout-builder-block-icon">🖼️</span>
                            <span class="layout-builder-block-label">Image</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="button" draggable="true">
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
                    <div id="layout-builder-canvas-{{ $getStatePath() }}" class="layout-builder-canvas" data-email-theme="light">
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
                    <!-- No Selection State -->
                    <div class="layout-builder-no-selection" id="no-selection-{{ $getStatePath() }}">
                        <p>🎯 Select a block to edit its properties</p>
                        <p>Click on any block in the canvas to see available options here.</p>
                    </div>

                    <!-- Text Properties Panel (Hidden by default) -->
                    <div class="text-properties" id="text-properties-{{ $getStatePath() }}" style="display: none;">
                        <h4>📝 Text Properties</h4>

                        <!-- Font Family -->
                        <div class="property-group">
                            <label class="property-label">Font Family</label>
                            <select id="text-font-family-{{ $getStatePath() }}" class="property-select">
                                <option value="Arial, Helvetica, sans-serif">Arial</option>
                                <option value="Georgia, serif">Georgia</option>
                                <option value="Times New Roman, serif">Times New Roman</option>
                            </select>
                        </div>

                        <!-- Font Size -->
                        <div class="property-group">
                            <label class="property-label">Font Size</label>
                            <select id="text-font-size-{{ $getStatePath() }}" class="property-select">
                                <option value="12px">12px</option>
                                <option value="14px">14px</option>
                                <option value="16px" selected>16px</option>
                                <option value="18px">18px</option>
                                <option value="20px">20px</option>
                                <option value="24px">24px</option>
                                <option value="28px">28px</option>
                                <option value="32px">32px</option>
                            </select>
                        </div>

                        <!-- Text Alignment -->
                        <div class="property-group">
                            <label class="property-label">Text Alignment</label>
                            <div class="alignment-buttons">
                                <button type="button" class="alignment-btn" data-align="left" title="Align Left">
                                    📄
                                </button>
                                <button type="button" class="alignment-btn active" data-align="center" title="Align Center">
                                    📄
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Align Right">
                                    📄
                                </button>
                            </div>
                        </div>

                        <!-- Text Formatting -->
                        <div class="property-group">
                            <label class="property-label">Text Formatting</label>
                            <div class="formatting-buttons">
                                <button type="button" class="format-btn" data-format="bold" title="Bold">
                                    <strong>B</strong>
                                </button>
                                <button type="button" class="format-btn" data-format="italic" title="Italic">
                                    <em>I</em>
                                </button>
                                <button type="button" class="format-btn" data-format="link" title="Add Link">
                                    🔗
                                </button>
                            </div>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-text-block-{{ $getStatePath() }}" class="delete-block-btn">
                                🗑️ Delete Block
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Image Properties Panel -->
                <div id="image-properties-{{ $getStatePath() }}" class="properties-panel" style="display: none;">
                    <h4>Image Properties</h4>

                    <div class="property-section">
                        <!-- Image Upload -->
                        <div class="property-group">
                            <label class="property-label">Image</label>
                            <input type="file" id="image-upload-{{ $getStatePath() }}" accept="image/*" style="display: none;">
                            <button type="button" id="image-upload-btn-{{ $getStatePath() }}" class="upload-btn">
                                📁 Change Image
                            </button>
                            <div class="image-preview" id="image-preview-{{ $getStatePath() }}">
                                <img id="image-preview-img-{{ $getStatePath() }}" src="https://placehold.co/600x400.png" alt="Preview" style="max-width: 100%; height: auto; border-radius: 4px; display: block;">
                            </div>
                        </div>

                        <!-- Width Control -->
                        <div class="property-group">
                            <label class="property-label" for="image-width-{{ $getStatePath() }}">Width</label>
                            <input type="text" id="image-width-{{ $getStatePath() }}" class="property-input" placeholder="100%" value="100%">
                            <small class="property-help">Examples: 100%, 300px, 50vw</small>
                        </div>

                        <!-- Title/Alt Text -->
                        <div class="property-group">
                            <label class="property-label" for="image-title-{{ $getStatePath() }}">Title (Alt Text)</label>
                            <input type="text" id="image-title-{{ $getStatePath() }}" class="property-input" placeholder="Optional description...">
                            <small class="property-help">For accessibility and email clients</small>
                        </div>

                        <!-- Link URL -->
                        <div class="property-group">
                            <label class="property-label" for="image-url-{{ $getStatePath() }}">Link URL</label>
                            <input type="url" id="image-url-{{ $getStatePath() }}" class="property-input" placeholder="https://example.com (optional)">
                            <small class="property-help">Make image clickable</small>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-image-block-{{ $getStatePath() }}" class="delete-block-btn">
                                🗑️ Delete Block
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Button Properties Panel -->
                <div id="button-properties-{{ $getStatePath() }}" class="properties-panel" style="display: none;">
                    <h4>Button Properties</h4>

                    <div class="property-section">
                        <!-- Button Text -->
                        <div class="property-group">
                            <label class="property-label" for="button-text-{{ $getStatePath() }}">Button Text</label>
                            <input type="text" id="button-text-{{ $getStatePath() }}" class="property-input" placeholder="Click here" value="Click here">
                        </div>

                        <!-- Button URL -->
                        <div class="property-group">
                            <label class="property-label" for="button-url-{{ $getStatePath() }}">Link URL</label>
                            <input type="url" id="button-url-{{ $getStatePath() }}" class="property-input" placeholder="https://example.com">
                            <small class="property-help">Where the button links to</small>
                        </div>

                        <!-- Button Style -->
                        <div class="property-group">
                            <label class="property-label">Button Style</label>
                            <div class="button-style-grid">
                                <button type="button" class="button-style-option active" data-style="primary">
                                    <div class="button-preview" style="background: #3b82f6; color: white;">Primary</div>
                                </button>
                                <button type="button" class="button-style-option" data-style="secondary">
                                    <div class="button-preview" style="background: #6b7280; color: white;">Secondary</div>
                                </button>
                                <button type="button" class="button-style-option" data-style="outline">
                                    <div class="button-preview" style="background: transparent; color: #3b82f6; border: 2px solid #3b82f6;">Outline</div>
                                </button>
                            </div>
                        </div>

                        <!-- Button Size -->
                        <div class="property-group">
                            <label class="property-label" for="button-size-{{ $getStatePath() }}">Size</label>
                            <select id="button-size-{{ $getStatePath() }}" class="property-select">
                                <option value="small">Small</option>
                                <option value="medium" selected>Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>

                        <!-- Button Alignment -->
                        <div class="property-group">
                            <label class="property-label">Alignment</label>
                            <div class="alignment-buttons">
                                <button type="button" class="alignment-btn" data-align="left" title="Left">
                                    ⬅️
                                </button>
                                <button type="button" class="alignment-btn active" data-align="center" title="Center">
                                    ↔️
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Right">
                                    ➡️
                                </button>
                            </div>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-button-block-{{ $getStatePath() }}" class="delete-block-btn">
                                🗑️ Delete Block
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Configuration Modal -->
        <div id="background-config-modal-{{ $getStatePath() }}" class="background-modal" style="display: none;">
        <div class="background-modal-overlay"></div>
        <div class="background-modal-content">
            <div class="background-modal-header">
                <h3>🎨 Background Configuration</h3>
                <button type="button" id="background-modal-close-{{ $getStatePath() }}" class="background-modal-close">✕</button>
            </div>

            <div class="background-modal-body">
                <!-- Background Type Selector -->
                <div class="background-config-section">
                    <label class="background-config-label">Background Type</label>
                    <div class="background-type-buttons">
                        <button type="button" id="bg-type-color-{{ $getStatePath() }}" class="background-type-btn active" data-type="color">
                            🎨 Color
                        </button>
                        <button type="button" id="bg-type-image-{{ $getStatePath() }}" class="background-type-btn" data-type="image">
                            🖼️ Image
                        </button>
                        <button type="button" id="bg-type-transparent-{{ $getStatePath() }}" class="background-type-btn" data-type="transparent">
                            ⬜ Transparent
                        </button>
                    </div>
                </div>

                <!-- Color Configuration -->
                <div id="color-config-{{ $getStatePath() }}" class="background-config-section">
                    <label class="background-config-label" for="bg-color-{{ $getStatePath() }}">Background Color</label>
                    <div class="color-input-group">
                        <input type="color" id="bg-color-{{ $getStatePath() }}" class="background-color-picker" value="#ffffff">
                        <input type="text" id="bg-color-text-{{ $getStatePath() }}" class="background-color-text" value="#ffffff" placeholder="#ffffff">
                    </div>
                </div>

                <!-- Image Configuration -->
                <div id="image-config-{{ $getStatePath() }}" class="background-config-section" style="display: none;">
                    <label class="background-config-label" for="bg-image-{{ $getStatePath() }}">Background Image</label>
                    <div class="image-upload-area">
                        <input type="file" id="bg-image-{{ $getStatePath() }}" class="background-image-input" accept="image/*">
                        <div class="image-upload-drop-zone">
                            <p>📁 Choose image or drag & drop</p>
                            <p class="image-upload-info">Max size: 2MB • Formats: JPG, PNG, GIF, WebP</p>
                        </div>
                        <div id="image-preview-{{ $getStatePath() }}" class="image-preview" style="display: none;">
                            <img id="preview-img-{{ $getStatePath() }}" src="" alt="Preview">
                            <button type="button" id="remove-image-{{ $getStatePath() }}" class="remove-image-btn">🗑️ Remove</button>
                        </div>
                    </div>

                    <!-- Image CSS Properties -->
                    <div class="image-properties">
                        <div class="property-row">
                            <div class="property-col">
                                <label class="background-config-label" for="bg-size-{{ $getStatePath() }}">Size</label>
                                <select id="bg-size-{{ $getStatePath() }}" class="background-select">
                                    <option value="cover">Cover</option>
                                    <option value="contain">Contain</option>
                                    <option value="auto">Auto</option>
                                    <option value="100% 100%">Stretch</option>
                                </select>
                            </div>
                            <div class="property-col">
                                <label class="background-config-label" for="bg-repeat-{{ $getStatePath() }}">Repeat</label>
                                <select id="bg-repeat-{{ $getStatePath() }}" class="background-select">
                                    <option value="no-repeat">No Repeat</option>
                                    <option value="repeat">Repeat</option>
                                    <option value="repeat-x">Repeat X</option>
                                    <option value="repeat-y">Repeat Y</option>
                                </select>
                            </div>
                        </div>
                        <div class="property-row">
                            <div class="property-col">
                                <label class="background-config-label" for="bg-position-{{ $getStatePath() }}">Position</label>
                                <select id="bg-position-{{ $getStatePath() }}" class="background-select">
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
                                <label class="background-config-label" for="bg-attachment-{{ $getStatePath() }}">Attachment</label>
                                <select id="bg-attachment-{{ $getStatePath() }}" class="background-select">
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
                <button type="button" id="background-apply-btn-{{ $getStatePath() }}" class="background-apply-btn">Apply Background</button>
                <button type="button" id="background-reset-btn-{{ $getStatePath() }}" class="background-reset-btn">Reset</button>
            </div>
        </div>

        <!-- Hidden input to store form data -->
        <input type="hidden" name="{{ $getStatePath() }}" value="" />

        <script>
document.addEventListener('DOMContentLoaded', function() {
    // Get unique instance identifier first
    const statePath = '{{ $getStatePath() }}';

    // Theme state management
    let emailDarkMode = false;

    // Get theme toggle buttons and elements (unique per instance)
    const emailToggle = document.getElementById('email-theme-toggle-' + statePath);
    const container = document.querySelector('.layout-builder-container');
    const canvas = document.getElementById('layout-builder-canvas-' + statePath);

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
    if (emailToggle) {
        emailToggle.addEventListener('click', function() {
            emailDarkMode = !emailDarkMode;

            if (emailDarkMode) {
                canvas.setAttribute('data-email-theme', 'dark');
            } else {
                canvas.setAttribute('data-email-theme', 'light');
            }

            updateEmailToggleButton();
        });
    } else {
        console.error('Email toggle button not found');
    }

    function updateEmailToggleButton() {
        if (!emailToggle) return;

        const icon = emailToggle.querySelector('.theme-icon');
        const text = emailToggle.querySelector('.theme-text');

        if (icon && text) {
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
    }

    // Initialize email button state
    updateEmailToggleButton();

    // ===== BACKGROUND CONFIGURATION FUNCTIONALITY =====

    const backgroundBtn = document.getElementById('background-config-btn-' + statePath);
    const backgroundModal = document.getElementById('background-config-modal-' + statePath);
    const backgroundModalClose = document.getElementById('background-modal-close-' + statePath);
    const backgroundApplyBtn = document.getElementById('background-apply-btn-' + statePath);
    const backgroundResetBtn = document.getElementById('background-reset-btn-' + statePath);

    // Background type buttons
    const bgTypeColor = document.getElementById('bg-type-color-' + statePath);
    const bgTypeImage = document.getElementById('bg-type-image-' + statePath);
    const bgTypeTransparent = document.getElementById('bg-type-transparent-' + statePath);

    // Configuration sections
    const colorConfig = document.getElementById('color-config-' + statePath);
    const imageConfig = document.getElementById('image-config-' + statePath);

    // Form inputs
    const bgColorPicker = document.getElementById('bg-color-' + statePath);
    const bgColorText = document.getElementById('bg-color-text-' + statePath);
    const bgImageInput = document.getElementById('bg-image-' + statePath);
    const imagePreview = document.getElementById('image-preview-' + statePath);
    const previewImg = document.getElementById('preview-img-' + statePath);
    const removeImageBtn = document.getElementById('remove-image-' + statePath);

    // CSS property inputs
    const bgSize = document.getElementById('bg-size-' + statePath);
    const bgRepeat = document.getElementById('bg-repeat-' + statePath);
    const bgPosition = document.getElementById('bg-position-' + statePath);
    const bgAttachment = document.getElementById('bg-attachment-' + statePath);

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
    if (backgroundBtn && backgroundModal) {
        backgroundBtn.addEventListener('click', function() {
            backgroundModal.style.display = 'block';
        });
    } else {
        console.error('Background button or modal not found for instance:', statePath);
    }

    // Close background modal
    function closeBackgroundModal() {
        if (backgroundModal) {
            backgroundModal.style.display = 'none';
        }
    }

    if (backgroundModalClose) {
        backgroundModalClose.addEventListener('click', closeBackgroundModal);
    }

    // Close modal when clicking overlay
    if (backgroundModal) {
        backgroundModal.addEventListener('click', function(e) {
            if (e.target === backgroundModal || e.target.classList.contains('background-modal-overlay')) {
                closeBackgroundModal();
            }
        });
    }

    // Background type switching
    function switchBackgroundType(type) {
        // Update button states
        document.querySelectorAll('.background-type-btn').forEach(btn => btn.classList.remove('active'));
        const targetTypeBtn = document.getElementById('bg-type-' + type + '-' + statePath);
        if (targetTypeBtn) {
            targetTypeBtn.classList.add('active');
        }

        // Show/hide configuration sections
        if (colorConfig) colorConfig.style.display = type === 'color' ? 'block' : 'none';
        if (imageConfig) imageConfig.style.display = type === 'image' ? 'block' : 'none';

        backgroundState.type = type;
    }

    if (bgTypeColor) bgTypeColor.addEventListener('click', () => switchBackgroundType('color'));
    if (bgTypeImage) bgTypeImage.addEventListener('click', () => switchBackgroundType('image'));
    if (bgTypeTransparent) bgTypeTransparent.addEventListener('click', () => switchBackgroundType('transparent'));

    // Color picker synchronization
    if (bgColorPicker && bgColorText) {
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
    }

    // Image upload handling
    if (bgImageInput) {
        bgImageInput.addEventListener('change', handleImageUpload);
    }

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
    if (removeImageBtn) {
        removeImageBtn.addEventListener('click', function() {
            if (bgImageInput) bgImageInput.value = '';
            backgroundState.image = null;
            backgroundState.imageBase64 = null;
            if (imagePreview) imagePreview.style.display = 'none';
            const dropZone = document.querySelector('.image-upload-drop-zone');
            if (dropZone) dropZone.style.display = 'block';
        });
    }

    // CSS property updates
    if (bgSize) bgSize.addEventListener('change', () => backgroundState.size = bgSize.value);
    if (bgRepeat) bgRepeat.addEventListener('change', () => backgroundState.repeat = bgRepeat.value);
    if (bgPosition) bgPosition.addEventListener('change', () => backgroundState.position = bgPosition.value);
    if (bgAttachment) bgAttachment.addEventListener('change', () => backgroundState.attachment = bgAttachment.value);

    // Apply background
    if (backgroundApplyBtn) {
        backgroundApplyBtn.addEventListener('click', function() {
            applyBackgroundToCanvas();
            closeBackgroundModal();
        });
    }

    // Reset background
    if (backgroundResetBtn) {
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
            if (bgColorPicker) bgColorPicker.value = '#ffffff';
            if (bgColorText) bgColorText.value = '#ffffff';
            if (bgImageInput) bgImageInput.value = '';
            if (removeImageBtn) removeImageBtn.click(); // Trigger image removal
            if (bgSize) bgSize.value = 'cover';
            if (bgRepeat) bgRepeat.value = 'no-repeat';
            if (bgPosition) bgPosition.value = 'center center';
            if (bgAttachment) bgAttachment.value = 'scroll';

            // Apply reset background
            applyBackgroundToCanvas();
        });
    }

    // Apply background styles to canvas
    function applyBackgroundToCanvas() {
        // Use the unique canvas reference we already have
        if (!canvas) {
            console.error('Canvas not found for applying background');
            return;
        }

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

    // ===== PHASE 2 TEST: CANVAS DROP ZONE - NO DOM CREATION =====

    // Phase 1: Basic drag start handling
    document.querySelectorAll('.layout-builder-block-item[draggable="true"]').forEach(block => {
        block.addEventListener('dragstart', function(e) {
            const blockType = this.dataset.blockType;
            e.dataTransfer.setData('text/plain', blockType);
            e.dataTransfer.effectAllowed = 'copy';
            console.log('Drag started for block type:', blockType);
        });
    });

    // Phase 2: Canvas drop zone functionality - NO DOM CREATION
    if (canvas) {
        canvas.addEventListener('dragover', function(e) {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'copy';
            canvas.classList.add('drag-over-canvas');
            console.log('Drag over canvas');
        });

        canvas.addEventListener('dragleave', function(e) {
            if (!canvas.contains(e.relatedTarget)) {
                canvas.classList.remove('drag-over-canvas');
                console.log('Drag left canvas');
            }
        });

        canvas.addEventListener('drop', function(e) {
            e.preventDefault();
            canvas.classList.remove('drag-over-canvas');

            const blockType = e.dataTransfer.getData('text/plain');
            console.log('Dropped block type:', blockType, 'at position:', e.clientX, e.clientY);

            // Phase 3: DOM CREATION TEST
            if (blockType === 'text') {
                createTextBlock(e);
            } else if (blockType === 'image') {
                createImageBlock(e);
            } else if (blockType === 'button') {
                createButtonBlock(e);
            }
        });
    }

    // Phase 3: DOM Creation Function - TESTING IF THIS CAUSES LIVEWIRE ERROR
    let blockCounter = 0;
    let selectedBlock = null;

    // Get static properties panel elements (unique per instance)
    const noSelectionPanel = document.getElementById('no-selection-' + statePath);
    const textPropertiesPanel = document.getElementById('text-properties-' + statePath);
    const imagePropertiesPanel = document.getElementById('image-properties-' + statePath);
    const buttonPropertiesPanel = document.getElementById('button-properties-' + statePath);

    // Function to dynamically update canvas height based on content
    function updateCanvasHeight() {
        if (!canvas) return;

        // Find all blocks in the canvas
        const blocks = canvas.querySelectorAll('.email-block');

        if (blocks.length === 0) {
            // No blocks, set to minimum height
            canvas.style.height = '400px';
            return;
        }

        let maxBottom = 0;

        blocks.forEach(block => {
            const blockTop = block.offsetTop;
            const blockHeight = block.offsetHeight;
            const blockBottom = blockTop + blockHeight;

            if (blockBottom > maxBottom) {
                maxBottom = blockBottom;
            }
        });

        // Add padding at the bottom
        const paddingBottom = 40;
        const requiredHeight = Math.max(400, maxBottom + paddingBottom); // Minimum 400px

        // Set canvas height
        canvas.style.height = requiredHeight + 'px';

        console.log('Canvas height updated to:', requiredHeight + 'px', 'based on', blocks.length, 'blocks');
    }

    function createTextBlock(e) {
        blockCounter++;
        console.log('Creating text block #', blockCounter);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create text block element
        const textBlock = document.createElement('div');
        textBlock.className = 'email-block text-block';
        textBlock.dataset.blockId = 'text-' + blockCounter;
        textBlock.dataset.blockType = 'text';

        const textContent = document.createElement('div');
        textContent.className = 'text-block-content';
        textContent.contentEditable = true;
        textContent.innerHTML = 'Click to edit this text...';

        // Force text block to match content height
        function autoResize() {
            // Reset heights
            textContent.style.removeProperty('height');
            textBlock.style.removeProperty('height');

            // Force reflow to get accurate measurements
            setTimeout(() => {
                const contentHeight = textContent.offsetHeight;
                const fullHeight = contentHeight + 32; // padding

                // Use setProperty with important to force height
                textBlock.style.setProperty('height', fullHeight + 'px', 'important');
                textBlock.style.setProperty('min-height', fullHeight + 'px', 'important');

                // Update canvas height when text content changes
                updateCanvasHeight();
            }, 1);
        }

        textContent.addEventListener('input', autoResize);
        textContent.addEventListener('paste', function() {
            setTimeout(autoResize, 10);
        });
        textContent.addEventListener('keyup', autoResize);

        // Initial auto-resize
        setTimeout(autoResize, 10);

        textBlock.appendChild(textContent);

        // Calculate position relative to canvas with proper bounds checking
        const canvasRect = canvas.getBoundingClientRect();

        // Account for canvas padding - minimal padding for closer positioning
        const leftPadding = 10; // Minimal left padding for close edge alignment
        const topPadding = 20; // Small top padding
        const rightPadding = 40; // Keep some right padding
        const bottomPadding = 40; // Keep some bottom padding
        const blockWidth = 250; // Estimated text block width
        const blockHeight = 60; // Estimated text block height

        let x = e.clientX - canvasRect.left - (blockWidth / 2);
        let y = e.clientY - canvasRect.top - (blockHeight / 2);

        // Ensure the block stays within canvas bounds with minimal padding
        const maxX = canvas.clientWidth - blockWidth - rightPadding;
        const maxY = canvas.clientHeight - blockHeight - bottomPadding;

        x = Math.max(leftPadding, Math.min(x, maxX));
        y = Math.max(topPadding, Math.min(y, maxY));

        // If coordinates are invalid or outside reasonable bounds, position close to top-left
        if (x < 0 || y < 0 || isNaN(x) || isNaN(y)) {
            x = leftPadding; // Position close to left edge
            y = topPadding; // Position close to top edge
        }

        textBlock.style.position = 'absolute';
        textBlock.style.left = x + 'px';
        textBlock.style.top = y + 'px';

        // Add to canvas
        canvas.appendChild(textBlock);

        // Phase 4: ADD SELECTION FUNCTIONALITY
        textBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(textBlock);
        });

        // Auto-select the new block
        selectBlock(textBlock);

        // Update canvas height to accommodate new content
        updateCanvasHeight();

        console.log('Text block created and appended to canvas:', textBlock.dataset.blockId);
    }

    function createImageBlock(e) {
        blockCounter++;
        console.log('Creating image block #', blockCounter);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create image block element
        const imageBlock = document.createElement('div');
        imageBlock.className = 'email-block image-block';
        imageBlock.dataset.blockId = 'image-' + blockCounter;
        imageBlock.dataset.blockType = 'image';

        // Image container with wrapper for link support
        const imageWrapper = document.createElement('div');
        imageWrapper.className = 'image-wrapper';

        const img = document.createElement('img');
        img.src = 'https://placehold.co/600x400.png';
        img.alt = '';
        img.style.width = '100%';
        img.style.height = 'auto';
        img.style.display = 'block';
        img.style.maxWidth = '100%';

        imageWrapper.appendChild(img);
        imageBlock.appendChild(imageWrapper);

        // Calculate position with minimal padding like text blocks
        const canvasRect = canvas.getBoundingClientRect();
        const leftPadding = 10;
        const topPadding = 20;
        const rightPadding = 40;
        const bottomPadding = 40;
        const blockWidth = 250;
        const blockHeight = 150;

        let x = e.clientX - canvasRect.left - (blockWidth / 2);
        let y = e.clientY - canvasRect.top - (blockHeight / 2);

        const maxX = canvas.clientWidth - blockWidth - rightPadding;
        const maxY = canvas.clientHeight - blockHeight - bottomPadding;

        x = Math.max(leftPadding, Math.min(x, maxX));
        y = Math.max(topPadding, Math.min(y, maxY));

        if (x < 0 || y < 0 || isNaN(x) || isNaN(y)) {
            x = leftPadding;
            y = topPadding;
        }

        imageBlock.style.position = 'absolute';
        imageBlock.style.left = x + 'px';
        imageBlock.style.top = y + 'px';

        // Add to canvas
        canvas.appendChild(imageBlock);

        // Add selection functionality
        imageBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(imageBlock);
        });

        // Auto-select the new block
        selectBlock(imageBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Image block created and appended to canvas:', imageBlock.dataset.blockId);
    }

    function createButtonBlock(e) {
        blockCounter++;
        console.log('Creating button block #', blockCounter);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create button block element
        const buttonBlock = document.createElement('div');
        buttonBlock.className = 'email-block button-block';
        buttonBlock.dataset.blockId = 'button-' + blockCounter;
        buttonBlock.dataset.blockType = 'button';
        buttonBlock.dataset.style = 'primary';
        buttonBlock.dataset.size = 'medium';
        buttonBlock.dataset.align = 'center';

        // Button wrapper for alignment
        const buttonWrapper = document.createElement('div');
        buttonWrapper.className = 'button-wrapper';
        buttonWrapper.style.textAlign = 'center';

        // Create the actual button
        const button = document.createElement('a');
        button.href = '#';
        button.className = 'email-button email-button-primary email-button-medium';
        button.textContent = 'Click here';
        button.style.display = 'inline-block';
        button.style.textDecoration = 'none';

        buttonWrapper.appendChild(button);
        buttonBlock.appendChild(buttonWrapper);

        // Calculate position for full-width button row
        const canvasRect = canvas.getBoundingClientRect();
        const topPadding = 20;

        // For buttons, we want full width positioning
        let y = e.clientY - canvasRect.top - 30; // Center vertically around drop point

        // Ensure it's not too close to top
        y = Math.max(topPadding, y);

        // If coordinates are invalid, position at a reasonable location
        if (y < 0 || isNaN(y)) {
            y = topPadding;
        }

        buttonBlock.style.position = 'absolute';
        buttonBlock.style.left = '0px'; // Full width - start at left edge
        buttonBlock.style.top = y + 'px';
        buttonBlock.style.width = '100%'; // Full width of canvas

        // Add to canvas
        canvas.appendChild(buttonBlock);

        // Add selection functionality
        buttonBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            e.preventDefault(); // Prevent button click
            selectBlock(buttonBlock);
        });

        // Auto-select the new block
        selectBlock(buttonBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Button block created and appended to canvas:', buttonBlock.dataset.blockId);
    }

    // Phase 4: SELECTION AND PROPERTIES PANEL FUNCTIONALITY
    function selectBlock(block) {
        console.log('Selecting block:', block.dataset.blockId);

        // Remove previous selection
        document.querySelectorAll('.email-block.selected').forEach(b => {
            b.classList.remove('selected');
        });

        // Select new block
        block.classList.add('selected');
        selectedBlock = block;

        // Update properties panel - THIS MIGHT BE THE CULPRIT
        updatePropertiesPanel(block);
    }

    function updatePropertiesPanel(block) {
        console.log('Updating properties panel for block:', block.dataset.blockType);

        // Hide all panels first
        if (noSelectionPanel) noSelectionPanel.style.display = 'none';
        if (textPropertiesPanel) textPropertiesPanel.style.display = 'none';
        if (imagePropertiesPanel) imagePropertiesPanel.style.display = 'none';
        if (buttonPropertiesPanel) buttonPropertiesPanel.style.display = 'none';

        // Show relevant panel - NO innerHTML UPDATES!
        if (block.dataset.blockType === 'text' && textPropertiesPanel) {
            textPropertiesPanel.style.display = 'block';
            addPropertyListeners(block);
        } else if (block.dataset.blockType === 'image' && imagePropertiesPanel) {
            imagePropertiesPanel.style.display = 'block';
            addImagePropertyListeners(block);
        } else if (block.dataset.blockType === 'button' && buttonPropertiesPanel) {
            buttonPropertiesPanel.style.display = 'block';
            addButtonPropertyListeners(block);
        }
    }

    function addPropertyListeners(block) {
        const textContent = block.querySelector('.text-block-content');

        // Force existing block to match content height
        function autoResizeExisting() {
            // Reset heights
            textContent.style.removeProperty('height');
            block.style.removeProperty('height');

            // Force reflow to get accurate measurements
            setTimeout(() => {
                const contentHeight = textContent.offsetHeight;
                const fullHeight = contentHeight + 32; // padding

                // Use setProperty with important to force height
                block.style.setProperty('height', fullHeight + 'px', 'important');
                block.style.setProperty('min-height', fullHeight + 'px', 'important');
            }, 1);
        }

        if (textContent) {
            // Remove any existing event listeners to prevent duplicates
            textContent.removeEventListener('input', autoResizeExisting);
            textContent.removeEventListener('keyup', autoResizeExisting);

            // Add resize event listeners
            textContent.addEventListener('input', autoResizeExisting);
            textContent.addEventListener('keyup', autoResizeExisting);
            textContent.addEventListener('paste', function() {
                setTimeout(autoResizeExisting, 10);
            });

            // Initial resize when selected
            setTimeout(autoResizeExisting, 10);
        }

        // Get static elements by unique IDs
        const fontFamilySelect = document.getElementById('text-font-family-' + statePath);
        const fontSizeSelect = document.getElementById('text-font-size-' + statePath);
        const deleteBtn = document.getElementById('delete-text-block-' + statePath);
        const alignmentBtns = textPropertiesPanel?.querySelectorAll('.alignment-btn');
        const formatBtns = textPropertiesPanel?.querySelectorAll('.format-btn');

        // Font family
        if (fontFamilySelect) {
            fontFamilySelect.onchange = function() {
                textContent.style.fontFamily = this.value;
                setTimeout(autoResizeExisting, 10); // Resize after font change
            };
        }

        // Font size
        if (fontSizeSelect) {
            fontSizeSelect.onchange = function() {
                textContent.style.fontSize = this.value;
                setTimeout(autoResizeExisting, 10); // Resize after font size change
            };
        }

        // Text alignment
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.onclick = function() {
                    // Update button states
                    alignmentBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // Apply alignment
                    textContent.style.textAlign = this.dataset.align;
                };
            });
        }

        // Text formatting
        if (formatBtns) {
            formatBtns.forEach(btn => {
                btn.onclick = function() {
                    const format = this.dataset.format;

                    if (format === 'link') {
                        const url = prompt('Enter URL:');
                        if (url) {
                            document.execCommand('createLink', false, url);
                        }
                    } else {
                        document.execCommand(format, false, null);
                    }

                    textContent.focus();
                };
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Update canvas height after deleting block
                updateCanvasHeight();

                // Show no selection panel - NO innerHTML!
                if (textPropertiesPanel) textPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    function addImagePropertyListeners(block) {
        const img = block.querySelector('img');
        const imageWrapper = block.querySelector('.image-wrapper');

        // Get image property controls
        const imageUpload = document.getElementById('image-upload-' + statePath);
        const imageUploadBtn = document.getElementById('image-upload-btn-' + statePath);
        const imagePreviewImg = document.getElementById('image-preview-img-' + statePath);
        const widthInput = document.getElementById('image-width-' + statePath);
        const titleInput = document.getElementById('image-title-' + statePath);
        const urlInput = document.getElementById('image-url-' + statePath);
        const deleteBtn = document.getElementById('delete-image-block-' + statePath);

        // Load current values into form
        if (img && widthInput) widthInput.value = img.style.width || '100%';
        if (img && titleInput) titleInput.value = img.alt || '';
        if (imageWrapper && urlInput) {
            const existingLink = imageWrapper.querySelector('a');
            urlInput.value = existingLink ? existingLink.href : '';
        }
        if (img && imagePreviewImg) imagePreviewImg.src = img.src;

        // Image upload functionality
        if (imageUploadBtn && imageUpload) {
            imageUploadBtn.onclick = () => imageUpload.click();

            imageUpload.onchange = function(e) {
                const file = e.target.files[0];
                if (!file) return;

                // Check file size (2MB limit)
                if (file.size > 2 * 1024 * 1024) {
                    alert('Image must be under 2MB. Please choose a smaller image.');
                    return;
                }

                // Convert to base64
                const reader = new FileReader();
                reader.onload = function(e) {
                    const base64 = e.target.result;

                    // Update image in block
                    if (img) img.src = base64;
                    if (imagePreviewImg) imagePreviewImg.src = base64;

                    console.log('Image updated with base64 data');
                };
                reader.readAsDataURL(file);
            };
        }

        // Width control
        if (widthInput) {
            widthInput.addEventListener('input', function() {
                const width = this.value.trim();
                if (img) {
                    img.style.width = width || '100%';
                    // Update canvas height in case image size changed
                    setTimeout(updateCanvasHeight, 100);
                }
                console.log('Image width updated to:', width);
            });
        }

        // Title/Alt text control
        if (titleInput) {
            titleInput.addEventListener('input', function() {
                if (img) {
                    img.alt = this.value;
                    img.title = this.value;
                }
                console.log('Image alt text updated to:', this.value);
            });
        }

        // URL/Link control
        if (urlInput) {
            urlInput.addEventListener('input', function() {
                const url = this.value.trim();

                // Remove existing link
                const existingLink = imageWrapper.querySelector('a');
                if (existingLink) {
                    imageWrapper.insertBefore(img, existingLink);
                    existingLink.remove();
                }

                // Add new link if URL provided
                if (url) {
                    const link = document.createElement('a');
                    link.href = url;
                    link.target = '_blank';
                    link.rel = 'noopener noreferrer';
                    link.style.display = 'block';

                    imageWrapper.appendChild(link);
                    link.appendChild(img);
                } else {
                    // No link, just append img directly
                    imageWrapper.appendChild(img);
                }

                console.log('Image link updated to:', url || 'none');
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting image block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Update canvas height after deleting block
                updateCanvasHeight();

                // Show no selection panel
                if (imagePropertiesPanel) imagePropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    function addButtonPropertyListeners(block) {
        const button = block.querySelector('.email-button');
        const buttonWrapper = block.querySelector('.button-wrapper');

        // Get button property controls
        const textInput = document.getElementById('button-text-' + statePath);
        const urlInput = document.getElementById('button-url-' + statePath);
        const sizeSelect = document.getElementById('button-size-' + statePath);
        const deleteBtn = document.getElementById('delete-button-block-' + statePath);
        const styleOptions = buttonPropertiesPanel?.querySelectorAll('.button-style-option');
        const alignmentBtns = buttonPropertiesPanel?.querySelectorAll('.alignment-btn');

        // Load current values into form
        if (button && textInput) textInput.value = button.textContent || 'Click here';
        if (button && urlInput) urlInput.value = button.href === location.href + '#' ? '' : button.href;
        if (sizeSelect) sizeSelect.value = block.dataset.size || 'medium';

        // Set active style option
        if (styleOptions) {
            styleOptions.forEach(option => {
                option.classList.remove('active');
                if (option.dataset.style === block.dataset.style) {
                    option.classList.add('active');
                }
            });
        }

        // Set active alignment
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.align === block.dataset.align) {
                    btn.classList.add('active');
                }
            });
        }

        // Button text control
        if (textInput) {
            textInput.addEventListener('input', function() {
                if (button) {
                    button.textContent = this.value || 'Click here';
                }
                console.log('Button text updated to:', this.value);
            });
        }

        // URL control
        if (urlInput) {
            urlInput.addEventListener('input', function() {
                if (button) {
                    button.href = this.value || '#';
                }
                console.log('Button URL updated to:', this.value);
            });
        }

        // Size control
        if (sizeSelect) {
            sizeSelect.addEventListener('change', function() {
                const newSize = this.value;
                block.dataset.size = newSize;

                if (button) {
                    // Remove old size classes
                    button.classList.remove('email-button-small', 'email-button-medium', 'email-button-large');
                    // Add new size class
                    button.classList.add('email-button-' + newSize);
                }

                console.log('Button size updated to:', newSize);
            });
        }

        // Style options
        if (styleOptions) {
            styleOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const newStyle = this.dataset.style;
                    block.dataset.style = newStyle;

                    // Remove active from all options
                    styleOptions.forEach(opt => opt.classList.remove('active'));
                    // Add active to clicked option
                    this.classList.add('active');

                    if (button) {
                        // Remove old style classes
                        button.classList.remove('email-button-primary', 'email-button-secondary', 'email-button-outline');
                        // Add new style class
                        button.classList.add('email-button-' + newStyle);
                    }

                    console.log('Button style updated to:', newStyle);
                });
            });
        }

        // Alignment controls
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const newAlign = this.dataset.align;
                    block.dataset.align = newAlign;

                    // Remove active from all buttons
                    alignmentBtns.forEach(b => b.classList.remove('active'));
                    // Add active to clicked button
                    this.classList.add('active');

                    // Apply alignment
                    if (buttonWrapper) {
                        buttonWrapper.style.textAlign = newAlign;
                    }

                    console.log('Button alignment updated to:', newAlign);
                });
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting button block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Update canvas height after deleting block
                updateCanvasHeight();

                // Show no selection panel
                if (buttonPropertiesPanel) buttonPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    // ===== CLEAR CANVAS FUNCTIONALITY =====

    const clearCanvasBtn = document.getElementById('clear-canvas-btn-' + statePath);

    if (clearCanvasBtn) {
        clearCanvasBtn.addEventListener('click', function() {
            // Show confirmation dialog
            const confirmed = confirm('Are you sure you want to clear the canvas? This will remove all elements and reset the background. This action cannot be undone.');

            if (confirmed) {
                clearCanvas();
            }
        });
    }

    function clearCanvas() {
        console.log('Clearing canvas...');

        // Remove all email blocks from canvas
        const emailBlocks = canvas.querySelectorAll('.email-block');
        emailBlocks.forEach(block => {
            console.log('Removing block:', block.dataset.blockId);
            block.remove();
        });

        // Reset block counter and selected block
        blockCounter = 0;
        selectedBlock = null;

        // Show canvas placeholder again
        const canvasPlaceholder = canvas.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'block';
        }

        // Reset background to default (white)
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

        // Apply the reset background
        applyBackgroundToCanvas();

        // Update canvas height after clearing
        updateCanvasHeight();

        // Reset properties panel to no selection
        if (textPropertiesPanel) textPropertiesPanel.style.display = 'none';
        if (noSelectionPanel) noSelectionPanel.style.display = 'block';

        console.log('Canvas cleared successfully');
    }

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
    /* Background is controlled by JavaScript - no forced override */
    color: #f9fafb;
}

/* Default dark background only when no custom background is set */
.layout-builder-canvas[data-email-theme="dark"]:not([style*="background"]) {
    background: #1f2937;
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

/* ===== TEXT BLOCKS & EMAIL ELEMENTS ===== */

/* Canvas drag over effect */
.layout-builder-canvas.drag-over-canvas {
    border: 2px dashed #3b82f6;
    background: rgba(59, 130, 246, 0.05);
}

/* Email blocks */
.email-block {
    min-width: 150px;
    min-height: 40px;
    border: 2px solid transparent;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
    position: relative;
    display: block;
    box-sizing: border-box;
    overflow: visible;
}

.email-block:hover {
    border-color: #3b82f6;
    box-shadow: 0 2px 8px rgba(59, 130, 246, 0.15);
}

.email-block.selected {
    border-color: #3b82f6;
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
}

/* Text blocks - Higher specificity to override email-block */
.email-block.text-block {
    background: transparent !important; /* Transparent background */
    padding: 16px;
    max-width: 500px;
    min-width: 150px;
    width: auto;
    display: block;
    min-height: 40px;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 6px;
    box-shadow: none; /* Remove shadow for transparent look */
    border: none; /* Remove border for cleaner look */
    /* JavaScript controls height dynamically */
}

/* Image blocks */
.email-block.image-block {
    background: transparent !important;
    padding: 0;
    border: none;
    box-shadow: none;
    border-radius: 0;
    display: block;
    width: auto;
    height: auto;
    /* JavaScript controls width dynamically */
}

.image-wrapper {
    display: block;
    width: 100%;
}

.image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 4px;
}

.image-wrapper a {
    display: block;
    text-decoration: none;
}

/* Button blocks */
.email-block.button-block {
    background: transparent !important;
    padding: 16px 0;
    border: none;
    box-shadow: none;
    border-radius: 0;
    display: block;
    width: 100%;
    height: auto;
    max-width: 600px; /* Match email layout width */
}

.button-wrapper {
    display: block;
    width: 100%;
}

/* Email button styles */
.email-button {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    text-align: center;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none !important;
    box-sizing: border-box;
}

/* Button sizes */
.email-button-small {
    padding: 8px 16px;
    font-size: 14px;
    line-height: 1.4;
}

.email-button-medium {
    padding: 12px 24px;
    font-size: 16px;
    line-height: 1.5;
}

.email-button-large {
    padding: 16px 32px;
    font-size: 18px;
    line-height: 1.5;
}

/* Button styles */
.email-button-primary {
    background: #3b82f6;
    color: #ffffff;
}

.email-button-primary:hover {
    background: #2563eb;
}

.email-button-secondary {
    background: #6b7280;
    color: #ffffff;
}

.email-button-secondary:hover {
    background: #4b5563;
}

.email-button-outline {
    background: transparent;
    color: #3b82f6;
    border: 2px solid #3b82f6;
}

.email-button-outline:hover {
    background: #3b82f6;
    color: #ffffff;
}

.text-block-content {
    outline: none;
    border: none;
    background: transparent;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #374151;
    white-space: pre-wrap;
    word-wrap: break-word;
    word-break: break-word;
    min-height: 20px;
    text-align: left; /* Default to left alignment */
    width: 100%;
    box-sizing: border-box;
    overflow-wrap: break-word;
    resize: none;
    display: block;
}

.text-block-content:focus {
    outline: none;
}

.text-block-content p {
    margin: 0 0 1em 0;
}

.text-block-content p:last-child {
    margin-bottom: 0;
}

/* Properties Panel Styles */
.text-properties {
    padding: 16px;
}

.text-properties h4 {
    margin: 0 0 16px 0;
    font-size: 16px;
    font-weight: 600;
    color: #1f2937;
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 8px;
}

.property-group {
    margin-bottom: 20px;
}

.property-label {
    display: block;
    margin-bottom: 6px;
    font-size: 13px;
    font-weight: 500;
    color: #374151;
}

.property-select {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    background: white;
    color: #374151;
    font-size: 14px;
    cursor: pointer;
    transition: border-color 0.2s ease;
}

.property-select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Property input fields */
.property-input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 14px;
    background: white;
    transition: border-color 0.2s ease;
}

.property-input:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.property-help {
    color: #6b7280;
    font-size: 12px;
    margin-top: 4px;
    display: block;
}

/* Image properties styling */
.upload-btn {
    background: #f3f4f6;
    border: 2px dashed #d1d5db;
    border-radius: 6px;
    padding: 12px 16px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 14px;
    width: 100%;
    text-align: center;
    color: #374151;
    font-weight: 500;
    display: block;
    box-sizing: border-box;
}

.upload-btn:hover {
    background: #e5e7eb;
    border-color: #9ca3af;
}

.upload-btn:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.image-preview {
    margin-top: 12px;
    border-radius: 6px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    background: #f9fafb;
}

.image-preview img {
    width: 100%;
    height: auto;
    display: block;
    max-height: 200px;
    object-fit: contain;
}

/* Alignment buttons */
.alignment-buttons {
    display: flex;
    gap: 4px;
    background: #f3f4f6;
    padding: 3px;
    border-radius: 8px;
}

.alignment-btn {
    flex: 1;
    padding: 8px;
    background: transparent;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.2s ease;
    color: #6b7280;
}

.alignment-btn:hover {
    background: #e5e7eb;
    color: #374151;
}

.alignment-btn.active {
    background: white;
    color: #3b82f6;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

/* Format buttons */
.formatting-buttons {
    display: flex;
    gap: 6px;
}

.format-btn {
    width: 36px;
    height: 36px;
    background: #f9fafb;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #374151;
}

.format-btn:hover {
    background: #f3f4f6;
    border-color: #9ca3af;
    color: #1f2937;
}

.format-btn:active,
.format-btn.active {
    background: #3b82f6;
    border-color: #3b82f6;
    color: white;
}

/* Delete button */
.delete-block-btn {
    width: 100%;
    padding: 10px 16px;
    background: #ef4444;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s ease;
}

.delete-block-btn:hover {
    background: #dc2626;
}

/* Canvas positioning */
.layout-builder-canvas {
    position: relative;
    min-height: 400px;
}

/* Dark mode for text blocks and properties */
.dark .email-block.selected {
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.4);
}

.dark .text-block-content {
    color: #f9fafb;
}

.dark .text-properties h4 {
    color: #f9fafb;
    border-color: #374151;
}

.dark .property-label {
    color: #e5e7eb;
}

.dark .property-select {
    background: #374151;
    border-color: #4b5563;
    color: #f9fafb;
}

.dark .property-select:focus {
    border-color: #3b82f6;
}

/* Dark mode for property inputs */
.dark .property-input {
    background: #374151;
    border-color: #4b5563;
    color: #f9fafb;
}

.dark .property-input:focus {
    border-color: #3b82f6;
}

.dark .property-help {
    color: #9ca3af;
}

/* Dark mode for image properties */
.dark .upload-btn {
    background: #374151;
    border-color: #4b5563;
    color: #e5e7eb;
}

.dark .upload-btn:hover {
    background: #4b5563;
    border-color: #6b7280;
}

.dark .upload-btn:focus {
    border-color: #3b82f6;
}

.dark .image-preview {
    background: #374151;
    border-color: #4b5563;
}

/* Button style grid */
.button-style-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    margin-top: 8px;
}

.button-style-option {
    padding: 8px;
    border: 2px solid #e5e7eb;
    border-radius: 6px;
    background: #f9fafb;
    cursor: pointer;
    transition: all 0.2s ease;
}

.button-style-option:hover {
    border-color: #d1d5db;
    background: #f3f4f6;
}

.button-style-option.active {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.1);
}

.button-preview {
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}

/* Dark mode for button properties */
.dark .button-style-option {
    background: #374151;
    border-color: #4b5563;
}

.dark .button-style-option:hover {
    background: #4b5563;
    border-color: #6b7280;
}

.dark .button-style-option.active {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.2);
}

.dark .alignment-buttons {
    background: #374151;
}

.dark .alignment-btn {
    color: #9ca3af;
}

.dark .alignment-btn:hover {
    background: #4b5563;
    color: #f9fafb;
}

.dark .alignment-btn.active {
    background: #1f2937;
    color: #3b82f6;
}

.dark .format-btn {
    background: #374151;
    border-color: #4b5563;
    color: #e5e7eb;
}

.dark .format-btn:hover {
    background: #4b5563;
    border-color: #6b7280;
    color: #f9fafb;
}

/* Email theme specific styles - Higher specificity */
.layout-builder-canvas[data-email-theme="dark"] .email-block.text-block {
    background: transparent !important; /* Transparent background */
}

.layout-builder-canvas[data-email-theme="dark"] .text-block-content {
    color: #f9fafb;
}

.layout-builder-canvas[data-email-theme="light"] .text-block-content {
    color: #374151;
}

/* Editor dark mode - Higher specificity */
.dark .email-block.text-block {
    background: transparent !important; /* Transparent background */
}

/* Responsive design for properties panel */
@media (max-width: 768px) {
    .alignment-buttons {
        flex-direction: column;
    }

    .formatting-buttons {
        flex-wrap: wrap;
    }

    .format-btn {
        flex: 1;
        min-width: 36px;
    }
}
        </style>
    </div>
</x-dynamic-component>