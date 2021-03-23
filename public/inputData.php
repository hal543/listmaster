<?php require_once '../common/getData.php';?>
<?php include ( dirname(__FILE__) . '/parts/staff_add/main_header.php' ); ?>


<div class="id-wrapper">
    <div class=csv-input>
        <form action="inputData2.php" method="POST" enctype="multipart/form-data" class="id-form">
            <div class="upload-area">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Drag and drop a file or click</p>
                <input type="file" name="csvfile" id="input-files">
            </div>
            <input type="submit" id="submit-btn" value="送信">
        </form>
    </div>
</div>

<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>