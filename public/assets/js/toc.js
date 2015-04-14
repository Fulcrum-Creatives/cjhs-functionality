/*!
 * toc - jQuery Table of Contents Plugin
 * v0.1.2
 * http://projects.jga.me/toc/
 * copyright Greg Allen 2013
 * MIT License
*/
(function(t){t.fn.toc=function(e){var n,i=this,r=t.extend({},jQuery.fn.toc.defaults,e),o=t(r.container),a=t(r.selectors,o),l=[],h=r.prefix+"-active",s=function(e){if(r.smoothScrolling){e.preventDefault();var n=t(e.target).attr("href"),o=t(n);t("body,html").animate({scrollTop:o.offset().top},400,"swing",function(){location.hash=n})}t("li",i).removeClass(h),t(e.target).parent().addClass(h)},c=function(){n&&clearTimeout(n),n=setTimeout(function(){for(var e,n=t(window).scrollTop(),o=0,a=l.length;a>o;o++)if(l[o]>=n){t("li",i).removeClass(h),e=t("li:eq("+(o-1)+")",i).addClass(h),r.onHighlight(e);break}},50)};return r.highlightOnScroll&&(t(window).bind("scroll",c),c()),this.each(function(){var e=t(this),n=t("<ul/>");a.each(function(i,o){var a=t(o);l.push(a.offset().top-r.highlightOffset),t("<span/>").attr("id",r.anchorName(i,o,r.prefix)).insertBefore(a);var h=t("<a/>").text(r.headerText(i,o,a)).attr("href","#"+r.anchorName(i,o,r.prefix)).bind("click",function(n){s(n),e.trigger("selected",t(this).attr("href"))}),c=t("<li/>").addClass(r.itemClass(i,o,a,r.prefix)).append(h);n.append(c)}),e.html(n)})},jQuery.fn.toc.defaults={container:"body",selectors:"h1,h2,h3",smoothScrolling:!0,prefix:"toc",onHighlight:function(){},highlightOnScroll:!0,highlightOffset:100,anchorName:function(t,e,n){return n+t},headerText:function(t,e,n){return n.text()},itemClass:function(t,e,n,i){return i+"-"+n[0].tagName.toLowerCase()}}})(jQuery);
(function ( $ ) {
    "use strict";

    $(function () {
        $( '<div class="toc"><h3 class="toc__heading">Contents</h3><div id="toc" class="toc__container"></div></div>' ).appendTo( '.entry-header' );
        $('#toc').toc({
            'selectors': 'h1,h2,h3,h4,h5,h6', //elements to use as headings
            'container': '.entry-content', //element to find all selectors in
            'smoothScrolling': true, //enable or disable smooth scrolling on click
            'prefix': 'toc', //prefix for anchor tags and class names
            'onHighlight': function(el) {}, //called when a new section is highlighted 
            'highlightOnScroll': true, //add class to heading that is currently in focus
            'highlightOffset': 100, //offset to trigger the next headline
            'anchorName': function(i, heading, prefix) { //custom function for anchor name
                return prefix+i;
            },
            'headerText': function(i, heading, $heading) { //custom function building the header-item text
                return $heading.text();
            },
        'itemClass': function(i, heading, $heading, prefix) { // custom function for item class
          return $heading[0].tagName.toLowerCase();
        }
        });

    });

}(jQuery));