<?php

include_once "connection.php";

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>


<!doctype html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(){this.v="1.2.4",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",t=>{this.persisted=t.persisted}),window.addEventListener("DOMContentLoaded",()=>{this._preconnect3rdParties()}),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}_addUserInteractionListener(t){if(document.hidden){t._triggerListener();return}this.triggerEvents.forEach(e=>window.addEventListener(e,t.userEventHandler,{passive:!0})),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler)}_removeUserInteractionListener(){this.triggerEvents.forEach(t=>window.removeEventListener(t,this.userEventHandler,{passive:!0})),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"onclick","rocket-onclick"),this._pendingClickStarted())}_onTouchMove(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this._pendingClickFinished()}_onTouchEnd(){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(t){t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this._pendingClickFinished()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach(t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))})}_waitForPendingClicks(){return new Promise(t=>{this._isClickPending?this._pendingClickFinished=t:t()})}_pendingClickStarted(){this._isClickPending=!0}_pendingClickFinished(){this._isClickPending=!1}_renameDOMAttribute(t,e,r){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(r,event.target.getAttribute(e)),event.target.removeAttribute(e))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach(e=>{let r=e.getAttribute("data-rocket-src");if(r&&0!==r.indexOf("data:")){0===r.indexOf("//")&&(r=location.protocol+r);try{let i=new URL(r).origin;i!==location.origin&&t.push({src:i,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(n){}}}),t=[...new Map(t.map(t=>[JSON.stringify(t),t])).values()],this._batchInjectResourceHints(t,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._pendingWebpackRequests(this),await this._triggerWindowLoad()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._waitForPendingClicks().then(()=>{this._replayClicks()}),this._emptyTrash()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)})}async _transformScript(t){if(await this._littleBreath(),!0===t.noModule&&"noModule"in HTMLScriptElement.prototype){t.setAttribute("data-rocket-status","skipped");return}return new Promise(navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor?e=>{let r=document.createElement("script");[...t.attributes].forEach(t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),r.setAttribute(e,t.nodeValue))}),t.text&&(r.text=t.text),r.hasAttribute("src")?(r.addEventListener("load",e),r.addEventListener("error",e)):(r.text=t.text,e());try{t.parentNode.replaceChild(r,t)}catch(i){e()}}:e=>{function r(){t.setAttribute("data-rocket-status","failed"),e()}try{let i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",function r(){t.setAttribute("data-rocket-status","executed"),e()}),t.addEventListener("error",r),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}catch(s){r()}})}async _loadScriptsFromList(t){let e=t.shift();return e&&e.isConnected?(await this._transformScript(e),this._loadScriptsFromList(t)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(t,e){var r=document.createDocumentFragment();t.forEach(t=>{let i=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(i){let n=document.createElement("link");n.href=i,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),r.appendChild(n),this.trash.push(n)}}),document.head.appendChild(r)}_delayEventListeners(){let t={};function e(e,r){!function e(r){!t[r]&&(t[r]={originalFunctions:{add:r.addEventListener,remove:r.removeEventListener},eventsToRewrite:[]},r.addEventListener=function(){arguments[0]=i(arguments[0]),t[r].originalFunctions.add.apply(r,arguments)},r.removeEventListener=function(){arguments[0]=i(arguments[0]),t[r].originalFunctions.remove.apply(r,arguments)});function i(e){return t[r].eventsToRewrite.indexOf(e)>=0?"rocket-"+e:e}}(e),t[e].eventsToRewrite.push(r)}function r(t,e){let r=t[e];Object.defineProperty(t,e,{get:()=>r||function(){},set(i){t["rocket"+e]=r=i}})}e(document,"DOMContentLoaded"),e(window,"DOMContentLoaded"),e(window,"load"),e(window,"pageshow"),e(document,"readystatechange"),r(document,"onreadystatechange"),r(window,"onload"),r(window,"onpageshow")}_delayJQueryReady(t){let e;function r(t){return t.split(" ").map(t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t).join(" ")}function i(i){if(i&&i.fn&&!t.allJQueries.includes(i)){i.fn.ready=i.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(i):document.addEventListener("rocket-DOMContentLoaded",()=>e.bind(document)(i)),i([])};let n=i.fn.on;i.fn.on=i.fn.init.prototype.on=function(){return this[0]===window&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=r(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach(t=>{let e=arguments[0][t];delete arguments[0][t],arguments[0][r(t)]=e})),n.apply(this,arguments),this},t.allJQueries.push(i)}e=i}i(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){i(t)}})}async _pendingWebpackRequests(t){let e=document.querySelector("script[data-webpack]");async function r(){return new Promise(t=>{e.addEventListener("load",t),e.addEventListener("error",t)})}e&&(await r(),await t._requestAnimFrame(),await t._pendingWebpackRequests(t))}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach(t=>t(window).trigger("rocket-jquery-load")),await this._littleBreath();let t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){let t=new Map;document.write=document.writeln=function(e){let r=document.currentScript;r||console.error("WPRocket unable to document.write this: "+e);let i=document.createRange(),n=r.parentElement,s=t.get(r);void 0===s&&(s=r.nextSibling,t.set(r,s));let a=document.createDocumentFragment();i.setStart(a,0),a.appendChild(i.createContextualFragment(e)),n.insertBefore(a,s)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise(t=>setTimeout(t)):new Promise(t=>requestAnimationFrame(t))}_emptyTrash(){this.trash.forEach(t=>t.remove())}static run(){let t=new RocketLazyLoadScripts;t._addUserInteractionListener(t)}}RocketLazyLoadScripts.run();</script>

<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="https://cristalclinica.com.br/xmlrpc.php">

<title>Cristal Clínica Capilar</title><link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" /></noscript>
<meta name='robots' content='max-image-preview:large' />
<script type="rocketlazyloadscript" data-rocket-type='application/javascript'>console.log('PixelYourSite PRO version 8.3.5');</script>
<link rel='dns-prefetch' href='//stats.wp.com' />
<link rel='dns-prefetch' href='//www.googletagmanager.com' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Feed para Cristal Clínica Capilar &raquo;" href="https://cristalclinica.com.br/feed/" />
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Cristal Clínica Capilar &raquo;" href="https://cristalclinica.com.br/comments/feed/" />
<link data-minify="1" rel='stylesheet' id='ht_ctc_main_css-css' href='https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/css/main.css?ver=1701288250' type='text/css' media='all' />
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://cristalclinica.com.br/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2' type='text/css' media='all' />
<style id='safe-svg-svg-icon-style-inline-css' type='text/css'>
.safe-svg-cover{text-align:center}.safe-svg-cover .safe-svg-inside{display:inline-block;max-width:100%}.safe-svg-cover svg{height:100%;max-height:100%;max-width:100%;width:100%}

</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='shoptimizer-main-min-css' href='https://cristalclinica.com.br/wp-content/themes/shoptimizer/assets/css/main/main.min.css?ver=2.6.7' type='text/css' media='all' />
<link rel='stylesheet' id='shoptimizer-modal-min-css' href='https://cristalclinica.com.br/wp-content/themes/shoptimizer/assets/css/main/modal.min.css?ver=2.6.7' type='text/css' media='all' />
<link rel='stylesheet' id='shoptimizer-dynamic-style-css' href='https://cristalclinica.com.br/wp-content/themes/shoptimizer/assets/css/main/dynamic.css?ver=2.6.7' type='text/css' media='all' />
<link rel='stylesheet' id='shoptimizer-blocks-min-css' href='https://cristalclinica.com.br/wp-content/themes/shoptimizer/assets/css/main/blocks.min.css?ver=2.6.7' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-css' href='https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=1701288250' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://cristalclinica.com.br/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1700585563' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://cristalclinica.com.br/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2794-css' href='https://cristalclinica.com.br/wp-content/uploads/elementor/css/post-2794.css?ver=1700585564' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://cristalclinica.com.br/wp-content/uploads/elementor/css/custom-pro-frontend.min.css?ver=1700585564' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='jet-tricks-frontend-css' href='https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/jet-tricks/assets/css/jet-tricks-frontend.css?ver=1701288250' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='font-awesome-5-all-css' href='https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=1701288250' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://cristalclinica.com.br/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.17.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2840-css' href='https://cristalclinica.com.br/wp-content/uploads/elementor/css/post-2840.css?ver=1700585771' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2805-css' href='https://cristalclinica.com.br/wp-content/uploads/elementor/css/post-2805.css?ver=1700585564' type='text/css' media='all' />
<link rel='stylesheet' id='shoptimizer-woocommerce-min-css' href='https://cristalclinica.com.br/wp-content/themes/shoptimizer/assets/css/main/woocommerce.min.css?ver=2.6.7' type='text/css' media='all' />

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://stats.wp.com/w.js?ver=202350" id="woo-tracks-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.3.1" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrinho","cart_url":"https:\/\/cristalclinica.com.br\/carrinho\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.3.1" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.3.1" id="js-cookie-js" data-wp-strategy="defer" defer></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.3.1" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.17.3" id="font-awesome-4-shim-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/pixelyoursite-pro/dist/scripts/jquery.bind-first-0.2.3.min.js?ver=6.4.2" id="jquery-bind-first-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/pixelyoursite-pro/dist/scripts/vimeo.min.js?ver=6.4.2" id="vimeo-js" defer></script>
<script type="text/javascript" id="pys-js-extra">
/* <![CDATA[ */
var pysOptions = {"staticEvents":{"facebook":{"init_event":[{"delay":0,"type":"static","name":"PageView","pixelIds":["301911569431625"],"eventID":"7a739b68-0610-4fac-85b2-ba7b3bae3a28","params":{"page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"init_event","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""}]}},"dynamicEvents":{"signal_click":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"d39d63e0-1d06-455b-a665-6ef3435b8d21","params":{"page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_click","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""}},"signal_watch_video":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"02359e1e-73b3-4401-b8cd-ef03c80167d8","params":{"event_action":"Video ","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_watch_video","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""},"google_ads":{"delay":0,"type":"dyn","name":"Signal","params":{"event_action":"Video ","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_watch_video","ids":[],"hasTimeWindow":false,"timeWindow":0,"pixelIds":[],"eventID":"","woo_order":"","edd_order":""}},"signal_adsense":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"592c142b-9b32-4fff-acc4-8e8946a23f2e","params":{"event_action":"Adsense","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_adsense","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""}},"signal_tel":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"ab8cf7a7-7d48-4444-9823-a1daf24ea952","params":{"event_action":"Tel","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_tel","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""},"google_ads":{"delay":0,"type":"dyn","name":"Signal","params":{"event_action":"Tel","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_tel","ids":[],"hasTimeWindow":false,"timeWindow":0,"pixelIds":[],"eventID":"","woo_order":"","edd_order":""}},"signal_email":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"698279d5-805a-42e9-b97a-60efb126685c","params":{"event_action":"Email","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_email","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""},"google_ads":{"delay":0,"type":"dyn","name":"Signal","params":{"event_action":"Email","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_email","ids":[],"hasTimeWindow":false,"timeWindow":0,"pixelIds":[],"eventID":"","woo_order":"","edd_order":""}},"signal_form":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"dc668f83-634b-4c13-ada4-82e33fce2f99","params":{"event_action":"Form","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_form","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""},"google_ads":{"delay":0,"type":"dyn","name":"Signal","params":{"event_action":"Form","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_form","ids":[],"hasTimeWindow":false,"timeWindow":0,"pixelIds":[],"eventID":"","woo_order":"","edd_order":""}},"signal_download":{"facebook":{"delay":0,"type":"dyn","name":"Signal","extensions":["","doc","exe","js","pdf","ppt","tgz","zip","xls"],"pixelIds":["301911569431625"],"eventID":"cf7d2822-8251-4382-a856-c5ab0c7d4fc5","params":{"event_action":"Download","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_download","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""},"google_ads":{"delay":0,"type":"dyn","name":"Signal","extensions":["","doc","exe","js","pdf","ppt","tgz","zip","xls"],"params":{"event_action":"Download","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_download","ids":[],"hasTimeWindow":false,"timeWindow":0,"pixelIds":[],"eventID":"","woo_order":"","edd_order":""}},"signal_comment":{"facebook":{"delay":0,"type":"dyn","name":"Signal","pixelIds":["301911569431625"],"eventID":"58a638ab-d07a-45bd-a749-71e6370fda67","params":{"event_action":"Comment","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_comment","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""},"google_ads":{"delay":0,"type":"dyn","name":"Signal","params":{"event_action":"Comment","page_title":"Home","post_type":"page","post_id":2840,"plugin":"PixelYourSite","event_url":"cristalclinica.com.br\/","user_role":"guest"},"e_id":"signal_comment","ids":[],"hasTimeWindow":false,"timeWindow":0,"pixelIds":[],"eventID":"","woo_order":"","edd_order":""}}},"triggerEvents":[],"triggerEventTypes":[],"facebook":{"pixelIds":["301911569431625"],"defoultPixelIds":["301911569431625"],"advancedMatching":[],"removeMetadata":false,"wooVariableAsSimple":false,"serverApiEnabled":true,"ajaxForServerEvent":true,"wooCRSendFromServer":false,"send_external_id":true},"google_ads":{"conversion_ids":["GTM-5HW442B"],"wooVariableAsSimple":false},"debug":"","siteUrl":"https:\/\/cristalclinica.com.br","ajaxUrl":"https:\/\/cristalclinica.com.br\/wp-admin\/admin-ajax.php","trackUTMs":"1","trackTrafficSource":"1","user_id":"0","enable_lading_page_param":"1","cookie_duration":"7","signal_watch_video_enabled":"1","enable_event_day_param":"1","enable_event_month_param":"1","enable_event_time_param":"1","enable_remove_target_url_param":"1","enable_remove_download_url_param":"1","gdpr":{"ajax_enabled":false,"all_disabled_by_api":false,"facebook_disabled_by_api":false,"analytics_disabled_by_api":false,"google_ads_disabled_by_api":false,"pinterest_disabled_by_api":false,"bing_disabled_by_api":false,"facebook_prior_consent_enabled":true,"analytics_prior_consent_enabled":true,"google_ads_prior_consent_enabled":true,"pinterest_prior_consent_enabled":true,"bing_prior_consent_enabled":true,"cookiebot_integration_enabled":false,"cookiebot_facebook_consent_category":"marketing","cookiebot_analytics_consent_category":"statistics","cookiebot_google_ads_consent_category":"marketing","cookiebot_pinterest_consent_category":"marketing","cookiebot_bing_consent_category":"marketing","cookie_notice_integration_enabled":false,"cookie_law_info_integration_enabled":false,"real_cookie_banner_integration_enabled":false,"consent_magic_integration_enabled":false},"edd":{"enabled":false},"woo":{"enabled":true,"addToCartOnButtonEnabled":true,"addToCartOnButtonValueEnabled":true,"addToCartOnButtonValueOption":"price","woo_purchase_on_transaction":true,"singleProductId":null,"affiliateEnabled":false,"removeFromCartSelector":"form.woocommerce-cart-form .remove","affiliateEventName":"Lead"}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/pixelyoursite-pro/dist/scripts/public.js?ver=1701288250" id="pys-js" defer></script>

<!-- Snippet do Google Analytics adicionado pelo Site Kit -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://www.googletagmanager.com/gtag/js?id=GT-KV6RJV8" id="google_gtagjs-js" async></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="google_gtagjs-js-after">
/* <![CDATA[ */
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('set', 'linker', {"domains":["cristalclinica.com.br"]} );
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "GT-KV6RJV8");
/* ]]> */
</script>

<!-- Finalizar o snippet do Google Analytics adicionado pelo Site Kit -->
<link rel="https://api.w.org/" href="https://cristalclinica.com.br/wp-json/" /><link rel="alternate" type="application/json" href="https://cristalclinica.com.br/wp-json/wp/v2/pages/2840" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cristalclinica.com.br/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.4.2" />
<meta name="generator" content="WooCommerce 8.3.1" />
<link rel="canonical" href="https://cristalclinica.com.br/" />
<link rel='shortlink' href='https://cristalclinica.com.br/' />
<link rel="alternate" type="application/json+oembed" href="https://cristalclinica.com.br/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcristalclinica.com.br%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://cristalclinica.com.br/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcristalclinica.com.br%2F&#038;format=xml" />
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript"> var commercekit_ajs = {"ajax_url":"\/?commercekit-ajax"}; var commercekit_pdp = {"pdp_thumbnails":4,"pdp_lightbox":1,"pdp_gallery_layout":"grid-2-4","pdp_sticky_atc":0,"cgkit_sticky_hdr_class":"body.sticky-m header.site-header"}; var commercekit_as = []; </script>
	<meta name="generator" content="Site Kit by Google 1.114.0" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="https://cristalclinica.com.br/wp-content/uploads/2023/11/cropped-cristal-logo-completa-1-2-100x100.png" sizes="32x32" />
<link rel="icon" href="https://cristalclinica.com.br/wp-content/uploads/2023/11/cropped-cristal-logo-completa-1-2-300x300.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://cristalclinica.com.br/wp-content/uploads/2023/11/cropped-cristal-logo-completa-1-2-300x300.png" />
<meta name="msapplication-TileImage" content="https://cristalclinica.com.br/wp-content/uploads/2023/11/cropped-cristal-logo-completa-1-2-300x300.png" />
		<style type="text/css" id="wp-custom-css">
			.swiper-slide img {
  display: block;
  width: 100%;
  height: 100% !important;
  object-fit: cover;
}

.mobile-search-toggle {
  background: #fff !important;
}

.woocommerce-loop-product__title a {
  font-weight: 600;
}
header.woocommerce-products-header .term-description + img.cg-cat-image, header.woocommerce-products-header .term-description + noscript + img.cg-cat-image, header.woocommerce-products-header .term-description + picture {
  min-width: 25%;
  max-width: 40%;
}
.cg-cat-image {
  height: 400px;
}
@media (max-width:480px)  { /* smartphones, portrait iPhone, portrait 480x320 phones (Android) */ 
header.woocommerce-products-header .term-description + img.cg-cat-image, header.woocommerce-products-header .term-description + noscript + img.cg-cat-image, header.woocommerce-products-header .term-description + picture {
  min-width: 100%;
  max-width: 100%;
}
.term-description {
  margin-top: 30%;
}
}

strong {
  font-weight: 700;
}		</style>
		<style id="kirki-inline-styles">.site-header .custom-logo-link img{height:58px;}.is_stuck .logo-mark{width:166px;}.is_stuck .primary-navigation.with-logo .menu-primary-menu-container{margin-left:166px;}.price ins, .summary .yith-wcwl-add-to-wishlist a:before, .site .commercekit-wishlist a i:before, .commercekit-wishlist-table .price, .commercekit-wishlist-table .price ins, .commercekit-ajs-product-price, .commercekit-ajs-product-price ins, .widget-area .widget.widget_categories a:hover, #secondary .widget ul li a:hover, #secondary.widget-area .widget li.chosen a, .widget-area .widget a:hover, #secondary .widget_recent_comments ul li a:hover, .woocommerce-pagination .page-numbers li .page-numbers.current, div.product p.price, body:not(.mobile-toggled) .main-navigation ul.menu li.full-width.menu-item-has-children ul li.highlight > a, body:not(.mobile-toggled) .main-navigation ul.menu li.full-width.menu-item-has-children ul li.highlight > a:hover, #secondary .widget ins span.amount, #secondary .widget ins span.amount span, .search-results article h2 a:hover{color:#000000;}.spinner > div, .widget_price_filter .ui-slider .ui-slider-range, .widget_price_filter .ui-slider .ui-slider-handle, #page .woocommerce-tabs ul.tabs li span, #secondary.widget-area .widget .tagcloud a:hover, .widget-area .widget.widget_product_tag_cloud a:hover, footer .mc4wp-form input[type="submit"], #payment .payment_methods li.woocommerce-PaymentMethod > input[type=radio]:first-child:checked + label:before, #payment .payment_methods li.wc_payment_method > input[type=radio]:first-child:checked + label:before, #shipping_method > li > input[type=radio]:first-child:checked + label:before, ul#shipping_method li:only-child label:before, .image-border .elementor-image:after, ul.products li.product .yith-wcwl-wishlistexistsbrowse a:before, ul.products li.product .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .yith-wcwl-add-button a:before, .summary .yith-wcwl-add-to-wishlist a:before, li.product .commercekit-wishlist a em.cg-wishlist-t:before, li.product .commercekit-wishlist a em.cg-wishlist:before, .site .commercekit-wishlist a i:before, .summary .commercekit-wishlist a i.cg-wishlist-t:before, #page .woocommerce-tabs ul.tabs li a span, .commercekit-atc-tab-links li a span, .main-navigation ul li a span strong, .widget_layered_nav ul.woocommerce-widget-layered-nav-list li.chosen:before{background-color:#000000;}.woocommerce-tabs .tabs li a::after, .commercekit-atc-tab-links li a:after{border-color:#000000;}a{color:#1e68c4;}a:hover{color:#111;}body{background-color:#fff;}.col-full.topbar-wrapper{background-color:#fff;border-bottom-color:#eee;}.top-bar, .top-bar a{color:#323232;}body:not(.header-4) .site-header, .header-4-container{background-color:#fff;}.fa.menu-item, .ri.menu-item{border-left-color:#ffffff;}.header-4 .search-trigger span{border-right-color:#ffffff;}.header-widget-region{background-color:#dc9814;}.header-widget-region, .header-widget-region a{color:#fff;}.button, .button:hover, .commercekit-wishlist-table button, input[type=submit], ul.products li.product .button, ul.products li.product .added_to_cart, ul.wc-block-grid__products .wp-block-button__link, ul.wc-block-grid__products .wp-block-button__link:hover, .site .widget_shopping_cart a.button.checkout, .woocommerce #respond input#submit.alt, .main-navigation ul.menu ul li a.button, .main-navigation ul.menu ul li a.button:hover, body .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li a.button:hover, .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li:hover a.added_to_cart, .site div.wpforms-container-full .wpforms-form button[type=submit], .product .cart .single_add_to_cart_button, .woocommerce-cart p.return-to-shop a, .elementor-row .feature p a, .image-feature figcaption span{color:#fff;}.single-product div.product form.cart .button.added::before, #payment .place-order .button:before, .cart-collaterals .checkout-button:before, .widget_shopping_cart .buttons .checkout:before{background-color:#fff;}.button, input[type=submit], ul.products li.product .button, .commercekit-wishlist-table button, .woocommerce #respond input#submit.alt, .product .cart .single_add_to_cart_button, .widget_shopping_cart a.button.checkout, .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li a.added_to_cart, .site div.wpforms-container-full .wpforms-form button[type=submit], ul.products li.product .added_to_cart, ul.wc-block-grid__products .wp-block-button__link, .woocommerce-cart p.return-to-shop a, .elementor-row .feature a, .image-feature figcaption span{background-color:#000000;}.widget_shopping_cart a.button.checkout{border-color:#000000;}.button:hover, [type="submit"]:hover, .commercekit-wishlist-table button:hover, ul.products li.product .button:hover, #place_order[type="submit"]:hover, body .woocommerce #respond input#submit.alt:hover, .product .cart .single_add_to_cart_button:hover, .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li a.added_to_cart:hover, .site div.wpforms-container-full .wpforms-form button[type=submit]:hover, .site div.wpforms-container-full .wpforms-form button[type=submit]:focus, ul.products li.product .added_to_cart:hover, ul.wc-block-grid__products .wp-block-button__link:hover, .widget_shopping_cart a.button.checkout:hover, .woocommerce-cart p.return-to-shop a:hover{background-color:#000000;}.widget_shopping_cart a.button.checkout:hover{border-color:#000000;}.onsale, .product-label, .wc-block-grid__product-onsale{background-color:#000000;color:#fff;}.content-area .summary .onsale{color:#000000;}.summary .product-label:before, .product-details-wrapper .product-label:before{border-right-color:#000000;}.entry-content .testimonial-entry-title:after, .cart-summary .widget li strong::before, p.stars.selected a.active::before, p.stars:hover a::before, p.stars.selected a:not(.active)::before{color:#000000;}.star-rating > span:before{background-color:#000000;}header.woocommerce-products-header, .shoptimizer-category-banner{background-color:#efeee3;}.term-description p, .term-description a, .term-description a:hover, .shoptimizer-category-banner h1, .shoptimizer-category-banner .taxonomy-description p{color:#222;}.single-product .site-content .col-full{background-color:#f8f8f8;}.call-back-feature a{background-color:#000000;color:#fff;}ul.checkout-bar:before, .woocommerce-checkout .checkout-bar li.active:after, ul.checkout-bar li.visited:after{background-color:#000000;}.below-content .widget .ri{color:#999;}.below-content .widget svg{stroke:#999;}footer.site-footer, footer.copyright{background-color:#111;color:#ccc;}.site footer.site-footer .widget .widget-title, .site-footer .widget.widget_block h2{color:#fff;}footer.site-footer a:not(.button), footer.copyright a{color:#999;}footer.site-footer a:not(.button):hover, footer.copyright a:hover{color:#fff;}footer.site-footer li a:after{border-color:#fff;}.top-bar{font-size:14px;}.menu-primary-menu-container > ul > li > a span:before{border-color:#dc9814;}.secondary-navigation .menu a, .ri.menu-item:before, .fa.menu-item:before{color:#404040;}.secondary-navigation .icon-wrapper svg{stroke:#404040;}.site-header-cart a.cart-contents .count, .site-header-cart a.cart-contents .count:after{border-color:#1b1b1b;}.site-header-cart a.cart-contents .count, .shoptimizer-cart-icon i{color:#1b1b1b;}.site-header-cart a.cart-contents:hover .count, .site-header-cart a.cart-contents:hover .count{background-color:#1b1b1b;}.site-header-cart .cart-contents{color:#1b1b1b;}.header-widget-region .widget{padding-top:12px;padding-bottom:12px;}.site .header-widget-region p, .site .header-widget-region li{font-size:14px;}.col-full, .single-product .site-content .shoptimizer-sticky-add-to-cart .col-full, body .woocommerce-message, .single-product .site-content .commercekit-sticky-add-to-cart .col-full{max-width:1920px;}.product-details-wrapper, .single-product .woocommerce-Tabs-panel, .single-product .archive-header .woocommerce-breadcrumb, .plp-below.archive.woocommerce .archive-header .woocommerce-breadcrumb, .related.products, .site-content #sspotReviews:not([data-shortcode="1"]), .upsells.products, .composite_summary, .composite_wrap, .yith-wfbt-section.woocommerce{max-width:calc(1920px + 5.2325em);}.main-navigation ul li.menu-item-has-children.full-width .container, .single-product .woocommerce-error{max-width:1920px;}.below-content .col-full, footer .col-full{max-width:calc(1920px + 40px);}#secondary{width:17%;}.content-area{width:76%;}body, button, input, select, option, textarea, h6{font-family:Montserrat;font-weight:300;}.menu-primary-menu-container > ul > li > a, .site-header-cart .cart-contents{font-family:Montserrat;font-size:14px;font-weight:300;text-transform:uppercase;}.main-navigation ul.menu ul li > a, .main-navigation ul.nav-menu ul li > a, .main-navigation ul.menu ul li.nolink{font-family:IBM Plex Sans;font-size:15px;font-weight:400;text-transform:none;}.main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li.menu-item-has-children > a, .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li.heading > a, .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li.nolink > span{font-family:IBM Plex Sans;font-size:12px;font-weight:600;letter-spacing:0.5px;text-transform:none;color:#111;}.entry-content{font-family:Montserrat;font-weight:300;color:#a5a5a5;}h1{font-family:Montserrat;text-transform:uppercase;}h2{font-family:Montserrat;font-weight:600;text-transform:uppercase;}h3{font-family:Montserrat;text-transform:uppercase;}h4{font-family:Montserrat;text-transform:uppercase;}h5{font-family:Montserrat;text-transform:uppercase;}blockquote p{font-family:IBM Plex Sans;font-size:20px;font-weight:400;line-height:1.45;text-transform:none;color:#222;}.widget .widget-title, .widget .widgettitle, .widget.widget_block h2{font-family:Montserrat;}body.single-post h1{font-family:IBM Plex Sans;font-size:36px;font-weight:600;letter-spacing:-0.6px;line-height:1.24;text-transform:none;}.term-description, .shoptimizer-category-banner .taxonomy-description{font-family:Montserrat;font-weight:300;}.content-area ul.products li.product .woocommerce-loop-product__title, .content-area ul.products li.product h2, ul.products li.product .woocommerce-loop-product__title, ul.products li.product .woocommerce-loop-product__title, .main-navigation ul.menu ul li.product .woocommerce-loop-product__title a, .wc-block-grid__product .wc-block-grid__product-title{font-family:Montserrat;font-size:16px;text-transform:uppercase;}.summary h1{font-family:Montserrat;text-transform:uppercase;}body .woocommerce #respond input#submit.alt, body .woocommerce a.button.alt, body .woocommerce button.button.alt, body .woocommerce input.button.alt, .product .cart .single_add_to_cart_button, .shoptimizer-sticky-add-to-cart__content-button a.button, .widget_shopping_cart a.button.checkout, #cgkit-tab-commercekit-sticky-atc-title button, #cgkit-mobile-commercekit-sticky-atc button{font-family:Montserrat;text-transform:uppercase;}@media (max-width: 992px){.main-header, .site-branding{height:70px;}.main-header .site-header-cart{top:calc(-14px + 70px / 2);}.sticky-m .mobile-filter, .sticky-m #cgkitpf-horizontal{top:70px;}.sticky-m .commercekit-atc-sticky-tabs{top:calc(70px - 1px);}.m-search-bh.sticky-m .commercekit-atc-sticky-tabs, .m-search-toggled.sticky-m .commercekit-atc-sticky-tabs{top:calc(70px + 60px - 1px);}.m-search-bh.sticky-m .mobile-filter, .m-search-toggled.sticky-m .mobile-filter, .m-search-bh.sticky-m #cgkitpf-horizontal, .m-search-toggled.sticky-m #cgkitpf-horizontal{top:calc(70px + 60px);}.sticky-m .cg-layout-vertical-scroll .cg-thumb-swiper{top:calc(70px + 10px);}body.theme-shoptimizer .site-header .custom-logo-link img, body.wp-custom-logo .site-header .custom-logo-link img{height:35px;}.m-search-bh .site-search, .m-search-toggled .site-search, .site-branding button.menu-toggle, .site-branding button.menu-toggle:hover{background-color:#fff;}.menu-toggle .bar, .site-header-cart a.cart-contents:hover .count{background-color:#111;}.menu-toggle .bar-text, .menu-toggle:hover .bar-text, .site-header-cart a.cart-contents .count{color:#111;}.mobile-search-toggle svg, .mobile-myaccount svg{stroke:#111;}.site-header-cart a.cart-contents:hover .count{background-color:#000000;}.site-header-cart a.cart-contents:not(:hover) .count{color:#000000;}.shoptimizer-cart-icon svg{stroke:#000000;}.site-header .site-header-cart a.cart-contents .count, .site-header-cart a.cart-contents .count:after{border-color:#000000;}.col-full-nav{background-color:#fff;}.main-navigation ul li a, body .main-navigation ul.menu > li.menu-item-has-children > span.caret::after, .main-navigation .woocommerce-loop-product__title, .main-navigation ul.menu li.product, body .main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li h6 a, body .main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li h6 a:hover, .main-navigation ul.products li.product .price, body .main-navigation ul.menu li.menu-item-has-children li.menu-item-has-children span.caret, body.mobile-toggled .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li p.product__categories a, body.mobile-toggled ul.products li.product p.product__categories a, body li.menu-item-product p.product__categories, main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li.menu-item-has-children > a, .main-navigation ul.menu li.menu-item-has-children.full-width > .sub-menu-wrapper li.heading > a, .mobile-extra, .mobile-extra h4, .mobile-extra a:not(.button){color:#222;}.main-navigation ul.menu li.menu-item-has-children span.caret::after{background-color:#222;}.main-navigation ul.menu > li.menu-item-has-children.dropdown-open > .sub-menu-wrapper{border-bottom-color:#ffffff;}}@media (min-width: 993px){.col-full-nav{background-color:#fff;}.col-full.main-header{padding-top:15px;padding-bottom:15px;}.menu-primary-menu-container > ul > li > a, .site-header-cart, .logo-mark{line-height:60px;}.site-header-cart, .menu-primary-menu-container > ul > li.menu-button{height:60px;}.menu-primary-menu-container > ul > li > a{color:#1b1b1b;}.main-navigation ul.menu > li.menu-item-has-children > a::after{background-color:#1b1b1b;}.menu-primary-menu-container > ul.menu:hover > li > a{opacity:0.65;}.main-navigation ul.menu ul.sub-menu{background-color:#fff;}.main-navigation ul.menu ul li a, .main-navigation ul.nav-menu ul li a{color:#323232;}.main-navigation ul.menu ul a:hover{color:#dc9814;}.shoptimizer-cart-icon svg{stroke:#1b1b1b;}.site-header-cart a.cart-contents:hover .count{color:#fff;}body.header-4:not(.full-width-header) .header-4-inner, .summary form.cart.commercekit_sticky-atc .commercekit-pdp-sticky-inner, .commercekit-atc-sticky-tabs ul.commercekit-atc-tab-links, .h-ckit-filters.no-woocommerce-sidebar .commercekit-product-filters{max-width:1920px;}}@media (min-width: 992px){.top-bar .textwidget{padding-top:10px;padding-bottom:10px;}}/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdzeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdXeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdLeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd7eE6xOedfTDw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd_eE6xOedfTDw.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdHeE6xOedc.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIxscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIVscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIJscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI5scv3pBmtF8A.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI9scv3pBmtF8A.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIFscv3pBms.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdzeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdXeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdLeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd7eE6xOedfTDw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd_eE6xOedfTDw.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdHeE6xOedc.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIxscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIVscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIJscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI5scv3pBmtF8A.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI9scv3pBmtF8A.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIFscv3pBms.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdzeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdXeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdLeE6xOedfTDw.woff) format('woff');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd7eE6xOedfTDw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd_eE6xOedfTDw.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdHeE6xOedc.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIxscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIVscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIJscv3pBmtF8A.woff) format('woff');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI5scv3pBmtF8A.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI9scv3pBmtF8A.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(https://cristalclinica.com.br/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIFscv3pBms.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}</style><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
</head>

<body data-rsssl=1 class="home page-template page-template-template-canvas page-template-template-canvas-php page page-id-2840 wp-custom-logo theme-shoptimizer woocommerce-no-js pdp-ajax sticky-m sticky-d pdp-g-skinny header-2 pdp-full right-archives-sidebar wc-active product-align-left elementor-default elementor-kit-2794 elementor-page elementor-page-2840">


<div class="mobile-menu close-drawer">
				<span aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
				</span>
		</div>
<div id="page" class="hfeed site">

			<a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
				<div class="shoptimizer-mini-cart-wrap">
			<div id="ajax-loading">
				<div class="shoptimizer-loader">
					<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
					</div>
				</div>
			</div>
			<div class="cart-drawer-heading">Your Cart</div>
			<div class="close-drawer">
				<span aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
				</span>
			</div>

				<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>
			</div>


			
	
		
					<div class="col-full topbar-wrapper hide-on-mobile">
				
			<div class="top-bar">
				<div class="col-full">
																			</div>
			</div>
		</div>
			
		
	<header id="masthead" class="site-header">

		<div class="menu-overlay"></div>

		<div class="main-header col-full">

					<div class="site-branding">
			<button class="menu-toggle" aria-label="Menu" aria-controls="site-navigation" aria-expanded="false">
				<span class="bar"></span><span class="bar"></span><span class="bar"></span>
								<span class="bar-text">MENU</span>
					
			</button>
			<a href="https://cristalclinica.com.br/" class="custom-logo-link"><picture class="custom-logo">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png.webp 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-300x69.png.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1024x235.png.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-768x176.png.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1536x352.png.webp 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-2048x470.png.webp 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-990x227.png.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-441x101.png.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1300x298.png.webp 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-150x34.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202388%20548&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px"/>
<img width="2388" height="548" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202388%20548&#039;%3E%3C/svg%3E" alt="Cristal Clínica Capilar" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-300x69.png 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1024x235.png 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-768x176.png 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1536x352.png 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-2048x470.png 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-990x227.png 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-441x101.png 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1300x298.png 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-150x34.png 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png"/>
</picture>
<noscript><picture class="custom-logo">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png.webp 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-300x69.png.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1024x235.png.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-768x176.png.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1536x352.png.webp 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-2048x470.png.webp 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-990x227.png.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-441x101.png.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1300x298.png.webp 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-150x34.png.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px"/>
<img width="2388" height="548" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png" alt="Cristal Clínica Capilar" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-300x69.png 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1024x235.png 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-768x176.png 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1536x352.png 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-2048x470.png 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-990x227.png 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-441x101.png 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-1300x298.png 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2-150x34.png 150w" sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px"/>
</picture>
</noscript></a>		</div>
											<button class="mobile-search-toggle" aria-label="Search toggle" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
					</svg>
				</button>
						
									
												<div class="site-search">
						
							<div class="widget woocommerce widget_product_search"><form role="search" method="get" class="woocommerce-product-search" action="https://cristalclinica.com.br/">
	<label class="screen-reader-text" for="woocommerce-product-search-field-0">Pesquisar por:</label>
	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Pesquisar produtos&hellip;" value="" name="s" />
	<button type="submit" value="Pesquisar" class="">Pesquisar</button>
	<input type="hidden" name="post_type" value="product" />
</form>
</div>						</div>
														



		<ul class="site-header-cart menu">
			<li>			
	<div class="cart-click">

					<a class="cart-contents" href="#" title="View your shopping cart">
		
		<span class="amount"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#082;&#036;</span>0,00</span></span>

		
		<span class="count">0</span>
		
		
		

		</a>
	</div>	
		</li>
		</ul>
		
								<div class="s-observer"></div>
		
		</div>


	</header><!-- #masthead -->

	
	<div class="col-full-nav">

	<div class="shoptimizer-primary-navigation col-full">		
			
			<nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">

			
						<div class="primary-navigation with-logo">
			
							
					<div class="logo-mark">
						<a href="#" rel="home">
							<picture>
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202388%20548&#039;%3E%3C/svg%3E"/>
<img width="2388" height="548" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202388%20548&#039;%3E%3C/svg%3E" alt="Cristal Clínica Capilar" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png"/>
</picture>
<noscript><picture loading="lazy">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png.webp"/>
<img width="2388" height="548" loading="lazy" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-2.png" alt="Cristal Clínica Capilar"/>
</picture>
</noscript>
						</a>    
					</div>

						
						<div class="menu-primary-menu-container">
				<ul id="menu-principal" class="menu"><li id="nav-menu-item-2872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="https://cristalclinica.com.br/produtos/" class="cg-menu-link main-menu-link"><span>Nossos Produtos</span></a><span class="caret"></span>
<div class='sub-menu-wrapper'><div class='container'><ul class='sub-menu'>
	<li id="nav-menu-item-2881" class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://cristalclinica.com.br/produto/shampoo-energizante/" class="cg-menu-link sub-menu-link"><span>Shampoo Energizante<span class="sub"> </span></span></a></li>
	<li id="nav-menu-item-2878" class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://cristalclinica.com.br/produto/balsamo-condicionante-energizante/" class="cg-menu-link sub-menu-link"><span>Bálsamo Condicionante Energizante<span class="sub"> </span></span></a></li>
	<li id="nav-menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://cristalclinica.com.br/produto/tonico-energizante/" class="cg-menu-link sub-menu-link"><span>Tônico Energizante<span class="sub"> </span></span></a></li>
	<li id="nav-menu-item-2882" class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://cristalclinica.com.br/produto/suplemento-capilar/" class="cg-menu-link sub-menu-link"><span>Suplemento Capilar<span class="sub"> </span></span></a></li>
	<li id="nav-menu-item-2879" class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://cristalclinica.com.br/produto/blend-de-oleos/" class="cg-menu-link sub-menu-link"><span>Blend de Óleos<span class="sub"> </span></span></a></li>
	<li id="nav-menu-item-2880" class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://cristalclinica.com.br/produto/leite-multifuncional/" class="cg-menu-link sub-menu-link"><span>Leite Multifuncional<span class="sub"> </span></span></a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-2869" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="https://cristalclinica.com.br/nossos-tratamentos/" class="cg-menu-link main-menu-link"><span>Nossos Tratamentos</span></a><span class="caret"></span>
<div class='sub-menu-wrapper'><div class='container'><ul class='sub-menu'>
	<li id="nav-menu-item-2873" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/nossos-tratamentos/#spa" class="cg-menu-link sub-menu-link"><span>Spa Capilar</span></a></li>
	<li id="nav-menu-item-2874" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/nossos-tratamentos/#proc" class="cg-menu-link sub-menu-link"><span>Procedimentos</span></a></li>
	<li id="nav-menu-item-2875" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/nossos-tratamentos/#sob" class="cg-menu-link sub-menu-link"><span>Sobrancelhas</span></a></li>
	<li id="nav-menu-item-2876" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/nossos-tratamentos/#cons" class="cg-menu-link sub-menu-link"><span>Consulta</span></a></li>
	<li id="nav-menu-item-2877" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/nossos-tratamentos/#exp" class="cg-menu-link sub-menu-link"><span>Experiência Cristal</span></a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-2867" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://cristalclinica.com.br/clinica-spa-capilar/" class="cg-menu-link main-menu-link"><span>Clínica &#038; Spa Capilar</span></a></li>
<li id="nav-menu-item-2868" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://cristalclinica.com.br/dra-cristal-bastos/" class="cg-menu-link main-menu-link"><span>Dra. Cristal Bastos</span></a></li>
</ul>			</div>
					

		</div>
		</nav><!-- #site-navigation -->
							



		<ul class="site-header-cart menu">
			<li>			
	<div class="cart-click">

					<a class="cart-contents" href="#" title="View your shopping cart">
		
		<span class="amount"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#082;&#036;</span>0,00</span></span>

		
		<span class="count">0</span>
		
		
		

		</a>
	</div>	
		</li>
		</ul>
		
					</div>
	</div>

			<div class="mobile-overlay"></div>
			
				
	<div id="content" class="site-content" tabindex="-1">

		<div class="shoptimizer-archive">

		<div class="archive-header">
			<div class="col-full">
				<div class="woocommerce"></div>			</div>
		</div>

		<div class="col-full">
				
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			
<div id="post-2840" class="post-2840 page type-page status-publish hentry">
			<div class="entry-content">
					<div data-elementor-type="wp-page" data-elementor-id="2840" class="elementor elementor-2840" data-elementor-post-type="page">
							<div class="elementor-element elementor-element-559a02c1 e-con-full e-flex e-con e-parent" data-id="559a02c1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}" data-core-v316-plus="true">
				<div class="elementor-element elementor-element-5bc5f1db elementor-pagination-type-bullets elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-n-carousel" data-id="5bc5f1db" data-element_type="widget" data-settings="{&quot;carousel_items&quot;:[{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;5cd310f&quot;},{&quot;slide_title&quot;:&quot;Slide #2&quot;,&quot;_id&quot;:&quot;ff8673c&quot;}],&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;1&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;offset_sides&quot;:&quot;none&quot;,&quot;arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="nested-carousel.default">
				<div class="elementor-widget-container">
					<div class="e-n-carousel swiper-container" dir="ltr">
			<div class="swiper-wrapper" aria-live="off">
										<div class="swiper-slide" data-slide="1" role="group" aria-roledescription="slide" aria-label="1 of 2">
							<div class="elementor-element elementor-element-6cbd723e e-con-full e-flex e-con e-child" data-id="6cbd723e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
		<div class="elementor-element elementor-element-52f12829 e-con-full e-flex e-con e-child" data-id="52f12829" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-3cbf075 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-heading" data-id="3cbf075" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Naturalmente Fortes</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-30d2890f elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image" data-id="30d2890f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<picture decoding="async" class="attachment-full size-full wp-image-2841">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1.jpg.webp 2500w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-300x187.jpg.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1024x639.jpg.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-768x480.jpg.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1536x959.jpg.webp 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-2048x1279.jpg.webp 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-990x618.jpg.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-441x275.jpg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1300x812.jpg.webp 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-150x94.jpg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202500%201561&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 2500px) 100vw, 2500px"/>
<img decoding="async" width="2500" height="1561" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202500%201561&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1.jpg 2500w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-300x187.jpg 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1024x639.jpg 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-768x480.jpg 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1536x959.jpg 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-2048x1279.jpg 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-990x618.jpg 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-441x275.jpg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1300x812.jpg 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-150x94.jpg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 2500px) 100vw, 2500px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1.jpg"/>
</picture>
<noscript><picture decoding="async" class="attachment-full size-full wp-image-2841">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1.jpg.webp 2500w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-300x187.jpg.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1024x639.jpg.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-768x480.jpg.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1536x959.jpg.webp 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-2048x1279.jpg.webp 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-990x618.jpg.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-441x275.jpg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1300x812.jpg.webp 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-150x94.jpg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 2500px) 100vw, 2500px"/>
<img decoding="async" width="2500" height="1561" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1.jpg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1.jpg 2500w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-300x187.jpg 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1024x639.jpg 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-768x480.jpg 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1536x959.jpg 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-2048x1279.jpg 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-990x618.jpg 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-441x275.jpg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-1300x812.jpg 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_2821-1-150x94.jpg 150w" sizes="(max-width: 360px) 147px, (max-width: 2500px) 100vw, 2500px"/>
</picture>
</noscript>															</div>
				</div>
				</div>
				</div>
								</div>
											<div class="swiper-slide" data-slide="2" role="group" aria-roledescription="slide" aria-label="2 of 2">
							<div class="elementor-element elementor-element-f15a813 e-con-full e-flex e-con e-child" data-id="f15a813" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
		<div class="elementor-element elementor-element-1a1389e5 e-con-full e-flex e-con e-child" data-id="1a1389e5" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
		<div class="elementor-element elementor-element-3c74d3d7 e-con-full e-flex e-con e-child" data-id="3c74d3d7" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-20120360 elementor-widget elementor-widget-heading" data-id="20120360" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">LINHA ENERGIZANTE</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-f9ab59d elementor-widget elementor-widget-heading" data-id="f9ab59d" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Tratamento Antiqueda</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-25d15d43 elementor-hidden-mobile elementor-widget elementor-widget-text-editor" data-id="25d15d43" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Com ativos consagrados, sendo os principais a cafeína, o chá verde, a niacinamida, a biotina e os óleos essenciais de alecrim e menta piperita, os produtos da linha têm eficácia comprovada em estimular o crescimento capilar, fortalecer os fios e controlar a queda, sendo um poderoso tratamento contra a queda, enfraquecimento e afinamento capilar.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-2e1f710 elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="2e1f710" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Conhecer Produtos</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-27504525 e-con-full e-flex e-con e-child" data-id="27504525" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-23186cbd elementor-widget elementor-widget-image" data-id="23186cbd" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<picture decoding="async" class="attachment-large size-large wp-image-2842">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-1024x1024.png.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-300x300.png.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-150x150.png.webp 150w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-768x768.png.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-990x990.png.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-441x441.png.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-100x100.png.webp 100w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1.png.webp 1080w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 1024px) 100vw, 1024px"/>
