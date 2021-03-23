<?php require_once 'common/getData.php';
$free_word=filter_input(INPUT_POST, 'free_word', FILTER_SANITIZE_SPECIAL_CHARS);
$free_results=getListFreeWord($free_word);

session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
	print 'ログインされていません。<br />';
	print '<a href="seller_login.html">ログイン画面へ</a>';
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1024" />
	<title>listMaster_スタッフページ</title>
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
	<script src="/public/js/detail.js"></script>
</head>

<div class="wrap">
<body>
<div class="header">
    <div class="header-container">
      	<div class="header-left">
        	<a href="listmaster_top.php"><img src="public/pic/logo.png" class="logo"></a>
      	</div>
      	<div class="header-right">
        	<ul style="list-style: none;" class="header-right-content">
        		<li><a href="public/staff_log/staff_logout.php">ログアウト</a></li>
        		<li><a href="public/seller_chat/seller_chat_top.php">設定</a></li>
				<li><a href="public/detail_research.php">詳細検索</a></li>
				<li><a href="public/inputData.php">データ登録</a></li>
			</ul>
		</div>
  	</div>
</div>

<div class="main-wrapper">
    <div class=search-content>
        <form id="form1" action="listmaster_top.php" method="post">
			<input class="sbox2"  id="s" name="free_word" type="text" placeholder="フリーキーワード"/>
			<button type="submit" class="sbtn2"><i class="fas fa-search"></i></button>
		</form>
    </div>

    <div class="csvButton-main">
        <div class="csvButton-main">
            <form method="post" action="public/output.php">
                <input type="hidden" name="freeword" value="<?= $free_word ?>">
                <span><input type="submit" value="CSV出力" class=csvButton></span>
            </form>
        </div>
    </div>

    <div class="table-main">
        <div class="table-wrapper">
            <div>
            <table class="fs-table" border="1" style="border-collapse: collapse">
            <tr class="fs-tr">
                <th class="fs-th">No</th>
                <th class="fs-th">企業名</th>
                <th class="fs-th">電話番号</th>
                <th class="fs-th">FAX番号</th>
                <th class="fs-th">メールアドレス</th>
                <th class="fs-th">都道府県</th>
                <th class="fs-th">住所</th>
                <th class="fs-th">代表取締役</th>
                <th class="fs-th">WEB</th>
                <th class="fs-th">設立年月日</th>
                <th class="fs-th">資本金</th>
                <th class="fs-th">売上高</th>
                <th class="fs-th">従業員数</th>
                <th class="fs-th">業種</th>
                <th class="fs-th">禁止先</th>
            <tr>
            
            <div class="result_top">
            <?php foreach($free_results as $free_result): ?>
                <tr class="fs-tr">
                    <td class="fs-td"><?= $free_result['id']?></td>
                    <td class="fs-td"><?= $free_result['corp_name']?></td>
                    <td class="fs-td"><?= $free_result['phone']?></td>
                    <td class="fs-td"><?= $free_result['fax']?></td>
                    <td class="fs-td"><?= $free_result['mail']?></td>
                    <td class="fs-td"><?= $free_result['prefectures']?></td>
                    <td class="fs-td"><?= $free_result['address']?></td>
                    <td class="fs-td"><?= $free_result['name']?></td>
                    <td class="fs-td"><?= $free_result['web']?></td>
                    <td class="fs-td"><?= $free_result['establishment']?></td>
                    <td class="fs-td"><?= $free_result['capital']?></td>
                    <td class="fs-td"><?= $free_result['revenue']?></td>
                    <td class="fs-td"><?= $free_result['employee']?></td>
                    <td class="fs-td"><?= $free_result['industry']?></td>
                    <td class="fs-td"><?= $free_result['no_call']?></td>
                    <td class="fs-edit">
                        <a href ="public/listDetail.php?list_id=<?=$free_result['id'];?>" class=detailButton>
                                <button class="fs-edit-1">詳細</button>
                        </a>
                    </td>
                </tr>
            </div>
            <?php endforeach?>
            </table>
        </div>
    </div>

</div>

<?php include ( dirname(__FILE__) . 'public/parts/staff_add/main_footer.php' ); ?>