<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <v-app>
        <Head title="Register" />
        
        <v-main>
            <v-container fluid class="fill-height">
                <v-row align="center" justify="center">
                    <v-col cols="12" sm="8" md="5">

                        <!-- Register Card -->
                        <v-card elevation="4">
                            <v-card-title class="text-h5 pa-5 bg-primary text-white">
                                Create Account
                            </v-card-title>

                            <v-card-text class="pa-6">
                                <v-form @submit.prevent="submit">
                                    
                                    <!-- Name Field -->
                                    <v-text-field
                                        v-model="form.name"
                                        label="Name"
                                        type="text"
                                        :error-messages="form.errors.name"
                                        variant="outlined"
                                        required
                                        autofocus
                                        autocomplete="name"
                                        prepend-inner-icon="mdi-account"
                                        class="mb-3"
                                    />

                                    <!-- Email Field -->
                                    <v-text-field
                                        v-model="form.email"
                                        label="Email"
                                        type="email"
                                        :error-messages="form.errors.email"
                                        variant="outlined"
                                        required
                                        autocomplete="username"
                                        prepend-inner-icon="mdi-email"
                                        class="mb-3"
                                    />

                                    <!-- Password Field -->
                                    <v-text-field
                                        v-model="form.password"
                                        label="Password"
                                        type="password"
                                        :error-messages="form.errors.password"
                                        variant="outlined"
                                        required
                                        autocomplete="new-password"
                                        prepend-inner-icon="mdi-lock"
                                        hint="Minimum 8 characters"
                                        class="mb-3"
                                    />

                                    <!-- Confirm Password Field -->
                                    <v-text-field
                                        v-model="form.password_confirmation"
                                        label="Confirm Password"
                                        type="password"
                                        :error-messages="form.errors.password_confirmation"
                                        variant="outlined"
                                        required
                                        autocomplete="new-password"
                                        prepend-inner-icon="mdi-lock-check"
                                        class="mb-4"
                                    />

                                    <!-- Register Button -->
                                    <v-btn
                                        type="submit"
                                        color="primary"
                                        size="large"
                                        block
                                        :loading="form.processing"
                                        :disabled="form.processing"
                                    >
                                        Register
                                    </v-btn>

                                    <!-- Login Link -->
                                    <v-divider class="my-5" />
                                    
                                    <div class="text-center">
                                        <span class="text-body-2">Already have an account? </span>
                                        <Link
                                            :href="route('login')"
                                            class="text-decoration-none text-primary font-weight-medium"
                                        >
                                            Log in here
                                        </Link>
                                    </div>
                                </v-form>
                            </v-card-text>
                        </v-card>

                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<style scoped>
.fill-height {
    min-height: 100vh;
}
</style>