<template>
    <div class="chat-composer">
        <input type="text" name="" value="" placeholder="start typing.." v-model="messageText" @keydown.enter="sendMessage">
        <button type="button" name="button" class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            messageText : ''
        }
    },
    methods : {
        sendMessage() {
            this.$emit('messagesent', {
                message : this.messageText,
                user : {
                    name : $('#navbarDropdown').text()
                }
            });

            this.messageText = "";
        }
    }

}
</script>

<style lang="css" scoped>
    .chat-composer {
        display: flex;
    }
    .chat-composer input {
        flex: 1;
    }
    .chat-composer button {
        border-radius: unset;
    }
</style>