<img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-1024x1024.png 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-300x300.png 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-150x150.png 150w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-768x768.png 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-990x990.png 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-441x441.png 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-100x100.png 100w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1.png 1080w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 1024px) 100vw, 1024px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-1024x1024.png"/>
</picture>
<noscript><picture decoding="async" class="attachment-large size-large wp-image-2842">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-1024x1024.png.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-300x300.png.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-150x150.png.webp 150w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-768x768.png.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-990x990.png.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-441x441.png.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-100x100.png.webp 100w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1.png.webp 1080w" sizes="(max-width: 360px) 147px, (max-width: 1024px) 100vw, 1024px"/>
<img decoding="async" width="1024" height="1024" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-1024x1024.png" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-1024x1024.png 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-300x300.png 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-150x150.png 150w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-768x768.png 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-990x990.png 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-441x441.png 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1-100x100.png 100w, https://cristalclinica.com.br/wp-content/uploads/2023/11/366103125_3549999451883082_7006173772126764018_n-1.png 1080w" sizes="(max-width: 360px) 147px, (max-width: 1024px) 100vw, 1024px"/>
</picture>
</noscript>															</div>
				</div>
				</div>
				</div>
				</div>
								</div>
								</div>
		</div>
							<div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
				<i aria-hidden="true" class="eicon-chevron-left"></i>			</div>
			<div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
				<i aria-hidden="true" class="eicon-chevron-right"></i>			</div>
					<div class="swiper-pagination"></div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-4dc41dc7 e-flex e-con-boxed e-con e-parent" data-id="4dc41dc7" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-44108b48 elementor-widget elementor-widget-heading" data-id="44108b48" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Nossos Produtos</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-1a41bc5b elementor-widget elementor-widget-text-editor" data-id="1a41bc5b" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p class="_aacl _aaco _aacu _aacx _aad7 _aade" dir="auto">Cada ingrediente foi cuidadosamente selecionado para garantir a máxima eficácia</p>						</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-1cfa6975 e-con-full e-flex e-con e-parent" data-id="1cfa6975" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}" data-core-v316-plus="true">
				<div class="elementor-element elementor-element-22c33400 elementor-grid-tablet-2 elementor-grid-6 elementor-grid-mobile-2 elementor-products-grid elementor-wc-products elementor-widget elementor-widget-woocommerce-products" data-id="22c33400" data-element_type="widget" data-widget_type="woocommerce-products.default">
				<div class="elementor-widget-container">
			<div class="woocommerce columns-6 "><ul class="products elementor-grid columns-6">
