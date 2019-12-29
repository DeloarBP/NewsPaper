<template>
  <div>
    <label class="block text-gray-700 text-sm mb-2 font-semibold"
        v-if="label" :for="forText" :class="labelStyle">{{ label }}
        <span v-if="required && label"> * </span>
    </label>
    <input 
        class="py-2 px-4 bg-gray-100 border-2 rounded-lg focus:outline-none focus:shadow focus:border-green-400"
        ref="input" 
        :class="inputStyle" 
        :value="value"
        v-bind="$attrs"
        @input="updateValue"/>
  </div>
</template>

<script>
export default {
  name: 'BaseInput',
  inheritAttrs: false,
  props: {
    value: { type: String, Number, required: true },
    label: { type: String, default: '' },
    forText: { type: String, default: '' },
    required: { type: Boolean, required: false },
    labelStyle: { type: [String, Object, Array], default: 'baseClass' },
    inputStyle: { type: [String, Object, Array], default: 'baseClass' },
  },
  methods: {
    updateValue(event) {
      this.$emit('input', event.target.value)
    },
    focus() {
      this.$refs.input.focus()
    }
  }
}
</script>