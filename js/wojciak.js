/*global _li*/

(function (module) {
    'use strict';

    var moduleName = module.get('name'),
        init,
        touch;

    init = function () {
        touch();
    };

    touch = function () {
        document.addEventListener('touchstart', function () {
        }, true);
    };

    module.subscribe(moduleName + '.init', 'main', init);

}(_li.define('wojciak')));
