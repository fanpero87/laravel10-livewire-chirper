<?php
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new class extends Component {
    #[Rule('required|string|max:255')]
    public string $message = '';

    public function store(): void {
        $validated = $this->validate();
        auth()->user()->chirps()->create($validated);
        $this->message = '';
        $this->dispatch('chirp-created');
    }
}; ?>

<div>
    <form wire:submit='store'>
        <textarea wire:model='message' placeholder="{{ __('What\'s on our mind?') }}"
            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Chirps') }}</x-primary-button>
</div>
