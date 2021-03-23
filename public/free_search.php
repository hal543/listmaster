<?php require_once '../common/getData.php';?>
<?php include ( dirname(__FILE__) . '/parts/staff_add/main_header.php' ); ?>

<?php

$free_word=filter_input(INPUT_POST, 'free_word', FILTER_SANITIZE_SPECIAL_CHARS);
$free_results=getListFreeWord($free_word);
?>


<div class="table-main">
    <div class="table-wrapper">
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
        <tr>
    
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
            </tr>
		<?php endforeach?>
        </table>
    </div>
</div>



<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>