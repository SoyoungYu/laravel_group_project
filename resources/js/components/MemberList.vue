<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
                <div data-layout="_r">
                    <div data-layout="al16">
                        <div class="AP_accordion" role="tablist">
                            <div v-for="member in members" :key="member.id"> <!-- 반복문 v-for 조원 생성 -->
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0"> {{ member.id }}. {{ member.user.name }}</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                                <div id="member_member1Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원1의 사진, 이름, 한줄소개 -->
                                    <img :src="'images/'+member.imagename" id="member_member1Image" alt="조원사진"><br />
                                    이름 : <p id="member_member1Name"> {{ member.user.name }}</p>
                                    소개 : <p id="member_member1Intro"> {{ member.member_info }}</p>
                                    <div> <!-- lv이 2인 관리자만 보이게 만들기 session 필요 또한 자기것만 보이게 -->
                                    <input @click="update" type="button" value="수정하기" :id="member.id">
                                    <input @click="destroy" type="button" value="삭제하기" :id="member.id">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- lv이 2인 관리자만 보이게 만들기 session 필요 -->
                            <p @click="create" class="AP_accordion_tab" role="tab" data-theme="_bgp2" tabindex="0" id="1">생성하기</p> <!-- 로그인 유저 아이디 -->
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
            members:{},
            lv: 2,
        }
    },
    mounted() {
        Axios.get("/api/member")
        .then(res => 
        {
            this.members=res.data.member
        })
        .catch(err=> {
            console.log(err)
        });    
    },
    methods: {
        create(e) {
            let id = e.target.id
            this.$router.push({name: 'MemberCreate', params: {"user_id" : id}}) // 로그인 아이디 필요
        },
        update(e) {
            let id = e.target.id
            this.$router.push({name: 'MemberUpdate', params: {"user_id" : id}})
        },
        destroy(e) {
            let id = e.target.id
            axios.delete(`/api/member/${id}`)
                .then(res =>
                {
                    this.members=res.data.member
                    console.log(res.data.member)
                })
                .catch(err => {
                console.log(err)
            })
        }
    }
}
</script>