<li class="product type-product post-2856 status-publish first instock product_cat-linha-energizante product_cat-produtos has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="woocommerce-image__wrapper"><a href="https://cristalclinica.com.br/produto/shampoo-energizante/" aria-label="Shampoo Energizante" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><picture decoding="async" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/10/Cristal_Produtos_3673-1-scaled-2-1200x2160.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%202160&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px,"/>
<img decoding="async" width="1200" height="2160" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%202160&#039;%3E%3C/svg%3E" alt="" data-lazy-sizes="(max-width: 360px) 147px," data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/10/Cristal_Produtos_3673-1-scaled-2-1200x2160.jpg"/>
</picture>
<noscript><picture decoding="async" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/10/Cristal_Produtos_3673-1-scaled-2-1200x2160.jpg.webp" sizes="(max-width: 360px) 147px,"/>
<img decoding="async" width="1200" height="2160" src="https://cristalclinica.com.br/wp-content/uploads/2023/10/Cristal_Produtos_3673-1-scaled-2-1200x2160.jpg" alt="" sizes="(max-width: 360px) 147px,"/>
</picture>
</noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-150x200.jpeg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-150x200.jpeg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359.jpeg"/>
</picture>
<noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-150x200.jpeg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359.jpeg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3359-150x200.jpeg 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
</picture>
</noscript>			
	</a></div><div class="woocommerce-card__header">					<p class="product__categories"><a href="https://cristalclinica.com.br/categoria-produto/linha-energizante/" rel="tag">Linha Energizante</a>, <a href="https://cristalclinica.com.br/categoria-produto/produtos/" rel="tag">Produtos</a></p>				<div class="woocommerce-loop-product__title"><a href="https://cristalclinica.com.br/produto/shampoo-energizante/" aria-label="Shampoo Energizante" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Shampoo Energizante</a></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>129,00</bdi></span></span>
