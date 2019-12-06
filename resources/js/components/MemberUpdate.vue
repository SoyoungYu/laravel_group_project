<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
                <div data-layout="_r">
                    <div data-layout="al16">
                        <div class="AP_accordion" role="tablist"><!-- 로그인 세션 아이디 점검 -->
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">수정하기</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                                <div id="member_member1Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원1의 사진, 이름, 한줄소개 -->
                                    <img :src="'/images/'+member.imagename" id="member_member1Image"><br />
                                    이름 : <p>{{ member.user.name }}</p>
                                    소개 : <input type="text" v-model="member_info" :placeholder="member.member_info"> <br />
                                    이미지 : <input type="file" v-on:change="onImageChange" :id="member.id"> <br />
                                    <input type="button" value="수정하기" @click="update">
                                    <input type="button" value="뒤로가기" @click="back">
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
            member : { user :{ name : '로딩중' }, imagename : '로딩중', member_info : '로딩중' }, // 시간차 렌더
            member_info : '',
            image :'',
        }
    },
    mounted() {
        const user_id = this.$route.params.user_id;
        Axios.get(`/api/member/${user_id}`)
        .then(res => 
        {
            this.member=res.data.member[0]
        })
        .catch(err=> {
            console.log(err)
        });   
    },
    methods: {
        back() {
            this.$router.push('/member')
        },
        update(e) {
            let config = {
                headers: {
                    processData: true, 
                    contentType: "multipart/form-data", 
                }
            } 

            const form = new FormData()
            const id = this.$route.params.user_id
            const member_info = this.member_info
            const image = this.image
            form.append('_method', 'patch')
            form.append('id', id)
            form.append('member_info', member_info)
            form.append('image',image)

            Axios.post(`/api/member/${id}`, form, config)
            .then(res => {
                this.$router.push('/member')
            })
            .catch(err => {
                console.log(err)
            });
        },
        onImageChange(e){ // 이미지 파일 찾아내기
            this.image = e.target.files[0]
            console.log(e.target.files[0])
        }
    }
}
</script>