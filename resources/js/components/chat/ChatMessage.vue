<template>
    <div class="chat-message mb-2">
        <ul class="list-group">
            <li class="list-group-item">{{ message.message}}</li>
            <small class="d-flex justify-content-end">{{ message.user.name}}</small>
        </ul>
    </div>
</template>

<script>
export default {
    props : ['message']
}
</script>

<style lang="css" scoped>
</style>
