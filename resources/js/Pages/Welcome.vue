<template>
    <v-app>
        <!--Nav Bar-->
        <v-app-bar>
            <v-spacer></v-spacer>
            <v-btn v-if="canLogin" @click="$inertia.visit(route('login'))">
                Login
            </v-btn>
            <v-btn v-if="canRegister" @click="$inertia.visit(route('register'))">
                Register
            </v-btn>
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

