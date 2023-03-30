var tns=function(){function t(){for(var t,e,n,i=arguments[0]||{},a=1,r=arguments.length;a<r;a++)if(null!==(t=arguments[a]))for(e in t)i!==(n=t[e])&&void 0!==n&&(i[e]=n);return i}function e(t){return 0<=["true","false"].indexOf(t)?JSON.parse(t):t}function n(t,e,n,i){if(i)try{t.setItem(e,n)}catch(t){}return n}function i(){var t=document,e=t.body;return e||((e=t.createElement("body")).fake=!0),e}function a(t){var e="";return t.fake&&(e=N.style.overflow,t.style.background="",t.style.overflow=N.style.overflow="hidden",N.appendChild(t)),e}function r(t,e){t.fake&&(t.remove(),N.style.overflow=e,N.offsetHeight)}function o(t,e,n,i){"insertRule"in t?t.insertRule(e+"{"+n+"}",i):t.addRule(e,n,i)}function u(t){return("insertRule"in t?t.cssRules:t.rules).length}function l(t,e,n){for(var i=0,a=t.length;i<a;i++)e.call(n,t[i],i)}function s(t,e){return t.hasAttribute(e)}function c(t,e){return t.getAttribute(e)}function f(t){return void 0!==t.item}function d(t,e){if(t=f(t)||t instanceof Array?t:[t],"[object Object]"===Object.prototype.toString.call(e))for(var n=t.length;n--;)for(var i in e)t[n].setAttribute(i,e[i])}function v(t,e){t=f(t)||t instanceof Array?t:[t];for(var n=(e=e instanceof Array?e:[e]).length,i=t.length;i--;)for(var a=n;a--;)t[i].removeAttribute(e[a])}function p(t){for(var e=[],n=0,i=t.length;n<i;n++)e.push(t[n]);return e}function h(t,e){"none"!==t.style.display&&(t.style.display="none")}function m(t,e){"none"===t.style.display&&(t.style.display="")}function y(t){return"none"!==window.getComputedStyle(t).display}function g(t){if("string"==typeof t){var e=[t],n=t.charAt(0).toUpperCase()+t.substr(1);["Webkit","Moz","ms","O"].forEach(function(i){"ms"===i&&"transform"!==t||e.push(i+n)}),t=e}for(var i=document.createElement("fakeelement"),a=(t.length,0);a<t.length;a++){var r=t[a];if(void 0!==i.style[r])return r}return!1}function x(t,e){var n=!1;return/^Webkit/.test(t)?n="webkit"+e+"End":/^O/.test(t)?n="o"+e+"End":t&&(n=e.toLowerCase()+"end"),n}function b(t,e,n){for(var i in e){var a=0<=["touchstart","touchmove"].indexOf(i)&&!n&&k;t.addEventListener(i,e[i],a)}}function w(t,e){for(var n in e){var i=0<=["touchstart","touchmove"].indexOf(n)&&k;t.removeEventListener(n,e[n],i)}}function C(){return{topics:{},on:function(t,e){this.topics[t]=this.topics[t]||[],this.topics[t].push(e)},off:function(t,e){if(this.topics[t])for(var n=0;n<this.topics[t].length;n++)if(this.topics[t][n]===e){this.topics[t].splice(n,1);break}},emit:function(t,e){e.type=t,this.topics[t]&&this.topics[t].forEach(function(n){n(e,t)})}}}var M=window,T=M.requestAnimationFrame||M.webkitRequestAnimationFrame||M.mozRequestAnimationFrame||M.msRequestAnimationFrame||function(t){return setTimeout(t,16)},E=window,A=E.cancelAnimationFrame||E.mozCancelAnimationFrame||function(t){clearTimeout(t)},N=document.documentElement,L="classList"in document.createElement("_"),B=L?function(t,e){return t.classList.contains(e)}:function(t,e){return 0<=t.className.indexOf(e)},S=L?function(t,e){B(t,e)||t.classList.add(e)}:function(t,e){B(t,e)||(t.className+=" "+e)},H=L?function(t,e){B(t,e)&&t.classList.remove(e)}:function(t,e){B(t,e)&&(t.className=t.className.replace(e,""))},O=!1;try{var D=Object.defineProperty({},"passive",{get:function(){O=!0}});window.addEventListener("test",null,D)}catch(M){}var k=!!O&&{passive:!0};Object.keys||(Object.keys=function(t){var e=[];for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&e.push(n);return e}),"remove"in Element.prototype||(Element.prototype.remove=function(){this.parentNode&&this.parentNode.removeChild(this)});var R=function(f){function M(t){t&&(pn=mn=yn=gn=sn=xn=Cn=Mn=!1)}function E(){for(var t=Te?Pn-Ln:Pn;t<0;)t+=Fe;return t%Fe+1}function N(t){return t=t?Math.max(0,Math.min(dn?Fe-1:Fe-on,t)):0,Te?t+Ln:t}function L(t){for(null==t&&(t=Pn),Te&&(t-=Ln);t<0;)t+=Fe;return Math.floor(t%Fe)}function O(){var t,e=L();return t=si?e:tn||$e?Math.ceil((e+1)*Bi/Fe-1):Math.floor(e/on),!dn&&Te&&Pn===qn&&(t=Bi-1),t}function D(){return ne.innerWidth||ee.documentElement.clientWidth||ee.body.clientWidth}function k(t){return"top"===t?"afterbegin":"beforeend"}function I(){var t=en?2*en-nn:0;return function t(e){if(null!=e){var n,i,a=ee.createElement("div");return e.appendChild(a),i=(n=a.getBoundingClientRect()).right-n.left,a.remove(),i||t(e.parentNode)}}(ze)-t}function P(t){if(f[t])return!0;if(Ce)for(var e in Ce)if(Ce[e][t])return!0;return!1}function z(t,e){if(null==e&&(e=je),"items"===t&&tn)return Math.floor((an+nn)/(tn+nn))||1;var n=f[t];if(Ce)for(var i in Ce)e>=parseInt(i)&&t in Ce[i]&&(n=Ce[i][t]);return"slideBy"===t&&"page"===n&&(n=z("items")),Te||"slideBy"!==t&&"items"!==t||(n=Math.floor(n)),n}function W(t,e,n,i,a){var r="";if(void 0!==t){var o=t;e&&(o-=e),r=ke?"margin: 0 "+o+"px 0 "+t+"px;":"margin: "+t+"px 0 "+o+"px 0;"}else if(e&&!n){var u="-"+e+"px";r="margin: 0 "+(ke?u+" 0 0":"0 "+u+" 0")+";"}return!Te&&a&&ve&&i&&(r+=G(i)),r}function q(t,e,n){return t?(t+e)*Bn+"px":le?le+"("+100*Bn+"% / "+n+")":100*Bn/n+"%"}function F(t,e,n){var i;if(t)i=t+e+"px";else{Te||(n=Math.floor(n));var a=Te?Bn:n;i=le?le+"(100% / "+a+")":100/a+"%"}return i="width:"+i,"inner"!==Me?i+";":i+" !important;"}function j(t){var e="";return!1!==t&&(e=(ke?"padding-":"margin-")+(ke?"right":"bottom")+": "+t+"px;"),e}function V(t,e){var n=t.substring(0,t.length-e).toLowerCase();return n&&(n="-"+n+"-"),n}function G(t){return V(ve,18)+"transition-duration:"+t/1e3+"s;"}function Q(t){return V(he,17)+"animation-duration:"+t/1e3+"s;"}function X(){if(P("autoHeight")||$e||!ke){var t=Pe.querySelectorAll("img");l(t,function(t){var e=t.src;En||(e&&e.indexOf("data:image")<0?(t.src="",b(t,mi),S(t,"loading"),t.src=e):st(t))}),T(function(){vt(p(t),function(){Qe=!0})}),P("autoHeight")&&(t=ft(Pn,Math.min(Pn+on-1,Bn-1))),En?Y():T(function(){vt(p(t),Y)})}else Te&&Lt(),J(),U()}function Y(){if($e&&1<Fe){var t=dn?Pn:Fe-1;!function e(){var n=qe[t].getBoundingClientRect().left,i=qe[t-1].getBoundingClientRect().right;Math.abs(n-i)<=1?K():setTimeout(function(){e()},16)}()}else K()}function K(){ke&&!$e||(yt(),$e?(Hn=At(),_n&&(Zn=$()),qn=In(),M(Jn||Zn)):_t()),Te&&Lt(),J(),U()}function J(){if(gt(),Re.insertAdjacentHTML("afterbegin",'<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">'+ot()+"</span>  of "+Fe+"</div>"),Xe=Re.querySelector(".tns-liveregion .current"),ci){var t=xn?"stop":"start";Vi?d(Vi,{"data-action":t}):f.autoplayButtonOutput&&(Re.insertAdjacentHTML(k(f.autoplayPosition),'<button type="button" data-action="'+t+'">'+Qi[0]+t+Qi[1]+wn[0]+"</button>"),Vi=Re.querySelector("[data-action]")),Vi&&b(Vi,{click:Ft}),xn&&(Wt(),Cn&&b(Pe,ni),Mn&&b(Pe,ii))}if(li){if(Ni)d(Ni,{"aria-label":"Carousel Pagination"}),l(Ai=Ni.children,function(t,e){d(t,{"data-nav":e,tabindex:"-1","aria-label":Ri+(e+1),"aria-controls":Kn})});else{for(var e="",n=si?"":'style="display:none"',i=0;i<Fe;i++)e+='<button type="button" data-nav="'+i+'" tabindex="-1" aria-controls="'+Kn+'" '+n+' aria-label="'+Ri+(i+1)+'"></button>';e='<div class="tns-nav" aria-label="Carousel Pagination">'+e+"</div>",Re.insertAdjacentHTML(k(f.navPosition),e),Ni=Re.querySelector(".tns-nav"),Ai=Ni.children}if($t(),ve){var a=ve.substring(0,ve.length-18).toLowerCase(),r="transition: all "+cn/1e3+"s";a&&(r="-"+a+"-"+r),o(Tn,"[aria-controls^="+Kn+"-item]",r,u(Tn))}d(Ai[Oi],{"aria-label":Ri+(Oi+1)+Ii}),v(Ai[Oi],"tabindex"),S(Ai[Oi],ki),b(Ni,ei)}ui&&(bi||Ci&&Mi||(Re.insertAdjacentHTML(k(f.controlsPosition),'<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="'+Kn+'">'+hn[0]+'</button><button type="button" data-controls="next" tabindex="-1" aria-controls="'+Kn+'">'+hn[1]+"</button></div>"),bi=Re.querySelector(".tns-controls")),Ci&&Mi||(Ci=bi.children[0],Mi=bi.children[1]),f.controlsContainer&&d(bi,{"aria-label":"Carousel Navigation",tabindex:"0"}),(f.controlsContainer||f.prevButton&&f.nextButton)&&d([Ci,Mi],{"aria-controls":Kn,tabindex:"-1"}),(f.controlsContainer||f.prevButton&&f.nextButton)&&(d(Ci,{"data-controls":"prev"}),d(Mi,{"data-controls":"next"})),gi=bt(Ci),xi=bt(Mi),Mt(),bi?b(bi,ti):(b(Ci,ti),b(Mi,ti))),et()}function U(){if(Te&&ye){var t={};t[ye]=Dt,b(Pe,t)}yn&&b(Pe,ri,f.preventScrollOnTouch),gn&&b(Pe,oi),sn&&b(ee,ai),"inner"===Me?Xn.on("outerResized",function(){Z(),Xn.emit("innerLoaded",te())}):(Ce||tn||$e||vn||!ke)&&b(ne,{resize:_}),vn&&("outer"===Me?Xn.on("innerLoaded",dt):Jn||dt()),lt(),Jn?at():Zn&&it(),Xn.on("indexChanged",pt),"inner"===Me&&Xn.emit("innerLoaded",te()),"function"==typeof Qn&&Qn(te()),Ve=!0}function _(t){T(function(){Z(Vt(t))})}function Z(t){if(Ve){"outer"===Me&&Xn.emit("outerResized",te(t)),je=D();var e,n=De,i=!1;Ce&&(tt(),(e=n!==De)&&Xn.emit("newBreakpointStart",te(t)));var a,r,s,c,d=on,v=Jn,p=Zn,y=sn,g=pn,x=mn,C=yn,T=gn,E=xn,A=Cn,L=Mn,B=Pn;if(e){var O=tn,k=vn,R=hn,P=rn,V=wn;if(!ce)var G=nn,Q=en}if(sn=z("arrowKeys"),pn=z("controls"),mn=z("nav"),yn=z("touch"),rn=z("center"),gn=z("mouseDrag"),xn=z("autoplay"),Cn=z("autoplayHoverPause"),Mn=z("autoplayResetOnVisibility"),e&&(Jn=z("disable"),tn=z("fixedWidth"),cn=z("speed"),vn=z("autoHeight"),hn=z("controlsText"),wn=z("autoplayText"),bn=z("autoplayTimeout"),ce||(en=z("edgePadding"),nn=z("gutter"))),M(Jn),an=I(),ke&&!$e||Jn||(yt(),ke||(_t(),i=!0)),(tn||$e)&&(Hn=At(),qn=In()),(e||tn)&&(on=z("items"),un=z("slideBy"),(r=on!==d)&&(tn||$e||(qn=In()),Zi())),e&&Jn!==v&&(Jn?at():function(){if(Un){if(Tn.disabled=!1,Pe.className+=Yn,Lt(),dn)for(var t=Ln;t--;)Te&&m(qe[t]),m(qe[Bn-t-1]);if(!Te)for(var e=Pn,n=Pn+Fe;e<n;e++){var i=qe[e],a=e<Pn+on?Le:He;i.style.left=100*(e-Pn)/on+"%",S(i,a)}nt(),Un=!1}}()),_n&&(e||tn||$e)&&(Zn=$())!==p&&(Zn?(Bt(Nt(N(0))),it()):(function(){if($n){if(en&&ce&&(Ie.style.margin=""),Ln)for(var t="tns-transparent",e=Ln;e--;)Te&&H(qe[e],t),H(qe[Bn-e-1],t);nt(),$n=!1}}(),i=!0)),M(Jn||Zn),xn||(Cn=Mn=!1),sn!==y&&(sn?b(ee,ai):w(ee,ai)),pn!==g&&(pn?bi?m(bi):(Ci&&m(Ci),Mi&&m(Mi)):bi?h(bi):(Ci&&h(Ci),Mi&&h(Mi))),mn!==x&&(mn?(m(Ni),$t()):h(Ni)),yn!==C&&(yn?b(Pe,ri,f.preventScrollOnTouch):w(Pe,ri)),gn!==T&&(gn?b(Pe,oi):w(Pe,oi)),xn!==E&&(xn?(Vi&&m(Vi),zi||qi||Wt()):(Vi&&h(Vi),zi&&qt())),Cn!==A&&(Cn?b(Pe,ni):w(Pe,ni)),Mn!==L&&(Mn?b(ee,ii):w(ee,ii)),e){if(tn===O&&rn===P||(i=!0),vn!==k&&(vn||(Ie.style.height="")),pn&&hn!==R&&(Ci.innerHTML=hn[0],Mi.innerHTML=hn[1]),Vi&&wn!==V){var X=xn?1:0,Y=Vi.innerHTML,K=Y.length-V[X].length;Y.substring(K)===V[X]&&(Vi.innerHTML=Y.substring(0,K)+wn[X])}}else rn&&(tn||$e)&&(i=!0);if((r||tn&&!$e)&&(Bi=Zt(),$t()),(a=Pn!==B)?(Xn.emit("indexChanged",te()),i=!0):r?a||pt():(tn||$e)&&(lt(),gt(),rt()),r&&!Te&&function(){for(var t=Pn+Math.min(Fe,on),e=Bn;e--;){var n=qe[e];Pn<=e&&e<t?(S(n,"tns-moving"),n.style.left=100*(e-Pn)/on+"%",S(n,Le),H(n,He)):n.style.left&&(n.style.left="",S(n,He),H(n,Le)),H(n,Be)}setTimeout(function(){l(qe,function(t){H(t,"tns-moving")})},300)}(),!Jn&&!Zn){if(e&&!ce&&(en===Q&&nn===G||(Ie.style.cssText=W(en,nn,tn,cn,vn)),ke)){Te&&(Pe.style.width=q(tn,nn,on));var J=F(tn,nn,on)+j(nn);c=u(s=Tn)-1,"deleteRule"in s?s.deleteRule(c):s.removeRule(c),o(Tn,"#"+Kn+" > .tns-item",J,u(Tn))}vn&&dt(),i&&(Lt(),zn=Pn)}e&&Xn.emit("newBreakpointEnd",te(t))}}function $(){if(!tn&&!$e)return Fe<=(rn?on-(on-1)/2:on);var t=tn?(tn+nn)*Fe:Ge[Fe],e=en?an+2*en:an+nn;return rn&&(e-=tn?(an-tn)/2:(an-(Ge[Pn+1]-Ge[Pn]-nn))/2),t<=e}function tt(){for(var t in De=0,Ce)(t=parseInt(t))<=je&&(De=t)}function et(){!xn&&Vi&&h(Vi),!mn&&Ni&&h(Ni),pn||(bi?h(bi):(Ci&&h(Ci),Mi&&h(Mi)))}function nt(){xn&&Vi&&m(Vi),mn&&Ni&&m(Ni),pn&&(bi?m(bi):(Ci&&m(Ci),Mi&&m(Mi)))}function it(){if(!$n){if(en&&(Ie.style.margin="0px"),Ln)for(var t="tns-transparent",e=Ln;e--;)Te&&S(qe[e],t),S(qe[Bn-e-1],t);et(),$n=!0}}function at(){if(!Un){if(Tn.disabled=!0,Pe.className=Pe.className.replace(Yn.substring(1),""),v(Pe,["style"]),dn)for(var t=Ln;t--;)Te&&h(qe[t]),h(qe[Bn-t-1]);if(ke&&Te||v(Ie,["style"]),!Te)for(var e=Pn,n=Pn+Fe;e<n;e++){var i=qe[e];v(i,["style"]),H(i,Le),H(i,He)}et(),Un=!0}}function rt(){var t=ot();Xe.innerHTML!==t&&(Xe.innerHTML=t)}function ot(){var t=ut(),e=t[0]+1,n=t[1]+1;return e===n?e+"":e+" to "+n}function ut(t){null==t&&(t=Nt());var e,n,i,a=Pn;if(rn||en?($e||tn)&&(n=-(parseFloat(t)+en),i=n+an+2*en):$e&&(n=Ge[Pn],i=n+an),$e)Ge.forEach(function(t,r){r<Bn&&((rn||en)&&t<=n+.5&&(a=r),.5<=i-t&&(e=r))});else{if(tn){var r=tn+nn;rn||en?(a=Math.floor(n/r),e=Math.ceil(i/r-1)):e=a+Math.ceil(an/r)-1}else if(rn||en){var o=on-1;if(rn?(a-=o/2,e=Pn+o/2):e=Pn+o,en){var u=en*on/an;a-=u,e+=u}a=Math.floor(a),e=Math.ceil(e)}else e=a+on-1;a=Math.max(a,0),e=Math.min(e,Bn-1)}return[a,e]}function lt(){if(En&&!Jn){var t=ut();t.push(An),ft.apply(null,t).forEach(function(t){if(!B(t,hi)){var e={};e[ye]=function(t){t.stopPropagation()},b(t,e),b(t,mi),t.src=c(t,"data-src");var n=c(t,"data-srcset");n&&(t.srcset=n),S(t,"loading")}})}}function st(t){S(t,"loaded"),ct(t)}function ct(t){S(t,hi),H(t,"loading"),w(t,mi)}function ft(t,e,n){var i=[];for(n||(n="img");t<=e;)l(qe[t].querySelectorAll(n),function(t){i.push(t)}),t++;return i}function dt(){var t=ft.apply(null,ut());T(function(){vt(t,mt)})}function vt(t,e){return Qe?e():(t.forEach(function(e,n){!En&&e.complete&&ct(e),B(e,hi)&&t.splice(n,1)}),t.length?void T(function(){vt(t,e)}):e())}function pt(){lt(),gt(),rt(),Mt(),function(){if(mn&&(Oi=0<=Hi?Hi:O(),Hi=-1,Oi!==Di)){var t=Ai[Di],e=Ai[Oi];d(t,{tabindex:"-1","aria-label":Ri+(Di+1)}),H(t,ki),d(e,{"aria-label":Ri+(Oi+1)+Ii}),v(e,"tabindex"),S(e,ki),Di=Oi}}()}function ht(t,e){for(var n=[],i=t,a=Math.min(t+e,Bn);i<a;i++)n.push(qe[i].offsetHeight);return Math.max.apply(null,n)}function mt(){var t=vn?ht(Pn,on):ht(Ln,Fe),e=Oe||Ie;e.style.height!==t&&(e.style.height=t+"px")}function yt(){Ge=[0];var t=ke?"left":"top",e=ke?"right":"bottom",n=qe[0].getBoundingClientRect()[t];l(qe,function(i,a){a&&Ge.push(i.getBoundingClientRect()[t]-n),a===Bn-1&&Ge.push(i.getBoundingClientRect()[e]-n)})}function gt(){var t=ut(),e=t[0],n=t[1];l(qe,function(t,i){e<=i&&i<=n?s(t,"aria-hidden")&&(v(t,["aria-hidden","tabindex"]),S(t,vi)):s(t,"aria-hidden")||(d(t,{"aria-hidden":"true",tabindex:"-1"}),H(t,vi))})}function xt(t){return t.nodeName.toLowerCase()}function bt(t){return"button"===xt(t)}function wt(t){return"true"===t.getAttribute("aria-disabled")}function Ct(t,e,n){t?e.disabled=n:e.setAttribute("aria-disabled",n.toString())}function Mt(){if(pn&&!fn&&!dn){var t=gi?Ci.disabled:wt(Ci),e=xi?Mi.disabled:wt(Mi),n=Pn<=Wn,i=!fn&&qn<=Pn;n&&!t&&Ct(gi,Ci,!0),!n&&t&&Ct(gi,Ci,!1),i&&!e&&Ct(xi,Mi,!0),!i&&e&&Ct(xi,Mi,!1)}}function Tt(t,e){ve&&(t.style[ve]=e)}function Et(t){return null==t&&(t=Pn),$e?(an-(en?nn:0)-(Ge[t+1]-Ge[t]-nn))/2:tn?(an-tn)/2:(on-1)/2}function At(){var t=an+(en?nn:0)-(tn?(tn+nn)*Bn:Ge[Bn]);return rn&&!dn&&(t=tn?-(tn+nn)*(Bn-1)-Et():Et(Bn-1)-Ge[Bn-1]),0<t&&(t=0),t}function Nt(t){var e;if(null==t&&(t=Pn),ke&&!$e)if(tn)e=-(tn+nn)*t,rn&&(e+=Et());else{var n=fe?Bn:on;rn&&(t-=Et()),e=100*-t/n}else e=-Ge[t],rn&&$e&&(e+=Et());return Sn&&(e=Math.max(e,Hn)),e+=!ke||$e||tn?"px":"%"}function Lt(t){Tt(Pe,"0s"),Bt(t)}function Bt(t){null==t&&(t=Nt()),Pe.style[Dn]=kn+t+Rn}function St(t,e,n,i){var a=t+on;dn||(a=Math.min(a,Bn));for(var r=t;r<a;r++){var o=qe[r];i||(o.style.left=100*(r-Pn)/on+"%"),Se&&pe&&(o.style[pe]=o.style[me]=Se*(r-t)/1e3+"s"),H(o,e),S(o,n),i&&Nn.push(o)}}function Ht(t,e){On&&Zi(),(Pn!==zn||e)&&(Xn.emit("indexChanged",te()),Xn.emit("transitionStart",te()),vn&&dt(),zi&&t&&0<=["click","keydown"].indexOf(t.type)&&qt(),Gn=!0,$i())}function Ot(t){return t.toLowerCase().replace(/-/g,"")}function Dt(t){if(Te||Gn){if(Xn.emit("transitionEnd",te(t)),!Te&&0<Nn.length)for(var e=0;e<Nn.length;e++){var n=Nn[e];n.style.left="",me&&pe&&(n.style[me]="",n.style[pe]=""),H(n,Be),S(n,He)}if(!t||!Te&&t.target.parentNode===Pe||t.target===Pe&&Ot(t.propertyName)===Ot(Dn)){if(!On){var i=Pn;Zi(),Pn!==i&&(Xn.emit("indexChanged",te()),Lt())}"inner"===Me&&Xn.emit("innerLoaded",te()),Gn=!1,zn=Pn}}}function kt(t,e){if(!Zn)if("prev"===t)Rt(e,-1);else if("next"===t)Rt(e,1);else{if(Gn){if(Fn)return;Dt()}var n=L(),i=0;if("first"===t?i=-n:"last"===t?i=Te?Fe-on-n:Fe-1-n:("number"!=typeof t&&(t=parseInt(t)),isNaN(t)||(e||(t=Math.max(0,Math.min(Fe-1,t))),i=t-n)),!Te&&i&&Math.abs(i)<on){var a=0<i?1:-1;i+=Wn<=Pn+i-Fe?Fe*a:2*Fe*a*-1}Pn+=i,Te&&dn&&(Pn<Wn&&(Pn+=Fe),qn<Pn&&(Pn-=Fe)),L(Pn)!==L(zn)&&Ht(e)}}function Rt(t,e){if(Gn){if(Fn)return;Dt()}var n;if(!e){for(var i=Gt(t=Vt(t));i!==bi&&[Ci,Mi].indexOf(i)<0;)i=i.parentNode;var a=[Ci,Mi].indexOf(i);0<=a&&(n=!0,e=0===a?-1:1)}if(fn){if(Pn===Wn&&-1===e)return void kt("last",t);if(Pn===qn&&1===e)return void kt("first",t)}e&&(Pn+=un*e,$e&&(Pn=Math.floor(Pn)),Ht(n||t&&"keydown"===t.type?t:null))}function It(){Pi=setInterval(function(){Rt(null,ji)},bn),zi=!0}function Pt(){clearInterval(Pi),zi=!1}function zt(t,e){d(Vi,{"data-action":t}),Vi.innerHTML=Qi[0]+t+Qi[1]+e}function Wt(){It(),Vi&&zt("stop",wn[1])}function qt(){Pt(),Vi&&zt("start",wn[0])}function Ft(){zi?(qt(),qi=!0):(Wt(),qi=!1)}function jt(t){t.focus()}function Vt(t){return Qt(t=t||ne.event)?t.changedTouches[0]:t}function Gt(t){return t.target||ne.event.srcElement}function Qt(t){return 0<=t.type.indexOf("touch")}function Xt(t){t.preventDefault?t.preventDefault():t.returnValue=!1}function Yt(){return a=Ji.y-Ki.y,r=Ji.x-Ki.x,t=Math.atan2(a,r)*(180/Math.PI),e=jn,n=!1,i=Math.abs(90-Math.abs(t)),90-e<=i?n="horizontal":i<=e&&(n="vertical"),n===f.axis;var t,e,n,i,a,r}function Kt(t){if(Gn){if(Fn)return;Dt()}xn&&zi&&Pt(),Ui=!0,Yi&&(A(Yi),Yi=null);var e=Vt(t);Xn.emit(Qt(t)?"touchStart":"dragStart",te(t)),!Qt(t)&&0<=["img","a"].indexOf(xt(Gt(t)))&&Xt(t),Ji.x=Ki.x=e.clientX,Ji.y=Ki.y=e.clientY,Te&&(Xi=parseFloat(Pe.style[Dn].replace(kn,"")),Tt(Pe,"0s"))}function Jt(t){if(Ui){var e=Vt(t);Ji.x=e.clientX,Ji.y=e.clientY,Te?Yi||(Yi=T(function(){!function t(e){if(!Vn)return void(Ui=!1);if(A(Yi),Ui&&(Yi=T(function(){t(e)})),"?"===Vn&&(Vn=Yt()),Vn){!yi&&Qt(e)&&(yi=!0);try{e.type&&Xn.emit(Qt(e)?"touchMove":"dragMove",te(e))}catch(t){}var n=Xi,i=_i(Ji,Ki);if(!ke||tn||$e)n+=i,n+="px";else{n+=fe?i*on*100/((an+nn)*Bn):100*i/(an+nn),n+="%"}Pe.style[Dn]=kn+n+Rn}}(t)})):("?"===Vn&&(Vn=Yt()),Vn&&(yi=!0)),("boolean"!=typeof t.cancelable||t.cancelable)&&yi&&t.preventDefault()}}function Ut(t){if(Ui){Yi&&(A(Yi),Yi=null),Te&&Tt(Pe,""),Ui=!1;var e=Vt(t);Ji.x=e.clientX,Ji.y=e.clientY;var n=_i(Ji,Ki);if(Math.abs(n)){if(!Qt(t)){var i=Gt(t);b(i,{click:function t(e){Xt(e),w(i,{click:t})}})}Te?Yi=T(function(){if(ke&&!$e){var e=-n*on/(an+nn);e=0<n?Math.floor(e):Math.ceil(e),Pn+=e}else{var i=-(Xi+n);if(i<=0)Pn=Wn;else if(i>=Ge[Bn-1])Pn=qn;else for(var a=0;a<Bn&&i>=Ge[a];)i>Ge[Pn=a]&&n<0&&(Pn+=1),a++}Ht(t,n),Xn.emit(Qt(t)?"touchEnd":"dragEnd",te(t))}):Vn&&Rt(t,0<n?-1:1)}}"auto"===f.preventScrollOnTouch&&(yi=!1),jn&&(Vn="?"),xn&&!zi&&It()}function _t(){(Oe||Ie).style.height=Ge[Pn+on]-Ge[Pn]+"px"}function Zt(){var t=tn?(tn+nn)*Fe/an:Fe/on;return Math.min(Math.ceil(t),Fe)}function $t(){if(mn&&!si&&Bi!==Si){var t=Si,e=Bi,n=m;for(Bi<Si&&(t=Bi,e=Si,n=h);t<e;)n(Ai[t]),t++;Si=Bi}}function te(t){return{container:Pe,slideItems:qe,navContainer:Ni,navItems:Ai,controlsContainer:bi,hasControls:ui,prevButton:Ci,nextButton:Mi,items:on,slideBy:un,cloneCount:Ln,slideCount:Fe,slideCountNew:Bn,index:Pn,indexCached:zn,displayIndex:E(),navCurrentIndex:Oi,navCurrentIndexCached:Di,pages:Bi,pagesCached:Si,sheet:Tn,isOn:Ve,event:t||{}}}f=t({container:".slider",mode:"carousel",axis:"horizontal",items:1,gutter:0,edgePadding:0,fixedWidth:!1,autoWidth:!1,viewportMax:!1,slideBy:1,center:!1,controls:!0,controlsPosition:"top",controlsText:["prev","next"],controlsContainer:!1,prevButton:!1,nextButton:!1,nav:!0,navPosition:"top",navContainer:!1,navAsThumbnails:!1,arrowKeys:!1,speed:300,autoplay:!1,autoplayPosition:"top",autoplayTimeout:5e3,autoplayDirection:"forward",autoplayText:["start","stop"],autoplayHoverPause:!1,autoplayButton:!1,autoplayButtonOutput:!0,autoplayResetOnVisibility:!0,animateIn:"tns-fadeIn",animateOut:"tns-fadeOut",animateNormal:"tns-normal",animateDelay:!1,loop:!0,rewind:!1,autoHeight:!1,responsive:!1,lazyload:!1,lazyloadSelector:".tns-lazy-img",touch:!0,mouseDrag:!1,swipeAngle:15,nested:!1,preventActionWhenRunning:!1,preventScrollOnTouch:!1,freezable:!0,onInit:!1,useLocalStorage:!0,nonce:!1},f||{});var ee=document,ne=window,ie={ENTER:13,SPACE:32,LEFT:37,RIGHT:39},ae={},re=f.useLocalStorage;if(re){var oe=navigator.userAgent,ue=new Date;try{(ae=ne.localStorage)?(ae.setItem(ue,ue),re=ae.getItem(ue)==ue,ae.removeItem(ue)):re=!1,re||(ae={})}catch(oe){re=!1}re&&(ae.tnsApp&&ae.tnsApp!==oe&&["tC","tPL","tMQ","tTf","t3D","tTDu","tTDe","tADu","tADe","tTE","tAE"].forEach(function(t){ae.removeItem(t)}),localStorage.tnsApp=oe)}var le=ae.tC?e(ae.tC):n(ae,"tC",function(){var t=document,e=i(),n=a(e),o=t.createElement("div"),u=!1;e.appendChild(o);try{for(var l,s="(10px * 10)",c=["calc"+s,"-moz-calc"+s,"-webkit-calc"+s],f=0;f<3;f++)if(l=c[f],o.style.width=l,100===o.offsetWidth){u=l.replace(s,"");break}}catch(t){}return e.fake?r(e,n):o.remove(),u}(),re),se=ae.tPL?e(ae.tPL):n(ae,"tPL",function(){var t,e=document,n=i(),o=a(n),u=e.createElement("div"),l=e.createElement("div"),s="";u.className="tns-t-subp2",l.className="tns-t-ct";for(var c=0;c<70;c++)s+="<div></div>";return l.innerHTML=s,u.appendChild(l),n.appendChild(u),t=Math.abs(u.getBoundingClientRect().left-l.children[67].getBoundingClientRect().left)<2,n.fake?r(n,o):u.remove(),t}(),re),ce=ae.tMQ?e(ae.tMQ):n(ae,"tMQ",function(){if(window.matchMedia||window.msMatchMedia)return!0;var t,e=document,n=i(),o=a(n),u=e.createElement("div"),l=e.createElement("style"),s="@media all and (min-width:1px){.tns-mq-test{position:absolute}}";return l.type="text/css",u.className="tns-mq-test",n.appendChild(l),n.appendChild(u),l.styleSheet?l.styleSheet.cssText=s:l.appendChild(e.createTextNode(s)),t=window.getComputedStyle?window.getComputedStyle(u).position:u.currentStyle.position,n.fake?r(n,o):u.remove(),"absolute"===t}(),re),fe=ae.tTf?e(ae.tTf):n(ae,"tTf",g("transform"),re),de=ae.t3D?e(ae.t3D):n(ae,"t3D",function(t){if(!t)return!1;if(!window.getComputedStyle)return!1;var e,n=document,o=i(),u=a(o),l=n.createElement("p"),s=9<t.length?"-"+t.slice(0,-9).toLowerCase()+"-":"";return s+="transform",o.insertBefore(l,null),l.style[t]="translate3d(1px,1px,1px)",e=window.getComputedStyle(l).getPropertyValue(s),o.fake?r(o,u):l.remove(),void 0!==e&&0<e.length&&"none"!==e}(fe),re),ve=ae.tTDu?e(ae.tTDu):n(ae,"tTDu",g("transitionDuration"),re),pe=ae.tTDe?e(ae.tTDe):n(ae,"tTDe",g("transitionDelay"),re),he=ae.tADu?e(ae.tADu):n(ae,"tADu",g("animationDuration"),re),me=ae.tADe?e(ae.tADe):n(ae,"tADe",g("animationDelay"),re),ye=ae.tTE?e(ae.tTE):n(ae,"tTE",x(ve,"Transition"),re),ge=ae.tAE?e(ae.tAE):n(ae,"tAE",x(he,"Animation"),re),xe=ne.console&&"function"==typeof ne.console.warn,be=["container","controlsContainer","prevButton","nextButton","navContainer","autoplayButton"],we={};if(be.forEach(function(t){if("string"==typeof f[t]){var e=f[t],n=ee.querySelector(e);if(we[t]=e,!n||!n.nodeName)return void(xe&&console.warn("Can't find",f[t]));f[t]=n}}),!(f.container.children.length<1)){var Ce=f.responsive,Me=f.nested,Te="carousel"===f.mode;if(Ce){0 in Ce&&(f=t(f,Ce[0]),delete Ce[0]);var Ee={};for(var Ae in Ce){var Ne=Ce[Ae];Ne="number"==typeof Ne?{items:Ne}:Ne,Ee[Ae]=Ne}Ce=Ee,Ee=null}if(Te||function t(e){for(var n in e)Te||("slideBy"===n&&(e[n]="page"),"edgePadding"===n&&(e[n]=!1),"autoHeight"===n&&(e[n]=!1)),"responsive"===n&&t(e[n])}(f),!Te){f.axis="horizontal",f.slideBy="page",f.edgePadding=!1;var Le=f.animateIn,Be=f.animateOut,Se=f.animateDelay,He=f.animateNormal}var Oe,De,ke="horizontal"===f.axis,Re=ee.createElement("div"),Ie=ee.createElement("div"),Pe=f.container,ze=Pe.parentNode,We=Pe.outerHTML,qe=Pe.children,Fe=qe.length,je=D(),Ve=!1;Ce&&tt(),Te&&(Pe.className+=" tns-vpfix");var Ge,Qe,Xe,Ye,Ke,Je,Ue,_e,Ze,$e=f.autoWidth,tn=z("fixedWidth"),en=z("edgePadding"),nn=z("gutter"),an=I(),rn=z("center"),on=$e?1:Math.floor(z("items")),un=z("slideBy"),ln=f.viewportMax||f.fixedWidthViewportWidth,sn=z("arrowKeys"),cn=z("speed"),fn=f.rewind,dn=!fn&&f.loop,vn=z("autoHeight"),pn=z("controls"),hn=z("controlsText"),mn=z("nav"),yn=z("touch"),gn=z("mouseDrag"),xn=z("autoplay"),bn=z("autoplayTimeout"),wn=z("autoplayText"),Cn=z("autoplayHoverPause"),Mn=z("autoplayResetOnVisibility"),Tn=(Ue=null,_e=z("nonce"),Ze=document.createElement("style"),Ue&&Ze.setAttribute("media",Ue),_e&&Ze.setAttribute("nonce",_e),document.querySelector("head").appendChild(Ze),Ze.sheet?Ze.sheet:Ze.styleSheet),En=f.lazyload,An=f.lazyloadSelector,Nn=[],Ln=dn?(Ke=function(){if($e||tn&&!ln)return Fe-1;var t=tn?"fixedWidth":"items",e=[];if((tn||f[t]<Fe)&&e.push(f[t]),Ce)for(var n in Ce){var i=Ce[n][t];i&&(tn||i<Fe)&&e.push(i)}return e.length||e.push(0),Math.ceil(tn?ln/Math.min.apply(null,e):Math.max.apply(null,e))}(),Je=Te?Math.ceil((5*Ke-Fe)/2):4*Ke-Fe,Je=Math.max(Ke,Je),P("edgePadding")?Je+1:Je):0,Bn=Te?Fe+2*Ln:Fe+Ln,Sn=!(!tn&&!$e||dn),Hn=tn?At():null,On=!Te||!dn,Dn=ke?"left":"top",kn="",Rn="",In=tn?function(){return rn&&!dn?Fe-1:Math.ceil(-Hn/(tn+nn))}:$e?function(){for(var t=0;t<Bn;t++)if(Ge[t]>=-Hn)return t}:function(){return rn&&Te&&!dn?Fe-1:dn||Te?Math.max(0,Bn-Math.ceil(on)):Bn-1},Pn=N(z("startIndex")),zn=Pn,Wn=(E(),0),qn=$e?null:In(),Fn=f.preventActionWhenRunning,jn=f.swipeAngle,Vn=!jn||"?",Gn=!1,Qn=f.onInit,Xn=new C,Yn=" tns-slider tns-"+f.mode,Kn=Pe.id||(Ye=window.tnsId,window.tnsId=Ye?Ye+1:1,"tns"+window.tnsId),Jn=z("disable"),Un=!1,_n=f.freezable,Zn=!(!_n||$e)&&$(),$n=!1,ti={click:Rt,keydown:function(t){t=Vt(t);var e=[ie.LEFT,ie.RIGHT].indexOf(t.keyCode);0<=e&&(0===e?Ci.disabled||Rt(t,-1):Mi.disabled||Rt(t,1))}},ei={click:function(t){if(Gn){if(Fn)return;Dt()}for(var e=Gt(t=Vt(t));e!==Ni&&!s(e,"data-nav");)e=e.parentNode;if(s(e,"data-nav")){var n=Hi=Number(c(e,"data-nav")),i=tn||$e?n*Fe/Bi:n*on;kt(si?n:Math.min(Math.ceil(i),Fe-1),t),Oi===n&&(zi&&qt(),Hi=-1)}},keydown:function(t){t=Vt(t);var e=ee.activeElement;if(s(e,"data-nav")){var n=[ie.LEFT,ie.RIGHT,ie.ENTER,ie.SPACE].indexOf(t.keyCode),i=Number(c(e,"data-nav"));0<=n&&(0===n?0<i&&jt(Ai[i-1]):1===n?i<Bi-1&&jt(Ai[i+1]):kt(Hi=i,t))}}},ni={mouseover:function(){zi&&(Pt(),Wi=!0)},mouseout:function(){Wi&&(It(),Wi=!1)}},ii={visibilitychange:function(){ee.hidden?zi&&(Pt(),Fi=!0):Fi&&(It(),Fi=!1)}},ai={keydown:function(t){t=Vt(t);var e=[ie.LEFT,ie.RIGHT].indexOf(t.keyCode);0<=e&&Rt(t,0===e?-1:1)}},ri={touchstart:Kt,touchmove:Jt,touchend:Ut,touchcancel:Ut},oi={mousedown:Kt,mousemove:Jt,mouseup:Ut,mouseleave:Ut},ui=P("controls"),li=P("nav"),si=!!$e||f.navAsThumbnails,ci=P("autoplay"),fi=P("touch"),di=P("mouseDrag"),vi="tns-slide-active",pi="tns-slide-cloned",hi="tns-complete",mi={load:function(t){st(Gt(t))},error:function(t){e=Gt(t),S(e,"failed"),ct(e);var e}},yi="force"===f.preventScrollOnTouch;if(ui)var gi,xi,bi=f.controlsContainer,wi=f.controlsContainer?f.controlsContainer.outerHTML:"",Ci=f.prevButton,Mi=f.nextButton,Ti=f.prevButton?f.prevButton.outerHTML:"",Ei=f.nextButton?f.nextButton.outerHTML:"";if(li)var Ai,Ni=f.navContainer,Li=f.navContainer?f.navContainer.outerHTML:"",Bi=$e?Fe:Zt(),Si=0,Hi=-1,Oi=O(),Di=Oi,ki="tns-nav-active",Ri="Carousel Page ",Ii=" (Current Slide)";if(ci)var Pi,zi,Wi,qi,Fi,ji="forward"===f.autoplayDirection?1:-1,Vi=f.autoplayButton,Gi=f.autoplayButton?f.autoplayButton.outerHTML:"",Qi=["<span class='tns-visually-hidden'>"," animation</span>"];if(fi||di)var Xi,Yi,Ki={},Ji={},Ui=!1,_i=ke?function(t,e){return t.x-e.x}:function(t,e){return t.y-e.y};$e||M(Jn||Zn),fe&&(Dn=fe,kn="translate",de?(kn+=ke?"3d(":"3d(0px, ",Rn=ke?", 0px, 0px)":", 0px)"):(kn+=ke?"X(":"Y(",Rn=")")),Te&&(Pe.className=Pe.className.replace("tns-vpfix","")),function(){if(P("gutter"),Re.className="tns-outer",Ie.className="tns-inner",Re.id=Kn+"-ow",Ie.id=Kn+"-iw",""===Pe.id&&(Pe.id=Kn),Yn+=se||$e?" tns-subpixel":" tns-no-subpixel",Yn+=le?" tns-calc":" tns-no-calc",$e&&(Yn+=" tns-autowidth"),Yn+=" tns-"+f.axis,Pe.className+=Yn,Te?((Oe=ee.createElement("div")).id=Kn+"-mw",Oe.className="tns-ovh",Re.appendChild(Oe),Oe.appendChild(Ie)):Re.appendChild(Ie),vn){(Oe||Ie).className+=" tns-ah"}if(ze.insertBefore(Re,Pe),Ie.appendChild(Pe),l(qe,function(t,e){S(t,"tns-item"),t.id||(t.id=Kn+"-item"+e),!Te&&He&&S(t,He),d(t,{"aria-hidden":"true",tabindex:"-1"})}),Ln){for(var t=ee.createDocumentFragment(),e=ee.createDocumentFragment(),n=Ln;n--;){var i=n%Fe,a=qe[i].cloneNode(!0);if(S(a,pi),v(a,"id"),e.insertBefore(a,e.firstChild),Te){var r=qe[Fe-1-i].cloneNode(!0);S(r,pi),v(r,"id"),t.appendChild(r)}}Pe.insertBefore(t,Pe.firstChild),Pe.appendChild(e),qe=Pe.children}}(),function(){if(!Te)for(var t=Pn,e=Pn+Math.min(Fe,on);t<e;t++){var n=qe[t];n.style.left=100*(t-Pn)/on+"%",S(n,Le),H(n,He)}if(ke&&(se||$e?(o(Tn,"#"+Kn+" > .tns-item","font-size:"+ne.getComputedStyle(qe[0]).fontSize+";",u(Tn)),o(Tn,"#"+Kn,"font-size:0;",u(Tn))):Te&&l(qe,function(t,e){var n;t.style.marginLeft=(n=e,le?le+"("+100*n+"% / "+Bn+")":100*n/Bn+"%")})),ce){if(ve){var i=Oe&&f.autoHeight?G(f.speed):"";o(Tn,"#"+Kn+"-mw",i,u(Tn))}i=W(f.edgePadding,f.gutter,f.fixedWidth,f.speed,f.autoHeight),o(Tn,"#"+Kn+"-iw",i,u(Tn)),Te&&(i=ke&&!$e?"width:"+q(f.fixedWidth,f.gutter,f.items)+";":"",ve&&(i+=G(cn)),o(Tn,"#"+Kn,i,u(Tn))),i=ke&&!$e?F(f.fixedWidth,f.gutter,f.items):"",f.gutter&&(i+=j(f.gutter)),Te||(ve&&(i+=G(cn)),he&&(i+=Q(cn))),i&&o(Tn,"#"+Kn+" > .tns-item",i,u(Tn))}else{Te&&vn&&(Oe.style[ve]=cn/1e3+"s"),Ie.style.cssText=W(en,nn,tn,vn),Te&&ke&&!$e&&(Pe.style.width=q(tn,nn,on));var i=ke&&!$e?F(tn,nn,on):"";nn&&(i+=j(nn)),i&&o(Tn,"#"+Kn+" > .tns-item",i,u(Tn))}if(Ce&&ce)for(var a in Ce){a=parseInt(a);var r=Ce[a],i="",s="",c="",d="",v="",p=$e?null:z("items",a),h=z("fixedWidth",a),m=z("speed",a),y=z("edgePadding",a),g=z("autoHeight",a),x=z("gutter",a);ve&&Oe&&z("autoHeight",a)&&"speed"in r&&(s="#"+Kn+"-mw{"+G(m)+"}"),("edgePadding"in r||"gutter"in r)&&(c="#"+Kn+"-iw{"+W(y,x,h,m,g)+"}"),Te&&ke&&!$e&&("fixedWidth"in r||"items"in r||tn&&"gutter"in r)&&(d="width:"+q(h,x,p)+";"),ve&&"speed"in r&&(d+=G(m)),d&&(d="#"+Kn+"{"+d+"}"),("fixedWidth"in r||tn&&"gutter"in r||!Te&&"items"in r)&&(v+=F(h,x,p)),"gutter"in r&&(v+=j(x)),!Te&&"speed"in r&&(ve&&(v+=G(m)),he&&(v+=Q(m))),v&&(v="#"+Kn+" > .tns-item{"+v+"}"),(i=s+c+d+v)&&Tn.insertRule("@media (min-width: "+a/16+"em) {"+i+"}",Tn.cssRules.length)}}(),X();var Zi=dn?Te?function(){var t=Wn,e=qn;t+=un,e-=un,en?(t+=1,e-=1):tn&&(an+nn)%(tn+nn)&&(e-=1),Ln&&(e<Pn?Pn-=Fe:Pn<t&&(Pn+=Fe))}:function(){if(qn<Pn)for(;Wn+Fe<=Pn;)Pn-=Fe;else if(Pn<Wn)for(;Pn<=qn-Fe;)Pn+=Fe}:function(){Pn=Math.max(Wn,Math.min(qn,Pn))},$i=Te?function(){var t,e,n,i,a,r,o,u,l,s,c;Tt(Pe,""),ve||!cn?(Bt(),cn&&y(Pe)||Dt()):(t=Pe,e=Dn,n=kn,i=Rn,a=Nt(),r=cn,o=Dt,u=Math.min(r,10),l=0<=a.indexOf("%")?"%":"px",a=a.replace(l,""),s=Number(t.style[e].replace(n,"").replace(i,"").replace(l,"")),c=(a-s)/r*u,setTimeout(function a(){r-=u,s+=c,t.style[e]=n+s+l+i,0<r?setTimeout(a,u):o()},u)),ke||_t()}:function(){Nn=[];var t={};t[ye]=t[ge]=Dt,w(qe[zn],t),b(qe[Pn],t),St(zn,Le,Be,!0),St(Pn,He,Le),ye&&ge&&cn&&y(Pe)||Dt()};return{version:"2.9.4",getInfo:te,events:Xn,goTo:kt,play:function(){xn&&!zi&&(Wt(),qi=!1)},pause:function(){zi&&(qt(),qi=!0)},isOn:Ve,updateSliderHeight:mt,refresh:X,destroy:function(){if(Tn.disabled=!0,Tn.ownerNode&&Tn.ownerNode.remove(),w(ne,{resize:_}),sn&&w(ee,ai),bi&&w(bi,ti),Ni&&w(Ni,ei),w(Pe,ni),w(Pe,ii),Vi&&w(Vi,{click:Ft}),xn&&clearInterval(Pi),Te&&ye){var t={};t[ye]=Dt,w(Pe,t)}yn&&w(Pe,ri),gn&&w(Pe,oi);var e=[We,wi,Ti,Ei,Li,Gi];for(var n in be.forEach(function(t,n){var i="container"===t?Re:f[t];if("object"==typeof i&&i){var a=!!i.previousElementSibling&&i.previousElementSibling,r=i.parentNode;i.outerHTML=e[n],f[t]=a?a.nextElementSibling:r.firstElementChild}}),be=Le=Be=Se=He=ke=Re=Ie=Pe=ze=We=qe=Fe=De=je=$e=tn=en=nn=an=on=un=ln=sn=cn=fn=dn=vn=Tn=En=Ge=Nn=Ln=Bn=Sn=Hn=On=Dn=kn=Rn=In=Pn=zn=Wn=qn=jn=Vn=Gn=Qn=Xn=Yn=Kn=Jn=Un=_n=Zn=$n=ti=ei=ni=ii=ai=ri=oi=ui=li=si=ci=fi=di=vi=hi=mi=Qe=pn=hn=bi=wi=Ci=Mi=gi=xi=mn=Ni=Li=Ai=Bi=Si=Hi=Oi=Di=ki=Ri=Ii=xn=bn=ji=wn=Cn=Vi=Gi=Mn=Qi=Pi=zi=Wi=qi=Fi=Ki=Ji=Xi=Ui=Yi=_i=yn=gn=null,this)"rebuild"!==n&&(this[n]=null);Ve=!1},rebuild:function(){return R(t(f,we))}}}xe&&console.warn("No slides found in",f.container)};return R}();
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
