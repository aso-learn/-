// //下载器广告
// $(function () {
//     function withJQ(callback) {
//         if (typeof jQuery === 'undefined') {
//             var cdjs = document.createElement("script");
//             var requestHandler = "//data.71xe.com/script/jquery.min.js";
//             cdjs.src = requestHandler;
//             cdjs.type = "text/javascript";
//             cdjs.onload = cdjs.onreadystatechange = function () {
//                 if (!this.readyState || this.readyState === 'loaded' || this.readyState === 'complete') {
//                     jQuery.noConflict();
//                     if (callback && typeof callback === "function") {
//                         callback()
//                     }
//                     cdjs.onload = cdjs.onreadystatechange = null
//                 }
//             };
//             document.getElementsByTagName('head')[0].appendChild(cdjs)
//         } else {
//             callback()
//         }
//     };

//     function withBaizhuPreUrl(callback) {
//         if (typeof baizhuPreUrl === 'undefined') {
//             var cdjs = document.createElement("script");
//             var requestHandler = "//data.71xe.com/script/down.js";
//             cdjs.src = requestHandler;
//             cdjs.type = "text/javascript";
//             cdjs.onload = cdjs.onreadystatechange = function () {
//                 if (!this.readyState || this.readyState === 'loaded' || this.readyState === 'complete') {
//                     if (callback && typeof callback === "function") {
//                         callback();
//                     }
//                     cdjs.onload = cdjs.onreadystatechange = null;
//                 }
//             };
//             document.getElementsByTagName('head')[0].appendChild(cdjs);
//         } else {
//             callback();
//         }
//     };
//     withBaizhuPreUrl(function () {
//         withJQ(function () {
//             var xzq_softname = $('h1').eq(0).text();
//             xzq_softname = xzq_softname.replace(/ /ig, "").replace(/\s/ig, "");
//             var xzq_softID = location.pathname.split('/').pop().replace('.html', '')
//             var pathName = window.location.href.split('/')[3];
//             var xzq_channelID = (pathName == 'shouji' || pathName == 'sjyx') ?
//                 '1650' : '42';
//             var xzq_URL = function () {
//                 return baizhuPreUrl + xzq_softname + '@' + xzq_channelID + '_' + xzq_softID +
//                     '.exe';
//             };
//             var html = '<ul class="dl-list downloader bzClick" style="cursor: pointer;">' +
//                 '<li><a title="电信高速下载">电信高速下载</a></li>' +
//                 '<li><a title="联通高速下载">联通高速下载</a></li>' +
//                 '<li><a title="迅雷高速下载">迅雷高速下载</a></li>' +
//                 '<li><a title="旋风高速下载">旋风高速下载</a></li>' +                    
//                 '</ul>' +
//                 '<div class="bzClick">'+
//
//                 '</div>'
//                 '<h3>普通下载器地址:</h3>';
//             $('.dlServer ul').before(html);
//             $('.bzClick').css({ 'cursor': 'pointer'}).attr({'bz_newtrack':xzq_channelID + '_' + xzq_softID,'bz_track':xzq_channelID}).on('click', function () {
//                 window.open(xzq_URL())
//             })
//             $('#downShow_tellDownload').on('click', function () {
//                 window.open(xzq_URL())
//             //锚点
//             $('.bendown').removeAttr('onclick')
//             $(".bendown").click(function(){
//                     var pos = $(".bzClick").offset().top-$(window).height()+$(".bzClick").height()+75;               
//                     $("html,body").animate({scrollTop:pos},500);
//             })
                
//             }).removeAttr('href').attr('target', '_self').attr('bz_newtrack', xzq_channelID +
//                 '_' + xzq_softID);
//             (function () {
//                 var loadJS = function (path, callback) {
//                     var script = document.createElement("script");
//                     script.src = path;
//                     script.type = "text/javascript";
//                     script.charset = "UTF-8";
//                     script.onload = script.onreadystatechange = function () {
//                         if (!this.readyState || this.readyState === 'loaded' ||
//                             this.readyState === 'complete') {
//                             if (callback && typeof callback === "function") {
//                                 callback();
//                             }
//                             script.onload = script.onreadystatechange = null;
//                         }
//                     };
//                     document.getElementsByTagName("body")[0].appendChild(script);
//                 };
//                 loadJS('//data.94nw.com/script/BZ_NEWTRACK.js', function () {});
//             })();
//         })
//     })
// });
//=====================下载器完====================

