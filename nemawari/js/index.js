// ハンバーガーメニュー　クラス付与
$(function(){
    $('.nav_toggle').on('click', function () {
        $('.nav_toggle,.nav,.nav2').toggleClass('show');
    });
});

// サイドバー　snsアイコンfooter時色変更
$(function(){
    let snsBlack = $(".sns-black");
    let snsWhite = $(".sns-white");
    let footer = $("footer");

    $(window).on("load scroll", function(){
        // footer要素が画面内に表示されているかどうかを検出
        if (isElementInViewport(footer)) {
            snsBlack.removeClass("active");
            snsWhite.addClass("active");
        } else {
            snsBlack.addClass("active");
            snsWhite.removeClass("active");
        }
    });

    // 要素が画面内に表示されているかを判定する関数
    function isElementInViewport(el) {
        let rect = el[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= $(window).height() &&
            rect.right <= $(window).width()
        );
    }
});

// careerページ　ABOUTへ戻るボタン処理
$(function(){
    let btn = $(".about-back");

    $(window).on("load scroll",function(){
        if($(this).scrollTop() > 100){
            btn.addClass("active");
        }else{
            btn.removeClass("active");
        }
    })
});

//******** フェードインアニメーション    *********
// トップページ　タイトルアニメーション
$(function(){
    //  distance:距離　、 duration:速さ、interval：個別に出てくる表示速度変える
    ScrollReveal({ reset: false, distance: "100px",duration: 2000 });
    // delay:表示の速度、開始: origin, 
    ScrollReveal().reveal('.name,.site-t', { delay: 700, origin: "bottom" });
});
$(function(){
    // mainvisual img
    ScrollReveal({ reset: false, distance: "100px",duration: 5000 });
    ScrollReveal().reveal('.top-img', { delay: 400,origin: "bottom" });
})

$(function(){
    // トップ　sec-t worksのみ 
    ScrollReveal({ reset: false, distance: "300px",duration: 2000 });
    ScrollReveal().reveal('#work', { delay: 350,origin: "bottom" });
})

// $(function(){
//     // トップ　sec-t 
//     ScrollReveal({ reset: false, distance: "100px",duration: 1800 });
//     ScrollReveal().reveal('.sec-t', { delay: 250,origin: "bottom" });
// })

$(function(){
    ScrollReveal({ reset: false, distance: "100px",duration: 1800 });
    ScrollReveal().reveal('#about,#skill,#info,#works,.detail-wrap', { delay: 250,origin: "bottom" });

})

//******** キャリアページ    *********
$(function(){
    // ルーズリーフ　フェードイン 
    ScrollReveal({ reset: false, distance: "100px",duration: 1800 });
    ScrollReveal().reveal('.career1', { delay: 450,origin: "bottom" });
})