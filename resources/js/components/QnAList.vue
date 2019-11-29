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