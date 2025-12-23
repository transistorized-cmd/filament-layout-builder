<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="layout-builder-container">
        <!-- Top Toolbar -->
        <div class="layout-builder-toolbar">
            <div class="layout-builder-toolbar-left">
                <span class="layout-builder-logo">📧 Email Builder</span>
            </div>
            <div class="layout-builder-toolbar-right">
                <button type="button" id="preview-btn-{{ $getStatePath() }}" class="layout-builder-btn" title="Preview Email">
                    👁️ Preview
                </button>
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
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">Text</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="image" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">Image</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="button" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">Button</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="divider" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">Spacer</span>
                        </div>
                    </div>

                    <!-- Layout Blocks -->
                    <div class="layout-builder-block-category">
                        <h4>Layout</h4>
                        <div class="layout-builder-block-item" data-block-type="columns-2" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="5" width="8" height="14" stroke-width="2" rx="1"/>
                                    <rect x="13" y="5" width="8" height="14" stroke-width="2" rx="1"/>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">2 Columns</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="columns-3" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="2" y="5" width="5.5" height="14" stroke-width="2" rx="1"/>
                                    <rect x="9.25" y="5" width="5.5" height="14" stroke-width="2" rx="1"/>
                                    <rect x="16.5" y="5" width="5.5" height="14" stroke-width="2" rx="1"/>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">3 Columns</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="columns-1-2" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="5" width="6" height="14" stroke-width="2" rx="1"/>
                                    <rect x="11" y="5" width="10" height="14" stroke-width="2" rx="1"/>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">1/3 + 2/3</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="columns-2-1" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="5" width="10" height="14" stroke-width="2" rx="1"/>
                                    <rect x="15" y="5" width="6" height="14" stroke-width="2" rx="1"/>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">2/3 + 1/3</span>
                        </div>
                    </div>

                    <!-- Media Blocks -->
                    <div class="layout-builder-block-category">
                        <h4>Media</h4>
                        <div class="layout-builder-block-item" data-block-type="video" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </span>
                            <span class="layout-builder-block-label">Video</span>
                        </div>
                        <div class="layout-builder-block-item" data-block-type="social" draggable="true">
                            <span class="layout-builder-block-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                </svg>
                            </span>
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
                <div class="layout-builder-canvas-wrapper" wire:ignore>
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
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h8M4 12h8m-8 6h8"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn active" data-align="center" title="Align Center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h8M6 12h12M8 18h8"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Align Right">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h8M12 12h8m-8 6h8"></path>
                                    </svg>
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

                        <!-- Image Alignment -->
                        <div class="property-group">
                            <label class="property-label">Alignment</label>
                            <div class="alignment-buttons">
                                <button type="button" class="alignment-btn" data-align="left" title="Left">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn active" data-align="center" title="Center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 16h10M9 12h6"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Right">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                            </div>
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
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn active" data-align="center" title="Center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 16h10M9 12h6"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Right">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
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

                <!-- Divider Properties Panel -->
                <div id="divider-properties-{{ $getStatePath() }}" class="properties-panel" style="display: none;">
                    <h4>Spacer Properties</h4>

                    <div class="property-section">
                        <!-- Line Style -->
                        <div class="property-group">
                            <label class="property-label">Line Style</label>
                            <div class="divider-style-grid">
                                <button type="button" class="divider-style-option active" data-style="solid">
                                    <div class="divider-preview" style="border-top: 2px solid #d1d5db;"></div>
                                    <span>Solid</span>
                                </button>
                                <button type="button" class="divider-style-option" data-style="dashed">
                                    <div class="divider-preview" style="border-top: 2px dashed #d1d5db;"></div>
                                    <span>Dashed</span>
                                </button>
                                <button type="button" class="divider-style-option" data-style="dotted">
                                    <div class="divider-preview" style="border-top: 2px dotted #d1d5db;"></div>
                                    <span>Dotted</span>
                                </button>
                            </div>
                        </div>

                        <!-- Line Color -->
                        <div class="property-group">
                            <label class="property-label" for="divider-color-{{ $getStatePath() }}">Line Color</label>
                            <div class="color-input-group">
                                <input type="color" id="divider-color-{{ $getStatePath() }}" class="background-color-picker" value="#d1d5db">
                                <input type="text" id="divider-color-text-{{ $getStatePath() }}" class="background-color-text" value="#d1d5db" placeholder="#d1d5db">
                            </div>
                        </div>

                        <!-- Line Thickness -->
                        <div class="property-group">
                            <label class="property-label" for="divider-thickness-{{ $getStatePath() }}">Thickness</label>
                            <select id="divider-thickness-{{ $getStatePath() }}" class="property-select">
                                <option value="1">1px</option>
                                <option value="2" selected>2px</option>
                                <option value="3">3px</option>
                                <option value="4">4px</option>
                                <option value="5">5px</option>
                            </select>
                        </div>

                        <!-- Line Width -->
                        <div class="property-group">
                            <label class="property-label" for="divider-width-{{ $getStatePath() }}">Width</label>
                            <select id="divider-width-{{ $getStatePath() }}" class="property-select">
                                <option value="25">25%</option>
                                <option value="50">50%</option>
                                <option value="75">75%</option>
                                <option value="100" selected>100%</option>
                            </select>
                        </div>

                        <!-- Spacer Height -->
                        <div class="property-group">
                            <label class="property-label" for="divider-height-{{ $getStatePath() }}">Spacer Height</label>
                            <input
                                type="text"
                                id="divider-height-{{ $getStatePath() }}"
                                class="property-input"
                                value="40px"
                                placeholder="e.g. 40px, 2em, 1.5rem"
                                title="Enter height with units: px, em, rem, %, vh"
                            >
                        </div>

                        <!-- Spacing -->
                        <div class="property-group">
                            <label class="property-label" for="divider-spacing-{{ $getStatePath() }}">Spacing</label>
                            <select id="divider-spacing-{{ $getStatePath() }}" class="property-select">
                                <option value="small">Small (10px)</option>
                                <option value="medium" selected>Medium (20px)</option>
                                <option value="large">Large (30px)</option>
                            </select>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-divider-block-{{ $getStatePath() }}" class="delete-block-btn">
                                🗑️ Delete Block
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Video Properties Panel -->
                <div id="video-properties-{{ $getStatePath() }}" class="properties-panel" style="display: none;">
                    <h4>Video Properties</h4>

                    <div class="property-section">
                        <!-- Video URL -->
                        <div class="property-group">
                            <label class="property-label" for="video-url-{{ $getStatePath() }}">Video URL</label>
                            <input
                                type="url"
                                id="video-url-{{ $getStatePath() }}"
                                class="property-input"
                                placeholder="https://www.youtube.com/watch?v=..."
                                title="Enter YouTube, Vimeo, or direct video URL"
                            >
                        </div>

                        <!-- Video Size -->
                        <div class="property-group">
                            <label class="property-label" for="video-size-{{ $getStatePath() }}">Size</label>
                            <select
                                id="video-size-{{ $getStatePath() }}"
                                class="property-input"
                                title="Scale video proportionally"
                            >
                                <option value="25">25% - Small</option>
                                <option value="50">50% - Medium</option>
                                <option value="75">75% - Large</option>
                                <option value="100" selected>100% - Full Width</option>
                            </select>
                        </div>

                        <!-- Video Options -->
                        <div class="property-group">
                            <label class="property-label">
                                <input type="checkbox" id="video-autoplay-{{ $getStatePath() }}">
                                Auto-play video
                            </label>
                        </div>

                        <div class="property-group">
                            <label class="property-label">
                                <input type="checkbox" id="video-loop-{{ $getStatePath() }}">
                                Loop video
                            </label>
                        </div>

                        <div class="property-group">
                            <label class="property-label">
                                <input type="checkbox" id="video-controls-{{ $getStatePath() }}" checked>
                                Show controls
                            </label>
                        </div>

                        <!-- Alignment -->
                        <div class="property-group">
                            <label class="property-label">Alignment</label>
                            <div class="alignment-buttons">
                                <button type="button" class="alignment-btn active" data-align="center" title="Center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 16h10M9 12h6"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="left" title="Left">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Right">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-video-block-{{ $getStatePath() }}" class="delete-block-btn">
                                🗑️ Delete Block
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Social Media Properties Panel -->
                <div id="social-properties-{{ $getStatePath() }}" class="properties-panel" style="display: none;">
                    <h4>Social Media Properties</h4>

                    <div class="property-section">
                        <!-- Social Platforms -->
                        <div class="property-group">
                            <label class="property-label">Social Platforms</label>
                            <div class="social-platforms-list">
                                <!-- Facebook -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-facebook-{{ $getStatePath() }}" checked>
                                        <span class="social-icon">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                            </svg>
                                        </span>
                                        Facebook
                                    </label>
                                    <input
                                        type="url"
                                        id="social-facebook-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://facebook.com/yourpage"
                                        value="https://facebook.com/"
                                    >
                                </div>

                                <!-- X (Twitter) -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-x-{{ $getStatePath() }}" checked>
                                        <span class="social-icon">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                                            </svg>
                                        </span>
                                        X (Twitter)
                                    </label>
                                    <input
                                        type="url"
                                        id="social-x-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://x.com/yourusername"
                                        value="https://x.com/"
                                    >
                                </div>

                                <!-- LinkedIn -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-linkedin-{{ $getStatePath() }}" checked>
                                        <span class="social-icon">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                            </svg>
                                        </span>
                                        LinkedIn
                                    </label>
                                    <input
                                        type="url"
                                        id="social-linkedin-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://linkedin.com/in/yourprofile"
                                        value="https://linkedin.com/"
                                    >
                                </div>

                                <!-- YouTube -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-youtube-{{ $getStatePath() }}" checked>
                                        <span class="social-icon">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                                            </svg>
                                        </span>
                                        YouTube
                                    </label>
                                    <input
                                        type="url"
                                        id="social-youtube-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://youtube.com/@yourchannel"
                                        value="https://youtube.com/"
                                    >
                                </div>

                                <!-- Instagram -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-instagram-{{ $getStatePath() }}" checked>
                                        <span class="social-icon">📸</span>
                                        Instagram
                                    </label>
                                    <input
                                        type="url"
                                        id="social-instagram-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://instagram.com/yourusername"
                                        value="https://instagram.com/"
                                    >
                                </div>

                                <!-- TikTok -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-tiktok-{{ $getStatePath() }}" checked>
                                        <span class="social-icon">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path>
                                            </svg>
                                        </span>
                                        TikTok
                                    </label>
                                    <input
                                        type="url"
                                        id="social-tiktok-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://tiktok.com/@yourusername"
                                        value="https://tiktok.com/"
                                    >
                                </div>

                                <!-- WhatsApp -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-whatsapp-{{ $getStatePath() }}">
                                        <span class="social-icon">💬</span>
                                        WhatsApp
                                    </label>
                                    <input
                                        type="url"
                                        id="social-whatsapp-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://wa.me/1234567890"
                                        value=""
                                    >
                                </div>

                                <!-- Threads -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-threads-{{ $getStatePath() }}">
                                        <span class="social-icon">🧵</span>
                                        Threads
                                    </label>
                                    <input
                                        type="url"
                                        id="social-threads-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://threads.net/@yourusername"
                                        value=""
                                    >
                                </div>

                                <!-- Bluesky -->
                                <div class="social-platform-item">
                                    <label class="social-platform-header">
                                        <input type="checkbox" id="social-bluesky-{{ $getStatePath() }}">
                                        <span class="social-icon">☁️</span>
                                        Bluesky
                                    </label>
                                    <input
                                        type="url"
                                        id="social-bluesky-url-{{ $getStatePath() }}"
                                        class="social-url-input"
                                        placeholder="https://bsky.app/profile/yourusername"
                                        value=""
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Display Options -->
                        <div class="property-group">
                            <label class="property-label">Display Options</label>
                            <label class="property-label">
                                <input type="checkbox" id="social-grayscale-{{ $getStatePath() }}">
                                Show icons in grayscale
                            </label>
                        </div>

                        <!-- Size -->
                        <div class="property-group">
                            <label class="property-label" for="social-size-{{ $getStatePath() }}">Size</label>
                            <select
                                id="social-size-{{ $getStatePath() }}"
                                class="property-input"
                                title="Scale social icons proportionally"
                            >
                                <option value="small">Small - 24px icons</option>
                                <option value="medium" selected>Medium - 32px icons</option>
                                <option value="large">Large - 48px icons</option>
                            </select>
                        </div>

                        <!-- Alignment -->
                        <div class="property-group">
                            <label class="property-label">Alignment</label>
                            <div class="alignment-buttons">
                                <button type="button" class="alignment-btn active" data-align="center" title="Center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 16h10M9 12h6"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="left" title="Left">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-align="right" title="Right">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-social-block-{{ $getStatePath() }}" class="delete-block-btn">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Delete Block
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Columns Properties Panel -->
                <div id="columns-properties-{{ $getStatePath() }}" class="properties-panel" style="display: none;">
                    <h4>Column Properties</h4>

                    <div class="property-section">
                        <!-- Column Type Display -->
                        <div class="property-group">
                            <label class="property-label">Layout Type</label>
                            <div id="columns-type-display-{{ $getStatePath() }}" class="columns-type-display">
                                2 Columns (50% / 50%)
                            </div>
                        </div>

                        <!-- Column Gap -->
                        <div class="property-group">
                            <label class="property-label" for="columns-gap-{{ $getStatePath() }}">Column Gap</label>
                            <select id="columns-gap-{{ $getStatePath() }}" class="property-select">
                                <option value="0">No Gap</option>
                                <option value="5">5px</option>
                                <option value="10" selected>10px</option>
                                <option value="15">15px</option>
                                <option value="20">20px</option>
                                <option value="30">30px</option>
                            </select>
                        </div>

                        <!-- Vertical Alignment -->
                        <div class="property-group">
                            <label class="property-label">Vertical Alignment</label>
                            <div class="alignment-buttons">
                                <button type="button" class="alignment-btn" data-valign="flex-start" title="Top">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn active" data-valign="center" title="Middle">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 16h10M9 12h6"></path>
                                    </svg>
                                </button>
                                <button type="button" class="alignment-btn" data-valign="flex-end" title="Bottom">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Delete Block -->
                        <div class="property-group">
                            <button type="button" id="delete-columns-block-{{ $getStatePath() }}" class="delete-block-btn">
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

        {{-- This component will be wrapped in Alpine.js with reactive state --}}
        <div
            x-data="layoutBuilderComponent({
                state: $wire.$entangle('{{ $getStatePath() }}'),
                config: @js($getConfiguration()),
                statePath: '{{ $getStatePath() }}',
            })"
            x-init="initLayoutBuilder()"
            wire:ignore
            {{ $attributes->merge(['class' => 'filament-layout-builder'], escape: false) }}
        >
            <div id="layout-builder-wrapper-{{ $getStatePath() }}"></div>

            {{-- Hidden input to ensure state is properly bound --}}
            <input type="hidden" x-model="state" />
        </div>

        <script>
