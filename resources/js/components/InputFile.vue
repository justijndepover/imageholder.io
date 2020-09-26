<template>
    <div class="bg-gray-100 text-gray-500 rounded-lg py-2 px-4 cursor-pointer flex items-center outline-none" tabindex="0" :for="id" @click="click" @keyup.enter="click" @keyup.space="click">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 inline mr-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
        </svg>

        <label :for="id" class="text-sm cursor-pointer">{{ label }}</label>
        <input class="hidden" type="file" ref="file" :name="name" :id="id" @change="changeLabel"/>
    </div>
</template>

<script>
export default {
    props: {
        id: String,
        name: String,
    },
    data() {
        return {
            label: "Selecteer bestand"
        }
    },
    methods: {
        changeLabel(e) {
            this.label = e.target.files[0].name
        },
        click() {
            this.$refs.file.click();
        }
    }
}
</script>
