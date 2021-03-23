<?php require_once '../common/getData.php';?>
<?php include ( dirname(__FILE__) . '/parts/staff_add/main_header.php' ); ?>

<?php
$id=$_GET['list_id'];
$id_lists = getListId($id);
foreach($id_lists as $id_list){};

?>

<div class="ld-main">
    <div class="ld-content">
        
        <div class="ld-part">
            <span class="ld-p1">企業名：</span>
            <span class="ld-p2"><?= $id_list['corp_name']?></span>
                <div class="ld-p3">
                    <form action="./edit_list/edit_corp.php" method="post">
                        <span><input type="text" name="corp_name" placeholder="変更内容を入力してください" class="ld-p4"></span>
                        <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                        <span><input type="submit" value="決定" class="ld-p5"></span>              
                    </form>
                </div>
        </div>
   
        <div class="ld-part">
            <span class="ld-p1">電話番号：</span>
            <span class="ld-p2"><?= $id_list['phone']?></span>
            <div class="ld-p3">
                <form action="./edit_list/edit_phone.php" method="post">
                    <span><input type="text" name="phone" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">FAX番号：</span>
                <span class="ld-p2"><?= $id_list['fax']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_fax.php" method="post">
                    <span><input type="text" name="fax" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">メールアドレス：</span>
                <span class="ld-p2"><?= $id_list['mail']?></span>
            <div class="ld-p3">
                <form action="./edit_list/edit_mail.php" method="post">
                    <span><input type="text" name="mail" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">都道府県：</span>
                <span class="ld-p2"><?= $id_list['prefectures']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_prefectures.php" method="post">
                    <span><input type="text" name="prefectures" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">住所：</span>
                <span class="ld-p2"><?= $id_list['address']?></span>
            <div class="ld-p3">
                <form action="./edit_list/edit_address.php" method="post">
                    <span><input type="text" name="address" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">代表取締役：</span>
                <span class="ld-p2"><?= $id_list['name']?></span>
            <div class="ld-p3">
                <form action="./edit_list/edit_name.php" method="post">
                    <span><input type="text" name="name" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">WEB：</span>
                <span class="ld-p2"><?= $id_list['web']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_web.php" method="post">
                    <span><input type="text" name="web" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">設立年月日：</span>
                <span class="ld-p2"><?= $id_list['establishment']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_establishment.php" method="post">
                    <span><input type="text" name="establishment" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">資本金：</span>
                <span class="ld-p2"><?= $id_list['capital']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_capital.php" method="post">
                    <span><input type="text" name="capital" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">売上高：</span>
                <span class="ld-p2"><?= $id_list['revenue']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_revenue.php" method="post">
                    <span><input type="text" name="revenue" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">従業員数：</span>
                <span class="ld-p2"><?= $id_list['employee']?></span>
                <div class="ld-p3">
                <form action="./edit_list/edit_employee.php" method="post">
                    <span><input type="text" name="employee" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>

        <div class="ld-part">
                <span class="ld-p1">業種：</span>
                <span class="ld-p2"><?= $id_list['industry']?></span>
            <div class="ld-p3">
                <form action="./edit_list/edit_industry.php" method="post">
                    <span><input type="text" name="industry" placeholder="変更内容を入力してください" class="ld-p4"></span>
                    <span><input type="hidden" name="id" value="<?= $id_list['id'] ;?>"></span>
                    <span><input type="submit" value="決定" class="ld-p5"></span>
                </form>
            </div>
        </div>
    </div>

    <div class="out">
        <div class="out-content">
        <div class="out-1">
            <span>禁止登録</span>
        </div>
        <div class="delete-1">
            <span>削除</span>
        </div>
        </div>
    </div>

    <div class="ld-content-right">
        <p>履歴</p>
    </div>
</div>

<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>