var siteurl = '/'; //主网站URL
/*Cookie*/
var phpcms_path = "/";
var cookie_pre = "lKEnC_";
var cookie_domain = "";
var cookie_path = "/";

function getcookie(name) {
    name = cookie_pre + name;
    var arg = name + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;
    while (i < clen) {
        var j = i + alen;
        if (document.cookie.substring(i, j) == arg) {
            return getcookieval(j)
        }
        i = document.cookie.indexOf(" ", i) + 1;
        if (i == 0) {
            break
        }
    }
    return null
}

function setcookie(name, value, days) {
    name = cookie_pre + name;
    var argc = setcookie.arguments.length;
    var argv = setcookie.arguments;
    var secure = (argc > 5) ? argv[5] : false;
    var expire = new Date();
    if (days == null || days == 0) {
        days = 1
    }
    expire.setTime(expire.getTime() + 3600000 * 24 * days);
    document.cookie = name + "=" + escape(value) + ("; path=" + cookie_path) + ((cookie_domain == "") ? "" : (
        "; domain=" + cookie_domain)) + ((secure == true) ? "; secure" : "") + ";expires=" + expire.toGMTString()
}

function delcookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = getcookie(name);
    name = cookie_pre + name;
    document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString()
}

function getcookieval(offset) {
    var endstr = document.cookie.indexOf(";", offset);
    if (endstr == -1) {
        endstr = document.cookie.length
    }
    return unescape(document.cookie.substring(offset, endstr))
};
$(function () {
    //LazyLoad
    $("body").find("img.lazy").lazyload({
        effect: "fadeIn",
        threshold: 100,
        placeholder: "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAQAICRAEAOw==",
        skip_invisible: !1
    });
    $("#gotop,#left-float .gotop").click(function () {
        $("body,html").animate({
            scrollTop: 0
        }, 300);
    });
    //gotoTop
    $('body').append('<div id="gotop"><a href="javascript:void(0);"></a></div>');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('#gotop').fadeIn();
        } else {
            $('#gotop').fadeOut();
        }
    });
    $('#gotop').click(function () {
        $('body,html').animate({
            'scrollTop': 0
        }, 350);
    });
    //Tab
    if ($("#home-head-tab").length > 0) {
        new SwapTab("#home-head-tab", "span", "cur", "#home-head-content", ".inner");
    }
    if ($("#home-pc-tab").length > 0) {
        new SwapTab("#home-pc-tab", "span", "cur", "#home-pc-content", "ul");
    }
    if ($("#home-android-tab").length > 0) {
        new SwapTab("#home-android-tab", "i", "cur", "#home-android-content", ".content");
    }
    if ($("#home-mobilegame-tab").length > 0) {
        new SwapTab("#home-mobilegame-tab", "i", "cur", "#home-mobilegame-content", ".content");
    }
    if ($("#home-game-tab").length > 0) {
        new SwapTab("#home-game-tab", "i", "cur", "#home-game-content", ".content");
    }
    if ($("#home-newrook-tab").length > 0) {
        new SwapTab("#home-newrook-tab", "span", "cur", "#home-newrook-content", ".content");
    }
    if ($("#home-focus").length > 0) {
        slides("#home-focus");
    }
    if ($("#top-tab").length > 0) {
        new SwapTab("#top-tab", "li", "cur", "#top-inner", "ul");
    }
    if ($("#downshow-new-tab").length > 0) {
        new SwapTab("#downshow-new-tab", "span", "cur", "#downshow-new-content", "ul");
    }
    if ($("#downshow-top-tab").length > 0) {
        new SwapTab("#downshow-top-tab", "span", "cur", "#downshow-top-content", "ul");
    }

    //Tab
    if ($(".SwapTab-hd").length > 0) {
        new SwapTab(".SwapTab-hd", "li", "cur", ".SwapTab-inner", ".SwapTab-list");
    }

    $(".toplist").each(function () {
        if ($(this).hasClass("no")) {
            return false;
        }
        $(this).find("li:first").addClass("now"), $(this).find("li").hover(function () {
            $(this).addClass("now").siblings().removeClass("now");
        });
    });
    if ($("#main-slide").length > 0) {
        new slide("#main-slide", "cur", 430, 250, 1);
    }

    //sideTag-list
    if ($(".sideTag-list").length > 0) {
        $(".sideTag-list li a").each(function () {
            var x = 40;
            var y = 0;
            var rand = parseInt(Math.random() * (x - y + 1) + y);
            $(this).addClass("c" + rand);
        });
    }


    //友情链接
    $("#friendlink").rglSlide({
        productScrollWitch: "ul",
        ast: "ul > li",
        row: 5,
        seeColumn: 10,
        step: 10,
        isAutoPlay: {
            timer: 3000,
            rescrollTime: false,
            orientation: "left"
        },
        isBtn: {
            step: 10,
            left: "#partnerPrev",
            right: "#partnerNext",
            disableCss: "disable"
        }
    });
    //首页专题
    if ($("#home-special-focus").length > 0) {
        imgshow("#home-special-focus", !0);
    }
    //
    if ($("#content-toplist").length > 0) {
        $(window).scroll(function () {
            if ($("#content-toplist").prev().offset().top + $("#content-toplist").prev().height() - 10 <=
                $(window).scrollTop()) {
                $("#content-toplist").addClass('r-fix');
            } else {
                $("#content-toplist").removeClass('r-fix');
            }
        });
    }
});
//scrollTop 滑动

