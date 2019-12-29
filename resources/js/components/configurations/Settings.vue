<template>
    <div class="flex justify-start pt-20">
        <div class="w-2/4 bg-white  border shadow p-6 rounded-lg">
        <form @submit.prevent="submit">
            <base-input class="mb-2" v-model="label" inputStyle="w-full" label="label" forText="label" id="label"/>
            <base-input class="mb-2" v-model="name" inputStyle="w-full" label="name" forText="name" id="name"/>
            <base-input class="mb-2" v-model="value" inputStyle="w-full" label="value" forText="value" id="value"/>
            <div class="mb-2">
                <label for="description" class="mb-2 text-gray-700 font-semibold">Description</label>
                <textarea name="" class="resize-y border rounded focus:outline-none focus:shadow-outline w-full py-2 px-3" id="description" rows="5" v-model="description">
                </textarea>
            </div>
            <base-input  class="mb-2" v-model="group" inputStyle="w-full" label="group" forText="group" id="group"/>
            <base-button class="py-2" buttonClass="bg-green-500 text-white">Submit</base-button>
        </form>
        </div>
    </div>
</template>

<script>
import BaseInput from '../lib/form/BaseInput'
import BaseButton from '../lib/buttons/BaseButton'
export default {
    name: 'Settings',
    components: { BaseInput, BaseButton },
    props: {
    url: { type: String, required: true },
    method: { type: String, required: true },
    },
    data() {
        return {
            label: '',
            name: '',
            value: '',
            description: '',
            group: '',
            is_active: false,
            is_api_accessibility: false
        }
    },
    methods: {
        submit() {
            console.log(55)
            alert('hi')
        }
    }

}
</script>