<a href="?add-to-cart=2856" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2856" data-product_sku="" aria-label="Adicionar &ldquo;Shampoo Energizante&rdquo; no seu carrinho" aria-describedby="" rel="nofollow">Comprar</a></div></li>
<li class="product type-product post-2860 status-publish outofstock product_cat-linha-energizante product_cat-produtos has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="woocommerce-image__wrapper"><a href="https://cristalclinica.com.br/produto/balsamo-condicionante-energizante/" aria-label="Bálsamo Condicionante Energizante" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">			<span class="product-out-of-stock"><em>Out of stock</em></span>
			<img decoding="async" width="1200" height="2160" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%202160'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-lazy-sizes="(max-width: 360px) 147px, " data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/10/balsamo-scaled-2-1200x2160.jpg" /><noscript><img decoding="async" width="1200" height="2160" src="https://cristalclinica.com.br/wp-content/uploads/2023/10/balsamo-scaled-2-1200x2160.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 360px) 147px, " /></noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-150x200.jpeg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-150x200.jpeg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365.jpeg"/>
</picture>
<noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-150x200.jpeg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365.jpeg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3365-150x200.jpeg 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
</picture>
</noscript>			
	</a></div><div class="woocommerce-card__header">					<p class="product__categories"><a href="https://cristalclinica.com.br/categoria-produto/linha-energizante/" rel="tag">Linha Energizante</a>, <a href="https://cristalclinica.com.br/categoria-produto/produtos/" rel="tag">Produtos</a></p>				<div class="woocommerce-loop-product__title"><a href="https://cristalclinica.com.br/produto/balsamo-condicionante-energizante/" aria-label="Bálsamo Condicionante Energizante" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bálsamo Condicionante Energizante</a></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>129,00</bdi></span></span>
