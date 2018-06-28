<template>
     <div class="col-md-6">
           <div class="card">
  <div class="card-header">
    Chat
  </div>
  <div class="card-body">
    <div class="list-messages" v-if='messages && messages.length'>
       <div class="media" v-for='message in messages' :key='message.id'>
  <div class="media-body">
    <p><span style="color:red;"><strong>{{message.name}}</strong> :</span>{{message.body}}</p>
  </div>
</div>
    </div>
    <div class="messages-not-found" v-else>Messages not found</div>
  </div>
  <div class="card-footer">
      <div style="display:flex;" class="form-group">
          <input type="text" class="form-control" placeholder="type your chat" v-model='message' @keyup.enter='sendMesaage'>
      </div>
     </div>
</div>
        </div>  
</template>

<script>
    export default {
        data(){
            return {
                messages:[],
                message:'',
                name:$('.dropdown .dropdown-toggle').text()
            }
        },
        sockets:{
            connect:function(){
                console.log('Socket Connected')
            },
            message:function(val){
               this.getMessage();
            }
        },
        methods:{
            sendMesaage(){
                axios.post('/sendMessage',{name:this.name,body:this.message})
                .then(response=>{
                    console.log(response);
                });
                this.messages.push();
                this.message='';
            },
            getMessage(){
                 axios.get('/messages')
                 .then(response=>{
                console.log(response);
                this.messages = response.data;
                 });
                 
            }
        },
        mounted() {
           this.getMessage();
        }
    }
</script>
