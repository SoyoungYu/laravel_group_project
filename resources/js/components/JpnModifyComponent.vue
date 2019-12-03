<template>
    <div class="all">
        <div class="jpn_contents">
            <p>내용 수정하기</p>
            <textarea class="form_control2" placeholder="내용"  maxlength="2048" style="height: 400px; color: #fff"/>
        </div>
        <div class="img_upload">
            <div>
                <div class="img_wrap">
                    <img id="img" />
                </div>
            </div>
            <div>
                <input type="file" id="input_img" />
            </div>
        </div>
        <input type="button" value="완료" id="ok_modify"/>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log('Component mounted.')

        /* 사진 업로드 시 미리보기 */
        var sel_file;

        $(document).ready(function() {
            $("#input_img").on("change", handleImgFileSelect);
        });

        function handleImgFileSelect(e) {
            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);

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
            });
        }
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