// Alpine.js component for layout builder - MUST only define once
if (typeof window.layoutBuilderComponent === 'undefined') {
window.layoutBuilderComponent = function(options) {
    return {
        state: options.state,
        config: options.config,
        statePath: options.statePath,

        initLayoutBuilder() {
            // Initialize the layout builder with Alpine context
            this.setupLayoutBuilder();
        },

        setupLayoutBuilder() {
            // Get unique instance identifier
            const statePath = this.statePath;

    // Constants to avoid Blade parsing conflicts
    const PLACEHOLDER_TEXT = 'Click' + ' to edit';
    const PLACEHOLDER_TEXT_FULL = 'Click' + ' to edit text';
    const PLACEHOLDER_HTML = 'Click' + ' to edit this text...';
    const TEMPLATE_SYNTAX = '{' + '{';

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

    // Phase 2: Canvas drop zone functionality with smart block ordering
    if (canvas) {
        let dropIndicator = null;

        canvas.addEventListener('dragover', function(e) {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'copy';
            canvas.classList.add('drag-over-canvas');

            // Show drop indicator
            showDropIndicator(e);
        });

        canvas.addEventListener('dragleave', function(e) {
            if (!canvas.contains(e.relatedTarget)) {
                canvas.classList.remove('drag-over-canvas');
                hideDropIndicator();
            }
        });

        canvas.addEventListener('drop', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Ensure this event doesn't bubble further
            canvas.classList.remove('drag-over-canvas');
            hideDropIndicator();

            const blockType = e.dataTransfer.getData('text/plain');
            console.log('Canvas drop event - block type:', blockType, 'at position:', e.clientX, e.clientY);
            console.log('Drop target:', e.target, 'Canvas:', canvas);

            // Ensure we're definitely working with the canvas
            if (!blockType) {
                console.warn('No block type found in drop data');
                return;
            }

            // Calculate insertion position relative to canvas
            const insertPosition = calculateInsertPosition(e);
            console.log('Calculated insertion position:', insertPosition);

            // Create block at calculated position - always append to canvas
            if (blockType === 'text') {
                createTextBlockAtPosition(insertPosition);
            } else if (blockType === 'image') {
                createImageBlockAtPosition(insertPosition);
            } else if (blockType === 'button') {
                createButtonBlockAtPosition(insertPosition);
            } else if (blockType === 'divider') {
                createDividerBlockAtPosition(insertPosition);
            } else if (blockType === 'video') {
                createVideoBlockAtPosition(insertPosition);
            } else if (blockType === 'social') {
                createSocialBlockAtPosition(insertPosition);
            } else if (blockType === 'columns-2') {
                createColumnsBlockAtPosition(insertPosition, 2);
            } else if (blockType === 'columns-3') {
                createColumnsBlockAtPosition(insertPosition, 3);
            } else if (blockType === 'columns-1-2') {
                createColumnsBlockAtPosition(insertPosition, '1-2');
            } else if (blockType === 'columns-2-1') {
                createColumnsBlockAtPosition(insertPosition, '2-1');
            } else {
                console.warn('Unknown block type:', blockType);
            }
        });

        function showDropIndicator(e) {
            const insertPosition = calculateInsertPosition(e);

            // Remove existing indicator
            hideDropIndicator();

            // Create new indicator
            dropIndicator = document.createElement('div');
            dropIndicator.className = 'drop-indicator';
            dropIndicator.style.position = 'absolute';
            dropIndicator.style.left = '10px';
            dropIndicator.style.right = '10px';
            dropIndicator.style.height = '3px';
            dropIndicator.style.background = 'linear-gradient(90deg, #3b82f6, #06b6d4)';
            dropIndicator.style.top = (insertPosition.y - 1) + 'px';
            dropIndicator.style.zIndex = '1000';
            dropIndicator.style.pointerEvents = 'none';
            dropIndicator.style.borderRadius = '2px';
            dropIndicator.style.opacity = '0.8';

            canvas.appendChild(dropIndicator);
        }

        function hideDropIndicator() {
            if (dropIndicator) {
                dropIndicator.remove();
                dropIndicator = null;
            }
        }

        function calculateInsertPosition(e) {
            const canvasRect = canvas.getBoundingClientRect();
            const dropY = e.clientY - canvasRect.top;

            console.log('calculateInsertPosition - dropY:', dropY);

            // Get all existing blocks sorted by position
            const blocks = Array.from(canvas.querySelectorAll('.email-block')).sort((a, b) => {
                return parseInt(a.style.top) - parseInt(b.style.top);
            });

            // If no blocks exist, insert at top
            if (blocks.length === 0) {
                console.log('No blocks exist, inserting at top');
                return { y: 20, insertAfter: null };
            }

            // Special case: if dropping in the very top area (first 60px), always insert before first block
            if (dropY <= 60) {
                const firstBlock = blocks[0];
                const firstBlockTop = parseInt(firstBlock.style.top) || 0;
                console.log('Dropping in top area (<=60px) - forcing insert before first block');
                return { y: Math.max(20, firstBlockTop - 60), insertAfter: null, insertBefore: firstBlock };
            }

            // Find the best insertion point by checking each block and the gaps between them
            for (let i = 0; i < blocks.length; i++) {
                const block = blocks[i];
                const blockTop = parseInt(block.style.top) || 0;
                const blockHeight = block.offsetHeight;
                const blockBottom = blockTop + blockHeight;
                const blockMiddle = blockTop + (blockHeight / 2);

                console.log(`Block ${i}: top=${blockTop}, height=${blockHeight}, bottom=${blockBottom}, middle=${blockMiddle}`);

                // If dropping above the first block
                if (i === 0 && dropY < blockTop) {
                    console.log('Dropping above first block - insertBefore');
                    return { y: Math.max(20, blockTop - 60), insertAfter: null, insertBefore: block };
                }

                // If dropping on the first half of the first block
                if (i === 0 && dropY >= blockTop && dropY < blockMiddle) {
                    console.log('Dropping on upper half of first block - insertBefore');
                    return { y: Math.max(20, blockTop - 60), insertAfter: null, insertBefore: block };
                }

                // Check if we're dropping in the gap between this block and the next block
                if (i < blocks.length - 1) {
                    const nextBlock = blocks[i + 1];
                    const nextBlockTop = parseInt(nextBlock.style.top) || 0;

                    // If dropping in the space between blocks
                    if (dropY > blockBottom && dropY < nextBlockTop) {
                        console.log(`Dropping between block ${i} and ${i + 1} - insertAfter block ${i}`);
                        return { y: blockBottom + 20, insertAfter: block };
                    }

                    // If dropping on the lower half of this block
                    if (dropY >= blockMiddle && dropY <= blockBottom) {
                        console.log(`Dropping on lower half of block ${i} - insertAfter`);
                        return { y: blockBottom + 20, insertAfter: block };
                    }
                }

                // If this is the last block
                if (i === blocks.length - 1) {
                    // If dropping on the lower half of the last block or below it
                    if (dropY >= blockMiddle) {
                        console.log('Dropping on/below last block - append at end');
                        return { y: blockBottom + 20, insertAfter: block };
                    }
                }
            }

            // Default: append at end
            const lastBlock = blocks[blocks.length - 1];
            const lastBlockBottom = parseInt(lastBlock.style.top) + lastBlock.offsetHeight;
            return { y: lastBlockBottom + 20, insertAfter: lastBlock };
        }

        function reorderBlocks() {
            console.log('reorderBlocks called');
            // Get all blocks in DOM order (don't sort by position - respect new DOM order)
            const blocks = Array.from(canvas.querySelectorAll('.email-block'));

            console.log('Reordering', blocks.length, 'blocks');
            console.log('Block order (DOM):', blocks.map(b => b.dataset.blockId));

            // Reposition blocks with proper spacing based on DOM order
            let currentY = 20;
            const spacing = 20;

            blocks.forEach((block, index) => {
                const oldTop = block.style.top;
                block.style.top = currentY + 'px';
                console.log(`Block ${index + 1} (${block.dataset.blockId}): ${oldTop} -> ${currentY}px`);
                currentY += block.offsetHeight + spacing;
            });

            // Update canvas height
            updateCanvasHeight();
            console.log('reorderBlocks completed');
        }
    } else {
        console.error('DEBUG: Canvas NOT FOUND for statePath:', statePath);
        console.error('DEBUG: Looking for element with ID:', 'layout-builder-canvas-' + statePath);
        console.error('DEBUG: All canvas elements on page:', document.querySelectorAll('[id^="layout-builder-canvas-"]'));
    }

    // Phase 3: DOM Creation Function - TESTING IF THIS CAUSES LIVEWIRE ERROR
    let blockCounter = 0;
    let selectedBlock = null;

    // Get static properties panel elements (unique per instance)
    const noSelectionPanel = document.getElementById('no-selection-' + statePath);
    const textPropertiesPanel = document.getElementById('text-properties-' + statePath);
    const imagePropertiesPanel = document.getElementById('image-properties-' + statePath);
    const buttonPropertiesPanel = document.getElementById('button-properties-' + statePath);
    const dividerPropertiesPanel = document.getElementById('divider-properties-' + statePath);
    const videoPropertiesPanel = document.getElementById('video-properties-' + statePath);
    const socialPropertiesPanel = document.getElementById('social-properties-' + statePath);
    const columnsPropertiesPanel = document.getElementById('columns-properties-' + statePath);

    // Initialize properties panel to show "no selection" by default
    if (noSelectionPanel) {
        noSelectionPanel.style.display = 'block';
        console.log('Initialized with no selection panel visible');
    }

    // Add canvas click handler to deselect blocks (after panel references are available)
    if (canvas) {
        canvas.addEventListener('click', function(e) {
            // Only deselect if clicking directly on canvas (not on any blocks)
            if (e.target === canvas) {
                // Deselect all blocks and remove movement controls
                document.querySelectorAll('.email-block.selected').forEach(block => {
                    block.classList.remove('selected');
                    const existingControls = block.querySelector('.block-move-controls');
                    if (existingControls) {
                        existingControls.remove();
                    }
                });
                selectedBlock = null;

                // Hide all properties panels and show no selection panel
                if (textPropertiesPanel) textPropertiesPanel.style.display = 'none';
                if (imagePropertiesPanel) imagePropertiesPanel.style.display = 'none';
                if (buttonPropertiesPanel) buttonPropertiesPanel.style.display = 'none';
                if (dividerPropertiesPanel) dividerPropertiesPanel.style.display = 'none';
                if (videoPropertiesPanel) videoPropertiesPanel.style.display = 'none';
                if (socialPropertiesPanel) socialPropertiesPanel.style.display = 'none';
                if (columnsPropertiesPanel) columnsPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';

                console.log('Deselected all blocks - showing no selection panel');
            }
        });
    }

    // Function to dynamically update canvas height based on content
    function updateCanvasHeight() {
        if (!canvas) return;

        // Use setTimeout to ensure DOM has updated
        setTimeout(() => {
            // Find all blocks in the canvas
            const blocks = canvas.querySelectorAll('.email-block');

            if (blocks.length === 0) {
                // No blocks, set to minimum height
                canvas.style.height = '400px';
                canvas.style.minHeight = '400px';
                return;
            }

            let maxBottom = 0;

            blocks.forEach(block => {
                // For absolutely positioned elements, use style.top + offsetHeight
                const blockTop = parseInt(block.style.top) || 0;
                const blockHeight = block.offsetHeight || block.getBoundingClientRect().height;
                const blockBottom = blockTop + blockHeight;

                if (blockBottom > maxBottom) {
                    maxBottom = blockBottom;
                }

                console.log(`Block ${block.dataset.blockId}: top=${blockTop}px, height=${blockHeight}px, bottom=${blockBottom}px`);
            });

            // Add generous padding at the bottom for better UX
            const paddingBottom = 60;
            const requiredHeight = Math.max(400, maxBottom + paddingBottom); // Minimum 400px

            // Set canvas height with !important to override any conflicting styles
            canvas.style.setProperty('height', requiredHeight + 'px', 'important');
            canvas.style.setProperty('min-height', requiredHeight + 'px', 'important');

            console.log('Canvas height updated to:', requiredHeight + 'px', 'based on', blocks.length, 'blocks, maxBottom:', maxBottom);
        }, 50); // Small delay to ensure DOM updates
    }

    // Reposition all blocks after deletion to eliminate gaps
    function repositionAllBlocks() {
        if (!canvas) return;

        // Use setTimeout to ensure DOM has updated after deletion
        setTimeout(() => {
            const blocks = Array.from(canvas.querySelectorAll('.email-block'));

            if (blocks.length === 0) {
                updateCanvasHeight();
                return;
            }

            // Sort blocks by their current top position to maintain order
            blocks.sort((a, b) => {
                const aTop = parseInt(a.style.top) || 0;
                const bTop = parseInt(b.style.top) || 0;
                return aTop - bTop;
            });

            let currentTop = 20; // Start with initial padding from top

            blocks.forEach((block, index) => {
                // Position block at current top position
                block.style.top = currentTop + 'px';

                // Calculate next position based on this block's height
                const blockHeight = block.offsetHeight || block.getBoundingClientRect().height;
                currentTop += blockHeight + 20; // 20px gap between blocks

                console.log(`Repositioned block ${block.dataset.blockId}: top=${block.style.top}, height=${blockHeight}px`);
            });

            // Update canvas height after repositioning
            updateCanvasHeight();

            console.log('All blocks repositioned after deletion');
        }, 100); // Slightly longer delay to ensure deletion is complete
    }

    // Periodic height check to ensure canvas stays in sync with content
    setInterval(() => {
        if (canvas && canvas.querySelectorAll('.email-block').length > 0) {
            updateCanvasHeight();
        }
    }, 2000); // Check every 2 seconds

    // Also update on window resize
    window.addEventListener('resize', () => {
        setTimeout(updateCanvasHeight, 100);
    });

    function createTextBlockAtPosition(insertPosition) {
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
        textContent.innerHTML = PLACEHOLDER_HTML;

        // Add event listeners to save content changes
        textContent.addEventListener('blur', function() {
            console.log('💾 Text content changed, triggering auto-save');
            if (window.layoutBuilderSave) {
                window.layoutBuilderSave();
            }
        });

        textContent.addEventListener('input', function() {
            // Auto-save after a short delay to avoid too many saves while typing
            clearTimeout(textContent.saveTimeout);
            textContent.saveTimeout = setTimeout(() => {
                if (window.layoutBuilderSave) {
                    console.log('💾 Auto-saving text changes');
                    window.layoutBuilderSave();
                }
            }, 1000);
        });

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

        // Position using calculated insertion point
        textBlock.style.position = 'absolute';
        textBlock.style.left = '10px'; // Close to left edge
        textBlock.style.top = insertPosition.y + 'px';

        // After insertion, reorder all blocks if necessary
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            // Insert after/before the specified block, then reorder
            setTimeout(() => reorderBlocks(), 10);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            // Insert after the reference block
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(textBlock, nextSibling);
                console.log('Inserted textBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(textBlock);
                console.log('Appended textBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            // Insert before the reference block
            canvas.insertBefore(textBlock, insertPosition.insertBefore);
            console.log('Inserted textBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            // No specific position, append at end
            canvas.appendChild(textBlock);
            console.log('Appended textBlock at end');
        }

        // Phase 4: ADD SELECTION FUNCTIONALITY
        textBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(textBlock);
        });

        // Prevent drag events on blocks to ensure canvas handles all drops
        textBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        textBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // Auto-select the new block
        selectBlock(textBlock);

        // Update canvas height to accommodate new content
        updateCanvasHeight();

        console.log('Text block created and appended to canvas:', textBlock.dataset.blockId);
    }

    function createImageBlockAtPosition(insertPosition) {
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
        imageBlock.dataset.align = 'center'; // Default alignment

        // Image container with wrapper for alignment and link support
        const imageWrapper = document.createElement('div');
        imageWrapper.className = 'image-wrapper';
        imageWrapper.style.textAlign = 'center'; // Default center alignment

        const img = document.createElement('img');
        img.src = 'https://placehold.co/600x400.png';
        img.alt = '';
        img.style.width = '100%';
        img.style.height = 'auto';
        img.style.display = 'block';
        img.style.maxWidth = '100%';

        imageWrapper.appendChild(img);
        imageBlock.appendChild(imageWrapper);

        // Position using calculated insertion point
        imageBlock.style.position = 'absolute';
        imageBlock.style.left = '10px'; // Close to left edge
        imageBlock.style.top = insertPosition.y + 'px';

        // After insertion, reorder all blocks if necessary
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            setTimeout(() => reorderBlocks(), 10);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            // Insert after the reference block
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(imageBlock, nextSibling);
                console.log('Inserted imageBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(imageBlock);
                console.log('Appended imageBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            // Insert before the reference block
            canvas.insertBefore(imageBlock, insertPosition.insertBefore);
            console.log('Inserted imageBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            // No specific position, append at end
            canvas.appendChild(imageBlock);
            console.log('Appended imageBlock at end');
        }

        // Add selection functionality
        imageBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(imageBlock);
        });

        // Prevent drag events on blocks to ensure canvas handles all drops
        imageBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        imageBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // Auto-select the new block
        selectBlock(imageBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Image block created and appended to canvas:', imageBlock.dataset.blockId);
    }

    function createButtonBlockAtPosition(insertPosition) {
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

        // Position using calculated insertion point for full-width button
        buttonBlock.style.position = 'absolute';
        buttonBlock.style.left = '0px'; // Full width - start at left edge
        buttonBlock.style.top = insertPosition.y + 'px';
        buttonBlock.style.width = '100%'; // Full width of canvas

        // After insertion, reorder all blocks if necessary
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            setTimeout(() => reorderBlocks(), 10);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            // Insert after the reference block
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(buttonBlock, nextSibling);
                console.log('Inserted buttonBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(buttonBlock);
                console.log('Appended buttonBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            // Insert before the reference block
            canvas.insertBefore(buttonBlock, insertPosition.insertBefore);
            console.log('Inserted buttonBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            // No specific position, append at end
            canvas.appendChild(buttonBlock);
            console.log('Appended buttonBlock at end');
        }

        // Add selection functionality
        buttonBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            e.preventDefault(); // Prevent button click
            selectBlock(buttonBlock);
        });

        // Prevent drag events on blocks to ensure canvas handles all drops
        buttonBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        buttonBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // Auto-select the new block
        selectBlock(buttonBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Button block created and appended to canvas:', buttonBlock.dataset.blockId);
    }

    function createDividerBlockAtPosition(insertPosition) {
        blockCounter++;
        console.log('Creating divider block #', blockCounter);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create divider block element
        const dividerBlock = document.createElement('div');
        dividerBlock.className = 'email-block divider-block';
        dividerBlock.dataset.blockId = 'divider-' + blockCounter;
        dividerBlock.dataset.blockType = 'divider';
        dividerBlock.dataset.style = 'solid';
        dividerBlock.dataset.color = '#d1d5db';
        dividerBlock.dataset.thickness = '2';
        dividerBlock.dataset.width = '100';
        dividerBlock.dataset.height = '40';
        dividerBlock.dataset.heightUnit = '40px';
        dividerBlock.dataset.spacing = 'medium';

        // Divider wrapper for spacing
        const dividerWrapper = document.createElement('div');
        dividerWrapper.className = 'divider-wrapper';
        dividerWrapper.style.height = '40px'; // Set initial height
        dividerWrapper.style.display = 'flex';
        dividerWrapper.style.alignItems = 'center'; // Center the line vertically within the spacer

        // Create the actual divider line
        const dividerLine = document.createElement('hr');
        dividerLine.className = 'email-divider';
        dividerLine.style.border = 'none';
        dividerLine.style.borderTop = '2px solid #d1d5db';
        dividerLine.style.width = '100%';
        dividerLine.style.margin = '0 auto';

        dividerWrapper.appendChild(dividerLine);
        dividerBlock.appendChild(dividerWrapper);

        // Position using calculated insertion point for full-width divider
        dividerBlock.style.position = 'absolute';
        dividerBlock.style.left = '0px'; // Full width - start at left edge
        dividerBlock.style.top = insertPosition.y + 'px';
        dividerBlock.style.width = '100%'; // Full width of canvas

        // After insertion, reorder all blocks if necessary
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            setTimeout(() => reorderBlocks(), 10);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            // Insert after the reference block
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(dividerBlock, nextSibling);
                console.log('Inserted dividerBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(dividerBlock);
                console.log('Appended dividerBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            // Insert before the reference block
            canvas.insertBefore(dividerBlock, insertPosition.insertBefore);
            console.log('Inserted dividerBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            // No specific position, append at end
            canvas.appendChild(dividerBlock);
            console.log('Appended dividerBlock at end');
        }

        // Add selection functionality
        dividerBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(dividerBlock);
        });

        // Prevent drag events on blocks to ensure canvas handles all drops
        dividerBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        dividerBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // Auto-select the new block
        selectBlock(dividerBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Divider block created and appended to canvas:', dividerBlock.dataset.blockId);
    }

    function createVideoBlockAtPosition(insertPosition) {
        blockCounter++;
        console.log('Creating video block #', blockCounter);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create video block element
        const videoBlock = document.createElement('div');
        videoBlock.className = 'email-block video-block';
        videoBlock.dataset.blockId = 'video-' + blockCounter;
        videoBlock.dataset.blockType = 'video';
        videoBlock.dataset.url = '';
        videoBlock.dataset.size = '100'; // Percentage size for proportional scaling
        videoBlock.dataset.autoplay = 'false';
        videoBlock.dataset.loop = 'false';
        videoBlock.dataset.controls = 'true';
        videoBlock.dataset.alignment = 'center';

        // Set up video block for alignment
        videoBlock.style.display = 'flex';
        videoBlock.style.justifyContent = 'center'; // Default center alignment

        // Create video container
        const videoContainer = document.createElement('div');
        videoContainer.className = 'video-container';
        videoContainer.style.textAlign = 'center';
        videoContainer.style.width = '100%'; // Full width within flex container
        videoContainer.style.aspectRatio = '16 / 9'; // Modern CSS aspect-ratio property
        videoContainer.style.height = 'auto'; // Let aspect-ratio handle height
        videoContainer.style.backgroundColor = '#f3f4f6';
        videoContainer.style.border = '2px dashed #d1d5db';
        videoContainer.style.borderRadius = '8px';
        videoContainer.style.display = 'flex';
        videoContainer.style.alignItems = 'center';
        videoContainer.style.justifyContent = 'center';
        videoContainer.style.flexDirection = 'column';
        videoContainer.style.cursor = 'pointer';
        videoContainer.style.position = 'relative'; // For absolutely positioned videos

        // Create placeholder content
        const videoPlaceholder = document.createElement('div');
        videoPlaceholder.className = 'video-placeholder';
        videoPlaceholder.innerHTML = `
            <div style="margin-bottom: 10px;">
                <svg style="width: 48px; height: 48px; color: #9ca3af;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div style="font-size: 16px; color: #6b7280; font-weight: 500;">Click to add video</div>
            <div style="font-size: 14px; color: #9ca3af; margin-top: 5px;">YouTube, Vimeo, or direct video URL</div>
        `;

        videoContainer.appendChild(videoPlaceholder);
        videoBlock.appendChild(videoContainer);

        // Add click handler to placeholder for easy URL input
        videoContainer.addEventListener('click', function() {
            const url = prompt('Enter video URL (YouTube, Vimeo, or direct video link):');
            if (url) {
                const trimmedUrl = url.trim();
                videoBlock.dataset.url = trimmedUrl;

                // Detect and store aspect ratio
                const detectedRatio = detectVideoAspectRatio(trimmedUrl);
                if (detectedRatio) {
                    videoBlock.dataset.aspectRatio = detectedRatio;
                }

                updateVideoDisplay(videoBlock, trimmedUrl);

                // Update URL input in properties panel if it exists
                const urlInput = document.getElementById('video-url-' + statePath);
                if (urlInput) urlInput.value = trimmedUrl;
            }
        });

        // Position the video block
        videoBlock.style.position = 'absolute';
        videoBlock.style.left = '0px';
        videoBlock.style.top = insertPosition.y + 'px';
        videoBlock.style.width = '100%';

        // After insertion, reorder all blocks if necessary
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            setTimeout(() => reorderBlocks(), 10);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            // Insert after the reference block
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(videoBlock, nextSibling);
                console.log('Inserted videoBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(videoBlock);
                console.log('Appended videoBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            // Insert before the reference block
            canvas.insertBefore(videoBlock, insertPosition.insertBefore);
            console.log('Inserted videoBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            // No specific position, append at end
            canvas.appendChild(videoBlock);
            console.log('Appended videoBlock at end');
        }

        // Add selection functionality
        videoBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(videoBlock);
        });

        // Prevent drag/drop on video block itself
        videoBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        videoBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // Auto-select the new block
        selectBlock(videoBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Video block created and appended to canvas:', videoBlock.dataset.blockId);
    }

    function createSocialBlockAtPosition(insertPosition) {
        blockCounter++;
        console.log('Creating social block #', blockCounter);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create social block element
        const socialBlock = document.createElement('div');
        socialBlock.className = 'email-block social-block';
        socialBlock.dataset.blockId = 'social-' + blockCounter;
        socialBlock.dataset.blockType = 'social';
        socialBlock.dataset.size = 'medium'; // Small, medium, large
        socialBlock.dataset.alignment = 'center';
        socialBlock.dataset.grayscale = 'false';

        // Set initial positioning to help with layout calculations
        socialBlock.style.position = 'absolute';
        socialBlock.style.left = '0';
        socialBlock.style.width = '100%';
        socialBlock.style.top = (insertPosition?.y || 20) + 'px'; // Use calculated position

        // Social platform data (default enabled platforms)
        socialBlock.dataset.platforms = JSON.stringify({
            facebook: { enabled: true, url: 'https://facebook.com/' },
            x: { enabled: true, url: 'https://x.com/' },
            linkedin: { enabled: true, url: 'https://linkedin.com/' },
            youtube: { enabled: true, url: 'https://youtube.com/' },
            instagram: { enabled: true, url: 'https://instagram.com/' },
            tiktok: { enabled: true, url: 'https://tiktok.com/' },
            whatsapp: { enabled: false, url: '' },
            threads: { enabled: false, url: '' },
            bluesky: { enabled: false, url: '' }
        });

        // Set up social block for alignment
        socialBlock.style.display = 'flex';
        socialBlock.style.justifyContent = 'center'; // Default center alignment

        // Create social container
        const socialContainer = document.createElement('div');
        socialContainer.className = 'social-container';
        socialContainer.style.display = 'flex';
        socialContainer.style.flexWrap = 'wrap';
        socialContainer.style.gap = '12px';
        socialContainer.style.alignItems = 'center';
        socialContainer.style.justifyContent = 'center';

        // Create social icons
        const platforms = JSON.parse(socialBlock.dataset.platforms);
        const platformIcons = {
            facebook: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>',
                color: '#1877f2',
                name: 'Facebook'
            },
            x: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>',
                color: '#000000',
                name: 'X'
            },
            linkedin: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>',
                color: '#0077b5',
                name: 'LinkedIn'
            },
            youtube: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>',
                color: '#ff0000',
                name: 'YouTube'
            },
            instagram: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>',
                color: '#e4405f',
                name: 'Instagram'
            },
            tiktok: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path></svg>',
                color: '#000000',
                name: 'TikTok'
            },
            whatsapp: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"></path></svg>',
                color: '#25d366',
                name: 'WhatsApp'
            },
            threads: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.781 3.632 2.695 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 0 1 3.02.142c-.126-.742-.375-1.332-.7-1.811-.648-1.093-1.791-1.644-3.4-1.634-1.155.006-2.046.23-2.65.665l-.544-1.934c.811-.58 2.015-.861 3.579-.875 2.301-.021 4.007.739 5.072 2.256.758 1.077 1.122 2.405 1.282 3.816a8.493 8.493 0 0 1 2.517 1.54c.016.016.031.031.046.047 1.117 1.244 1.336 2.543.649 3.862-.297.57-.735 1.074-1.302 1.497-1.5 1.414-3.513 2.113-5.98 2.076l-.014-.002Zm2.78-4.72c.007-.006.014-.006.021-.012.015-.011.031-.022.047-.032a3.573 3.573 0 0 0 1.066-.964c.876-1.134.915-3.087.845-4.845a6.13 6.13 0 0 0-2.326-.47c-1.085.063-2.007.36-2.582.83-.915.746-.78 1.657-.749 2.135.04.69.27 1.267.653 1.653.636.64 1.569.848 2.566.816.422-.014.652-.053.652-.053s.001 0 .007-.003l.007-.003s-.005-.004-.007-.004Z"></path></svg>',
                color: '#000000',
                name: 'Threads'
            },
            bluesky: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 10.8c-1.087-2.114-4.046-6.053-6.798-7.995C2.566.944 1.561 1.266.902 1.565.139 1.908 0 3.08 0 3.768c0 .69.378 5.65.624 6.479.815 2.736 3.713 3.66 6.383 3.364.136-.02.275-.039.415-.056-.138.022-.276.04-.415.056-2.67-.296-5.568.628-6.383 3.364C.378 17.703 0 22.052 0 22.052s.139 1.86.902 2.203C1.561 24.555 2.566 24.877 5.202 23.016c2.752-1.942 5.711-5.881 6.798-7.995 1.087 2.114 4.046 6.053 6.798 7.995 2.636 1.861 3.641 1.539 4.3 1.24.763-.343.902-1.515.902-2.203 0 0-.378-4.349-.624-5.179-.815-2.736-3.713-3.66-6.383-3.364-.139.016-.277.034-.415.056.138-.017.276-.036.415-.056 2.67.296 5.568-.628 6.383-3.364.246-.829.624-5.789.624-6.479 0-.688-.139-1.86-.902-2.203C21.439.734 20.434.412 17.798 2.273c-2.752 1.942-5.711 5.881-6.798 7.995z"></path></svg>',
                color: '#00a8e8',
                name: 'Bluesky'
            }
        };

        Object.entries(platforms).forEach(([platform, data]) => {
            if (data.enabled && data.url) {
                const socialLink = document.createElement('a');
                socialLink.href = data.url;
                socialLink.target = '_blank';
                socialLink.className = 'social-link';
                socialLink.dataset.platform = platform;
                socialLink.style.textDecoration = 'none';
                socialLink.style.lineHeight = '1';
                socialLink.style.display = 'inline-block';
                socialLink.style.transition = 'all 0.2s ease';
                socialLink.style.color = platformIcons[platform]?.color || '#666';
                socialLink.title = platformIcons[platform]?.name || platform;

                // Add hover effect
                socialLink.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.1)';
                });
                socialLink.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });

                socialLink.innerHTML = platformIcons[platform]?.icon || '🔗';
                socialContainer.appendChild(socialLink);
            }
        });

        // Add placeholder if no enabled platforms
        if (socialContainer.children.length === 0) {
            const placeholder = document.createElement('div');
            placeholder.className = 'social-placeholder';
            placeholder.style.textAlign = 'center';
            placeholder.style.color = '#6b7280';
            placeholder.style.padding = '20px';
            placeholder.style.border = '2px dashed #d1d5db';
            placeholder.style.borderRadius = '8px';
            placeholder.innerHTML = `
                <div style="font-size: 32px; margin-bottom: 8px;">📱</div>
                <div style="font-size: 14px;">Enable social platforms in properties</div>
            `;
            socialContainer.appendChild(placeholder);
        }

        socialBlock.appendChild(socialContainer);

        // Add selection functionality
        socialBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(socialBlock);
        });

        // Prevent drag events on blocks to ensure canvas handles all drops
        socialBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        socialBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // After insertion, reorder all blocks if necessary (longer delay for social blocks)
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            setTimeout(() => reorderBlocks(), 100);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            // Insert after the reference block
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(socialBlock, nextSibling);
                console.log('Inserted socialBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(socialBlock);
                console.log('Appended socialBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            // Insert before the reference block
            canvas.insertBefore(socialBlock, insertPosition.insertBefore);
            console.log('Inserted socialBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            // No specific position, append at end
            canvas.appendChild(socialBlock);
            console.log('Appended socialBlock at end');
        }

        // Auto-select the new block
        selectBlock(socialBlock);

        // Apply proper icon sizing after a slight delay to ensure DOM is ready
        setTimeout(() => {
            updateSocialIconSizes(socialBlock, socialBlock.dataset.size || 'medium');
            // Force another reorder after sizing to ensure correct positioning
            if (insertPosition.insertAfter || insertPosition.insertBefore) {
                setTimeout(() => reorderBlocks(), 50);
            }
        }, 10);

        // Update canvas height
        updateCanvasHeight();

        console.log('Social block created and appended to canvas:', socialBlock.dataset.blockId);
    }

    function createColumnsBlockAtPosition(insertPosition, columnType) {
        blockCounter++;
        console.log('Creating columns block #', blockCounter, 'type:', columnType);

        // Hide placeholder if visible
        const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
        if (canvasPlaceholder) {
            canvasPlaceholder.style.display = 'none';
        }

        // Create columns block element
        const columnsBlock = document.createElement('div');
        columnsBlock.className = 'email-block columns-block';
        columnsBlock.dataset.blockId = 'columns-' + blockCounter;
        columnsBlock.dataset.blockType = 'columns';
        columnsBlock.dataset.columnType = columnType;

        // Create columns container
        const columnsContainer = document.createElement('div');
        columnsContainer.className = 'columns-container';
        columnsContainer.style.display = 'flex';
        columnsContainer.style.gap = '10px';
        columnsContainer.style.width = '100%';

        // Define column widths based on type
        let columnWidths = [];
        let columnCount = 0;

        if (columnType === 2) {
            columnWidths = ['50%', '50%'];
            columnCount = 2;
        } else if (columnType === 3) {
            columnWidths = ['33.333%', '33.333%', '33.333%'];
            columnCount = 3;
        } else if (columnType === '1-2') {
            columnWidths = ['33.333%', '66.667%'];
            columnCount = 2;
        } else if (columnType === '2-1') {
            columnWidths = ['66.667%', '33.333%'];
            columnCount = 2;
        }

        // Create individual columns
        for (let i = 0; i < columnCount; i++) {
            const column = document.createElement('div');
            column.className = 'email-column empty'; // Add empty class for placeholder centering
            column.dataset.columnIndex = i;
            column.style.width = columnWidths[i];
            column.style.minHeight = '100px';
            column.style.border = '2px dashed #d1d5db';
            column.style.borderRadius = '6px';
            column.style.position = 'relative';
            column.style.backgroundColor = '#f9fafb';
            column.style.display = 'flex';
            column.style.flexDirection = 'column';

            // Add placeholder text
            const placeholder = document.createElement('div');
            placeholder.className = 'column-placeholder';
            placeholder.textContent = 'Drop content here';
            placeholder.style.color = '#9ca3af';
            placeholder.style.fontSize = '14px';
            placeholder.style.textAlign = 'center';
            placeholder.style.pointerEvents = 'none';

            column.appendChild(placeholder);

            // Add drop zone functionality to individual columns
            addColumnDropZone(column);

            columnsContainer.appendChild(column);
        }

        columnsBlock.appendChild(columnsContainer);

        // Position using calculated insertion point
        columnsBlock.style.position = 'absolute';
        columnsBlock.style.left = '0px'; // Full width - start at left edge
        columnsBlock.style.top = insertPosition.y + 'px';
        columnsBlock.style.width = '100%'; // Full width of canvas

        // After insertion, reorder all blocks if necessary
        if (insertPosition.insertAfter || insertPosition.insertBefore) {
            setTimeout(() => reorderBlocks(), 10);
        }

        // Add to canvas in the correct DOM position
        if (insertPosition.insertAfter) {
            const nextSibling = insertPosition.insertAfter.nextSibling;
            if (nextSibling) {
                canvas.insertBefore(columnsBlock, nextSibling);
                console.log('Inserted columnsBlock after', insertPosition.insertAfter.dataset.blockId, 'before', nextSibling.dataset?.blockId);
            } else {
                canvas.appendChild(columnsBlock);
                console.log('Appended columnsBlock after', insertPosition.insertAfter.dataset.blockId, '(was last)');
            }
        } else if (insertPosition.insertBefore) {
            canvas.insertBefore(columnsBlock, insertPosition.insertBefore);
            console.log('Inserted columnsBlock before', insertPosition.insertBefore.dataset.blockId);
        } else {
            canvas.appendChild(columnsBlock);
            console.log('Appended columnsBlock at end');
        }

        // Add selection functionality
        columnsBlock.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(columnsBlock);
        });

        // Prevent drag events on blocks to ensure canvas handles all drops
        columnsBlock.addEventListener('dragover', function(e) {
            e.stopPropagation(); // Let canvas handle dragover
        });

        columnsBlock.addEventListener('drop', function(e) {
            e.stopPropagation(); // Let canvas handle drop
        });

        // Auto-select the new block
        selectBlock(columnsBlock);

        // Update canvas height
        updateCanvasHeight();

        console.log('Columns block created and appended to canvas:', columnsBlock.dataset.blockId);
    }

    // Column drop zone functionality
    function addColumnDropZone(column) {
        column.addEventListener('dragover', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Prevent canvas from handling this
            e.dataTransfer.dropEffect = 'copy';

            // Add visual feedback
            column.style.borderColor = '#3b82f6';
            column.style.backgroundColor = 'rgba(59, 130, 246, 0.1)';

            console.log('Dragging over column:', column.dataset.columnIndex);
        });

        column.addEventListener('dragleave', function(e) {
            // Only remove styling if we're actually leaving the column
            if (!column.contains(e.relatedTarget)) {
                column.style.borderColor = '#d1d5db';
                column.style.backgroundColor = '#f9fafb';
            }
        });

        column.addEventListener('drop', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Prevent canvas from handling this

            // Reset visual feedback
            column.style.borderColor = '#d1d5db';
            column.style.backgroundColor = '#f9fafb';

            const blockType = e.dataTransfer.getData('text/plain');
            console.log('Dropped', blockType, 'into column', column.dataset.columnIndex);

            // Hide placeholder if this is the first content
            const placeholder = column.querySelector('.column-placeholder');
            if (placeholder) {
                placeholder.style.display = 'none';
            }

            // Remove empty class to enable top alignment
            column.classList.remove('empty');

            // Create content block inside the column
            createContentInColumn(column, blockType);
        });
    }

    // Create content blocks inside columns
    function createContentInColumn(column, blockType) {
        blockCounter++;

        let contentElement;

        if (blockType === 'text') {
            contentElement = document.createElement('div');
            contentElement.className = 'column-content text-content';
            contentElement.dataset.blockId = 'column-text-' + blockCounter;
            contentElement.dataset.blockType = 'text'; // Enable text properties panel
            contentElement.innerHTML = '<p contenteditable="true">' + PLACEHOLDER_TEXT_FULL + '</p>';
            contentElement.style.cssText = `
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid transparent;
                border-radius: 4px;
                cursor: text;
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.5;
                text-align: left;
                background: transparent;
                color: #374151;
                min-height: 24px;
            `;

            // Make text editable
            const textParagraph = contentElement.querySelector('p');
            textParagraph.addEventListener('focus', function() {
                this.style.outline = 'none';
                contentElement.style.borderColor = '#3b82f6';
                contentElement.style.boxShadow = '0 0 0 3px rgba(59, 130, 246, 0.1)';
            });

            textParagraph.addEventListener('blur', function() {
                contentElement.style.borderColor = 'transparent';
                contentElement.style.boxShadow = 'none';
                // Save content changes here if needed
                console.log('Text updated:', this.textContent);
            });

            textParagraph.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    this.blur(); // Exit editing mode on Enter
                }
            });

        } else if (blockType === 'image') {
            contentElement = document.createElement('div');
            contentElement.className = 'column-content image-content';
            contentElement.dataset.blockId = 'column-image-' + blockCounter;
            contentElement.dataset.blockType = 'image'; // Enable image properties panel

            const imgWrapper = document.createElement('div');
            imgWrapper.style.cssText = `
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid transparent;
                border-radius: 4px;
                text-align: center;
                background: #f8fafc;
                min-height: 80px;
                display: flex;
                align-items: center;
                justify-content: center;
            `;

            // Create default placeholder image
            const placeholderImg = document.createElement('img');
            placeholderImg.src = 'https://placehold.co/600x400.png';
            placeholderImg.alt = 'Click to add image';
            placeholderImg.style.cssText = `
                max-width: 100%;
                height: auto;
                border-radius: 4px;
                cursor: pointer;
                border: 2px dashed #d1d5db;
                background: #f8fafc;
            `;

            // Create hidden file input for image upload
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            fileInput.style.display = 'none';

            // Add click handler for image upload
            placeholderImg.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Update the placeholder image with the new image
                        placeholderImg.src = e.target.result;
                        placeholderImg.alt = file.name;
                        placeholderImg.style.border = 'none'; // Remove dashed border
                        placeholderImg.style.background = 'transparent';

                        console.log('Image uploaded:', file.name);

                        // If this image content is currently selected, update properties panel preview
                        if (contentElement.classList.contains('selected')) {
                            updateImagePropertiesPreview(e.target.result);
                        }
                    };
                    reader.readAsDataURL(file);
                }
            });

            imgWrapper.appendChild(placeholderImg);
            imgWrapper.appendChild(fileInput);
            contentElement.appendChild(imgWrapper);

        } else if (blockType === 'button') {
            contentElement = document.createElement('div');
            contentElement.className = 'column-content button-content';
            contentElement.dataset.blockId = 'column-button-' + blockCounter;
            contentElement.dataset.blockType = 'button'; // Enable button properties panel

            const buttonWrapper = document.createElement('div');
            buttonWrapper.style.cssText = `
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                text-align: center;
            `;

            const button = document.createElement('a');
            button.href = '#';
            button.contentEditable = 'true';
            button.textContent = 'Button Text';
            button.style.cssText = `
                display: inline-block;
                background: #3b82f6;
                color: white;
                padding: 12px 24px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 500;
                transition: background-color 0.2s ease;
                cursor: pointer;
                outline: none;
            `;

            // Make button text editable
            button.addEventListener('focus', function() {
                this.style.boxShadow = '0 0 0 3px rgba(59, 130, 246, 0.3)';
                this.style.background = '#2563eb';
            });

            button.addEventListener('blur', function() {
                this.style.boxShadow = 'none';
                this.style.background = '#3b82f6';
                console.log('Button text updated:', this.textContent);
            });

            button.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.blur();
                }
                // Prevent link navigation while editing
                e.stopPropagation();
            });

            // Double-click to edit URL
            button.addEventListener('dblclick', function(e) {
                e.preventDefault();
                const newUrl = prompt('Enter button URL:', this.href);
                if (newUrl !== null) {
                    this.href = newUrl;
                    console.log('Button URL updated:', newUrl);
                }
            });

            // Prevent default link behavior while editing
            button.addEventListener('click', function(e) {
                if (this.contentEditable === 'true') {
                    e.preventDefault();
                }
            });

            buttonWrapper.appendChild(button);
            contentElement.appendChild(buttonWrapper);

        } else {
            // Fallback for unknown block types
            contentElement = document.createElement('div');
            contentElement.className = 'column-content unknown-content';
            contentElement.dataset.blockId = 'column-unknown-' + blockCounter;
            contentElement.innerHTML = `<p>Unknown content type: ${blockType}</p>`;
            contentElement.style.cssText = `
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #fbbf24;
                border-radius: 4px;
                background: #fef3c7;
                color: #92400e;
            `;
        }

        // Add hover effects and selection
        contentElement.addEventListener('mouseenter', function() {
            if (!this.querySelector(':focus')) { // Don't show hover when editing
                this.style.borderColor = '#3b82f6';
            }
        });

        contentElement.addEventListener('mouseleave', function() {
            if (!this.querySelector(':focus')) { // Don't remove border when editing
                this.style.borderColor = 'transparent';
            }
        });

        contentElement.addEventListener('click', function(e) {
            e.stopPropagation();
            console.log('Selected column content:', this.dataset.blockId, 'Type:', this.dataset.blockType);

            // Clear previous selections (both regular blocks and column content)
            document.querySelectorAll('.email-block.selected').forEach(el => {
                el.classList.remove('selected');
            });
            document.querySelectorAll('.column-content.selected').forEach(el => {
                el.classList.remove('selected');
                el.style.borderColor = 'transparent';
            });

            // Select this content element
            this.classList.add('selected');
            this.style.borderColor = '#3b82f6';
            this.style.boxShadow = '0 0 0 1px rgba(59, 130, 246, 0.2)';

            // Update properties panel using the existing selectBlock function
            selectedBlock = this;
            updatePropertiesPanel(this);
        });

        // Append to column
        column.appendChild(contentElement);

        // Remove empty class to ensure top alignment (in case it wasn't removed before)
        column.classList.remove('empty');

        console.log(`Created ${blockType} content in column ${column.dataset.columnIndex}`);
    }

    // Update image preview in properties panel
    function updateImagePropertiesPreview(imageSrc) {
        // Find the image preview in the properties panel and update it
        const imagePropertiesPanel = document.getElementById('image-properties-' + statePath);
        if (imagePropertiesPanel) {
            const previewImage = imagePropertiesPanel.querySelector('img');
            if (previewImage) {
                previewImage.src = imageSrc;
            }
        }
    }

    // Phase 4: SELECTION AND PROPERTIES PANEL FUNCTIONALITY
    function selectBlock(block) {
        console.log('Selecting block:', block.dataset.blockId);

        // Remove previous selection and move controls
        document.querySelectorAll('.email-block.selected').forEach(b => {
            b.classList.remove('selected');
            const existingControls = b.querySelector('.block-move-controls');
            if (existingControls) {
                existingControls.remove();
            }
        });

        // Select new block
        block.classList.add('selected');
        selectedBlock = block;

        // Add movement controls
        addMovementControls(block);

        // Update properties panel
        updatePropertiesPanel(block);
    }

    function addMovementControls(block) {
        // Don't add controls if already exist
        if (block.querySelector('.block-move-controls')) {
            return;
        }

        // Get all blocks in DOM order
        const allBlocks = Array.from(canvas.querySelectorAll('.email-block'));

        const currentIndex = allBlocks.indexOf(block);
        const isFirst = currentIndex === 0;
        const isLast = currentIndex === allBlocks.length - 1;

        // Create controls container
        const controls = document.createElement('div');
        controls.className = 'block-move-controls';

        // Move Up button
        const moveUpBtn = document.createElement('button');
        moveUpBtn.type = 'button'; // Prevent form submission
        moveUpBtn.className = 'move-btn';
        moveUpBtn.innerHTML = '↑';
        moveUpBtn.title = 'Move Up';
        moveUpBtn.disabled = isFirst;
        moveUpBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            console.log('Move up clicked for block:', block.dataset.blockId);
            moveBlockUp(block);
        });

        // Move Down button
        const moveDownBtn = document.createElement('button');
        moveDownBtn.type = 'button'; // Prevent form submission
        moveDownBtn.className = 'move-btn';
        moveDownBtn.innerHTML = '↓';
        moveDownBtn.title = 'Move Down';
        moveDownBtn.disabled = isLast;
        moveDownBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            console.log('Move down clicked for block:', block.dataset.blockId);
            moveBlockDown(block);
        });

        controls.appendChild(moveUpBtn);
        controls.appendChild(moveDownBtn);
        block.appendChild(controls);
    }

    function moveBlockUp(block) {
        console.log('moveBlockUp called for:', block.dataset.blockId);

        // Use DOM order instead of position-based sorting
        const allBlocks = Array.from(canvas.querySelectorAll('.email-block'));

        console.log('All blocks found:', allBlocks.length);
        console.log('Block IDs in DOM order:', allBlocks.map(b => b.dataset.blockId));

        const currentIndex = allBlocks.indexOf(block);
        console.log('Current block index:', currentIndex);

        if (currentIndex > 0) {
            const previousBlock = allBlocks[currentIndex - 1];
            console.log('Moving before block:', previousBlock.dataset.blockId);

            // Swap DOM positions
            canvas.insertBefore(block, previousBlock);
            console.log('DOM position swapped');

            // Reorder all blocks
            setTimeout(() => {
                console.log('Reordering blocks...');
                reorderBlocks();
            }, 10);

            // Update movement controls
            setTimeout(() => {
                if (selectedBlock === block) {
                    console.log('Updating movement controls...');
                    const existingControls = block.querySelector('.block-move-controls');
                    if (existingControls) {
                        existingControls.remove();
                    }
                    addMovementControls(block);
                }
            }, 50);
        } else {
            console.log('Cannot move up - already at top');
        }
    }

    function moveBlockDown(block) {
        console.log('moveBlockDown called for:', block.dataset.blockId);

        // Use DOM order instead of position-based sorting
        const allBlocks = Array.from(canvas.querySelectorAll('.email-block'));

        console.log('All blocks found:', allBlocks.length);
        console.log('Block IDs in DOM order:', allBlocks.map(b => b.dataset.blockId));
        const currentIndex = allBlocks.indexOf(block);
        console.log('Current block index:', currentIndex);

        if (currentIndex < allBlocks.length - 1) {
            const nextBlock = allBlocks[currentIndex + 1];
            console.log('Moving after block:', nextBlock.dataset.blockId);

            // Swap DOM positions
            canvas.insertBefore(nextBlock, block);
            console.log('DOM position swapped');

            // Reorder all blocks
            setTimeout(() => {
                console.log('Reordering blocks...');
                reorderBlocks();
            }, 10);

            // Update movement controls
            setTimeout(() => {
                if (selectedBlock === block) {
                    console.log('Updating movement controls...');
                    const existingControls = block.querySelector('.block-move-controls');
                    if (existingControls) {
                        existingControls.remove();
                    }
                    addMovementControls(block);
                }
            }, 50);
        } else {
            console.log('Cannot move down - already at bottom');
        }
    }

    function updatePropertiesPanel(block) {
        console.log('Updating properties panel for block:', block.dataset.blockType);

        // Hide all panels first
        if (noSelectionPanel) noSelectionPanel.style.display = 'none';
        if (textPropertiesPanel) textPropertiesPanel.style.display = 'none';
        if (imagePropertiesPanel) imagePropertiesPanel.style.display = 'none';
        if (buttonPropertiesPanel) buttonPropertiesPanel.style.display = 'none';
        if (dividerPropertiesPanel) dividerPropertiesPanel.style.display = 'none';
        if (videoPropertiesPanel) videoPropertiesPanel.style.display = 'none';
        if (socialPropertiesPanel) socialPropertiesPanel.style.display = 'none';
        if (columnsPropertiesPanel) columnsPropertiesPanel.style.display = 'none';

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
        } else if (block.dataset.blockType === 'divider' && dividerPropertiesPanel) {
            dividerPropertiesPanel.style.display = 'block';
            addDividerPropertyListeners(block);
        } else if (block.dataset.blockType === 'video' && videoPropertiesPanel) {
            videoPropertiesPanel.style.display = 'block';
            addVideoPropertyListeners(block);
        } else if (block.dataset.blockType === 'social' && socialPropertiesPanel) {
            socialPropertiesPanel.style.display = 'block';
            addSocialPropertyListeners(block);
        } else if (block.dataset.blockType === 'columns' && columnsPropertiesPanel) {
            columnsPropertiesPanel.style.display = 'block';
            addColumnsPropertyListeners(block);
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

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

                // Show no selection panel - NO innerHTML!
                if (textPropertiesPanel) textPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    function addImagePropertyListeners(block) {
        // Handle both regular image blocks and column image content
        let img, imageWrapper, isColumnContent = false;

        if (block.classList.contains('column-content')) {
            // This is column image content
            isColumnContent = true;
            img = block.querySelector('img');
            imageWrapper = block.querySelector('div'); // The imgWrapper div
        } else {
            // This is a regular image block
            img = block.querySelector('img');
            imageWrapper = block.querySelector('.image-wrapper');
        }

        // Get image property controls
        const imageUpload = document.getElementById('image-upload-' + statePath);
        const imageUploadBtn = document.getElementById('image-upload-btn-' + statePath);
        const imagePreviewImg = document.getElementById('image-preview-img-' + statePath);
        const widthInput = document.getElementById('image-width-' + statePath);
        const titleInput = document.getElementById('image-title-' + statePath);
        const urlInput = document.getElementById('image-url-' + statePath);
        const deleteBtn = document.getElementById('delete-image-block-' + statePath);
        const alignmentBtns = imagePropertiesPanel?.querySelectorAll('.alignment-btn');

        // Load current values into form
        if (img && widthInput) {
            let currentWidth;
            if (isColumnContent) {
                currentWidth = img.style.maxWidth || '100%';
            } else {
                currentWidth = block.dataset.width || img.style.width || '100%';
            }
            widthInput.value = currentWidth;

            // Set display mode based on width (inline-block for alignment, block for full width)
            if (currentWidth !== '100%') {
                img.style.display = 'inline-block';
            } else {
                img.style.display = 'block';
            }
        }
        if (img && titleInput) titleInput.value = img.alt || '';
        if (imageWrapper && urlInput && !isColumnContent) {
            // URL linking only for regular image blocks, not column content yet
            const existingLink = imageWrapper.querySelector('a');
            urlInput.value = existingLink ? existingLink.href : '';
        }
        if (img && imagePreviewImg) {
            imagePreviewImg.src = img.src;
            console.log('Updated properties panel preview with:', img.src);
        }

        // Set alignment button states
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.align === block.dataset.align) {
                    btn.classList.add('active');
                }
            });
        }

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
                    if (img) {
                        img.src = base64;
                        img.alt = file.name;

                        // Remove placeholder styling for column content
                        if (isColumnContent) {
                            img.style.border = 'none';
                            img.style.background = 'transparent';
                        }
                    }
                    if (imagePreviewImg) imagePreviewImg.src = base64;

                    console.log('Image updated with base64 data');
                };
                reader.readAsDataURL(file);
            };
        }

        // Width control
        if (widthInput) {
            widthInput.addEventListener('input', function() {
                const width = this.value.trim() || '100%';
                if (img) {
                    img.style.width = width;
                    // When width is not 100%, use inline-block so text-align works for alignment
                    // When width is 100%, use block for full-width display
                    if (width === '100%') {
                        img.style.display = 'block';
                        img.style.margin = '0';
                    } else {
                        img.style.display = 'inline-block';
                        // Apply centering based on current alignment
                        const currentAlign = block.dataset.align || 'center';
                        if (currentAlign === 'center') {
                            imageWrapper.style.textAlign = 'center';
                        } else if (currentAlign === 'right') {
                            imageWrapper.style.textAlign = 'right';
                        } else {
                            imageWrapper.style.textAlign = 'left';
                        }
                    }
                    // Store width in dataset for saving
                    block.dataset.width = width;
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

        // Image alignment
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
                    if (imageWrapper) {
                        imageWrapper.style.textAlign = newAlign;
                    }

                    // Ensure image is inline-block if not 100% width (so text-align works)
                    const currentWidth = img?.style.width || block.dataset.width || '100%';
                    if (img && currentWidth !== '100%') {
                        img.style.display = 'inline-block';
                    }

                    console.log('Image alignment updated to:', newAlign);
                });
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting image block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

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

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

                // Show no selection panel
                if (buttonPropertiesPanel) buttonPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    function addDividerPropertyListeners(block) {
        const dividerLine = block.querySelector('.email-divider');
        const dividerWrapper = block.querySelector('.divider-wrapper');

        // Get divider property controls
        const colorPicker = document.getElementById('divider-color-' + statePath);
        const colorText = document.getElementById('divider-color-text-' + statePath);
        const thicknessSelect = document.getElementById('divider-thickness-' + statePath);
        const widthSelect = document.getElementById('divider-width-' + statePath);
        const heightSelect = document.getElementById('divider-height-' + statePath);
        const spacingSelect = document.getElementById('divider-spacing-' + statePath);
        const deleteBtn = document.getElementById('delete-divider-block-' + statePath);
        const styleOptions = dividerPropertiesPanel?.querySelectorAll('.divider-style-option');

        // Load current values into form
        if (colorPicker) colorPicker.value = block.dataset.color || '#d1d5db';
        if (colorText) colorText.value = block.dataset.color || '#d1d5db';
        if (thicknessSelect) thicknessSelect.value = block.dataset.thickness || '2';
        if (widthSelect) widthSelect.value = block.dataset.width || '100';
        if (heightSelect) heightSelect.value = (block.dataset.heightUnit || block.dataset.height + 'px') || '40px';
        if (spacingSelect) spacingSelect.value = block.dataset.spacing || 'medium';

        // Set active style option
        if (styleOptions) {
            styleOptions.forEach(option => {
                option.classList.remove('active');
                if (option.dataset.style === block.dataset.style) {
                    option.classList.add('active');
                }
            });
        }

        // Apply current spacing
        applySpacing();

        function applySpacing() {
            if (!dividerWrapper) return;

            const spacing = block.dataset.spacing;
            const spacingMap = {
                'small': '10px',
                'medium': '20px',
                'large': '30px'
            };

            const paddingValue = spacingMap[spacing] || '20px';
            dividerWrapper.style.padding = paddingValue + ' 0';
        }

        // Color controls (both picker and text input)
        if (colorPicker) {
            colorPicker.addEventListener('change', function() {
                const color = this.value;
                block.dataset.color = color;
                if (colorText) colorText.value = color;
                updateDividerStyle();
                console.log('Divider color updated to:', color);
            });
        }

        if (colorText) {
            colorText.addEventListener('input', function() {
                const color = this.value;
                if (color.startsWith('#') && (color.length === 4 || color.length === 7)) {
                    block.dataset.color = color;
                    if (colorPicker) colorPicker.value = color;
                    updateDividerStyle();
                    console.log('Divider color updated to:', color);
                }
            });
        }

        // Thickness control
        if (thicknessSelect) {
            thicknessSelect.addEventListener('change', function() {
                block.dataset.thickness = this.value;
                updateDividerStyle();
                console.log('Divider thickness updated to:', this.value);
            });
        }

        // Width control
        if (widthSelect) {
            widthSelect.addEventListener('change', function() {
                block.dataset.width = this.value;
                if (dividerLine) {
                    dividerLine.style.width = this.value + '%';
                }
                console.log('Divider width updated to:', this.value + '%');
            });
        }

        // Height control
        if (heightSelect) {
            heightSelect.addEventListener('input', function() {
                const inputValue = this.value.trim();

                // Parse height value and unit
                const heightResult = parseHeightInput(inputValue);

                if (heightResult.isValid) {
                    // Store both numeric value and full value with unit
                    block.dataset.height = heightResult.value;
                    block.dataset.heightUnit = heightResult.fullValue;

                    if (dividerWrapper) {
                        dividerWrapper.style.height = heightResult.fullValue;
                    }

                    // Reset error styling
                    this.style.borderColor = '';
                    this.style.backgroundColor = '';
                    this.style.color = '';

                    console.log('Divider height updated to:', heightResult.fullValue);

                    // Reposition all blocks after height change
                    repositionAllBlocks();
                } else {
                    // Show error styling
                    this.style.borderColor = '#ef4444';
                    this.style.backgroundColor = '#fef2f2';
                    this.style.color = '#dc2626'; // Dark red text for visibility
                    console.warn('Invalid height input:', inputValue);
                }
            });
        }

        // Function to parse and validate height input
        function parseHeightInput(input) {
            // Remove all whitespace
            input = input.replace(/\s/g, '');

            // Regular expression to match number + unit
            const heightRegex = /^(\d*\.?\d+)(px|em|rem|%|vh|vw|in|cm|mm|pt|pc)?$/i;
            const match = input.match(heightRegex);

            if (match) {
                const numericValue = parseFloat(match[1]);
                const unit = match[2] || 'px'; // Default to px if no unit provided

                // Validate reasonable ranges
                if (numericValue <= 0) {
                    return { isValid: false };
                }

                // Check unit-specific limits
                if (unit === 'px' && (numericValue < 1 || numericValue > 1000)) {
                    return { isValid: false };
                }

                if (unit === '%' && (numericValue < 0 || numericValue > 500)) {
                    return { isValid: false };
                }

                return {
                    isValid: true,
                    value: numericValue,
                    unit: unit.toLowerCase(),
                    fullValue: numericValue + unit.toLowerCase()
                };
            }

            return { isValid: false };
        }

        // Spacing control
        if (spacingSelect) {
            spacingSelect.addEventListener('change', function() {
                block.dataset.spacing = this.value;
                applySpacing();
                console.log('Divider spacing updated to:', this.value);
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

                    updateDividerStyle();
                    console.log('Divider style updated to:', newStyle);
                });
            });
        }

        function updateDividerStyle() {
            if (!dividerLine) return;

            const color = block.dataset.color || '#d1d5db';
            const thickness = block.dataset.thickness || '2';
            const style = block.dataset.style || 'solid';

            dividerLine.style.borderTop = `${thickness}px ${style} ${color}`;
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting divider block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

                // Show no selection panel
                if (dividerPropertiesPanel) dividerPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    function addVideoPropertyListeners(block) {
        const videoContainer = block.querySelector('.video-container');

        // Get video property controls
        const urlInput = document.getElementById('video-url-' + statePath);
        const sizeDropdown = document.getElementById('video-size-' + statePath);
        const autoplayCheckbox = document.getElementById('video-autoplay-' + statePath);
        const loopCheckbox = document.getElementById('video-loop-' + statePath);
        const controlsCheckbox = document.getElementById('video-controls-' + statePath);
        const alignmentBtns = videoPropertiesPanel?.querySelectorAll('.alignment-btn');
        const deleteBtn = document.getElementById('delete-video-block-' + statePath);

        // Load current values into form
        if (urlInput) urlInput.value = block.dataset.url || '';
        if (sizeDropdown) sizeDropdown.value = block.dataset.size || '100';
        if (autoplayCheckbox) autoplayCheckbox.checked = block.dataset.autoplay === 'true';
        if (loopCheckbox) loopCheckbox.checked = block.dataset.loop === 'true';
        if (controlsCheckbox) controlsCheckbox.checked = block.dataset.controls === 'true';

        // Set active alignment
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.classList.toggle('active', btn.dataset.align === (block.dataset.alignment || 'center'));
            });
        }

        // Video URL input
        if (urlInput) {
            urlInput.addEventListener('input', function() {
                const url = this.value.trim();
                block.dataset.url = url;

                if (url) {
                    updateVideoDisplay(block, url);
                } else {
                    showVideoPlaceholder(block);
                }

                console.log('Video URL updated to:', url);
            });
        }

        // Video size dropdown
        if (sizeDropdown) {
            sizeDropdown.addEventListener('change', function() {
                const size = this.value;
                block.dataset.size = size;

                // Apply proportional scaling to video block
                const videoBlock = block;
                if (videoContainer && videoBlock) {
                    // Set the video block width based on size percentage
                    videoBlock.style.width = '100%'; // Full width container

                    // Set the video container width based on size percentage
                    videoContainer.style.width = size + '%';
                    videoContainer.style.maxWidth = size + '%';

                    // Maintain aspect ratio
                    videoContainer.style.aspectRatio = '16 / 9';
                    videoContainer.style.height = 'auto';

                    // Ensure the video iframe fills the container properly
                    const iframe = videoContainer.querySelector('iframe');
                    if (iframe) {
                        iframe.style.width = '100%';
                        iframe.style.height = '100%';
                        iframe.style.position = 'absolute';
                        iframe.style.top = '0';
                        iframe.style.left = '0';
                    }

                    // Make container relative for absolute positioned iframe
                    videoContainer.style.position = 'relative';
                }

                console.log('Video size updated to:', size + '%');
            });
        }


        // Video options
        if (autoplayCheckbox) {
            autoplayCheckbox.addEventListener('change', function() {
                block.dataset.autoplay = this.checked;
                updateVideoEmbedParameters(block);
                console.log('Video autoplay updated to:', this.checked);
            });
        }

        if (loopCheckbox) {
            loopCheckbox.addEventListener('change', function() {
                block.dataset.loop = this.checked;
                updateVideoEmbedParameters(block);
                console.log('Video loop updated to:', this.checked);
            });
        }

        if (controlsCheckbox) {
            controlsCheckbox.addEventListener('change', function() {
                block.dataset.controls = this.checked;
                updateVideoEmbedParameters(block);
                console.log('Video controls updated to:', this.checked);
            });
        }

        // Alignment controls
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const newAlign = this.dataset.align;
                    block.dataset.alignment = newAlign;

                    // Remove active from all buttons
                    alignmentBtns.forEach(b => b.classList.remove('active'));
                    // Add active to clicked button
                    this.classList.add('active');

                    // Update video block alignment
                    const videoBlock = block;
                    if (videoBlock) {
                        const alignStyles = {
                            'left': 'flex-start',
                            'center': 'center',
                            'right': 'flex-end'
                        };
                        videoBlock.style.justifyContent = alignStyles[newAlign] || 'center';
                    }

                    console.log('Video alignment updated to:', newAlign);
                });
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting video block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

                // Show no selection panel
                if (videoPropertiesPanel) videoPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }

    }

    function addSocialPropertyListeners(block) {
        const socialContainer = block.querySelector('.social-container');

        // Get all social platform controls
        const platforms = ['facebook', 'x', 'linkedin', 'youtube', 'instagram', 'tiktok', 'whatsapp', 'threads', 'bluesky'];
        const platformCheckboxes = {};
        const platformUrlInputs = {};

        platforms.forEach(platform => {
            platformCheckboxes[platform] = document.getElementById(`social-${platform}-` + statePath);
            platformUrlInputs[platform] = document.getElementById(`social-${platform}-url-` + statePath);
        });

        const grayscaleCheckbox = document.getElementById('social-grayscale-' + statePath);
        const sizeDropdown = document.getElementById('social-size-' + statePath);
        const alignmentBtns = document.querySelectorAll('#social-properties-' + statePath + ' .alignment-btn');
        const deleteBtn = document.getElementById('delete-social-block-' + statePath);

        // Load current values into form
        const platformsData = JSON.parse(block.dataset.platforms || '{}');
        platforms.forEach(platform => {
            if (platformCheckboxes[platform]) {
                platformCheckboxes[platform].checked = platformsData[platform]?.enabled || false;
            }
            if (platformUrlInputs[platform]) {
                platformUrlInputs[platform].value = platformsData[platform]?.url || '';
            }
        });

        if (grayscaleCheckbox) grayscaleCheckbox.checked = block.dataset.grayscale === 'true';
        if (sizeDropdown) sizeDropdown.value = block.dataset.size || 'medium';

        // Set active alignment
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.classList.toggle('active', btn.dataset.align === (block.dataset.alignment || 'center'));
            });
        }

        // Platform toggle and URL handlers
        platforms.forEach(platform => {
            // Checkbox toggle handler
            if (platformCheckboxes[platform]) {
                platformCheckboxes[platform].addEventListener('change', function() {
                    updateSocialPlatform(block, platform, 'enabled', this.checked);

                    // Set default URL when platform is first enabled and has no URL
                    if (this.checked) {
                        const platformsData = JSON.parse(block.dataset.platforms || '{}');
                        if (!platformsData[platform] || !platformsData[platform].url) {
                            const defaultUrls = {
                                facebook: 'https://facebook.com/',
                                x: 'https://x.com/',
                                linkedin: 'https://linkedin.com/',
                                youtube: 'https://youtube.com/',
                                instagram: 'https://instagram.com/',
                                tiktok: 'https://tiktok.com/',
                                whatsapp: 'https://wa.me/1234567890',
                                threads: 'https://threads.net/',
                                bluesky: 'https://bsky.app/'
                            };

                            if (defaultUrls[platform]) {
                                updateSocialPlatform(block, platform, 'url', defaultUrls[platform]);

                                // Update the URL input field
                                const urlInput = platformUrlInputs[platform];
                                if (urlInput) {
                                    urlInput.value = defaultUrls[platform];
                                }
                            }
                        }
                    }

                    updateSocialIcons(block);
                });
            }

            // URL input handler
            if (platformUrlInputs[platform]) {
                platformUrlInputs[platform].addEventListener('input', function() {
                    const url = this.value.trim();
                    updateSocialPlatform(block, platform, 'url', url);
                    updateSocialIcons(block);
                });
            }
        });

        // Grayscale option
        if (grayscaleCheckbox) {
            grayscaleCheckbox.addEventListener('change', function() {
                block.dataset.grayscale = this.checked;
                updateSocialIconStyles(block);
                console.log('Social grayscale updated to:', this.checked);
            });
        }

        // Size dropdown
        if (sizeDropdown) {
            sizeDropdown.addEventListener('change', function() {
                const size = this.value;
                block.dataset.size = size;
                updateSocialIconSizes(block, size);
                console.log('Social size updated to:', size);
            });
        }

        // Alignment controls
        if (alignmentBtns) {
            alignmentBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const newAlign = this.dataset.align;
                    block.dataset.alignment = newAlign;

                    // Remove active from all buttons
                    alignmentBtns.forEach(b => b.classList.remove('active'));
                    // Add active to clicked button
                    this.classList.add('active');

                    // Update social container alignment
                    const socialContainer = block.querySelector('.social-container');
                    const alignStyles = {
                        'left': 'flex-start',
                        'center': 'center',
                        'right': 'flex-end'
                    };
                    if (socialContainer) {
                        socialContainer.style.justifyContent = alignStyles[newAlign] || 'center';
                    }

                    console.log('Social alignment updated to:', newAlign);
                });
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting social block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

                // Show no selection panel
                const socialPropertiesPanel = document.getElementById('social-properties-' + statePath);
                const noSelectionPanel = document.getElementById('no-selection-' + statePath);
                if (socialPropertiesPanel) socialPropertiesPanel.style.display = 'none';
                if (noSelectionPanel) noSelectionPanel.style.display = 'block';
            };
        }
    }

    // Helper functions for social block
    function updateSocialPlatform(block, platform, property, value) {
        const platformsData = JSON.parse(block.dataset.platforms || '{}');
        if (!platformsData[platform]) {
            platformsData[platform] = { enabled: false, url: '' };
        }
        platformsData[platform][property] = value;
        block.dataset.platforms = JSON.stringify(platformsData);
    }

    function updateSocialIcons(block) {
        const socialContainer = block.querySelector('.social-container');
        if (!socialContainer) return;

        // Clear current icons
        socialContainer.innerHTML = '';

        const platformsData = JSON.parse(block.dataset.platforms || '{}');
        const platformIcons = {
            facebook: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>',
                color: '#1877f2',
                name: 'Facebook'
            },
            x: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>',
                color: '#000000',
                name: 'X'
            },
            linkedin: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>',
                color: '#0077b5',
                name: 'LinkedIn'
            },
            youtube: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>',
                color: '#ff0000',
                name: 'YouTube'
            },
            instagram: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>',
                color: '#e4405f',
                name: 'Instagram'
            },
            tiktok: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path></svg>',
                color: '#000000',
                name: 'TikTok'
            },
            whatsapp: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"></path></svg>',
                color: '#25d366',
                name: 'WhatsApp'
            },
            threads: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.781 3.632 2.695 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 0 1 3.02.142c-.126-.742-.375-1.332-.7-1.811-.648-1.093-1.791-1.644-3.4-1.634-1.155.006-2.046.23-2.65.665l-.544-1.934c.811-.58 2.015-.861 3.579-.875 2.301-.021 4.007.739 5.072 2.256.758 1.077 1.122 2.405 1.282 3.816a8.493 8.493 0 0 1 2.517 1.54c.016.016.031.031.046.047 1.117 1.244 1.336 2.543.649 3.862-.297.57-.735 1.074-1.302 1.497-1.5 1.414-3.513 2.113-5.98 2.076l-.014-.002Zm2.78-4.72c.007-.006.014-.006.021-.012.015-.011.031-.022.047-.032a3.573 3.573 0 0 0 1.066-.964c.876-1.134.915-3.087.845-4.845a6.13 6.13 0 0 0-2.326-.47c-1.085.063-2.007.36-2.582.83-.915.746-.78 1.657-.749 2.135.04.69.27 1.267.653 1.653.636.64 1.569.848 2.566.816.422-.014.652-.053.652-.053s.001 0 .007-.003l.007-.003s-.005-.004-.007-.004Z"></path></svg>',
                color: '#000000',
                name: 'Threads'
            },
            bluesky: {
                icon: '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 10.8c-1.087-2.114-4.046-6.053-6.798-7.995C2.566.944 1.561 1.266.902 1.565.139 1.908 0 3.08 0 3.768c0 .69.378 5.65.624 6.479.815 2.736 3.713 3.66 6.383 3.364.136-.02.275-.039.415-.056-.138.022-.276.04-.415.056-2.67-.296-5.568.628-6.383 3.364C.378 17.703 0 22.052 0 22.052s.139 1.86.902 2.203C1.561 24.555 2.566 24.877 5.202 23.016c2.752-1.942 5.711-5.881 6.798-7.995 1.087 2.114 4.046 6.053 6.798 7.995 2.636 1.861 3.641 1.539 4.3 1.24.763-.343.902-1.515.902-2.203 0 0-.378-4.349-.624-5.179-.815-2.736-3.713-3.66-6.383-3.364-.139.016-.277.034-.415.056.138-.017.276-.036.415-.056 2.67.296 5.568-.628 6.383-3.364.246-.829.624-5.789.624-6.479 0-.688-.139-1.86-.902-2.203C21.439.734 20.434.412 17.798 2.273c-2.752 1.942-5.711 5.881-6.798 7.995z"></path></svg>',
                color: '#00a8e8',
                name: 'Bluesky'
            }
        };

        let hasEnabledPlatforms = false;

        Object.entries(platformsData).forEach(([platform, data]) => {
            if (data.enabled && data.url) {
                hasEnabledPlatforms = true;
                const socialLink = document.createElement('a');
                socialLink.href = data.url;
                socialLink.target = '_blank';
                socialLink.className = 'social-link';
                socialLink.dataset.platform = platform;
                socialLink.style.textDecoration = 'none';
                socialLink.style.lineHeight = '1';
                socialLink.style.display = 'inline-block';
                socialLink.style.transition = 'all 0.2s ease';
                socialLink.style.color = platformIcons[platform]?.color || '#666';
                socialLink.title = platformIcons[platform]?.name || platform;

                // Add hover effect
                socialLink.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.1)';
                });
                socialLink.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });

                socialLink.innerHTML = platformIcons[platform]?.icon || '🔗';
                socialContainer.appendChild(socialLink);
            }
        });

        // Add placeholder if no enabled platforms
        if (!hasEnabledPlatforms) {
            const placeholder = document.createElement('div');
            placeholder.className = 'social-placeholder';
            placeholder.style.textAlign = 'center';
            placeholder.style.color = '#6b7280';
            placeholder.style.padding = '20px';
            placeholder.style.border = '2px dashed #d1d5db';
            placeholder.style.borderRadius = '8px';
            placeholder.innerHTML = `
                <div style="font-size: 32px; margin-bottom: 8px;">📱</div>
                <div style="font-size: 14px;">Enable social platforms in properties</div>
            `;
            socialContainer.appendChild(placeholder);
        }

        // Apply current styling
        updateSocialIconSizes(block, block.dataset.size || 'medium');
        updateSocialIconStyles(block);

        // Apply current alignment
        const alignStyles = {
            'left': 'flex-start',
            'center': 'center',
            'right': 'flex-end'
        };
        const currentAlignment = block.dataset.alignment || 'center';
        if (socialContainer) {
            socialContainer.style.justifyContent = alignStyles[currentAlignment] || 'center';
        }
    }

    function updateSocialIconSizes(block, size) {
        if (!block) {
            console.warn('updateSocialIconSizes: block is null or undefined');
            return;
        }

        const socialLinks = block.querySelectorAll('.social-link');
        const sizes = {
            small: '24px',
            medium: '32px',
            large: '48px'
        };

        if (socialLinks.length === 0) {
            console.log('updateSocialIconSizes: No social links found yet, will apply on next icon update');
            return;
        }

        socialLinks.forEach(link => {
            if (link && link.style) {
                link.style.fontSize = sizes[size] || sizes.medium;
            }
        });
    }

    function updateSocialIconStyles(block) {
        const socialLinks = block.querySelectorAll('.social-link');
        const grayscale = block.dataset.grayscale === 'true';

        socialLinks.forEach(link => {
            if (grayscale) {
                link.style.filter = 'grayscale(100%)';
                link.style.opacity = '0.7';
            } else {
                link.style.filter = 'none';
                link.style.opacity = '1';
            }
        });
    }

    // Helper functions for video block
    function updateVideoDisplay(block, url) {
        const videoContainer = block.querySelector('.video-container');
        if (!videoContainer) return;

        const embedUrl = convertToEmbedUrl(url);
        if (embedUrl) {
            // Create video iframe
            const iframe = document.createElement('iframe');
            iframe.src = embedUrl;
            iframe.style.width = '100%';
            iframe.style.height = '100%';
            iframe.style.position = 'absolute';
            iframe.style.top = '0';
            iframe.style.left = '0';
            iframe.style.border = 'none';
            iframe.style.borderRadius = '8px';
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allowfullscreen', 'true');

            // Clear container and add iframe
            videoContainer.innerHTML = '';
            videoContainer.appendChild(iframe);

            // Update container styling for video display
            videoContainer.style.backgroundColor = 'transparent';
            videoContainer.style.border = 'none';
            videoContainer.style.cursor = 'default';
        } else {
            // Invalid URL, show error placeholder
            showVideoErrorPlaceholder(block, url);
        }
    }

    function showVideoPlaceholder(block) {
        const videoContainer = block.querySelector('.video-container');
        if (!videoContainer) return;

        videoContainer.innerHTML = `
            <div class="video-placeholder">
                <div style="font-size: 48px; margin-bottom: 10px;">🎥</div>
                <div style="font-size: 16px; color: #6b7280; font-weight: 500;">Click to add video</div>
                <div style="font-size: 14px; color: #9ca3af; margin-top: 5px;">YouTube, Vimeo, or direct video URL</div>
            </div>
        `;

        // Restore placeholder styling
        videoContainer.style.backgroundColor = '#f3f4f6';
        videoContainer.style.border = '2px dashed #d1d5db';
        videoContainer.style.cursor = 'pointer';
    }

    function showVideoErrorPlaceholder(block, invalidUrl) {
        const videoContainer = block.querySelector('.video-container');
        if (!videoContainer) return;

        videoContainer.innerHTML = `
            <div class="video-placeholder">
                <div style="font-size: 48px; margin-bottom: 10px; color: #ef4444;">⚠️</div>
                <div style="font-size: 16px; color: #dc2626; font-weight: 500;">Invalid video URL</div>
                <div style="font-size: 14px; color: #9ca3af; margin-top: 5px;">${invalidUrl}</div>
                <div style="font-size: 12px; color: #9ca3af; margin-top: 10px;">Supported: YouTube, Vimeo, direct video links</div>
            </div>
        `;

        // Error styling
        videoContainer.style.backgroundColor = '#fef2f2';
        videoContainer.style.border = '2px dashed #fecaca';
        videoContainer.style.cursor = 'pointer';
    }

    function convertToEmbedUrl(url) {
        if (!url) return null;

        // YouTube patterns
        const youtubeRegex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i;
        const youtubeMatch = url.match(youtubeRegex);
        if (youtubeMatch) {
            return `https://www.youtube.com/embed/${youtubeMatch[1]}`;
        }

        // Vimeo patterns
        const vimeoRegex = /(?:vimeo\.com\/)(?:.*\/)?(\d+)/i;
        const vimeoMatch = url.match(vimeoRegex);
        if (vimeoMatch) {
            return `https://player.vimeo.com/video/${vimeoMatch[1]}`;
        }

        // Direct video links (mp4, webm, ogg)
        if (/\.(mp4|webm|ogg)(\?.*)?$/i.test(url)) {
            return url; // Return as-is for direct video links
        }

        // If already an embed URL, return as-is
        if (url.includes('youtube.com/embed/') || url.includes('player.vimeo.com/video/')) {
            return url;
        }

        return null; // Invalid URL
    }

    function updateVideoEmbedParameters(block) {
        const iframe = block.querySelector('iframe');
        if (!iframe) return;

        const currentSrc = iframe.src;
        const autoplay = block.dataset.autoplay === 'true';
        const loop = block.dataset.loop === 'true';
        const controls = block.dataset.controls === 'true';

        let newSrc = currentSrc;

        // YouTube parameter updates
        if (currentSrc.includes('youtube.com/embed/')) {
            newSrc = updateYouTubeParameters(currentSrc, autoplay, loop, controls);
        }
        // Vimeo parameter updates
        else if (currentSrc.includes('player.vimeo.com/video/')) {
            newSrc = updateVimeoParameters(currentSrc, autoplay, loop, controls);
        }

        if (newSrc !== currentSrc) {
            iframe.src = newSrc;
        }
    }

    function updateYouTubeParameters(url, autoplay, loop, controls) {
        const urlObj = new URL(url);
        const params = urlObj.searchParams;

        // Set autoplay
        if (autoplay) params.set('autoplay', '1');
        else params.delete('autoplay');

        // Set loop (requires playlist parameter for YouTube)
        if (loop) {
            params.set('loop', '1');
            const videoId = url.match(/\/embed\/([^?]+)/)?.[1];
            if (videoId) params.set('playlist', videoId);
        } else {
            params.delete('loop');
            params.delete('playlist');
        }

        // Set controls
        if (!controls) params.set('controls', '0');
        else params.delete('controls');

        return urlObj.toString();
    }

    function updateVimeoParameters(url, autoplay, loop, controls) {
        const urlObj = new URL(url);
        const params = urlObj.searchParams;

        // Set autoplay
        if (autoplay) params.set('autoplay', '1');
        else params.delete('autoplay');

        // Set loop
        if (loop) params.set('loop', '1');
        else params.delete('loop');

        // Set controls (Vimeo uses 'controls' parameter)
        if (!controls) params.set('controls', '0');
        else params.delete('controls');

        return urlObj.toString();
    }

    function addColumnsPropertyListeners(block) {
        const columnsContainer = block.querySelector('.columns-container');

        // Get column property controls
        const typeDisplay = document.getElementById('columns-type-display-' + statePath);
        const gapSelect = document.getElementById('columns-gap-' + statePath);
        const deleteBtn = document.getElementById('delete-columns-block-' + statePath);
        const valignmentBtns = columnsPropertiesPanel?.querySelectorAll('.alignment-btn');

        // Update type display based on column type
        if (typeDisplay) {
            const columnType = block.dataset.columnType;
            let displayText = '';

            if (columnType === '2') {
                displayText = '2 Columns (50% / 50%)';
            } else if (columnType === '3') {
                displayText = '3 Columns (33% / 33% / 33%)';
            } else if (columnType === '1-2') {
                displayText = '2 Columns (33% / 67%)';
            } else if (columnType === '2-1') {
                displayText = '2 Columns (67% / 33%)';
            }

            typeDisplay.textContent = displayText;
        }

        // Load current gap value
        if (gapSelect && columnsContainer) {
            const currentGap = columnsContainer.style.gap || '10px';
            gapSelect.value = parseInt(currentGap) || 10;
        }

        // Set vertical alignment button states
        if (valignmentBtns) {
            valignmentBtns.forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.valign === 'center') { // Default center alignment
                    btn.classList.add('active');
                }
            });
        }

        // Gap control
        if (gapSelect) {
            gapSelect.addEventListener('change', function() {
                const gap = this.value + 'px';
                if (columnsContainer) {
                    columnsContainer.style.gap = gap;
                }
                console.log('Column gap updated to:', gap);
            });
        }

        // Vertical alignment
        if (valignmentBtns) {
            valignmentBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const newValign = this.dataset.valign;

                    // Remove active from all buttons
                    valignmentBtns.forEach(b => b.classList.remove('active'));
                    // Add active to clicked button
                    this.classList.add('active');

                    // Apply vertical alignment to columns container
                    if (columnsContainer) {
                        columnsContainer.style.alignItems = newValign;
                    }

                    console.log('Column vertical alignment updated to:', newValign);
                });
            });
        }

        // Delete block
        if (deleteBtn) {
            deleteBtn.onclick = function() {
                console.log('Deleting columns block:', block.dataset.blockId);
                block.remove();
                selectedBlock = null;

                // Reposition all remaining blocks and update canvas height
                repositionAllBlocks();

                // Show no selection panel
                if (columnsPropertiesPanel) columnsPropertiesPanel.style.display = 'none';
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

    // ===== EMAIL PREVIEW FUNCTIONALITY =====

    const previewBtn = document.getElementById('preview-btn-' + statePath);
    const previewModal = document.getElementById('email-preview-modal-' + statePath);
    const previewContent = document.getElementById('email-preview-content-' + statePath);
    const previewCloseBtn = document.getElementById('preview-close-btn-' + statePath);
    const previewThemeToggle = document.getElementById('preview-theme-toggle-' + statePath);

    // Debug element finding
    console.log('Preview elements:', {
        previewBtn: previewBtn,
        previewModal: previewModal,
        previewContent: previewContent,
        statePath: statePath
    });

    let isPreviewDarkMode = false;

    // Show preview modal
    if (previewBtn) {
        previewBtn.addEventListener('click', function() {
            console.log('Preview button clicked');
            generateEmailPreview();
            if (previewModal) {
                previewModal.style.display = 'block';
                document.body.style.overflow = 'hidden'; // Prevent body scrolling

                // Ensure proper positioning and stacking
                previewModal.style.zIndex = '9999'; // High z-index
                previewModal.style.position = 'fixed'; // Ensure fixed positioning

                // Move modal to body to escape container constraints
                if (!previewModal.hasAttribute('data-moved-to-body')) {
                    document.body.appendChild(previewModal);
                    previewModal.setAttribute('data-moved-to-body', 'true');
                }

                console.log('Preview modal opened');
            } else {
                console.error('Preview modal not found!');
            }
        });
    } else {
        console.error('Preview button not found!');
    }

    // Close preview modal
    function closePreviewModal() {
        if (previewModal) {
            previewModal.style.display = 'none';
            document.body.style.overflow = ''; // Restore body scrolling
            console.log('Preview modal closed');
        }
    }

    if (previewCloseBtn) {
        previewCloseBtn.addEventListener('click', closePreviewModal);
    }

    // Close on overlay click
    if (previewModal) {
        previewModal.addEventListener('click', function(e) {
            if (e.target === this || e.target.classList.contains('email-preview-overlay')) {
                closePreviewModal();
            }
        });
    }

    // Theme toggle for preview
    if (previewThemeToggle && previewContent) {
        previewThemeToggle.addEventListener('click', function() {
            isPreviewDarkMode = !isPreviewDarkMode;

            if (isPreviewDarkMode) {
                previewContent.classList.add('dark-mode');
                const iconEl = this.querySelector('.preview-theme-icon');
                const textEl = this.querySelector('.preview-theme-text');
                if (iconEl) iconEl.textContent = '🌙';
                if (textEl) textEl.textContent = 'Dark Mode';
            } else {
                previewContent.classList.remove('dark-mode');
                const iconEl = this.querySelector('.preview-theme-icon');
                const textEl = this.querySelector('.preview-theme-text');
                if (iconEl) iconEl.textContent = '☀️';
                if (textEl) textEl.textContent = 'Light Mode';
            }
        });
    }

    // Generate email preview HTML
    function generateEmailPreview() {
        const blocks = Array.from(canvas.querySelectorAll('.email-block'));
        console.log('Generating preview for', blocks.length, 'blocks');

        let previewHtml = '<div class="preview-email">';
        let processedBlocks = new Set(); // Track blocks we've already processed

        blocks.forEach(block => {
            // Skip if already processed as part of a column layout
            if (processedBlocks.has(block)) {
                console.log('Skipping already processed block');
                return;
            }
            const blockType = block.dataset.blockType;
            console.log('Processing block:', {
                blockType: blockType,
                classList: block.className,
                innerHTML: block.innerHTML.substring(0, 200) + '...',
                allDatasets: block.dataset
            });

            // Skip spatial layout detection for column blocks - they handle their own content
            const isColumnBlock = blockType === 'columns' || blockType === 'column' || blockType === 'two-column';

            if (!isColumnBlock) {
                // Check if this block is part of a column layout
                // First try to find a direct parent container
                let parentLayout = block.closest('.layout-block, .columns-container, .row, .email-block');
                let isPartOfLayout = false;
                let layoutBlocks = [];

                if (parentLayout && parentLayout !== block) {
                    const hasColumns = parentLayout.querySelector('.layout-column, .column, [data-column]') ||
                                     parentLayout.innerHTML.includes('Column');
                    if (hasColumns) {
                        isPartOfLayout = true;
                        layoutBlocks = Array.from(parentLayout.querySelectorAll('.email-block'));
                    }
                }

                // Alternative approach: check if there are multiple blocks that might be part of a layout
                if (!isPartOfLayout) {
                    const allBlocks = Array.from(canvas.querySelectorAll('.email-block'));

                    // Look for blocks at similar vertical positions (indicating they're in the same row)
                    const blockRect = block.getBoundingClientRect();
                    const tolerance = 50; // pixels tolerance for "same row"

                    const sameRowBlocks = allBlocks.filter(b => {
                        if (processedBlocks.has(b) || b === block) return false;

                        const bRect = b.getBoundingClientRect();
                        const verticalDiff = Math.abs(blockRect.top - bRect.top);
                        return verticalDiff <= tolerance;
                    });

                    // If we found blocks in the same row, treat as column layout
                    if (sameRowBlocks.length >= 1) {
                        console.log('Found blocks in same row, treating as layout (processing as group)');
                        isPartOfLayout = true;

                        // Include the current block and sort by horizontal position
                        layoutBlocks = [block, ...sameRowBlocks].sort((a, b) => {
                            const aRect = a.getBoundingClientRect();
                            const bRect = b.getBoundingClientRect();
                            return aRect.left - bRect.left;
                        });

                        parentLayout = block.parentElement;
                    }
                }

                if (isPartOfLayout && layoutBlocks.length > 1) {
                    console.log('Block is part of a layout, processing layout as a whole', {
                        parentLayout: parentLayout,
                        layoutBlocks: layoutBlocks.length
                    });

                    // Mark all layout blocks as processed
                    layoutBlocks.forEach(layoutBlock => processedBlocks.add(layoutBlock));

                    // Generate preview for the entire layout
                    previewHtml += generateLayoutPreview(parentLayout, layoutBlocks);
                    return; // Skip individual processing for this block
                }
            }

            switch (blockType) {
                case 'text':
                    previewHtml += generateTextPreview(block);
                    break;
                case 'image':
                    console.log('Found image block, generating preview...');
                    previewHtml += generateImagePreview(block);
                    break;
                case 'button':
                    previewHtml += generateButtonPreview(block);
                    break;
                case 'divider':
                    previewHtml += generateDividerPreview(block);
                    break;
                case 'video':
                    previewHtml += generateVideoPreview(block);
                    break;
                case 'social':
                    previewHtml += generateSocialPreview(block);
                    break;
                case 'columns':
                case 'column':
                case 'two-column':
                    console.log('=== FOUND COLUMN BLOCK ===');
                    console.log('Block ID:', block.dataset.blockId);
                    console.log('Column Type:', block.dataset.columnType);
                    console.log('Generating layout preview...');
                    previewHtml += generateColumnPreview(block);
                    console.log('=== COLUMN BLOCK PROCESSED ===');
                    break;
                default:
                    console.log('Unknown block type:', blockType);
                    // Generic fallback for any unrecognized content
                    previewHtml += `<div class="preview-block preview-generic-block" style="padding: 15px; border: 1px solid #e5e7eb; border-radius: 6px; background: #f9fafb; margin: 10px 0;">
                                        <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">📄 Content Block</div>
                                        <div>${block.innerHTML}</div>
                                    </div>`;
            }
        });

        previewHtml += '</div>';

        if (previewContent) {
            previewContent.innerHTML = previewHtml;

            // Apply current theme
            if (isPreviewDarkMode) {
                previewContent.classList.add('dark-mode');
            } else {
                previewContent.classList.remove('dark-mode');
            }
        } else {
            console.error('Preview content element not found!');
        }
    }

    function generateTextPreview(block) {
        const textContent = block.querySelector('.text-block-content');

        if (textContent) {
            // Get the visual text content (what's actually displayed), not raw HTML with variables
            let content = '';

            // Try to get the rendered text content first
            const renderedText = textContent.textContent || textContent.innerText;

            // If there's actual content (not just template variables), use innerHTML for formatting
            if (renderedText &&
                !renderedText.includes(TEMPLATE_SYNTAX) &&
                renderedText.indexOf(PLACEHOLDER_TEXT) === -1 &&
                renderedText.trim().length > 0) {
                content = textContent.innerHTML;
            } else {
                // For template variables or empty content, show a cleaner preview
                if (renderedText && renderedText.includes(TEMPLATE_SYNTAX)) {
                    // Clean up template variables for preview
                    content = renderedText
                        .replace(/\{\{client\.name\}\}/g, 'John Doe')
                        .replace(/\{\{contact\.name\}\}/g, 'Jane Smith')
                        .replace(/\{\{quote\.series\}\}/g, 'Q-2025-001')
                        .replace(/\{\{.*?\}\}/g, '[Dynamic Content]');

                    // Apply basic HTML structure if it was in the original
                    if (textContent.innerHTML.includes('<p>')) {
                        content = '<p>' + content + '</p>';
                    } else if (textContent.innerHTML.includes('<h')) {
                        // Preserve heading structure
                        content = textContent.innerHTML.replace(/\{\{.*?\}\}/g, '[Dynamic Content]');
                    }
                } else if (renderedText.indexOf(PLACEHOLDER_TEXT) !== -1) {
                    content = '<p style="color: #9ca3af; font-style: italic;">' + PLACEHOLDER_TEXT_FULL + '</p>';
                } else {
                    content = '<p>Sample text content</p>';
                }
            }

            return '<div class="preview-block preview-text-block">' + content + '</div>';
        }

        return '<div class="preview-block preview-text-block"><p>Sample text content</p></div>';
    }

    function generateImagePreview(block) {
        const img = block.querySelector('img');
        const alignment = block.dataset.align || block.dataset.alignment || 'center';
        let alignStyle = 'text-align: center;';
        if (alignment === 'left') alignStyle = 'text-align: left;';
        if (alignment === 'right') alignStyle = 'text-align: right;';

        // Get the image width from multiple sources (prioritized)
        let imageWidth = '100%';

        if (block.dataset.width) {
            imageWidth = block.dataset.width;
        } else if (img && img.style.width) {
            imageWidth = img.style.width;
        } else if (img && img.style.maxWidth && img.style.maxWidth !== 'none') {
            imageWidth = img.style.maxWidth;
        } else if (img && img.width) {
            imageWidth = img.width + 'px';
        }

        console.log('🖼️ Image preview width determination:');
        console.log('  block.dataset.width:', block.dataset.width);
        console.log('  img.style.width:', img?.style.width);
        console.log('  img.style.maxWidth:', img?.style.maxWidth);
        console.log('  img.width:', img?.width);
        console.log('  Final width:', imageWidth);

        if (img && img.src && !img.src.includes('placeholder')) {
            // Use actual width constraint instead of max-width
            let imgStyles = `width: ${imageWidth}; height: auto;`;

            // For very large images, add a sensible max-width to prevent breaking layout
            if (imageWidth === '100%' || (imageWidth.includes('px') && parseInt(imageWidth) > 600)) {
                imgStyles += ' max-width: 600px;';
            }

            return `<div class="preview-block preview-image-block" style="${alignStyle}">
                        <img src="${img.src}" alt="${img.alt || ''}" style="${imgStyles}" />
                    </div>`;
        } else {
            return `<div class="preview-block preview-image-block" style="${alignStyle}">
                        <div style="background: #f3f4f6; border: 2px dashed #d1d5db; border-radius: 8px; padding: 40px; color: #6b7280; width: ${imageWidth}; margin: 0 auto;">
                            🖼️ Image Placeholder
                        </div>
                    </div>`;
        }
    }

    function generateButtonPreview(block) {
        const button = block.querySelector('a');
        const text = button ? button.textContent : 'Click Here';
        const url = button ? button.href : '#';
        const style = block.dataset.style || 'primary';
        const align = block.dataset.align || 'center';

        let buttonStyles = 'padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: 500; display: inline-block;';

        // Apply button styles based on type
        if (style === 'primary') {
            buttonStyles += ' background: #3b82f6; color: white; border: 2px solid #3b82f6;';
        } else if (style === 'secondary') {
            buttonStyles += ' background: transparent; color: #3b82f6; border: 2px solid #3b82f6;';
        } else {
            buttonStyles += ' background: #6b7280; color: white; border: 2px solid #6b7280;';
        }

        let alignStyle = 'text-align: center;';
        if (align === 'left') alignStyle = 'text-align: left;';
        if (align === 'right') alignStyle = 'text-align: right;';

        return `<div class="preview-block preview-button-block" style="${alignStyle}">
                    <a href="${url}" class="preview-button" style="${buttonStyles}">${text}</a>
                </div>`;
    }

    function generateDividerPreview(block) {
        const thickness = block.dataset.thickness || '2';
        const width = block.dataset.width || '100';
        const color = block.dataset.color || '#e5e7eb';

        return `<div class="preview-block preview-divider-block">
                    <hr class="preview-divider" style="height: ${thickness}px; background: ${color}; width: ${width}%; border: 0; border-radius: ${thickness}px;" />
                </div>`;
    }

    function generateVideoPreview(block) {
        const url = block.dataset.url || '';

        if (url) {
            // For preview, show a placeholder since embedded videos might not work
            return `<div class="preview-block preview-video-block">
                        <div class="preview-video-placeholder" style="aspect-ratio: 16/9; max-width: 500px;">
                            🎥 Video Content<br>
                            <small style="color: #9ca3af;">${url}</small>
                        </div>
                    </div>`;
        } else {
            return `<div class="preview-block preview-video-block">
                        <div class="preview-video-placeholder" style="aspect-ratio: 16/9; max-width: 500px;">
                            🎥 Video Placeholder<br>
                            <small style="color: #9ca3af;">No video URL set</small>
                        </div>
                    </div>`;
        }
    }

    function generateSocialPreview(block) {
        const platformsData = JSON.parse(block.dataset.platforms || '{}');
        const size = block.dataset.size || 'medium';
        const alignment = block.dataset.alignment || 'center';
        const grayscale = block.dataset.grayscale === 'true';

        let alignStyle = 'justify-content: center;';
        if (alignment === 'left') alignStyle = 'justify-content: flex-start;';
        if (alignment === 'right') alignStyle = 'justify-content: flex-end;';

        const sizes = { small: '24px', medium: '32px', large: '48px' };
        const iconSize = sizes[size] || sizes.medium;

        let socialLinksHtml = '';
        Object.entries(platformsData).forEach(([platform, data]) => {
            if (data.enabled && data.url) {
                const platformIcons = {
                    facebook: { icon: '📘', color: '#1877f2' },
                    x: { icon: '✖️', color: '#000000' },
                    linkedin: { icon: '💼', color: '#0a66c2' },
                    youtube: { icon: '📺', color: '#ff0000' },
                    instagram: { icon: '📸', color: '#e4405f' },
                    tiktok: { icon: '🎵', color: '#000000' },
                    whatsapp: { icon: '💬', color: '#25d366' },
                    threads: { icon: '🧵', color: '#000000' },
                    bluesky: { icon: '☁️', color: '#00a8e8' }
                };

                const icon = platformIcons[platform]?.icon || '🔗';
                const color = grayscale ? '#6b7280' : (platformIcons[platform]?.color || '#666');

                socialLinksHtml += `<a href="${data.url}" class="preview-social-link" style="color: ${color}; font-size: ${iconSize};">${icon}</a>`;
            }
        });

        if (!socialLinksHtml) {
            socialLinksHtml = '<div style="color: #6b7280; font-style: italic;">No social platforms enabled</div>';
        }

        return `<div class="preview-block preview-social-block">
                    <div class="preview-social-links" style="${alignStyle}">
                        ${socialLinksHtml}
                    </div>
                </div>`;
    }

    function generateColumnPreview(block) {
        console.log('=== PROCESSING COLUMN LAYOUT BLOCK ===');
        console.log('Block:', block);
        console.log('Block HTML preview:', block.innerHTML.substring(0, 500));

        // Get column type from data attribute
        const columnType = block.dataset.columnType || '2';
        console.log('Column type detected:', columnType);

        // Look for ALL types of blocks within the column block
        let contentBlocks = Array.from(block.querySelectorAll('.email-block[data-block-type], [data-block-type]'));

        if (contentBlocks.length === 0) {
            contentBlocks = Array.from(block.querySelectorAll('.email-block'));
        }

        console.log('Content blocks found:', contentBlocks.length);
        contentBlocks.forEach((cb, i) => {
            const blockType = cb.dataset.blockType || 'unknown';
            const content = cb.textContent.trim().substring(0, 50) + '...';
            console.log(`  Block ${i+1} (${blockType}):`, content);
        });

        if (contentBlocks.length > 0) {
            console.log('Using content blocks for column generation');
            // Sort blocks by position (left to right)
            contentBlocks.sort((a, b) => {
                const aRect = a.getBoundingClientRect();
                const bRect = b.getBoundingClientRect();
                return aRect.left - bRect.left;
            });

            const result = generateColumnsFromMixedBlocks(contentBlocks, columnType);
            console.log('Generated column HTML from mixed content blocks');
            return result;
        }

        // Fallback: look for any elements with text content that might be columns
        const allElements = Array.from(block.querySelectorAll('*'));
        let columnsWithContent = allElements.filter(el => {
            const text = el.textContent.trim();
            return text === '' + PLACEHOLDER_TEXT_FULL + '' || // Exact match for placeholder text
                   (text &&
                    text !== block.textContent.trim() && // Not the parent container
                    text.length > 0 &&
                    text.length < 200 && // Not too long (likely a container)
                    (text.indexOf(PLACEHOLDER_TEXT) !== -1 || text.indexOf('Column') !== -1 || !el.querySelector('*'))); // Specific content or leaf element
        });

        // If we still haven't found any, be more aggressive
        if (columnsWithContent.length === 0) {
            columnsWithContent = allElements.filter(el => {
                const text = el.textContent.trim();
                return text && text.length > 0 && text.length < 100;
            }).slice(0, parseInt(columnType) || 2); // Take first N elements
        }

        if (columnsWithContent.length > 0) {
            console.log('Found', columnsWithContent.length, 'elements with content');
            columnsWithContent.forEach((el, i) => {
                console.log(`  Element ${i+1}:`, el.textContent.trim());
            });
            // Take first N elements based on column type
            const numColumns = parseInt(columnType) || 2;
            const selectedColumns = columnsWithContent.slice(0, numColumns);
            console.log('Using fallback elements for column generation');
            return generateColumnsFromElements(selectedColumns);
        }

        // Ultimate fallback - create placeholder columns based on column type
        console.log('Using ultimate fallback - creating placeholder columns');
        const numColumns = parseInt(columnType) || 2;
        return generatePlaceholderColumns(numColumns);
    }

    function generateColumnsHTML(columns) {
        let columnsHTML = '<div class="preview-block preview-columns-block"><div class="preview-columns-container">';

        columns.forEach((column, index) => {
            console.log(`Processing column ${index + 1}:`, column);

            let columnContent = '';
            const blockType = column.dataset.blockType;

            if (blockType === 'text') {
                // For text blocks, get the HTML content
                const textBlockContent = column.querySelector('.text-block-content');
                if (textBlockContent) {
                    columnContent = textBlockContent.innerHTML || textBlockContent.textContent || '';
                } else {
                    columnContent = column.textContent.trim();
                }
            } else {
                // For other blocks, get text content
                columnContent = column.textContent.trim();
            }

            // Clean up the content
            columnContent = columnContent
                .replace(/Drop content here/g, '')
                .trim();

            // If empty after cleaning, use default
            if (!columnContent || columnContent === '') {
                columnContent = `Column ${index + 1}`;
            }

            // Handle special cases
            if (columnContent === '' + PLACEHOLDER_TEXT_FULL + '') {
                columnContent = '<span style="color: #9ca3af; font-style: italic;">' + PLACEHOLDER_TEXT_FULL + '</span>';
            }

            columnsHTML += `<div class="preview-column" style="flex: 1; padding: 15px; margin: 0 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; min-height: 80px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #374151; text-align: center;">
                                ${columnContent}
                            </div>`;
        });

        columnsHTML += '</div></div>';
        return columnsHTML;
    }

    function generateColumnsFromTextBlocks(textBlocks, expectedColumnType) {
        console.log('=== GENERATING COLUMNS FROM TEXT BLOCKS ===');
        console.log('Number of text blocks to process:', textBlocks.length);
        console.log('Expected column type:', expectedColumnType);
        console.log('Expected number of columns:', parseInt(expectedColumnType) || 2);

        const expectedColumns = parseInt(expectedColumnType) || 2;

        let columnsHTML = '<div class="preview-block preview-columns-block"><div class="preview-columns-container">';

        textBlocks.forEach((textBlock, index) => {
            console.log(`Processing text block ${index + 1} of ${textBlocks.length}:`, textBlock);

            let columnContent = '';
            const textBlockContent = textBlock.querySelector('.text-block-content');

            if (textBlockContent) {
                columnContent = textBlockContent.innerHTML || textBlockContent.textContent || '';
            } else {
                columnContent = textBlock.textContent.trim();
            }

            // Clean up content
            columnContent = columnContent.replace(/Drop content here/g, '').trim();

            if (!columnContent) {
                columnContent = `Column ${index + 1}`;
            }

            // Handle placeholder text styling
            if (columnContent === '' + PLACEHOLDER_TEXT_FULL + '') {
                columnContent = '<span style="color: #9ca3af; font-style: italic;">' + PLACEHOLDER_TEXT_FULL + '</span>';
            }

            console.log(`Generated column ${index + 1} with content:`, columnContent);

            columnsHTML += `<div class="preview-column" style="flex: 1; padding: 15px; margin: 0 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; min-height: 80px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #374151; text-align: center;">
                                ${columnContent}
                            </div>`;
        });

        console.log(`Generated ${textBlocks.length} columns (expected: ${expectedColumns})`);

        // Validation check
        if (textBlocks.length !== expectedColumns) {
            console.warn(`⚠️ Column count mismatch! Generated ${textBlocks.length} columns but expected ${expectedColumns}`);
        }

        columnsHTML += '</div></div>';
        console.log('=== COLUMN GENERATION COMPLETE ===');
        return columnsHTML;
    }

    function generateColumnsFromElements(elements) {
        let columnsHTML = '<div class="preview-block preview-columns-block"><div class="preview-columns-container">';

        elements.forEach((element, index) => {
            console.log(`Processing element ${index + 1}:`, element);

            let columnContent = element.textContent.trim();

            // Clean up content
            columnContent = columnContent.replace(/Drop content here/g, '').trim();

            if (!columnContent) {
                columnContent = `Column ${index + 1}`;
            }

            // Handle placeholder text styling
            if (columnContent === '' + PLACEHOLDER_TEXT_FULL + '') {
                columnContent = '<span style="color: #9ca3af; font-style: italic;">' + PLACEHOLDER_TEXT_FULL + '</span>';
            }

            columnsHTML += `<div class="preview-column" style="flex: 1; padding: 15px; margin: 0 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; min-height: 80px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #374151; text-align: center;">
                                ${columnContent}
                            </div>`;
        });

        columnsHTML += '</div></div>';
        return columnsHTML;
    }

    function generatePlaceholderColumns(numColumns) {
        let columnsHTML = '<div class="preview-block preview-columns-block"><div class="preview-columns-container">';

        for (let i = 0; i < numColumns; i++) {
            const columnContent = `<span style="color: #9ca3af; font-style: italic;">Column ${i + 1}</span>`;

            columnsHTML += `<div class="preview-column" style="flex: 1; padding: 15px; margin: 0 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; min-height: 80px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #374151; text-align: center;">
                                ${columnContent}
                            </div>`;
        }

        columnsHTML += '</div></div>';
        return columnsHTML;
    }

    function generateColumnsFromMixedBlocks(contentBlocks, expectedColumnType) {
        console.log('=== GENERATING COLUMNS FROM MIXED BLOCKS ===');
        console.log('Number of content blocks to process:', contentBlocks.length);
        console.log('Expected column type:', expectedColumnType);

        const expectedColumns = parseInt(expectedColumnType) || 2;

        // Group blocks by column (spatial position)
        const columns = [];
        for (let i = 0; i < expectedColumns; i++) {
            columns.push([]);
        }

        // Distribute blocks into columns based on their horizontal position
        contentBlocks.forEach((block, index) => {
            const columnIndex = Math.floor(index / Math.ceil(contentBlocks.length / expectedColumns));
            const finalColumnIndex = Math.min(columnIndex, expectedColumns - 1);
            columns[finalColumnIndex].push(block);
        });

        console.log('Blocks distributed into columns:', columns.map(col => col.length));

        let columnsHTML = '<div class="preview-block preview-columns-block"><div class="preview-columns-container">';

        columns.forEach((columnBlocks, colIndex) => {
            console.log(`Processing column ${colIndex + 1} with ${columnBlocks.length} blocks`);

            let columnContent = '';

            columnBlocks.forEach(block => {
                const blockType = block.dataset.blockType || 'unknown';
                console.log(`  Processing ${blockType} block:`, block.textContent.trim().substring(0, 30));

                switch (blockType) {
                    case 'text':
                        // Extract text content using improved logic
                        console.log('    🔍 Processing text block in column:');

                        const textContent = block.querySelector('.text-block-content');

                        if (textContent) {
                            let content = '';
                            const renderedText = textContent.textContent || textContent.innerText;

                            // If there's actual content (not just template variables), use innerHTML for formatting
                            if (renderedText &&
                                !renderedText.includes(TEMPLATE_SYNTAX) &&
                                renderedText.indexOf(PLACEHOLDER_TEXT) === -1 &&
                                renderedText.trim().length > 0) {
                                content = textContent.innerHTML;
                                console.log('      ✅ Using real content with formatting');
                            } else {
                                // For template variables or empty content, show a cleaner preview
                                if (renderedText && renderedText.includes(TEMPLATE_SYNTAX)) {
                                    // Clean up template variables for preview
                                    content = renderedText
                                        .replace(/\{\{client\.name\}\}/g, 'John Doe')
                                        .replace(/\{\{contact\.name\}\}/g, 'Jane Smith')
                                        .replace(/\{\{quote\.series\}\}/g, 'Q-2025-001')
                                        .replace(/\{\{.*?\}\}/g, '[Dynamic Content]');

                                    // Apply basic HTML structure if it was in the original
                                    if (textContent.innerHTML.includes('<p>')) {
                                        content = '<p>' + content + '</p>';
                                    } else if (textContent.innerHTML.includes('<h')) {
                                        content = textContent.innerHTML.replace(/\{\{.*?\}\}/g, '[Dynamic Content]');
                                    }
                                    console.log('      ✅ Converted template variables to preview text');
                                } else if (renderedText.indexOf(PLACEHOLDER_TEXT) !== -1) {
                                    content = '<span style="color: #9ca3af; font-style: italic;">' + PLACEHOLDER_TEXT_FULL + '</span>';
                                    console.log('      ✅ Using placeholder text');
                                } else {
                                    content = 'Sample text content';
                                    console.log('      ✅ Using fallback sample text');
                                }
                            }

                            if (content) {
                                columnContent += `<div style="margin-bottom: 10px;">${content}</div>`;
                            }
                        } else {
                            // Fallback: try to get text from the block directly
                            const blockText = block.textContent.trim();
                            if (blockText && blockText !== 'Drop content here') {
                                let cleanText = blockText;
                                if (blockText.includes(TEMPLATE_SYNTAX)) {
                                    cleanText = blockText
                                        .replace(/\{\{client\.name\}\}/g, 'John Doe')
                                        .replace(/\{\{contact\.name\}\}/g, 'Jane Smith')
                                        .replace(/\{\{quote\.series\}\}/g, 'Q-2025-001')
                                        .replace(/\{\{.*?\}\}/g, '[Dynamic Content]');
                                }
                                columnContent += `<div style="margin-bottom: 10px;">${cleanText}</div>`;
                                console.log('      ✅ Added fallback content');
                            }
                        }
                        break;

                    case 'image':
                        // Extract image content with proper sizing
                        const img = block.querySelector('img');

                        // Get the image width from multiple sources (same logic as generateImagePreview)
                        let imageWidth = '100%';
                        if (block.dataset.width) {
                            imageWidth = block.dataset.width;
                        } else if (img && img.style.width) {
                            imageWidth = img.style.width;
                        } else if (img && img.style.maxWidth && img.style.maxWidth !== 'none') {
                            imageWidth = img.style.maxWidth;
                        } else if (img && img.width) {
                            imageWidth = img.width + 'px';
                        }

                        console.log(`      🖼️ Image in column - width: ${imageWidth}`);

                        if (img && img.src && !img.src.includes('placeholder')) {
                            // Use width constraint instead of max-width for columns
                            let imgStyles = `width: ${imageWidth}; height: auto; border-radius: 4px;`;

                            // For column images, keep them smaller by default
                            if (imageWidth === '100%') {
                                imgStyles = `max-width: 200px; height: auto; border-radius: 4px;`;
                            } else if (imageWidth.includes('px') && parseInt(imageWidth) > 200) {
                                imgStyles = `width: 200px; height: auto; border-radius: 4px;`;
                            }

                            columnContent += `<div style="margin-bottom: 10px; text-align: center;">
                                                <img src="${img.src}" alt="${img.alt || ''}" style="${imgStyles}" />
                                              </div>`;
                            console.log('      ✅ Added image with proper sizing');
                        } else {
                            columnContent += `<div style="margin-bottom: 10px; text-align: center; color: #9ca3af; font-style: italic;">🖼️ Image</div>`;
                            console.log('      ✅ Added image placeholder');
                        }
                        break;

                    case 'button':
                        // Extract button content
                        const button = block.querySelector('a, button');
                        if (button) {
                            const text = button.textContent || 'Button';
                            const style = block.dataset.style || 'primary';
                            let buttonStyles = 'padding: 8px 16px; text-decoration: none; border-radius: 4px; font-weight: 500; display: inline-block; text-align: center;';

                            if (style === 'primary') {
                                buttonStyles += ' background: #3b82f6; color: white; border: 2px solid #3b82f6;';
                            } else if (style === 'secondary') {
                                buttonStyles += ' background: transparent; color: #3b82f6; border: 2px solid #3b82f6;';
                            } else {
                                buttonStyles += ' background: #6b7280; color: white; border: 2px solid #6b7280;';
                            }

                            columnContent += `<div style="margin-bottom: 10px; text-align: center;">
                                                <span style="${buttonStyles}">${text}</span>
                                              </div>`;
                        }
                        break;

                    default:
                        // Fallback for unknown block types
                        const content = block.textContent.trim();
                        if (content) {
                            columnContent += `<div style="margin-bottom: 10px;">${content}</div>`;
                        }
                        break;
                }
            });

            // If column is empty, add placeholder
            if (!columnContent.trim()) {
                columnContent = `<span style="color: #9ca3af; font-style: italic;">Column ${colIndex + 1}</span>`;
            }

            console.log(`Generated content for column ${colIndex + 1}:`, columnContent.substring(0, 100));

            columnsHTML += `<div class="preview-column" style="flex: 1; padding: 15px; margin: 0 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; min-height: 80px; display: flex; flex-direction: column; justify-content: center; font-size: 14px; color: #374151;">
                                ${columnContent}
                            </div>`;
        });

        console.log(`Generated ${expectedColumns} columns from mixed content`);

        columnsHTML += '</div></div>';
        console.log('=== MIXED COLUMN GENERATION COMPLETE ===');
        return columnsHTML;
    }

    function generateLayoutPreview(parentLayout, layoutBlocks) {
        console.log('Generating layout preview for parent:', parentLayout);
        console.log('Layout blocks:', layoutBlocks);

        // Extract column content from the blocks
        let columnsHTML = '<div class="preview-block preview-columns-block"><div class="preview-columns-container">';

        layoutBlocks.forEach((block, index) => {
            console.log(`Processing layout block ${index + 1}:`, block);

            let columnContent = '';

            // Try to extract content based on block type
            const blockType = block.dataset.blockType;

            if (blockType === 'text') {
                // For text blocks, get the HTML content
                const textBlockContent = block.querySelector('.text-block-content');
                if (textBlockContent) {
                    columnContent = textBlockContent.innerHTML || textBlockContent.textContent || '';
                } else {
                    columnContent = block.textContent.trim();
                }
            } else {
                // For other blocks, get text content
                columnContent = block.textContent.trim();
            }

            // Clean up the content
            columnContent = columnContent
                .replace(/Drop content here/g, '')
                .replace(/' + PLACEHOLDER_TEXT_FULL + '/g, '' + PLACEHOLDER_TEXT_FULL + '')
                .trim();

            // If content is empty after cleaning, use placeholder
            if (!columnContent || columnContent === '') {
                columnContent = `Column ${index + 1}`;
            }

            // Handle special cases
            if (columnContent === '' + PLACEHOLDER_TEXT_FULL + '') {
                columnContent = '<span style="color: #9ca3af; font-style: italic;">' + PLACEHOLDER_TEXT_FULL + '</span>';
            }

            columnsHTML += `<div class="preview-column" style="flex: 1; padding: 15px; margin: 0 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; min-height: 80px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #374151; text-align: center;">
                                ${columnContent}
                            </div>`;
        });

        columnsHTML += '</div></div>';
        return columnsHTML;
    }

    // Close preview on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && previewModal && previewModal.style.display === 'block') {
            closePreviewModal();
        }
    });

    // ====== SAVE/LOAD LAYOUT FUNCTIONALITY ======

    function serializeLayout() {
        console.log('🔄 Serializing layout...');

        const blocks = Array.from(canvas.querySelectorAll('.email-block'));
        const layoutData = {
            version: '1.0',
            timestamp: new Date().toISOString(),
            blocks: [],
            background: {
                color: backgroundState.color || '#ffffff',
                image: backgroundState.imageBase64 || null,
                size: backgroundState.size || 'cover',
                repeat: backgroundState.repeat || 'no-repeat',
                position: backgroundState.position || 'center center',
                attachment: backgroundState.attachment || 'scroll'
            }
        };

        blocks.forEach((block, index) => {
            console.log(`Serializing block ${index + 1}:`, block);

            const blockData = {
                id: block.dataset.blockId || `block-${Date.now()}-${index}`,
                type: block.dataset.blockType || 'unknown',
                position: {
                    top: parseInt(block.style.top) || 0,
                    left: parseInt(block.style.left) || 0,
                    width: block.style.width || '100%',
                    height: block.style.height || 'auto'
                },
                style: {
                    position: block.style.position || 'absolute'
                }
            };

            // Block-specific data extraction
            switch (blockData.type) {
                case 'text':
                    const textContent = block.querySelector('.text-block-content');
                    blockData.content = {
                        html: textContent ? textContent.innerHTML : '',
                        text: textContent ? textContent.textContent : '',
                        fontFamily: block.dataset.fontFamily || 'Arial, Helvetica, sans-serif',
                        fontSize: block.dataset.fontSize || '16px',
                        color: block.dataset.color || '#000000',
                        lineHeight: block.dataset.lineHeight || '1.5',
                        letterSpacing: block.dataset.letterSpacing || '0px',
                        textAlign: block.dataset.textAlign || 'left'
                    };
                    break;

                case 'image':
                    const img = block.querySelector('img');
                    const imageLink = block.querySelector('a');
                    blockData.content = {
                        src: img ? img.src : '',
                        alt: img ? img.alt : '',
                        width: block.dataset.width || img?.style.width || '100%',
                        title: img ? img.title : '',
                        url: imageLink ? imageLink.href : '',
                        alignment: block.dataset.align || block.dataset.alignment || 'center'
                    };
                    break;

                case 'button':
                    const button = block.querySelector('a, button');
                    blockData.content = {
                        text: button ? button.textContent : 'Click here',
                        url: button ? (button.href === location.href + '#' ? '' : button.href) : '',
                        style: block.dataset.style || 'primary',
                        size: block.dataset.size || 'medium',
                        alignment: block.dataset.alignment || 'center'
                    };
                    break;

                case 'social':
                    blockData.content = {
                        platforms: JSON.parse(block.dataset.platforms || '{}'),
                        size: block.dataset.size || 'medium',
                        alignment: block.dataset.alignment || 'center',
                        grayscale: block.dataset.grayscale === 'true'
                    };
                    break;

                case 'divider':
                    blockData.content = {
                        color: block.dataset.color || '#d1d5db',
                        thickness: block.dataset.thickness || '2',
                        width: block.dataset.width || '100',
                        height: block.dataset.heightUnit || block.dataset.height + 'px' || '40px',
                        spacing: block.dataset.spacing || 'medium',
                        style: block.dataset.style || 'solid'
                    };
                    break;

                case 'columns':
                    const columnType = block.dataset.columnType || '2';
                    const columnsContainer = block.querySelector('.columns-container');
                    const columns = columnsContainer ? Array.from(columnsContainer.querySelectorAll('.email-column')) : [];

                    blockData.content = {
                        columnType: columnType,
                        columns: columns.map((column, colIndex) => {
                            const columnBlocks = Array.from(column.querySelectorAll('.email-block'));
                            return {
                                index: colIndex,
                                width: column.style.width || '50%',
                                blocks: columnBlocks.map(subBlock => ({
                                    type: subBlock.dataset.blockType || 'unknown',
                                    id: subBlock.dataset.blockId || `col-block-${colIndex}-${Date.now()}`,
                                    content: extractBlockContent(subBlock)
                                }))
                            };
                        })
                    };
                    break;

                case 'video':
                    const video = block.querySelector('video, iframe');
                    blockData.content = {
                        src: video ? video.src : '',
                        width: block.dataset.width || '100%',
                        height: block.dataset.height || '315px',
                        autoplay: block.dataset.autoplay === 'true',
                        controls: block.dataset.controls !== 'false',
                        alignment: block.dataset.alignment || 'center'
                    };
                    break;

                default:
                    // Generic content extraction
                    blockData.content = {
                        html: block.innerHTML,
                        text: block.textContent.trim(),
                        datasets: {...block.dataset}
                    };
            }

            // Store all dataset attributes
            blockData.datasets = {...block.dataset};

            layoutData.blocks.push(blockData);
        });

        console.log('✅ Layout serialized:', layoutData);
        return layoutData;
    }

    function extractBlockContent(block) {
        const blockType = block.dataset.blockType || 'unknown';

        switch (blockType) {
            case 'text':
                const textContent = block.querySelector('.text-block-content');
                return {
                    html: textContent ? textContent.innerHTML : '',
                    text: textContent ? textContent.textContent : ''
                };
            case 'image':
                const img = block.querySelector('img');
                return {
                    src: img ? img.src : '',
                    alt: img ? img.alt : ''
                };
            case 'button':
                const button = block.querySelector('a, button');
                return {
                    text: button ? button.textContent : 'Click here',
                    url: button ? button.href : ''
                };
            default:
                return {
                    html: block.innerHTML,
                    text: block.textContent.trim()
                };
        }
    }

    // Update the save function to use Alpine state
    const saveLayoutToHiddenInput = () => {
        const layoutData = serializeLayout();

        // Update Alpine state directly - this automatically syncs with Livewire
        this.state = JSON.stringify(layoutData);
    };

    function loadLayoutFromData(layoutData) {
        console.log('🔄 Loading layout from data...', layoutData);

        if (!layoutData || !layoutData.blocks) {
            console.warn('❌ No valid layout data to load');
            return false;
        }

        // Clear existing canvas
        clearCanvas();

        // Restore background
        if (layoutData.background) {
            backgroundState.color = layoutData.background.color || '#ffffff';
            backgroundState.imageBase64 = layoutData.background.image || null;
            backgroundState.size = layoutData.background.size || 'cover';
            backgroundState.repeat = layoutData.background.repeat || 'no-repeat';
            backgroundState.position = layoutData.background.position || 'center center';
            backgroundState.attachment = layoutData.background.attachment || 'scroll';

            // Apply background to canvas
            applyBackgroundToCanvas();

            // Update background UI controls
            updateBackgroundUI();
        }

        // Restore blocks
        layoutData.blocks.forEach((blockData, index) => {
            console.log(`Restoring block ${index + 1}:`, blockData);

            const block = createBlockFromData(blockData);
            if (block) {
                canvas.appendChild(block);
                console.log(`✅ Block ${index + 1} restored successfully`);
            } else {
                console.error(`❌ Failed to restore block ${index + 1}:`, blockData);
            }
        });

        // Update canvas height
        updateCanvasHeight();

        // Hide placeholder if we have content
        if (layoutData.blocks && layoutData.blocks.length > 0) {
            const canvasPlaceholder = document.querySelector('.layout-builder-canvas-placeholder');
            if (canvasPlaceholder) {
                canvasPlaceholder.style.display = 'none';
                console.log('✅ Hidden canvas placeholder (content loaded)');
            }
        }

        console.log('✅ Layout loaded successfully!');
        return true;
    }

    // Helper functions to create blocks without side effects
    function createTextBlockElement() {
        blockCounter++;
        const textBlock = document.createElement('div');
        textBlock.className = 'email-block text-block';
        textBlock.dataset.blockId = 'text-' + blockCounter;
        textBlock.dataset.blockType = 'text';

        const textContent = document.createElement('div');
        textContent.className = 'text-block-content';
        textContent.contentEditable = true;
        textContent.innerHTML = PLACEHOLDER_HTML;

        textBlock.appendChild(textContent);
        textBlock.style.cssText = 'position: absolute; left: 10px; width: calc(100% - 20px); min-height: 60px; border: 2px solid transparent; border-radius: 6px; padding: 10px; background: white; cursor: text; font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.5; color: #374151; box-sizing: border-box; transition: border-color 0.2s ease;';

        return textBlock;
    }

    function createImageBlockElement() {
        blockCounter++;
        const imageBlock = document.createElement('div');
        imageBlock.className = 'email-block image-block';
        imageBlock.dataset.blockId = 'image-' + blockCounter;
        imageBlock.dataset.blockType = 'image';

        const imageWrapper = document.createElement('div');
        imageWrapper.className = 'image-wrapper';

        const img = document.createElement('img');
        img.src = 'https://placehold.co/600x400.png';
        img.alt = '';
        img.style.cssText = 'max-width: 100%; height: auto; display: block; border-radius: 4px; object-fit: cover;';

        imageWrapper.appendChild(img);
        imageBlock.appendChild(imageWrapper);
        imageBlock.style.cssText = 'position: absolute; left: 10px; width: calc(100% - 20px); min-height: 200px; border: 2px solid transparent; border-radius: 6px; padding: 10px; background: white; text-align: center; cursor: pointer; box-sizing: border-box; transition: border-color 0.2s ease;';

        return imageBlock;
    }

    function createButtonBlockElement() {
        blockCounter++;
        const buttonBlock = document.createElement('div');
        buttonBlock.className = 'email-block button-block';
        buttonBlock.dataset.blockId = 'button-' + blockCounter;
        buttonBlock.dataset.blockType = 'button';

        const buttonLink = document.createElement('a');
        buttonLink.href = '#';
        buttonLink.textContent = 'Click here';
        buttonLink.style.cssText = 'display: inline-block; padding: 12px 24px; background: #3b82f6; color: white; text-decoration: none; border-radius: 6px; font-weight: 600; text-align: center; border: 2px solid #3b82f6; transition: all 0.2s ease;';

        buttonBlock.appendChild(buttonLink);
        buttonBlock.style.cssText = 'position: absolute; left: 10px; width: calc(100% - 20px); min-height: 60px; border: 2px solid transparent; border-radius: 6px; padding: 15px; background: white; text-align: center; cursor: pointer; box-sizing: border-box; transition: border-color 0.2s ease;';

        return buttonBlock;
    }

    function createSocialBlockElement() {
        blockCounter++;
        const socialBlock = document.createElement('div');
        socialBlock.className = 'email-block social-block';
        socialBlock.dataset.blockId = 'social-' + blockCounter;
        socialBlock.dataset.blockType = 'social';

        // Set default platforms data
        socialBlock.dataset.platforms = JSON.stringify({
            facebook: { enabled: true, url: 'https://facebook.com/' },
            x: { enabled: true, url: 'https://x.com/' },
            linkedin: { enabled: true, url: 'https://linkedin.com/' },
            youtube: { enabled: true, url: 'https://youtube.com/' },
            instagram: { enabled: true, url: 'https://instagram.com/' },
            tiktok: { enabled: true, url: 'https://tiktok.com/' },
            whatsapp: { enabled: false, url: '' },
            threads: { enabled: false, url: '' },
            bluesky: { enabled: false, url: '' }
        });

        const socialContainer = document.createElement('div');
        socialContainer.className = 'social-container';
        socialContainer.style.cssText = 'display: flex; gap: 15px; align-items: center; justify-content: center; flex-wrap: wrap;';

        socialBlock.appendChild(socialContainer);
        socialBlock.style.cssText = 'position: absolute; left: 10px; width: calc(100% - 20px); min-height: 60px; border: 2px solid transparent; border-radius: 6px; padding: 15px; background: white; text-align: center; cursor: pointer; box-sizing: border-box; transition: border-color 0.2s ease;';

        return socialBlock;
    }

    function createBlockFromData(blockData) {
        console.log(`Creating ${blockData.type} block from data:`, blockData);

        let block;

        switch (blockData.type) {
            case 'text':
                block = createTextBlockElement();
                // Restore text content - handle both old and new formats
                const textContent = block.querySelector('.text-block-content');
                if (textContent) {
                    if (blockData.content && typeof blockData.content === 'object' && blockData.content.html) {
                        // New format: content is an object
                        textContent.innerHTML = blockData.content.html;
                    } else if (blockData.content) {
                        // Old format: content is a string
                        textContent.innerHTML = blockData.content;
                    }
                }
                // Restore text properties - handle both formats
                const textProps = blockData.content && typeof blockData.content === 'object' ? blockData.content : blockData;
                if (textProps.fontFamily) block.dataset.fontFamily = textProps.fontFamily;
                if (textProps.fontSize) block.dataset.fontSize = textProps.fontSize;
                if (textProps.color) block.dataset.color = textProps.color;
                if (textProps.lineHeight) block.dataset.lineHeight = textProps.lineHeight;
                if (textProps.letterSpacing) block.dataset.letterSpacing = textProps.letterSpacing;
                if (textProps.textAlign) block.dataset.textAlign = textProps.textAlign;

                // Apply text styles to the content element
                if (textContent) {
                    if (textProps.fontFamily) textContent.style.fontFamily = textProps.fontFamily;
                    if (textProps.fontSize) textContent.style.fontSize = textProps.fontSize;
                    if (textProps.color) textContent.style.color = textProps.color;
                    if (textProps.lineHeight) textContent.style.lineHeight = textProps.lineHeight;
                    if (textProps.letterSpacing) textContent.style.letterSpacing = textProps.letterSpacing;
                    if (textProps.textAlign) textContent.style.textAlign = textProps.textAlign;
                }
                break;

            case 'image':
                block = createImageBlockElement();
                // Restore image content - handle both old and new formats
                const img = block.querySelector('img');
                if (img) {
                    if (blockData.content && typeof blockData.content === 'object' && blockData.content.src) {
                        // New format: content is an object
                        img.src = blockData.content.src;
                        img.alt = blockData.content.alt || '';
                        img.title = blockData.content.title || '';
                    } else if (blockData.src) {
                        // Old format: src at top level
                        img.src = blockData.src;
                        img.alt = blockData.alt || '';
                        img.title = blockData.title || '';
                    }
                }
                // Restore image properties - handle both formats
                const imgProps = blockData.content && typeof blockData.content === 'object' ? blockData.content : blockData;
                if (imgProps.width) block.dataset.width = imgProps.width;
                if (imgProps.alignment || imgProps.align) block.dataset.alignment = imgProps.alignment || imgProps.align;

                // Apply image styles
                if (img && imgProps.width) {
                    img.style.width = imgProps.width;
                    img.style.height = 'auto'; // Maintain aspect ratio
                }

                // Apply alignment
                const alignment = imgProps.alignment || imgProps.align;
                if (alignment) {
                    const imageWrapper = block.querySelector('.image-wrapper');
                    if (imageWrapper) {
                        imageWrapper.style.textAlign = alignment;
                    }
                }

                if (imgProps.url) {
                    // Add link wrapper if URL provided
                    const imageWrapper = block.querySelector('.image-wrapper');
                    if (imageWrapper && !imageWrapper.querySelector('a')) {
                        const link = document.createElement('a');
                        link.href = imgProps.url;
                        link.target = '_blank';
                        link.appendChild(img);
                        imageWrapper.appendChild(link);
                    }
                }
                break;

            case 'button':
                block = createButtonBlockElement();
                if (blockData.content) {
                    const button = block.querySelector('a');
                    if (button) {
                        button.textContent = blockData.content.text || 'Click here';
                        button.href = blockData.content.url || '#';
                    }
                    if (blockData.content.style) block.dataset.style = blockData.content.style;
                    if (blockData.content.size) block.dataset.size = blockData.content.size;
                    if (blockData.content.alignment) block.dataset.alignment = blockData.content.alignment;

                    // Apply button alignment
                    if (blockData.content.alignment) {
                        block.style.textAlign = blockData.content.alignment;
                    }
                }
                break;

            case 'social':
                block = createSocialBlockElement();
                if (blockData.content) {
                    if (blockData.content.platforms) {
                        block.dataset.platforms = JSON.stringify(blockData.content.platforms);
                        updateSocialIcons(block);
                    }
                    if (blockData.content.size) block.dataset.size = blockData.content.size;
                    if (blockData.content.alignment) block.dataset.alignment = blockData.content.alignment;
                    if (blockData.content.grayscale !== undefined) block.dataset.grayscale = blockData.content.grayscale.toString();
                }
                break;

            case 'divider':
                // For now, skip divider blocks in loading since they're complex
                console.warn('Divider block loading not yet implemented');
                return null;

            case 'columns':
                // For now, skip columns blocks in loading since they're complex
                console.warn('Columns block loading not yet implemented');
                return null;

            default:
                console.warn(`Unknown block type: ${blockData.type}`);
                return null;
        }

        if (!block) {
            console.error(`Failed to create block of type: ${blockData.type}`);
            return null;
        }

        // Restore common properties
        if (blockData.id) block.dataset.blockId = blockData.id;
        if (blockData.type) block.dataset.blockType = blockData.type;

        // Restore position and styling
        if (blockData.position) {
            console.log(`🔧 Applying position to ${blockData.type} block:`, blockData.position);
            block.style.position = blockData.position.position || 'absolute';
            block.style.top = blockData.position.top + 'px';
            block.style.left = blockData.position.left + 'px';
            block.style.width = blockData.position.width || '100%';
            if (blockData.position.height !== 'auto') {
                block.style.height = blockData.position.height;
            }
            console.log(`✅ Position applied: top=${block.style.top}, left=${block.style.left}, width=${block.style.width}`);
        } else {
            console.log(`⚠️ No position data for ${blockData.type} block, auto-positioning`);
            // No position data - auto-position blocks sequentially
            const existingBlocks = canvas.querySelectorAll('.email-block');
            let topPosition = 20; // Start 20px from top

            // Calculate position based on existing blocks
            existingBlocks.forEach(existingBlock => {
                if (existingBlock !== block) {
                    const blockBottom = parseInt(existingBlock.style.top || '0') + (existingBlock.offsetHeight || 60);
                    if (blockBottom + 20 > topPosition) {
                        topPosition = blockBottom + 20;
                    }
                }
            });

            // Apply default positioning
            block.style.position = 'absolute';
            block.style.top = topPosition + 'px';
            block.style.left = '10px';
            block.style.width = 'calc(100% - 20px)';

            console.log(`Auto-positioned block at top=${topPosition}px`);
        }

        // Restore all dataset attributes
        if (blockData.datasets) {
            Object.keys(blockData.datasets).forEach(key => {
                if (blockData.datasets[key] !== undefined) {
                    block.dataset[key] = blockData.datasets[key];
                }
            });
        }

        // Add selection functionality (missing from loaded blocks)
        block.addEventListener('click', function(e) {
            e.stopPropagation();
            selectBlock(block);
        });

        return block;
    }

    function updateBackgroundUI() {
        const bgColorPicker = document.getElementById('bg-color-' + statePath);
        const bgColorText = document.getElementById('bg-color-text-' + statePath);

        if (bgColorPicker) bgColorPicker.value = backgroundState.color;
        if (bgColorText) bgColorText.value = backgroundState.color;
    }

    function clearCanvas() {
        const blocks = Array.from(canvas.querySelectorAll('.email-block'));
        blocks.forEach(block => block.remove());
        updateCanvasHeight();
    }

    // Auto-save functionality
    let saveTimeout;
    function autoSave() {
        clearTimeout(saveTimeout);
        saveTimeout = setTimeout(() => {
            saveLayoutToHiddenInput();
        }, 1000); // Save 1 second after the last change
    }

    // Hook into existing functions to trigger auto-save
    const originalCreateTextBlockAtPosition = createTextBlockAtPosition;
    const originalCreateImageBlockAtPosition = createImageBlockAtPosition;
    const originalCreateButtonBlockAtPosition = createButtonBlockAtPosition;
    const originalCreateSocialBlockAtPosition = createSocialBlockAtPosition;
    const originalCreateDividerBlockAtPosition = createDividerBlockAtPosition;
    const originalCreateColumnsBlockAtPosition = createColumnsBlockAtPosition;

    createTextBlockAtPosition = function() {
        const result = originalCreateTextBlockAtPosition.apply(this, arguments);
        setTimeout(autoSave, 100);
        return result;
    };

    createImageBlockAtPosition = function() {
        const result = originalCreateImageBlockAtPosition.apply(this, arguments);
        setTimeout(autoSave, 100);
        return result;
    };

    createButtonBlockAtPosition = function() {
        const result = originalCreateButtonBlockAtPosition.apply(this, arguments);
        setTimeout(autoSave, 100);
        return result;
    };

    createSocialBlockAtPosition = function() {
        const result = originalCreateSocialBlockAtPosition.apply(this, arguments);
        setTimeout(autoSave, 100);
        return result;
    };

    createDividerBlockAtPosition = function() {
        const result = originalCreateDividerBlockAtPosition.apply(this, arguments);
        setTimeout(autoSave, 100);
        return result;
    };

    createColumnsBlockAtPosition = function() {
        const result = originalCreateColumnsBlockAtPosition.apply(this, arguments);
        setTimeout(autoSave, 100);
        return result;
    };

    // Load initial data if present
    function loadInitialData() {
        const hiddenInput = document.querySelector(`input[name="${statePath}"]`);

        if (hiddenInput && hiddenInput.value.trim()) {
            try {
                const layoutData = JSON.parse(hiddenInput.value);
                console.log('📁 Loading saved template data...');
                loadLayoutFromData(layoutData);
            } catch (error) {
                console.warn('⚠️ Failed to parse saved template data:', error);
                console.log('Raw data preview:', hiddenInput.value.substring(0, 200));
            }
        } else {
            console.log('ℹ️ Starting with empty template');
        }
    }

    // Load initial data after a short delay to ensure DOM is ready
    setTimeout(loadInitialData, 500);

    // Manual save function (can be called externally)
    window.saveEmailLayout = function() {
        saveLayoutToHiddenInput();
    };

    // Manual load function (can be called externally)
    window.loadEmailLayout = function(data) {
        return loadLayoutFromData(data);
    };

    console.log('💾 Save/Load system initialized');

    // Load existing data on initialization
    if (this.state && typeof this.state === 'string') {
        try {
            const data = JSON.parse(this.state);
            if (data && (data.blocks || data.version)) {
                loadLayoutFromData(data);
                console.log('✅ Loaded existing layout data');
            }
        } catch (e) {
            console.warn('Could not parse existing state:', e);
            console.log('State content:', this.state);
        }
    }

    // Make save function available globally for auto-save hooks
    window.layoutBuilderSave = saveLayoutToHiddenInput;
        },

        // Cleanup method for Alpine
        destroy() {
            if (window.layoutBuilderSave) {
                delete window.layoutBuilderSave;
            }
        }
    };
};
} // End of: if (typeof window.layoutBuilderComponent === 'undefined')
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

