<template>
  <span
    :aria-checked="value"
    @click="toggle"
    @keydown.space.prevent="toggle"
    class="toggle"
    role="checkbox"
    tabindex="0"
  ></span>
</template>

<script>
export default {
  props: {
    value: { type: [String, Number, Boolean], default: '' }
  },
  methods: {
    toggle() {
      this.$emit('input', !this.value)
    }
  }
}
</script>

<style scoped>
.toggle {
  position: relative;
  display: inline-block;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  border-radius: 9999px;
  cursor: pointer;
  height: 1.5rem;
  width: 3rem;
}
.toggle:focus {
  outline: 0;
}
.toggle:before {
  display: inline-block;
  border-radius: 9999px;
  height: 100%;
  width: 100%;
  background-color: #dae1e7;
  content: '';
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
  -webkit-transition: background-color 0.2s ease;
  transition: background-color 0.2s ease;
}
.toggle[aria-checked='true']:before {
  @apply bg-green-500;
}
.toggle:after {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 9999px;
  height: 1.5rem;
  width: 1.5rem;
  background-color: #fff;
  border-width: 1px;
  border-color: #dae1e7;
  -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
  content: '';
  -webkit-transition: -webkit-transform 0.2s ease;
  transition: -webkit-transform 0.2s ease;
  transition: transform 0.2s ease;
  transition: transform 0.2s ease, -webkit-transform 0.2s ease;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}
.toggle[aria-checked='true']:after {
  -webkit-transform: translateX(1.5rem);
  transform: translateX(1.5rem);
}
</style>