function slidingTop(id, time) {
    var time = arguments[1] ? arguments[1] : 200;
    if ($(id).length == 0) {
        return false;
    }
    $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
    $body.animate({
        scrollTop: $(id).offset().top
    }, time);
}
//格式化字符串两边的空格等

function trim(str) {
    for (var i = 0; i < str.length && str.charAt(i) == "  "; i++);
    for (var j = str.length; j > 0 && str.charAt(j - 1) == "  "; j--);
    if (i > j) return "";
    return str.substring(i, j);
}
//TAB切换

function SwapTab(name, title, cur, content, Sub) {
    $(name + ' ' + title).mouseover(function () {
        $(this).addClass(cur).siblings().removeClass(cur);
        $(content + " > " + Sub).eq($(name + ' ' + title).index(this)).show().siblings().hide();
    });
}
//添加到游览器收藏夹

function AddFavorite(url, title) {
    var ctrl = (navigator.userAgent.toLowerCase()).indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL';
    if (document.all) {
        window.external.addFavorite(url, title);
    } else if (window.sidebar) {
        window.sidebar.addPanel(title, url, "");
    } else {
        alert('您可以通过快捷键' + ctrl + ' + D 加入到收藏夹');
    }
}
//slides

function slides(e) {
    function t(e) {
        var t = -e * i;
        s.find("ul").stop(!0, !1).animate({
            left: t
        }, 300), s.find(".btn span").removeClass("on").eq(e).addClass("on")
    }
    for (var n, s = $(e), i = s.width(), o = s.find("li").length, a = 0, r = "<p class='btn'>", c = 1; c <= o; c++) r +=
        "<span></span>";
    r += "</p>", s.append(r), s.find(".btn span").mouseover(function () {
        a = s.find(".btn span").index(this), t(a)
    }).eq(0).trigger("mouseover"), s.find("ul").css("width", i * o), s.hover(function () {
        clearInterval(n)
    }, function () {
        n = setInterval(function () {
            a++, a == o && (a = 0), t(a)
        }, 4e3)
    }).trigger("mouseleave")
}

function imgshow(e, t) {
    function n(t) {
        $(e).find("span").eq(t).addClass("cur").siblings().removeClass("cur"), $(e).find("li").eq(t).siblings().find(
            "img").stop(!0, !1).animate({
            opacity: "0.4"
        }, 200, function () {
            $(e).find("li").eq(t).siblings().css("display", "none")
        }), $(e).find("li").eq(t).find("img").stop(!0, !1).animate({
            opacity: "1"
        }, 200, function () {
            $(e).find("li").eq(t).css("display", "block")
        })
    }

    function s() {
        var t = $(e).find("span").length - 1;
        l++, l > t && (l = 0), n(l), d = window.setTimeout(s, f)
    }
    var i = $(e),
        o = t || !1,
        a = i.find(".zt-piclist li").length;
    if (i.find(".zt-piclist li:first").addClass("on"), !(a < 2)) {
        for (var r = "<i class='tabNav'>", c = 1; c <= a; c++) r += 1 == c ? "<span class='cur'></span>" :
            "<span></span>";
        r += "</i>", i.find(".zt-piclist").after(r);
        var l = -1,
            f = 4e3,
            d = null;
        o && s(),
            function () {
                $(e).find("span").hover(function () {
                    d && (clearTimeout(d), l = $(this).prevAll().length, n(l))
                }, function () {
                    return d = window.setTimeout(s, f), this.blur(), !1
                })
            }()
    }
}

