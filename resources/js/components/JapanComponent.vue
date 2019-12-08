<template>
    <div class="all">
        <div class="body">
            <div class="btn-group" id="menu">
                <!-- week1 ~ week7 버튼 -->
                <button class="mocean-modal-button" data-mocean-type="slide-in-top" id="japan_week1" v-on:click="clickWeek(1)">week 1</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-right" onclick="myFunction()" id="japan_week2" v-on:click="clickWeek(2)">week 2</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-bottom" onclick="myFunction()" id="japan_week3" v-on:click="clickWeek(3)">week 3</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-left" id="japan_week4" v-on:click="clickWeek(4)">week 4</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-top" data-mocean-out-type="slide-out-bottom" id="japan_week5" v-on:click="clickWeek(5)" >week 5</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-bottom" data-mocean-out-type="slide-out-top" id="japan_week6" v-on:click="clickWeek(6)">week 6</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-left" data-mocean-out-type="slide-out-right" id="japan_week7" v-on:click="clickWeek(7)">week 7</button>
            </div>
            
            <div class="japan_hiddenIntro">
                <button @click="goCreate(week)" v-if="button_control == 1">새로 만들기</button>
                <div v-for="japan in japans" v-bind:key="japan"> <!-- 버튼1(week1)을 클릭했을 때 나타나는 숨겨진 1주차 사진, 내용-->
                    <h2>{{ japan.title }}</h2>
                    <img :src="'images/'+japan.image" id="japan_week1Image"> <!-- 1주차 이미지 (데이터) -->
                    <pre>
                        <p id="japan_week1Content">{{ japan.info }}</p> <!-- 1주차 내용 (데이터) -->
                    </pre>
                    <input type="button" value="수정" @click="goModify(japan)" v-if="button_control == 1">
                    <input type="button" value="삭제" @click="del(japan.id)" v-if="button_control == 1">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data:function(){
        return {
            japans: '',
            week: '',
            button_control : '',
            token_exist : $cookies.isKey('_token'),
        };
    },
    mounted: function(){
 
    },
    methods: {
        clickWeek(weekId){
            console.log(weekId);
            this.week=weekId
              Axios.get('/api/japan/'+weekId)
            .then((response)=>{
                this.japans = response.data.japans
                console.log(this.japans)
                console.log(this.token_exist)
                console.log(response.data.user)
                if(response.data.user == 'admin')
                {
                    this.button_control = 1
                    
                }
            })
            .catch(error =>{
                console.log(error)
            })
        },
        del(id){
            Axios.delete('api/japan/' + id)
            .then(response =>{
                console.log(response.data)
                this.$router.push('/')
            })
            .catch(error=>{
                console.log(error)
            })
        },
        goModify(japan){
            console.log(japan.id)
            this.$router.push({name : "JapanModify", params:{id : japan.id}})
        },
        goCreate(week){
            console.log(week)
            this.$router.push({name: 'JapanCreate', params:{week : week}})
        }
    }

}
</script>

<style scoped>
#japan_week1Hidden,
#japan_week2Hidden,
#japan_week3Hidden,
#japan_week4Hidden,
#japan_week5Hidden,
#japan_week6Hidden,
#japan_week7Hidden {
    display: none;
}

.body {
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    color:black;
}

.mocean-modal-wrap {
    display: flex;
    justify-content: center;
}

.btn-group {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 400px;
}

.btn-group button {
    outline: 1px solid #000;
    transform-origin: 50% 50%;
}

/* 버튼에 마우스를 댔을 때 커질 지 말지 결정 : scale(1.1) ==> 커짐 */
.btn-group button:hover {
    transform: scale(1.0);
}

button {
    appearance: none;
    border: none;
    box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.15), 0 1px 2px rgba(0, 0, 0, 0.2), 0 1px 1px rgba(0, 0, 0, 0.2);
    flex: 1 1 10%;
    padding: 0.875rem;
    transition: 100ms all ease-in-out;
    width: 100%;
    font-weight: 600;
    font-size: 1.7em;
    text-transform: uppercase;
    background: #424242;
    color: white;
}

button:hover {
    cursor: pointer;
    background: #1C1C1C;
}

button:focus {
    outline: none;
}

.mocean-modal-wrap {
    position: fixed;
    max-width: 320px;
    width: 100%;
    z-index: 2000;
    visibility: hidden;
    backface-visibility: hidden;
    width: 100%;
    margin: auto;
}

.mocean-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    visibility: hidden;
    opacity: 0;
    transition-duration: 500ms;
    background: #151515;
}

.mocean-show.mocean-modal-wrap {
    visibility: visible;
}

.mocean-show.mocean-modal-wrap ~ .mocean-modal-overlay {
    visibility: visible;
    opacity: 1;
}

.mocean-modal {
    transition-property: all;
    transition-duration: 500ms;
    transition-timing-function: cubic-bezier(0.4, 0, 0, 1.5);
    animation-duration: 1000ms;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(0.4, 0, 0, 1.5);
}

.slide-in-top .mocean-content {
    transform: translate3d(0, -100%, 0);
    opacity: 0;
}

.mocean-show.slide-in-top .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-right .mocean-content {
    transform: translate3d(30%, 0, 0);
    opacity: 0;
}

.mocean-show.slide-in-right .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-bottom .mocean-content {
    transform: translate3d(0, 30%, 0);
    opacity: 0;
}

.mocean-show.slide-in-bottom .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-left .mocean-content {
    transform: translate3d(-30%, 0, 0);
    opacity: 0;
}

.mocean-show.slide-in-left .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-out-bottom .mocean-content {
    transform: translateY(100%);
    opacity: 0;
}

.slide-out-top .mocean-content {
    transform: translateY(-100%);
    opacity: 0;
}

.slide-out-right .mocean-content {
    transform: translateX(100%);
    opacity: 0;
}

.slide-out-left .mocean-content {
    transform: translateX(-100%);
    opacity: 0;
}

.mocean-perspective {
    perspective: 600px;
}

.mocean-show {
    visibility: visible;
}

</style>