/* Allow absolute positioning for positioned blocks (loaded from saved templates) */
.email-block[style*="position: absolute"] {
    position: absolute !important;
}

.email-block:hover {
    border-color: #3b82f6;
    box-shadow: 0 2px 8px rgba(59, 130, 246, 0.15);
}

.email-block.selected {
    border-color: #3b82f6;
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
}

/* Block Movement Controls */
.block-move-controls {
    position: absolute;
    top: -15px;
    right: 10px;
    display: flex;
    gap: 4px;
    background: white;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    padding: 4px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    z-index: 100;
}

.move-btn {
    width: 28px;
    height: 28px;
    border: none;
    border-radius: 4px;
    background: #f8fafc;
    color: #64748b;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    font-size: 12px;
}

.move-btn:hover {
    background: #e2e8f0;
    color: #475569;
}

.move-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.move-btn:disabled:hover {
    background: #f8fafc;
    color: #64748b;
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
    height: auto;
    border-radius: 4px;
    max-width: 100%;
    /* display and width controlled by JavaScript for alignment support */
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

/* Divider blocks */
.email-block.divider-block {
    background: transparent !important;
    padding: 0;
    border: none;
    box-shadow: none;
    border-radius: 0;
    display: block;
    width: 100%;
    height: auto;
    max-width: 600px; /* Match email layout width */
}

.divider-wrapper {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
    height: 40px; /* Default height, can be overridden by JavaScript */
    padding: 0; /* Remove padding since we're using height for spacing */
}

.email-divider {
    border: none;
    border-top: 2px solid #d1d5db;
    width: 100%;
    margin: 0 auto;
    padding: 0;
    height: 0;
}

/* Video blocks */
.email-block.video-block {
    background: transparent !important;
    padding: 10px;
    border: 2px dashed transparent;
    border-radius: 6px;
    display: block;
    width: 100%;
    height: auto;
    max-width: 600px;
    transition: all 0.2s ease;
    cursor: pointer;
}

.email-block.video-block:hover {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.05) !important;
    box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.1);
}

