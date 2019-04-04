
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('message', require('./components/message.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#chat',
    data:{
	message:'',
	chat:{
	    message:[]
	}
    },
    methods:{
	send(){
	    if (this.message.length != 0) {
            	this.chat.message.push(this.message);
		axios.post('/send', {
			message : this.message
  		})
  		.then(response => {
    			console.log(response);
  		})
  		.catch(error => {
    			console.log(error);
  		});
	    }	
	}
    },
    mounted(){    
	Echo.private('chat')
    		.listen('ChatEvent', (e) => {
        		console.log(e);
    		});
    }
}).$mount('#chat');
