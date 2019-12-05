<template>
    <div class="all">
        <form @submit = "postJapan">
            <div class="jpn_contents">
                <p>새로운 내용 입력하기</p>
                <textarea class="form_control2" placeholder="내용"  maxlength="2048"    style="height: 400px; color: #fff" v-model="info"/>
            
                <div class="img_upload">
                    <div>
                        <div class="img_wrap">
                            <img id="img" :src="image" />
                        </div>
                    </div>
                    <div>
                        <input type="file" id="input_img" accept="image/*"  @change="uploadImage($event)" />
                    </div>
                </div>
            </div>
            <button>완료</button>
        </form>
    </div>
</template>
<script>
import { type } from 'os';
export default {
    data :{
        info : '',
        week: '',
        image: '',
    },
    mounted() {
        console.log('Component JpnCreateComponent Vue mounted.')
        console.log(this.$route.params.week)
        this.week = this.$route.params.week
        /* 사진 업로드 시 미리보기 */
        var sel_file;
        var vm = this
        $(document).ready(function() {
            $("#input_img").on("change", handleImgFileSelect);
        });

        function handleImgFileSelect(e) {
            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            vm.image = e.target.files[0]

            this.image = e.target.files[0]
            console.log("image check")
            console.log(this.image)
            filesArr.forEach(function(f) {
                if(!f.type.match("image.*")) {
                    alert("확장자는 이미지 확장자만 가능합니다.");
                    return;
                }

                sel_file = f;

                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img").attr("src", e.target.result);
                }
                reader.readAsDataURL(f);

                function attachements_path($path=''){
                    return public_path('images'+($path ? DIRECTORY_SEPARATOR.$path : $path));
                    //public_pth : 우리 프로젝트의 웹 서버 루트 디렉터리의 절대 경로를 반환하는 함수
                }
            });
        }
    },
    methods:{
        postJapan(e){
            e.preventDefault();
            let currentObj = this;
            console.log(this.info)
            console.log(this.week)
            console.log(this.image)
            let config = {
                headers: {
                    processData: true, 
                    contentType: "multipart/form-data", 
                }
            }
            const form = new FormData()
            const week = this.$route.params.week
            const info = this.info
            const image = this.image

            form.append('_method', 'post')
            form.append('week', week)
            form.append('info', info)
            form.append('image', image)
           
            Axios.post('/api/japan', form, config)
            .then(response=>{
                console.log(response.data.msg)
                this.$router.go(-1)
            })
            .catch(error=>{
                console.log(error)
            })
        },
    }
}
</script>

<style scoped>

    .jpn_contents {
        margin-top: 13%;
    }

    .jpn_contents .form_control2{
        width:600px;
        border: 2px solid #fff;
        background-color: transparent;
        margin-left: 30%;
    }
    
    .jpn_contents p {
        text-align: center; 
        color: #fff; 
        font-size: 20px;
    }

    .img_upload {
        color: #fff;
        text-align: center;
        margin-top: 2%;
    }

    .img_upload input {
        margin-left: 5%;
    }

    #ok_modify {
        color: white;
        background-color: transparent;
        border: 0px;
        border-bottom: 2px solid white;
        font-size: 18px;
        margin-right: 50px;
        cursor: pointer;
        margin-left: 50%;
    }
</style>