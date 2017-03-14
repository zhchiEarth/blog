<template>
    <textarea id="editor" name="content" v-model="contentValue" required="require"></textarea>
</template>

<script>
    import { default as SimpleMDE } from 'simplemde/dist/simplemde.min.js'
    export default {
        props: {
            content: {
                type: String,
                default() {
                    return null
                }
            },
        },
        data() {
            return {
                simplemde: '',
                contentValue: ''
            }
        },
        created(){
            this.contentValue = this.content
        },
        mounted() {
            this.simplemde = new SimpleMDE({
                element: document.getElementById("editor"),
                placeholder: 'Please input the article content.',
                autoDownloadFontAwesome: true
            })
        }
    }
</script>