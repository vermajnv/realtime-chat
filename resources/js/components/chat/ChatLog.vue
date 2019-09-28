<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" v-bind:key="messages.message" :message="message"></chat-message>
    </div>
</template>

<script>
export default {
    props : ['messages']
}
</script>

<style lang="css" scoped>
</style>
