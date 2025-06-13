<?php

namespace Eops\StarterKit\View\Components\Form;

use Illuminate\View\Component;
use Eops\StarterKit\View\Components\Form\Concerns\InteractsWithFormField;
use Illuminate\Support\Str;

class Radio extends Component
{
    use InteractsWithFormField;

    /**
     * @param  string  $name
     * @param  array  $options An associative array of $value => $label
     * @param  string  $type
     * @param  string|null  $label
     * @param  string|null  $help
     * @param  string|null  $title
     * @param  bool  $inline
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
        public string $type = 'text',
        public ?string $label = null,
        public ?string $help = null,
        public ?string $title = null,
        public bool $inline = false,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public string $gridLayout = 'col-span-12 md:col-span-6',
        public mixed $value = null,
        public mixed $model = null,
        public ?string $prefix = null,
    ) {

        $this->initFormField(
            name: $name,
            label: $label,
            help: $help,
            required: $required,
            disabled: $disabled,
            readonly: $readonly,
            gridLayout: $gridLayout,
            value: $value,
            model: $model,
            prefix: $prefix,
            baseClass: 'input input-bordered w-full'
        );

        $this->view = 'sk::components.form.radio';
    }

    public function getOptionId(string $value): string
    {
        return Str::slug($this->name . '-' . $value);
    }

    public function isSelected(mixed $option): bool
    {
        return (string) $this->resolvedValue === (string) $option;
    }
}
