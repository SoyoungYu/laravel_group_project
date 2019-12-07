<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
                <div data-layout="_r">
                    <div data-layout="al16">
                        <div class="AP_accordion" role="tablist"> 
                            <div> <!-- 로그인 세션 불러와 넣기 -->
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">생성하기</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                                <div id="member_member1Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원1의 사진, 이름, 한줄소개 -->
                                    <img :src="uploadImageFile" id="member_member1Image"><br />
                                    이름 : <p>{{ user_name }}</p> <!-- 로그인 유저 아이디 -->
                                    소개 : <input type="text" v-model="member_info" placeholder="소개글 작성하기"> <br />
                                    이미지 : <input id="image" type="file" accept="image/*" v-on:change="onImageChange" > <br />
                                    <input type="button" value="생성하기" @click="create" :id="user_name"> <!-- session -->
                                    <input type="button" value="뒤로가기" @click="back">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            member_info : '',
            image : '',
            uploadImageFile : '',
            user_name : this.$route.params.user_name,
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        back() {
            this.$router.push('/member')
        },
        onImageChange(e){ // 이미지 파일 찾아내기
            this.image = e.target.files[0]
            var input = e.target.files;
            var filesArr = Array.prototype.slice.call(input);
            filesArr.forEach((f)=> {
                if(!f.type.match("image.*")) {
                    alert("확장자는 이미지 확장자만 가능합니다.");
                    return;
                }

                var reader = new FileReader();
                reader.readAsDataURL(f);
                reader.onload = (e) => {
                    this.uploadImageFile = e.target.result;
                }
            });
        },
        create(e) { // 생성하기 및 수정하기
            e.preventDefault()
            const config = {
                headers: {
                    contentType: "multipart/form-data", 
                }
            }
            const form = new FormData()
            
            const user_name = e.target.id // ㅇ
            const member_info = this.member_info // ㅇ
            const image = this.image // ㅇ
 
            form.append('member_info', member_info)
            form.append('image', image)
            form.append('user_name', user_name)
            axios.post("/api/member", form, config)
                .then(res =>
                {
                    this.$router.push('/member') 
                    console.log(res.data.error)
                })
                .catch(err => {
                    console.log(err)
            });
        }
    }
}
</script>

<style scoped>
.body {margin-top: 13%;margin-left: 8%;height: auto}
.mem1,
.mem2,
.mem3,
.mem4,
.mem5,
.mem6 {
    width: 100%;
}
#member_member1Image,
#member_member2Image,
#member_member3Image,
#member_member4Image,
#member_member5Image,
#member_member6Image {width: 20%;float: inherit}
#member_member1Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}
#member_member2Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}
#member_member3Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}
#member_member4Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}
#member_member5Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}
#member_member6Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}
#member_member1Hidden input {margin: 1%}
[data-theme*=_bgp1] {
    /* background: url(/image/bird.jpg); */
    background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 70%), url(/image/bird.jpg);
    background-repeat: no-repeat;
    /* background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); */
    color: white;
}
[data-theme*=_bgp2] {
    /* background: url(/image/cat.jpg); */
    background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 70%), url(/image/cat.jpg);
    background-repeat: no-repeat;
    color: white;
}
[data-theme*=_bgp3] {
    /* background: url(/image/tiger.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/tiger.jpg);
    background-repeat: no-repeat;
    color: white;
}
[data-theme*=_bgp4] {
    /* background: url(/image/hed.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/hed.jpg);
    background-repeat: no-repeat;
    color: white;
}
[data-theme*=_bgp5] {
    /* background: url(/image/lion.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/lion.jpg);
    background-repeat: no-repeat;
    color: white;
}
[data-theme*=_bgp6] {
    /* background: url(/image/dog.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/dog.jpg);
    background-repeat: no-repeat;
    color: white;
}
[data-layout=_r] {
    max-width: 100%;
    margin-left: 3%;
    /*margin: 0 auto;*/
    /*    padding: 2rem 1rem;*/
}
[data-layout=_r] > div,
[data-layout=_r] > article,
[data-layout=_r] > aside {
    padding: 0 1rem 1rem 1rem;
}
[data-layout=_r] img {
    height: auto;
}
a.btn,
button {
    background-color: #4d36bd;
    color: white;
    text-decoration: none;
    display: inline-block;
    padding: 1em;
    border-radius: 5px;
    border: none;
    font-family: sans-serif;
    font-size: 1em;
    cursor: pointer;
}
a.btn:hover,
button:hover {
    filter: brightness(1.1);
}
/*Accordion Generic*/
 /*탭 배경사진*/
.AP_accordion_panel {
    overflow: hidden;
    transition: height 0.3s;
    position: relative;
    width: 88%;
}
.AP_accordion_tab {
    width: 88%;
    height: 60px;
    cursor: pointer;
    margin: 0;
    line-height: 1;
    padding-top: 25px;
    font-weight: bold;
    position: relative;
    font-size: 2.8em;
    color: rgba(255, 255, 255, 0.5);
    font-style: oblique; /* italic */
    letter-spacing: -3px;
}
.AP_accordion_tab.open {
    filter: brightness(1.05);
}
.AP_accordion_tab.open:after {
    transform: rotateZ(180deg);
}
.AP_accordion_tab:hover {
    filter: brightness(1.1);
}
.AP_accordion_tab:after {
    position: absolute;
    font-size: 1.4em;
    right: 0;
    /* line-height: 1; */
    top: 0;
    height: 100%;
    width: 88%;
    display: flex;
    align-items: center;
    justify-content: center;
}
/* Accordion1 */
.MOD_ACCORDION1 .AP_accordion {
    margin: 0;
    max-width: 100%;
}
.MOD_ACCORDION1_Intro {
    max-width: 100%;
    margin-bottom: 2rem;
}
</style>