.email-block.video-block.selected {
    border-color: #3b82f6 !important;
    background: rgba(59, 130, 246, 0.1) !important;
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
}

.video-container {
    position: relative;
    overflow: hidden;
}

.video-placeholder {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
}

/* Column blocks */
.email-block.columns-block {
    background: transparent !important;
    padding: 10px;
    border: 2px dashed #d1d5db;
    border-radius: 8px;
    min-height: 120px;
    width: 100% !important;
    box-sizing: border-box;
}

.email-block.columns-block:hover {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.05) !important;
}

.email-block.columns-block.selected {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.1) !important;
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
}

.columns-container {
    display: flex;
    gap: 10px;
    width: 100%;
    min-height: 100px;
    align-items: flex-start; /* All columns start at top */
}

.email-column {
    flex: 0 0 auto; /* Don't grow/shrink, respect explicit width */
    min-height: 100px;
    border: 2px dashed #d1d5db;
    border-radius: 6px;
    position: relative;
    background-color: #f9fafb;
    display: flex;
    flex-direction: column;
    align-items: stretch; /* Content fills width */
    justify-content: flex-start; /* Content starts at top */
    transition: all 0.2s ease;
    box-sizing: border-box; /* Include padding/border in width calculation */
}

/* Empty column state for placeholder centering */
.email-column.empty {
    align-items: center;
    justify-content: center;
}

