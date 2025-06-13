<?php

namespace Eops\StarterKit\View\Components\Form;

use Eops\StarterKit\View\Components\Form\Concerns\InteractsWithFormField;
use Illuminate\View\Component;


class Input extends Component
{
    use InteractsWithFormField;

    /**
     * @param  string  $name
     * @param  string  $type
     * @param  string|null  $label
     * @param  string|null  $placeholder
     * @param  string|null  $help
     * @param  bool  $required
     * @param  bool  $disabled
     * @param  bool  $readonly Will act as disabled, but keep an HTML-sendable value
     * @param  string  $gridLayout The form section component offers a grid of 12 columns. Adjust this parameter as needed.
     * @param  mixed|null  $value
     * @param  mixed|null  $model If $model->$name exists, you can just set the model instead of a value.
     * @param  string|null  $prefix Used in loops to differentiate Ids
     */
    public function __construct(
        public string $name,
        public string $type = 'text',
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

        $baseClass = $this->type === 'file' ? 'file-input file-input-bordered w-full' : 'input input-bordered w-full';

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

        $this->view = 'sk::components.form.input';
    }
}