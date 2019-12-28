<template>
  <div v-show="show" class="modal-backdrop">
    <div ref="modal" @keydown.esc="dismiss" class="modal" tabindex="0">
      <slot name="header" />
      <slot name="body" />
      <slot name="footer" />
    </div>
  </div>
</template>


<script>
export default {
  props: {
    show: { type: Boolean, default: false, required: true },
    preventBackgroundScrolling: {
      type: Boolean,
      default: true,
      required: false
    }
  },
  watch: {
    show: {
      immediate: true,
      handler(show) {
        if (process.client) {
          if (show) {
            this.preventBackgroundScrolling &&
              document.body.style.setProperty('overflow', 'hidden')
          } else {
            this.preventBackgroundScrolling &&
              document.body.style.removeProperty('overflow')
          }
        }
      }
    }
  },
  methods: {
    dismiss() {
      this.$emit('close')
    }
  }
}
</script>

<style scoped>
h1 {
  @apply text-3xl !important;
}
h2 {
  @apply text-2xl !important;
}
.modal-backdrop {
  @apply fixed top-0 right-0 bottom-0 left-0 overflow-auto p-8;
  background-color: rgba(0, 0, 0, 0.5);
}
.modal {
  @apply ml-auto mr-auto mt-8 w-2/4;
}
.card,
.modal {
  @apply bg-white p-8 rounded;
  -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11),
    0 5px 15px 0 rgba(0, 0, 0, 0.08);
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11),
    0 5px 15px 0 rgba(0, 0, 0, 0.08);
}
</style>