.email-column:hover {
    border-color: #3b82f6;
    background-color: rgba(59, 130, 246, 0.05);
}

.column-placeholder {
    color: #9ca3af;
    font-size: 14px;
    text-align: center;
    pointer-events: none;
    user-select: none;
}

.columns-type-display {
    background: #f3f4f6;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    padding: 8px 12px;
    font-size: 14px;
    color: #6b7280;
    text-align: center;
    font-weight: 500;
}

/* Column content styles */
.column-content {
    box-sizing: border-box;
    transition: all 0.2s ease;
    position: relative;
}

.column-content.selected {
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.2);
}

.column-content:hover {
    border-color: #3b82f6 !important;
    box-shadow: 0 2px 4px rgba(59, 130, 246, 0.1);
}

.column-content.text-content {
    color: #374151; /* Dark text for light mode */
}

.column-content.text-content p {
    margin: 0;
    outline: none;
    color: inherit; /* Inherit color from parent */
}

.column-content.text-content:focus-within {
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.column-content.button-content a:hover {
    background: #2563eb !important;
}

.column-content.image-content:hover {
    background: #f1f5f9 !important;
}

/* Content editing states */
.column-content [contenteditable="true"]:focus {
    outline: none;
    background: rgba(59, 130, 246, 0.05);
}

.column-content.button-content a[contenteditable="true"] {
    user-select: text;
}

.column-content.button-content a:focus {
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3) !important;
    background: #2563eb !important;
}

