!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}((function(e){"use strict";e.defineMode("eiffel",(function(){function e(e){for(var t={},r=0,n=e.length;r<n;++r)t[e[r]]=!0;return t}var t=e(["note","across","when","variant","until","unique","undefine","then","strip","select","retry","rescue","require","rename","reference","redefine","prefix","once","old","obsolete","loop","local","like","is","inspect","infix","include","if","frozen","from","external","export","ensure","end","elseif","else","do","creation","create","check","alias","agent","separate","invariant","inherit","indexing","feature","expanded","deferred","class","Void","True","Result","Precursor","False","Current","create","attached","detachable","as","and","implies","not","or"]),r=e([":=","and then","and","or","<<",">>"]);function n(e,t){if(e.eatSpace())return null;var r,n,i,o=e.next();return'"'==o||"'"==o?function(e,t,r){return r.tokenize.push(e),e(t,r)}((r=o,n="string",function(e,t){for(var o,a=!1;null!=(o=e.next());){if(o==r&&(i||!a)){t.tokenize.pop();break}a=!a&&"%"==o}return n}),e,t):"-"==o&&e.eat("-")?(e.skipToEnd(),"comment"):":"==o&&e.eat("=")?"operator":/[0-9]/.test(o)?(e.eatWhile(/[xXbBCc0-9\.]/),e.eat(/[\?\!]/),"ident"):/[a-zA-Z_0-9]/.test(o)?(e.eatWhile(/[a-zA-Z_0-9]/),e.eat(/[\?\!]/),"ident"):/[=+\-\/*^%<>~]/.test(o)?(e.eatWhile(/[=+\-\/*^%<>~]/),"operator"):null}return{startState:function(){return{tokenize:[n]}},token:function(e,n){var i=n.tokenize[n.tokenize.length-1](e,n);if("ident"==i){var o=e.current();i=t.propertyIsEnumerable(e.current())?"keyword":r.propertyIsEnumerable(e.current())?"operator":/^[A-Z][A-Z_0-9]*$/g.test(o)?"tag":/^0[bB][0-1]+$/g.test(o)||/^0[cC][0-7]+$/g.test(o)||/^0[xX][a-fA-F0-9]+$/g.test(o)||/^([0-9]+\.[0-9]*)|([0-9]*\.[0-9]+)$/g.test(o)||/^[0-9]+$/g.test(o)?"number":"variable"}return i},lineComment:"--"}})),e.defineMIME("text/x-eiffel","eiffel")}));