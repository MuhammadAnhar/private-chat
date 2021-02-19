<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            Chats
            <a href="" @click.prevent="close">
                <i class="fa fa-times float-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-body" v-chat-scroll>
            <p class="card-text" v-for="chat in chats" :key="chat.message">
                {{chat.message}}
            </p>
        </div>
        <form action="" class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Write Your Message">
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data () {
        return {
            chats:[],
        }
    },
    
    methods: {
        send () {
            console.log('Yeeeaaahhh')
        },
        close () {
            this.$emit('close');
        }
    },
        created () {
            this.chats.push(
                {message:'Heyy'}, 
                {message:'How Are You'}
                )
        }
}
</script>

<style>

.chat-box {
    height: 400px;
}

.card-body {
    overflow-y: scroll;
}

</style>