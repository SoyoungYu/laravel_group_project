<template>
    <div class="body">
        <h2>This is a Test template</h2>
        <button v-on:click="ClickWeek(1)">1 주차</button>
        <button v-on:click="ClickWeek(2)">2 주차</button>
        <button v-on:click="ClickWeek(3)">3 주차</button>
        <button v-on:click="ClickWeek(4)">4 주차</button>
        <button v-on:click="ClickWeek(5)">5 주차</button>
        <button v-on:click="ClickWeek(6)">6 주차</button>
        <button v-on:click="ClickWeek(7)">7 주차</button>
    
        <h3>{{ week }}</h3>            
        <div v-for='japan in japans'>
            <p>{{ japan.title }}</p>
            <p >{{ japan.info }}</p>
            <input type="button" value="삭제" @click="del(japan)">
            <form @submit = "updateJapan">
                <input type="text" placeholder="Title" class="form_up_controller" v-model="up_title">
                <textarea class="form_up_controller2" cols="30" rows="10" v-model="up_info"></textarea>
                <button>수정</button>
            </form>
        </div>
      
        <form @submit = "postJapan">
            <input type="text" placeholder="Title" class="form_controller" v-model="title">``
            <textarea class="form_controller2" cols="30" rows="10" v-model="info"></textarea>
            <button>만들기</button>
        </form>
        
    </div>
</template>
<script>
export default {
    data:function(){
        return{
            japans:'',
            week: '',
            title:'',
            info:'',
            up_info: '',
            up_title: '',
            id : '',
        }
    },
    mounted: function(){
 
    },
    methods:{
        ClickWeek(id){
            console.log(id)
            this.week=id
            Axios.get('/api/japan/' + id)
            .then((response)=>{
                console.log(response.data.japans)
                this.japans=response.data.japans
            })
            .catch(err=>{
                console.log(err)
            })
        },
        postJapan(e){
            e.preventDefault();
            let currentObj = this;
            console.log(this.week)
            console.log(this.info)
            Axios.post('/api/japan',{
                title : this.title,
                info : this.info,
                week: this.week
            })
            .then(response=>{
                console.log(response.data.msg)
                this.$router.push('/')
            })
            .catch(error=>{
                console.log(error)
            })
        },
        del(japan){
            Axios.delete('api/japan/' + japan.id)
            .then(response =>{
                console.log(response.data)
                this.$router.push('/japan')
            })
            .catch(error=>{
                console.log(error)
            })
        },
        updateJapan(e){
            e.preventDefault();
            let currentObj = this;
            console.log('clicked update')
            Axios.update('/api/japan/'+ japan.id,{
                title: this.up_title,
                info : this.up_info,
            })
            .then(response =>{
                console.log(response.data.msg)
            })
            .catch(error=>{
                console.log(error)
            })
        }
      
    }
}
</script>
<style>
    .body{
        margin-top: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background-color: aliceblue
    }
</style>