<a href="https://cristalclinica.com.br/produto/balsamo-condicionante-energizante/" data-quantity="1" class="button product_type_simple" data-product_id="2860" data-product_sku="" aria-label="Leia mais sobre &ldquo;Bálsamo Condicionante Energizante&rdquo;" aria-describedby="" rel="nofollow">Leia mais</a></div></li>
<li class="product type-product post-2861 status-publish instock product_cat-linha-energizante product_cat-produtos has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="woocommerce-image__wrapper"><a href="https://cristalclinica.com.br/produto/tonico-energizante/" aria-label="Tônico Energizante" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img decoding="async" width="1200" height="2160" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%202160'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-lazy-sizes="(max-width: 360px) 147px, " data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/10/tonico-scaled-2-1200x2160.jpg" /><noscript><img decoding="async" width="1200" height="2160" src="https://cristalclinica.com.br/wp-content/uploads/2023/10/tonico-scaled-2-1200x2160.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 360px) 147px, " /></noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-150x200.jpeg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-150x200.jpeg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386.jpeg"/>
</picture>
<noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-150x200.jpeg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386.jpeg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3386-150x200.jpeg 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
</picture>
</noscript>			
	</a></div><div class="woocommerce-card__header">					<p class="product__categories"><a href="https://cristalclinica.com.br/categoria-produto/linha-energizante/" rel="tag">Linha Energizante</a>, <a href="https://cristalclinica.com.br/categoria-produto/produtos/" rel="tag">Produtos</a></p>				<div class="woocommerce-loop-product__title"><a href="https://cristalclinica.com.br/produto/tonico-energizante/" aria-label="Tônico Energizante" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tônico Energizante</a></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>122,00</bdi></span></span>
