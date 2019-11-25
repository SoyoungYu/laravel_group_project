<head>
<link rel="stylesheet" type="text/css" href="{{ asset('QnACSS2.css') }}" >
<div class="navi">
        <div id="navibar">
            <a>조원소개</a>
            <a>현지학기제</a>
            <a>QnA</a>
        </div>
    </div>
</head>

<body>
<div class="container">
<div class="item1"></div>
		<div class="item2">

			<form>

				<table

					style="text-align: center; border: 1px solid #dddddd">

					<thead>

						<tr>

							<th colspan="2"

                                style="background-color: #eeeeee; text-align: center;">게시판 글쓰기 양식
                            </th>

						</tr>

					</thead>

					<tbody>

						<tr>
							<td><input type="text" class="form_control" placeholder="제목"  maxlength="100"/></td>
							<td>글쓴이 <input type ="text" name="글쓴이"/></td>
						</tr>

						<tr>
							<td><textarea class="form_control2" placeholder="내용"  maxlength="2048" style="height: 400px;" ></textarea></td>
						</tr>
					</tbody>
				</table>	
				<input type="submit" value="완료" />
                <input type="button" value="취소"/>
			</form>

		</div>
		<div class="item3"></div>
	</div>

</body>
<div class="footer">
        <div id="foot">Copyright 2019.infinite.All rights reserved. </div>
    </div>