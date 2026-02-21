<template>
    <v-text-field
        :model-value="modelValue"
        @update:model-value="$emit('update:modelValue', $event)"
        :label="label"
        :type="type"
        :hint="hint"
        :error-messages="errors"
        :prepend-inner-icon="icon"
        :required="required"
        :disabled="disabled"
        variant="outlined"
        class="mb-3"
        v-bind="$attrs"
    />
</template>

<script setup>
defineProps({
    modelValue: [String, Number],
    label: {
        type: String,
        required: true
    },
    type: {
        type: String,
        default: 'text'
    },
    hint: String,
    errors: [String, Array],
    icon: String,
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