<a href="?add-to-cart=2861" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2861" data-product_sku="" aria-label="Adicionar &ldquo;Tônico Energizante&rdquo; no seu carrinho" aria-describedby="" rel="nofollow">Comprar</a></div></li>
<li class="product type-product post-2862 status-publish instock product_cat-produtos has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="woocommerce-image__wrapper"><a href="https://cristalclinica.com.br/produto/suplemento-capilar/" aria-label="Suplemento Capilar" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img decoding="async" width="1200" height="2160" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%202160'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-lazy-sizes="(max-width: 360px) 147px, " data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/10/suplemento-1-scaled-2-1200x2160.jpg" /><noscript><img decoding="async" width="1200" height="2160" src="https://cristalclinica.com.br/wp-content/uploads/2023/10/suplemento-1-scaled-2-1200x2160.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 360px) 147px, " /></noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-150x200.jpeg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-150x200.jpeg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108.jpeg"/>
</picture>
<noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-150x200.jpeg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108.jpeg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3108-150x200.jpeg 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
</picture>
</noscript>			
	</a></div><div class="woocommerce-card__header">					<p class="product__categories"><a href="https://cristalclinica.com.br/categoria-produto/produtos/" rel="tag">Produtos</a></p>				<div class="woocommerce-loop-product__title"><a href="https://cristalclinica.com.br/produto/suplemento-capilar/" aria-label="Suplemento Capilar" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Suplemento Capilar</a></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>205,00</bdi></span></span>
<a href="?add-to-cart=2862" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2862" data-product_sku="" aria-label="Adicionar &ldquo;Suplemento Capilar&rdquo; no seu carrinho" aria-describedby="" rel="nofollow">Comprar</a></div></li>
<li class="product type-product post-2857 status-publish instock product_cat-produtos has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="woocommerce-image__wrapper"><a href="https://cristalclinica.com.br/produto/blend-de-oleos/" aria-label="Blend de Óleos" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><picture decoding="async" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/10/blenddeoleos-2-scaled-2-1200x2160.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%202160&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px,"/>
<img decoding="async" width="1200" height="2160" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%202160&#039;%3E%3C/svg%3E" alt="" data-lazy-sizes="(max-width: 360px) 147px," data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/10/blenddeoleos-2-scaled-2-1200x2160.jpg"/>
</picture>
<noscript><picture decoding="async" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/10/blenddeoleos-2-scaled-2-1200x2160.jpg.webp" sizes="(max-width: 360px) 147px,"/>
<img decoding="async" width="1200" height="2160" src="https://cristalclinica.com.br/wp-content/uploads/2023/10/blenddeoleos-2-scaled-2-1200x2160.jpg" alt="" sizes="(max-width: 360px) 147px,"/>
</picture>
</noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-150x200.jpeg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-150x200.jpeg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478.jpeg"/>
</picture>
<noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-150x200.jpeg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478.jpeg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3478-150x200.jpeg 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
</picture>
</noscript>			
	</a></div><div class="woocommerce-card__header">					<p class="product__categories"><a href="https://cristalclinica.com.br/categoria-produto/produtos/" rel="tag">Produtos</a></p>				<div class="woocommerce-loop-product__title"><a href="https://cristalclinica.com.br/produto/blend-de-oleos/" aria-label="Blend de Óleos" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Blend de Óleos</a></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>140,00</bdi></span></span>
<a href="?add-to-cart=2857" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2857" data-product_sku="" aria-label="Adicionar &ldquo;Blend de Óleos&rdquo; no seu carrinho" aria-describedby="" rel="nofollow">Comprar</a></div></li>
<li class="product type-product post-2859 status-publish last instock product_cat-produtos has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="woocommerce-image__wrapper"><a href="https://cristalclinica.com.br/produto/leite-multifuncional/" aria-label="Leite Multifuncional" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img decoding="async" width="1200" height="2160" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%202160'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-lazy-sizes="(max-width: 360px) 147px, " data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/10/leite-scaled-2-1200x2160.jpg" /><noscript><img decoding="async" width="1200" height="2160" src="https://cristalclinica.com.br/wp-content/uploads/2023/10/leite-scaled-2-1200x2160.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 360px) 147px, " /></noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-150x200.jpeg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20750%201000&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-150x200.jpeg 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418.jpeg"/>
</picture>
<noscript><picture decoding="async" class="gallery-image">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418.jpeg.webp 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-225x300.jpeg.webp 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-441x588.jpeg.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-150x200.jpeg.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
<img decoding="async" width="750" height="1000" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418.jpeg" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418.jpeg 750w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-225x300.jpeg 225w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-441x588.jpeg 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/Cristal_beauty_3418-150x200.jpeg 150w" sizes="(max-width: 360px) 147px, (max-width: 750px) 100vw, 750px"/>
</picture>
</noscript>			
	</a></div><div class="woocommerce-card__header">					<p class="product__categories"><a href="https://cristalclinica.com.br/categoria-produto/produtos/" rel="tag">Produtos</a></p>				<div class="woocommerce-loop-product__title"><a href="https://cristalclinica.com.br/produto/leite-multifuncional/" aria-label="Leite Multifuncional" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Leite Multifuncional</a></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>95,00</bdi></span></span>
<a href="?add-to-cart=2859" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2859" data-product_sku="" aria-label="Adicionar &ldquo;Leite Multifuncional&rdquo; no seu carrinho" aria-describedby="" rel="nofollow">Comprar</a></div></li>
</ul>
</div>		</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-6731bc04 e-con-full e-flex e-con e-parent" data-id="6731bc04" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}" data-core-v316-plus="true">
				<div class="elementor-element elementor-element-11e6c487 elementor-widget elementor-widget-heading" data-id="11e6c487" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Nossos Tratamentos</h2>		</div>
				</div>
		<div class="elementor-element elementor-element-6f552f9f e-con-full e-flex e-con e-child" data-id="6f552f9f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-77faf6f0 elementor-pagination-type-bullets elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-n-carousel" data-id="77faf6f0" data-element_type="widget" data-settings="{&quot;carousel_items&quot;:[{&quot;slide_title&quot;:&quot;Spa&quot;,&quot;_id&quot;:&quot;3a28b28&quot;},{&quot;slide_title&quot;:&quot;Procedimentos&quot;,&quot;_id&quot;:&quot;ec504f4&quot;},{&quot;slide_title&quot;:&quot;Slide #3&quot;,&quot;_id&quot;:&quot;f89313f&quot;},{&quot;slide_title&quot;:&quot;Slide #3&quot;,&quot;_id&quot;:&quot;4a649ae&quot;},{&quot;slide_title&quot;:&quot;Slide #3&quot;,&quot;_id&quot;:&quot;a8ec41a&quot;}],&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;offset_sides&quot;:&quot;right&quot;,&quot;offset_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;offset_width_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;offset_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;offset_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="nested-carousel.default">
				<div class="elementor-widget-container">
					<div class="e-n-carousel swiper-container" dir="ltr">
			<div class="swiper-wrapper" aria-live="off">
										<div class="swiper-slide" data-slide="1" role="group" aria-roledescription="slide" aria-label="1 of 5">
							<div class="elementor-element elementor-element-7ac31eb8 e-flex e-con-boxed e-con e-child" data-id="7ac31eb8" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-1feb2500 e-con-full e-flex e-con e-child" data-id="1feb2500" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-2cb9f730 elementor-widget elementor-widget-heading" data-id="2cb9f730" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://cristalclinica.com.br/nossos-tratamentos/#spa">Spa Capilar</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-48034677 elementor-widget elementor-widget-button" data-id="48034677" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://cristalclinica.com.br/nossos-tratamentos/#spa">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">saiba +</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				</div>
					</div>
				</div>
								</div>
											<div class="swiper-slide" data-slide="2" role="group" aria-roledescription="slide" aria-label="2 of 5">
							<div class="elementor-element elementor-element-20210bd e-flex e-con-boxed e-con e-child" data-id="20210bd" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-3d1fc1b6 e-con-full e-flex e-con e-child" data-id="3d1fc1b6" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-dba3eff elementor-widget elementor-widget-heading" data-id="dba3eff" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://cristalclinica.com.br/nossos-tratamentos/#proc">Procedimentos</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-690179fa elementor-widget elementor-widget-button" data-id="690179fa" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://cristalclinica.com.br/nossos-tratamentos/#proc">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">saiba +</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				</div>
					</div>
				</div>
								</div>
											<div class="swiper-slide" data-slide="3" role="group" aria-roledescription="slide" aria-label="3 of 5">
							<div class="elementor-element elementor-element-5c903c59 e-flex e-con-boxed e-con e-child" data-id="5c903c59" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-2b59565e e-con-full e-flex e-con e-child" data-id="2b59565e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-e7e0df1 elementor-widget elementor-widget-heading" data-id="e7e0df1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://cristalclinica.com.br/nossos-tratamentos/#sob">Sobrancelhas</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-7346ac1d elementor-widget elementor-widget-button" data-id="7346ac1d" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://cristalclinica.com.br/nossos-tratamentos/#sob">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">saiba +</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				</div>
					</div>
				</div>
								</div>
											<div class="swiper-slide" data-slide="4" role="group" aria-roledescription="slide" aria-label="4 of 5">
							<div class="elementor-element elementor-element-55bd972d e-flex e-con-boxed e-con e-child" data-id="55bd972d" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-221fc74a e-con-full e-flex e-con e-child" data-id="221fc74a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-43240c2b elementor-widget elementor-widget-heading" data-id="43240c2b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://cristalclinica.com.br/nossos-tratamentos/#cons">Consulta</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-1faf3002 elementor-widget elementor-widget-button" data-id="1faf3002" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://cristalclinica.com.br/nossos-tratamentos/#cons">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">saiba +</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				</div>
					</div>
				</div>
								</div>
											<div class="swiper-slide" data-slide="5" role="group" aria-roledescription="slide" aria-label="5 of 5">
							<div class="elementor-element elementor-element-6a3d6526 e-flex e-con-boxed e-con e-child" data-id="6a3d6526" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-3650b913 e-con-full e-flex e-con e-child" data-id="3650b913" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-76420492 elementor-widget elementor-widget-heading" data-id="76420492" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://cristalclinica.com.br/nossos-tratamentos/#exp">Experiência Cristal</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-193b60a7 elementor-widget elementor-widget-button" data-id="193b60a7" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://cristalclinica.com.br/nossos-tratamentos/#exp">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">saiba +</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				</div>
					</div>
				</div>
								</div>
								</div>
		</div>
							<div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
				<i aria-hidden="true" class="eicon-chevron-left"></i>			</div>
			<div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
				<i aria-hidden="true" class="eicon-chevron-right"></i>			</div>
					<div class="swiper-pagination"></div>
				</div>
				</div>
				</div>
				</div>
							</div>
							</div><!-- .entry-content -->
		</div><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->


		</div><!-- .col-full -->
	</div><!-- #content -->

