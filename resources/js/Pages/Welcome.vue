<template>
    <v-app>
        <!--Nav Bar-->
        <v-app-bar>
            <v-spacer></v-spacer>
            <v-btn @click="$inertia.visit('/login')">Login</v-btn>
            <v-btn @click="$inertia.visit('/register')">Register</v-btn>
        </v-app-bar>

        <!--Main Page-->>
        <v-main>
            <v-container>
                <h1>Welcome</h1>
            </v-container>
        </v-main>
    </v-app>
</template>

<script setup>
    defineProps({
        canLogin: Boolean,
        canRegister: Boolean,
    })
</script>

