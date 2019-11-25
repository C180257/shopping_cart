<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>課題・商品検索アプリケーション</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />
</head>

<body id="products" class="list">
	<header>
		<h1>商品検索アプリケーション</h1>
	</header>

	<main>
	    <div>
		<article id="result">
			<h2>商品検索 - 検索結果</h2>
			<section>
				<h3>商品一覧</h3>
	        <?php
	        
	        if ($_GET["category"] == "book") {
	           echo '
	           <table id="book">
					<caption><a href="entry.html" id="book">検索画面に戻る</a>    <a href="../cart.php">カートの中身を見る</a></caption>
					<tr>
						<th>書籍名</th>
						<th>価格</th>
						<th>著者</th>
						<th>ISBN</th>
						<th></th>
					</tr>
					<tr>
						<td>Head First PHP & MySQL</td>
						<td>4,650</td>
						<td>Lynn Beighley</td>
						<td>978-4873114446</td>
						<td><a href="cart.html?id=0">カートに入れる</a></td>
					</tr>
					<tr>
						<td>リーダブルコード</td>
						<td>2,600</td>
						<td>Dustin Boswell</td>
						<td>978-4873115658</td>
						<td><a href="cart.html?id=1">カートに入れる</a></td>
					</tr>
					<tr>
						<td>Head First デザインパターン</td>
						<td>5,060</td>
						<td>Eric Freeman</td>
						<td>978-4873112497</td>
						<td><a href="cart.html?id=2">カートに入れる</a></td>
					</tr>
					<tr>
						<td>PHPによるデザインパターン入門</td>
						<td>2,400</td>
						<td>下岡 秀幸</td>
						<td>978-4798015163</td>
						<td><a href="cart.html?id=3">カートに入れる</a></td>
					</tr>
				</table>
	           ';
	        } else {
	         echo '
	          <table id="dvd">
					<caption><a href="entry.html">検索画面に戻る</a>　カートの中身を見る</caption>
					<tr>
						<th>タイトル</th>
						<th>価格</th>
						<th>収録時間</th>
					</tr>
					<tr>
						<td>The next</td>
						<td>500円</td>
						<td>114分</td>
					</tr>
					<tr>
						<td>Start wars:Force Awakens</td>
						<td>2800円</td>
						<td>150分</td>
					</tr>
					<tr>
						<td>outbreak</td>
						<td>900円</td>
						<td>129分</td>
					</tr>
					
			
				</table>
				';
	        }
	        
	        
	        ?>
	    </div>
	    

			</section>
		</article>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
</body>

</html>