</div>

			<div data-elementor-type="footer" data-elementor-id="2805" class="elementor elementor-2805 elementor-location-footer" data-elementor-post-type="elementor_library">
						<div class="elementor-element elementor-element-12f8d56c e-con-full e-flex e-con e-parent" data-id="12f8d56c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}" data-core-v316-plus="true">
		<div class="elementor-element elementor-element-266b1fa5 e-con-full e-flex e-con e-child" data-id="266b1fa5" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-4961a3c5 elementor-widget elementor-widget-image" data-id="4961a3c5" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<picture class="attachment-full size-full wp-image-2806">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3.png.webp 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-300x69.png.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1024x235.png.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-768x176.png.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1536x352.png.webp 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-2048x470.png.webp 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-990x227.png.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-441x101.png.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1300x298.png.webp 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-150x34.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202388%20548&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px"/>
<img width="2388" height="548" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%202388%20548&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3.png 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-300x69.png 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1024x235.png 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-768x176.png 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1536x352.png 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-2048x470.png 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-990x227.png 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-441x101.png 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1300x298.png 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-150x34.png 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3.png"/>
</picture>
<noscript><picture class="attachment-full size-full wp-image-2806">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3.png.webp 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-300x69.png.webp 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1024x235.png.webp 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-768x176.png.webp 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1536x352.png.webp 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-2048x470.png.webp 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-990x227.png.webp 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-441x101.png.webp 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1300x298.png.webp 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-150x34.png.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px"/>
<img width="2388" height="548" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3.png" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3.png 2388w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-300x69.png 300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1024x235.png 1024w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-768x176.png 768w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1536x352.png 1536w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-2048x470.png 2048w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-990x227.png 990w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-441x101.png 441w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-1300x298.png 1300w, https://cristalclinica.com.br/wp-content/uploads/2023/11/cristal-logo-completa-1-3-150x34.png 150w" sizes="(max-width: 360px) 147px, (max-width: 2388px) 100vw, 2388px"/>
</picture>
</noscript>															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-282d842b e-con-full e-flex e-con e-child" data-id="282d842b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
				<div class="elementor-element elementor-element-92dd93e elementor-icon-list--layout-inline elementor-align-right elementor-hidden-tablet elementor-hidden-mobile elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="92dd93e" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="https://cristalclinica.com.br/produtos/">

											<span class="elementor-icon-list-text">Nossos produtos</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="https://cristalclinica.com.br/nossos-tratamentos/">

											<span class="elementor-icon-list-text">Nossos tratamentos</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="https://cristalclinica.com.br/clinica-spa-capilar/">

											<span class="elementor-icon-list-text">A Cristal Clínica Capilar</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="https://cristalclinica.com.br/dra-cristal-bastos/">

											<span class="elementor-icon-list-text">Dra. Cristal Bastos</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-ce1234c elementor-align-right elementor-mobile-align-center elementor-hidden-desktop elementor-hidden-laptop elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ce1234c" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://cristalclinica.com.br/produtos/">

											<span class="elementor-icon-list-text">Nossos produtos</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://cristalclinica.com.br/nossos-tratamentos/">

											<span class="elementor-icon-list-text">Nossos tratamentos</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://cristalclinica.com.br/clinica-spa-capilar/">

											<span class="elementor-icon-list-text">A Cristal Clínica Capilar</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://cristalclinica.com.br/dra-cristal-bastos/">

											<span class="elementor-icon-list-text">Dra. Cristal Bastos</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-d079689 e-flex e-con-boxed e-con e-parent" data-id="d079689" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-18430411 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="18430411" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-20bfdb98 e-grid e-con-boxed e-con e-parent" data-id="20bfdb98" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;grid&quot;,&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;1&quot;,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_laptop&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_laptop&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_auto_flow&quot;:&quot;row&quot;,&quot;grid_auto_flow_laptop&quot;:&quot;row&quot;,&quot;grid_auto_flow_tablet&quot;:&quot;row&quot;,&quot;grid_auto_flow_mobile&quot;:&quot;row&quot;}" data-core-v316-plus="true">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-4f9d6d2c elementor-widget elementor-widget-text-editor" data-id="4f9d6d2c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Av. Desembargador Santos Neves, <br />763B, Loja 02 &#8211; Praia do Canto,<br />Vitória – ES</p>						</div>
				</div>
				<div class="elementor-element elementor-element-1b491e80 elementor-widget elementor-widget-text-editor" data-id="1b491e80" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<b>Telefone:</b> (27) 3376.5871<br><b>WhatsApp</b>: (27) 9 9797.5871						</div>
				</div>
				<div class="elementor-element elementor-element-37d6e19d elementor-widget elementor-widget-text-editor" data-id="37d6e19d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p><b>E-mail:</b><br />contato@cristalclinica.com.br</p>						</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-59de743c e-flex e-con-boxed e-con e-parent" data-id="59de743c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-4fdd94b7 elementor-widget elementor-widget-text-editor" data-id="4fdd94b7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Desenvolvido por</p>						</div>
				</div>
				<div class="elementor-element elementor-element-195ef2ae elementor-widget elementor-widget-image" data-id="195ef2ae" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://artmark.com.br" target="_blank">
							<picture class="attachment-full size-full wp-image-2807">
<source type="image/webp" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco.png.webp 222w, https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20222%2066&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 222px) 100vw, 222px"/>
<img width="222" height="66" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20222%2066&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco.png 222w, https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco-150x45.png 150w" data-lazy-sizes="(max-width: 360px) 147px, (max-width: 222px) 100vw, 222px" data-lazy-src="https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco.png"/>
</picture>
<noscript><picture class="attachment-full size-full wp-image-2807">
<source type="image/webp" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco.png.webp 222w, https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco-150x45.png.webp 150w" sizes="(max-width: 360px) 147px, (max-width: 222px) 100vw, 222px"/>
<img width="222" height="66" src="https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco.png" alt="" srcset="https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco.png 222w, https://cristalclinica.com.br/wp-content/uploads/2023/11/artmark-branco-150x45.png 150w" sizes="(max-width: 360px) 147px, (max-width: 222px) 100vw, 222px"/>
</picture>
</noscript>								</a>
															</div>
				</div>
					</div>
				</div>
						</div>
		
	
	

</div><!-- #page -->

<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.31 -->  
            <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3  " id="ht-ctc-chat"  
                style="display: none;  position: fixed; bottom: 15px; right: 15px;"   >
                                <div class="ht_ctc_style ht_ctc_chat_style">
                <div title = 'Fale Conosco' style="display:flex;justify-content:center;align-items:center; " class="ctc_s_3 ctc_nb" data-nb_top="-5px" data-nb_right="-5px">
    <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta " style="padding: 0px 16px; line-height: 1.6; ; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; ">Fale Conosco</p>
    <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px" viewBox="0 0 1219.547 1225.016">
            <path style="fill: #E0E0E0;" fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"/>
            <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                <stop offset="0" stop-color="#20b038"/>
                <stop offset="1" stop-color="#60d66a"/>
            </linearGradient>
            <path style="fill: url(#htwaicona-chat);" fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"/>
            <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"/>
            <path fill-rule="evenodd" clip-rule="evenodd" style="fill: #FFFFFF;" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"/>
            <path style="fill: #FFFFFF;" fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"/>
        </svg></div>                </div>
            </div>
                        <span class="ht_ctc_chat_data" 
                data-no_number=""
                data-settings="{&quot;number&quot;:&quot;5527997975871&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;,&quot;g_an_event_name&quot;:&quot;chat: {number}&quot;,&quot;pixel_event_name&quot;:&quot;Click to Chat by HoliThemes&quot;}" 
            ></span>
            <div id='pys_ajax_events'></div><noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=301911569431625&ev=PageView&noscript=1&eid=7a739b68-0610-4fac-85b2-ba7b3bae3a28&cd[page_title]=Home&cd[post_type]=page&cd[post_id]=2840&cd[plugin]=PixelYourSite&cd[event_url]=cristalclinica.com.br%2F&cd[user_role]=guest" alt="facebook_pixel"></noscript>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script type="text/javascript" id="ht_ctc_app_js-js-extra">
