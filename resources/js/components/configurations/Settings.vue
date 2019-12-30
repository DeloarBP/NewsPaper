<template>
    <div class="flex justify-start pt-20">
        <div class="w-2/4 bg-white  border shadow p-6 rounded-lg">
        <form @submit.prevent="submit">
            <div>
                <base-input
                v-model="settings.label"
                inputStyle="w-full"
                name="label"
                v-validate.continues="'required|min:2|max:100'"
                label="Label"
                forText="label"
                id="label"/>
                <ul class="text-red-500">
                    <li v-for="error in errors.collect('label')" :key="error">{{ error }}</li>
                </ul>
            </div>

            <div>
                <base-input class="mb-2"
                v-model="settings.name"
                name="name"
                v-validate.continues="'required|min:2|max:100'"
                inputStyle="w-full"
                label="Name"
                forText="name"
                id="name"/>
                <ul class="text-red-500">
                    <li v-for="error in errors.collect('name')" :key="error">{{ error }}</li>
                </ul>
            </div>

            <div>
                <base-input class="mb-2"
                v-model="settings.alue"
                name="value"
                v-validate.continues="'required|min:2|max:100'"
                inputStyle="w-full"
                label="Value"
                forText="value"
                id="value"/>
                <ul class="text-red-500">
                    <li v-for="error in errors.collect('value')" :key="error">{{ error }}</li>
                </ul>
            </div>

            <div class="mb-2">
                <label for="description" class="mb-2 text-gray-700 font-semibold">Description</label>
                <textarea name=""
                    class="resize-y border rounded focus:outline-none focus:shadow-outline w-full py-2 px-3"
                    id="description"
                    rows="5"
                    v-model="settings.description">
                </textarea>
            </div>
            <div>
                <base-input class="mb-4"
                v-model="settings.group"
                inputStyle="w-full"
                label="Group"
                forText="group"
                id="group"/>
            </div>

            <div class="flex justufy-start mb-2">
                <div class="flex">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" v-model="settings.is_api_accessibility">
                        <span class="ml-2 mr-8">Api accessibility</span>
                    </label>
                </div>
                <div class="flex">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" v-model="settings.is_active">
                        <span class="ml-2">Active</span>
                    </label>
                </div>
            </div>
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
            settings: {
                label: '',
                name: '',
                value: '',
                description: '',
                group: '',
                is_active: false,
                is_api_accessibility: false
            }
        }
    },
    methods: {
       submit() {
            this.$validator.validate().then(result => {
                if (result) {
                    Action.store(this.url, this.settings, this.method, this)
                }
            });
        }
    }

}
</script>