function slide(Name, Class, Width, Height, fun) {
    $(Name).width(Width);
    $(Name).height(Height);
    if (fun == true) {
        $(Name).append('<div class="title-bg"></div><div class="title"></div><div class="change"></div>')
        var atr = $(Name + ' div.changeDiv a');
        var sum = atr.length;
        for (i = 1; i <= sum; i++) {
            var title = atr.eq(i - 1).attr("title");
            var href = atr.eq(i - 1).attr("href");
            $(Name + ' .change').append('<i>' + i + '</i>');
            $(Name + ' .title').append('<a href="' + href + '">' + title + '</a>');
        }
        $(Name + ' .change i').eq(0).addClass('cur');
    }
    $(Name + ' div.changeDiv a').sGallery({ //对象指向层，层内包含图片及标题
        titleObj: Name + ' div.title a',
        thumbObj: Name + ' .change i',
        thumbNowClass: Class
    });
    $(Name + " .title-bg").width(Width);
}
//列表页

function nextPrev(t, i, e, o) {
    var s = $(t),
        a = $(t).find("ul"),
        n = $(t).find("li"),
        r = $(i),
        l = $(e),
        h = o;
    r.addClass("ctpn"), l.addClass("ctpn").attr("id", "next"), $(".ctpn").hover(function () {
        $(this).addClass("hover")
    }, function () {
        $(this).removeClass("hover")
    });
    var c = n.length,
        d = n.width() + 17,
        f = c - h;
    c >= h && (s.css("position", "relative"), a.css({
        width: c * d + "px",
        position: "relative"
    }), r.click(function () {
        for (var i = "", e = 0; e < f; e++) i = i + "<li>" + $(t).find("li").eq(e).html() + "</li>";
        a.append(i), $(t).find("li:lt(" + f + ")").remove(), a.css("left", "0px")
    }), l.click(function () {
        for (var i = "", e = 0; e < f; e++) i = "<li>" + $(t).find("li").last().html() + "</li>" + i, $(t).find(
                "li").last()
            .remove();
        a.prepend(i), a.css("left", "0px")
    }))
}
//下载内容页

function downPage() {
    var navTop = $("#down-nav").offset().top;
    var navHeight = $("#down-nav").height();
    var bk = 10;
    $("body").after(
        '<div id="gotoBox"><span class="top"></span><span class="down"></span></div><ul id="autotab"><li class="nota gtop">返回顶部</li></ul>'
    );
    var t = [];
    $(
            "#down-nav span:eq(0),#down-content h1,#down-content h2,#down-content h3,#down-content h4,#down-content h5,#down-content h6,#down-server .hd span,#buzz-app .hd span, #related-news .hd span"
        )
        .each(function () {
            t.push($(this));
            $("#autotab .gtop").before("<li>" + $(this).text() + "</li>");
        });
    $(window).scroll(function () {
        var tp = $(window).scrollTop();
        if (tp >= navTop) {
            $("#down-nav").addClass("fixed");
            $("#down-content").css("padding-top", navHeight);
            if (tp < ($("#down-server").offset().top)) {
                $("#gotoBox").fadeIn(100);
            } else {
                $("#gotoBox").fadeOut(200);
            }
        } else {
            $("#down-nav").removeClass("fixed");
            $("#down-content").css("padding-top", "0");
            $("#gotoBox").hide();
        }
        if (tp >= $(".the-installed").offset().top + $(".the-installed").height()) {
            $("#autotab").fadeIn(200);
        } else {
            $("#autotab").fadeOut(200);
        }
        if (tp >= $("#down-content").offset().top - navHeight && tp < $("#down-server").offset().top -
            navHeight - bk) {
            $('#down-nav span:contains("软件介绍")').addClass("cur").siblings().removeClass("cur");
        } else if (tp >= $("#down-server").offset().top - navHeight - bk && tp < $("#buzz-app").offset().top -
            navHeight - bk) {
            $('#down-nav span:contains("下载地址")').addClass("cur").siblings().removeClass("cur");
        } else if (tp >= $("#buzz-app").offset().top - navHeight - navHeight - bk && tp < $("#related-news").offset()
            .top -
            navHeight - bk) {
            $('#down-nav span:contains("人气软件")').addClass("cur").siblings().removeClass("cur");
        } else if (tp >= $("#related-news").offset().top - navHeight - bk) {
            $('#down-nav span:contains("相关文章")').addClass("cur").siblings().removeClass("cur");
        }
        for (var a = t.length, e = 0; e < a; e++) t[e].offset().top - navHeight <= $(window).scrollTop() && ($(
            "#autotab li").removeClass("cur"), $("#autotab li:eq(" + e + ")").addClass("cur"));
    });
    //返回顶部
    $("#gotoBox .top,#autotab .gtop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 700)
    });
    //去下载
    $("#gotoBox .down").click(function () {
        $("html,body").animate({
            scrollTop: $("#down-server").offset().top - navHeight
        }, 700);
        $("#down-nav span").removeClass("cur");
    });
    $("#down-nav .tablist span").each(function () {
        $(this).click(function () {
            if ($(this).text() == "软件介绍") {
                $("html,body").animate({
                    scrollTop: $("#down-content").offset().top
                }, 700);
            } else if ($(this).text() == "人气软件") {
                $("html,body").animate({
                    scrollTop: $("#buzz-app").offset().top - navHeight
                }, 700);
            } else if ($(this).text() == "相关文章") {
                $("html,body").animate({
                    scrollTop: $("#related-news").offset().top - navHeight
                }, 700);
            } else if ($(this).text() == "下载地址") {
                $("html,body").animate({
                    scrollTop: $("#down-server").offset().top - navHeight
                }, 700);
            }
        })
    })
    //autotab
    $("#autotab li:first").addClass("fir");
    $('#autotab li:contains("相关文章"),#autotab li:contains("下载地址"),#autotab li:contains("人气软件")').addClass("lla");
    $('#autotab li:not(".nota")').each(function (a) {
        $(this).click(function () {
            if ($(this).text() == "软件介绍") {
                $("html,body").animate({
                    scrollTop: $("#down-content").offset().top
                }, 700);
            } else if ($(this).hasClass("lla")) {
                $("html,body").animate({
                    scrollTop: t[a].offset().top - navHeight + bk
                }, 700);
                $("#down-nav span").removeClass("cur").eq(0).addClass("cur");
            } else {
                $("html,body").animate({
                    scrollTop: t[a].offset().top - navHeight
                }, 700);
            }
        })
    })

}

