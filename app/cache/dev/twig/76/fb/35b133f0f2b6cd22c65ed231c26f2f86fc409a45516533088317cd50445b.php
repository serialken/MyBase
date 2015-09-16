<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_76fb35b133f0f2b6cd22c65ed231c26f2f86fc409a45516533088317cd50445b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  42 => 12,  32 => 6,  24 => 2,  133 => 36,  112 => 27,  98 => 26,  70 => 26,  67 => 20,  61 => 18,  58 => 17,  35 => 8,  28 => 6,  22 => 3,  19 => 1,  157 => 63,  153 => 62,  149 => 61,  146 => 60,  144 => 59,  141 => 58,  134 => 46,  127 => 35,  122 => 33,  108 => 58,  93 => 46,  86 => 42,  80 => 38,  75 => 28,  68 => 31,  62 => 24,  54 => 27,  38 => 14,  36 => 10,  23 => 2,  63 => 19,  55 => 20,  52 => 15,  46 => 14,  43 => 11,  40 => 10,  33 => 7,  30 => 5,  154 => 54,  147 => 50,  140 => 46,  137 => 47,  131 => 42,  128 => 41,  125 => 11,  123 => 39,  119 => 37,  116 => 29,  114 => 35,  110 => 70,  107 => 32,  96 => 48,  92 => 25,  87 => 28,  85 => 27,  82 => 26,  76 => 22,  66 => 25,  60 => 18,  53 => 16,  50 => 15,  48 => 14,  44 => 13,  41 => 12,  34 => 8,  31 => 8,  26 => 3,);
    }
}
