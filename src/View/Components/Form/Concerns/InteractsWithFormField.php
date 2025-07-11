<?php

namespace Eops\StarterKit\View\Components\Form\Concerns;

use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use Illuminate\View\View;

trait InteractsWithFormField
{
    public string $id;
    public ?string $resolvedValue;
    public string $inputClasses;
    public string $view;

    public function initFormField(
        string $name,
        ?string $label = null,
        ?string $placeholder = null,
        ?string $help = null,
        bool $required = false,
        bool $disabled = false,
        bool $readonly = false,
        string $gridLayout = '',
        mixed $value = null,
        mixed $model = null,
        ?string $prefix = null,
        string $baseClass = '',
    ): void {
        $this->id = Str::slug($prefix ? "{$prefix}-{$name}" : $name);

        $modelValue = is_object($model) && isset($model->{$name}) ? $model->{$name} : null;
        $this->resolvedValue = old($name, $value ?? $modelValue);

        $this->inputClasses = $baseClass;

    }

    public function render(): View
    {
        $multipleInputFileHasError = false;

        if(isset($this->type) && isset($this->multiple)) {
            if($this->type === 'file' && $this->multiple) {
                if(session('errors') !== null)
                {
                    foreach (session('errors')->getMessages() as $key => $error) {
                        if (str_starts_with($key, rtrim($this->name, '[]') . '.')) {
                            $multipleInputFileHasError = true;
                        }
                    }
                }

            }
        }
        if(session('errors')?->has($this->name) || $multipleInputFileHasError) {
            $this->inputClasses .= ' input-error';
        }
        if($this->readonly)
        {
            $this->inputClasses .= ' pointer-events-none opacity-50';
        }

        return view($this->view);
    }

}
