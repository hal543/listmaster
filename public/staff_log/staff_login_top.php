<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_header.php' ); ?>

<div class="slt-wrapper">
	<div class="slt-content1">
        <div class="slt-content2">
            <p class="slt-text1">スタッフログイン</p>
            <form method="post" action="staff_login_check.php">
                <div class="slt-detail1">
                    <span class="slt-text2">名前</span>
                    <input type="text" name="name" class="M">
                </div>
            
                <div class="slt-detail2">
                    <span class="slt-text3">パスワード</span>
                    <input type="pass" name="pass" class="M">
                </div>
    
                <div class="slt-detail3">
                    <input type="submit" value="ログイン" class="slt-submit">
                </div>
        </div>
                    <div class="slt-detail4">
                        <a href="../staff_add/staff_add.php" class="slt-submit2">アカウントをお持ちでない方はこちら</a>
                    </div>

                    <div class="slt-detail5">
                        <a href="" class="slt-submit3">アカウント・パスワードを忘れた方はこちら</a>
                    </div>
  
            </form> 
    </div>
</div>


<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_footer.php' ); ?>