<template id = "qna-lists">
	 <div class="qna_list">
		<table class="table" border="2">
			<colgroup>
				<col width="50" />
				<col width="500" />
				<col width="100" />
				<col width="100" />
				<col width="90" />
			</colgroup>
			<thead>
				<tr>
					<th>번 호</th>
					<th>제 목</th>
					<th>글쓴이</th>
					<th>날짜</th>
					<th>조회수</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for = "qna in qnas">
					<td>{{ qna.id }}</td>
					<td>{{ qna.title }}</td>
					<td>{{ qna.user_id }}</td>
					<td>{{ qna.create_at }}</td>
					<td>{{ qna.view }}</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td align="center" colspan="5">1</td>
				</tr>
			</tfoot>
		</table>
		<button>생성하기</button>
    </div>
</template>
<script>
export default {
	data:function(){
		return {
			qnas: '',
			length : ''
		};
	},
	mounted : function(){
		Axios.get('/QnA/fetch')
		.then((response) => {
			this.qnas = response.data.qnas;
			this.length = response.data.qnas.length
		})
		.catch(error => {
			console.log(error);
		});
	},
	computed : {
		qnas : function(){
			if(this.length){
				return this.qnas;
			}
		}
	}
}

</script>

<style scoped>
.navi {
    width: 550px;
    margin: 0 auto;
    position: relative;
}

.navi #navibar {
    border-bottom: 2.5px solid black;
    padding-left: 20%;
}

#navibar a {
    text-decoration: none;
    color: black;
    padding-right: 12%;
}
.footer {
    margin-top: 180px;
    margin-bottom: 40px;
}
.footer #foot {
    text-align: center;
}

.container{
    
    display: flex;
    margin-top: 50px;
    width: 100%;

}
.item1{
    flex-basis:15%;

}
.item2{
    flex-basis:70%;
}
.item3{
    flex-basis:15%;
}
.table{
    text-align: center;
    width: 100%;
    height: 100px;
    background-color: blanchedalmond;
}

</style>