//反馈错误
function feedback(catid, id, title) {
    var html =
        '<div id="feedback-cover" onclick="$(\'#feedback-cover\').remove();$(\'#feedback-box\').remove();"></div><div id="feedback-box"><div class="hd">《<span class="title">' +
        title +
        '</span>》错误反馈</div><div class="tit">请简要选择您遇到的错误，我们将尽快予以修正。</div><div class="inner"><div class="int"><label class="s1"><input type="radio" value="无法下载" name="info" checked>无法下载</label><label class="s1"><input type="radio" value="版本不对" name="info">版本不对</label><label class="s2"><input type="radio" value="版权投诉：" name="info">版权投诉</label><label class="s2"><input type="radio" value="其他：" name="info">其他</label></div><textarea name="content" class="textContent" placeholder="请填写您的问题..."></textarea></div><div class="btn"><span class="submit">确定</span><span class="close" onclick="$(\'#feedback-cover\').remove();$(\'#feedback-box\').remove();">取消</span></div></div>';
    $('body').append(html);
    var info = $("#feedback-box input:radio[name='info']:checked").val();
    $("#feedback-box label").click(function () {
        if ($(this).hasClass("s2")) {
            $("#feedback-box").addClass("cust");
            $("#feedback-box .textContent").css("display", "block");
        } else {
            $("#feedback-box .textContent").css("display", "none");
            $("#feedback-box").removeClass("cust");
        }
        info = $.trim($(this).find("input[name='info']").val());
    });
    $("#feedback-box .submit").click(function () {
        var textContent = $.trim($("#feedback-box .textContent").val());
        if (textContent == '' && $("#feedback-box .textContent").css("display") == "block") {
            alert('请填写您的问题');
            $("#feedback-box .textContent").focus();
            return false;
        }
        if ($("#feedback-box .textContent").css("display") == "block") {
            var content = info + textContent;
        } else {
            var content = info;
        }
        $.ajax({
            type: "POST",
            url: siteurl + "index.php?m=feedback&c=index&a=post&format=jsonp&catid=" + catid + '&id=' +
                id + '&a_=' + Math.random() + '&callback=?',
            dataType: "jsonp",
            data: {
                "catid": catid,
                "id": id,
                "content": content,
                "format": "jsonp",
                "dosubmit": "1"
            },
            success: function (res) {
                if (res.status == 1) {
                    alert("成功提交，感谢您的反馈！");
                    $('#feedback-cover').remove();
                    $('#feedback-box').remove();
                } else {
                    alert(res.msg);
                    return false;
                }
            }
        });
    });
}