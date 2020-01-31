var JQ = jQuery.noConflict();
var timer;

var settings = {
    'window': JQ(window),
    'head': JQ('head'),
    'body_html': JQ('body, html'),
    'body': JQ('body'),
    'main_css': JQ('#main-css')
};

function setGroupMaxHeight(_selector) {
    settings.main_css.load(function(){
        _thiselement    = JQ(this);
        _elementsHeight = JQ(_selector).map(function(){
            return _thiselement.height();
        }).get();
        _maxElemenHeight = Math.max.apply(null, _elementsHeight);
        JQ(_selector).height(_maxElemenHeight);
    });
}

JQ(document).ready(function(){

    settings.window.on('load', function(){
    });

});