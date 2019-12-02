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
		<button id="new">글쓰기</button>
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
.qna_list {
	margin-top: 13%;
	margin-left: 20%;
	margin-right: 20%;
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
    width: 100%;
	height: 100px;
	background-color: transparent;
	color: #fff;
	border-collapse: collapse;
	border-top: 3px solid #3d3d3d;
	border-left: 0px transparent;
	border-right: 0px transparent;
}

.table th {
	color: #3d3d3d;
	background: #b8b8b8;
	text-align: center;
}

.table th, .table td {
	padding: 7px;
	border: 1px solid #ddd;
}

.table th:first-child, .table td:first-child {
	border-left: 0;
}

.table th:last-child, .table td:last-child {
	border-right: 0;
}

.table tr td:first-child {
	text-align: center;
}

.table caption {caption-side: bottom; display: none;}

#new {
	cursor: pointer;
    color: white;
    background-color: transparent;
    border: 0px;
	border-bottom: 2px solid white;
	float: right;
	font-size: 15px;
	margin-top: 1%;
}

</style>