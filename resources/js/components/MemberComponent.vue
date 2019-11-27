<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
                <div data-layout="_r">
                    <div data-layout="al16">
                        <div class="AP_accordion" role="tablist">
                            <!-- 있는 조원 목록 -->
                            <div v-for="member in members" :key="member"> 
                            <p id="memberid" class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">{{member.user.id}}. {{member.user.name}}</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                                <div v-if="modifymember == 0" id="member_memberHidden"> <!-- 탭 클릭 시 상세 내용 -->
                                    <p>{{member.user.id}} 번째 조원소개 목록</p> 
                                    이름 : <p id="member_memberName"> {{ member.user.name }}</p>
                                    소개 : <p id="member_memberIntro"> {{ member.member_info }}</p>
                                    <input @click="modifybuttonbefore" type="button" value="수정" :id="member.id">
                                    <input @click="deletebutton" type="button" value="삭제" :id="member.id">
                                </div>
                                <div v-if="modifymember"> <!-- 수정판 -->
                                    내용 : <input type="text" v-model="vmember_info_modify"> <br />
                                    이미지 : <input type="text" v-model="vimage_modify" /> <br />
                                    <button @click="modifybuttonafter" :id="member.id">수정하기</button>
                                    <button @click="back">뒤로가기</button>
                                </div>
                            </div>
                            </div>
                            <!-- 조원 생성하기 -->
                            <div>
                            <p class="AP_accordion_tab" role="tab" data-theme='_bgp2' tabindex="0">생성하기</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                내용 : <input type="text" v-model="vmember_info_create"> <br /> 
                                이미지 : <input type="text" v-model="vimage_create"> <br />
                                <button @click="createbutton" type="button" :id="1">생성하기</button> <!-- id에 세션값 넣어야 됨 -->
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

export default { // export default는 다른 파일의 있는 내용을 참조해오기 위한 방식
    data() { // data속성을 함수 로 선언 => 아니면 반응 안한다.
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
        back() { // 뒤로가기
            this.modifymember = 0;
        },
        createbutton(e) { // 생성하기
            let config = {
                headers: {
                    "x-api-key": "YOUR_API_KEY"
                }
            }
            const id = e.target.id;
            const member_info = this.vmember_info_create;
            const image = this.vimage_create;
            axios.post("/members/create", {'id':id,'member_info': member_info, 'image': image}, config)
                .then(res =>
                {
                    this.members = res.data.member;
                })
                .catch(err => {
                console.log(err);
            });
        },
        modifybuttonbefore(e) { // 수정하기 전
            this.modifymember = e.target.id;
        },
        modifybuttonafter(e) { // 수정하기 후
            let config = {
                headers: {
                    "x-api-key": "YOUR_API_KEY"
                }
            }
            const modifymember = 0;
            const member_info = this.vmember_info_modify;
            const image = this.vimage_modify;
            const id = e.target.id;
            axios.patch("/members/update/"+id, {'member_info': member_info, 'image': image, 'modifymember': modifymember}, config)
            .then(res => {
                this.modifymember = res.data.modifymember;
                this.members = res.data.member;
                // console.log(res.data.modifymember);
            })
            .catch(err => {
                console.log(err);
            });
        },
        deletebutton(e) { // 삭제하기
            let id = e.target.id;
            axios.delete('/members/delete/' + id)
                .then(res =>
                {
                    this.members = res.data.member;
                })
                .catch(err => {
                console.log(err)
            })
        }
    }
}
</script>