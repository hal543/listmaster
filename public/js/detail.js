$(function () {
    $('.header_data').hover(
        function () {
          $(this).find('.header_data_content').addClass("text-active");
        },
        function () {
          $(this).find('.header_data_content').removeClass("text-active");
        }
        
      );

    //都道県検索
    $('.dr_hk_menu').hover(
      function () {
        $(this).find('.menu_second_level').addClass("text-active");
      },
      function () {
        $(this).find('.menu_second_level').removeClass("text-active");
      }
    );

  $('.dr_th_menu').hover(
    function () {
      $(this).find('.th_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.th_second_level').removeClass("text-active");
    }
  );

  $('.dr_kt_menu').hover(
    function () {
      $(this).find('.kt_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.kt_second_level').removeClass("text-active");
    }
  );

  $('.dr_tb_menu').hover(
    function () {
      $(this).find('.tb_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.tb_second_level').removeClass("text-active");
    }
  );

  $('.dr_kk_menu').hover(
    function () {
      $(this).find('.kk_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.kk_second_level').removeClass("text-active");
    }
  );

  $('.dr_tg_menu').hover(
    function () {
      $(this).find('.tg_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.tg_second_level').removeClass("text-active");
    }
  );

  $('.dr_sk_menu').hover(
    function () {
      $(this).find('.sk_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.sk_second_level').removeClass("text-active");
    }
  );

  $('.dr_ks_menu').hover(
    function () {
      $(this).find('.ks_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.ks_second_level').removeClass("text-active");
    }
  );

  $('.dr_ks_menu').hover(
    function () {
      $(this).find('.ks_second_level').addClass("text-active");
    },
    function () {
      $(this).find('.ks_second_level').removeClass("text-active");
    }
  );

//都道府県クリック時アクション
  $('.dr_cg_title').on('click', () => {
    $('.dr_cg_list').toggle('slow');
    });

//都道府県チェックボックス処理
    $('input[name="prefecture[]"]').change(function() {
 
        var prefectures = [];
        $('input[name="prefecture[]"]:checked').each(function() {
            prefectures.push($(this).val());
     
        });
     
        // 格納した配列を表示
        $('.select-prefecture').text(prefectures);
        $('#select-prefecture').val(prefectures);
      });
    

  //業種別チェックボックス処理
  $('input[name="industry[]"]').change(function() {
 
    var industries = [];
    $('input[name="industry[]"]:checked').each(function() {
      industries.push($(this).val());
 
    });
 
    // 格納した配列を表示
    $('#p01').text(industries);
 
  });

 

});
