<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <v-app>
        <Head title="Log in" />
        
        <v-main>
            <v-container fluid class="fill-height">
                <v-row align="center" justify="center">
                    <v-col cols="12" sm="8" md="4">
                        
                        <!-- Success Message -->
                        <v-alert
                            v-if="status"
                            type="success"
                            class="mb-4"
                        >
                            {{ status }}
                        </v-alert>

                        <!-- Login Card -->
                        <v-card elevation="4">
                            <v-card-title class="text-h5 pa-5 bg-primary text-white">
                                Log in to BookTracker
                            </v-card-title>

                            <v-card-text class="pa-6">
                                <v-form @submit.prevent="submit">
                                    
                                    <!-- Email Field -->
                                    <v-text-field
                                        v-model="form.email"
                                        label="Email"
                                        type="email"
                                        :error-messages="form.errors.email"
                                        variant="outlined"
                                        required
                                        autofocus
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
                                        autocomplete="current-password"
                                        prepend-inner-icon="mdi-lock"
                                        class="mb-3"
                                    />

                                    <!-- Remember Me Checkbox -->
                                    <v-checkbox
                                        v-model="form.remember"
                                        label="Remember me"
                                        color="primary"
                                        class="mb-3"
                                    />

                                    <!-- Forgot Password Link and Login Button -->
                                    <div class="d-flex justify-space-between align-center flex-wrap ga-3">
                                        <Link
                                            v-if="canResetPassword"
                                            :href="route('password.request')"
                                            class="text-decoration-none text-primary"
                                        >
                                            Forgot your password?
                                        </Link>

                                        <!-- Login Button -->
                                        <v-btn
                                            type="submit"
                                            color="primary"
                                            size="large"
                                            :loading="form.processing"
                                            :disabled="form.processing"
                                            min-width="120"
                                        >
                                            Log in
                                        </v-btn>
                                    </div>

                                    <!-- Register Link -->
                                    <v-divider class="my-5" />
                                    
                                    <div class="text-center">
                                        <span class="text-body-2">Don't have an account? </span>
                                        <Link
                                            :href="route('register')"
                                            class="text-decoration-none text-primary font-weight-medium"
                                        >
                                            Register here
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