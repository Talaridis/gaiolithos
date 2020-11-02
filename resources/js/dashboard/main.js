Element.prototype.findParent = function (loops) {
    let parent = this;

    for (let i = 0; i < loops; i++) {
        parent = parent.parentElement;
    }

    return parent;
}, false;


Element.prototype.findChild = function (loops) {
    let child = this;

    for (let i = 0; i < loops; i++) {
        child = child.firstElementChild;
    }

    return child;
}, false;
