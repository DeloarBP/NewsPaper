<template>
    <div>
        <button v-on="$listeners" class="font-bold py-2 px-4 rounded" :class="buttonClass">
            <slot />
        </button>
    </div>
</template>

<script>
export default {
    name: 'BaseButton',
    props: {
        buttonClass: {
            type: String
        }
    }
}
</script>