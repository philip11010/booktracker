<template>
    <v-textarea
        :model-value="modelValue"
        @update:model-value="$emit('update:modelValue', $event)"
        :label="label"
        :hint="hint"
        :error-messages="errors"
        :rows="rows"
        :required="required"
        :disabled="disabled"
        variant="outlined"
        class="mb-3"
        v-bind="$attrs"
    />
</template>

<script setup>
defineProps({
    modelValue: String,
    label: {
        type: String,
        required: true
    },
    hint: String,
    errors: [String, Array],
    rows: {
        type: Number,
        default: 3
    },
    required: {
        type: Boolean,
        default: false
    },
    disabled: {
        type: Boolean,
        default: false
    }
})

defineEmits(['update:modelValue'])
</script>

<style scoped>
/* Component-specific styles if needed */
</style>