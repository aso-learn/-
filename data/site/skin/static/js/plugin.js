﻿/*fn.sGallery*/
(function($){$.fn.sGallery=function(o){return new $sG(this,o)};var settings={thumbObj:null,titleObj:null,botLast:null,botNext:null,thumbNowClass:"now",slideTime:800,autoChange:true,changeTime:5000,delayTime:100};$.sGalleryLong=function(e,o){this.options=$.extend({},settings,o||{});var _self=$(e);var set=this.options;var thumb;var size=_self.size();var nowIndex=0;var index;var startRun;var delayRun;_self.eq(0).show();function fadeAB(){if(nowIndex!=index){if(set.thumbObj!=null){$(set.thumbObj).removeClass().eq(index).addClass(set.thumbNowClass)}_self.eq(nowIndex).stop(false,true).fadeOut(set.slideTime);_self.eq(index).stop(true,true).fadeIn(set.slideTime);$(set.titleObj).eq(nowIndex).hide();$(set.titleObj).eq(index).show();nowIndex=index;if(set.autoChange==true){clearInterval(startRun);startRun=setInterval(runNext,set.changeTime)}}}function runNext(){index=(nowIndex+1)%size;fadeAB()}if(set.thumbObj!=null){thumb=$(set.thumbObj);thumb.eq(0).addClass(set.thumbNowClass);thumb.bind("mousemove",function(event){index=thumb.index($(this));fadeAB();delayRun=setTimeout(fadeAB,set.delayTime);clearTimeout(delayRun);event.stopPropagation()})}if(set.botNext!=null){var botNext=$(set.botNext);botNext.mousemove(function(){runNext();return false})}if(set.botLast!=null){var botLast=$(set.botLast);botLast.mousemove(function(){index=(nowIndex+size-1)%size;fadeAB();return false})}if(set.autoChange==true){startRun=setInterval(runNext,set.changeTime)}};var $sG=$.sGalleryLong})(jQuery);
/*! Lazy Load 1.9.5 - MIT license - Copyright 2010-2015 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!1,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);
/* Jquery qrcode */
(function(r){r.fn.qrcode=function(h){var s;function u(a){this.mode=s;this.data=a}function o(a,c){this.typeNumber=a;this.errorCorrectLevel=c;this.modules=null;this.moduleCount=0;this.dataCache=null;this.dataList=[]}function q(a,c){if(void 0==a.length)throw Error(a.length+"/"+c);for(var d=0;d<a.length&&0==a[d];)d++;this.num=Array(a.length-d+c);for(var b=0;b<a.length-d;b++)this.num[b]=a[b+d]}function p(a,c){this.totalCount=a;this.dataCount=c}function t(){this.buffer=[];this.length=0}u.prototype={getLength:function(){return this.data.length},
write:function(a){for(var c=0;c<this.data.length;c++)a.put(this.data.charCodeAt(c),8)}};o.prototype={addData:function(a){this.dataList.push(new u(a));this.dataCache=null},isDark:function(a,c){if(0>a||this.moduleCount<=a||0>c||this.moduleCount<=c)throw Error(a+","+c);return this.modules[a][c]},getModuleCount:function(){return this.moduleCount},make:function(){if(1>this.typeNumber){for(var a=1,a=1;40>a;a++){for(var c=p.getRSBlocks(a,this.errorCorrectLevel),d=new t,b=0,e=0;e<c.length;e++)b+=c[e].dataCount;
for(e=0;e<this.dataList.length;e++)c=this.dataList[e],d.put(c.mode,4),d.put(c.getLength(),j.getLengthInBits(c.mode,a)),c.write(d);if(d.getLengthInBits()<=8*b)break}this.typeNumber=a}this.makeImpl(!1,this.getBestMaskPattern())},makeImpl:function(a,c){this.moduleCount=4*this.typeNumber+17;this.modules=Array(this.moduleCount);for(var d=0;d<this.moduleCount;d++){this.modules[d]=Array(this.moduleCount);for(var b=0;b<this.moduleCount;b++)this.modules[d][b]=null}this.setupPositionProbePattern(0,0);this.setupPositionProbePattern(this.moduleCount-
7,0);this.setupPositionProbePattern(0,this.moduleCount-7);this.setupPositionAdjustPattern();this.setupTimingPattern();this.setupTypeInfo(a,c);7<=this.typeNumber&&this.setupTypeNumber(a);null==this.dataCache&&(this.dataCache=o.createData(this.typeNumber,this.errorCorrectLevel,this.dataList));this.mapData(this.dataCache,c)},setupPositionProbePattern:function(a,c){for(var d=-1;7>=d;d++)if(!(-1>=a+d||this.moduleCount<=a+d))for(var b=-1;7>=b;b++)-1>=c+b||this.moduleCount<=c+b||(this.modules[a+d][c+b]=
0<=d&&6>=d&&(0==b||6==b)||0<=b&&6>=b&&(0==d||6==d)||2<=d&&4>=d&&2<=b&&4>=b?!0:!1)},getBestMaskPattern:function(){for(var a=0,c=0,d=0;8>d;d++){this.makeImpl(!0,d);var b=j.getLostPoint(this);if(0==d||a>b)a=b,c=d}return c},createMovieClip:function(a,c,d){a=a.createEmptyMovieClip(c,d);this.make();for(c=0;c<this.modules.length;c++)for(var d=1*c,b=0;b<this.modules[c].length;b++){var e=1*b;this.modules[c][b]&&(a.beginFill(0,100),a.moveTo(e,d),a.lineTo(e+1,d),a.lineTo(e+1,d+1),a.lineTo(e,d+1),a.endFill())}return a},
setupTimingPattern:function(){for(var a=8;a<this.moduleCount-8;a++)null==this.modules[a][6]&&(this.modules[a][6]=0==a%2);for(a=8;a<this.moduleCount-8;a++)null==this.modules[6][a]&&(this.modules[6][a]=0==a%2)},setupPositionAdjustPattern:function(){for(var a=j.getPatternPosition(this.typeNumber),c=0;c<a.length;c++)for(var d=0;d<a.length;d++){var b=a[c],e=a[d];if(null==this.modules[b][e])for(var f=-2;2>=f;f++)for(var i=-2;2>=i;i++)this.modules[b+f][e+i]=-2==f||2==f||-2==i||2==i||0==f&&0==i?!0:!1}},setupTypeNumber:function(a){for(var c=
j.getBCHTypeNumber(this.typeNumber),d=0;18>d;d++){var b=!a&&1==(c>>d&1);this.modules[Math.floor(d/3)][d%3+this.moduleCount-8-3]=b}for(d=0;18>d;d++)b=!a&&1==(c>>d&1),this.modules[d%3+this.moduleCount-8-3][Math.floor(d/3)]=b},setupTypeInfo:function(a,c){for(var d=j.getBCHTypeInfo(this.errorCorrectLevel<<3|c),b=0;15>b;b++){var e=!a&&1==(d>>b&1);6>b?this.modules[b][8]=e:8>b?this.modules[b+1][8]=e:this.modules[this.moduleCount-15+b][8]=e}for(b=0;15>b;b++)e=!a&&1==(d>>b&1),8>b?this.modules[8][this.moduleCount-
b-1]=e:9>b?this.modules[8][15-b-1+1]=e:this.modules[8][15-b-1]=e;this.modules[this.moduleCount-8][8]=!a},mapData:function(a,c){for(var d=-1,b=this.moduleCount-1,e=7,f=0,i=this.moduleCount-1;0<i;i-=2)for(6==i&&i--;;){for(var g=0;2>g;g++)if(null==this.modules[b][i-g]){var n=!1;f<a.length&&(n=1==(a[f]>>>e&1));j.getMask(c,b,i-g)&&(n=!n);this.modules[b][i-g]=n;e--; -1==e&&(f++,e=7)}b+=d;if(0>b||this.moduleCount<=b){b-=d;d=-d;break}}}};o.PAD0=236;o.PAD1=17;o.createData=function(a,c,d){for(var c=p.getRSBlocks(a,
c),b=new t,e=0;e<d.length;e++){var f=d[e];b.put(f.mode,4);b.put(f.getLength(),j.getLengthInBits(f.mode,a));f.write(b)}for(e=a=0;e<c.length;e++)a+=c[e].dataCount;if(b.getLengthInBits()>8*a)throw Error("code length overflow. ("+b.getLengthInBits()+">"+8*a+")");for(b.getLengthInBits()+4<=8*a&&b.put(0,4);0!=b.getLengthInBits()%8;)b.putBit(!1);for(;!(b.getLengthInBits()>=8*a);){b.put(o.PAD0,8);if(b.getLengthInBits()>=8*a)break;b.put(o.PAD1,8)}return o.createBytes(b,c)};o.createBytes=function(a,c){for(var d=
0,b=0,e=0,f=Array(c.length),i=Array(c.length),g=0;g<c.length;g++){var n=c[g].dataCount,h=c[g].totalCount-n,b=Math.max(b,n),e=Math.max(e,h);f[g]=Array(n);for(var k=0;k<f[g].length;k++)f[g][k]=255&a.buffer[k+d];d+=n;k=j.getErrorCorrectPolynomial(h);n=(new q(f[g],k.getLength()-1)).mod(k);i[g]=Array(k.getLength()-1);for(k=0;k<i[g].length;k++)h=k+n.getLength()-i[g].length,i[g][k]=0<=h?n.get(h):0}for(k=g=0;k<c.length;k++)g+=c[k].totalCount;d=Array(g);for(k=n=0;k<b;k++)for(g=0;g<c.length;g++)k<f[g].length&&
(d[n++]=f[g][k]);for(k=0;k<e;k++)for(g=0;g<c.length;g++)k<i[g].length&&(d[n++]=i[g][k]);return d};s=4;for(var j={PATTERN_POSITION_TABLE:[[],[6,18],[6,22],[6,26],[6,30],[6,34],[6,22,38],[6,24,42],[6,26,46],[6,28,50],[6,30,54],[6,32,58],[6,34,62],[6,26,46,66],[6,26,48,70],[6,26,50,74],[6,30,54,78],[6,30,56,82],[6,30,58,86],[6,34,62,90],[6,28,50,72,94],[6,26,50,74,98],[6,30,54,78,102],[6,28,54,80,106],[6,32,58,84,110],[6,30,58,86,114],[6,34,62,90,118],[6,26,50,74,98,122],[6,30,54,78,102,126],[6,26,52,
78,104,130],[6,30,56,82,108,134],[6,34,60,86,112,138],[6,30,58,86,114,142],[6,34,62,90,118,146],[6,30,54,78,102,126,150],[6,24,50,76,102,128,154],[6,28,54,80,106,132,158],[6,32,58,84,110,136,162],[6,26,54,82,110,138,166],[6,30,58,86,114,142,170]],G15:1335,G18:7973,G15_MASK:21522,getBCHTypeInfo:function(a){for(var c=a<<10;0<=j.getBCHDigit(c)-j.getBCHDigit(j.G15);)c^=j.G15<<j.getBCHDigit(c)-j.getBCHDigit(j.G15);return(a<<10|c)^j.G15_MASK},getBCHTypeNumber:function(a){for(var c=a<<12;0<=j.getBCHDigit(c)-
j.getBCHDigit(j.G18);)c^=j.G18<<j.getBCHDigit(c)-j.getBCHDigit(j.G18);return a<<12|c},getBCHDigit:function(a){for(var c=0;0!=a;)c++,a>>>=1;return c},getPatternPosition:function(a){return j.PATTERN_POSITION_TABLE[a-1]},getMask:function(a,c,d){switch(a){case 0:return 0==(c+d)%2;case 1:return 0==c%2;case 2:return 0==d%3;case 3:return 0==(c+d)%3;case 4:return 0==(Math.floor(c/2)+Math.floor(d/3))%2;case 5:return 0==c*d%2+c*d%3;case 6:return 0==(c*d%2+c*d%3)%2;case 7:return 0==(c*d%3+(c+d)%2)%2;default:throw Error("bad maskPattern:"+
a);}},getErrorCorrectPolynomial:function(a){for(var c=new q([1],0),d=0;d<a;d++)c=c.multiply(new q([1,l.gexp(d)],0));return c},getLengthInBits:function(a,c){if(1<=c&&10>c)switch(a){case 1:return 10;case 2:return 9;case s:return 8;case 8:return 8;default:throw Error("mode:"+a);}else if(27>c)switch(a){case 1:return 12;case 2:return 11;case s:return 16;case 8:return 10;default:throw Error("mode:"+a);}else if(41>c)switch(a){case 1:return 14;case 2:return 13;case s:return 16;case 8:return 12;default:throw Error("mode:"+
a);}else throw Error("type:"+c);},getLostPoint:function(a){for(var c=a.getModuleCount(),d=0,b=0;b<c;b++)for(var e=0;e<c;e++){for(var f=0,i=a.isDark(b,e),g=-1;1>=g;g++)if(!(0>b+g||c<=b+g))for(var h=-1;1>=h;h++)0>e+h||c<=e+h||0==g&&0==h||i==a.isDark(b+g,e+h)&&f++;5<f&&(d+=3+f-5)}for(b=0;b<c-1;b++)for(e=0;e<c-1;e++)if(f=0,a.isDark(b,e)&&f++,a.isDark(b+1,e)&&f++,a.isDark(b,e+1)&&f++,a.isDark(b+1,e+1)&&f++,0==f||4==f)d+=3;for(b=0;b<c;b++)for(e=0;e<c-6;e++)a.isDark(b,e)&&!a.isDark(b,e+1)&&a.isDark(b,e+
2)&&a.isDark(b,e+3)&&a.isDark(b,e+4)&&!a.isDark(b,e+5)&&a.isDark(b,e+6)&&(d+=40);for(e=0;e<c;e++)for(b=0;b<c-6;b++)a.isDark(b,e)&&!a.isDark(b+1,e)&&a.isDark(b+2,e)&&a.isDark(b+3,e)&&a.isDark(b+4,e)&&!a.isDark(b+5,e)&&a.isDark(b+6,e)&&(d+=40);for(e=f=0;e<c;e++)for(b=0;b<c;b++)a.isDark(b,e)&&f++;a=Math.abs(100*f/c/c-50)/5;return d+10*a}},l={glog:function(a){if(1>a)throw Error("glog("+a+")");return l.LOG_TABLE[a]},gexp:function(a){for(;0>a;)a+=255;for(;256<=a;)a-=255;return l.EXP_TABLE[a]},EXP_TABLE:Array(256),
LOG_TABLE:Array(256)},m=0;8>m;m++)l.EXP_TABLE[m]=1<<m;for(m=8;256>m;m++)l.EXP_TABLE[m]=l.EXP_TABLE[m-4]^l.EXP_TABLE[m-5]^l.EXP_TABLE[m-6]^l.EXP_TABLE[m-8];for(m=0;255>m;m++)l.LOG_TABLE[l.EXP_TABLE[m]]=m;q.prototype={get:function(a){return this.num[a]},getLength:function(){return this.num.length},multiply:function(a){for(var c=Array(this.getLength()+a.getLength()-1),d=0;d<this.getLength();d++)for(var b=0;b<a.getLength();b++)c[d+b]^=l.gexp(l.glog(this.get(d))+l.glog(a.get(b)));return new q(c,0)},mod:function(a){if(0>
this.getLength()-a.getLength())return this;for(var c=l.glog(this.get(0))-l.glog(a.get(0)),d=Array(this.getLength()),b=0;b<this.getLength();b++)d[b]=this.get(b);for(b=0;b<a.getLength();b++)d[b]^=l.gexp(l.glog(a.get(b))+c);return(new q(d,0)).mod(a)}};p.RS_BLOCK_TABLE=[[1,26,19],[1,26,16],[1,26,13],[1,26,9],[1,44,34],[1,44,28],[1,44,22],[1,44,16],[1,70,55],[1,70,44],[2,35,17],[2,35,13],[1,100,80],[2,50,32],[2,50,24],[4,25,9],[1,134,108],[2,67,43],[2,33,15,2,34,16],[2,33,11,2,34,12],[2,86,68],[4,43,27],
[4,43,19],[4,43,15],[2,98,78],[4,49,31],[2,32,14,4,33,15],[4,39,13,1,40,14],[2,121,97],[2,60,38,2,61,39],[4,40,18,2,41,19],[4,40,14,2,41,15],[2,146,116],[3,58,36,2,59,37],[4,36,16,4,37,17],[4,36,12,4,37,13],[2,86,68,2,87,69],[4,69,43,1,70,44],[6,43,19,2,44,20],[6,43,15,2,44,16],[4,101,81],[1,80,50,4,81,51],[4,50,22,4,51,23],[3,36,12,8,37,13],[2,116,92,2,117,93],[6,58,36,2,59,37],[4,46,20,6,47,21],[7,42,14,4,43,15],[4,133,107],[8,59,37,1,60,38],[8,44,20,4,45,21],[12,33,11,4,34,12],[3,145,115,1,146,
116],[4,64,40,5,65,41],[11,36,16,5,37,17],[11,36,12,5,37,13],[5,109,87,1,110,88],[5,65,41,5,66,42],[5,54,24,7,55,25],[11,36,12],[5,122,98,1,123,99],[7,73,45,3,74,46],[15,43,19,2,44,20],[3,45,15,13,46,16],[1,135,107,5,136,108],[10,74,46,1,75,47],[1,50,22,15,51,23],[2,42,14,17,43,15],[5,150,120,1,151,121],[9,69,43,4,70,44],[17,50,22,1,51,23],[2,42,14,19,43,15],[3,141,113,4,142,114],[3,70,44,11,71,45],[17,47,21,4,48,22],[9,39,13,16,40,14],[3,135,107,5,136,108],[3,67,41,13,68,42],[15,54,24,5,55,25],[15,
43,15,10,44,16],[4,144,116,4,145,117],[17,68,42],[17,50,22,6,51,23],[19,46,16,6,47,17],[2,139,111,7,140,112],[17,74,46],[7,54,24,16,55,25],[34,37,13],[4,151,121,5,152,122],[4,75,47,14,76,48],[11,54,24,14,55,25],[16,45,15,14,46,16],[6,147,117,4,148,118],[6,73,45,14,74,46],[11,54,24,16,55,25],[30,46,16,2,47,17],[8,132,106,4,133,107],[8,75,47,13,76,48],[7,54,24,22,55,25],[22,45,15,13,46,16],[10,142,114,2,143,115],[19,74,46,4,75,47],[28,50,22,6,51,23],[33,46,16,4,47,17],[8,152,122,4,153,123],[22,73,45,
3,74,46],[8,53,23,26,54,24],[12,45,15,28,46,16],[3,147,117,10,148,118],[3,73,45,23,74,46],[4,54,24,31,55,25],[11,45,15,31,46,16],[7,146,116,7,147,117],[21,73,45,7,74,46],[1,53,23,37,54,24],[19,45,15,26,46,16],[5,145,115,10,146,116],[19,75,47,10,76,48],[15,54,24,25,55,25],[23,45,15,25,46,16],[13,145,115,3,146,116],[2,74,46,29,75,47],[42,54,24,1,55,25],[23,45,15,28,46,16],[17,145,115],[10,74,46,23,75,47],[10,54,24,35,55,25],[19,45,15,35,46,16],[17,145,115,1,146,116],[14,74,46,21,75,47],[29,54,24,19,
55,25],[11,45,15,46,46,16],[13,145,115,6,146,116],[14,74,46,23,75,47],[44,54,24,7,55,25],[59,46,16,1,47,17],[12,151,121,7,152,122],[12,75,47,26,76,48],[39,54,24,14,55,25],[22,45,15,41,46,16],[6,151,121,14,152,122],[6,75,47,34,76,48],[46,54,24,10,55,25],[2,45,15,64,46,16],[17,152,122,4,153,123],[29,74,46,14,75,47],[49,54,24,10,55,25],[24,45,15,46,46,16],[4,152,122,18,153,123],[13,74,46,32,75,47],[48,54,24,14,55,25],[42,45,15,32,46,16],[20,147,117,4,148,118],[40,75,47,7,76,48],[43,54,24,22,55,25],[10,
45,15,67,46,16],[19,148,118,6,149,119],[18,75,47,31,76,48],[34,54,24,34,55,25],[20,45,15,61,46,16]];p.getRSBlocks=function(a,c){var d=p.getRsBlockTable(a,c);if(void 0==d)throw Error("bad rs block @ typeNumber:"+a+"/errorCorrectLevel:"+c);for(var b=d.length/3,e=[],f=0;f<b;f++)for(var h=d[3*f+0],g=d[3*f+1],j=d[3*f+2],l=0;l<h;l++)e.push(new p(g,j));return e};p.getRsBlockTable=function(a,c){switch(c){case 1:return p.RS_BLOCK_TABLE[4*(a-1)+0];case 0:return p.RS_BLOCK_TABLE[4*(a-1)+1];case 3:return p.RS_BLOCK_TABLE[4*
(a-1)+2];case 2:return p.RS_BLOCK_TABLE[4*(a-1)+3]}};t.prototype={get:function(a){return 1==(this.buffer[Math.floor(a/8)]>>>7-a%8&1)},put:function(a,c){for(var d=0;d<c;d++)this.putBit(1==(a>>>c-d-1&1))},getLengthInBits:function(){return this.length},putBit:function(a){var c=Math.floor(this.length/8);this.buffer.length<=c&&this.buffer.push(0);a&&(this.buffer[c]|=128>>>this.length%8);this.length++}};"string"===typeof h&&(h={text:h});h=r.extend({},{render:"canvas",width:256,height:256,typeNumber:-1,
correctLevel:2,background:"#ffffff",foreground:"#000000"},h);return this.each(function(){var a;if("canvas"==h.render){a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();var c=document.createElement("canvas");c.width=h.width;c.height=h.height;for(var d=c.getContext("2d"),b=h.width/a.getModuleCount(),e=h.height/a.getModuleCount(),f=0;f<a.getModuleCount();f++)for(var i=0;i<a.getModuleCount();i++){d.fillStyle=a.isDark(f,i)?h.foreground:h.background;var g=Math.ceil((i+1)*b)-Math.floor(i*b),
j=Math.ceil((f+1)*b)-Math.floor(f*b);d.fillRect(Math.round(i*b),Math.round(f*e),g,j)}}else{a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();c=r("<table></table>").css("width",h.width+"px").css("height",h.height+"px").css("border","0px").css("border-collapse","collapse").css("background-color",h.background);d=h.width/a.getModuleCount();b=h.height/a.getModuleCount();for(e=0;e<a.getModuleCount();e++){f=r("<tr></tr>").css("height",b+"px").appendTo(c);for(i=0;i<a.getModuleCount();i++)r("<td></td>").css("width",
d+"px").css("background-color",a.isDark(e,i)?h.foreground:h.background).appendTo(f)}}a=c;jQuery(a).appendTo(this)})}})(jQuery);
/*snapShotWrap*/
(function($){var browserV=(navigator.userAgent.toLowerCase().match(/.+(?:ie)[\/: ]([\d.]+)/)||[0,"0"])[1];var browserVersion=(browserV=="2.0"||browserV=="1.0")?false:true;var posterTvGrid=function(o,options){this.parent=$("#"+o);this.body=$("body");if(this.parent.length<=0){return false}$(".snopshot:eq(0) span").removeClass("elementOverlay").addClass("elementOverlays");this.options=$.extend({},posterTvGrid.options,options);this.reset();var _this=this;$(window).resize(function(){_this.reset()})};posterTvGrid.prototype={reset:function(options){if(typeof(options)=="object"){$.extend(this.options,options)}this.total=this.parent.find("img").length;this.pageNow=this.options.initPage;this.preLeft=0;this.nextLeft=this.options.width-this.options.imgP;this.preNLeft=-this.options.imgP;this.nextNLeft=this.options.width;this.pageNowLeft=(this.options.width-this.options.imgWidth)/2;this.drawContent()},drawContent:function(){this.parent.css({height:this.options.imgHeight+"px"});this.parent.find(".snapShotCont").css({height:this.options.imgHeight+"px"});this.parent.find(".snopshot").css({width:"0px",opacity:0,left:this.options.width/2+"px",zIndex:0,marginTop:"135px"});this.parent.find(".snopshot:nth-child("+this.pageNow+")").css({width:this.options.imgWidth+"px",height:this.options.imgHeight+"px",opacity:1,left:this.pageNowLeft+"px",zIndex:3,marginTop:0});var pre=this.pageNow>1?this.pageNow-1:this.total;var next=this.pageNow==this.total?1:this.pageNow+1;this.parent.find(".snopshot:nth-child("+pre+")").css({opacity:1,left:this.preLeft+"px",width:this.options.imgP+"px",zIndex:0,marginTop:this.options.imgHeight/12+"px"});this.parent.find(".snopshot:nth-child("+next+")").css({opacity:1,left:this.nextLeft+"px",width:this.options.imgP+"px",zIndex:0,marginTop:this.options.imgHeight/12+"px"});this.bind()},bind:function(){this.leftNav=this.parent.find("#shotPrev");this.rightNav=this.parent.find("#shotNext");var _this=this;_this.leftNav.click(function(){_this.turn("right")});_this.rightNav.click(function(){_this.turn("left")})},start:function(){var _this=this;if(_this.timerId){_this.stop()}_this.timerId=setInterval(function(){_this.turn(_this.options.direct)},_this.options.delay)},stop:function(){clearInterval(this.timerId)},turn:function(dir){var _this=this;if(dir=="right"){var page=_this.pageNow-1;if(page<=0){page=_this.total}}else{var page=_this.pageNow+1;if(page>_this.total){page=1}}_this.turnpage(page,dir)},turnpage:function(page,dir){var _this=this;if(_this.locked){return false}_this.locked=true;if(_this.pageNow==page){return false}var run=function(page,dir,t){var pre=page>1?page-1:_this.total;var next=page==_this.total?1:page+1;var preP=pre-1>=1?pre-1:_this.total;var nextN=next+1>_this.total?1:next+1;if(dir=="left"){_this.parent.find(".snopshot:nth-child("+_this.pageNow+")").css({zIndex:0});_this.parent.find(".snopshot:nth-child("+pre+")").css({zIndex:2});if(browserVersion){_this.parent.find(".snopshot:nth-child("+pre+")").find("span").removeClass("elementOverlays").addClass("elementOverlay")}_this.parent.find(".snopshot:nth-child("+pre+")").animate({opacity:1,left:_this.preLeft+"px",width:_this.options.imgP+"px",height:_this.options.imgHeight/1.2+"px",zIndex:2,marginTop:_this.options.imgHeight/12+"px"},t);_this.parent.find(".snopshot:nth-child("+page+")").css({zIndex:3});if(browserVersion){_this.parent.find(".snopshot:nth-child("+page+")").find("span").removeClass("elementOverlay").addClass("elementOverlays")}_this.parent.find(".snopshot:nth-child("+page+")").animate({width:_this.options.imgWidth+"px",height:_this.options.imgHeight+"px",opacity:1,left:_this.pageNowLeft+"px",zIndex:3,marginTop:0},t);_this.parent.find(".snopshot:nth-child("+next+")").css({opacity:0,left:_this.nextNLeft+"px",height:"100px",width:_this.options.imgP+"px",zIndex:2,marginTop:"85px"});if(browserVersion){_this.parent.find(".snopshot:nth-child("+next+")").find("span").removeClass("elementOverlays").addClass("elementOverlay")}_this.parent.find(".snopshot:nth-child("+next+")").animate({opacity:1,left:_this.nextLeft+"px",width:_this.options.imgP+"px",height:_this.options.imgHeight/1.2+"px",zIndex:2,marginTop:_this.options.imgHeight/12+"px"},t,"",function(){if(_this.total===3){_this.locked=false}});if(_this.total!=3){_this.parent.find(".snopshot:nth-child("+preP+")").css({zIndex:0});if(browserVersion){_this.parent.find(".snopshot:nth-child("+preP+")").find("span").removeClass("elementOverlays").addClass("elementOverlay")}_this.parent.find(".snopshot:nth-child("+preP+")").animate({width:_this.options.imgP+"px",opacity:0,left:_this.preNLeft+"px",zIndex:0,marginTop:"85px"},t,"",function(){_this.locked=false})}}else{_this.parent.find(".snopshot:nth-child("+_this.pageNow+")").css({zIndex:0});_this.parent.find(".snopshot:nth-child("+next+")").css({zIndex:2});if(browserVersion){_this.parent.find(".snopshot:nth-child("+next+")").find("span").removeClass("elementOverlays").addClass("elementOverlay")}_this.parent.find(".snopshot:nth-child("+next+")").animate({opacity:1,left:_this.nextLeft+"px",width:_this.options.imgP+"px",height:_this.options.imgHeight/1.2+"px",zIndex:2,marginTop:_this.options.imgHeight/12+"px"},t);
_this.parent.find(".snopshot:nth-child("+page+")").css({zIndex:3});if(browserVersion){_this.parent.find(".snopshot:nth-child("+page+")").find("span").removeClass("elementOverlay").addClass("elementOverlays")}_this.parent.find(".snopshot:nth-child("+page+")").animate({width:_this.options.imgWidth+"px",height:_this.options.imgHeight+"px",opacity:1,left:_this.pageNowLeft+"px",zIndex:3,marginTop:0},t);_this.parent.find(".snopshot:nth-child("+pre+")").css({opacity:0,left:_this.preNLeft+"px",height:"100px",width:_this.options.imgP+"px",zIndex:2,marginTop:"85px"});if(browserVersion){_this.parent.find(".snopshot:nth-child("+pre+")").find("span").removeClass("elementOverlays").addClass("elementOverlay")}_this.parent.find(".snopshot:nth-child("+pre+")").animate({opacity:1,left:_this.preLeft+"px",width:_this.options.imgP+"px",height:_this.options.imgHeight/1.2+"px",zIndex:2,marginTop:_this.options.imgHeight/12+"px"},t,"",function(){if(_this.total===3){_this.locked=false}});if(_this.total!=3){_this.parent.find(".snopshot:nth-child("+nextN+")").css({zIndex:0});if(browserVersion){_this.parent.find(".snopshot:nth-child("+nextN+")").find("span").removeClass("elementOverlays").addClass("elementOverlay")}_this.parent.find(".snopshot:nth-child("+nextN+")").animate({width:_this.options.imgP+"px",opacity:0,left:_this.nextNLeft+"px",zIndex:0,marginTop:"85px"},t,"",function(){_this.locked=false})}}_this.pageNow=page};run(page,dir,_this.options.speed)}};posterTvGrid.options={total:5,offsetPages:3,direct:"left",initPage:1,className:"snapShotWrap",autoWidth:true,width:780,height:450,delay:5000,speed:500,imgP:232};window.posterTvGrid=posterTvGrid})(jQuery);
/*rglSlide*/
(function($) {
    $.fn.rglSlide=function(opt){
        //settings
        var settings=jQuery.extend(true,{
            productScrollWitch:"ul",//相对this选择器，产生滚动条的大div
            list:"ul > li",//相对this选择器，list对象
            row:1,//分组，即行数（垂直滚动的地方用到，之里只为保持代码同步，所以请先修改垂直滚动）
            seeColumn:1,//可视范围分列数目
            step:1,//滚动步长
            speed:"normal",//滚动速度
            orientation:"left",//自动轮播开启时会以设定方向滚动，否则只作为待滚定位，只有左右，left,right
            isAutoPlay:{
                timer:3000,//间隔时间
                rescrollTime:2000,//回滚时间
                reboundState:true//回弹状态，默认回滚开启时自动关闭回弹事件，回滚关闭时自动开启回弹事件，如果要同时关闭请手工关闭
            },//自动播放树配置，false时禁用自动播放功能
            isBtn:{
                step:1,//步长增值
                left:"#left",//向左按钮
                right:"#right",//向右按钮
                disableCss:"disable",//按钮失效css
                isChangeState:true//按钮事件是否触发滚动方向状态
            },//按钮树配置，false时禁用按钮控制功能
            bugD1Width:0,//table布局情况下经常有取不到width值情况，针对此可进行的补丁操作,正常情况下无需启用该补丁
            callback:false//callback:function($this,sTop,splitWidth,d1Width,d2Width){}
        },opt);
        //settings
        var productScrollWitch=settings.productScrollWitch,
            list=settings.list,
            row=settings.row,
            seeColumn=settings.seeColumn,
            step=settings.step,
            speed=settings.speed,
            orientation=settings.orientation,
            aut=settings.isAutoPlay,
            autTimer=aut.timer,
            autRescrollTime=aut.rescrollTime,
            autReboundState=aut.reboundState,
            btn=settings.isBtn,
            btnStep=btn.step,
            btnLeft=$(btn.left),
            btnRight=$(btn.right),
            btnDisableCss=btn.disableCss,
            btnIsChangeState=btn.isChangeState,
            bugD1Width=settings.bugD1Width,
            callback=settings.callback;
        //div
        var $this=$(this);
        var thisselector=$this.selector;
        var d1=$this,
            d2=d1.find(productScrollWitch),
            d3=d1.find(list);
        //d1Width
        var d1Width=d1.width();
        if(bugD1Width!=0){
            d1Width=bugD1Width;
        }else{
            if(d1Width==0){
                alert("Err:d1Width==0");
            }
        }
        //other width size ...
        var d3Size=d3.size();
        var splitWidth=d1Width/seeColumn;
        var stepWidth=step*splitWidth;
        var stepWidthBtn=btnStep*splitWidth;
        var d2Width=splitWidth*Math.ceil(d3Size/row);
        //fall short of nmuber,return false
        if(d2Width<d1Width)return false;
        //bear with
        d2.width(d2Width);
        //
        var flag=true;
        //left
        var left=function(e){
            if(!flag)return false;
            flag=false;
            if(btnIsChangeState){
                orientation="left";
            }
            var _stepWidth=stepWidth;
            if(e){
                _stepWidth=stepWidthBtn;
            }else{
                _stepWidth=stepWidth;
            }
            if((d1Width+d1.scrollLeft())==d2Width){
                btnLeft.addClass(btnDisableCss);
                if(e){
                    flag=true;
                }else{
                    if(autRescrollTime){
                        d1.animate({scrollLeft:0},autRescrollTime,function(){
                            btnLeft.removeClass(btnDisableCss);
                            btnRight.addClass(btnDisableCss);
                            if(callback)callback($this,0,splitWidth,d1Width,d2Width);
                            flag=true;
                        });
                    }else{
                        if(autReboundState){
                            orientation="right";
                            if(aut){
                                autoStop();
                                autoPlay();
                            }
                        }
                        flag=true;
                    }
                }
            }else if(_stepWidth+d1.scrollLeft()>=d2Width-d1Width){
                d1.animate({scrollLeft:d2Width-d1Width},speed,function(){
                    btnLeft.addClass(btnDisableCss);
                    btnRight.removeClass(btnDisableCss);
                    if(callback)callback($this,d2Width-d1Width,splitWidth,d1Width,d2Width);
                    flag=true;
                });
            }else{
                d1.animate({scrollLeft:d1.scrollLeft()+_stepWidth},speed,function(){
                    btnRight.removeClass(btnDisableCss);
                    if(callback)callback($this,d1.scrollLeft(),splitWidth,d1Width,d2Width);
                    flag=true;
                });
            }
            return false;
        };
        //right
        var right=function(e){
            if(!flag)return false;
            flag=false;
            if(btnIsChangeState){
                orientation="right";
            }
            var _stepWidth=stepWidth;
            if(e){
                _stepWidth=stepWidthBtn;
            }else{
                _stepWidth=stepWidth;
            }
            if(d1.scrollLeft()==0){
                btnRight.addClass(btnDisableCss);
                if(e){
                    flag=true;
                }else{
                    if(autRescrollTime){
                        d1.animate({scrollLeft:d2Width-d1Width},autRescrollTime,function(){
                            btnRight.removeClass(btnDisableCss);
                            btnLeft.addClass(btnDisableCss);
                            if(callback)callback($this,d2Width-d1Width,splitWidth,d1Width,d2Width);
                            flag=true;
                        });
                    }else{
                        if(autReboundState){
                            orientation="left";
                            if(aut){
                                autoStop();
                                autoPlay();
                            }
                        }
                        flag=true;
                    }
                }
            }else if((d1.scrollLeft())<=_stepWidth){
                d1.animate({scrollLeft:0},speed,function(){
                    btnRight.addClass(btnDisableCss);
                    btnLeft.removeClass(btnDisableCss);
                    if(callback)callback($this,0,splitWidth,d1Width,d2Width);
                    flag=true;
                });
            }else{
                d1.animate({scrollLeft:d1.scrollLeft()-_stepWidth},speed,function(){
                    btnLeft.removeClass(btnDisableCss);
                    if(callback)callback($this,d1.scrollLeft(),splitWidth,d1Width,d2Width);
                    flag=true;
                });
            }
            return false;
        };

        //gotoscroll
        var gotoscroll=function(xy){
            if(!flag)return false;
            flag=false;
            d1.animate({scrollLeft:xy},speed,function(){
                if(callback)callback($this,xy,splitWidth,d1Width,d2Width);
                if(xy==0){
                    btnRight.addClass(btnDisableCss);
                    btnLeft.removeClass(btnDisableCss);
                }else if(xy==(d2Width-d1Width)){
                    btnRight.removeClass(btnDisableCss);
                    btnLeft.addClass(btnDisableCss);
                }else{
                    btnRight.removeClass(btnDisableCss);
                    btnLeft.removeClass(btnDisableCss);
                }
                flag=true;
            });
            return false;
        };
        //timer
        var timerID;
        var autoPlay=function(){
            switch(orientation)
            {
                case "left":timerID=window.setInterval(left,autTimer);break;
                case "right":timerID=window.setInterval(right,autTimer);break;
            }
            return false;
        };
        var autoStop = function(){
            window.clearInterval(timerID);
            return false;
        };
        if(aut){
            //ready autoPlay
            autoPlay();
            //
            $this.hover(autoStop,autoPlay);
            if(btn){
                btnLeft.hover(autoStop,autoPlay);
                btnRight.hover(autoStop,autoPlay);
            }
        }
        //btn
        if(btn){
            btnLeft.click(left);
            btnRight.click(right);
            switch(orientation)
            {
                case "left":
                    //避免动画的同时初始化callback
                    d1.scrollLeft(0);gotoscroll(0);
                    btnRight.addClass(btnDisableCss);
                    break;
                case "right":
                    //避免动画的同时初始化callback
                    d1.scrollLeft(d2Width-d1Width);gotoscroll(d2Width-d1Width);
                    btnLeft.addClass(btnDisableCss);
                    break;
            }
        }
        if(!aut){
            return {$this:$this,autoStop:false,autoPlay:false,gotoscroll:gotoscroll};
        }
        return {$this:$this,autoStop:autoStop,autoPlay:autoPlay,gotoscroll:gotoscroll};
    };
})(jQuery);