/* Image upload feedback */
.column-content.image-content img {
    transition: all 0.2s ease;
}

.column-content.image-content img:hover {
    opacity: 0.8;
    transform: scale(1.02);
}

/* Selection indicators */
.column-content::after {
    content: '';
    position: absolute;
    top: -2px;
    right: -2px;
    bottom: -2px;
    left: -2px;
    border: 2px solid transparent;
    border-radius: 6px;
    pointer-events: none;
    transition: all 0.2s ease;
}

.column-content.selected::after {
    border-color: #3b82f6;
}

/* Column drag feedback */
.email-column.drag-over {
    border-color: #3b82f6 !important;
    background-color: rgba(59, 130, 246, 0.1) !important;
    box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.2);
}

/* Dark mode column styles */
.dark .email-block.columns-block {
    border-color: #4b5563;
}

.dark .email-block.columns-block:hover {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.1) !important;
}

.dark .email-column {
    border-color: #4b5563;
    background-color: #374151;
}

.dark .email-column:hover {
    border-color: #3b82f6;
    background-color: rgba(59, 130, 246, 0.1);
}

.dark .column-placeholder {
    color: #6b7280;
}

.dark .column-content.text-content {
    color: #f9fafb;
}

.dark .column-content.image-content {
    background: #374151 !important;
    color: #9ca3af;
}

