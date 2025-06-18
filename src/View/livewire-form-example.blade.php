{{-- A livewire form example --}}
<div class="max-w-5xl mx-auto p-6">

    <x-sk::form.main-wrapper>

        <x-sk::form.main-title title="Un exemple de formulaire !"/>

        <x-sk::form.form wire:submit="submit()">
            <x-sk::form.section-wrapper
                    title="Personal Information"
                    description="Please fill out a few details, nothing much."
            >

                <x-sk::form.input
                        name="name"
                        label="Name"
                        type="text"
                        grid-layout="col-span-12 md:col-span-6"
                        placeholder="John Doe"
                        wire:model="name"
                />

                <x-sk::form.input
                        name="email"
                        label="E-mail"
                        type="email"
                        grid-layout="col-span-12 md:col-span-6"
                        placeholder="you@example.com"
                        help="We'll never share your email."
                        wire:model="email"
                />

                <x-sk::form.input
                        name="birthdate"
                        label="Birthdate"
                        type="date"
                        grid-layout="col-span-12 md:col-span-4"
                        placeholder="2025-01-01"
                        wire:model="birthdate"
                />

                <x-sk::form.input
                        name="password"
                        label="Password"
                        type="password"
                        grid-layout="col-span-12 md:col-span-4"
                        wire:model="password"
                />

                <x-sk::form.input
                        name="age"
                        label="Age"
                        type="number"
                        grid-layout="col-span-12 md:col-span-4"
                        wire:model="age"
                />

            </x-sk::form.section-wrapper>

            <x-sk::form.section-wrapper
                    title="Professional Details"
                    description="This helps us understand your background and experience."
            >
                <x-sk::form.select
                        name="country"
                        label="Country"
                        grid-layout="col-span-12 md:col-span-8"
                        :options="[
                                'pf' => 'French Polynesia',
                                'fr' => 'France',
                                'us' => 'United States',
                            ]"
                        help="Select your country of residence"
                        wire:model="country"
                />

                <x-sk::form.input
                        name="cv"
                        label="CV"
                        type="file"
                        grid-layout="col-span-12 md:col-span-4"
                        multiple
                        readonly
                        wire:model="cv"
                />

                <x-sk::form.textarea
                        name="bio"
                        label="Short Bio"
                        placeholder="Tell us a little bit about yourself"
                        grid-layout="col-span-12"
                        wire:model="bio"
                ></x-sk::form.textarea>
            </x-sk::form.section-wrapper>

            <x-sk::form.section-wrapper
                    title="Preferences"
                    description="Your tech stack and personal choices."
            >
                <x-sk::form.checkbox-wrapper
                        title="Technologies you use"
                        required
                >
                    <x-sk::form.checkbox
                            name="laravel"
                            label="Laravel"
                            toggle-look
                            grid-layout="col-span-4"
                            wire:model="laravel"
                    />
                    <x-sk::form.checkbox
                            name="daisy"
                            label="Daisy UI"
                            toggle-look
                            grid-layout="col-span-4"
                            wire:model="daisy"
                    />
                </x-sk::form.checkbox-wrapper>

                <x-sk::form.radio
                        name="prefered_os"
                        title="Prefered OS"
                        help="You must choose. Everbody does."
                        required
                        :options="[
                                                'linux' => 'Linux',
                                                'also_linux' => 'Linux',
                                            ]"
                        wire:model="prefered_os"
                />

            </x-sk::form.section-wrapper>

            <x-sk::form.submit-button
                    :cancel="route('home')"
                    cancelLabel="Go back home"
            />
        </x-sk::form.form>
    </x-sk::form.main-wrapper>
</div>