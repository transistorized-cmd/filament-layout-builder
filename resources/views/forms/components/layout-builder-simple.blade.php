<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="layout-builder-container">
        <div class="simple-test-content">
            <h3>Simple Layout Builder Test</h3>
            <p>This is a minimal test to isolate the Livewire error.</p>
        </div>
    </div>
</x-dynamic-component>

<style>
.layout-builder-container {
    width: 100%;
    min-height: 200px;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 20px;
}

.simple-test-content {
    text-align: center;
    color: #374151;
}
</style>