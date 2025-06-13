<?php

namespace Eops\StarterKit\View\Components\Form;

use Illuminate\View\Component;
use Eops\StarterKit\View\Components\Form\Concerns\InteractsWithFormField;

class Checkbox extends Component
{
    use InteractsWithFormField;

    public bool $checked;

    /**
     * @param  string  $name
     * @param  string|null  $label
     * @param  string|null  $placeholder
     * @param  string|null  $help
     * @param  bool  $required
     * @param  bool  $disabled
     * @param  bool  $readonly Will act as disabled, but keep an HTML-sendable value
     * @param  mixed|null  $value
     * @param  string  $gridLayout
     * @param  mixed|null  $model
     * @param  string|null  $prefix
     * @param  string|null  $toggleLook Whether the checkbox is going to look like a toggle button
     */
    public function __construct(
        public string $name,
        public ?string $label = null,
        public ?string $placeholder = null,
        public ?string $help = null,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public mixed $value = null,
        public string $gridLayout = '',
        public mixed $model = null,
        public ?string $prefix = null,
        public ?string $toggleLook = 'false',
    ) {
        $toggleLook = filter_var($toggleLook, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        $baseClass = $toggleLook ?
            'toggle toggle-primary' : 'checkbox';

        $this->initFormField(
            name: $name,
            label: $label,
            placeholder: $placeholder,
            help: $help,
            required: $required,
            disabled: $disabled,
            readonly: $readonly,
            gridLayout: $gridLayout,
            value: $value,
            model: $model,
            prefix: $prefix,
            baseClass: $baseClass,
        );

        $this->checked = $this->isChecked();
        $this->view = 'sk::components.form.checkbox';
    }

    public function isChecked(): bool
    {
        return filter_var($this->resolvedValue, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? false;
    }

}