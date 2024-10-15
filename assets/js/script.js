//ハンバーガーメニューボタン開閉

jQuery(document).ready(function($){
    $(".l-header__openBtn").click(function () { //ボタンがクリックされたら
        $(".l-sidebar").addClass("is-active"); //.l-sidebarに.is-activeを付与
        $(".p-overlay-hamburgerMenu").addClass("is-active"); //.l-wrapper__overlayに.is-activeを付与
        $("body").css("overflow", "hidden"); //bodyにoverflow: hidden;を指定 //position:fixed;でもOK
    });
});

jQuery(document).ready(function($){
    $(".p-sideMenu__closeBtn").click(function () { //ボタンがクリックされたら
        $(".l-sidebar").removeClass("is-active"); //.l-sidebarの.is-activeを削除
        $(".p-overlay-hamburgerMenu").removeClass("is-active"); //.l-wrapper__overlayの.is-activeを削除
        $("body").css("overflow", ""); //bodyからoverflow: hidden;を解除
    });
});