.dark .column-content.image-content:hover {
    background: #4b5563 !important;
}

.dark .columns-type-display {
    background: #374151;
    border-color: #4b5563;
    color: #9ca3af;
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

/* Divider style grid */
.divider-style-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    margin-top: 8px;
}

.divider-style-option {
    padding: 12px 8px 8px 8px;
    border: 2px solid #e5e7eb;
    border-radius: 6px;
    background: #f9fafb;
    cursor: pointer;
    transition: all 0.2s ease;
    text-align: center;
}

.divider-style-option:hover {
    border-color: #d1d5db;
    background: #f3f4f6;
}

.divider-style-option.active {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.1);
}

.divider-preview {
    height: 20px;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    padding: 0 8px;
}

.divider-style-option span {
    font-size: 12px;
    color: #6b7280;
    font-weight: 500;
}

/* Dark mode for divider properties */
.dark .divider-style-option {
    background: #374151;
    border-color: #4b5563;
}

.dark .divider-style-option:hover {
    background: #4b5563;
    border-color: #6b7280;
}

.dark .divider-style-option.active {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.2);
}

.dark .divider-style-option span {
    color: #9ca3af;
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

/* Social Media Block Styles */
.social-platforms-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
    max-height: 300px;
    overflow-y: auto;
    padding: 4px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    background: #f9fafb;
}

