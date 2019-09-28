/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-message', require('./components/chat/ChatMessage.vue').default);
Vue.component('chat-log', require('./components/chat/ChatLog.vue').default);
Vue.component('chat-composer', require('./components/chat/ChatComposer.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data : {
        messages : [],
        userInRoom : [],
    },

    methods : {
        addMessage(message)
        {
            this.messages.push(message);
            axios.post('/message/store', message).then((response) => {
                // console.log(response);
            });

        }
    },

    created() {
        axios.get('/messages').then((response) => {
            this.messages = response.data;
        });

        Echo.join(`chatroom`)
            .here((users) => {
                this.userInRoom = users;
            })
            .leaving((user) => {
                console.log('leaving=--- ' + user);
                this.userInRoom = this.userInRoom.filter((user) => {
                    return user != userLeaving;
                })
            })
            .joining((userJoining) => {
                this.userInRoom = [...new Set(this.userInRoom.push(userJoining))];
            })
            .listen('MessagePosted', (eve) => {
                this.messages.push({
                    message : eve.message.message,
                    user : eve.user
                })
            })
    }
});
