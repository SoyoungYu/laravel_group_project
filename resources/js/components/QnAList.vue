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
				<tr v-for = "qna in qnas.data" @click="clickQnA(qna)">
					<td>{{ number + (qnas.data.indexOf(qna)+1 )}}</td>
					<td>{{ qna.title }}</td>
					<td>{{ qna.user_id }}</td>
					<td>{{ qna.created_at }}</td>
					<td>{{ qna.view }}</td>
				</tr>
			</tbody>
		</table>
		<pagination :data="qnas" @pagination-change-page="getResults">
			<span slot = "prev-nav">Previous</span>
			<span slot = "next-nav">Next</span>	
		</pagination>
		<router-link to="/qna/create">
			<button id = "new">글쓰기</button>
		</router-link>
    </div>
</template>
<script>
export default {
	data:function(){
		return {
			qnas: {},
			page : 0
		};
	},
	mounted : function(){
		this.getResults();
	},
	methods: {
		clickQnA(qnaObj){
			console.log(qnaObj.id)
			this.$router.push({name : "QnAView", params : {id : qnaObj.id}});
		},
		getResults(page=1){
			axios.get('/api/qna?page=' + page)
			.then(response => {
				this.page = page
				this.qnas = response.data;
			});
		}
	},
	computed : {
		number : function(){
			return ((this.page-1) * 5)
		}
	}
}

</script>

<style>
	.pagination a{
		text-decoration : none;
		color : white;
	}
	.pagination{
		display : inline-block
	}
	.pagination li{
		display : inline
	}


</style>

<style scoped>
.qna_list {
   margin-top: 13%;
   margin-left: 20%;
   margin-right: 20%;
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

.table tbody {
   cursor: pointer;
}

.table th {
   color: #3d3d3d;
   background: #b8b8b8;
   text-align: center;
}

.table th, .table td {
   padding: 3px;
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