/* <![CDATA[ */
var ht_ctc_chat_var = {"number":"5527997975871","pre_filled":"","dis_m":"show","dis_d":"show","css":"display: none; cursor: pointer; z-index: 99999999;","pos_d":"position: fixed; bottom: 15px; right: 15px;","pos_m":"position: fixed; bottom: 15px; right: 15px;","schedule":"no","se":"150","ani":"no-animations","url_target_d":"_blank","ga":"yes","fb":"yes","g_an_event_name":"chat: {number}","pixel_event_name":"Click to Chat by HoliThemes"};
var ht_ctc_variables = {"g_an_event_name":"chat: {number}","pixel_event_type":"trackCustom","pixel_event_name":"Click to Chat by HoliThemes","g_an_params":["g_an_param_1","g_an_param_2","g_an_param_3"],"g_an_param_1":{"key":"number","value":"{number}"},"g_an_param_2":{"key":"title","value":"{title}"},"g_an_param_3":{"key":"url","value":"{url}"},"pixel_params":["pixel_param_1","pixel_param_2","pixel_param_3","pixel_param_4"],"pixel_param_1":{"key":"Category","value":"Click to Chat for WhatsApp"},"pixel_param_2":{"key":"ID","value":"{number}"},"pixel_param_3":{"key":"Title","value":"{title}"},"pixel_param_4":{"key":"URL","value":"{url}"}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/app.js?ver=1701288250" id="ht_ctc_app_js-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-browser-checker-js-after">
/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-extra">
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/finalizar-compra\/??(.*)|\/carrinho\/?|\/conta\/??(.*)|\/wc-api\/v(.*)|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/cristalclinica.com.br","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-preload-links-js-after">
/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/themes/shoptimizer/assets/js/main.min.js?ver=2.6.7" id="shoptimizer-main-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="shoptimizer-main-js-after">
/* <![CDATA[ */
				jQuery( document ).ready( function( $ ) {
					$( 'body' ).on( 'added_to_cart', function( event, fragments, cart_hash ) {
						if ( ! $( 'body' ).hasClass( 'elementor-editor-active' ) ) {
							$( 'body' ).addClass( 'drawer-open' );
						}
					} );				
				} );
				document.addEventListener( 'DOMContentLoaded', function() {
					document.addEventListener( 'click', function( event ) {
						var is_inner = event.target.closest( '.shoptimizer-mini-cart-wrap' );
						if ( ! event.target.classList.contains( 'shoptimizer-mini-cart-wrap' ) && ! is_inner ) {
							document.querySelector( 'body' ).classList.remove( 'drawer-open' );
						}
						var is_inner2 = event.target.closest( '.cart-click' );
						if ( event.target.classList.contains( 'cart-click' ) || is_inner2 ) {
							var is_header = event.target.closest( '.site-header-cart' );
							if ( is_header ) {
								event.preventDefault();
								document.querySelector( 'body' ).classList.toggle( 'drawer-open' );
							}
						}
						if ( event.target.classList.contains( 'close-drawer' ) ) {
							document.querySelector( 'body' ).classList.remove( 'drawer-open' );
						}
					} );
				} );
				var interceptor = ( function( open ) {
					XMLHttpRequest.prototype.open = function( method, url, async, user, pass ) {
						this.addEventListener( 'readystatechange', function() {
						switch ( this.readyState ) {
							case 1:
								document.querySelector( '#ajax-loading' ).style.display = 'block';
							break;
							case 4:
								document.querySelector( '#ajax-loading' ).style.display = 'none';
							break;
						}
						}, false );
						if ( async !== false ) {
							async = true;
						}
						open.call( this, method, url, async, user, pass );
					};
				}  ( XMLHttpRequest.prototype.open ) );
				document.addEventListener( 'DOMContentLoaded', function() {
					document.querySelector( '#ajax-loading' ).style.display = 'none';
				} );
				

			
			var observer = new IntersectionObserver(function(entries) {
				if(entries[0].intersectionRatio === 0)
					document.querySelector('.col-full-nav').classList.add('is_stuck');
				else if(entries[0].intersectionRatio === 1)
					document.querySelector('.col-full-nav').classList.remove('is_stuck');
			}, { threshold: [0,1] });

			observer.observe(document.querySelector('.s-observer'));
		
/* ]]> */
</script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_689af7a525de7d3c6d6287d1ac041f15","fragment_name":"wc_fragments_689af7a525de7d3c6d6287d1ac041f15","request_timeout":"5000"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.3.1" id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.17.1" id="elementor-pro-webpack-runtime-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.17.3" id="elementor-webpack-runtime-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.17.3" id="elementor-frontend-modules-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="elementor-pro-frontend-js-before">
/* <![CDATA[ */
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/cristalclinica.com.br\/wp-admin\/admin-ajax.php","nonce":"229332ff24","urls":{"assets":"https:\/\/cristalclinica.com.br\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/cristalclinica.com.br\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/cristalclinica.com.br\/carrinho\/","checkout_page_url":"https:\/\/cristalclinica.com.br\/finalizar-compra\/","fragments_nonce":"3d006331b7"}},"facebook_sdk":{"lang":"pt_BR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/cristalclinica.com.br\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.17.1" id="elementor-pro-frontend-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartilhar no Facebook","shareOnTwitter":"Compartilhar no Twitter","pinIt":"Fixar","download":"Baixar","downloadImage":"Baixar imagem","fullscreen":"Tela cheia","zoom":"Zoom","share":"Compartilhar","playVideo":"Reproduzir v\u00eddeo","previous":"Anterior","next":"Pr\u00f3ximo","close":"Fechar","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Celular em modo retrato","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Celular em modo paisagem","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Retrato","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Paisagem do tablet","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.17.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"container":true,"container_grid":true,"theme_builder_v2":true,"nested-elements":true,"e_global_styleguide":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/cristalclinica.com.br\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_laptop"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":2840,"title":"Cristal%20Cl%C3%ADnica%20Capilar","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.17.3" id="elementor-frontend-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.17.1" id="pro-elements-handlers-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/jet-tricks/assets/js/lib/tippy/popperjs.js?ver=1701288250" id="jet-tricks-popperjs-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/jet-tricks/assets/js/lib/tippy/tippy-bundle.js?ver=1701288250" id="jet-tricks-tippy-bundle-js" defer></script>
<script type="text/javascript" id="jet-tricks-frontend-js-extra">
/* <![CDATA[ */
var JetTricksSettings = {"elements_data":{"sections":{"559a02c1":{"view_more":false,"particles":"false","particles_json":""},"6cbd723e":{"view_more":false,"particles":"false","particles_json":""},"52f12829":{"view_more":false,"particles":"false","particles_json":""},"f15a813":{"view_more":false,"particles":"false","particles_json":""},"1a1389e5":{"view_more":false,"particles":"false","particles_json":""},"3c74d3d7":{"view_more":false,"particles":"false","particles_json":""},"27504525":{"view_more":false,"particles":"false","particles_json":""},"4dc41dc7":{"view_more":false,"particles":"false","particles_json":""},"1cfa6975":{"view_more":false,"particles":"false","particles_json":""},"6731bc04":{"view_more":false,"particles":"false","particles_json":""},"6f552f9f":{"view_more":false,"particles":"false","particles_json":""},"7ac31eb8":{"view_more":false,"particles":"false","particles_json":""},"1feb2500":{"view_more":false,"particles":"false","particles_json":""},"20210bd":{"view_more":false,"particles":"false","particles_json":""},"3d1fc1b6":{"view_more":false,"particles":"false","particles_json":""},"5c903c59":{"view_more":false,"particles":"false","particles_json":""},"2b59565e":{"view_more":false,"particles":"false","particles_json":""},"55bd972d":{"view_more":false,"particles":"false","particles_json":""},"221fc74a":{"view_more":false,"particles":"false","particles_json":""},"6a3d6526":{"view_more":false,"particles":"false","particles_json":""},"3650b913":{"view_more":false,"particles":"false","particles_json":""},"12f8d56c":{"view_more":false,"particles":"false","particles_json":""},"266b1fa5":{"view_more":false,"particles":"false","particles_json":""},"282d842b":{"view_more":false,"particles":"false","particles_json":""},"d079689":{"view_more":false,"particles":"false","particles_json":""},"20bfdb98":{"view_more":false,"particles":"false","particles_json":""},"59de743c":{"view_more":false,"particles":"false","particles_json":""}},"columns":[],"widgets":{"5bc5f1db":[],"3cbf075":[],"30d2890f":[],"20120360":[],"f9ab59d":[],"25d15d43":[],"2e1f710":[],"23186cbd":[],"44108b48":[],"1a41bc5b":[],"22c33400":[],"11e6c487":[],"77faf6f0":[],"2cb9f730":[],"48034677":[],"dba3eff":[],"690179fa":[],"e7e0df1":[],"7346ac1d":[],"43240c2b":[],"1faf3002":[],"76420492":[],"193b60a7":[],"4961a3c5":[],"92dd93e":[],"ce1234c":[],"18430411":[],"4f9d6d2c":[],"1b491e80":[],"37d6e19d":[],"4fdd94b7":[],"195ef2ae":[]}}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://cristalclinica.com.br/wp-content/cache/min/1/wp-content/plugins/jet-tricks/assets/js/jet-tricks-frontend.js?ver=1701288250" id="jet-tricks-frontend-js" defer></script>
<script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://cristalclinica.com.br/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
<script>class RocketElementorAnimation{constructor(){this.deviceMode=document.createElement("span"),this.deviceMode.id="elementor-device-mode-wpr",this.deviceMode.setAttribute("class","elementor-screen-only"),document.body.appendChild(this.deviceMode)}_detectAnimations(){let t=getComputedStyle(this.deviceMode,":after").content.replace(/"/g,"");this.animationSettingKeys=this._listAnimationSettingsKeys(t),document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t=>{const e=t.getBoundingClientRect();if(e.bottom>=0&&e.top<=window.innerHeight)try{this._animateElement(t)}catch(t){}})}_animateElement(t){const e=JSON.parse(t.dataset.settings),i=e._animation_delay||e.animation_delay||0,n=e[this.animationSettingKeys.find(t=>e[t])];if("none"===n)return void t.classList.remove("elementor-invisible");t.classList.remove(n),this.currentAnimation&&t.classList.remove(this.currentAnimation),this.currentAnimation=n;let s=setTimeout(()=>{t.classList.remove("elementor-invisible"),t.classList.add("animated",n),this._removeAnimationSettings(t,e)},i);window.addEventListener("rocket-startLoading",function(){clearTimeout(s)})}_listAnimationSettingsKeys(t="mobile"){const e=[""];switch(t){case"mobile":e.unshift("_mobile");case"tablet":e.unshift("_tablet");case"desktop":e.unshift("_desktop")}const i=[];return["animation","_animation"].forEach(t=>{e.forEach(e=>{i.push(t+e)})}),i}_removeAnimationSettings(t,e){this._listAnimationSettingsKeys().forEach(t=>delete e[t]),t.dataset.settings=JSON.stringify(e)}static run(){const t=new RocketElementorAnimation;requestAnimationFrame(t._detectAnimations.bind(t))}}document.addEventListener("DOMContentLoaded",RocketElementorAnimation.run);</script></body>
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1702642373 -->
