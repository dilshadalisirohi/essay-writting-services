"use strict";

const { map } = require("lodash");

var search = document.querySelector(".search");
void 0 !== search &&
    null != search &&
    search.length > 0 &&
    document.addEventListener("click", function (e) {
        var t = document.querySelector(".search__toggle"),
            n = document.querySelector(".search__input");
        search.classList.add("active");
        var i = e.target;
        if (i == t) return void (n.value = "");
        i.closest(".search__field") ||
            (search.classList.remove("active"),
            (t.checked = !1),
            (n.value = ""));
    });
var slider = document.getElementsByClassName("slider");
if (void 0 !== slider && null != slider && slider.length > 0)
    var slider1 = tns({
        container: ".slider",
        slideBy: "page",
        autoplay: !1,
        items: 2,
        center: !1,
        responsive: {
            1366: { items: 2, fixedWidth: 290, center: !1 },
            992: { items: 2, fixedWidth: 280, center: !1 },
            769: { items: 1, fixedWidth: 280, center: !1 },
            576: { items: 1, fixedWidth: 280, center: !1 },
            280: { fixedWidth: 290, items: 1, center: !1 },
        },
    });
var rSlider = document.getElementsByClassName("slider-review");
if (void 0 !== rSlider && null != rSlider && rSlider.length > 0)
    var slider2 = tns({
        container: ".slider-review",
        slideBy: "page",
        autoplay: !1,
        items: 2,
        center: !1,
        responsive: {
            1366: { items: 2, fixedWidth: 300, center: !1 },
            992: { items: 2, fixedWidth: 280, center: !1, disable: !0 },
            769: { items: 1, fixedWidth: 280, center: !0 },
            576: { items: 1, fixedWidth: 280, center: !1 },
            280: { fixedWidth: 290, items: 1, center: !1 },
        },
    });
// var hamburger = document.getElementById("hamburger"),
//     menu = document.getElementById("overlay"),
//     open = !1,
//     change = function() {
//         open
//             ? (hamburger.classList.remove("open"),
//               menu.classList.remove("menu"))
//             : (hamburger.classList.add("open"), menu.classList.add("menu")),
//             (open = !open);
//     };
 
// hamburger.addEventListener("click", change),
//     document
//         .querySelectorAll('.contents-list__item a[href^="#"]')
//         .forEach(function(e) {
//             e.onclick = function(e) {
//                 e.preventDefault();
//                 var t = this.getAttribute("href"),
//                     n = document.querySelector(t),
//                     i = 0,
//                     r = n.offsetTop,
//                     o = r - i;
//                 window.scrollTo({ top: o, behavior: "smooth" }),
//                     hamburger.classList.remove("open"),
//                     menu.classList.remove("menu"),
//                     open = !open;
                   
//             };
//         });
var box = document.querySelector(".reviews");
if (void 0 !== box && null != box) {
    var items = Array.from(box.querySelectorAll(".review")),
        loadMore = document.getElementById("loadMore"),
        maxItems = 3,
        loadItems = 3,
        hiddenClass = "hiddenStyle";
    items.forEach(function (e, t) {
        t > maxItems - 1 && e.classList.add(hiddenClass);
    }),
        loadMore.addEventListener("click", function () {
            [].forEach.call(
                document.querySelectorAll("." + hiddenClass),
                function (e, t) {
                    t < loadItems && e.classList.remove(hiddenClass),
                        0 ===
                            document.querySelectorAll("." + hiddenClass)
                                .length && loadMore.classList.add(hiddenClass);
                }
            );
        });
}
var loadMoreFooter = document.getElementById("LoadMoreFooter"),
    style = window.getComputedStyle(loadMoreFooter);
if (
    void 0 !== loadMoreFooter &&
    null != loadMoreFooter &&
    "none" != style.display
) {
    var boxFooter = document.querySelector(".footer-wrapper"),
        itemsFooter = Array.from(boxFooter.querySelectorAll(".footer-list")),
        maxItemsFooter = 3,
        loadItemsFooter = 3,
        hiddenClassFooter = "hiddenStyle";
    itemsFooter.forEach(function (e, t) {
        t > maxItemsFooter - 1 && e.classList.add(hiddenClassFooter);
    }),
        loadMoreFooter.addEventListener("click", function () {
            [].forEach.call(
                document.querySelectorAll("." + hiddenClassFooter),
                function (e, t) {
                    t < loadItemsFooter &&
                        e.classList.remove(hiddenClassFooter),
                        0 ===
                            document.querySelectorAll("." + hiddenClassFooter)
                                .length &&
                            loadMoreFooter.classList.add(hiddenClassFooter);
                }
            );
        });
}
var show = function (e) {
        var t = function () {
                e.style.display = "block";
                var t = e.scrollHeight + "px";
                return (e.style.display = ""), t;
            },
            n = t();
        e.classList.add("is-visible"),
            (e.style.height = n),
            window.setTimeout(function () {
                e.style.height = "";
            }, 350),
            (e.parentNode.querySelector(".toggle").innerHTML = "read less");
    },
    hide = function (e) {
        (e.style.height = e.scrollHeight + "px"),
            window.setTimeout(function () {
                e.style.height = "135px";
            }, 1),
            window.setTimeout(function () {
                e.classList.remove("is-visible");
            }, 350),
            (e.parentNode.querySelector(".toggle").innerHTML = "read more");
    },
    toggle = function (e) {
        if (e.classList.contains("is-visible")) return void hide(e);
        show(e);
    };
document.querySelectorAll(".toggle").forEach(function (e) {
    e.onclick = function (e) {
        e.preventDefault();
        var t = e.target.parentNode.parentNode.querySelector(".toggle-content");
        t && toggle(t);
    };
});

function showTable() {
    const showData = document.getElementsByClassName("show-more1");
    for (i = 0; i < showData.length; i++) {
        if (showData[i].style.display == "") {
            showData[i].style.display = "table-row";
        } else {
            showData[i].style.display = "";
        }
    }
}

function showChart() {
    const showMore = document.getElementsByClassName("show-more2");
    for (i = 0; i < showMore.length; i++) {
        if (showMore[i].style.display == "") {
            showMore[i].style.display = "table-row";
        } else {
            showMore[i].style.display = "";
        }
    }
}

function showField() {
    const showField = document.getElementsByClassName("show-more3");

    for (i = 0; i < showField.length; i++) {
        if (showField[i].style.display == "") {
            showField[i].style.display = "table-row";
        } else {
            showField[i].style.display = "";
        }
    }
}
