function header(rootDir) {
    $.ajax({
        url: rootDir + "../include/header.html",
        cache: false,
        async: false,
        dataType: 'html',
        success: function (html) {
            html = html.replace(/\{\$root\}/g, rootDir);
            $(".headerContainer").html(html);
        }
    });
}

function footer(rootDir) {
    $.ajax({
        url: rootDir + "../include/footer.html",
        cache: false,
        async: false,
        dataType: 'html',
        success: function (html) {
            html = html.replace(/\{\$root\}/g, rootDir);
            $(".footerContainer").html(html);
        }
    });
}

function sidebar(rootDir) {
    $.ajax({
        url: rootDir + "../include/sidebar.html",
        cache: false,
        async: false,
        dataType: 'html',
        success: function (html) {
            html = html.replace(/\{\$root\}/g, rootDir);
            $(".sidebarContainer").html(html);
        }
    });
}

function headerArchive(rootDir) {
    $.ajax({
        url: rootDir + "../include/headerArchive.html",
        cache: false,
        async: false,
        dataType: 'html',
        success: function (html) {
            html = html.replace(/\{\$root\}/g, rootDir);
            $(".headerArchiveContainer").html(html);
        }
    });
}

//ハンバーガーメニューボタン開閉
$(function () {
    $(".l-header__openBtn").click(function () { //ボタンがクリックされたら
        $(".l-sidebar").addClass("is-active"); //.l-sidebarに.is-activeを付与
        $(".p-overlay-hamburgerMenu").addClass("is-active"); //.l-wrapper__overlayに.is-activeを付与
        $("body").css("overflow", "hidden"); //bodyにoverflow: hidden;を指定 //position:fixed;でもOK
    });
});

$(function () {
    $(".p-sideMenu__closeBtn").click(function () { //ボタンがクリックされたら
        $(".l-sidebar").removeClass("is-active"); //.l-sidebarの.is-activeを削除
        $(".p-overlay-hamburgerMenu").removeClass("is-active"); //.l-wrapper__overlayの.is-activeを削除
        $("body").css("overflow", ""); //bodyからoverflow: hidden;を解除
    });
});


