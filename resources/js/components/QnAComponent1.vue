<template>
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
				<tr>
					<td>3</td>
					<td>ㅇㅇdddddd</td>
					<td>글쓴이</td>
					<td>2019/11/20</td>
					<td>1234</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td align="center" colspan="5">1</td>
				</tr>
			</tfoot>
		</table>
		<input type="button" id = "submit_question" value="글쓰기">
    </div>
</template>
<script>
export default {
    mounted() {
            console.log('Component mounted.')
        }
}
</script>