.social-platform-item {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 4px;
    padding: 8px;
    transition: all 0.2s ease;
}

.social-platform-item:hover {
    border-color: #d1d5db;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.social-platform-header {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 500;
    font-size: 14px;
    color: #374151;
    margin-bottom: 6px;
    cursor: pointer;
}

.social-platform-header input[type="checkbox"] {
    margin: 0;
    width: 16px;
    height: 16px;
    accent-color: #3b82f6;
}

.social-icon {
    font-size: 16px;
    line-height: 1;
    width: 20px;
    text-align: center;
}

.social-url-input {
    width: 100%;
    padding: 6px 8px;
    border: 1px solid #d1d5db;
    border-radius: 4px;
    font-size: 13px;
    background: #fff;
    color: #374151;
    transition: border-color 0.2s ease;
}

.social-url-input:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.2);
}

.social-url-input:disabled {
    background: #f3f4f6;
    color: #9ca3af;
    cursor: not-allowed;
}

/* Social Block Styles */
.social-block {
    min-height: 60px;
    padding: 16px; /* Standard padding like other blocks */
    position: relative; /* Ensure proper positioning context */
    z-index: 1; /* Ensure it appears above other content */
}

.social-container {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
    justify-content: center;
}

.social-link {
    text-decoration: none !important;
    display: inline-block;
    line-height: 1;
    transition: all 0.2s ease;
    cursor: pointer;
    border-radius: 4px;
    padding: 4px;
}

.social-link:hover {
    transform: scale(1.1);
    background: rgba(0, 0, 0, 0.05);
}

.social-placeholder {
    text-align: center;
    color: #6b7280;
    padding: 20px;
    border: 2px dashed #d1d5db;
    border-radius: 8px;
    background: #f9fafb;
}

/* Social block responsive */
@media (max-width: 600px) {
    .social-container {
        gap: 8px;
    }

    .social-platforms-list {
        max-height: 200px;
    }

    .social-platform-item {
        padding: 6px;
    }

    .social-url-input {
        font-size: 12px;
        padding: 5px 6px;
    }
}

/* Social platform item disabled state */
.social-platform-item:has(input[type="checkbox"]:not(:checked)) {
    opacity: 0.6;
}

.social-platform-item:has(input[type="checkbox"]:not(:checked)) .social-url-input {
    background: #f3f4f6;
    color: #9ca3af;
    pointer-events: none;
}

/* Email Preview Modal */
.email-preview-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1000;
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(4px);
}

.email-preview-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.email-preview-container {
    background: white;
    border-radius: 12px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
    max-width: 800px;
    max-height: 90vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.email-preview-header {
    padding: 20px;
    border-bottom: 1px solid #e5e7eb;
    background: #f9fafb;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.email-preview-title {
    font-weight: 600;
    font-size: 18px;
    color: #111827;
    display: flex;
    align-items: center;
    gap: 10px;
}

.email-preview-controls {
    display: flex;
    gap: 10px;
    align-items: center;
}

.email-preview-btn {
    padding: 8px 16px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    background: white;
    color: #374151;
    cursor: pointer;
    font-size: 14px;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    gap: 6px;
    type: button; /* Prevent form submission */
}

.email-preview-btn:hover {
    background: #f3f4f6;
    border-color: #9ca3af;
}

.email-preview-close {
    background: #ef4444;
    color: white;
    border-color: #dc2626;
}

.email-preview-close:hover {
    background: #dc2626;
    border-color: #b91c1c;
}

.email-preview-content {
    flex: 1;
    overflow-y: auto;
    background: #ffffff;
    transition: background-color 0.3s ease;
}

/* Dark mode for preview content */
.email-preview-content.dark-mode {
    background: #111827;
}

.email-preview-content.dark-mode .preview-email {
    background: #111827;
    color: #f9fafb;
}

.email-preview-content.dark-mode .preview-text-block {
    color: #f9fafb;
}

.email-preview-content.dark-mode .preview-button {
    background: #374151 !important;
    color: #f9fafb !important;
    border-color: #4b5563 !important;
}

.email-preview-content.dark-mode .preview-divider {
    border-color: #374151 !important;
}

/* Preview email styles */
.preview-email {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px 20px;
    font-family: Arial, sans-serif;
    background: #ffffff;
    transition: all 0.3s ease;
}

.preview-block {
    margin: 20px 0;
}

.preview-text-block {
    font-size: 16px;
    line-height: 1.5;
    color: #374151;
}

.preview-text-block p {
    margin: 0 0 1em 0;
    line-height: 1.6;
}

.preview-text-block p:last-child {
    margin-bottom: 0;
}

.preview-text-block strong,
.preview-text-block b {
    font-weight: 600;
    color: inherit;
}

.preview-text-block em,
.preview-text-block i {
    font-style: italic;
    color: inherit;
}

.preview-text-block a {
    color: #3b82f6;
    text-decoration: underline;
}

.preview-text-block a:hover {
    color: #1d4ed8;
}

/* Dark mode text formatting */
.email-preview-content.dark-mode .preview-text-block a {
    color: #60a5fa;
}

.email-preview-content.dark-mode .preview-text-block a:hover {
    color: #93c5fd;
}

.preview-image-block {
    text-align: center;
}

.preview-image-block img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Column Layout Styles */
.preview-columns-block {
    margin: 20px 0;
}

.preview-columns-container {
    display: flex;
    gap: 15px;
    align-items: stretch;
    flex-wrap: nowrap;
    width: 100%;
}

.preview-column {
    flex: 1;
    min-width: 120px;
    max-width: none;
    padding: 15px;
    margin: 0;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    background: #f9fafb;
    box-sizing: border-box;
    overflow: hidden;
}

/* Dark mode column styles */
.email-preview-content.dark-mode .preview-column {
    background: #374151;
    border-color: #4b5563;
    color: #f9fafb;
}

.preview-button-block {
    text-align: center;
    margin: 24px 0;
}

.preview-button {
    display: inline-block;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.2s ease;
    border: 2px solid transparent;
}

.preview-divider-block {
    margin: 32px 0;
    text-align: center;
}

.preview-divider {
    border: 0;
    height: 2px;
    background: #e5e7eb;
    margin: 0 auto;
    border-radius: 2px;
}

.preview-video-block {
    text-align: center;
    margin: 24px 0;
}

.preview-video-placeholder {
    background: #f3f4f6;
    border: 2px dashed #d1d5db;
    border-radius: 8px;
    padding: 40px 20px;
    color: #6b7280;
    text-align: center;
    margin: 0 auto;
}

.preview-social-block {
    text-align: center;
    margin: 24px 0;
}

.preview-social-links {
    display: flex;
    justify-content: center;
    gap: 16px;
    align-items: center;
    flex-wrap: wrap;
}

.preview-social-link {
    font-size: 32px;
    text-decoration: none;
    transition: transform 0.2s ease;
}

.preview-social-link:hover {
    transform: scale(1.1);
}

        </style>

        <!-- Email Preview Modal -->
        <div id="email-preview-modal-{{ $getStatePath() }}" class="email-preview-modal" style="display: none;">
            <div class="email-preview-overlay">
                <div class="email-preview-container">
                    <div class="email-preview-header">
                        <div class="email-preview-title">
                            <span class="email-preview-icon">👁️</span>
                            <span>Email Preview</span>
                        </div>
                        <div class="email-preview-controls">
                            <button type="button" id="preview-theme-toggle-{{ $getStatePath() }}" class="email-preview-btn" title="Toggle Light/Dark Mode">
                                <span class="preview-theme-icon">☀️</span>
                                <span class="preview-theme-text">Light Mode</span>
                            </button>
                            <button type="button" id="preview-close-btn-{{ $getStatePath() }}" class="email-preview-btn email-preview-close" title="Close Preview">
                                ✕
                            </button>
                        </div>
                    </div>
                    <div class="email-preview-content" id="email-preview-content-{{ $getStatePath() }}">
                        <!-- Preview content will be generated here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dynamic-component>