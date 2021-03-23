<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_header.php' ); ?>

<div class="sa_main">
    <div class="sa_title">
        <p class="sa_title1">ユーザー登録ページ</p>
        <p2 class=sa_title2>ご登録内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p2>
    </div>
   <form method="post" action="staff_add_check.php">
                <table class="sa_table">

                    <tr>
                        <th>事業部</th>
                        <td>
                        <select name="business_unit">
                            <option value="第一営業部">第一営業部</option>
                            <option value=第二営業部>第二営業部</option>
                            <option value=第二営業部>第三営業部</option>
                        </select>
                        </td>
                    </tr>

                    <tr>
                        <th>名前</th>
                        <td><input name="name" type="text" placeholder="伍用　涼佑" required></td>
                    </tr>

                    <tr>
                        <th>パスワード</th>
                        <td><input name="pass" type="password" required></td>
                    </tr>

                    <tr>
                        <th>パスワード（再入力）<span>※必須</span></th>
                        <td><input name="repass" type="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="reset" value="リセット" class="ua-re">
                            <input type="submit" value="送信" class="ua-sub">
                        </td>
                    </tr>
                </table>
    </form>

    <?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_footer.php' ); ?>
