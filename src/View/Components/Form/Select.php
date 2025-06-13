<?php

namespace Eops\StarterKit\View\Components\Form;

use Illuminate\View\Component;
use Eops\StarterKit\View\Components\Form\Concerns\InteractsWithFormField;

class Select extends Component
{
    use InteractsWithFormField;

    /**
     * @param  string  $name
     * @param  array  $options An associative array of $value => $label
     * @param  string|null  $label
     * @param  string|null  $placeholder
     * @param  string|null  $help
     * @param  bool  $required
     * @param  bool  $disabled
     * @param  bool  $readonly Will act as disabled, but keep an HTML-sendable value
     * @param  string  $gridLayout
     * @param  mixed|null  $value
     * @param  mixed|null  $model
     * @param  string|null  $prefix
     */
    public function __construct(
        public string $name,
        public array $options = [],
        public ?string $label = null,
        public ?string $placeholder = null,
        public ?string $help = null,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public string $gridLayout = '',
        public mixed $value = null,
        public mixed $model = null,
        public ?string $prefix = null,
    ) {
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
            baseClass: 'select select-bordered w-full'
        );

        $this->view = 'sk::components.form.select';
    }

}
