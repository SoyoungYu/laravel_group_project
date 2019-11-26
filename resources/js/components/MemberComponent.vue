<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
                <div data-layout="_r">
                    <div data-layout="al16">
                        <div class="AP_accordion" role="tablist">
                            <!-- 있는 조원 목록 -->
                            <div v-for="member in members" :key="member"> 
                            <p id="memberid" class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">{{member.id}}. {{member.user.name}}</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                                <div v-if="modifymember == 0" id="member_memberHidden"> <!-- 탭 클릭 시 상세 내용 -->
                                    이름 : <p id="member_memberName"> {{ member.user.name }}</p>
                                    소개 : <p id="member_memberIntro"> {{ member.member_info }}</p>
                                    <input @click="modifybuttonbefore" type="button" value="수정" :id="member.id">
                                    <input @click="deletebutton" type="button" value="삭제" :id="member.id">
                                </div>
                                
                                <div v-if="member.id == modifymember" id="member_memberHidden"> <!-- 수정판 -->
                                <form method="post" enctype="multipart/form-data">
                                    내용 : <input type="text" name="member_info" :value="member.member_info"> <br />
                                    이미지 : <input type="text" name="image" :value="member.image"> <br />
                                    <input @click="modifybuttonafter" type="button" value="수정완료">
                                    <input @click="deletea" type="button" value="뒤로가기">
                                </form>
                                </div>
                            </div>
                            </div>
                            <!-- 조원 생성하기 -->
                            <div v-if="number <= 6">
                            <p class="AP_accordion_tab" role="tab" data-theme='_bgp2' tabindex="0">생성하기</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                            <form method="post" enctype="multipart/form-data">
                                내용 : <input type="text" name="member_info"> <br />
                                이미지 : <input type="text" name="image"> <br />
                                <input @click="createbutton" type="button" value="생성하기" id="member_memberCreate"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                            </form>  
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
import vueResource from 'vue-resource'

export default {
    data() {
        return {
            members:{}, // 멤버 정보
            number: '', // 멤버 숫자 
            modifymember: 0 // 상세 및 수정
        }
    },
    mounted() { // 처음 목록 가져오기
        axios.get("/members/fetch")
        .then(res => 
        {
            this.members=res.data.member
            this.number=res.data.member.length
        })
    },
    methods: {
        createbutton(e) { // 생성하기
            axios.post("/members/create/", {})
                .then(res =>
                {
                    console.log("성공!!")
                }
            )
        },
        modifybuttonbefore(e) { // 수정하기 전
            this.modifymember = e.target.id;
            console.log(e.target.id);
            console.log(this.modifymember);
        },
        modifybuttonafter(e) { // 수정하기 후
            this.modifymember = 0;
            axios.put("/members/update/", {'member_info': e.target.member_info.name , 'image': e.target.image.name})
                .then(res =>
                {
                    console.log("성공!!")
                }
            )
        },
        deletebutton(e) { // 삭제하기
            var id = e.target.id;
            axios.delete('/members/delete/' + id)
                .then(res =>
                {
                    console.log(res.data);
                })
                .catch(err => {
                console.log(err)
            })
        }
    }
}

</script>