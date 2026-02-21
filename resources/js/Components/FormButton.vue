<template>
    <v-btn
        :type="type"
        :color="color"
        :size="size"
        :variant="variant"
        :loading="loading"
        :disabled="disabled || loading"
        :block="block"
        :prepend-icon="prependIcon"
        :append-icon="appendIcon"
        v-bind="$attrs"
    >
        <slot />
    </v-btn>
</template>

<script setup>
defineProps({
    type: {
        type: String,
        default: 'button'
    },
    color: {
        type: String,
        default: 'primary'
    },
    size: {
        type: String,
        default: 'default'
    },
    variant: {
        type: String,
        default: 'elevated'
    },
    loading: {
        type: Boolean,
        default: false
    },
    disabled: {
        type: Boolean,
        default: false
    },
    block: {
        type: Boolean,
        default: false
    },
    prependIcon: String,
    appendIcon: String
})
</script>

<style scoped>
/* Component-specific styles if needed */
</style>