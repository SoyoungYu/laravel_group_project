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
                                    이름 : <p>하잇!</p> <!-- 로그인 유저 아이디 -->
                                    소개 : <input type="text" v-model="member_info" placeholder="소개글 작성하기"> <br />
                                    이미지 : <input id="image" type="file" v-on:change="onImageChange"> <br />
                                    <input type="button" value="생성하기" @click="create" id="1"> <!-- session -->
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
            class : '',
            uploadImageFile : ''
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
            var input = e.target;
            if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);

                reader.onload = (e) => {
                    this.uploadImageFile = e.target.result; // 로컬 이미지 보여주기 

                }
            }
        },
        create(e) { // 생성하기 및 수정하기
            e.preventDefault()
            let config = {
                headers: {
                    contentType: "multipart/form-data", 
                }
            }

            const form = new FormData()
            
            const id = e.target.id // ㅇ
            const member_info = this.member_info // ㅇ
            const image = this.image // ㅇ
 
            form.append('id', id)
            form.append('member_info', member_info)
            form.append('image', image)

            axios.post("/api/member", form, config)
                .then(res =>
                {
                    this.$router.push('/member') 
                })
                .catch(err => {
                console.log(err)
            });
        }
    }
}
</script>