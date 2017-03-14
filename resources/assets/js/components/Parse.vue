<template>
    <div class="markdown" v-html="rawHtml"></div>
</template>

<script>


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
                 rawHtml: ''
            }
        },
        created() {
            marked.setOptions({
                    highlight: (code) => {
                      return hljs.highlightAuto(code).value
                    }
                })
            this.rawHtml = marked(this.content)
        }
    }
</script>